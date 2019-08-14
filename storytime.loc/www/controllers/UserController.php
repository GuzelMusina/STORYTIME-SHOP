<?php


class UserController
{
    //register
    public function actionRegister()
    {
        $name = false;
        $email = false;
        $password = false;
        $result = false;

        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $errors = false;

            if (!User::checkName($name)) {
                $errors[] = 'Your name must has at least 2 symbols';
            }
            if (!User::checkEmail($email)) {
                $errors[] = 'Wrong email';
            }
            if (!User::checkPassword($password)) {
                $errors[] = 'Your password must has at least 6 symbols';
            }
            if (User::checkEmailExists($email)) {
                $errors[] = 'Choose another email, this is busy';
            }

            if ($errors == false) {
                $result = User::register($name, $email, $password);
            }
        }

        require_once(ROOT . '/views/user/register.php');
        return true;
    }

    //login
    public function actionLogin()
    {
        $email = false;
        $password = false;

        if (isset($_POST['submit'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $errors = false;

            if (!User::checkEmail($email)) {
                $errors[] = 'Wrong email';
            }
            if (!User::checkPassword($password)) {
                $errors[] = 'Your password must has at least 6 symbols';
            }

            // Проверяем существует ли пользователь
            $userId = User::checkUserData($email, $password);

            if ($userId == false) {
                // Если данные неправильные - показываем ошибку
                $errors[] = 'Wrong data for enter';
            } else {
                // Если данные правильные, запоминаем пользователя в сессию
                User::auth($userId);

                header("Location: /cabinet");
            }
        }

        require_once(ROOT . '/views/user/login.php');
        return true;
    }


    public function actionLogout()
    {

        $_SESSION = array();
        session_destroy();


        header("Location: /");

    }

}
