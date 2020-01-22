<?php


namespace src\models;

use config\Connection;
class User
{
    public function getAll()
    {
        $objects = array();
        $con = new Connection();
        $allFromUsers = $con->db->query("SELECT * FROM users ")->fetchAll();
        foreach ($allFromUsers as $row) {
            $newRow = new self();
            $newRow->id = $row['id'];
            $newRow->firstName = $row['first_name'];
            $newRow->lastName = $row['last_name'];
            $newRow->username = $row['username'];
            $newRow->password = $row['password'];
            $newRow->email = $row['e-mail'];
            $newRow->phone = $row['phone'];
            $newRow->roleId = $row['role_id'];
            $newRow->created_at = $row['created_at'];
            $newRow->updated_at = $row['updated_at'];
            $objects[] = $newRow;
        }
        return $objects;
    }
    public function create()
    {
        $objects = array();
        $con = new Connection();
        if(isset($_POST['register'])) {
            $con = new Connection();
            $firstName = strip_tags(trim($_POST['firstName']));
            $lastName = strip_tags(trim($_POST['lastName']));
            $username = strip_tags(trim($_POST['username']));
            $email = strip_tags(trim($_POST['email']));
            $password = strip_tags(trim($_POST['password']));
            $con->db->query("INSERT INTO `users`(`first_name`, `last_name`, `username`, `password`, `e-mail`, `role_id`) 
                                                VALUES ('$firstName', '$lastName', '$username', '$password', '$email', 2)");
        }
    }
}