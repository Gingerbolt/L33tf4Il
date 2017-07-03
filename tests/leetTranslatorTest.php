<?php

    require_once "src/LeetTranslator.php";

    class LeetSpeakTranslatorTest extends PHPUnit_Framework_TestCase
    {

        function test_leetSpeak_oneWord()
        {
            //Arrange
            $test_LeetSpeakTranslator = new LeetSpeakTranslator;
            $input = "I";

            //Act
            $result = $test_LeetSpeakTranslator->leetMaker($input);

            //Assert
            $this->assertEquals("1", $result);
        }
    }

?>
