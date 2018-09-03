<?php

    function sieve($number)
    {

        $arrayPrimes = [];

        //metto tutti i numeri dentro l'array
        for ($i = 2; $i <= $number; $i++) {
            $arrayPrimes[] = $i;
        }

        $toRemove = [];

        foreach ($arrayPrimes as $key => $value) {

            if (isset($arrayPrimes[$key + 1])) {

                for ($i = $key; $i < sizeof($arrayPrimes); $i++) {

                    if(isset($arrayPrimes[$i+1]))
                    {
                        if($arrayPrimes[$i+1] % $arrayPrimes[$key] == 0)
                        {
                            if (!in_array($arrayPrimes[$i+1], $toRemove))
                                $toRemove[] = $arrayPrimes[$i+1];
                        }
                    }
                }
            }
        }

        return array_values(array_diff($arrayPrimes, $toRemove));
    }