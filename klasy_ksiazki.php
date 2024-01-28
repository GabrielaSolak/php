<?php

class Ksiazka
{
    public $tytul, $rok_wydania, $wydawnictwo;
    private $autor, $gatunek, $identyfikator;

    function wpiszTytul($arg0){
        $this -> tytul = $arg0;
    }

    function wpiszAutora($arg1){
        $this -> autor = $arg1;
    }

    function wpiszRokWydania($arg2){
        $this -> rok_wydania = $arg2;
    }

    function wpiszWydawnictwo($arg3){
        $this -> wydawnictwo = $arg3;
    }

    function wpiszGatunek($arg4){
        $this -> gatunek = $arg4;
    }

    function wpiszIdentyfikator($arg5){
        $this -> identyfikator = $arg5;
    }

    function pobierzTytul(){
        return $this -> tytul; 
    }

    function pobierzAutora(){
        return $this -> autor;
    }

    function pobierzRokWydania(){
        return $this -> rok_wydania;
    }

    function pobierzWydawnictwo(){
        return $this -> wydawnictwo;
    }

    function pobierzGatunek(){
        return $this -> gatunek;
    }

    function pobierzIdentyfikator(){
        return $this -> identyfikator;
    }

    function __construct(){
        $this -> tytul = 'Pan Tadeusz';
        $this -> autor = 'Adam Mickiewicz';
        $this -> rok_wydania = 1834;
        $this -> wydawnictwo = 'ibis';
        $this -> gatunek = 'Poezja epicka';
        $this -> identyfikator = 1;
    }
}


$ksiazka1 = new Ksiazka();

$ksiazka2 = new Ksiazka();
$ksiazka2 -> wpiszAutora('Wiesław Małecki');
$ksiazka2 -> wpiszRokWydania(1998);
$ksiazka2 -> wpiszWydawnictwo('Ringier Axel Springer Polska');
$ksiazka2 -> wpiszGatunek('miesięcznik');
$ksiazka2 -> wpiszIdentyfikator(2);
$ksiazka2 -> wpiszTytul('Komputer świat');

$ksiazka3 = new Ksiazka();
$ksiazka3 -> wpiszAutora('Remigiusz Mróż');
$ksiazka3 -> wpiszRokWydania(2020);
$ksiazka3 -> wpiszWydawnictwo('lubimyCzytać');
$ksiazka3 -> wpiszGatunek('powieść');
$ksiazka3 -> wpiszIdentyfikator(3);
$ksiazka3 -> wpiszTytul('Chyłka - Kasacja');


class Czasopismo extends Ksiazka
{
    public $nr;

    function wpiszNr($arg6){
        $this -> nr = $arg6;
    }

    function pobierzNr(){
        return $this -> nr; 
    }
}

$czasopismo1 = new Czasopismo;
$czasopismo1 -> wpiszRokWydania(1998);
$czasopismo1 -> wpiszWydawnictwo('Ringier Axel Springer Polska');
$czasopismo1 -> wpiszTytul('Komputer świat - bazy danych');
$czasopismo1 -> wpiszNr('3/2017');


class Multibook extends Czasopismo
{
    // if(empty($autor))
    // {
    //     $this -> autor = "Nie podano Autora multibooka";
    // }
}

$multibook1 = new Multibook;
$multibook1 -> wpiszAutora('Gabriela Solak');
$multibook1 -> wpiszRokWydania(2026);
$multibook1 -> wpiszWydawnictwo('Biuro Literackie');
$multibook1 -> wpiszGatunek('poezja');
$multibook1 -> wpiszIdentyfikator(4);
$multibook1 -> wpiszTytul('Spero in poetica');
$multibook1 -> wpiszNr('1/2026');

echo "Książka1:<br>";
echo $ksiazka1 -> pobierzAutora()."<br>";
echo $ksiazka1 -> pobierzTytul()."<br>";
echo $ksiazka1 -> pobierzRokWydania()."<br>";
echo $ksiazka1 -> pobierzWydawnictwo()."<br>";
echo $ksiazka1 -> pobierzGatunek()."<br>";
echo $ksiazka1 -> pobierzIdentyfikator()."<br><br>";
echo "Książka2:<br>";
echo $ksiazka2 -> pobierzAutora()."<br>";
echo $ksiazka2 -> pobierzTytul()."<br>";
echo $ksiazka2 -> pobierzRokWydania()."<br>";
echo $ksiazka2 -> pobierzWydawnictwo()."<br>";
echo $ksiazka2 -> pobierzGatunek()."<br>";
echo $ksiazka2 -> pobierzIdentyfikator()."<br><br>";
echo "Książka3:<br>";
echo $ksiazka3 -> pobierzAutora()."<br>";
echo $ksiazka3 -> pobierzTytul()."<br>";
echo $ksiazka3 -> pobierzRokWydania()."<br>";
echo $ksiazka3 -> pobierzWydawnictwo()."<br>";
echo $ksiazka3 -> pobierzGatunek()."<br>";
echo $ksiazka3 -> pobierzIdentyfikator()."<br><br>";
echo "Czasopismo1<br>";
echo $czasopismo1 -> pobierzRokWydania()."<br>";
echo $czasopismo1 -> pobierzWydawnictwo()."<br>";
echo $czasopismo1 -> pobierzTytul()."<br>";
echo $czasopismo1 -> pobierzNr()."<br><br>";
echo "Multibook1<br>";
echo $multibook1 -> pobierzAutora()."<br>";
echo $multibook1 -> pobierzTytul()."<br>";
echo $multibook1 -> pobierzRokWydania()."<br>";
echo $multibook1 -> pobierzWydawnictwo()."<br>";
echo $multibook1 -> pobierzGatunek()."<br>";
echo $multibook1 -> pobierzIdentyfikator()."<br>";
echo $multibook1 -> pobierzNr()."<br>";

?>
