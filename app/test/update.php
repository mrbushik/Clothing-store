<?php

    /*
     * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
     */

    require_once 'config/connect.php';

    /*
     * Получаем ID продукта из адресной строки - /product.php?id=1
     */

    $product_id = $_GET['id'];

    /*
     * Делаем выборку строки с полученным ID выше
     */

    $product = mysqli_query($connect, "SELECT * FROM `products` WHERE `id` = '$product_id'");

    /*
     * Преобразовывем полученные данные в нормальный массив
     * Используя функцию mysqli_fetch_assoc массив будет иметь ключи равные названиям столбцов в таблице
     */

    $product = mysqli_fetch_assoc($product);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Product</title>
</head>
<style>
          .orientation{
    text-align: center;

justify-content: center;
margin-bottom: 50px;
margin-top: 135px;
          }
          .form__edit{
            background-color: #222;
width: 264px;
display: inline-block;
height: 348px;
          }
          p{
            color: #B8B8B8;
          }
          .out{
            text-decoration: none;
margin-left: 5%;
margin-top: -97px;
position: absolute;
font-size: 16px;
padding: 8px 16px;
background-color: #222;
color: #B8B8B8;
border-radius: 5%;
          }
</style>
<body>
<a  class="out"href="index.php">Назад</a>
<div class="orientation">
    <h3>Изменение товаров</h3>
    <form class="form__edit" action="vendor/update.php" method="post">
        <input type="hidden" name="id" value="<?= $product['id'] ?>">
        <p>Название</p>
        <input type="text" name="title" value="<?= $product['title'] ?>">
        <p>Описание</p>
        <textarea name="description"><?= $product['description'] ?></textarea>
        <p>Цена</p>
        <input type="number" name="price" value="<?= $product['price'] ?>"> <br> <br>
        <button type="submit">Сохранить</button>
    </form>
</div>
</body>
</html>