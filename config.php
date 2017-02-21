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
