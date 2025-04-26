<?php
    class Cat
    {
        private $name;
        private $color;
        public function __construct(string $name , string $color)
        {
            $this->name = $name;
            $this->color = $color;
        }

        public function sayHello()
        {
            echo 'Привет! Меня зовут ' . $this->name . '.';
            echo "<br>";
            echo 'Я ' . $this->color . '.';
        }
        public function setName(string $name)
        {
            $this->name = $name;
        }
        public function getName(): string
        {
            return $this->name;
        }

        public function setColor(string $color): void
        {
            $this->color = $color;
        }
        public function getColor(): string
        {
            return $this->color;
        }
    }

    $cat1 = new Cat('Мурка','чёрный');
    echo $cat1->sayHello();