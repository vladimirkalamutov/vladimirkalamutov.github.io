<?php
//заносим в переменную путь к файлу
$filename = 'goods.json';

//получаем данные из файла
$getContent = file_get_contents($filename);

//декодируем файл JSON в массив данных
$decodeContent = array_values(json_decode($getContent, true));

//перебираем преобразованный массив данных

function goodsOut($data) {
    for($i = 0; $i < count($data); $i++) {
        $cart = '';
        $cart .= '<div class="card">';
        $cart .= '<img class="card-img" src="' . $data[$i]["image"] . '" alt="">';
        $cart .= '<h4 class="card-name">'. $data[$i]["name"] .'</h4>';
        $cart .= '<p class="article"> Артикул: ' . $data[$i]["article"] . '</p>';
        $cart .= '<div class="card-price">' . $data[$i]["price"] . '</div>';
        $cart .= '<button class="add-to-basket">Купить</button>';
        $cart .= '</div>';
            echo $cart;
        }
}

