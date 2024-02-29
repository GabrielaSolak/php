<?php
/*
- biblioteki: MySQL i PDO

-- Połączenie z wybraną bazą danych - MySQL -- 
1. Nawiązanie połączenia z MySQL i wybór bazy
2. Utworzenie zapytania i jego wykonanie
3. Otrzymanie rezultatów i wyświetlenie ich na stronie
4. Rozłączemie z serwerem (MySQL)

-- Nazwiązanie połączenia --
mysqli_connect(host, username, password, dbname, port, socket) 
host - nazwa serwera lub adres IP
username - nazwa uzytkowanika (root)
port - numer portu (nie użwane lokalnie)
socket - nazwa gniazda (nie użwane lokalnie)

mysqli_connect(nazwa_hosta[localhost lub 127.0.0.1], nazwa_uzytkowanika[root], haslo[pusty ciag znakow], nazwa_bazy)
*/

$do_bazy = mysqli_connect('localhost', 'root', '', 'ksiegarnia');
if(!$do_bazy)
{
    exit ("Błąd połączenia z serwerem MySQL");
}
else
{
    echo "Połączono z serwerem baz danych";
}

//mysqli_close(id_połączenia)

/*
-- Obsługa błędów --
- mysqli_connect_error() - błąd po
*/




?>