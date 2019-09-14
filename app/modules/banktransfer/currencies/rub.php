<?php

$nul='ноль';

$ten=array(
    array('','один','два','три','четыре','пять','шесть','семь', 'восемь','девять'),
    array('','одна','две','три','четыре','пять','шесть','семь', 'восемь','девять'),
);

$a20=array('десять','одиннадцать','двенадцать','тринадцать','четырнадцать' ,'пятнадцать','шестнадцать','семнадцать','восемнадцать','девятнадцать');

$tens=array(2=>'двадцать','тридцать','сорок','пятьдесят','шестьдесят','семьдесят' ,'восемьдесят','девяносто');

$hundred=array('','сто','двести','триста','четыреста','пятьсот','шестьсот', 'семьсот','восемьсот','девятьсот');

$unit = array( // Units
    array('копейка', 'копейки', 'копеек', 1),
    array('рубль', 'рубля', 'рублей', 0),
    array('тысяча', 'тысячи', 'тысяч', 1),
    array('миллион', 'миллиона', 'миллионов', 0),
    array('миллиард', 'милиарда', 'миллиардов', 0),
);

return array(
    'nul' => $nul,
    'ten' => $ten,
    'a20' => $a20,
    'tens' => $tens,
    'hundred' => $hundred,
    'unit' => $unit
);
