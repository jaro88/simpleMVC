<?php

/* 
 * 
 * Z Csv suboru naformatuje pole, pre uloženie do databay
 * 
 */


class csvModel 
{
    
    private $file = "20152.csv";
    private $input = "Windows-1250";
    private $output = "Windows-1250";//"UTF-8";
            
    function __construct($file) {
        //$this->file = $file;
        
        return $this->fileToArray();
    }
    
    private function setPatch($file) {
        $this->file = $file;
    }

    /**
     * otvori soubor a rádky vráti do pole
     * @return type array
     */
    public function fileToArray() {
        $file = fopen($this->file, "r") or die('Nemuze otevrit soubor');
        while (!feof($file)) {
            $array[] = fgets($file);
        }
        return $array;
    }
    
    /**
     * vloží prní rádek jako klíč pro všechny rádky jako hodnoty
     * @return type array
     */
    public function insertKeyToArray() {
        $array = $this->fileToArray();
        
        $head = rtrim(array_shift($array));
        
        $keys = explode(";", $head);
        
        foreach ($array as $value) {
             
            $value =  rtrim(iconv($this->input, $this->output,$value));
            $newarray = explode(";", $value);
                foreach ($newarray as &$newarray2) {
                    
                        
                       $newarray2 = ($newarray2 == "") ? null : $newarray2;
                }
            
            $array2[] = array_combine($keys, $newarray);
            
        }
               
        return $array2;
    }

}