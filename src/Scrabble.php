<?php
  class Scrabble
  {
    function wordScore($word)
    {
    // { $one_point_array = array("A", 'E', "I", "O", "U", "L", "N", "R", "S", "T");
    //   $word_letters = str_split(strtoupper($word));
    //   $wordArray = array_intersect($word_letters, $one_point_array);
    //   return $wordArray;
    $score = preg_match_all('/[A, E, I, O, U, L, N, R, S, T]/i',$word);
    $total = $score*1;
    $score = preg_match_all('/[D, G]/i',$word);
    $total += $score*2;
    $score = preg_match_all('/[B, C, M, P]/i',$word);
    $total += $score*3;
    $score = preg_match_all('/[F, H, V, W, Y]/i',$word);
    $total += $score*4;
    $score = preg_match_all('/[K]/i',$word);
    $total += $score*5;
    $score = preg_match_all('/[J, X]/i',$word);
    $total += $score*8;
    $score = preg_match_all('/[Q, Z]/i',$word);
    $total += $score*10;


    return $total;
    }
  }
 ?>
