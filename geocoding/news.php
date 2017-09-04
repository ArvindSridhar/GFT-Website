<?php

include_once('httpful.phar');
include_once('config.php');

header('Content-Type: text/html; charset=utf-8');
getNewsObjects();

function getNewsObjects()
{
    $uri = "http://api.nytimes.com/svc/news/v3/content/all/all.json?api-key=$newsapikey";
    $rawresponsejson = \Httpful\Request::get($uri)->send();
    $responsejson = $rawresponsejson.raw_body;
    parseArticleObjectsFromJson($responsejson);
}

function parseArticleObjectsFromJson($jsonToParse)
{
   $jsonToParse = mb_convert_encoding($jsonToParse, "HTML-ENTITIES", "UTF-8");
   $jsonToParse = str_ireplace("raw_body","",$jsonToParse);
   $jsonToParse = str_ireplace("â€˜","&rsquo;",$jsonToParse);
   $jsonobject = json_decode($jsonToParse, TRUE);
   $results = $jsonobject['results'];
   printArticleObjects($results);
}

function printArticleObjects($results)
{
   $resultsnum = sizeof($results);
   for ($i=0;$i<=$resultsnum;$i++)
   {
      echo ("<h2>".$results[$i]['title'])."</h2>";
      echo ("<h6>".$results[$i]['caption'])."</h6>";
      echo ("<p>".$results[$i]['abstract'])."</p>";
      echo ("<a target=\"blank\" href=\"".$results[$i]['url'])."\">Read Original Article</a><br><br>";
   }
}

?>