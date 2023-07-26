<?php

// I used the php CLI to run and test these codes
// PHP VERSION is 8.2



function shortestWord(string $input) : int 
{
    $toArray = explode(' ', $input);
    return min(array_map('strlen', $toArray)) . PHP_EOL;
}

// $testString = 'TRUE FRIENDS ARE ME AND YOU';
// print_r(shortestWord($testString));



function countTheIslands(array $twoDArray) : string
{
    $values = ['~', 'X'];
    $result = '';

    foreach($twoDArray as $array) {
        foreach($array as $value) {
            $result .= $values[$value];
        }
        $result .= PHP_EOL;
    }

    return $result;
}

// $testArray = [
//     [1,1,1,1],
//     [0,1,1,0],
//     [0,1,0,1],
//     [0,0,0,0],
// ];
// echo countTheIslands($testArray);



function wordSearch(string $target, array $list) : array
{
    $result = [];

    foreach($list as $key => $value) {
        if ($value == $target) {
            $result[] = $key;
        }
    }

    return $result;
}

// $testCase = ['I', 'TWO', 'FORTY', 'THREE', 'JEN', 'TWO', 'tWo', 'Two'];
// print_r(wordSearch('TWO', $testCase));