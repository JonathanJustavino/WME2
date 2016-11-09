<?php
require 'world_data_parser.php';

$myParser = new WorldDataParser;
$path = './world_data.csv';
$data =  $myParser->parseCSV($path);

$xmlData = $myParser->saveXML($data);

$parser = xml_parser_create();
$result = xml_parse($parser, $xmlData);

if($result === 1){
  echo "true";
  return true;
}
echo "false";
return false;

 ?>
