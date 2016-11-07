<? echo "World Data Parser Class\n";?>

<?php
  class WorldDataParser{

    public function parseCSV($path = './world_data.csv')
    {
      $handle = fopen($path, 'r');
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
