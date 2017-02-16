<?php
  class Scrabble
  {
    function wordScore($word)
    {
      $word = str_split(strtoupper($word));
      return $word;
    }
  }
 ?>
