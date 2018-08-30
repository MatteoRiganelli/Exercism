<?php


    function toDecimal($value){

        $convertedNumber = str_split($value);
        $returnedvalue = 0;

        if(!str_contains_only($value, "012"))
            return $returnedvalue;

        for($i=0; $i<count($convertedNumber); $i++){
            $index = count($convertedNumber) - ($i +1);
            $returnedvalue  +=  $convertedNumber[$i] * pow(3, $index);
        }

        return $returnedvalue;

    }

    /**
     * return true only if contains values "012" .
     * @param
     * @string is the string to check
     * @string admited chars that must be checked in the string above
     * @return @bool
     */

    function str_contains_only($stringToCheck, $admitedChars){
        $countOccurs = 0;
        
        $arraystring1 = str_split($stringToCheck);
        $arraystring2 = str_split($admitedChars);

        foreach ($arraystring1 as $item) {
            if (in_array($item, $arraystring2)) $countOccurs++;
        }

        if($countOccurs == count($arraystring1))
            return true;
        return false;
        
    }