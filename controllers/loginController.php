<?php

  class loginController extends controller{

    public function __construct(){
      parent::__construct();
    }

    public function index(){
      $dados = array();

      $this->loadView('login', $dados);
    }

  }

 ?>
