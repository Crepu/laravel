<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class Testcontroller extends Controller
{
    public createDB()
    {
       $servername = "webapp-laravel-database.mysql.database.azure.com";
        $username = "laravel@webapp-laravel-database";
        $password = "L,app,123";
        $port = 3306;

        // Create connection
        $conn = new mysqli($servername, $username, $password, $port);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
        $sql = "CREATE DATABASE IF NOT EXISTS laravel";
        if ($conn->query($sql) === TRUE) {
            echo "Database created successfully";
        } else {
            echo "Error creating database: " . $conn->error;
        }

        $conn->close();

    }
}
