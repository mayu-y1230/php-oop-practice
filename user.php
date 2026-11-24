<?php

class User {
    public $name;
    public $age;

    public function __construct($name, $age) {
    $this->name = $name;
    $this->age = $age;
    }

    public function introduce() {
    echo "<p>こんにちは。私の名前は $this->name です。$this->age 歳です</p>";
    }   

    public function isAdult() {
    return $this->age >= 18;
    }
}





$user1 = new User("田中太郎", 25);
$user2 = new User("佐藤花子", 17);
$user3 = new User("鈴木一郎", 30);

$user1->introduce();
$user2->introduce();
$user3->introduce();

$users = [$user1, $user2, $user3];

foreach($users as $user) {
    if($user->isAdult()) {
        echo "<p> $user->name さんは成人です</p>";

    }else {
        echo "<p> $user->name さんは未成年です</p>";

    }
}