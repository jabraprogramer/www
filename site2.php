<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>king smoke shop</title>
    <style>
    body{
      /* background-color: #ffffb3; */
    }
    html{
      /* background-color: blue; */
    }
    </style>
  </head>
  <body>
    <?php
    include "header.html"

     ?>
    <form action="site2.php" method="post">
			enter the first number: <input type="number" name="num1"><br>
			enter the second number: <input type="number" name="num2"><br>
			enter the operation: <input type="text" name="ope"><br>
			<input type="submit"><br>
    <?php

    //echo "enter the first numper";

      function calculate1($operation,$num1,$num2){

        if($operation== "+"){
          echo  $num1+$num2;
        } elseif ($operation == "-") {
          echo  $num1-$num2;
        }elseif ($operation == "*") {
          echo  $num1*$num2;
        }elseif ($operation == "/") {
          echo $num1/$num2;
        }else {
          echo "unknown operation";
        }
      }

      calculate1($_POST["ope"],$_POST["num1"],$_POST["num2"]);

     ?>
  </body>
</html>
