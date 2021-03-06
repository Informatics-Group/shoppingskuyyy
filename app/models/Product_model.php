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

  public function getProdutDetailById($id)
  {
    $this->db->query('SELECT * FROM product WHERE id=:id');
    $this->db->bind('id', $id);
    return $this->db->single();
  }

<<<<<<< HEAD
  public function updateViewProduct($data)
  {
    $query = "UPDATE product SET :prd_open_count WHERE id = :id";
=======
  public function addViewProduct($data)
  {
    $query = "UPDATE product SET prd_open_count = :prd_open_count WHERE id = :id";
>>>>>>> 544aa0b412a90d035d3f6d5166f81c361b532a01

    $this->db->query($query);
    $this->db->bind('prd_open_count', $data['prd_open_count']);
    $this->db->bind('id', $data['id']);

    $this->db->execute();

    return $this->db->rowCount();
  }
}
