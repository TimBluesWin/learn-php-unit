<?php

class User
{
    /**
     * First name of user
     * @var string
     */
    private $firstName;

    /**
     * Last name of user
     * @var string
     */
    private $lastName;

    /**
     * Get the user's full name from its first name and last name.
     * 
     * @return string The user's full name
     */

    public function getFullName()
    {
        if(empty($this->firstName) && empty($this->lastName))
        {
            return "";
        }
        else
        {
            return "$this->firstName $this->lastName";
        }
        
    }

    /**
     * Get the user's first name.
     * 
     * @return string The user's first name
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Sets the user's first name
     * @param string $name user's first name
     */
    public function setFirstName($name)
    {
        $this->firstName = $name;
    }

     /**
     * Sets the user's last name
     * @param string $name user's last name
     */
    public function setLastName($name)
    {
        $this->lastName = $name;
    }

}