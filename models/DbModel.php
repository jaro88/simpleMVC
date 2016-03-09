<?php


class DbModel {

	// Databázové spojení
    private static $connection;

        
    public static function connectMdb($mdbfile,$user = null, $password = null) {
        $mdbfile = $_SERVER["DOCUMENT_ROOT"] . $mdbfile;
        if (!file_exists($mdbfile)) {
        die("Could not find database file.");}
			self::$connection = new PDO("odbc:DRIVER={Microsoft Access Driver (*.mdb)}; DBQ=$mdbfile; Uid=; Pwd=;");
    }

	// Spustí dotaz a vrátí počet ovlivněných řádků
	public static function dotaz($dotaz, $parametry = array()) {
            
		$navrat = self::$connection->prepare($dotaz);
		$navrat->execute($parametry);
		return $navrat->rowCount();
	}
	
	// Vloží do tabulky nový řádek jako data z asociativního pole
	public static function insert($tabulka, $array = array()) {
		return self::dotaz("INSERT INTO `$tabulka` (`".
		implode('`, `', array_keys($array)).
		"`) VALUES (".str_repeat('?,', sizeOf($array)-1)."?)",
			array_values($array));
	}
        
        public static function insertArrays($tabulka, $arrays = array())  {
            
            foreach ($arrays as $array) {
             $result[] = self::insert($tabulka, $array);
             
            }
            return  $result;
        }

}