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
          $simpleXML->addChild("$valprop");
        }
      }
      echo $simpleXML->asXML();
    }

    public function printXML($value='')
    {
      # code...
    }
  }
?>
