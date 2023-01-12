<?php

namespace App\Helpers;


    /**
     * Estimate reading time of string
     *
     * @return integer
     */
    function readTime(string $text)
    {
        if (empty($text)) {
            return 0;
        }
        $textOnly = strip_tags($text);
        $wordsCount = str_word_count($textOnly, 0 , 'ابپتثجچ‌حخدذرز‌ژس‌شصضطظعغفقکگلمنوهیءآاًهٔه');
        $wordsPerMin = 200;

        return ceil($wordsCount / $wordsPerMin);
    }

