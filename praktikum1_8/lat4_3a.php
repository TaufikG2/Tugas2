<?php
class mahasiswa{
    private $nama;
    private $nim;
    
    function __construct(
        $a = "Taufik Alif Shalahuddin <br/>",
        $b = "G.211.21.0064"){
            $this->nama = $a;
            $this->nim = $b;
        }

    function setnama ($a){
        $this->nama=$a;
    }
    function setnim ($b){
        $this->nim=$b;
    }
    
    function getnama (){
        return $this->nama;
    }
    function getnim (){
        return $this->nim;
    }
}
?>