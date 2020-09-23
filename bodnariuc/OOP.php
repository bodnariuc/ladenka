<<?php

//abstraktní trida ustredny obsahujici $napetí
abstract class  ustredny_Bodnariuc {

    protected $napeti_Bodnariuc;
    //nastavi napeti
    public function setNapeti_Bodnariuc($napeti_Bodnariuc){
        $this->napeti_Bodnariuc = $napeti_Bodnariuc;
    }
    //precte napeti
    public function getNapeti_Bodnariuc() {
        return $this-> napeti_Bodnariuc;
    }
}
// class ustredna se dedi do abstract class ustredny
class  ustredna_Bodnariuc extends ustredny_Bodnariuc{
   public $Napeti_Bodnariuc = 15;
   //nastaveni konstanty type
   const TYPE = "12";
}
//class iustredna dedi interface od abstract class ustredny
interface iustredna_Bodnariuc extends ustredny_Bodnariuc{
    //vypise nastavene hodnoty
    public function _contruct ($Napeti_Bodnariuc);
}

//pres vardummp vypise hodnotu v type a hodnotu napeti ustredny
 var_dump (ustredna_Bodnariuc::TYPE);
 var_dump ($Napeti_Bodnariuc);
?>
