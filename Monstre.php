<?php

require_once('config.php');

class Monstre {

    protected $nom;
    protected $pdd;
    protected $pdv;
    protected $pda;
    protected $pdvit;
    protected $id;

    public function __construct($nom, $pdd, $pdv, $pda, $pdvit, $id = '')
    {
        $this->nom=$nom;
        $this->pdd=$pdd;
        $this->pdv=$pdv;
        $this->pda=$pda;
        $this->pdvit=$pdvit;
        $this->id=$id;

    }

    public function insert() {

        $bdd = new PDO('mysql:host=localhost;dbname=phppoo', 'root', 'root');

        $sql = $bdd->prepare("INSERT INTO 'PERSONNAGE'('nom', 'pdd', 'pdv', 'pda', 'pdvit')
        VALUES ('$this->nom', '$this->pdd', '$this->pdv', '$this->pda', '$this->pdvit')");

        $bdd ->query($sql);
    }
}

?>