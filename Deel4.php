<?php
//Deel4A

$cijfersPHP = [4.4,4.6,5.6,6.1,7.6,7.2];



$cijfersPHP = array_filter($cijfersPHP);
if(count($cijfersPHP)) {
     $average = array_sum($cijfersPHP)/count($cijfersPHP);
}

echo "Gemiddelde is: " .(round($average));

//Deel4B
//Ik denk dat het beter is om de regels niet samen te voegen, omdat het moeilijker is om te snappen
?>