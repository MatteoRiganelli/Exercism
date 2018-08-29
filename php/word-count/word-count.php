<?php

function wordCount($phraseDoc) {

        $replace   = array("\r\n", "\n", "\r", "\t", ",", "!" , "!", "&", "@", "$", "%", "^", "&", ":");
        $phrase = strtolower(trim(str_replace( $replace, " ", $phraseDoc)));
        $phrase =  preg_replace('/\s+/', ' ',$phrase);

        $arrayWords = explode( ' ', $phrase);

        $occcurence = 0;

        $result = array();

        foreach ($arrayWords as $word1 )
        {
            foreach ($arrayWords as $word2 ) {
                    if(  $word1  ===  $word2 )
                        $occcurence++;
            }
            //echo $word1 . ": ". $occcurence . "\n";

            if(!array_key_exists($word1, $result)){
                $result[$word1] = $occcurence;
            }
            $occcurence = 0;
        }

        return $result;
    }
?>