<?php
    try 
    {
        $pdo = new PDO("mysql:host=localhost; dbname=laptop", "root", "");
        $pdo->query("set names utf8");
    } catch (PDOException $ex) {
        echo "Lỗi kết nối" . $ex->getMessage();
        die();
    }
?>