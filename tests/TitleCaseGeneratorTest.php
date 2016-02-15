<?php

    require_once "src/TitleCaseGenerator.php";  // This tells PHPUnit to open the class we're going to test. To do this we use the keyword require_once to tell PHP where to find the TitleCaseGenerator.php file in relation to the project folder.

    class TitleCaseGeneratorTest extends PHPUnit_Framework_TestCase
    {       // This is the class declaration.
            // extends PHPUnit_Framework_TestCase means that this is a special kind of class that handles testing.We will always declare our test classes like this, using upper camel case, ending the file name with Test.php.

        function test_makeTitleCase_oneWord()  //we declare a method to run our first test.
        {
            // There're three parts to a PHPUnit test method: Arrange, Act, and Assert.
            //Arrange: gather all the materials needed to run our test. We create an instance of the class and store it in the variable $test_TitleCaseGenerator
            //Arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "beowulf";

            //Act: runs the actual method that we are testing.
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //Assert tells our tests what to expect from the output of our method.
            $this->assertEquals("Beowulf", $result);
        }  // we will declare a method to run our first test. When we run PHPUnit, our test class will be instantiated and each of its methods will be executed.
    }
    
    // Run in terminal in project folder
    // export PATH=$PATH:./vendor/bin
    // phpunit tests

?>
