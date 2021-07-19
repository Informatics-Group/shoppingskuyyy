<?php

class Cart extends Controller
{
  public function index()
  {
    $data['judul'] = 'Cart | ShoppingSkuy';
    $this->view('includes/head', $data);
    $this->view('cart/cart', $data);
    $this->view('includes/footer');
  }
}
