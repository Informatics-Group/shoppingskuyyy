<?php
class Home extends Controller{ // jangan lupa exnteds class Controller
  
  public function index(){ // method defaultnya
    $data['judul'] = 'Home';
    $data['getProductByLatestUpload'] = json_decode(json_encode($this->model('Product_model')->getProductByLatestUpload()),true);
    $data['getProductByHighestView'] = json_decode(json_encode($this->model('Product_model')->getProductByHighestView()),true);
    $data['getProductByHighestBuy'] = json_decode(json_encode($this->model('Product_model')->getProductByHighestBuy()),true);
    $this->view('includes/head', $data);
    $this->view('home/index', $data);
    $this->view('includes/footer');
  }
  public function detail(){
    $data['judul'] = 'Home';
    $this->view('includes/head', $data);
    $this->view('home/detail');
    $this->view('includes/footer');
  }
}