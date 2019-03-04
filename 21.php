<?php
/**
 * Created by PhpStorm.
 * User: stud07
Реализуйте функцию getComposerFileData, которая возвращет ассоциативный массив, соответствующий json из файла composer.json в этом упражнении.
 */

function getComposerFileData(){$jS=file_get_contents('composer.json'); return json_decode ($jS, true);}

var_dump(getComposerFileData());
