<?php
require_once "APP/model/authModel.php";
require_once "APP/view/authView.php";
require_once "APP/helper/authHelper.php";
class authController
{
    protected $model;
    protected $view;
    protected $authHelper;
    public function __construct()
    {

        $this->model = new authModel();
        $this->view = new authView();
        $this->authHelper = new authHelper();
    }

    function showLoginForm()
    {
        $this->view->getLoginForm();
    }

    function loguear()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (!empty($_POST['username']) && !empty($_POST['password'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $user = $this->model->getUser($username);

                if ($user && password_verify($password, $user->password)) {
                    $this->authHelper->login($user);
                } else {
                    echo "ERROR";
                }
            }
        }
    }

    function logOut()
    {
        session_start();
        session_destroy();
        header("Location:" . BASE_URL . "home");
        die();

    }
}
?>