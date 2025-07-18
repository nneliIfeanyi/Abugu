<?php
class Pages extends Controller
{
  public function __construct() {}

  // Load Homepage
  public function index()
  {
    redirect('pages/home');
  }

  public function home()
  {
    //Set Data
    $data = [
      //'version' => '1.0.0'
    ];

    // Load about view
    $this->view('pages/home', $data);
  }

  public function about()
  {
    //Set Data
    $data = [
      'version' => '1.0.0'
    ];

    // Load about view
    $this->view('pages/about', $data);
  }

  public function admissions()
  {
    //Set Data
    $data = [
      'version' => '1.0.0'
    ];

    // Load about view
    $this->view('pages/admissions', $data);
  }
  public function apply()
  {
    // Init data
    $data = [
      'fname' => '',
      'mname' => '',
      'lname' => '',
      'email' => '',
      'phone' => '',
      'password' => '',
      'c_password' => '',
      'name_err' => '',
      'email_err' => '',
      'password_err' => '',
      'c_password_err' => ''
    ];
    // Load about view
    $this->view('pages/apply', $data);
  }

  public function academics()
  {
    $undergraduate = array(
      array("Computer Science", "2years", "ND/HND", "Fulltime & weekend"),
      array("Computer Engineering", "2years", "ND/HND", "Fulltime"),
      array("Electrical-Electronics Engineering", "2years", "ND/HND", "Fulltime"),
      array("Accounting", "2years", "ND/HND", "Fulltime & weekend"),
      array("Business Administration", "2years", "ND/HND", "Fulltime & weekend"),
      array("Public Administration", "2years", "ND/HND", "Fulltime & weekend"),
      array("Mass Communication", "2years", "ND/HND", "Fulltime & weekend"),
      array("Quantity Surveying", "2years", "ND/HND", "Fulltime & weekend"),
      array("Building Technology", "2years", "ND/HND", "Fulltime & weekend"),
      array("Food Science & Technology", "2years", "ND/HND", "Fulltime & weekend"),
      array("Fishery", "2years", "ND/HND", "Fulltime & weekend"),
      array("Marketing", "2years", "ND/HND", "Fulltime & weekend"),
      array("Statistics", "2years", "ND/HND", "Fulltime & weekend"),
      array("SLT", "2years", "ND/HND", "Fulltime & weekend"),
      array("Microbiology", "2years", "ND/HND", "Fulltime & weekend"),
      array("Chemistry & Physics", "2years", "ND/HND", "Fulltime & weekend"),
    );
    $graduate = array(
      array("PGD in Accounting", "18months", "PGD", "Part-time & weekend"),
      array("PGD in Pol. Sc & Admin", "18months", "PGD", "Part-time & weekend"),
      array("PGD in Marketing", "18months", "PGD", "Part-time & weekend"),
      array("PGD in Economics", "18months", "PGD", "Part-time & weekend"),
      array("PGD in Accounting", "18months", "PGD", "Part-time & weekend"),
      array("PGD in Bus. Admin", "18months", "PGD", "Part-time & weekend"),
      array("PGD in Entrepreneurship ", "18months", "PGD", "Part-time & weekend"),
      array("PGD in Pub.Admin", "18months", "PGD", "Part-time & weekend"),
    );

    //Set Data
    $data = [
      'undergraduate' => $undergraduate,
      'graduate' => $graduate,
    ];

    // Load about view
    $this->view('pages/academics', $data);
  }
  public function privacy()
  {
    //Set Data
    $data = [
      'version' => '1.0.0'
    ];

    // Load about view
    $this->view('pages/privacy', $data);
  }
}
