<?php

include('../out/russenc.inc.php');

echo 'windows-1251: ' . (RussEncDetermine('���� �� ��������� 1251')=='w' ? 'ok' : 'failed')."\r\n";
echo '    dos(866): ' . (RussEncDetermine('���� �� ��������� 866')=='d' ? 'ok' : 'failed')."\r\n";
echo '       utf-8: ' . (RussEncDetermine('ТЕСТ НА КОДИРОВКУ UTF-8')=='u' ? 'ok' : 'failed')."\r\n";

?>