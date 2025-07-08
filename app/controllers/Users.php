<?php
class Users extends Controller
{
  public $userModel;
  public function __construct()
  {
    $this->userModel = $this->model('User');
  }

  public function index()
  {
    redirect('pages');
  }

  public function register()
  {
    // Check if POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      // Sanitize POST
      $_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

      $data = [
        'fname' => trim($_POST['fname']),
        'mname' => trim($_POST['mname']),
        'lname' => trim($_POST['lname']),
        'regno' => trim($_POST['regno']),
        'email' => trim($_POST['email']),
        'password' => trim($_POST['password']),
        'c_password' => trim($_POST['c_password']),
        'sex' => trim($_POST['sex']),
        'programme' => trim($_POST['programme']),
        'programme' => trim($_POST['programme']),
        'school_of' => trim($_POST['school_of']),
        'department' => trim($_POST['department']),
        'modeOfStudy' => trim($_POST['modeOfStudy']),
        'highestQualification' => trim($_POST['highestQualification']),
        'email_err' => '',
        'password_err' => '',
        'c_password_err' => ''
      ];

      if ($this->userModel->findUserByEmail($data['email'])) {
        $data['email_err'] = 'Email is already taken.';
        $this->view('pages/apply', $data);
      } elseif (strlen($data['password']) < 6) {
        $data['password_err'] = 'Password must have atleast 6 characters.';
        $this->view('pages/apply', $data);
      } elseif ($data['password'] != $data['c_password']) {
        $data['c_password_err'] = 'Password do not match.';
        $this->view('pages/apply', $data);
      } else {
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
        //Execute
        if ($this->userModel->register($data)) {
          // Redirect to login
          flash('register_success', 'You are now registered and can log in to proceed');
          redirect('users/login');
        } else {
          die('Something went wrong');
        }
      }
    } else {
      // IF NOT A POST REQUEST
      redirect('pages/apply');
    }
  }



  public function login()
  {
    // Check if logged in
    if ($this->isLoggedIn()) {
      $this->logout();
    }

    // Check if POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      // Sanitize POST
      $_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

      $data = [
        'email' => trim($_POST['email']),
        'password' => trim($_POST['password']),
        'email_err' => '',
        'password_err' => '',
      ];

      // Check for email
      if (empty($data['email'])) {
        $data['email_err'] = 'Please enter email!';
      }

      // Check for name
      if (empty($data['password'])) {
        $data['password_err'] = 'Password can not be empty!';
      }

      // Check for user
      if ($this->userModel->findUserByEmail($data['email'])) {
        // User Found
      } else {
        // No User
        $data['email_err'] = 'This email is not registered.';
      }

      // Make sure errors are empty
      if (empty($data['email_err']) && empty($data['password_err'])) {

        // Check and set logged in user
        $loggedInUser = $this->userModel->login($data['email'], $data['password']);

        if ($loggedInUser) {
          // User Authenticated!
          $this->createUserSession($loggedInUser);
        } else {
          $data['password_err'] = 'Password incorrect.';
          // Load View
          $this->view('users/login', $data);
        }
      } else {
        // Load View
        $this->view('users/login', $data);
      }
    } else {
      // If NOT a POST

      // Init data
      $data = [
        'email' => '',
        'password' => '',
        'email_err' => '',
        'password_err' => '',
      ];

      // Load View
      $this->view('users/login', $data);
    }
  }

  // Create Session With User Info
  public function createUserSession($user)
  {
    $_SESSION['user_id'] = $user->id;
    $_SESSION['user_email'] = $user->email;
    $_SESSION['user_name'] = $user->name;
    redirect('student');
  }

  // Logout & Destroy Session
  public function logout()
  {
    unset($_SESSION['user_id']);
    unset($_SESSION['user_email']);
    unset($_SESSION['user_name']);
    session_destroy();
    redirect('users/login');
  }

  // Check Logged In
  public function isLoggedIn()
  {
    if (isset($_SESSION['user_id'])) {
      return true;
    } else {
      return false;
    }
  }

  public function step_two()
  {
    // Check if POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $data = [
        'id' => $_POST['id'],
        'dob' => trim($_POST['dob']),
        'stateOfOrigin' => trim($_POST['stateOfOrigin']),
        'lga' => trim($_POST['lga']),
        'nationality' => trim($_POST['nationality']),
        'religion' => trim($_POST['religion']),
        'm_status' => trim($_POST['m_status']),
        'residence' => trim($_POST['residence']),
        'phone' => trim($_POST['phone']),
        'phone2' => trim($_POST['phone3']),
      ];
      if ($this->userModel->register_bio_data($data)) {
          // Redirect to login
          flash('register_success', 'Bio Data Submitted Successfully!');
          redirect('student');
        } else {
          die('Something went wrong');
        }
    } else {
      // IF NOT A POST REQUEST
      redirect('student');
    }
  }// End Step One


// Register Next Of Kin
  public function next_kin()
  {
    // Check if POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $data = [
        'id' => $_POST['id'],
        'next_kin' => trim($_POST['next_kin']),
        'phone3' => trim($_POST['phone3']),
        'address' => trim($_POST['address']),
      ];
      if ($this->userModel->register_next_kin($data)) {
          // Redirect to login
          flash('register_success', 'Next of kin submitted successfully');
          redirect('student');
        } else {
          die('Something went wrong');
        }
    } else {
      // IF NOT A POST REQUEST
      redirect('student');
    }
  }// End Step One

// Documents Submit
  public function documents()
  {
    // Check if POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $data = [
        'dob' => trim($_POST['dob']),
        'stateOfOrigin' => trim($_POST['stateOfOrigin']),
        'lga' => trim($_POST['lga']),
      ];
      if ($this->userModel->register4($data)) {
          // Redirect to login
          flash('register_success', 'Next of kin submitted successfully');
          redirect('users/login');
        } else {
          die('Something went wrong');
        }
    } else {
      // IF NOT A POST REQUEST
      redirect('pages/apply');
    }
  }// End Step Three
}
