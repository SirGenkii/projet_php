<?php

class Sneaker {

 public $id;
 public $marque;
 public $modele;
 public $couleur;
 public $prix;
 public $gamme;
 public $image;

 function __construct($id, $marque, $modele, $couleur, $prix, $gamme,$image)
 {
   $this-> id = $id;
   $this-> marque = $marque;
   $this-> modele = $modele;
   $this-> couleur = $couleur;

   $this-> gamme = $gamme;
   $this-> prix = $prix;
   $this-> image = $image;
 }





 function getId(): int{
   return $this-> id;
 }
 function getMarque() : string {
   return $this-> marque;
 }
 function getModele() : string {
   return $this-> modele;
 }
 function getCouleur() : string {
   return $this-> couleur;
 }
 function getPrix() : int {
   return $this-> prix;
 }
 function getGamme() : string {
   return $this-> gamme;
 }
 function getImg() : string {
   return $this-> image;
 }



}

 ?>
