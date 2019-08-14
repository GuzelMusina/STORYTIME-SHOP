<?php


class Cart
{

    //add product to cart by id, return count of products
    public static function addProduct($id)
    {
        // $id to type integer
        $id = intval($id);

        // array of products in cart
        $productsInCart = array();

        // If we have products - add our array
        if (isset($_SESSION['products'])) {
            $productsInCart = $_SESSION['products'];
        }

        // If we have the same element just increment the count
        if (array_key_exists($id, $productsInCart)) {
            $productsInCart[$id]++;
        } else {
            // else count=1
            $productsInCart[$id] = 1;
        }

        // add array to session
        $_SESSION['products'] = $productsInCart;

        return self::countItems();
    }

    //count of items in cart
    public static function countItems()
    {
        // if products exist
        if (isset($_SESSION['products'])) {
            //count and return
            $count = 0;
            foreach ($_SESSION['products'] as $id => $quantity) {
                $count = $count + $quantity;
            }
            return $count;
        } else {
            //else count=0
            return 0;
        }
    }


    //return array with id and count of this products in cart
    public static function getProducts()
    {
        if (isset($_SESSION['products'])) {
            return $_SESSION['products'];
        }
        return false;
    }

  //get total price
    public static function getTotalPrice($products)
    {
        $productsInCart = self::getProducts();

        $total = 0;
        if ($productsInCart) {

            foreach ($products as $item) {
                $total += $item['price'] * $productsInCart[$item['id']];
            }
        }

        return $total;
    }

    public static function clear()
    {
        if (isset($_SESSION['products'])) {
            unset($_SESSION['products']);
        }
    }

   //delete product by id
    public static function deleteProduct($id)
    {
        $productsInCart = self::getProducts();

        if (array_key_exists($id, $productsInCart)) {
            $productsInCart[$id]--;
        } else {
            unset($productsInCart[$id]);
        }

        // add array to session
        $_SESSION['products'] = $productsInCart;

        return self::countItems();
    }

}
