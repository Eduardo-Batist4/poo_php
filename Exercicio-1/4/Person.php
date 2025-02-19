<?php

class Person {
    public string $name;
    public string $email;
    public string $adress;
    public int $phone;

    public function __construct(string $name, string $email, string $adress, int $phone)
    {
        $this->name = $name;
        $this->email = $email;
        $this->adress = $adress;
        $this->phone = $phone;
    }

    public function getName () {
        return $this->name;
    }
}
