<?php

//echo "<h1></h1>";

 $sttrinca = $_GET['sttrinca'];
 $ndtrinca = $_GET['ndtrinca'];
 $rdtrinca = $_GET['rdtrinca'];
 $thtrinca = $_GET['thtrinca'];
 $masc    = $_GET['masc'];

echo "<h1>Ip digitado foi: ";
 echo $sttrinca.".";

 echo $ndtrinca.".";

 echo $rdtrinca.".";

 echo $thtrinca."/";

 echo $masc;

 echo "</h1>";

 $sobramasc= 32-$masc;
$endereco=pow(2,$sobramasc);

 echo "<h1>A quantidade de sub-redes</h1>";
$totalrange = 256/$endereco;
echo $totalrange;


echo "<h1>A quantidade de endereços por sub-rede</h1>";
echo $endereco;


echo "<h1>A quantidade de endereços de hosts em cada sub-rede</h1>";
$usehost=$endereco - 2;
echo $usehost;


echo "<h1>Esta localizado na Sub rede:</h1>";

//verifica a ultima trinca pra ver onde dos ranges q ele tá
$sublocal = (int)($thtrinca/$endereco);
echo $sublocal;


echo "<h1>O valor da rede da sub-rede em que o endereço informado se encontra</h1>";
$rede = $endereco * $sublocal ;
echo $rede;

echo "<h1>O primeiro endereço de host da sub-rede em que o endereço IP informado se encontra</h1>";
$primhost = $rede + 1;
echo $primhost;


$broadcast = ($rede + $endereco)-1;


echo "<h1>O último endereço de host da sub-rede em que o endereço IP informado se encontra</h1>";
$ulthost= $broadcast-1;
echo $ulthost;


echo "<h1>O valor de broadcast da sub-rede em que o endereço informado se encontra</h1>";

echo $broadcast;


echo "<h1>mascara integral</h1>";
$mascaraint = 256-$endereco;
echo "255.255.255.".$mascaraint;




//classifição
echo "<h1>público ou reservado</h1>";
if(($sttrinca == '10')
 or ($sttrinca=='127')
  or ($sttrinca=='172' and $ndtrinca>='16' and $ndtrinca<='32')
  or ($sttrinca == '192' and $ndtrinca == '168')
){
  echo "<h4>reservado";
}else{
  echo "<h4>público";
};

echo "<h1>A classe a que o IP pertence</h1>";

if( $sttrinca>='0' and $sttrinca<='127'
and $ndtrinca>='0' and $ndtrinca<='255'
and $thtrinca>='0' and $thtrinca<='255'
and $rdtrinca>='0' and $rdtrinca<='255'
){
   echo " classe A </h4>";
 }elseif( $sttrinca>='128' and $sttrinca<='191'
      and $ndtrinca>='0' and $ndtrinca<='255'
      and $thtrinca>='0' and $thtrinca<='255'
      and $rdtrinca>='0' and $rdtrinca<='255'
 ){
   echo " classe B </h4>";
 }elseif ( $sttrinca>='192' and $sttrinca<='223'
       and $ndtrinca>='0' and $ndtrinca<='255'
       and $thtrinca>='0' and $thtrinca<='255'
       and $rdtrinca>='0' and $rdtrinca<='255'
 ){
   echo " classe C </h4>";
 }elseif ( $sttrinca>='224' and $sttrinca<='239'
       and $ndtrinca>='0' and $ndtrinca<='255'
       and $thtrinca>='0' and $thtrinca<='255'
       and $rdtrinca>='0' and $rdtrinca<='255'
 ){
   echo " classe D </h4>";
 }elseif ( $sttrinca>='240' and $sttrinca<='255'
       and $ndtrinca>='0' and $ndtrinca<='255'
       and $thtrinca>='0' and $thtrinca<='255'
       and $rdtrinca>='0' and $rdtrinca<='255'
 ){
   echo " classe E";
 }else{
   echo "numero invalido";
 }
