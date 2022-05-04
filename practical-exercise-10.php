<?php 


/* Step 1: Use the make a class called dog
   Step 2: Set some properties for Dog, example, eye color, nose,
   of fur color
   Step 3: Make a method name showAll that echos all the properties
   Step 4: Instantiate the class / create object and call it pitbull
   Step 5: Call the method ShowAll
*/

class Dog {
    var $eye_color = "Brown";
    var $nose_color = "Black";
    var $fur_color = "Blonde";

    function showAll() {
        $this->eye_color . "<br />";
        $this->nose_color . "<br />";
        $this->fur_color . "<br />";
    };
}

$pitbull = new Dog();
$pitbull->showAll();

?>