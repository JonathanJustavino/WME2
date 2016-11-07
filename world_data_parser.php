<?php
  class WorldDataParser{

    public function parseCSV($path)
    {
      $data = array();
      $handle = fopen($path, 'r');
      echo "created an array" .  "\xA";
      while( ($elem = fgetcsv($handle)) !== false ) {
          $data[] = $elem;
      }
      return $data;
    }

    public function saveXML($value='')
    {
      # code...
    }

    public function printXML($value='')
    {
      # code...
    }
  }
?>
