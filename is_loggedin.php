<?php 
          session_start();

          if(!isset($_SESSION['username'])) {
                    header("Location: login.php");
                    exit();
          }

          $role = $_SESSION['role'];
?>