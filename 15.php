<?php
/**
 * Created by PhpStorm.
 * User: stud07
 * Реализуйте функцию makeCensored, которая заменяет каждое вхождение указанных слов в предложении
 * на последовательность $#%!
 * и возвращает полученную строку.
 *
 * Аргументы: Текст     Набор стоп слов
 * Словом считается любая непрерывная последовательность символов, включая любые спецсимволы (без пробелов).
 */

function makeCensored($text, $mas_words)
{

return str_replace($mas_words, '$#%!', $text);
  /*  $replacer = '$#%!';
    $words = explode( ' ', $text);
    foreach ($words as $thisWord) {
        foreach ($mas_words as $mas_word) { if ($thisWord === $mas_word) {$thisWord=str_replace($mas_words, $replacer, $text);}

        }
    }
$text = implode(' ', $words);
    return $text;
*/
}

$sentence = 'When you play the game of thrones, you win or you die';

var_dump(makeCensored($sentence, ['die', 'play']));

$sentence2 = 'chicken chicken? chicken! chicken';

var_dump(makeCensored($sentence2, ['?', 'chicken']));