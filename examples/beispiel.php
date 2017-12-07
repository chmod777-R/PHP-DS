<?php
#CALL PHP_DS KLASSE
$PHP_DS_LANGUAGE="DE";
include("../PHP-DS/PHP_DS.php");
#ERSTELLEN SIE EIN OBJEKT FÜR PHP_DS
$x = new PHP_DS_SUPPORTED("example-lang/DE.PHP");


//----------------------------------------------------------------------------------------------------
// Lass uns unsere Einstellungen machen
//----------------------------------------------------------------------------------------------------
#Ändern Sie den Klassennamen
$x->classe ="class_name";
#Schlüsselart
$x->verwenden="object";
#Funktionsstandardanzeige
$x->funktionen_d="A_Function";
#Variabler Standardindikator
$x->variablen_d="A_Variable";
//----------------------------------------------------------------------------------------------------
// Lass uns anfangen, unseren Code zu erstellen :)
//----------------------------------------------------------------------------------------------------
$x->code='  
class class_name
{
public $A_Variable1="its null";
public function A_Function1()
{
  echo $this->A_Variable1;
}
public function A_Function2()
{
  echo "Hallo<br>";
}
}
';

//----------------------------------------------------------------------------------------------------
// Und benutze unseren Code
//----------------------------------------------------------------------------------------------------
$x->hinzufügen();
$y = new beispiel;
$y->präsentation="Ich bin PHP-DS. Ich bin ein Sprachpaket für PHP-Klassen.";
$y->sag_hallo();
$y->stelle_dich_vor();
