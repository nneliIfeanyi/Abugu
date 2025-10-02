<?php
class Admission extends Controller
{
    private $regModel;

    public function __construct()
    {
        $this->regModel = $this->model('RegModel');
    }

    // Admin dashboard view
    public function index()
    {
        $data = [
            'registrations' => $this->regModel->getAllRegistrations()
        ];

        $this->view('admission/index', $data);
    }

    public function profile($id)
    {
        $user = $this->regModel->getRegistrationById($id);

        if (!$user) {
            notify('msg', 'User not found');
            redirect('admission');
        }

        $data = [
            'user' => $user
        ];

        $this->view('admission/profile', $data);
    }

    // Delete Post
    public function delete($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Execute
            if ($this->regModel->delete($id)) {
                // Redirect to login
                notify('msg', 'Delete Successfull!');
                redirect('admission');
            } else {
                die('Something went wrong');
            }
        } else {
            redirect('admission');
        }
    }

    public function admit($id)
    {
        $user = $this->regModel->getRegistrationById($id);
        if (!empty($user->olevelDoc) && !empty($user->birthDoc) && !empty($user->originDoc)) {
            $this->regModel->admit($id);
            notify('msg', 'Candidate admitted successfully!');
            redirect('admission');
        } else {
            notify('msg', 'Error! Credentials incomplete', 'alert alert-danger');
            redirect('admission');
        }
    }
}
