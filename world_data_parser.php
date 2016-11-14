<?php
  class WorldDataParser{

    public function parseCSV($path){
      $data = array();
      $handle = fopen($path, 'r');
      while( ($elem = fgetcsv($handle)) !== false ) {
          $data[] = $elem;
      }
      fclose($handle);
      return $data;
    }

    public function saveXML($array){
      $simpleXML = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><Countries></Countries>');
      $identifyArray = array_map('trim',array_shift($array));
      $i = 0;
      foreach ($array as $key => $value) {
        foreach ($value as $valkey => $valprop) {
          $entry = $identifyArray[$i];
          $trimmed = rtrim($valprop);
          $tag = $simpleXML->addChild($entry);
          //$element = $tag->addChild($trimmed);
          $tag[0] = $trimmed;
          $i += 1;
        }
        $i = $i%14;
      }
      $simpleXML->asXML('./world_data.xml');
      return $simpleXML;
    }


    public function printXML($xmlPath, $xsltPath){
        $xsldoc = new DOMDocument();
        $xsldoc->load($xsltPath);

        $xmldoc = new DOMDocument();
        $xmldoc->load($xmlPath);

        $xsl = new XSLTProcessor();
        $xsl->importStylesheet($xsldoc);
        echo $xsl->transformToXML($xmldoc);
    }
  }
?>
