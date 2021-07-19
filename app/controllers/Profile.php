<?php

class Profile extends Controller
{
  public function index()
  {
    $data['judul'] = 'Profile | ShoppingSkuy';
    $this->view('includes/head', $data);
    $this->view('profiles/profiles', $data);
    $this->view('includes/footer');
  }
}
