<?php
   try {
     $konektor = new PDO('mysql:host=localhost;dbname=usersmib','root','');
     $konektor -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   } catch (PDOException $e) {
     echo $e->getMessage();
     die();
   }
   ?>
