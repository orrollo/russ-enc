<?php
// $cross - cross
// $stat - stst
// $text - result;

$eol = "\r\n";
$text = file_get_contents('./tpl/cs.txt');

$fn = '';
foreach ($cross as $c1=>$data) {
    $fn.="  if (c1=='$c1') {".$eol;
    foreach ($data as $c2=>$val) {
        if ($c2=='_') continue;
        $fn.="    if (c2=='$c2') return $val;".$eol;
    }
    $fn.='    return 0;'.$eol;
    $fn.='  }'.$eol;
}
$text = str_replace('#FN#',$fn,$text);
?>