<?php

namespace App\Helpers;


    /**
     * Estimate reading time of string
     *
     * @return integer
     */
    function readTime(string $text)
    {
//        if (empty($text)) {
//            return 0;
//        }
        setlocale(LC_ALL, 'Farsi');
        $textOnly = strip_tags($text);
        $wordsCount = str_word_count($textOnly);
        $wordsPerMin = 200;

        return ceil($wordsCount / $wordsPerMin);
    }

