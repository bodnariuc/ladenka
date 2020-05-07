<?php

//abstraktni trida ustredny a v ni protected trida $napetí
abstract class  ustredny_Bodnariuc{

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
// trida ustredna se dedi do abstraktni tridy ustredny
class  ustredna_Bodnariuc extends ustredny_Bodnariuc{
   public $Napeti_Bodnariuc= 15;
   //nastavi konstanty type
   const TYPE ="12";
}
//trida iustredna dedi interface od abstraktni tridy ustredny
interface iustredna_Bodnariuc extends ustredny_Bodnariuc{
    //vypise nastavene hodnoty
    public function _contruct ($Napeti_Bodnariuc);
}

//pres vardummp vypise hodnotu v type a hodnotu ustrednoveho napeti
 var_dump (ustredna_Bodnariuc::TYPE);
 var_dump ($Napeti_Bodnariuc);
?>

