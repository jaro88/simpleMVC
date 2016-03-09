<?php

require_once 'libs/Smarty.class.php';

// Výchozí kontroler pro 
abstract class Controler {

    // Pole, jehož indexy jsou poté viditelné v šabloně jako běžné proměnné
    protected $data = array();
    // Název šablony 
    protected $template = "index.tpl";
    // Hlavička HTML stránky
    protected $smarty;

    protected function __construct() {

        $this->smarty = new Smarty();
        //$this->smarty->debugging = true;
        $this->sendToTpl('rootURL', ROOT_URL);
        
    }

    //tato metoda prenaša retazce alebo polia do templatu, tam sa hodnota value vyvola nazvom string
    protected function sendToTpl($string, $value) {
        $this->smarty->assign($string,$value);
    }

    // Vyrenderuje pohled
    public function render() {
        $this->smarty->display($this->template);
    }



    // Přesměruje na dané URL
    public function redirect($url) {
        $url = ROOT_URL . $url;
        header("Location: $url");
        header("Connection: close");
        exit;
    }

    abstract function execute($parameters);
}
