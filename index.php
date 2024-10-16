<?php

//Żeby zadeklarowac zmienną musimy uzyć znaku $


/*
Typy zmiennych w php
integer - liczby całkowite (dodatnie i ujemne)
float - liczby rzeczywiste (dodatnie i ujemne )
String - łancuch tekstowy
Boolean(bool) - przyjmuje wartość true albo falste
array - Tablica tablice mozemy definiowac za pomoca []; albo array();
object - obiekt 
null - zachodzi w przypadku gdy zmiennej nie przypiszemy wartosci 
resource - przechowuje odwołanie do zasobu zewnetrzengo np bazy danych 
*/

$coins = 50;
$balance = 100;
$name_new = $coins + $balance;
/*
Za pomoca funkcji var_dump mozemy sprawdzic jakiego typu jest nasza zmienna 
przyklad 
var_dump($name_new);
Wyswietli nam ze nasza zmienna $name_new jest typu int(integer)
*/
echo $name_new;
// echo  "<h1> Witam </h1>";
// echo ('<h3>Inny przyklad uzycia echo </h3>');