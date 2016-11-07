<?php
  class WorldDataParser{

    public function parseCSV($path)
    {
      $handle = fopen($path, 'r');
      echo "created an array" .  "\xA";
      return fgetcsv($handle, 1000,",");
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
