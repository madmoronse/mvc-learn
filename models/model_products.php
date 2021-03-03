<?php 
Class Model_Products Extends Model 
{
    public function getCategory()
    {
        $category = $this->db->query("SELECT * FROM category");
        
        return $category->rows;
    }
}