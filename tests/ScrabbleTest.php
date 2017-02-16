
<?php
require_once "src/Scrabble.php";
    class ScrabbleTest extends PHPUnit_Framework_TestCase
    {
        function test_wordScore()
        {
            $test_word = new Scrabble;
            //Arrange
            $input = "hello";

            $test_word->wordScore($input);
            //Act
            $result = $test_word->wordScore($input);
            //Assert
            $this->AssertEquals(["h","e","l","l","o"], $result);
        }
    }
 ?>
