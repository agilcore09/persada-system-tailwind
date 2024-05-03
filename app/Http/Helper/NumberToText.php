<?php

namespace App\Http\Controllers;

class NumberToText
{
    public static function Convert($number)
    {
        $words = [
            '', 'satu', 'dua', 'tiga', 'empat', 'lima', 'enam', 'tujuh', 'delapan', 'sembilan',
        ];

        $units = ['', 'Ribu', 'Juta', 'Miliar', 'Triliun'];

        $num_length = strlen((string) $number);
        $groups = ceil($num_length / 3);

        $result = '';
        $counter = 0;
        for ($i = $groups - 1; $i >= 0; $i--) {
            $chunk = substr($number, $counter * 3, 3);
            $chunk_length = strlen((string) $chunk);
            $chunk_result = '';
            for ($j = 0; $j < $chunk_length; $j++) {
                $digit = (int) $chunk[$j];
                if ($j === 0 && $digit === 1) {
                    $chunk_result .= 'seratus ';
                } elseif ($j === 0 && $digit === 0) {
                    $chunk_result .= '';
                } elseif ($j === 0) {
                    $chunk_result .= $words[$digit] . ' ratus ';
                } elseif ($j === 1 && $digit === 1) {
                    $next_digit = (int) $chunk[$j + 1];
                    if ($next_digit === 0) {
                        $chunk_result .= 'sepuluh ';
                    } elseif ($next_digit === 1) {
                        $chunk_result .= 'sebelas ';
                    } else {
                        $chunk_result .= $words[$next_digit] . ' belas ';
                    }
                    break;
                } elseif ($j === 1 && $digit === 0) {
                    $chunk_result .= '';
                } elseif ($j === 1) {
                    $chunk_result .= $words[$digit] . ' puluh ';
                } elseif ($j === 2 && $digit === 0) {
                    $chunk_result .= '';
                } else {
                    $chunk_result .= $words[$digit] . ' ';
                }
            }
            $result .= $chunk_result . $units[$i] . ' ';
            $counter++;
        }
        return trim($result);
    }
}
