<?php
/**
 * Created by PhpStorm.
 * User: stud07
 * Реализуйте функцию rrmdir, удаляющую директорию рекурсивно, то есть вместе со всем своим содержимым.
 *
 * Подсказка Одна из возможных реализаций может использовать итераторы. Воспользуйтесь функцией scandir вместо функции glob.
 *
 * @param $directory
 */

function rrmdir ($directory)
 {
    if (is_dir($directory)) {
        $objects = scandir($directory, CANDIR_SORT_NONE);
        foreach ($objects as $object) {
            if ($object !== '.' && $object !== '..') {
                if (filetype($directory. '/' .$object) === 'dir') {
                    rrmdir($directory . "/" . $object);
                }
                else {
                    unlink($directory . "/" . $object);
                }
            }
        }
        reset($objects);
        rmdir($directory);
    }
}

rrmdir('rd');