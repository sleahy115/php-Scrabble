
<?php
require_once "src/Scrabble.php";
    class ScrabbleTest extends PHPUnit_Framework_TestCase
    {
        function test_toUpperSplit()
        {
            $test_word = new Scrabble;
            //Arrange
            $input = "hello";

            $test_word->wordScore($input);
            //Act
            $result = $test_word->wordScore($input);
            //Assert
            $this->AssertEquals(["H","E","L","L","O"], $result);
        }

}
 ?>
