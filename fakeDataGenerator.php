<?php
require_once 'src/autoload.php';
require_once 'lib/class.db.php';

$db = new db("mysql:host=127.0.0.1;port=3306;dbname=ci", "root", "");


$faker = Faker\Factory::create();
$faker->seed(1000);

for($i=0;$i<1000;++$i) {
    $insert = array(
        "id" => $faker->uuid,
        "name" => $faker->name,
        "address" => $faker->address
    );
    $db->insert("auto_test", $insert);
}



// generate data by accessing properties
//echo $faker->name;
//for($i=0;$i<10;++$i)
//echo $faker->randomNumber(1000, 20000).'<br/>';
// 'Lucy Cechtelar';
//echo $faker->address;
// "426 Jordy Lodge
// Cartwrightshire, SC 88120-6700"
//echo $faker->text;

//echo $faker->title;