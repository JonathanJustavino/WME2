<?php
  require 'world_data_parser.php';

  $myparser = new WorldDataParser();
  $pathXML = './world_data.xml';
  $pathXSLT = './world_data.xslt';

  $data = $myparser->parseCSV;
  $xmlData = $myParser->saveXML($data);

  $table = $myparser->printXML($mlData, $pathXSLT);
  echo $table;
 ?>
