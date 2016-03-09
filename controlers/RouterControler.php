<<<<<<< HEAD
<?php

class RouterControler extends Controler
{
	// Instance controlleru
	protected $controler;
	
        public function __construct() {
            parent::__construct();
      
        
        }

                // Metoda převede pomlčkovou variantu controlleru na název třídy
	private function pomlckyDoVelbloudiNotace($text) 
	{
		$veta = str_replace('-', ' ', $text);
		$veta = ucwords($veta);
		$veta = str_replace(' ', '', $veta);
		return $veta;
	}
	
	// Naparsuje URL adresu podle lomítek a vrátí pole parametrů
	private function parsujURL($url)
	{
		// Naparsuje jednotlivé části URL adresy do asociativního pole
        $naparsovanaURL = parse_url($url);
        
                
                //Odstrani root cestu do index složky z url
                $naparsovanaURL["path"] = ltrim($naparsovanaURL["path"], ROOT_URL);
                
		// Odstranění počátečního lomítka 
		$naparsovanaURL["path"] = ltrim($naparsovanaURL["path"], "/");
                
		// Odstranění bílých znaků kolem adresy
		$naparsovanaURL["path"] = trim($naparsovanaURL["path"]);
                
		// Rozbití řetězce podle lomítek
		$rozdelenaCesta = explode("/", $naparsovanaURL["path"]);
                
		return $rozdelenaCesta;
	}

    // Naparsování URL adresy a vytvoření příslušného controlleru
    public function execute($parameters)
    {
		$naparsovanaURL = $this->parsujURL($parameters[0]);
               
                	
		if (empty($naparsovanaURL[0]))		
			$this->redirect('cv');		
		// kontroler je 1. parametr URL
		$tridaKontroleru = $this->pomlckyDoVelbloudiNotace(array_shift($naparsovanaURL)) . 'Controler';

		if (file_exists('controlers/' . $tridaKontroleru . '.php'))
			$this->controler = new $tridaKontroleru;
		else
			$this->redirect('notfound');
		
		// Volání controlleru
        $this->controler->execute($naparsovanaURL);
		

        // Nastavení hlavní šablony
        $this->controler->render();
    }
    
    //Vyrendrovanie šablony
    public function render() {
        $this->smarty->display($this->template);
    }

=======
<?php

class RouterControler extends Controler
{
	// Instance controlleru
	protected $controler;
	
        public function __construct() {
            parent::__construct();
      
        
        }

                // Metoda převede pomlčkovou variantu controlleru na název třídy
	private function pomlckyDoVelbloudiNotace($text) 
	{
		$veta = str_replace('-', ' ', $text);
		$veta = ucwords($veta);
		$veta = str_replace(' ', '', $veta);
		return $veta;
	}
	
	// Naparsuje URL adresu podle lomítek a vrátí pole parametrů
	private function parsujURL($url)
	{
		// Naparsuje jednotlivé části URL adresy do asociativního pole
        $naparsovanaURL = parse_url($url);
        
                
                //Odstrani root cestu do index složky z url
                $naparsovanaURL["path"] = ltrim($naparsovanaURL["path"], ROOT_URL);
                
		// Odstranění počátečního lomítka 
		$naparsovanaURL["path"] = ltrim($naparsovanaURL["path"], "/");
                
		// Odstranění bílých znaků kolem adresy
		$naparsovanaURL["path"] = trim($naparsovanaURL["path"]);
                
		// Rozbití řetězce podle lomítek
		$rozdelenaCesta = explode("/", $naparsovanaURL["path"]);
                
		return $rozdelenaCesta;
	}

    // Naparsování URL adresy a vytvoření příslušného controlleru
    public function execute($parameters)
    {
		$naparsovanaURL = $this->parsujURL($parameters[0]);
               
                	
		if (empty($naparsovanaURL[0]))		
			$this->redirect('cv');		
		// kontroler je 1. parametr URL
		$tridaKontroleru = $this->pomlckyDoVelbloudiNotace(array_shift($naparsovanaURL)) . 'Controler';

		if (file_exists('controlers/' . $tridaKontroleru . '.php'))
			$this->controler = new $tridaKontroleru;
		else
			$this->redirect('notfound');
		
		// Volání controlleru
        $this->controler->execute($naparsovanaURL);
		

        // Nastavení hlavní šablony
        $this->controler->render();
    }
    
    //Vyrendrovanie šablony
    public function render() {
        $this->smarty->display($this->template);
    }

>>>>>>> 2955c30312736686a55c7294504ef1ecaaeaccbe
}