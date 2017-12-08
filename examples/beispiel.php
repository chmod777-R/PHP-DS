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
$x->classe ="klassenname";
#Schlüsselart
$x->verwenden="objekt";
#Funktionsstandardanzeige
$x->funktionen_d="Eine_Funktion";
#Variabler Standardindikator
$x->variablen_d="Eine_Variable";
//----------------------------------------------------------------------------------------------------
// Lass uns anfangen, unseren Code zu erstellen :)
//----------------------------------------------------------------------------------------------------
$x->code='  
class klassenname
{
public $Eine_Variable1="its null";
public function Eine_Funktion1()
{
  echo $this->Eine_Variable1;
}
public function Eine_Funktion2()
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
