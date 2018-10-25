<?php

class Sneaker {

 public $id;
 public $marque;
 public $model;
 public $couleur;
 public $prix;
 public $gamme&;
 public $img;

 function __construct($id, $marque, $model, $couleur, $prix, $gamme,$img)
 {
   $this-> id = $id;
   $this-> marque = $marque;
   $this-> modele = $modele;
   $this-> couleur = $couleur;
   $this-> prix = $prix;
   $this-> sexe = $gamme;
   $this-> img = $img;
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
   return $this-> img;
 }



}

 ?>
