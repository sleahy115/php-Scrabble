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
      $score += preg_match_all('/[D, G]/i',$word);
    return $score;
    }
  }
 ?>
