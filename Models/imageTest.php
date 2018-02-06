<?php

// methode to move image in an folder

require '../vendor/autoload.php';


use Intervention\Image\ImageManagerStatic as Image;

Image::configure(array('driver' => 'imagick'));

$img = Image::make($_FILES["url"]["tmp_name"]);

$img->save('../big-imageBank/'.$_FILES["url"]["name"]); // save photo in Big size

$img->resize(320, 240);


$img->save('../mini-imageBank/'.$_FILES["url"]["name"]);// save photo in small size

//Bertrand MarlairThu 4:02pm

//psql -h ec2-46-137-174-67.eu-west-1.compute.amazonaws.com -U unzffoqxwfalbt db0uojqjbc80ph

// CREATE TABLE employees(
//   employee_id SERIAL,
//   last_name VARCHAR (30),
//   first_name VARCHAR (30),
//   title VARCHAR (50)
// );
// CREATE TABLE users (
//   id SERIAL,
//   pseudo VARCHAR(255),
//   password VARCHAR(255)
// );
//
// CREATE TABLE images (
//   photo_id SERIAL,
//   url TEXT,
//   title VARCHAR(255) ,
//   description VARCHAR(255) ,
//   date TIMESTAMP ,
//   user_id SERIAL
// );

last_name VARCHAR (30),
db0uojqjbc80ph(>   first_name VARCHAR (30),
db0uojqjbc80ph(>   title
?>
