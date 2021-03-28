<?php

class Student
{
    public string $id;
    public string $name;
    public int $value;
    private string $age;

    public function setAge(int $value)
    {
        $this->age = $value;
    }

    public function __clone()
    {
        unset($this->value);
    }
}
