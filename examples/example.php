<?php
#CALL PHP_DS CLASS
$PHP_DS_LANGUAGE="EN";
include("../PHP-DS/PHP_DS.php");
#CREATE AN OBJECT FOR PHP_DS
$x = new PHP_DS_SUPPORTED("example-lang/EN.PHP");


//----------------------------------------------------------------------------------------------------
// Let's do our settings
//----------------------------------------------------------------------------------------------------
#Change Class Name
$x->class ="class_name";
#Key Type
$x->using="object";
#Function default indicator
$x->functions_d="A_Function";
#Variable default indicator
$x->variables_d="A_Variable";
//----------------------------------------------------------------------------------------------------
// Let's start creating our code :)
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
  echo "Hello<br>";
}
}
';

//----------------------------------------------------------------------------------------------------
// And use our code
//----------------------------------------------------------------------------------------------------
$x->add();
$y = new example;
$y->presentation="I'm PHP-DS. I am a language pack for PHP classes.";
$y->say_hello();
$y->introduce_yourself();
