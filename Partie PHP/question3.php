<?php

class Guerrier{
    //-----VARIABLES-----//
    public $niveau;
    public $nom;
    public $age;
    public $force;
    public $arme;

    //------CONSTRUCTEUR------//
    public function __construct($L, $H)
    {
        $this->niveau = $L;
        $this->age = $A;
        $this->force = $F;
        $this->nom = $N;
        $this->arme = $W;
    
    }   
    //-----------GETTERs--------//
    public function getNiveau(){
        return $this->Niveau;
    }

    public function getAge(){
        return $this->age;
    }


    public function getForce(){
        return $this->force;
    }

     public function getNom(){
        return $this->nom;
    }

    public function getArme(){
        return $this->arme;
    }

    //----------SETTERS --------//
    public function setNiveau($NewNiveau){
        $this->niveau = $NewNiveau;
    }

    public function setAge($NewAge){
        $this->age = $NewAge;
    }


    public function setForce($NewForce){
        $this->force = $NewForce;
    }

    public function setNom($NewNom){
        $this->nom = $NewNom;
    }


    public function setArme($NewArme){
        $this->arme = $NewArme;
    }


    public function levelUp(){
        setForce($NewForce++);
        setNiveau($NewNiveau++);
     }
 }

    //------METHODE------//
    function getInfo(){
        return "age : " . $this->age.'<br>'. "niveau : " .$this->niveau.'<br>'. "force : " .$this->force. "nom : " .$this->nom.'<br>'. "arme : " .$this->arme.'<br>';

    }



?>