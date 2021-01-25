<?php

class App
{
    public static $fApi = "https://fakestoreapi.com/products";
    public static function main($product)
    {
        if ($product) {
            self::$fApi = self::$fApi . "/category/" . $product;
        }

        try {
            $array = self::getData();
            self::viewData($array);
        } catch (Exception $b) {
            echo $b->getMessage();
        }
    }

    public static function getData()
    {
        $json = @file_get_contents(self::$fApi);

        if (!$json) {
            throw new Exception("
                <div class='alert alert-danger' role='alert'>
                    Informationen kan tyvärr inte visas just nu!
                </div>
            ");
        }
        return json_decode($json, true);
    }

    public static function viewData($products)
    {
        $list = "<ul class='list-group'>";
        foreach ($products as $product) {
            if ($product['category']=="electronics") {  
            }
            else {
                $list .= "
                <li class='list-group-item'>
                <img height=200 src='$product[image]' alt='$product[title]'>
                <b> $product[title] </b><br> 
                <b> €$product[price] </b><br> 
                $product[description] <br> 
                </li>
                ";
            }

           
         }
        $list .= "</ul>";

        echo $list;

        echo "<hr>";
    }
}
