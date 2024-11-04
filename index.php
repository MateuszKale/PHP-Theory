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

