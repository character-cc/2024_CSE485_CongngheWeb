<?php
include ("./models/Search.php");
class SearchController
{
    public function search($variable1)
    {
        $s = new Search();
        if(isset($_POST['contact'])){
            $contact = $_POST['contact'];
            $input_search = $_POST['search'];
            $_SESSION['contact'] = $contact;
            $_SESSION['search'] = $input_search;
        }else{
            $contact = $_SESSION['contact'];
            $input_search = $_SESSION['search'];
        }
        $data = $s ->getDataBySearch($contact,$input_search);
        include ("./views/search/result_search.php");
    }
}

?>