<?php
  class Student extends Controller{
  	public $details;
  	public $postModel;
  	public $userModel;
    public function __construct(){
      if(!isset($_SESSION['user_id'])){
        redirect('users/login');
      }
     
      // Load Models
      $this->postModel = $this->model('Post');
      $this->userModel = $this->model('User');
      $this->details = $this->userModel->getUserById($_SESSION['user_id']);
    }

    // Load All Posts
    public function index(){
      //$posts = $this->postModel->getPosts();

      $data = [
      //  'posts' => $posts
      ];
      
      $this->view('student/index', $data);
    }

     public function profile(){
      //$details = $this->userModel->getUserById($id);

      $data = [
      	//'details' => $details
      ];
      
      $this->view('student/profile', $data);
    }

}