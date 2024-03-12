<?php
class PostService{
    public function getAllPosts(){
        $posts = [
            ['controller'=>'gioithieu', 'name'=>'Thông tin khoa'],
            ['controller'=>'tintuc', 'name'=>'Thông tin bộ môn'],
            ['controller'=>'tuyensinh', 'name'=>'Danh bạ điện tử'],


        ];
        return $posts;
    }
}