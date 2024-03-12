<?php
include ("./models/Search.php");
class SearchController
{
    public function search($variable1)
    {
        $s = new Search();
        $data = $s ->getDataBySearch();
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}

?>