<?php
class Product_model
{
	private $db;
	public function __construct()
	{
		$this->db = new Database;
	}

	public function getProductByLatestUpload()
  {
		$query = "SELECT * FROM product ORDER BY prd_date DESC";
    $this->db->query($query);
    return $this->db->resultSet();
  }

	public function getProductByHighestView()
  {
		$query = "SELECT * FROM product ORDER BY prd_open_count DESC";
    $this->db->query($query);
    return $this->db->resultSet();
  }
	
	public function getProductByHighestBuy()
  {
		$query = "SELECT * FROM product ORDER BY prd_buy_count DESC";
    $this->db->query($query);
    return $this->db->resultSet();
  }
}
