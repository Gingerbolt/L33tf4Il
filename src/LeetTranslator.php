<?php
class LeetSpeakTranslator
{


    function leetMaker($input_string)
    {
        $output_array = array();
        $output_word = array();
        $word_array = explode(" ", $input_string);
        foreach ($word_array as $word)
        {
            $pos = strpos($word, "S")
            if ($pos !== false)
            {
                array_push($output_word, substr_replace($word, "&", $pos, strlen("S"));
            }
            
            if ($word[0] == "S")
            {
                array_push($output_word, str_replace("S","&", $word));
            } elseif ($word[0] == "s")
            {
                array_push($output_word, str_replace("s","*", $word));
            } else
            {
                array_push($output_word, $word);
            }
        }
        $feeder_input = implode(" ", $output_word);
        $input_array = str_split($feeder_input);
        foreach($input_array as $letter)
        {
            if ($letter == "I") {
                array_push($output_array, "1");
            } elseif ($letter == "O" || $letter == "o")
            {
                array_push($output_array, "0");
            } elseif ($letter == "E" || $letter == "e")
            {
                array_push($output_array, "3");
            } elseif ($letter == "S")
            {
                array_push($output_array, "Z");
            } elseif ($letter == "s")
            {
                array_push($output_array, "z");
            } elseif ($letter == "&")
            {
                array_push($output_array, "S");
            } elseif ($letter == "*")
            {
                array_push($output_array, "s");
            } else
            {
                array_push($output_array, $letter);
            }
        }
        return implode($output_array);
    }
}
?>
