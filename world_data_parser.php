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
      $simpleXML = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><countries></countries>');
      $identifyArray = array_map('trim',array_shift($array));
      foreach ($identifyArray as $key => $value) {
        $identifyArray[$key] = str_replace(' ', '', $value);
      }
      $i = 0;
      foreach ($array as $key => $value) {
        $countryTag = $simpleXML->addChild('country');
        foreach ($value as $valkey => $valprop) {
          $entry = $identifyArray[$i];
          $trimmed = rtrim($valprop);
          $data = $countryTag[0]->addChild($entry);
          $data[0] = $trimmed;
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
