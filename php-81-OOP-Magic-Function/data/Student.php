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

    public function __toString(): string
    {
        return "Student University of Indonesia\n id : $this->id\n name : $this->name\n value : $this->value ";
    }

    public function __invoke(...$arguments)
    {
        $join = join(",", $arguments);
        echo "Invoke Student with arguments $join" . PHP_EOL;
    }

    public function __debugInfo(): array
    {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "value" => $this->value,
            "author" => "Joko Kurniawan Prasetya"
        ];
    }
}
