<?php


class NotfoundControler extends Controler
{
    public function execute($parametry)
    {
		// Hlavička požadavku
		header("HTTP/1.0 404 Not Found");
		// Nastavení šablony
		$this->template = 'notfound.tpl';
    }
}