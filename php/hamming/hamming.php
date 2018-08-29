<?php



/**
 * @param string $a
 * @param string $b
 * @return int distance
 */
function distance($a, $b)
{
    if (strlen($a) == strlen($b)) {
        
        $arr1 = array_map('strtoupper', str_split($a));
        $arr2 = array_map('strtoupper', str_split($b));

        $hammingDistance = count(array_diff_assoc($arr1, $arr2));
        return $hammingDistance;

    } else {
        throw new InvalidArgumentException('DNA strands must be of equal length.');
    }
}