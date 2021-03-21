<?php

require_once $conf->root_path.'/lib/smarty/Smarty.class.php';
require_once $conf->root_path.'/lib/Messages.class.php';
require_once $conf->root_path.'/app/calc/CalcForm.class.php';
require_once $conf->root_path.'/app/calc/CalcResult.class.php';

//Kontroler kalkulatora

class CalcCtrl {
    
    private $msgs;  //wiadomości dla widoku
    private $form;  //dane formularza (obliczenia i widok)
    private $result;    //inne dane dla widoku
    
    
    public function __construct() {
        $this->msgs = new Messages();
        $this->form = new CalcForm();
        $this->result = new CalcResult();
    }
    
    public function getParams(){
        $this->form->kwota = isset($_REQUEST['kwota']) ? $_REQUEST['kwota'] : null;
        $this->form->czas = isset($_REQUEST['czas']) ? $_REQUEST['czas'] : null;
        $this->form->percent = isset($_REQUEST['percent']) ? $_REQUEST['percent'] : null; 
    }
    
    //Walidacja parametrów
    
    public function validate()  {
        if (!(isset($this->form->kwota) && isset($this->form->czas) && isset($this->form->percent) )){
        return false;
        }
    //parametry przekazane zatem
    //nie pokazuj wstępu strony gdy tryb obliczeń (aby nie trzeba było przesuwać)
    // - ta zmienna zostanie użyta w widoku aby nie wyświetlać całego bloku itro z tłem 



    // sprawdzenie, czy potrzebne wartości zostały przekazane
    if ($this->form->kwota == ""){
        $this->msgs->addError('Nie podano kwoty kredytu');
    }
    if ($this->form->czas == ""){
        $this->msgs->addError('Nie podano lat');
    }
    if ($this->form->percent == ""){
        $this->msgs->addError('Nie podano oprocentowania');
    }

    //nie ma sensu walidować dalej gdy brak parametrów
    if (! $this->msgs->isError()) {
        // sprawdzenie, czy $x i $y są liczbami całkowitymi
        if (!is_numeric($this->form->kwota)){
           $this->msgs->addError('Wartość kredytu nie jest liczbą');
        }
        if (!is_numeric($this->form->czas)){
            $this->msgs->addError('Wartość lat nie jest liczbą');
        }
        if (!is_numeric($this->form->percent)){
            $this->msgs->addError('Oprocentowanie nie jest liczbą');
        }
    }

return ! $this->msgs->isError();
}
function process(){
    $this->getParams();
    
    if($this->validate())   {
            //konwersja parametrów na int
    $this->form->kwota = floatval($this->form->kwota);
    $this->form->czas = floatval($this->form->czas);
    $this->form->percent = floatval($this->form->percent);

    //wykonanie operacji
    $this->result->result = round($this->form->kwota / (12 * $this->form->czas) + ($this->form->percent * 0.01*($this->form->kwota / (12 * $this->form->czas))),2);
    $this->msgs->addInfo('Wykonano obliczenia.');
}
$this->generateView();
    }
    
    
    public function generateView(){
    global $conf;
    
    $smarty = new Smarty();

$smarty->assign('conf',$conf);
$smarty->assign('page_title', 'Kalkulator kredytowy');
$smarty->assign('page_description', 'Zapraszam do obliczenia raty kredytu');
$smarty->assign('page_header', 'Kontroler głowny');


//pozostałe zmienne niekoniecznie muszą istnieć, dlatego sprawdzamy aby nie otrzymać ostrzeżenia
$smarty->assign('form', $this->form);
$smarty->assign('res', $this->result);
$smarty->assign('msgs', $this->msgs);


// 5. Wywołanie szablonu
$smarty->display($conf->root_path. '/app/calc/calc_view.html');
        
        
    }
    
    }

