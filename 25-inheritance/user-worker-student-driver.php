<?php

class User
{
    protected string $name;
    protected int $age;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function setAge(int $age): void
    {
        $this->age = $age;
    }
}

class Worker extends User
{
    private float $salary;

    public function getSalary(): float
    {
        return $this->salary;
    }

    public function setSalary(float $salary): void
    {
        $this->salary = $salary;
    }

}

$ivan = new Worker();
$ivan->setName('Ivan');
$ivan->setAge(25);
$ivan->setSalary(1000);

$vasya = new Worker();
$vasya->setName('Vasya');
$vasya->setAge(26);
$vasya->setSalary(2000);

echo($ivan->getSalary() + $vasya->getSalary()), PHP_EOL;

class Student extends User
{
    private float $stipend;
    private int $course;

    public function getStipend(): float
    {
        return $this->stipend;
    }

    public function setStipend(float $stipend): void
    {
        $this->stipend = $stipend;
    }

    public function getCourse(): int
    {
        return $this->course;
    }

    public function setCourse(int $course): void
    {
        $this->course = $course;
    }

}

$someStudent = new Student();
$someStudent->setName('Oleg');
$someStudent->setAge(19);
$someStudent->setStipend(100);
$someStudent->setCourse(2);

echo $someStudent->getName(), ' ', $someStudent->getAge(), ' ', $someStudent->getStipend(
), ' ', $someStudent->getCourse(), PHP_EOL;

class Driver extends Worker
{
    private int $experience;
    private string $category;

    public function getExperience(): int
    {
        return $this->experience;
    }

    public function setExperience(int $experience): void
    {
        $this->experience = $experience;
    }

    public function getCategory(): string
    {
        return $this->category;
    }

    public function setCategory(string $category): void
    {
        $this->category = $category;
    }


}

$someDriver = new Driver();
$someDriver->setName('Petr');
$someDriver->setAge(39);
$someDriver->setSalary(1100);
$someDriver->setExperience(5);
$someDriver->setCategory('B');

echo $someDriver->getName(), ' ', $someDriver->getAge(), ' ', $someDriver->getSalary(), ' ', $someDriver->getExperience(
), ' ', $someDriver->getCategory(), PHP_EOL;
