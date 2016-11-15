<?php
  require_once 'world_data_parser.php';

  $myParser = new WorldDataParser;
  $path = './world_data.csv';
  $data =  $myParser->parseCSV($path);

  echo "<pre>";
  print_r($data);
  echo "</pre>";
 ?>
