<?php
  require 'world_data_parser.php';

  $myParser = new WorldDataParser();
  $pathCSV = './world_data.csv';
  $pathXML = './world_data.xml';
  $pathXSLT = './world_data.xslt';

  $data = $myParser->parseCSV($pathCSV);

  $myParser->saveXML($data);
  $table = $myParser->printXML($pathXML, $pathXSLT);
 ?>
