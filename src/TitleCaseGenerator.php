<?php

    class TitleCaseGenerator
    {
        function makeTitleCase($input_title)
        {
            $input_array_of_words = explode(" ", $input_title); //splits words into separate arrays
            $array_words_lowercase = array_map('strtolower', $input_array_of_words); // converts values to lower case

            $output_titlecased = array(); //empty array for output
            $dont_uppercase_words = array("a", "an", "is", "the", "at", "by", "and", "as", "but", "or", "for", "in", "nor", "on", "at", "up", "to", "on", "of", "from", "by");//words we do not want capitalized



            foreach ($array_words_lowercase as $word) {
                if (array_search($word, $dont_uppercase_words)) {
                    array_push($output_titlecased, $word); //capitalize each word and push it into output
                } else {
                    array_push($output_titlecased, ucfirst($word)); //capitalize each word and push it into output
                }
            } //for each word in that array


            $first_word = array_shift($output_titlecased);//grab first word
            $first_word = ucfirst($first_word);//capitalize first word
            array_unshift($output_titlecased, $first_word);//put that first word back in the array

            return implode(" ", $output_titlecased);

        }
    }





?>
