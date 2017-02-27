<?php
session_start();
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=phppoo', 'root', 'root');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

/*
final class Database
{
  private $bdd;
  public function __construct(){
    $this->bdd = new PDO('mysql:host=localhost;dbname=phppoo', 'root', 'root');
  }
  private static $_instance = null;
  public static function shared()
  {
    if(...)
    {
      self::$_instance = new Database();
    }
    return self::$_instance;
  }
}


// Joueur.php
$bdd = Database::shared();



// Heros
$database = Database::shared();