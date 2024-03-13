<?php
require_once APP.'/app/models/News.php';
require_once APP.'/app/models/Category.php';
class Postservices
{
    public function getALLCategory()
    {
        try{
            $conn = mysqli_connect('localhost', 'root', '', 'contacttlu');
            $sql = "SELECT * FROM category";
            $result = mysqli_query($conn,$sql);
            $categorys=[] ;
            if(mysqli_num_rows($result)>0){
                while ($row = mysqli_fetch_assoc($result)){
                    $category = new Category($row['category_id'],$row['category_name']);
                    $categorys[] = $category;
                }
            }
            return $categorys;
        }catch (mysqli_sql_exception $e) {
            return $categorys=[];
            echo "Đã xảy ra lỗi: " . $e->getMessage();
        }

    }
    public function getALLNews()
    {
        try{
            $conn = mysqli_connect('localhost', 'root', '', 'contacttlu');
            $sql = "SELECT * FROM news";
            $result = mysqli_query($conn,$sql);
            $newss=[] ;
            if(mysqli_num_rows($result)>0){
                while ($row = mysqli_fetch_assoc($result)){
                    $news = new News($row['news_id'],$row['title'],$row['content'],$row['publish_date'],$row['link_img'],$row['category_id']);
                    $newss[] = $news;
                }
            }
            return $newss;
        }catch (mysqli_sql_exception $e) {
            return $newss=[];
            echo "Đã xảy ra lỗi: " . $e->getMessage();
        }
    }
    public function getAllPosts()
    {
        $posts = [
            ['controller' => 'gioithieu', 'name' => 'Thông tin khoa'],
            ['controller' => 'tintuc', 'name' => 'Thông tin bộ môn'],
            ['controller' => 'tuyensinh', 'name' => 'Danh bạ điện tử'],
            ['controller' => 'news', 'name' => 'Tin tức & thông báo'],

        ];
        return $posts;
    }
}

?>