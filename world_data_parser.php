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
