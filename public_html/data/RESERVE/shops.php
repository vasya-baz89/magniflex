<?php
if(!defined('sf_magniflex'))	{	include_once($_SERVER['DOCUMENT_ROOT'].'/error_403.php');	}



// !!!---ИНСТРУКЦИЯ---!!!
// 'full_exposition' если присутствует вся экспозиция то ставить "true", иначе "false"
// 'exposition' - товары в которых будет отображатся магазин, при условии ("full_exposition" => false)


$shopss = array(
    array(
        "city" => "",
        "name" => "Мебельный Центр Аквилон <br>(Официальная бренд-секция представительства Magniflex).",
        "address" => "ул. Новолитовская, дом 15В, 3 этаж, секция 105.",
        "working_time" => "ежедневно 10:00 - 20:00",
        "contacts" => "+7 921 906-79-00<br>8 (812) 670-84-82<br>Представлен весь ассортимент.",
        "map_icon" => "/img/gmarker-final.png",
        "map_title" => "г.Москва, Партийный переулок, д.1,к.3,с.57, галерея интерьеров Твинстор, павильон В-31",
        "position_lat" => "55.7216977",
        "position_lng" => "37.6293021",
        "full_exposition" => true,
        "exposition" => array()
    ),
    array(
        "city" => "",
        "name" => "Мебельный Центр Аквилон <br>(Официальная бренд-секция представительства Magniflex).",
        "address" => "ул. Новолитовская, дом 15В, 3 этаж, секция 105.",
        "working_time" => "ежедневно 10:00 - 20:00",
        "contacts" => "+7 921 906-79-00<br>8 (812) 670-84-82<br>Представлен весь ассортимент.",
        "map_icon" => "/img/gmarker-final.png",
        "map_title" => "Кронштадтский бульвар, д. 9, стр. 3, ТЦ Крон-Парк",
        "position_lat" => "55.8414422",
        "position_lng" => "37.4872864",
        "full_exposition" => false,
        "exposition" => array('MERINOS', 'WATERLATTEX')
    ),
    array(
        "city" => "",
        "name" => "Мебельный Центр Аквилон <br>(Официальная бренд-секция представительства Magniflex).",
        "address" => "ул. Новолитовская, дом 15В, 3 этаж, секция 105.",
        "working_time" => "ежедневно 10:00 - 20:00",
        "contacts" => "+7 921 906-79-00<br>8 (812) 670-84-82<br>Представлен весь ассортимент.",
        "map_icon" => "/img/gmarker-final.png",
        "map_title" => "ул.1-я Останкинская, д.55, ТЦ ВДНХ",
        "position_lat" => "55.824325",
        "position_lng" => "37.6323582",
        "full_exposition" => false,
        "exposition" => array('MERINOS')
    )
)

?>
