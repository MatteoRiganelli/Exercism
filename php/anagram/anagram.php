<?php



/**
 * @param string $a
 * @param array of string
 * @return array of anagrams
 */
    function detectAnagrams($word1, array $list)
    {
        $returnedWord = [];

        foreach( $list as $word )
        {
            if ( count_chars(mb_strtolower($word1, 'UTF-8'), 1)
                ==
                 count_chars(mb_strtolower($word, 'UTF-8'), 1)
                &&
                mb_strtolower($word1, 'UTF-8')
                !=
                mb_strtolower($word, 'UTF-8') )
            {
                array_push($returnedWord, $word);
            }

        }
        return $returnedWord;
    }