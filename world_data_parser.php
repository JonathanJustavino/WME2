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

    /**
    * Use array_shift() to take first elem
    * array_unshift to put it back
    *
    */

    public function saveXML($array)
    {
      $simpleXML = new SimpleXMLElement('<data></data>');
      $first = array_shift($array);
      foreach ($first as $key => $value) {
          $simpleXML->addChild("$value");
      }
      foreach ($array as $key => $value) {
        foreach ($value as $valkey => $valprop) {
          $trimmed = trim($valprop);
          $simpleXML->addChild("$trimmed");
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
