<?php

require '../functions.php';

use PHPUnit\Framework\TestCase;

class StackTest extends TestCase
{
    public function testSuccessdisplayItems()
    {
        $output = '';
        $output .= '<div class= "item">';
        $output .= '<ul>';
        $output .= '<li> Common Name: tommy</li>';
        $output .= '<li> Scientific Name: sally</li>';
        $output .= '<li> Kingdom: dingus</li>';
        $output .= '<li> Genome Size/Mbp: barry</li>';
        $output .= '</div>';

        $inputArray = [['commonName' => 'tommy', 'scientificName' => 'sally', 'kingdom' => 'dingus', 'genomeMbp' => 'barry']];

        $case = displayItems($inputArray);

        $this->assertEquals($case, $output);
    }

    public function testFailuredisplayItems()
    {
        $output = "There was an error displaying the items on the page";


        $inputArray = [['sausages' => 'tommy', 'jelly' => 'sally', 'custard' => 'dingus', 'fishfingers' => 'barry']];

        $case = displayItems($inputArray);

        $this->assertEquals($case, $output);

    }
    
    public function testMalformeddisplayItems()
    {
        //input to test how deals with a bool
        $input = false;
        //sets the test up to expect an error to be thrown by php when you give it the wrong datatype
        $this->expectException(TypeError::class);
        //running the real function using the input
        displayItems($input);
    }
}
