<?php

    class TitleCaseGenerator
    {
        function makeTitleCase($input_title)
        {
            $input_array_of_words = explode(" ", $input_title); //splits words into separate arrays
            $array_words_lowercase = array_map('strtolower', $input_array_of_words); // converts values to lower case

            $output_titlecased = array(); //empty array for output
            $dont_uppercase_words = array("a", "an", "is", "the", "at", "by", "and", "as", "but", "or", "for", "in", "nor", "on", "at", "up", "to", "on", "of", "from", "by");//words we do not want capitalized



            foreach ($array_words_lowercase as $word) {//for each word in that array
                if (array_search($word, $dont_uppercase_words)) {
                    array_push($output_titlecased, $word); //don't capitalize a word if it matches in the array.
                } else {
                    array_push($output_titlecased, ucfirst($word)); //capitalize each word and push it into output
                }
            }
            $first_word = array_shift($output_titlecased);//grab first word "the Shining" | "the"
            $first_word = ucfirst($first_word);//capitalize first word "the Shining" | "The"
            array_unshift($output_titlecased, $first_word);//put that first word back in the array "The Shining"

            if (preg_match('/[^a-zA-Z]/', $output_titlecased[0])) {//if the first element in array is NOT a-z,A-Z then...
                $output_titlecased[1] = ucfirst($output_titlecased[1]);//capitalize the 2nd element. 
            }

            return implode(" ", $output_titlecased);
        }
    }

//test area

?>
