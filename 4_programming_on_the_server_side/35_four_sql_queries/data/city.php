<?php
class City
{

    private $name;
    private $population;
    private $country;

    function __construct($name, $population, $country)
    {
        // the iconv function is used so that the characters in the 
        // database display properly.
        $this->name = iconv("ISO8859-1", "utf-8", $name);
        $this->population = (int)iconv("ISO8859-1", "utf-8", $population);
        $this->country = iconv("ISO8859-1", "utf-8", $country);
    }

    function toTableRow()
    {
        return "<tr><td>$this->name</td><td>$this->country</td><td>$this->population</td></tr>";
    }
}