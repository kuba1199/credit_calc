<?php

require_once 'CalcForm.class.php';
require_once 'CalcResult.class.php';


class CalcCtrl {

  
	private $form;   
	private $result; 
	

	public function __construct(){
		
		$this->form = new CalcForm();
		$this->result = new CalcResult();
		
	}
	

public function getParams(){
		$this->form->kwota = getFromRequest('kwota');
		$this->form->czas = getFromRequest('czas');
		$this->form->percent = getFromRequest('percent');
}



//walidacja parametrów z przygotowaniem zmiennych dla widoku
function validate() {

    //sprawdzenie, czy parametry zostały przekazane - jeśli nie to zakończ walidację
    if (!(isset( $this->form->kwota ) && isset ( $this->form->czas ) && isset ( $this->form->percent ))) {
        return false;
	} 

    if ($this->form->kwota == "") {
		
			getMessages()->addError('Nie podano kwoty kredytu');
	}
	
	if ($this->form->czas == "") {
			getMessages()->addError('Nie podano lat kredytu');
	}
	
	if ($this->form->percent == "") {
			getMessages()->addError('Nie podano oprocentowania');
	}
	
	
	if (! getMessages()->isError()) {
	
		if (! is_numeric ( $this->form->kwota )) {
				getMessages()->addError('Kwota nie jest liczbą');
			}
	
		if (! is_numeric ( $this->form->czas )) {
			getMessages()->addError('Wartość lat nie jest liczbą');
				
			}
			
		if (! is_numeric ( $this->form->percent )) {
			getMessages()->addError('Procent lat nie jest liczbą');
				
			}
	}


		return ! getMessages()->isError();
	}


  
public function process(){

		$this->getparams();
		
		if ($this->validate()) {
				
			//konwersja parametrów na int
			$this->form->kwota = floatval($this->form->kwota);
			$this->form->czas = floatval($this->form->czas);
			$this->form->percent = floatval($this->form->percent);
			getMessages()->addInfo('Parametry poprawne.');
				
				    $this->result->result = round($this->form->kwota / (12 * $this->form->czas) + ($this->form->percent * 0.01*($this->form->kwota / (12 * $this->form->czas))),2);

				
				
			getMessages()->addInfo('Wykonano obliczenia.');
		}
   	$this->generateView();
}


public function generateView(){
	
		getSmarty()->assign('page_title','Kalkulator kredytowy');
		getSmarty()->assign('page_description','Zapraszam do obliczenia raty kredytu');
		getSmarty()->assign('page_header','Kontroler główny');
					
		getSmarty()->assign('form',$this->form);
		getSmarty()->assign('res',$this->result);
		
		getSmarty()->display('calc_view.html'); // już nie podajemy pełnej ścieżki - foldery widoków są zdefiniowane przy ładowaniu Smarty
	}
}