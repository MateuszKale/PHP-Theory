<?php

declare(strict_types=1);

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
***************Tablice numeryczne*************
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


Mozemy tez skopiowac element poza tablice np przypisac dany element do innej zmiennej/tablicy jesli bedziemy wiedziec ze w przyslzosci sie nam jeszcze przyda

$user =['Jan Kowalski', 'Zbigniew Nowak', 'Jadwiga Kaczmarska'];

$oldUser = $user[1]; // kopiujemy element z pierwszego indeksu i przypisujemy go do nowej zmiennej
$user[1] = 'Jan Matejko'; // zastepujemy element z pierwszego indeksu na inny element

var_dump($user); / Wyswietli nam tablice z podmienionym juz elementem
var_dump($oldUser); // w tej zmiennej przechowujemy wczesniej skopiowany element z tablicy 

//
stworzenie tablicy ktora w elementach posiada inne tablice
$worker1 = ['Jan Kowalski' , 'magazynier'];
$worker2 = ['Zbigniew Nowak', 'handlowiec'];
$worker3 = ['Jadwiga Kaczmarska', 'Hr'];


$user =[$worker1,$worker2,$worker3];
echo("Dane pracownika $worker1[0],stanowisko pracownika $worker1[1]");

Jak przypisac nowy element na kolejnym wolnym indeksie ?

wywolujemy nasza tablice (bez podawania indeksu)
wtedy nasz nowy element bedzie sie znajdowal na samym koncu naszej tablicy 
przyklad 

$user =['Jan Kowalski', 'Zbigniew Nowak', 'Jadwiga Kaczmarska'];
$user[] = 'Adam Kacz'; // deklarujemy do ktorej tablicy chcemy dodac nowy element nastepnie ja wywolujemy 
print_r($user);         // jesli chcemy by byl dodany na samym koncu to nie wpisujemy indeksu , jesli chcemy go dodac na wybranym przez nas indeksie musimy wpisac numer indeksu 
                        / pod ktory chcemy go dodac


$user =['Jan Kowalski', 'Zbigniew Nowak', 'Jadwiga Kaczmarska'];
$user[] = 'Adam Kacz';

unset($user[2]); // nowa funkcja , usuwa nam elementy z naszej tablicy
$user[]='Test';
print_r($user);

funkcja count -
uzywamy jej np var_dump(count($user));
zlicza nam ona ilosc elementow w naszej tablicy

$user =['Jan Kowalski', 'Zbigniew Nowak', 'Jadwiga Kaczmarska'];
$number = count($user);
echo "Ilość elementow w tablicy $number";

*/

/*
Mozemuy tez przypisac dowolne indeksy / nazwy indeksow , np

$user =[3 =>'Jan Kowalski', 4=>'Zbigniew Nowak', 5=> 'Jadwiga Kaczmarska'];
print_r($user);

Jak widac w powyzszym przykladzie nie musimy zaczynac zawsze od pierwszego indeksu w naszej tablicy

$user =[3 =>'Jan Kowalski','Zbigniew Nowak','Jadwiga Kaczmarska'];
print_r($user);

Gdy przypiszemy pierwszy indeks jezyk php uzupelni nam kolejne w kolejnosci czyli w powyszym prrzykladzie bedzie to 3 4 5 

Kazdy kolejny element bedzie dodawany w nastepnej w kolejnosci wolnym indeksie np 

$user =[3 =>'Jan Kowalski', 4=>'Zbigniew Nowak', 5=> 'Jadwiga Kaczmarska'];
$user[]='Test'; // Ten element bedzie dodany na indeksie 6 poniewaz jest najbliszym wolnym indeksem
print_r($user);

*/

/*
**************Tablice asocjacyjne***********
Są to tablice gdzie indexy moga byc stringami
Przydaje sie do przechowywania list
przyklad

$user = [
    'firstName' => 'Jan',
    'lastName' => 'Kowalski',
    'age' => 22,
];
print_r($user);

mozemy tez mieszac indeksy ( raz string raz liczba) ale jest to raczej rzadko robione i bardzo niepraktyczne 

Tu bardziej zaawansowany przyklad uzycia tablicy asocjacyjnej i zagniezdzania tablic asocjacyjnych
$employee = [
    "uzytkownik1" => [
        "imie" => "Adam",
        "wiek" => 25,
        "email" => "adam@example.com"
    ],
    "uzytkownik2" => [
        "imie" => "Ewa",
        "wiek" => 30,
        "email" => "ewa@example.com"
    ]
];

Jak sie odwołać do takich zagniezdzonych tablic, np wywołajmy adres e mail adama

$employee = [
    "uzytkownik1" => [
        "imie" => "Adam",
        "wiek" => 25,
        "email" => "adam@example.com"
    ],
    "uzytkownik2" => [
        "imie" => "Ewa",
        "wiek" => 30,
        "email" => "ewa@example.com"
    ]
];

print_r($employee['uzytkownik1']['email']); // wybieramy pierw zagniezdzona tablice a nastepnie uzywamy indeksu pod ktorym znajduje sie adres e mail

ew mozemy tez uzyc tego ssposobu
$employee1 = $employee['uzytkownik1']['email'];
print_r($employee1);
*/


/*
***********Struktury Kontrolne***********
Naleza do nich instrukcje warunkowe if else itp oraz petle
*/

/*
***************Instrukcja warunkowa "if"*************** 
Konstrukcja
if (wyrazenie do sprawdzenia) {
    //kod wykonania jesli wyrazenie jest prawdziwe
}
If mozemy sobie przetlumaczyc na polski jako jesli/jezeli 
czyli na przykladzie ponizszym mozemy sprawdzic czy ktos moze kupic bilet do kina na film przeznaczony na 17 lub wiecej lat
$age = 20;

if ($age>= 17) {  \\ instrukcja warunkowa sprawdza czy uzytkowanik ma 17 lub wiecej lat
    echo 'Mozesz kupic Bilet'; // jesli wyrazenie bedzie mialo wartosc true , to wyswietli sie nam ten komunikat
}           // jesli np nasza instrukcja waruknowa przyjmie wartosc false(albo warunek nie zostanie wykonany)
echo 'Niestety nie mozesz kupic biletu';        /// to nasz kod przejdzie do kolejnej lini nie wykonujac tego co jest pod naszym ifem

Czyli podsumowujac , nasza linijka kodu wykona sie gdy wyrazenie do sprawdzenia przyjmie wartosc true , 

Najczesciej do sprawdzenia czy instrukcja jest prawidziwa uzywamy operatorow porownania 
==
===
!=
!==
>
itp


Kiedy otrzymamy false podczas rzutowania ?  
0 i -0
0.0 i -0.0
"" i "0"
[] - pusta tablica
 null


$number = 6;

if ($number >= 4) {
    echo "Liczba $number jest wieksza od 4";
}

*/

/*

*****************Instrukcja warunkowa if else ************
Nastepna instrukcja warunkowa jest else , jest on wykonywany gdy nasza instrukcja if nie spelni warunku / przyjmie wartosc false 
 np 
$age = 15;

if ($age >= 17) {  /// jest warunek przyjmie wartosc true wykonujemy ta linie kodu  
    echo 'Mozesz kupic bilet !';
} else {            /// jesli warunek przy if bedzie mial wartosc false wykonujemy tą linie
    echo 'Jesteś za mlody na ten seans , wybierz film z twojej kategorii wiekowej';
}

*/

/*

*****************Instrukcja warunkowa elseif ************
Mozemy zagniezdzac kolejne ify jesli pierwszy przyjal wartosc false , np

$age = 15;

if ($age >= 17){
    echo 'Mozesz obejrzeć film';
} else {
    if ($age >= 13){
        echo 'Moze jestes zainteresowany innym filmem ?';
    } else {
        echo 'Jestes za mlody na obejrzenie tego filmu ';
    }
}

ale mozemy tez uzyc instrukcji elseif np 

Gdy potrzebujemy wstawic wiecej niz jeden warunek mozemy wstawic tyle elseifow ile nam potrzeba

$age = 7;

if ($age >= 17){
    // KOD SIE WYKONA JESLI TO WYRAZENIE PRZYJMIE WARTOSC TRUE
    echo 'Mozesz obejrzec film';
}elseif($age >= 14){
    // To wyraznie sie wykona jesli powyzszy if przyjmie wartosc false a to przyjmie wartosc true
    echo 'Proponuje obejrzec inny film';
}else{ // Wykona sie jesli powyzsze wyrazenia przyjma wartosc false
    echo'Jestes za mlody na filmy ktore wyswietlamy w obecnej chwili';
}
 
*/


/*

*************Ternary operator**********
Jest to skrócony zapis if else czyli zapisu "?:"

$grade = 5;
if ($grade >4 ){
    $mood = 'happy';
} else {
    $mood = 'sad';
}

echo $mood;

mozemy to skrocic w nastepujacy sposob

/ wyrazenie do sprawdzenia ? wykonaj jesli prawda : wykonaj jesli falsz
$mood = $grade > 4 ? 'happy' : 'sad';
echo $mood

jak widac finalnie oba przyklady zadzialaja tak samo , jednak drugi charakteryzuje sie ktorszym zapisaem ,
warto zaznaczyc ze nie poleca sie uzywania krotkiego zapisu do tworzenia rozbudowanych warunkow
*/

/*

****************Operatory logiczne cd *******************
Operator logiczny ktory przyda sie do if jest && (and)
dzieki niemu mozemy sprawdzic kilka warunkow na raz 

np tak wyglada kod bez uzycia tego  operatora 
$age = 17;
$wallet = 2;
$ticketPrice = 15;

if ($age>=17){
    if ($wallet >$ticketPrice){
        echo "Bilet kupiony";
    }else{
        echo'Nie masz tylu pieniedzy';
    }
}else{
    echo'Nie spelniasz warunkow wiekowych na ten film';
}

tutaj z uzyciem nowo poznanego operatora logicznego

$age = 17;
$wallet = 225;
$ticketPrice = 15;

if ($age>=17 && $wallet > $ticketPrice){
    echo 'Bilet kupiony';
}else{
    echo 'Nie udało ci sie kupic biletu';
}

jak widac nasz kod mocno sie uproscil


|| - or - daje prawde gdy jedno wyrazenie jest prawdziwe (wyrazenie po lewej lub prawej stronie usi byc prawdziwe)

przyklad uzycia 

$age = 15;
$wallet = 225;
$ticketPrice = 15;

if ($age>=17 || $wallet > $ticketPrice){
    echo 'Bilet kupiony';
}else{
    echo 'Nie udało ci sie kupic biletu';
}

xor - daje prawde gdy tylko jedno wyrazenie jest prawdziwe (po lewej lub po prawej)
! - negacja - sprawdza czy wyrazenie nie jest prawdziwe
Wynikami tych operatorow logicznych zawsze bedzie bool , czyli true albo false
Mozemy ich uzywac nie tylko przy ifach ale tez innych przypadkach przyklady dzialan wszystkich operatorow

$a = 1 && 2;
var_dump($a);
 
var_dump(1 && 0); // fasle
var_dump(1 && false);  // false

var_dump(0 || 1); // true
var_dump(true || false); // true
var_dump(0 || ''); // false

var_dump(!false); // true
var_dump(!0); // true
var_dump(!1); // false

var_dump(2 xor 3); // false
var_dump(0 xor 3); // true

Wszystkich wyrazn mozemy uzywac w dowolnej ilosci i kombinacji 


if ($age > 20 && $myWallet >300 && ($localization == 'Kielce' || $localization == 'Kraków')) {
    echo 'Wszystko sie zgadza';
}else {
    echo 'Cos poszło nie tak';
}

*/


/*
**********Switch***********
Mozna uzyc tego zamiast elsif'ow,jest uzyteczna gdy za bardzo nam sie rozrasta kontrukcja za pomoca if elif else
Konstrukcja switch



switch ($zmienna) {
    case 'wartość1':
        // kod do wykonania, gdy $zmienna jest równa 'wartość1'
        break;
    case 'wartość2':
        // kod do wykonania, gdy $zmienna jest równa 'wartość2'
        break;
    default:
        // kod do wykonania, gdy żadna z wartości nie pasuje
        

$value = 'bar';
switch($value) {
    case'foo';
        //blok kodu gdy wartosc wynosi 'foo';
        echo 'Value ma wartość foo';
        break;
    case'bar';
        //blok kodu gdy wartosc wynosi 'bar';
        echo 'Value ma wartość bar';
        break;
    case'xxx';
        //blok kodu gdy wartosc wynosi 'xx';
        echo 'Value ma wartość xxx';
        break;
    case'sss';
        //blok kodu gdy wartosc wynosi 'sss';
        echo 'Value ma wartość sss';
        break;
    default:
        //blok kodu gdy wartosc nie pasuje do powyzszych
        echo 'Value ma inna wartość';
        break;
}

mozzemy tez inaczej skosntruowac case tak zeby przypisywal nam odpowiednia wartosc do zmiennej

$city = 'Warszawa';

switch($city){
    case 'Berlin';
    case 'Hamburg';
        $country = 'Niemcy';
        break;
    case 'Kraków';
    case 'Katowice';
    case 'Warszawa';
        $country = 'Polska';
        break;
    case 'Moskwa';
        $country = 'Rosja';
        break;
    default;
        $country = 'Nie rozpoznano';
        break;
}
echo $country;


Wazne jest zeby uzywac break;
Poniewaz nasz switch bedzie wyswietlal nie tylko wartosc która jest przypisana ale tez inne, break od razu przerywa nasz switch i nie tylko 
jak pojawi sie odpowiednia wartosc
*/


/*

*******************Pętle for,foreach ,while ,do while ****************************

Pętle wykorzystujemy do wielokrotnego wykonania zdefiniowanych przez nas funkcji
W php mamy 4 petle
- for
- foreach
-while
-do while

 **********Pętla for****************
 Składnia petli for
 for (inicjalizacja ; warunekDoSprawdzenia ; aktualizacja ){
        kod do wykonania
 } 

 wykonanie petli for na przykladzie

var_dump('Zaraz wykonamy pętle');

rzeczywisty przyklad wykorzystania petli for 

for ($i=0; $i < 5; $i++) {
    var_dump($i);
}
var_dump('Koniec pętli');

na podstawie tego przykladu mozemy opisac nastepujace elementy skladni petli
inicjalizacja - $i=0 // zapamietac ze inicjalizacja jest wykonywana tylko raz
warunekDoSprawdzenia - $i < 5 // jesli warunek przyjmie wartosc true zostanie wyoknany kod
aktualizacja - $i++

Jeden obrot pętli nazywamy iteracją 

Podczas korzystania z petli mozemy sie tez posluzyc zmiennymi

$starFoo = 45;
$endFoo = 100;

for ($foo = $starFoo; $foo < $endFoo;$foo += 10) {
    var_dump($foo);
}

Mozemy tez pominacz czesc aktualizacyjna jednak wewnatrz petliu musimy zadbac o to aby zmienna sterujaca byla modyfikowana ,
w innym wypadku stworzymy petle nieskonczona 

for ($i = 0; $i < 5; ){
    echo "$i \n";
    ++$i;
}

Jak juz stworzymy przypadkowo petle nieskonczona mozemy przerwac dzialanie skryptu za pomcoac ctrl + c

uzycie petli for na tablicy filmow

$cinemaMovies = [
    'Joker',
    '1917',
    'Jumanji',
    'Deadpool'
];
$moviesCount = count($cinemaMovies);
for ($index = 0; $index < $moviesCount; $index++) {
    echo $cinemaMovies[$index] . "\n";
}

*/

/*
****************Pętle while i do while ******************
kontrukcja petli while

while (warunekDoSprawdzenia) {
    // kod do wykonania
    }

W petli while sami musimy zadbac aby zainicjowac zmienne na poczatku oraz zeby je aktualizowała zeby miala mozliwosc zakonczenia

Przyklad uzycia petli while na podobnym przykladzei jak przy petli for  

$cinemaMovies = [
    'Joker',
    '1917',
    'Jumanji',
    'Deadpool'
];

$index = 0;
$moviesCount = count($cinemaMovies);

while ($index < $moviesCount){
    echo $cinemaMovies[$index] . "\n";
    $index++;
}

Konstrukcja pętli do while

do {
    //kod do wykonania
} while (warunek)

Jak widac w konstrukcji przy petli do while wykona sie  zawsze przynajmniej jedna iteracja naszej petli 
$cinemaMovies = [
    'Joker',
    '1917',
    'Jumanji',
    'Deadpool'
];

$i = 0;
$moviesCount = count($cinemaMovies);

do {
    echo "Film ". $cinemaMovies[$i] . "\n";
    $i++;
} while ($i <$moviesCount);

Zapamietac 
petla while pierw sprawdza warunek dpiero iteruje
petla do while pierw iteruje (gwarantuje przynajmniej 1 raz) pozniej dopiero sprawdza warunek
*/


/*
***************Pętla foreach*************
Dziala na nieco innej zasadzie jak pozostale petle , 
Uyzwamy jej aby w latwy sposob przejsc przez tablice
Dzieki czemu mozemy sie dostac w prosty sposob do elementow na ktorych pracujemy
Pętla sie automatycznie zakonczy gdy przejdziemy po wszystkich elementach tablicy
Nie musimy stawiac zadnych warunkow , wszystko dzieje sie automatycznie

Mozna jej tez uzywac z obiektami
******************************************************************************
Konstrukcja pętli foreach

foreach ($array as $arrayElement) {
        //Kod do wykonania
}
 uzycie petli foreach na przykladzie tablicy    
******************************************************************************
$testArray = ['Jeden','Dwa','Trzy','Cztery','Pięc'];

foreach ($testArray as $elem){
    echo "$elem \n";
}
******************************************************************************
lub 

foreach($array as $key=> $arrayElement) {
        kod
}

$array - jest tablica na ktorej chcemy pracowac i przejsc po jej elementach
$arrayElement - jest to zmienna do ktorej zostanie przypisany kolejny element tablicy 

$cinemaMovies = [
    'Joker',
    '1917',
    'Jumanji',
    'Deadpool'
];

foreach ($cinemaMovies as $movie){
    echo $movie . "\n";
}
wyswietlenie filmow wraz z indexami
******************************************************************************
$cinemaMovies = [
    'Joker',
    '1917',
    'Jumanji',
    'Deadpool'
];

foreach ($cinemaMovies as $index => $movie){
    echo $index. ": " .$movie . "\n";
}
******************************************************************************
bardziej skomplikowany przyklad

$movieDetails = [
    'title' => 'Joker',
    'director' => 'Todd Phillips',
    'writers' => 'Todd Phillips , Scott Silver',
    'cast' => [
        'Juaquin Phoenix' => 'Arthur Fleck',
        'Rober De Niro' => 'Murray Franklin',
        'Zazie Beetz' => 'Sophie Dumond',
        'Frances Conroy' => ' Penny Fleck'
    ],
    'music' => 'Hildur Guonadottir'
];

foreach ($movieDetails as $role => $element){
    if (is_array($element)){
        foreach($element as $insideKey => $insideValue){
            echo "$role: $insideKey : $insideValue \n";
        }
    }else {
        echo "$role: $element \n";
    }   
}
    ******************************************************************************
Stwórz tablicę asocjacyjną z nazwami produktów i ich cenami. Następnie użyj pętli foreach, aby:

$products = [
    "Chleb" => 4.50,
    "Mleko" => 3.20,
    "Ser" => 8.00,
    "Jajka" => 5.00
];

$total = 0 ;

foreach ($products as $product => $price){
    echo "Produkt : $product ,Cena : $price \n";
    $total += $price;
}

echo "$total";
******************************************************************************
*/

/*

**********************Break i continue *****************************
Instrukcja break
przerywa dzialanie petli

$wallet = 1000;
$cart = [
    ['item' => 'myszka', 'price' => 100],
    ['item' => 'papier do drukarki', 'price' => 10],
    ['item' => 'klawiatura', 'price' => 200],
    ['item' => 'laptop', 'price' => 5000],
    ['item' => 'DOOM', 'price' => 159],
];


$cartValue = 0;
foreach($cart as $item){
    $cartValue += $item['price'];
    echo $item['item'] ."\n";
    if ($cartValue > $wallet){
        echo 'Przekroczyles kwote która dysponujesz';
        break;
    }
}

Instrukcja continue
przerywa dzialanie danej iteracji i powoduje automatyczne przejscie do kolejnej 
pod warunkiem ze wyrazenie ktore jest sprawdzane bedzie prawdziwe

$wallet = 1000;
$cart = [
    ['item' => 'myszka', 'price' => 100],
    ['item' => 'papier do drukarki', 'price' => 10],
    ['item' => 'klawiatura', 'price' => 200],
    ['item' => 'laptop', 'price' => 5000],
    ['item' => 'DOOM', 'price' => 159],
];


$cartValue = 0;
foreach($cart as $item){
    if ($item['price'] >= 1000){
        echo "Produkt : {$item['item']} kosztuje za duzo, odłoż go na półke \n";
        continue;
    }
    $cartValue += $item['price'];
}
echo "Wartość twoich zakupow wynosi $cartValue \n";

Jesli chcemy sie odniesc do jakies wartosci naszego elementu np $item['price']
to przy echo wyswietli sie nam blad prasowania , musimy uzyć {$item['price']} zeby wyswietlilo nam wartosc 


*/

/*
*********************Funkcje*******************
Umozliwiaja nam na stworzenie wlasnego kodu i go nazwanie
za pomoca tej nazwy bedziemy sie mogli do niej pozniej odwolac i wywolac kod
ktory zostal wczesniej stworzony

Ogromna ilosc funkcji jest wbudowanych w jezyk php , wszystko mozna znalezc na stronie php.net

Budowa funkcji (wlasnej)
function nazwaFunkcji(argumenty): typWartosciZwracanej
{
    ciałoFunkcji
}

Do zdefiniowania funkcji musimy uzyc slowa kluczowego "function"

nazwafunkcji - jest nazwa ktorą nadajemy dzieki czemu w przyszlosci bedziemy w stanie jej uzyc
zapamietac ze nazwa funkcji ma opisywac co sama funkcja robi zeby po zobaczeniu nazwy od razu bylo wiadomo do czego ona sluzy

nazwy funkcji nie poprzedzamy znakiem dolara

cialo funkcji - to jest ten kod ktory chcemy 'zamknac'/'umiescic' pod dana funkcja

argumenty - sa to argument ktore przekazujemy do wnetrza funkcji , argumenty to tak naprawde jakies parametry (zmienne) z poza funkcji
na podstawie ktorych funkcja cos robi

typwartosci - tutaj okreslamy jakiego typu beda dane,ktore nasza funkcja ma zwrocic po skonczonej pracy


warto zaznaczyc ze funkcja nie musi nic zwracac , wtedy poslugujemy sie zapisem z uzyciem slowa 'void'
przy definicji funkcja ta jest opcjonalna i nie musimy jej pisac jednak zaleca sie robienie tego ze wzgledow na spojnosc i czytelnosc kodu

//uruchomienie  / wywolanie funkcji
nazwaFunkcji(argumenty);

//uruchomienie i przypisanie zwracanej wartosci

$result = nazwaFunkcji(argumenty);
*************************************************
function add($a,$b): int
{
    return $a + $b;
}

echo add(2,3);


*************************************************
function sayHello($name)
{
    echo "Hello $name \n";
}

sayHello('Mateusz');

*************************************
Nie mozemy sie odniesc do zmiennej w naszej funkcji ktora jest poza funkcja np 

$name = 'Mateusz';

function sayHello()
{
    echo "Hello $name\n"
}

sayHello();

wyskoczy wtedy blad , zeby nam odczytalo ta zmienna musimy ja pierw przekazac do naszej funkcji

$name = 'Mateusz';

function sayHello($name)
{
    $name = $name . " Kal";
    echo "Hello $name\n";
}

sayHello($name);

echo "Poza funkcja $name";

Warto zaznaczyc ze przy uzyciu zmiennej z zewnatrz nie jest ona modyfikowana , wszystko co dzieje sie w funkcji nie oddzialowywuje na zmienne z zewnatrz
w tym przypadku zmienna $name poza funkcja i zmienna $name wewnatrz funkcji to sa dwie rozne zmienne

*******************
Nie mozemy wywolywac zmiennych ktore znajduja sie wewnatrz funkcji sa one nie widoczne poza nasza funkcja 
przyklad  gdzie probujemy wywolac zmienna name ktora znajduje sie w srodku funkcji 
wyskoczy nam blad(undefined variable) poniewaz funkcja echo nie moze zlokalizowac $name ktory jest wewnatrz funkcji 
w skrocie to co zostalo zdefiniowane wewnatrz funkcji nie wychodzi poza nia

function sayHello($name)
{
    echo "Hello $name \n";
}

sayHello('Mateusz');
echo "$name";

*************************************
przyklad z uzyciem funkcji i tablicy

$name = ['Mateusz','Artur'];

function sayHello($name)
{
    foreach($name as $i){
        echo "Hello $i\n";
    }
    //$name = $name . " Kal";
    
}

sayHello($name);

*************************** funkcja z uzyciem dwoch argumentow *********************

function sayHello($firstName,$lastName)
{
    echo "Hello $firstName $lastName";
}

sayHello('Mateusz','Kaleta');


******************** funkcja z wartosciami domyslnymi ****************
wartosci domyslne mozemy przypisac od razu do argumentu , co oznacza ze gdy nie podamy parametrow pod podany argument to automatycznie go nam uzupelni jak w ponizszych przykladach
oczywiscie mozemy zmienic domyslny argument na jakis innych , wystarczy przy wywolaniu wpisac co ma znajdowac sie pod podanym argumentem
warto zapamietac ze wartosciu domyslne zawsze podajemy je od konca w innym wypadku moze dojsc do bledow np

function test($a ='a' ,$b='b')
{
    // do something
}

test(,'c') nie podalismy pierwszego argumentu mimo iz jest przypisany ale mimo to wyskoczy nam blad bo jezyk php nie jest wstanie zinterpetowac tego


function sayHello($firstName,$lastName = 'Kaleta')
{
    echo "Hello $firstName $lastName";
}

sayHello('Mateusz');



function sayHello($firstName,$language = 'en')
{
    if($language === 'en'){
        echo "Hello $firstName \n";
    }else if ($language === 'pl'){
        echo "Witaj $firstName \n";
    }else{
        echo "Undefined Language";
    }
}

sayHello('Mateusz','pl');
sayHello('Mateusz');

function testDefault($arg1='foo', $arg2 = 'bar')
{
    var_dump($arg1);
    var_dump($arg2);
}

testDefault('test'); ok
testDefault('test1'.'test2'); ok
//testDefault( ,'test2'); blad / nie mozemy tak wywolywac funkcji , domyslne wartosci musza byc na ,koncu puste miejsca przed nimi dadza nam blad 


**************************Typowanie w php *************************
Typowanie statyczne oznacza, że typ zmiennej jest znany i określony przed uruchomieniem programu, np. podczas kompilacji. W przypadku PHP, 
które od wersji 7 wprowadziło bardziej rygorystyczne opcje, można używać deklaracji typów, aby wymusić zgodność typów. Przykład statycznego typowania w PHP to:

function sum(int $a, int $b): int {
    return $a + $b;
}

jak widac w powyzszym przykladzie od razu zadeklarowalismy przy naszych argumentach jakiego typu danych maja byc i co ma zwracac

Typowanie dynamiczne natomiast oznacza, że typ zmiennej jest określany w czasie działania programu na podstawie przypisanej wartości.
 PHP jest głównie językiem dynamicznie typowanym, co oznacza, że zmienna może przechowywać wartości różnych typów w różnych momentach.

$a = 10;   // $a jest teraz typu int
$a = "tekst";  // teraz $a jest typu string

jak widac w powyszym przykladzie , mamy zmienna ktorej nie deklarujemy czym ma byc i nasz jezyk php sam zwraca wartosc w zaleznosci co dana zmienna przechowuje
$zaz;

if (rand(0,1)) {
    $zaz = 'test';
}else{
    $zaz = 34;


funkcja rand - losuje nam jakas liczbe z podanego przez nas zakresu 

typy danych ktore mamy w php (powtorzenie)

 integer - liczba całkowita
 float - liczba rzeczywista/zmiennoprzecinkowa
 string - łańcuch znaków
 boolean - prawda lub fałsz true/false
 array - tablice
 object - obiekt
 null - wartość niezdefiniowana, pojawia się wtedy gdy zmiennej nie przypiszemy żadnej wartości
 resource - uchwyt do zasobu zewnętrznego 

 zalety uzywania typowania statycznego :
 - bardziej panujemy nad tym co się dzieje w naszej aplikacji
 - typowanie statyczne przyczynia się do polepszenia wydajności samej aplikacji
 - dzięki typowaniu statycznego łatwiej poznajemy jak działa nasza aplikacja

 okreslenie typu uzyskujemy poprzez dodanie nazwy typu przed nazwa np 

 function sayHello(string $name){
    var_dump($name);
    echo "Hello $name\n";
}

sayHello('Mateusz');

************************************
przyklad z liczba gdzie jezyk sam nam przekonwertuje w string

function sayHello(string $name){
    var_dump($name);
    echo "Hello $name\n";
}

$intValue = 100;
var_dump($intValue);
sayHello($intValue);

*****************Tryb coercive i strict *******************
-coercive - tryb domyslny , dopuszcajacy rzutowanie
- strict- scisly , ktory nie dopuszcza rzutowania

w trybie domyslnym (coercive) w ktorym przed chwila uruchamialiesmy powyzsza funkcje sayhello okreslenie typu jest tylko wskazowka
dla php mowiaca na jaki typ musi zmienic wartosc przekazana do funkcji

Aby wlaczyc tryb scisly(strict) nalezy na poczatku pliku dodac linię
declare(strict_type=1);
tryb scisly obowiazuje tylko dla pliku w ktorym zostal wlaczony
jesli chcemy go uzywac w calym projekcie to musimy deklarowac to w kazdym pliku

//declare(strict_types=1);

function sayHello(string $name){
    var_dump($name);
    echo "Hello $name\n";
}

sayHello('Tom'); zadziala

$intValue = 100;
var_dump($intValue);
sayHello($intValue); blad
*/
/*
****************Wartośc null w argumencie ***********       
W php nasze argumenty moga przyjmowac wartość null
Aby to zrobić posłujemy się znakiem zapytania "?"


function sayHello(?string $name)
{
    if ($name !== null){
        echo "Hello $name \n";
    }else{
        echo "Hello !!!!";
    }
}

sayHello('Mat');
sayHello(null);

*/
/*
*************Wartosci zwracane**********
Kazda funkcja moze ale nie musi zwracac danych tzn
zwracana wartosc powoduje ze z wnetrza funkcji mozemy cos przekazac na zewnatrz
osiagamy to przy uzyciu slowa 'return'



function countLetter(string $word)
{
    $count = strlen($word);
    return $count;
}

$test = countLetter('bar');
var_dump($test);


lub nieco zwiezlej

function countLetter(string $word)
{
    return strlen($word);
}

$test = countLetter('bar');
var_dump($test);


return przerywa dzialanie funkcji np 

function countLetter(string $word)
{
    var_dump('before return'); / wyswietlimy
    return strlen($word); / zwroci wartosc i w tym momencie przerwie nasza funkcje
    var_dump('after return'); / nie pojawi sie wogole poniewaz return przerywa / konczy nasza funkcje
}

$test = countLetter('bar');
var_dump($test);


function countLetter(string $word)
{
    return strlen($word);
}
// funkcja cos zwraca i mamy tutaj kilka opcji co mozemy z tym zrobic
// mozemy zignorowac wynik 

countLetter('bar');

// przypisac do zmiennej

$count = countLetter('bar');
echo $count;

// od razu uzyc
echo countLetter('bar');

// uzyc w wyrazeniu

if (countLetter('bar') > 10){
    // do something
}

function countLetter(string $word)
{
    return strlen($word);
}
// funkcja cos zwraca i mamy tutaj kilka opcji co mozemy z tym zrobic
// mozemy zignorowac wynik 

countLetter('bar');

// przypisac do zmiennej

$count = countLetter('bar');
echo $count;

// od razu uzyc
echo countLetter('bar');

// uzyc w wyrazeniu

if (countLetter('bar') > 10){
    // do something
}

*/

/*
typowanie zwracanej wartosci zapis

 Zaraz za listą argumentów po znaku "dwukropka" wpisujemy typ wartości którą funkcja będzie zwracać.
 
 Podobnie jak z argumentami dobrą praktyką jest określanie zwracanego typu.

function countLetter(string $word): int  // jak widac po dwukropku zapisalismy co nasza funkcja zwraca tzn jaki typ zwraca
{                                       // jak nasza funkcja nie bedzie nic zwracac uzywamy slowa void
    return strlen($word);
}


funkcja ktora nam nic nie zwraca (void)

function sayHello($name):void
{
    echo "Hello $name \n";
}


jak widac nie mamy instrukcji return co oznacza ze nasza funkcja nie zwraca nam zadnej wartosci , czyli uzywamy slowa void 
ew mozemy tez dodac ze moze nam zwrocic wartosc null albo zadnej tak by wygladal zapis takiej funkcji   

function sayHello($name):?void
{
    echo "Hello $name \n";
    return;
}

*/


/*

**************Funkcje anonimowe i callable **************
Funkcja anonimowa jest to funkcja bez nazwy
budowa funkcji anonimowej

function (arguments): returnType
{
    // function body
}

funkcje anonimowa mozemy przpisac do zmiennej jako wartosc i wtedy mozemy sie poslugiwac za pomoca tej zmiennej np

$myFunction = function (string $name): void
{
    echo "Hello $name\n";
};

$myFunction('tom');

mozemy przekazac funkcje jako argument do innej funkcji i to nazywamy jako argument typu callable

function mycall(callable $func): void
{
    $func();
}

mycall(function() {
    echo "cokolwiek \n";
});

$myFunction = function (string $name): void
{
    echo "Hello $name\n";
};


function mycall($name, callable $func): void
{
    $func($name);
}

$myFunction =function($name) {
    echo "$name \n";
};

mycall('Mateusz', $myFunction);

*/

/*

***************Funkcje strzałkowe*******************
budowa funkcji strzałkowej , jest ona krotsza,sa uzyteczne gdy potrzebujemy wykonac jakas mala operacje

fn($value) => $value * 2;

ta sama funkcja tylko z uzyciem anonimowej funkcji 

fn($value) => $value * 2;

$arrowFunct =function ($value): int{
    $result = $value * 2;
    return $result;
};
echo $arrowFunct(5);

zastosowanie funkcji strzalkowej
jako iz to tez jest funkcja anonimowe to mozemy ja przypisac do zmiennej np

$myFunction = fn(int $value): int => $value * 2;

$result = $myFunction(20);

var_dump($result);


funkcja strzlkowa z uzyciem tablicy

$users = [
    'Anna',
    'Bartek',
    'Jacek'
];

array_map - to funkcja w PHP, która służy do przekształcania elementów tablicy za pomocą funkcji zdefiniowanej przez użytkownika lub wbudowanej. array_map przyjmuje jako argumenty 
funkcję oraz jedną lub więcej tablic i stosuje tę funkcję do każdego elementu z podanych tablic, zwracając nową tablicę z wynikami.
jest użyteczne, gdy chcemy zastosować operację na każdym elemencie tablicy


$hello = array_map(
    fn($elem)=> "Hello ".$elem,
    $users

);


print_r($hello);

$myFunction = fn($a,$b) => $a * $b;

echo $myFunction(3,4);

$sum = fn($a, $b) => $a + $b;
echo $sum(2, 3);

array_filter - to funkcja w PHP, która służy do filtrowania elementów tablicy na podstawie warunku zdefiniowanego przez użytkownika. Funkcja ta zwraca nową tablicę zawierającą tylko te elementy, 
które spełniają określone kryteria. Pozwala to na szybkie odfiltrowanie elementów bez konieczności stosowania pętli

$numbers = [1, 2, 3, 4, 5];
$evenNumbers = array_filter($numbers, fn($num) => $num % 2 === 0);
print_r($evenNumbers);

$values = [0, 1, false, 2, '', 3];
$filtered = array_filter($values);
print_r($filtered);
*/
/*
********************************OOP(Object oriented programming)*********************************
 KLASA - to szablon lub blueprint, który definiuje właściwości (zmienne) i metody (funkcje), na podstawie których można tworzyć obiekty. Klasy są podstawowymi elementami programowania obiektowego i 
 umożliwiają strukturyzację kodu w bardziej zorganizowany sposób, co ułatwia jego zrozumienie i utrzymanie.
 OBIEKT - to instancja klasy. Obiekt jest tworzony na podstawie klasy i dziedziczy jej właściwości oraz metody. Dzięki temu można
 pracować z danymi i operacjami zdefiniowanymi w klasie.

 Standardem jest, że nazwa klasy powinna się zaczynać z dużej litery.

Tworzenie klasy i budowa klasy


class NazwaKlasy
{
    // ciało klasy
}


class Person
{
    public $name;

    public function __construct(string $name)
    {

        $this->name = $name;
    }

    public function describe()
    {
        return "Witaj w naszej klasie $this->name !!!";
    }
}

$myPerson = new Person('Mateusz');

echo $myPerson ->describe();


class Person
{
    public $class;
    public $specialization;

    public function __construct($class,$specialization)
    {

        $this->class = $class;
        $this->specialization = $specialization;
    }

    public function describe()
    {
        return "Stworzona postac to $this->class , specjalizacja $this->specialization \n";
    }
}

$myPerson = new Person('Priest','Shadow');

echo $myPerson ->describe();

class Car {
    public $color;
    public $brand;

    // Konstruktor
    public function __construct($color, $brand) {
        $this->color = $color;
        $this->brand = $brand;
    }

    // Metoda klasy
    public function describe() {
        return "This car is a $this->color $this->brand.";
    }
}

// Tworzenie obiektu klasy Car
$myCar = new Car("red", "Toyota");
echo $myCar->describe(); // Wynik: This car is a red Toyota.

*/
 
/*
******************Właściwosci klasy**************
class Flat
{
    public string $type; /// mozna okresic typ wlascicowsci , wprowadzono to w php 7.4
}

$myFlat = new Flat();
var_dump($myFlat);

Aby odwolać sie do wlasciwosciu ubiektu używamy strzałki "->" nazywamy ja pobranie

$myFlatType = $myFlat -> type;
var_dump($myFlatType);

//mozemy sie tez odwolac bezposrednio do wlasciwosci bez koniecznosci przypisywania jej do zmiennej

var_dump($myFlat->type);

// przypisanie wartosci do wlasciwosci

$myFlat->type = "M4";
var_dump($myFlat);


Jak w poprzednich lekcjach np o funkcjach mozemy przypisac wartosc domyslna

class Flat
{
    public $type = 'M';
}
*/

/* ******************* Metody 

 Klasa może posiadać pewne zachowania, które możemy wywoływać. 
 Zachowania te nazywamy METODAMI 
 
 METODY można przyrównać do funkcji tylko umieszczonej wewnątrz obiektu.
 
class Flat // klasa
{
    public ?string $type = Null;

    public function open():void // metoda
    {
        echo "Drzwi zostały otwarte \n";
    }

    public function close():void  // metoda
    {
        echo "Drzwi zostały zamknięte \n";
    }

    public function foo(string $command): void  // metoda
    {
        if ($command === 'foo'){
            echo 'Typ posiada wartość foo';
        }else{
            echo 'Typ posiada inną wartość ';
        }
    }
    
}

$myFlat = new Flat(); // tworzenie obiektu 

$myFlat->open();  // wywolanie metody

$myFlat ->close(); // wywolanie metody

$myFlat->foo('fo'); // wywolanie metody


*/

/*

**********************$This******************************
$this jest podstawowym mechanizmem w programowaniu obiektowym w PHP, pozwalającym na:

Odwoływanie się do właściwości i metod bieżącego obiektu.
Budowanie bardziej dynamicznych i elastycznych klas.
Implementację wzorców, takich jak fluent interface.

$this jest wskaźnikiem na bieżącą instancję klasy.
Pozwala na dostęp do właściwości i metod tej instancji.
Nie może być używane w kontekście statycznym.

Dostep do wlasciwosci

class User {
    public $username;

    public function setUsername($username) {
        $this->username = $username; // Odwołanie się do właściwości obiektu
    }

    public function getUsername() {
        return $this->username; // Zwracanie wartości właściwości
    }
}

$user = new User();
$user->setUsername("JohnDoe");
echo $user->getUsername(); // Wydrukuje "JohnDoe"


Wywolanie metod

class Calculator {
    private $result = 0;

    public function add($value) {
        $this->result += $value;
        return $this; // Możliwość łańcuchowego wywołania metod
    }

    public function subtract($value) {
        $this->result -= $value;
        return $this;
    }

    public function getResult() {
        return $this->result;
    }
}

$calc = new Calculator();
echo $calc->add(10)->subtract(3)->getResult(); // Wydrukuje 7


uzycie this w konstruktorze

class Product {
    private $name;

    public function __construct($name) {
        $this->name = $name; // Ustawienie właściwości za pomocą $this
    }

    public function getName() {
        return $this->name;
    }
}

$product = new Product("Laptop");
echo $product->getName(); // Wydrukuje "Laptop"


class Flat
{

    public ?string $type = null;

    public function isTypeSet():bool 
    {   // metoda ktora sprawdza czy nasza metoda jest ustawiona
        return (bool) $this->type; 
        // odwolywanie sie do wlasciwosci type rzutujemy ja na typ bool czyli zwroci nam true albo false w zaleznosci co mamy przypisane do $type
    }

    public function printType():void 
    { // metoda ktora wywoluje nam jakie mamy mieszkanie
        if($this -> isTypeSet()){  
            // sprawdzenie czy jakis typ jest ustawiony (czy przyjmuje wartosc true)
            echo "Nasze mieszkanie to : ". $this->type . "\n";
        }else{ 
            // jesli nie ustawilismy zadnego typu mieszkania zostaje wykonana ta linijka
            echo "Jeszcze nie wiemy jakiego typu jest nasze mieszkanie \n";
        }
    }
}

$myFlat = new Flat(); // stworzenie obiektu
$myFlat->printType();
$myFlat -> type = "M3"; // przypisanie typu mieszkania do obiektu
$myFlat->printType(); // wywolanie metody

*/
/*
Modyfikatory dostępu

 Istnieją trzy rodzaje modyfikatorów dostępu:
 - public
 - private
 - protected

 Domyślnie, jeśli nie użyjemy żadnego modyfikatora to właściwość/metoda jest automatycznie publiczna.
 Jednak DOBRĄ PRAKTYKĄ jest zawsze używać modyfikatora dostępu.
 
 PUBLIC - właściwość/metoda jest publiczna i dostęp do niej jest zarówno z wnętrza obiektu jak i z poza jej wnętrze
 PRIVATE - właściwość/metoda jest prywatna i dostęp do niej jest tylko z wnętrza obiektu
 PROTECTED - właściwość/metoda jest chroniona i nie ma dostępu do niej z poza obiektu. Wrócimy do tematu jak już poznamy dziedziczenie


 
class SomeClass
{
    public string $foo = 'public'; // właściwość/metoda jest publiczna i dostęp do niej jest zarówno z wnętrza obiektu jak i z poza jej wnętrze
    private string $bar = 'private'; // właściwość/metoda jest prywatna i dostęp do niej jest tylko z wnętrza obiektu
    protected string $baz = 'protected'; //właściwość/metoda jest chroniona i nie ma dostępu do niej z poza obiektu.


    private function priv():void // prywatna funkcja dziala tylko wewnatrz obiektu
    {
        echo "Prywatna medota";
    }
   
    public function printProperties():void // publiczna jest dostepna na zewnatrz i wewnatrz obiektu
    {
        var_dump($this->foo);
        var_dump($this->bar); // uzycie prywatnej w publicznej funkcji pozwala nam na wyswietlenie
        var_dump($this->baz);

        $this->priv(); // uzycie prywatnej w publicznej funkcji pozwala nam na wyswietlenie
    }
}  

$object = new SomeClass();
$object -> printProperties();


ZAPAMIETAC - Domyslnie najlepiej uzywac modyfikatora private (chyba ze bedziemy potrzebowac dostepu z zewnatrz ale to juz zalezy od logiki naszego programu)

class Flat
{
    private string $doorLockCode = '123qwe';

    private bool $closed = true;

    public function close():void
    {
        $this->closed = true;

    }


    public function open(string $code): void
    {
        if ($code === $this->doorLockCode){
            $this->closed = false;
            echo "Kod jest poprawny \n";
        }else{
            //logowanie informacji o probie uzycia niepoprawnego kodu
            echo "Kod niepoprawny \n";
        }

        }

    public function isOpen(): bool
    {
        return !$this->closed;
    }
}


$myFlat =new Flat();
var_dump($myFlat);
$myFlat->open('123qwe');
*/

/*
Konstruktor nie jest niczym innym jak metodą zdefiniowaną w klasie.
 Nie musimy jej ręcznie wywoływać.
 Zostanie wywołany automatycznie gdy tylko będziesz tworzył nowy obiekt.

 Jeśli chodzi o implementację konstruktora to metoda która nim jest ma specjalną nazwę: __construct

 Funkcje i zalety:
Automatyczne wywołanie: __construct uruchamia się automatycznie przy użyciu słowa kluczowego new podczas tworzenia obiektu.

Elastyczność i czytelność kodu: Pozwala na ustawianie właściwości klasy bez konieczności osobnego wywoływania metod.

Dziedziczenie: W klasach dziedziczących można nadpisywać konstruktor rodzica lub wywoływać go przy użyciu parent::__construct().


 class SomeClass 
{
    public function __construct()
    {
        echo "Hej to ja, konstruktor Twojej klasy. Ja istnieję !!!\n";
    }
}

$object = new SomeClass();


 Konstruktor służy do wstępnego skonfigurowania nowo powstającego obiektu, 
 poprzez odpowiednie ustawienie jego właściwości


 przyklad uzycia konstruktora
class Flat
{
    private int $doorLockCode;

    private bool $closed = true;


    public function __construct(int $doorCode)
    {
        if(strlen((string)$doorCode) < 6){
            echo 'Błąd';
        }else{
            $this->doorLockCode =$doorCode ;
        }
    }

    public function close():void
    {
        $this->closed = true;

    }


    public function open(string $code): void
    {
        if ($code === $this->doorLockCode){
            $this->closed = false;
            echo "Kod jest poprawny \n";
        }else{
            //logowanie informacji o probie uzycia niepoprawnego kodu
            echo "Kod niepoprawny \n";
        }

        }

    public function isOpen(): bool
    {
        return !$this->closed;
    }
}

$newDoorCode = rand(100000,999999);
$flat = new Flat($newDoorCode);

var_dump($flat);

Konstruktor jako uzycie wartosci domyslnej

class Product {
    public $price;

    public function __construct($price = 100) {
        $this->price = $price;
    }
}

$product1 = new Product(); // Użyje wartości domyślnej
$product2 = new Product(200); // Nadpisze wartość domyślną

echo $product1->price; // 100
echo $product2->price; // 200

Wywoływanie metod wewnątrz konstruktor

class Logger {
    public function __construct() {
        $this->logMessage();
    }

    private function logMessage() {
        echo "Logowanie rozpoczęte\n";
    }
}

$logger = new Logger(); // Wyświetli: Logowanie rozpoczęte

uzycie wartosci domyslnych w konstruktorze

class Product {
    public $price;

    public function __construct($price = 100) {
        $this->price = $price;
    }
}

$product1 = new Product(); // Użyje wartości domyślnej
$product2 = new Product(200); // Nadpisze wartość domyślną

echo $product1->price; // 100
echo $product2->price; // 200

*/


/*
Zasady tworzenia dobrych klas 

Schemat ktorego powinnismy sie trzymac przy konstrukcji naszej klasy dzieki czemu nasz kod stanie sie czytelniejszy 
(wszystko jest poukladane na swoim miejscu od razu wiadomo gdzie czego szukac)

class SomeClass()
    {
        // Stałe publiczne  
        // Stałe prywatne 

        // Właściwości statyczne publiczne 
        // Właściwości statyczne prywatne 
        // Metody statyczne publiczne 
        // Metody statycznie prywatne 

        // Właściwości publiczne
        // Właściwości prywatne

        // Konstruktor

        // Metody publiczne
        // Metody prywatne
    }
*/

/*
***********************Stałę oraz metody i własciwosci statyczne*********************

 Od wersji 7.1 możemy używać modyfikatorów dostępu w kontekście stałych. // zapamietac w razie gdyby przyszlo pracowac na starszej wersji php
 Jeśli nie użyjemy żadnego to stała domyślnie jest publiczna.
 
 Przy nazewnictwie stałych obowiązują te same dobre praktyki co przy stałych globalnych.
 Do stałej musimy przypisać konkretną wartość np. string, tablica, nie mogą to być jednak wyrażenia, 
 czyli zmienne, właściwości czy rezultat zwrócony przez wywołanie funkcji/metody
 
 Do stałej odwołujemy się przez nazwę klasy oraz użycie podwójnego dwukropka "::"
 Z wnętrza klasy do prywatnej (nie tylko) stałej odwołujemy się za pomocą słowa "self", które wskazuje na nazwę klasy.
 Istotny jest fakt, że nie potrzebujemy używać znaku dolara "$" przed nazwą stałej.
 
 Stałe są inicjalizowane tylko raz gdy PHP wczyta kod klasy 
 a nie za każdym razem gdy tworzymy nowy obiekt danej klasy.

Stałe są powiązane z klasą a nie z obiektem !



class SomeClass
{
    const BAR = 'bar'; // publiczna
    public const FOO = 'foo';
    private const ZAZ = 'zaz';

    public function doSomething(): void
    {
        echo self::ZAZ; // wywolanie stałej wewnatrz klasy
    }

}

echo SomeClass::FOO . "\n";  // uzycie stałej poza klasaa // do stałej odwolujemy sie poprzez klase a nie obiekt
//echo SomeClass::ZAZ . "\n";

$object = new SomeClass();
$object->doSomething();


Słowo kluczowe self odnosi się do bieżącej klasy, w której zostało wywołane. Jest używane w celu dostępu do statycznych metod i stałych w obrębie tej klasy.
Self -  działa w czasie kompilacji, a nie wykonania, co oznacza, że zawsze odnosi się do klasy, w której zostało zdefiniowane,

Kiedy używać self?
Gdy chcesz wyraźnie wskazać, że używasz elementów (metod, stałych) z tej samej klasy.
Gdy nie chcesz, aby elementy zostały nadpisane przez klasy dziedziczące.

 
*/


/*
**********************Właściwośći statyczne **************************

 Tworzymy je za pomocą słowa 'static' dodawanego przed nazwą właściwości/metody.
 Tutaj również mają zastosowanie modyfikatory widoczności.

 wlasciwosci i metody statyczne wspoldziela sie pomiedzy wszystkie nowe obiekty 

 Dostęp do statycznej właściwości/metody uzyskujemy przez użycie podwójnego dwukropka: "::"
 Z zewnątrz klasy musimy się nazwą klasy aby uzyskać dostęp do właściwości/metod statycznych.
 Natomiast z wnętrza klasy posługujemy się słowem "self" które wskazuje na klasę w której się znajduje.

Konwencja nazewnicza obowiązuje taka jak przy nazywaniu zmiennych.
 Musimy używać znaku dolara "$" przy odwoływaniu się do właściwości/metody statycznej

Z zewnątrz do właściwości statycznych/metod można odwołać się też przy użyciu nazwy obiektu:
 $object::$staticProperty
 $object::staticMethod();

W metodach statycznych nie można używać właściwości $this, natomiast w zwykłych metodach jak najbardziej możemy używać "self".
Self - istnieje zawsze i odwołuje się do klasy, natomist $this istnieje tylko w kontekście obiektu


przyklad uzycia statycznej metody , wraz z wywolaniem oraz wynikami 


class Flat 
{
    private const BUILT = 5;

    private static $sold = 0;

    public static function sold():int
    {
        return self::$sold;
    }


    public function __construct()
    {
        if (self::$sold < self::BUILT){
            self::$sold += 1;
        }else{
            echo "Sprzedano wszystkie mieszkania \n";
        }
    }

}

$newFlat = new Flat();
var_dump(Flat::sold()); /1
$newFlat1 = new Flat();
new Flat(); /2
new Flat(); /3 
new Flat(); /4
var_dump(Flat::sold()); /5
new Flat(); /sprzedano wszystkie mieszkania
new Flat(); /sprzedano wszystkie mieszkania
*/

class Flat 
{
    private const BUILT = 5;

    private static $sold = 0;

    public static function sold():int
    {
        return self::$sold;
    }


    public function __construct()
    {
        if (self::$sold < self::BUILT){
            self::$sold += 1;
        }else{
            echo "Sprzedano wszystkie mieszkania \n";
        }
    }

}

$newFlat = new Flat();
var_dump(Flat::sold());
$newFlat1 = new Flat();
new Flat();
new Flat();
new Flat();
var_dump(Flat::sold());
new Flat();
new Flat();


