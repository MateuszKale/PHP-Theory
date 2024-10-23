<?php

//Żeby zadeklarowac zmienną musimy uzyć znaku $


/*
**************Typy zmiennych w php**************
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
**************Za pomoca funkcji var_dump mozemy sprawdzic jakiego typu jest nasza zmienna **************
przyklad 
var_dump($name_new);
Wyswietli nam ze nasza zmienna $name_new jest typu int(integer)
*/
//echo $name_new;
// echo  "<h1> Witam </h1>";
// echo ('<h3>Inny przyklad uzycia echo </h3>');

/*
**************Stałe w przeciwienstwie do zmiennych nie podlegaja zmianie **************
definiujemy je za pomoca define('nazwa_stałej',wartość);
lub za pomoca slowa kluczowego 'const'
*/
//define('NEW_TEST',5);
//const ANOTHER_TEST = 5;
//echo NEW_TEST;
//echo ANOTHER_TEST;

/*
**************Operator przypisania = , przypisuje nam wartosc do zmiennych **************
Mozna przypisac jedna wartosc do kilku zmiennych 
*/
// Przyklad przypisania wartosci do kilku zmiennych jednoczesnie 
//$name = $sameName = 'Piotr';
//var_dump($name);
//var_dump($sameName);

/*
**************Operatory arytmetyczne **************
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

/* **************Operatory cd **************
$count = 10;
$count = $count + 5;
da nam wynik 15 jednak mozna skrocic dany zapis do 
$count += 5;
istnieja rowniez inne operatory takie jak 

-= - odejmowanie***pelny zapis*** $coin = $coin - liczba
+= - dodawnie ***pelny zapis*** $coin = $coin + liczba
*= - mnozenie ***pelny zapis*** $coin = $coin * liczba
**= - potegowanie ***pelny zapis*** $coin = $coin ** liczba
/= - dzielenie ***pelny zapis*** $coin = $coin / liczba
%= - modulo ***pelny zapis*** $coin = $coin % liczba

*/

//$coin = 5;
//$coin /= 5; // zachodzi dzialanie $coin = $coin / 5
//echo $coin;
/*
**************Operator konkatenacji (łączenie stringow ze sobą)**************
wywolujemy za pomoca "."
*/
//$name = 'Adam';
//$secondName = 'Paweł';
//$fullName = $name ." ". $secondName; // pomiędzy " " jest puste pole jesli chcemy by oba imiona mialy miedzy soba odstep musimy to zrobic 
//var_dump($fullName);                // gdy tego nie zrobimy wyswietli sei to w nastepujacy sposob AdamPawel

/*
Jest mozliwosc uzycia skrónej wersji konkateknacji
*/
//$name = 'Adam';
//$name .= 'Arek'; // $name = $name . "Arek"
//var_dump($name);

/*
Operatory pre/post inkrementacji i dekrementacji
****************Postinkrementacja**************
Operatorem jest ++ , 

- inicjujemy zmienna
- uzywamy operatora postinkrementacji 
- wyswietlamy ponownie wartosc zmiennej

- najpierw zwraca stara wartosc pozniej ja zwieksza

Jak dziala ten operator 
-wez wartosc ktora znajduje sie w zmiennej
- zwróc ta wartosc 
- powiększ wartosc o 1
- przypisz ponownie nowa wartosc (zwiekszona o 1) do zmiennej
*/
/*
Przyklad uzycia postinkrementacji 

$number = 5;  // $number += 1;
echo $number++;  // zmienna number teraz przyjmie wartosc 6 
var_dump($number);
*/

/*
**************Preinkrementacja**************
Analogicznie do postinkrementacji 
-wez wartosc zmiennej
-zwieksz o 1
-przypisz ponownie zwiekszona o 1

jak sama nazwa wskazuje , zwiekszenie wartosci nastepuje we wczesniejszym etapie 

przyklad pre inkrementacji 

$age = 5;
var_dump(++$age); // od razu zwracam nam wartosc zwiekszona o 1 
var_dump($age);
*/

/*
**************Pre i post dekrementacja dzialaja analogicznie **************$age = 5;
var_dump(--$age); // od razu zwracam nam wartosc zwiekszona o 1 
var_dump($age);
postdekrementacja dziala analogicznie 
*/

/*
**************Operatory Porównania**************
Deklarujemy je za pomoca == lub ===
== - porownuje czy wartosc po lewej jest taka sama jak wartosc po prawej.
=== - porobuje czy wartosc i TYP po lewej jest taki sam jak po prawej
W obu przypadkach zawsze zwróci nam wartość bool ( True albo False)


Przyklady 
var_dump('foo' == 'bar'); Da nam false poniewaz oba stringi maja inna wartosc
var_dump(8 === '8'); Da nam fałsz ponieważ wartość po lewej jest stringiem a po prawej int
var_dump(8 == '8'); Da nam True poniewaz wartosc po lewej i po prawej sa takie same 

$name = 'anna';
$secondName = 'Anna';
var_dump($name === $secondName);

*/

/*
**************Operatory Sprawdzajace**************
Analogicznie do operatorow porowaniai sprawadz czy wartosci i typy sa inne , wywolujemy je za pomoca
!= - sprawdza czy wartosci sa rozne
!== - sprawdza czy wartosci i typy sa rozne 
Przyklady 
$name = 'Anna';
$secondName = 'Anna';
var_dump($name != $secondName); da nam wartosc false poniewaz obie wartosci zmiennych sa takei same

$name = 'Anna';
$secondName = 'Anna';
var_dump($name !== $secondName); da nam wartosc false poniewaz obie wartosci zmiennych i ich typy  sa takei same

$name = 'Anna';
$digit = 9;
var_dump($name !== $secondName); da nam wartosc true poniewaz obie wartosci zmiennych i ich typy sie roznia


Mamy takze inne operatory sprawdzajace 
> - wieksze
var_dump(9 >= 8); - True liczba 9 jest wieksza bądz rowna 8
>= - wieksze bądz rowne
var_dump(9 > 8); - True liczba 9 jest wieksza od liczby 8
< - mniejsze 
var_dump(12 <= 8); - False liczba 9 jest wieksza od liczby 8
<= - mniejsze badz rowne 
var_dump(9 < 8); - False liczba 9 jest wieksza od liczby 8

*/


/*
******************Space Ship ***************
<=> - zapis
Uzywamy go do porownywania wartosci i w zaleznosci od wyniku mozew nam zwrocic 3 wartosci
- 0 - gdy obie wartosci sa rowne
- -1 - gdy lewa wartosc jest mniejsza od prawej
- 1 - gdy prawa wartosc jest mniejsza od lewej
var_dump(93 <=> 92); da nam 1
var_dump(91 <=> 92); da nam -1
var_dump(92 <=> 92); da nam 0

var_dump(93 <=> 92);

*/

/*
**************Łańcuchy znakow (string)**************
Roznice pomiedzy apostrofami a cudzyslowiami 
Przy cudzyslowiach , program interpetuje caly tekst przez to mozemy wstawic zmienna w srodek i wyswietli nam jej wartosc natomiast 
przy apostrofach nie jest to robione wiec wyswietli nam nazwe zmiennej


$example1 = 'Ala ma kota ma $age lat';  wynik "Ala ma kota ma $age lat"
$example2 = "Ala ma kota $age lat"; wynik "Ala ma kota 4 lat"
Jest jeszcze 3cia mozliwosc na uzycie  apostrofow i wywolanie zmiennej , potrzebujemy konkatenacji np
$age = 4;
$example3 = 'Ala ma kota ma ' . $age . ' lat';
Jak widac mozna to zrobic ale jest nieco więcej zachodu jak z uzyciem cudzyslowi


var_dump($example1);
var_dump($example2);

Jesli nie musimy sie odnosic do zmiennej to uzywamy apostrofow , jesli musimy to uzywamy cudzyslowi , zwiekszy to nieco wydajnosc naszego kodu 

Czym jest parsowanie w php ?    

parsowanie w PHP to sposób na przekształcanie surowych danych, takich jak tekst, na format, który program potrafi efektywnie zinterpretować i wykorzystać.
*/

/*
***************Tablice*************
Są to takie 'pojemniki' na dane do ktorych mozemy wsadzac i wyciagac dane
Jest uporzadkowana lista elementow 
elementy - przechowuja dane ktore moga byc dowolnego np string int itp
Tablice sa bardzo uzyteczne gdy posiadmy zbior jakis powiazanych ze soba danych 
*/
//$employee1 = 'Jan Kowalski';
//$employee2 = 'Zbigniew Nowak';
//$employee3 = 'Jadwiga Kaczmarska';

// zapis tablicowy
//$user =['Jan Kowalski', 'Zbigniew Nowak', 'Jadwiga Kaczmarska']; // Mozemy recznie wpisac dane do tablicy

//$test = [$employee1, $employee2, $employee3]; // przyklad wpisania danych do tablicy przy pomocyzmiennych

/* mozemy tez wywołac dowolny element z naszej tablicy przy pomocy indeksow 
[0] => Jan Kowalski
[1] => Zbigniew Nowak
[2] => Jadwiga Kaczmarska
print_r($user[numer indeksu]);



Zapamietac ze var_dump i print_r uzywac tylko w trakcie pisania kodu , nie uzywac ich do dostarczania informacji uzytkownikowi

Mozemy tez wstawiac/zmieniac emelenty na danym indeksie 

przyklad 

$user =['Jan Kowalski', 'Zbigniew Nowak', 'Jadwiga Kaczmarska'];
$user[1] = 'Anna Kowalska'; / zamieniamy element ktory znajduje sie pod indeksem 1

print_r($user);

wyswietli nam teraz 
    [0] => Jan Kowalski
    [1] => Anna Kowalska
    [2] => Jadwiga Kaczmarska

Mozemy takze dodac element pod dowolny przez nas indeks (nie musi byc nic przypisane do podanego indeksu )

np 
$user =['Jan Kowalski', 'Zbigniew Nowak', 'Jadwiga Kaczmarska'];
$user[11] = 'Anna Kowalska'; // Dodajemy teraz nowy element pod indeks 11

*/