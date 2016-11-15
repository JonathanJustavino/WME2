<?php
  require_once 'world_data_parser.php';

  $myParser = new WorldDataParser;
  $path = './world_data.csv';
  $data =  $myParser->parseCSV($path);

  $xmlData = $myParser->saveXML($data);

  $parser = xml_parser_create();
  $result = xml_parse($parser, $xmlData);

  if($result === 1){
    echo "XML Savestatus: erfolgreich (1)";
    return true;
  }
  echo "XML Savestatus: fehlgeschlagen (0)";
  return false;

 ?>
