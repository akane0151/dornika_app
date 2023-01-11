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

        $textOnly = strip_tags($text);
        return $wordsCount = str_word_count($textOnly);
        $wordsPerMin = 200;

        return ceil($wordsCount / $wordsPerMin);
    }

