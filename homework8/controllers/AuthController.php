<?php


namespace app\controllers;


use app\engine\App;
use app\engine\Request;
use app\engine\Session;
use app\models\entities\User;
use app\models\repositories\UserRepository;


class AuthController extends Controller
{
    public function actionLogin() {
        $login = App::call()->request->getParams()['login'];
        $pass = App::call()->request->getParams()['pass'];


        if (App::call()->usersRepository->auth($login, $pass)) {
            header("Location:" . $_SERVER['HTTP_REFERER']);
            die();
        } else {
            die("Не верный логин-пароль");
        }
    }
//auth/register
    public function actionRegister() {
        $login = App::call()->request->getParams()['login'];
        $pass = App::call()->request->getParams()['pass'];
        $dbPass = password_hash($pass, PASSWORD_DEFAULT);
        $user = new User($login, $dbPass);
        App::call()->usersRepository->save($user);
        App::call()->session->message('Вы успешно зарегистрировались. Выполните вход');
       
        header("Location: /");
        
    }

    public function actionLogout() {
        App::call()->session->regenerate();
        App::call()->session->destroy();
        header("Location:" . $_SERVER['HTTP_REFERER']);
        die();
    }
}
