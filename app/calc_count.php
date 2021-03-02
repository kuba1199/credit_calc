<?php
require_once dirname(__FILE__).'/../cfg.php';


//pobieranie parametrów
$x = $_REQUEST['x'];
$y = $_REQUEST['y'];
$z = $_REQUEST['z'];


// 2. walidacja parametrów z przygotowaniem zmiennych dla widoku
if ( ! (isset($x) && isset($y) && isset($z))) {
	$messages[] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
}

//sprawdzanie czy dane parametry zostały wpisane

if ( $x == "") {
	$messages [] = 'Nie podano kwoty kredytu';
}
if ( $y == "") {
	$messages [] = 'Nie podano czasu kredytu';
}
if ($z == "") {
	$messages [] = 'Nie podano oprocentowania';
}

if (empty( $messages )) {
	
	// sprawdzenie, czy $x i $y są liczbami całkowitymi
	if (! is_numeric( $x )) {
		$messages [] = 'Pierwsza wartość nie jest liczbą całkowitą';
	}
	
	if (! is_numeric( $y )) {
		$messages [] = 'Druga wartość nie jest liczbą całkowitą';
	}	
	
	if (! is_numeric( $z )) {
		$messages [] = 'Trzecia wartość nie jest liczbą całkowitą';

}
}

// 3. wykonaj zadanie jeśli wszystko w porządku

if (empty ( $messages )) { // gdy brak błędów
	
	//konwersja parametrów na int
	$x = intval($x);
	$y = floatval($y);
	$z = intval($z);
	
	$result = $x / (12 * $y) + ($z * 0.01*($x / (12 * $y)));
}
// 4. Wywołanie widoku z przekazaniem zmiennych
// - zainicjowane zmienne ($messages,$x,$y,$z,$result)
//   będą dostępne w dołączonym skrypcie
include 'seecalc.php';