<?php
class User
{
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  // Add User / Register
  public function register($data)
  {
    // Prepare Query
    $this->db->query('INSERT INTO admissions (regno, fname, mname, lname, sex, programme, school_of, department, modeOfStudy, highestQualification, email, phone, password) 
      VALUES (:regno, :fname, :mname, :lname, :sex, :programme, :school_of, :department, :modeOfStudy, :highestQualification, :email, :phone, :password)');

    // Bind Values
    $this->db->bind(':regno', $data['regno']);
    $this->db->bind(':fname', $data['fname']);
    $this->db->bind(':mname', $data['mname']);
    $this->db->bind(':lname', $data['lname']);
    $this->db->bind(':sex', $data['sex']);
    $this->db->bind(':programme', $data['programme']);
    $this->db->bind(':school_of', $data['school_of']);
    $this->db->bind(':department', $data['department']);
    $this->db->bind(':modeOfStudy', $data['modeOfStudy']);
    $this->db->bind(':highestQualification', $data['highestQualification']);
    $this->db->bind(':email', $data['email']);
    $this->db->bind(':phone', $data['phone']);
    $this->db->bind(':password', $data['password']);

    //Execute
    if ($this->db->execute()) {
      return true;
    } else {
      return false;
    }
  }

  public function register_bio_data($data)
  {
    $this->db->query('UPDATE admissions SET dob = :dob, stateOfOrigin = :stateOfOrigin, lga = :lga, nationality = :nationality, religion = :religion, m_status = :m_status, residence = :residence, phone = :phone, phone2 = :phone2 WHERE id = :id');

    // Bind Values
    $this->db->bind(':id', $data['id']);
    $this->db->bind(':dob', $data['dob']);
    $this->db->bind(':stateOfOrigin', $data['stateOfOrigin']);
    $this->db->bind(':lga', $data['lga']);
    $this->db->bind(':nationality', $data['nationality']);
    $this->db->bind(':religion', $data['religion']);
    $this->db->bind(':m_status', $data['m_status']);
    $this->db->bind(':residence', $data['residence']);
    $this->db->bind(':phone', $data['phone']);
    $this->db->bind(':phone2', $data['phone2']);

    //Execute
    if ($this->db->execute()) {
      return true;
    } else {
      return false;
    }
  }

  public function register_next_kin($data)
  {
    // Prepare Query
    $this->db->query('UPDATE admissions SET next_kin = :next_kin, phone3 = :phone3, address = :address WHERE id = :id');

    // Bind Values
    $this->db->bind(':id', $data['id']);
    $this->db->bind(':next_kin', $data['next_kin']);
    $this->db->bind(':phone3', $data['phone3']);
    $this->db->bind(':address', $data['address']);

    //Execute
    if ($this->db->execute()) {
      return true;
    } else {
      return false;
    }
  }


  public function register_passport($db_image_file, $id)
  {
    // Prepare Query
    $this->db->query('UPDATE admissions SET passport = :passport WHERE id = :id');

    // Bind Values
    $this->db->bind(':id', $id);
    $this->db->bind(':passport', $db_image_file);

    //Execute
    if ($this->db->execute()) {
      return true;
    } else {
      return false;
    }
  }

  public function register_olevel($db_image_file, $id)
  {
    // Prepare Query
    $this->db->query('UPDATE admissions SET olevelDoc = :olevelDoc WHERE id = :id');

    // Bind Values
    $this->db->bind(':id', $id);
    $this->db->bind(':olevelDoc', $db_image_file);

    //Execute
    if ($this->db->execute()) {
      return true;
    } else {
      return false;
    }
  }
  public function register_origin($db_image_file, $id)
  {
    // Prepare Query
    $this->db->query('UPDATE admissions SET originDoc = :originDoc WHERE id = :id');

    // Bind Values
    $this->db->bind(':id', $id);
    $this->db->bind(':originDoc', $db_image_file);

    //Execute
    if ($this->db->execute()) {
      return true;
    } else {
      return false;
    }
  }
  public function register_birth($db_image_file, $id)
  {
    // Prepare Query
    $this->db->query('UPDATE admissions SET birthDoc = :birthDoc WHERE id = :id');

    // Bind Values
    $this->db->bind(':id', $id);
    $this->db->bind(':birthDoc', $db_image_file);

    //Execute
    if ($this->db->execute()) {
      return true;
    } else {
      return false;
    }
  }
  // Find USer BY Email
  public function findUserByEmail($email)
  {
    $this->db->query("SELECT * FROM admissions WHERE email = :email");
    $this->db->bind(':email', $email);

    $row = $this->db->single();

    //Check Rows
    if ($this->db->rowCount() > 0) {
      return true;
    } else {
      return false;
    }
  }

  // Login / Authenticate User
  public function login($email, $password)
  {
    $this->db->query("SELECT * FROM admissions WHERE email = :email");
    $this->db->bind(':email', $email);

    $row = $this->db->single();

    $hashed_password = $row->password;
    if (password_verify($password, $hashed_password)) {
      return $row;
    } else {
      return false;
    }
  }

  // Find User By ID
  public function getUserById($id)
  {
    $this->db->query("SELECT * FROM admissions WHERE id = :id");
    $this->db->bind(':id', $id);

    $row = $this->db->single();

    return $row;
  }
}
