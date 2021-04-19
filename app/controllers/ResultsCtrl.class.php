<?php
namespace app\controllers;

class ResultsCtrl{
        private $records;

        public function action_results(){
            try{
                $this->records = getDB()->select("wynik", [
                        "idwynik",
                        "kwota",
                        "czas",
                        "procent",
                        "rata",
                        "data"
                    ]);
            } catch (\PDOException $e){
                getMessages()->addError('Wystąpił problem podczas pobierania rekordów');
                if (getConf()->debug) getMessages()->addError($e->getMessage());	
            }

            $this->generateView();
        }

        public function generateView(){
            getSmarty()->assign('page_title', 'Kalkulator kredytowy');

            getSmarty()->assign('credit', $this->records);

            getSmarty()->display('result_view.tpl');
        }
    }