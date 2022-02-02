<?php

require 'Classes/Habitation.php';
require 'Classes/Maison.php';
require 'Classes/Appartement.php';

$maison = new Maison('France', 'Wignehies', '59212', 3, 6, true, 1, false);
$maison2 = new Maison('France', 'Maubeuge', '59600', 3, 6, true, 1, false);
$appart = new Appartement('France', 'Wignehies', '59212', 3, 6, false);

echo '<pre>';
var_dump($maison->getPays());
var_dump($maison->getVille());
var_dump($maison->getCodePostal());
var_dump($maison->getChambres());
var_dump($maison->getPieces());
var_dump($maison->isJardin());
var_dump($maison->getEtages());
var_dump($maison->isGarage());
echo '</pre>';

echo '<pre>';
var_dump($maison2->getPays());
var_dump($maison2->getVille());
var_dump($maison2->getCodePostal());
var_dump($maison2->getChambres());
var_dump($maison2->getPieces());
var_dump($maison2->isJardin());
var_dump($maison2->getEtages());
var_dump($maison2->isGarage());
echo '</pre>';

echo '<pre>';
var_dump($appart->getPays());
var_dump($appart->getVille());
var_dump($appart->getCodePostal());
var_dump($appart->getChambres());
var_dump($appart->getPieces());
var_dump($appart->isGarage());
echo '</pre>';



/**
 * 1. Créez une classe Habitation, elle contiendra les propriétés:
 *    - pays ( string )
 *    - ville ( string )
 *    - code postal ( entier ou string )
 *    - chambres ( entier )
 *    - pièces ( entier )
 *
 * Définissez tous les setters et les getters.
 *
 *
 *
 * 2. Créez une classe Maison qui étend de Habitation, elle contiendra les propriétés:
 *    - jardin ( booleen )
 *    - etages ( entier )
 *    - garage ( booleen )
 *
 * Définissez tous les getters et les setters.
 *
 *
 *
 * 3. Créez une classe Appartement qui étend de habitation, elle contiendra les propriétés:
 *    - garage ( booleen )
 *
 * Définissez tous les getters et les setters.
 *
 *
 *
 * 4. Créez deux instances de Maison et invoquez toutes les méthodes définies, sauf les setters ( dans index.php ).
 *
 *
 *
 * 5. Créez une instance de Appartement et invoquez toutes les méthodes définies, y compris les setters ( dans index.php ).
 */