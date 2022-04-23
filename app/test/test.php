<?php

/*
 * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
 */

require_once 'config/connect.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Products</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="../css/style.min.css">
</head>
<style>
    th, td {
        padding: 10px;
    }

   
    th {
        background: #395240;
        color: #fff;
    }

    td {
        background: #D3EBDA;
    }
    .back_link{
        position: absolute;
text-decoration: none;
font-size: 18px;
color: #111;
margin-left: 3%;
margin-top: -82px;
}
        .orientation{
    text-align: center;
display: flex;
justify-content: center;
margin-bottom: 50px;
}
.list__info{
    margin-bottom: 40px;   
}
    
    /* Печать БД */
    /* @media print{
        body{
            visibility: hidden;
        }
        .print{
            visibility: visible;
        }
    } */

    }
    </style>
<body>
<div class="pre-header">
      <div class="pre-header-news">
        Лучшие новинки
      </div>
      <div class="pre-header-block"></div>
      <div class="pre-header-shiping">
          Именитые Бренды
      </div>
    </div>
	<div style="padding: 20px 0 50px" class="header-logo">Luxary Clothing Store</div>
    <a  class="back_link" href="../index.php">Назад</a>
    <div class="title__text">
    <div class="list">В этом разделе вы можете найти товар <br>Который не представленн на нашем сайте</div>
<div class="list__info"><br>для заказа укажите номер понравившегося товара</div>
</div>
    <div class="orientation">
     
    <table>
        <tr>
            <th>номер</th>
            <th>название</th>
            <th>описание</th>
            <th>цена</th>
        </tr>

<!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! ЕСЛИ НУЖНА БУДЕТ ПЕЧАТЬ -->
<!-- <button  calss="print" onclick="javascrypt:window.print()">печать</button>   -->
 <?php

            /*
             * Делаем выборку всех строк из таблицы "products"
             */

            $products = mysqli_query($connect, "SELECT * FROM `products`");

            /*
             * Преобразовываем полученные данные в нормальный массив
             */

            $products = mysqli_fetch_all($products);

            /*
             * Перебираем массив и рендерим HTML с данными из массива
             * Ключ 0 - id
             * Ключ 1 - title
             * Ключ 2 - price
             * Ключ 3 - description
             */

            foreach ($products as $product) {
                ?>
                    <tr class='print'>
                        <td><?= $product[0] ?></td>
                        <td><?= $product[1] ?></td>
                        <td><?= $product[3] ?></td>
                        <td><?= $product[2] ?>BYN</td>
                    </tr>
                <?php
            }
        ?>
    </table>
    </div