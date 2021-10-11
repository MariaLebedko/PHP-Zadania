<?php
$people = array("Илья Игнатович" => "день открытых дверей");
        

$day = 12;
$name = "С уважением, Мария.";

foreach($people as $item => $item_count){
    echo "Уважаемый (ая), ".$item."!</br>",
        "Приглашаем Вас на ".$item_count."</br>",
        "Дата события: $day мая.<br/>",
        $name;
}
?>
