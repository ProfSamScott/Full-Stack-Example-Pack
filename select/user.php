<?php
/**
 * A class to create User objects.
 * 
 * Sam Scott, McMaster University, 2025
 */
class User
{
    private $firstname;
    private $lastname;

    function __construct($firstname, $lastname)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
    }

    /**
     * Returns a string representation of the user object as a list item
     */
    function toListItem()
    {
        return "<li>$this->firstname $this->lastname</li>";
    }
}
