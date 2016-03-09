<?php



class ConvertorControler extends Controler
{
    
    public $template = "convertor.tpl";
    
    public function execute($parametrs) {
        
        dbModel::connectMdb(/*subor s mdb databazov*/);
        $convert = new csvModel(/*subor csv*/);
        $arrays = $convert->insertKeyToArray();
        $result = DbModel::insertArrays(/*nazov tabulky*/, $arrays);
        

}