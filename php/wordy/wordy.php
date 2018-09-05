<?php

    function calculate($phrase)
    {
        $phrase = strtolower($phrase);
        $find = array("what", "is", "by", "?");
        $phrase = str_replace($find, "", $phrase);
        $phrase = str_replace('plus', "+", $phrase);
        $phrase = str_replace('minus', "-", $phrase);
        $phrase = str_replace('multiplied', "*", $phrase);
        $phrase = str_replace('divided', "/", $phrase);

        
        if (strpos($phrase, 'cube') == false && strpos($phrase, 'president') == false){
            return eval('return '.$phrase.';');
        }
        else {
            throw new InvalidArgumentException('InvalidArgumentException.');
        }

    }
