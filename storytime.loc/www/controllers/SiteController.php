<?php


class SiteController
{

    public function actionIndex()
    {

        $categories = Category::getCategoriesList();


        $latestProducts = Product::getLatestProducts(6);


        // Подключаем вид
        require_once(ROOT . '/views/site/index.php');
        return true;
    }


    public function actionContact()
    {

        $userEmail = false;
        $userText = false;
        $result = false;

        // Обработка формы
        if (isset($_POST['submit'])) {
            $userEmail = $_POST['userEmail'];
            $userText = $_POST['userText'];

            $errors = false;

            if (!User::checkEmail($userEmail)) {
                $errors[] = 'Wrong email';
            }

        }

        require_once(ROOT . '/views/site/contact.php');
        return true;
    }
    

    public function actionAbout()
    {
        require_once(ROOT . '/views/site/about.php');
        return true;
    }

}
