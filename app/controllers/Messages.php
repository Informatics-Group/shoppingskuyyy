<?php

class Messages extends Controller
{
  public function index()
  {
    $data['judul'] = 'Profile | ShoppingSkuy';
    $this->view('includes/head', $data);
    $this->view('messages/messages', $data);
    $this->view('includes/footer');
  }
}
