<?php

/**
 * Контроллер CartController
 * Корзина
 */
class CartController
{

    //добавляем в корзину с помощью ajax
    public function actionAddAjax($id)
    {
        echo Cart::addProduct($id);
        return true;
    }
    
   //удаление товара из корзины
    public function actionDelete($id)
    {
        Cart::deleteProduct($id);

        header("Location: /cart");
    }


    public function actionIndex()
    {
        // Список категорий для левого меню
        $categories = Category::getCategoriesList();

        // Получим идентификаторы и количество товаров в корзине
        $productsInCart = Cart::getProducts();

        if ($productsInCart) {

            //  массив только с идентификаторами товаров
            $productsIds = array_keys($productsInCart);

            $products = Product::getProdustsByIds($productsIds);

            $totalPrice = Cart::getTotalPrice($products);
        }

        require_once(ROOT . '/views/cart/index.php');
        return true;
    }

    public function actionCheckout()
    {
        $productsInCart = Cart::getProducts();

        if ($productsInCart == false) {
            header("Location: /");
        }

        $categories = Category::getCategoriesList();

        $productsIds = array_keys($productsInCart);
        $products = Product::getProdustsByIds($productsIds);
        $totalPrice = Cart::getTotalPrice($products);

        $totalQuantity = Cart::countItems();

        $userName = false;
        $userPhone = false;
        $userComment = false;

        $result = false;

        if (!User::isGuest()) {
            $userId = User::checkLogged();
            $user = User::getUserById($userId);
            $userName = $user['name'];
        } else {
            $userId = false;
        }

        if (isset($_POST['submit'])) {
            $userName = $_POST['userName'];
            $userPhone = $_POST['userPhone'];
            $userComment = $_POST['userComment'];

            $errors = false;

            if (!User::checkName($userName)) {
                $errors[] = 'Wrong name';
            }
            if (!User::checkPhone($userPhone)) {
                $errors[] = 'Wrong phone number';
            }


            if ($errors == false) {
                $result = Order::save($userName, $userPhone, $userComment, $userId, $productsInCart);

            }
        }

        require_once(ROOT . '/views/cart/checkout.php');
        return true;
    }

}
