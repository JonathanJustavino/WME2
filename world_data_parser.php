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
      $simpleXML = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><data></data>');
      foreach ($array as $key => $value) {
        foreach ($value as $valkey => $valprop) {
          $trimmed = rtrim($valprop);
          $simpleXML->addChild("$trimmed");
        }
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
