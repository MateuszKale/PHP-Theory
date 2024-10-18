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

//$coins = 50;
//$balance = 100;
//$name_new = $coins + $balance;
/*
Za pomoca funkcji var_dump mozemy sprawdzic jakiego typu jest nasza zmienna 
przyklad 
var_dump($name_new);
Wyswietli nam ze nasza zmienna $name_new jest typu int(integer)
*/
//echo $name_new;
// echo  "<h1> Witam </h1>";
// echo ('<h3>Inny przyklad uzycia echo </h3>');

/*
Stałe w przeciwienstwie do zmiennych nie podlegaja zmianie 
definiujemy je za pomoca define('nazwa_stałej',wartość);
lub za pomoca slowa kluczowego 'const'
*/
//define('NEW_TEST',5);
//const ANOTHER_TEST = 5;
//echo NEW_TEST;
//echo ANOTHER_TEST;

/*
Operator przypisania = , przypisuje nam wartosc do zmiennych 
Mozna przypisac jedna wartosc do kilku zmiennych 
*/
// Przyklad przypisania wartosci do kilku zmiennych jednoczesnie 
//$name = $sameName = 'Piotr';
//var_dump($name);
//var_dump($sameName);

/*
Operatory arytmetyczne 
+ - dodawanie
- - odejmowanie
* - mnozenie
/ - dzielenie
% - modulo (reszta z dzielenia)
** - potęgowanie
*/

//$num1 = 5;
//$num2 = 10;

//echo $num1 ** $num2;

/* Operatory cd 
$count = 10;
$count = $count + 5;
da nam wynik 15 jednak mozna skrocic dany zapis do 
$count += 5;
istnieja rowniez inne operatory takie jak 

-= - odejmowanie
+= - dodawnie
*= - mnozenie 
**= - potegowanie
/= - dzielenie 
%= - modulo

*/

$coin = 5;
$coin /= 5; // zachodzi dzialanie $coin = $coin / 5
echo $coin;