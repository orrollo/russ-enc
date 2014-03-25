<?php

// get an input - in 1251 codepage, the classic books of tolstoy

$russ = 'ижсйемцьыгузтшбюопнкдфщъвялхрэач╗';

function isRuss($ch) 
{
    global $russ;
    return strpos($russ,$ch)!==false;
}

function collectStat($fileName,$stat) {

    $text = file_get_contents($fileName);
    $prevRus = false;
    $curRus = false;
    $ch1 = ''; 
    $ch2 = '';
    for ($i=0;$i<strlen($text);$i++)
    {
        $ch2 = $text[$i];
        $curRus = isRuss($ch2);
        if ($curRus && $prevRus) { @$stat[$ch1.$ch2]++; @$stat['_']++; }
        $prevRus = $curRus;
        $ch1 = $ch2;
    }
    return $stat;
}

$stat = collectStat('voskr.txt',collectStat('annkar.txt',array()));
arsort($stat, SORT_NUMERIC);
file_put_contents('dump00.dbg',print_r($stat,true));

$keys = array_keys($stat);
$rest = 100.0;
$cnt = 1;
$src = array();
foreach ($keys as $key) {
    $val = $stat[$key];
    if ($key=='_') {
        $cnt = $val;
    } else {
        $prc = (100.0*$val)/$cnt;
        $rest -= $prc;
        $stat[$key] = array('count'=>$val,'rest'=>$rest,'prc'=>$prc);
// use upper than 30% rest for determining
        if ($rest>=30.0) $src[$key]=(int)round($prc*100);
    }
}
file_put_contents('dump01.dbg',print_r($stat,true));

// create cross-table, by chars in pairs
function crossCmp($a,$b) { return $b['_']-$a['_']; }

$cross=array();
foreach ($src as $key=>$val) {
    $c1 = $key[0]; 
    $c2 = $key[1];
    if (!isset($cross[$c1])) $cross[$c1]=array('_'=>0);
    $cross[$c1][$c2]=$val;
    $cross[$c1]['_']+=$val;
}
uasort($cross,'crossCmp');
file_put_contents('dump02.dbg',print_r($cross,true));

function genByTpl($fileName,$cross,$stat) {
    $text = '';
    include($fileName);
    return $text;
}

// generating output
file_put_contents('./out/russenc.inc.php',genByTpl('./tpl/php.inc',$cross,$stat));
//file_put_contents('./out/russenc.cs',genByTpl('./tpl/cs.inc',$cross,$stat));

?>