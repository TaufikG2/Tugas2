<?php
// class mobil
class mobil{
    public $nama;
    public $merek;

    function getinfo(){
        echo "nama mobil :".$this->nama."<br/>";
        echo "merek mobil :".$this->merek."<br/>";
    }
}

// bagian  main
$ferrari=new mobil();
$ferrari->nama="FERRARI";
$ferrari->merek="488 GTB";
$ferrari->getinfo($ferrari);
?>
