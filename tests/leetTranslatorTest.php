<?php

    require_once "src/LeetTranslator.php";

    class LeetSpeakTranslatorTest extends PHPUnit_Framework_TestCase
    {

        function test_leetSpeak_oneI()
        {
            //Arrange
            $test_LeetSpeakTranslator = new LeetSpeakTranslator;
            $input = "I";

            //Act
            $result = $test_LeetSpeakTranslator->leetMaker($input);

            //Assert
            $this->assertEquals("1", $result);
        }
        function test_leetSpeak_twoO()
        {
            //Arrange
            $test_LeetSpeakTranslator = new LeetSpeakTranslator;
            $input = "Oo";

            //Act
            $result = $test_LeetSpeakTranslator->leetMaker($input);

            //Assert
            $this->assertEquals("00", $result);
        }
        function test_leetSpeak_twoE()
        {
            //Arrange
            $test_LeetSpeakTranslator = new LeetSpeakTranslator;
            $input = "Ee";

            //Act
            $result = $test_LeetSpeakTranslator->leetMaker($input);

            //Assert
            $this->assertEquals("33", $result);
        }
        function test_leetSpeak_eStuary()
        {
            //Arrange
            $test_LeetSpeakTranslator = new LeetSpeakTranslator;
            $input = "Speak to snarsgotShs";

            //Act
            $result = $test_LeetSpeakTranslator->leetMaker($input);

            //Assert
            $this->assertEquals("Sp3ak t0 snarzg0tZhz", $result);
        }
    }

?>
