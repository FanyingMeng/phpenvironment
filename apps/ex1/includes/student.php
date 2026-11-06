<?php

class Student {

    // Properties
    public string $firstName;
    public string $lastName;


    // Constructor
    public function __construct(string $firstName, string $lastName) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;

    }

    // Method
    public function getFullName(){
        return  $this->firstName. " " .$this->lastName;
    }
}



?>