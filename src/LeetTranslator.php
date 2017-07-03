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
            $query_array = ["I", "E", "e", "O", "o"];
            $replacement_array = ["1", "3", "3", "0", "0"];
            array_push($output_word, str_replace($query_array,$replacement_array, $word));
        }
        foreach ($output_word as $werd)
        {
            if ($werd[0] === "S" || $werd[0] === "s")
            {
                for ($x = 1; $x < strlen($werd); ++$x)
                {
                    if ($werd[$x] === "s")
                    {
                        $werd[$x] = "z"
                    }
                    if ($werd[$x] === "S")
                    {
                        $werd[$x] = "Z"
                    }
                }
            }
        }
        // $feeder_input = implode(" ", $output_word);
        // $input_array = str_split($feeder_input);
        // foreach($input_array as $letter)
        // {
        //     if ($letter == "I") {
        //         array_push($output_array, "1");
        //     } elseif ($letter == "O" || $letter == "o")
        //     {
        //         array_push($output_array, "0");
        //     } elseif ($letter == "E" || $letter == "e")
        //     {
        //         array_push($output_array, "3");
        //     } elseif ($letter == "S")
        //     {
        //         array_push($output_array, "Z");
        //     } elseif ($letter == "s")
        //     {
        //         array_push($output_array, "z");
        //     } elseif ($letter == "&")
        //     {
        //         array_push($output_array, "S");
        //     } elseif ($letter == "*")
        //     {
        //         array_push($output_array, "s");
        //     } else
        //     {
        //         array_push($output_array, $letter);
        //     }
        }
        return implode($output_array);
    }
}
?>
