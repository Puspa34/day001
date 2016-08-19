<html>
<body>

<h1> my first day</h1>

<?php
echo"hello kullabs";

</body>
</html>

//variables
<?php
$color = "white;
echo "My house is " . $color . "<br>"; //since  all the variable names are  case sensitive
echo "My school is " . $COLOR . "<br>";
echo "My boat is " . $coLOR . "<br>";
>?

<?php
ECHO "Hello World!<br>"; //keyword like echo is not case sensitive
echo "Hello World!<br>";
EcHo "Hello World!<br>";
>?


//creating (declaring)new variables

<?php
$x =5;
$y =5;
$txt="kullabs";
echo "i like $txt";

>?

//PHP variables scope
//Global and local scope
<?php
$x = 5; // global scope-variable declared outside a function has a global scope

function myTest() {
    // using x inside this function will generate an error
    echo "<p>Value of x  is: $x</p>";
} 
myTest();

echo "<p>Value of x is: $x</p>";
?>


<?php
function myTest{
	$x=5; //local scope-variable declared within the function has a local scope
echo"<p> value of x is: $x</p>";
}
myTest();
echo"<p> value of x is: $x</p>";
?>


//Global keyword-accesses a global variable within a function

<?php
$x = 1;
$y = 2;

function myTest() {
    global $x, $y;
    $y = $x + $y;
}

myTest();
echo $y; // output is 2
?>



//PHP stores all global variables in an array called $GLOBALS[index]

<?php
$x = 1;
$y = 2;

function myTest() {
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
} 

myTest();
echo $y; // output is 2
?>


//using static keyword

<?php
function myTest()
{
	$x=1;
	echo"$x";
	$x++;

}
myTest();
myTest();
myTest();
>?

//echo-print

<?php
echo "<h2>i m good girl</h2>";
echo "Hello Kullabs!<br>";
echo "I'm about to learn PHP!<br>";
echo "i ", "am ", "an ", "engineering ", "student.";
?>

//datatypes
//PHP integer
<?php 
$x = 1;
var_dump($x); //here var_dump returns the datatype and value and output is int(1)

?>


//PHP object
<?php
class school
{
	function school() {
		$this->school=EBS;
	}
}

$PMBHSS=new school();
echo $PMBHSS->school;
?>

//PHP Strings

<?php
echo strlen("hello kullabs"); //returns the length of string
echo str_word_count("Hello kullabs"); //counts the number of words in string
echo strrev("Hello kullabs"); //reverses a string
echo strpos("Hello Kullabs"."hello"); /searches for a specific text in a string //output 5
echo str_replace(" hello","namaste","Hello Kullabs");replaces some characters with some characters in a string //output namaste Kullabs

//constants

//creating constants-we use define function
 define(name ,value,case-insensitive);

//example
 <?php
define("namaste", "Hello Nepal!");
echo namaste; //output Hello Nepal
?>

//constants are global
<?php
define("namaste", "Hello Nepal!");

function myTest() {
    echo namaste; 
}
 
myTest();
?> 
//above example uses a constant inside the function even if it declared outside the function


// --I learnt about different php operators

//conditional statements
//php if statement
<?php

$x= date("H");

if ($x < "20"){
    echo "Have a good day!";
}
?>
//similarly i learnt about if else and if elseif else staements.

//php switch 

<?php
$lunchmenu = "momo";

switch ($favcolor) {
    case "red":
        echo "Your lunchmenu is roti!";
    case "blue":
        echo ""Your lunchmenu is rice !";
        break;
    case "green":
        echo "Your lunchmenu is burger!";
        break;
    default:
        echo "Your lunchmenu  is neither roti, rice, nor burger!";
}
?>

//php loops

//while loop
<?php 
$x = 1; 

while($x <= 5) {
    echo "The number is: $x <br>";
    $x++;
} 

//do while loop
<?php 
$x = 1; 

do {
    echo "The number is: $x <br>";
    $x++;
} while ($x <= 5);
?>

//for loop
<?php 
for ($x = 1; $x <= 2; $x++) {
    echo "The number is: $x <br>";
} 
?>

//foreach loop
<?php 
$colors = array("red", "green", "blue", "yellow"); 

foreach ($colors as $value) {
    echo "$value <br>";
}
?>

//php functions
//creating a user defined functiins in php

<?php
function hello()
{
    echo"namaste":

}
hello(); //function call
?>


//php arguments

<?php
function friends($best){
    echo"$best buddy . <br>";

}
friends ("kiran");
friends ("aashish");
friends ("praveen");
friends ("anup");
?>

//using two arguments

<?php
function friends($best , $year){
    echo"$best buddy. born in $year.<br>";

}
friends("kiran" , "1995');
friends("aashish" , "1994');
friends("praveen" , "1993');
friends("anup" , "1992');
?>

//i also learnt about some default argument value:)

<?php
function setHeight($minheight = 50) {
    echo "The height is : $minheight <br>";
}

setHeight(100);
setHeight(); // it will use the default value of 50
setHeight(200);
setHeight(300);
?>


//php functions -returning values

<?php
function sum ($x,$y){
    $z=$x+$y;
    return $z;

}
echo" 1+2 =" . sum(1,2). "<br>.";
echo" 1+2 =" . sum(1,2). "<br>.";
echo" 1+2 =" . sum(1,2 ."<br>.";
?>

//php arrays

<?php
$colors = array("red", "white", "blue");
echo "my fav color  " . $colors[0] . ", " . $colors[1] . " and " . $colors[2] . ".";
?>

//array() -we use to create a new array.

<?php
$colors = array("red", "white", "blue");
echo count($colors); //count() function is used to get the length of an array
?>

//loop through AN INDEXED array
<?php
$colors = array("red", "white", "blue");
$arrlength = count($colors);

for($x = 0; $x < $arrlength; $x++) {
    echo $colors[$x];
    echo "<br>";
}
?>

//php associative arrays
<?php
$age = array("puspa"=>"20", "sara"=>"21", "anup"=>"23");
echo "puspa is " . $age['puspa'] . " years old.";
?>

//loop through associative arrays
<?php
$age = array("puspa"=>"20", "sara"=>"21", "anup"=>"23");

foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
?>



