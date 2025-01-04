<?php

$name="Areeby";
$age=20;
$income=20000;

echo "$name <br>";
echo "$age  <br>";
echo "$income  <br>";
// Types of DATATYPES in php 
// 1.String 
// 2.Integer 
// 3.Boolean
// 4.Object
//Array
//Float
//Null

//STRING- A sequence of Characters :
$friend="Faiqa";
echo "$name friend is $friend";
echo "<br>";
//INTEGER - Non-decimal Numbrs
$incomes=400;
$decrease= -200;
echo $incomes;
echo "<br>";
echo $decrease;

//FLOAT - Decimal Number :

$income=300;
$decrease=-455.89;
echo $income;
echo "<br>";
echo $decrease;
echo "<br>";

//BOOLEAN : is either true or false :

//Var_dump : to check the type of data "data is in interger,string,true,false"  ;
$x=TRUE ;
$friend=FALSE;
echo var_dump($x);
echo "<br>";
echo var_dump($friend);
echo "<br>";
//OBJECT : Instances of Classes
//Array 
$best_friends= array("Faiqa", "Irum","Sumiya", "Fariha");
echo var_dump($best_friends);
echo "<br>";
echo var_dump($best_friends[0]);
echo "<br>";
echo $best_friends[1];
echo "<br>";
echo $best_friends[2];
echo "<br>";
echo $best_friends[0];
echo "<br>";
echo $best_friends[4];
//NULL 
$name=NULL;
echo var_dump($name);





?>