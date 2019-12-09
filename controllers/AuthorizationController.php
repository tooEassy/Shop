<?php
include_once(ROOT.'/models/Authorization.php');
include_once(ROOT.'/models/Session.php');

class AuthorizationController{

    public function __construct()
    {

    }

    public function showForm()
    {
        include_once(ROOT.'/views/includes/header.php');
        include_once(ROOT.'/views/main/login.php');
        include_once(ROOT.'/views/includes/footer.php');
    }

    public function checkForm()
    {
        $userEmail = $_POST['email'];
        $userPassword = $_POST['password'];
        try {
            if(Authorization::checkForm($userEmail, $userPassword)) {
                try{
                    Session::start();
                } catch (sessionStarted $e){
                    $catch = $e->getMessage();
                }
                if(!$catch){
                    Session::set('email', $userEmail);
                    include_once(ROOT.'/views/includes/loggedHeader.php');
                    $success = include_once(ROOT.'/views/main/successfulLogin.php');
                }
            }
        } catch (wrongEmail $e){
            $wrongEmail = $e->getMessage();
        } catch (wrongPassword $e){
            $wrongPassword = $e->getMessage();
        } catch (wrongInfo $e){
            $wrongInfo = $e->getMessage();
        }
        if(!$success) {
            include_once(ROOT.'/views/includes/header.php');
            include_once (ROOT.'/views/main/login.php');
        }
        include_once(ROOT.'/views/includes/footer.php');
    }
}