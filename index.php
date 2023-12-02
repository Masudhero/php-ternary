<?php

// ternary operator start 
    $name = "";
    $age = 50;

// if($age > 30){
//     $name ="true";
// }else{
//     $name = "false";
// }
// echo $name;

$user = ($age > 40) ? "true" : "false";
echo $user;
    // this is index array practice
 $friends = array("Masud","Himel","Shanto","Arif","Mondol");
echo "<pre>";
print_r($friends);
echo "<hr/>";
echo $friends[0].' '.$friends[4]." ".$friends[3];

// this is associative array practic 
echo "<br/>";
$student = array("first_name:"=>"Masud","Last_name:"=>"Rana","Death"=>"48979","Roll"=>478978);
echo "<pre>";
print_r($student);
echo "<hr/>";
echo $student['first_name:'].' '.$student["Death"];

// maltidaimensonal array stary start prictice 
$teacher_name =[
    "teacher"=>["Masud Rana","Shakib","Arif Sir","Mondol","Mahfuz","ashrif Bhai"],
    "friend"=>["Aktar Hosin","Jummot Hasan","tonny Aktar","Baizid Hosien","shakil"],
    "student"=>["Masud","himel","Shobo","bijoy"]
];
echo "<pre>";
print_r($teacher_name);
echo "<hr/>";
print_r($teacher_name['teacher']);
echo "<pre>";

// maltidaimensonial array end
// php array reperance start
$name = ["Himel","shakib","anower","shakil","bijoy","mondol","arif"];
$name2 = ["Himel","shakib","anower","shakil","bijoy","mondol","arif"];
print_r($name);
echo "<hr/>";
print_r(array_push($name,"bulning","chad"));
echo "<pre>";
print_r($name);
print_r($name2);
echo "<hr/>";
print_r(array_push($name2,"ancle","chaca","unti"));
print_r($name2);
$array = array_slice($name2,0,-2);
print_r($array);

// this is unice array 

$totul_names = ["masud","masud","rasel","rasel","masud","arif","arif","ripon","masud"];
print_r($totul_names);
echo "<hr/>";
$result = end($totul_names);
print_r($result);

// this in_array start php 

$student_name =["Shakib","sofik","sabbir","sommir","shadab","sadman","sumon","shakil"];
print_r($student_name);
echo "<hr>";
$result2 = in_array("sofikss",$student_name);
if($result2){
    echo "true";
}else{
    echo "false";
}

// data types cheak and var_dumo start 
$student2 = ["masud","roll","phone"];
print_r($student2);
echo "<hr>";
$sresust = prev($student2);
print_r($sresust);

echo "<hr/>";

$a = array("a"=>"red","b"=>"blue","c"=>"yellow","d"=>"orange");
$b = array("a"=>"red","b"=>"light","c"=>"tomuto");
print_r(array_splice($a,0,4));
print_r(array_splice($b,0,2));


?>