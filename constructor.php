<?php

class User {
    public function __construct(private string $name, private int $age){

    }
    public function info() {
        return $this->name;
    }
}

$user = new User('Ícaro Apolo', 23);
echo $user->info();

?>