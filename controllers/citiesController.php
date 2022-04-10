<?php


namespace app\controllers;

// use app\Products;
use app\Router;
use app\helpers\UtilHelper;
use app\DBFunctions\DBCities;


class CitiesController
{
    public static ?int $id = null;
    public static string $name;

    public static $productData;


    // show categiry
    public static function showCities()
    {
        $keyword = $_GET['search'] ?? '';
        DBCities::showCities($keyword);
        Router::renderView('cities/index', [
            'products' => DBCities::$products,
            'keyword' => $keyword
        ]);
    }

    // add category
    public static function createCities()
    {
        $categoryData = [];
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $categoryData['name'] = $_POST['name'];

            self::load($categoryData);
            self::save();
            header('Location: /cities');
            exit;
        }
        Router::renderView('cities/create', [
            'product' => $categoryData
        ]);
    }

    // update boocategory
    public static function updateCities()
    {
        $id = $_GET['id'] ?? null;
        if (!$id) {
            header('Location: /cities');
            exit;
        }
        DBCities::getCitiesById($id);
        $productData = DBCities::$selected;

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            print_r($_POST);
            $productData['name'] = $_POST['name'];


            self::$productData = $productData;


            self::load($productData);
            self::save();
            header('Location: /cities');
            exit;
        }

        Router::renderView('cities/update', [
            'product' => $productData
        ]);
    }


    // delete category
    public static function deleteCities()
    {
        $id = $_POST['id'] ?? null;
        if (!$id) {
            header('Location: /cities');
            exit;
        }
        if (DBCities::deleteCities($id)) {
            header('Location: /cities');
            exit;
        }
        header('Location: /cities');
        exit;
    }



    public static function load($data)
    {
        self::$id = $data['id'] ?? null;
        self::$name = $data['name'];
    }


    public static function save()
    {
        $errors = [];


        if (!self::$name) {
            $errors[] = 'Product title is required';
        }


        if (empty($errors)) {

            if (self::$id) {
                DBCities::updateCities();
            } else {
                DBCities::createCities();
            }
        }
    }
}