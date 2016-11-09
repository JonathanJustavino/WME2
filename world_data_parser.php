<?php
  class WorldDataParser{

    public function parseCSV($path)
    {
      $data = array();
      $handle = fopen($path, 'r');
      while( ($elem = fgetcsv($handle)) !== false ) {
          $data[] = $elem;
      }
      fclose($handle);
      return $data;

    }

    public function saveXML($array)
    {
      $simpleXML = new SimpleXMLElement('<data></data>');
      foreach ($array as $key => $value) {
        foreach ($value as $valkey => $valprop) {
          $trimmed = rtrim($valprop);
          $simpleXML->addChild("$trimmed");
        }
      }
      //echo $simpleXML->asXML();
    }

    public function printXML($value='')
    {
      # code...
    }
  }
?>
