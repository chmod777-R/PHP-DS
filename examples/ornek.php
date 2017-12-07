<?php
#PHP_DS SINIFINI ÇAĞIRALIM
$PHP_DS_LANGUAGE="TR";
include("../PHP-DS/PHP_DS.php");
#PHP_DS NESNESİNİ OLUŞTURALIM
$x = new PHP_DS_SUPPORTED("example-lang/TR.PHP");



//----------------------------------------------------------------------------------------------------
// Ayarlarımızı yapalım
//----------------------------------------------------------------------------------------------------
#Sınıf İsmi Değiştirme
$x->sınıf ="sınıf_ismi";
#Anahtar Tipi
$x->kullanım="nesne";
#Fonksiyon varsayılanı belirteçi
$x->fonksiyon_v="Bir_Fonksiyon";
#Değişken varsayılanı belirteçi
$x->değişken_v="Bir_Değişken";
//----------------------------------------------------------------------------------------------------
// Kodumuzu oluşturmaya başlayalım :)
//----------------------------------------------------------------------------------------------------
$x->kod='  
class sınıf_ismi
{
public $Bir_Değişken1="bu değişken boş";
public function Bir_Fonksiyon1()
{
  echo $this->Bir_Değişken1;
}
public function Bir_Fonksiyon2()
{
  echo "Merhaba<br>";
}
}
';

//----------------------------------------------------------------------------------------------------
// Ve kodumuzu kullanalım
//----------------------------------------------------------------------------------------------------
$x->ekle();
$y = new örnek;
$y->Tanıtım="Ben PHP-DS. PHP sınıfları için bir dil desteği paketiyim.";
$y->Merhaba_de();
$y->Tanıt();
