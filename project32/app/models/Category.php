<?php
class Category
{
    private $category_id;
    private $category_name;

    public function __construct($category_id, $category_name)
    {
        $this->category_id = $category_id;
        $this->category_name = $category_name;
    }

    public function getCategoryID()
    {
        return $this->category_id;
    }

    public function setCategoryID($category_id)
    {
        $this->category_id = $category_id;
    }

    public function getCategoryName()
    {
        return $this->category_name;
    }

    public function setCategoryName($category_name)
    {
        $this->category_name = $category_name;
    }
}