<?php
class Home extends Controller
{ // jangan lupa exnteds class Controller

  public function index()
  { // method defaultnya
    $data['judul'] = 'Home';
    $data['getProductByLatestUpload'] = json_decode(json_encode($this->model('Product_model')->getProductByLatestUpload()), true);
    $data['getProductByHighestView'] = json_decode(json_encode($this->model('Product_model')->getProductByHighestView()), true);
    $data['getProductByHighestBuy'] = json_decode(json_encode($this->model('Product_model')->getProductByHighestBuy()), true);
    $this->view('includes/head', $data);
    $this->view('home/index', $data);
    $this->view('includes/footer');
  }

  public function detail($id)
  {
    $data['judul'] = 'Home';
    $data['getProdutDetailById'] = json_decode(json_encode($this->model('Product_model')->getProdutDetailById($id)), true);
    $this->view('includes/head', $data);
    $this->view('home/detail', $data);
    $this->view('includes/footer');
  }

  public function addtocart($id)
  {
    if (isset($_SESSION['newcart'][$id])) {
      $_SESSION['newcart'][$id] += 1;
    } else {
      $_SESSION['newcart'][$id] = 1;
    }
    echo "<pre>";
    print_r($_SESSION['newcart']);
    echo "</pre>";
    header('location:' . URLROOT . '/home/detail/' . $id);
  }
}
