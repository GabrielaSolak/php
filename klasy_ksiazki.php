<?php

class Ksiazka
{
    public $tytul, $autor, $rok_wydania, $wydawnictwo, $gatunek, $identyfikator;

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

















?>