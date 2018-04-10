<?php 
    class Person{
        private $name;
        private $email;

        private static $ageLimit = 40;   


        public function __construct($name, $email) {
            $this->name = $name;
            $this->email = $email;
            echo __CLASS__.' created<br>';
        }

        public function __destruct() {
            echo __CLASS__.' destroyed<br>';
        }

        public function setName($name) {
            $this->name = $name.'<br>';
        }

        public function getName() {
            return $this->name;
        }
        
        public function setEmail($email) {
            $this->email = $email;
        }

        public function getEmail() {
            return $this->email.'<br>';
        }

        public static function getAgeLimit(){
            return self::$ageLimit;
        }
    }
/*
    $person1 = new Person('Alex', 'test@test.com');
    echo $person1->getName().'<br>';
    echo $person1->getEmail();

    $person1->setName('John Doe');

    
    $person1->setEmail('test@test.com');
*/

    class Customers extends Person{
        private $balance;

        public function __construct($name, $email, $balance){
            parent::__construct($name, $email);
            $this->balance = $balance;
            echo ' A new '.__CLASS__.' has benn created ';
        }

        public function setBalance($balance) {
            $this->balance = $balance;
        }

        public function getBalance() {
            return $this->balance.'<br>';
        }
    }

    # access to static
    echo Person::getAgeLimit();

    # $customer1 = new Customers('John Doe', 'test@test.com', 120);
    
    # echo $customer1->getName().'<br>';
    # echo $customer1->getEmail();
    # echo $customer1->getBalance();

/*
    # set variable name in class Person
    $person1 ->name = "John Doe";

    echo $person1->name;
*/
?>