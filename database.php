<?php

$servername="localhost";
$username="root";
$password="";

$conn=mysqli_connect($servername,$username,$password);


if(!$conn)
{
    die("Connection failed ".mysqli_connect_error());
}

echo "Connection is successful!";

$query="CREATE DATABASE finalPetdb";

if(mysqli_query($conn,$query))
{
    echo "Database has been successfully created!";
}

else
{
    echo "Error creating database!".mysqli_error($conn);
}


$dbName="finalPetdb";

$conn=mysqli_connect($servername,$username,$password,$dbName);

if(!$conn)
{
    die("Connection failed ".mysqli_connect_error());
}

echo "Connection is successful!";


$query="CREATE TABLE CarePetsData (
id int AUTO_INCREMENT PRIMARY KEY,
status varchar(20),
price varchar(10),
firstname varchar(50) NOT NULL,
lastname varchar(50) NOT NULL,
contact integer(20),
petname varchar(50),
category varchar(50),
birth varchar(50),
breed varchar(50),
address varchar(50),
email varchar(50),
note varchar(50))";

if(mysqli_query($conn,$query))
{
    echo "Table created successfully";
}
else
{
    echo "Error in creating table";
}



$query="INSERT INTO CarePetsData (status,price,firstname, lastname, contact, petname,category,birth, breed,address, email,note) VALUES ('S','12300','Amanda','Joe','963854729','Sammy','Cat','10th January 2006', 'Birman','151 Can Cres','amada.joe@yahoo.com','Loves to bark alot--10 years old ');";

$query.="INSERT INTO CarePetsData (status,price,firstname, lastname, contact, petname,category,birth, breed,address, email,note) VALUES('S','45000','Brittany','YanY','298598662','Tommy','Dog','12th October 2016','Bulldog','62 Van st','brittany@hotmail.com','Recently started taking vaccines--2 months old');";

$query.="INSERT INTO CarePetsData (status,price,firstname, lastname, contact, petname,category,birth, breed,address, email,note) VALUES ('S','5600','Bob','Dan','875598756','Rocky','Bird',  '07th Nov 2015','Parakeet', '7869 Balken gate way','bob@hotmail.com','all vaccines given, training of behaviour--1 year old');";

if(mysqli_multi_query($conn,$query))
{
    echo "Pet has been added ";
}
else
{
    echo "Error adding Pet!";
}



mysqli_close($conn);



?>

