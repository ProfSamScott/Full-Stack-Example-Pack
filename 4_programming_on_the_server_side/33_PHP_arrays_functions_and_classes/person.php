<?php
/*
 * This PHP file just contains a class definition. You can use it in
 * another program by including it like this:
 * 
 * include "person.php";
 * 
 * The include statement pastes the included code into your file and then
 * runs it as if it was part of the original file. It's not an import 
 * statement like in Java.
 * 
 * Sam Scott, McMaster University, 2025
 */

 // Class definition for a Person
class Person
{
    // instance variables
    public $name = "";
    public $age = -1;

    // constructor function must be named __construct
    // not the use of default values
    function __construct($name, $age = -1)
    {
        $this->name = $name;
        $this->age = $age;
    }

    function increase_age($increment)
    {
        $this->age += $increment;
    }

    // This global function returns a view of a person object
    function view()
    {
        return "<p>$this->name: $this->age years old</p>";
    }
}

// if your entire program is one big <?php tag, you don't need to close it