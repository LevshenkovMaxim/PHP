<?php
    abstract class HumanAbstract
    {
        private $name;
    
        public function __construct(string $name)
        {
            $this->name = $name;
        }
    
        public function getName(): string
        {
            return $this->name;
        }
    
        abstract public function getGreetings(): string;
        abstract public function getMyNameIs(): string;
    
        public function introduceYourself(): string
        {
            return $this->getGreetings() . '! ' . $this->getMyNameIs() . ' ' . $this->getName() . '.';
        }
    }

    class RussianHuman extends HumanAbstract
    {
        function getGreetings(): string
        {
            return "Привет";
        }

        function getMyNameIs(): string
        {
            return "Меня зовут";
        }

    }

    class EnglishHuman extends HumanAbstract
    {
        function getGreetings(): string
        {
            return "Hello";
        }

        function getMyNameIs(): string
        {
            return "My name is";
        }
    }

    $russian_name = new RussianHuman("Иван");
    $english_name = new EnglishHuman("John");

    echo $russian_name->introduceYourself();
    echo "<br>";
    echo $english_name->introduceYourself();