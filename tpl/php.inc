<?php
// $cross - cross
// $stat - stst
// $text - result;

$eol = "\r\n";
$text_all = file_get_contents('./tpl/php.txt');

$text .= 'function RussEncPairSum($c1,$c2) {'.$eol;
foreach ($cross as $c1=>$data) {
    $text.='  if ($c1=="'.$c1.'") {'.$eol;
    foreach ($data as $c2=>$val) {
        if ($c2=='_') continue;
        $text.='    if ($c2=="'.$c2.'") return '.$val.';'.$eol;
    }
    $text.='    return 0;'.$eol;
    $text.='  }'.$eol;
}
$text .= '  return 0;}'.$eol;
$text = str_replace('#FN#',$text,$text_all);

?>