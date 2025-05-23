<?php
/**
 * A class to create User objects from PDO fetch statements. 
 * Note that there is no constructor. If you provide a constructor, it must
 * not require any parameters, or the fetch will fail.
 * 
 * IMPORTANT: The names of the fields (instance variables) must match the
 * column names from the SELECT query in order for this to work. If there
 * is a mismatch, it will fail silently. The objects will be created,
 * but with null values for the mismatched fields.
 * 
 * Sam Scott, McMaster University, 2025
 */
class User
{
    private $firstname;
    private $lastname;

    /**
     * Returns a string representation of the user object as a list item
     */
    function toListItem()
    {
        return "<li>$this->firstname $this->lastname</li>";
    }
}
