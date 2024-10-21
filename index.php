<?php

//Array
// $persons = [
//     ['name' => 'Tizio', 'surname' => 'Verdi', 'age' => 78],
//     ['nome' => 'Sempronio', 'cognome' => 'Bianchi', 'eta' => 23],
//     ['name' => 'Ciccio', 'surname' => 'Rossi', 'age' => 11],
// ];

// var_dump($persons);

//Nome in inglese
//Prima lettera maiuscola
//Singolare


class Person
{
    //Attributi == Variabile
    public $name;
    public $surname;
    public $age; //valoe di default
    public static $count = 0;
    public static $count_age = 0;
    public static $testo = 'Sono una classe Persona';
    //public $age = 18; //valoe di default 
    //Metodo == funzione 
    //Built In method - Magic method // 
    public function __construct($string1, $string2, $int)
    {
        //var_dump($this['name']); SBAGLIATA
        //var_dump($this=>);//SBAGLIATA
        $this->name = $string1;
        $this->surname = $string2;
        $this->age = $int;
        self::$count++;
        self::$count_age +=  $this->age;
    }
    //User method = funzione custom 
    public function sayHello()
    {
        echo "Ciao mi chiamo $this->name $this->surname e ho $this->age anni \n";
        $this->end();
    }

    public function start()
    {
        echo "Inizio stampa \n";
    }


    public function end()
    {
        echo "Fine stampa \n";
    }

    public static function stampaCount()
    {
        echo 'Al momento siamo alla iterazione numero ' . self::$count . "\n";
    }

    public static function avgAge()
    {
        echo self::$count_age / self::$count;
    }
}

//Dentro classe si usa $this
//Fuori la classe $obj
Person::stampaCount();
$person1 = new Person('Tizio', 'Verdi', 15); //Oggetto  
Person::stampaCount();
$person2 = new Person('Caio', 'Rossi', 10); //Oggetto 
Person::stampaCount();
$person3 = new Person('Luca', 'Rossi', 15); //Oggetto 
Person::stampaCount();
Person::avgAge();

// $person2 = new Person('Caio', 'Rossi', 12); //Oggetto 
// // echo $person1->surname;
// //echo $person2->age;
// $person1->sayHello();
// $person2->start();
// $person2->sayHello();

//-> proprietà dinamica
//:: proprietà statica


// echo $person1->name;
// echo Person::$count;




















//$objs = [$person1, $person2, $person3];
//var_dump($person1);


// $name, $surname, $age;
// function sayHello($string1, $string2, $int)
// {
//     echo "Ciao mi chiamo $string1 $string2 e ho $int age";
// }

// sayHello('Tizio', 'Caio', 67);
