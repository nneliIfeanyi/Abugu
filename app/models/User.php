<?php
  class User {
    private $db;

    public function __construct(){
      $this->db = new Database;
    }

    // Add User / Register
    public function register($data){
      // Prepare Query
      $this->db->query('INSERT INTO admissions (regno, fname, mname, lname, sex, programme, email,password) 
      VALUES (:regno, :fname, :mname, :lname, :sex, :programme, :email, :password)');

      // Bind Values
      $this->db->bind(':regno', $data['regno']);
      $this->db->bind(':fname', $data['fname']);
      $this->db->bind(':mname', $data['mname']);
      $this->db->bind(':lname', $data['lname']);
      $this->db->bind(':sex', $data['sex']);
      $this->db->bind(':programme', $data['programme']);
      $this->db->bind(':email', $data['email']);
      $this->db->bind(':password', $data['password']);
      
      //Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }

    // Find USer BY Email
    public function findUserByEmail($email){
      $this->db->query("SELECT * FROM admissions WHERE email = :email");
      $this->db->bind(':email', $email);

      $row = $this->db->single();

      //Check Rows
      if($this->db->rowCount() > 0){
        return true;
      } else {
        return false;
      }
    }

    // Login / Authenticate User
    public function login($email, $password){
      $this->db->query("SELECT * FROM admissions WHERE email = :email");
      $this->db->bind(':email', $email);

      $row = $this->db->single();
      
      $hashed_password = $row->password;
      if(password_verify($password, $hashed_password)){
        return $row;
      } else {
        return false;
      }
    }

    // Find User By ID
    public function getUserById($id){
      $this->db->query("SELECT * FROM admissions WHERE id = :id");
      $this->db->bind(':id', $id);

      $row = $this->db->single();

      return $row;
    }
  }