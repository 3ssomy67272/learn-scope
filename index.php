<?php

// commands usage:
/*
1- code reminder when leaving the project for a while without committing:
2- a refreance for the other developers to understand the project structure and flow.
3- a way to document the project for future reference.
*/ 
####################################################

// mathmatical operations
/*
+ addition                                                          |                      or += add and assign
- subtraction                                                    |                      or -= subtract and assign
* multiplication                                                |                      or *= multiply and assign
/ division                                                            |                      or /= divide and assign
% modulus (remainder of division)             |                      or %= modulus and assign
++ increment (increase by 1)                 
-- decrement (decrease by 1)
*/
#####################################################

// variables
/*
Variables are used to store data that can be used later in the code. They can hold different types of data, such as numbers, strings, arrays, and objects.

syntax: $variable_name = value;            (declare a variable with a name and assign it a value.)
*/
#####################################################

// data types
/*
integer: 42 / 7 / 3 /100
float: 3.14 / 2.718 / 1.618
string: "Hello, World!" / 'PHP is fun!'
boolean: true / false
array: [1, 2, 3] / ["apple", "banana", "cherry"]
object: new ClassName() / $object = new stdClass();
null: null (represents a variable with no value)
*/
#####################################################

//printing and output
/* 
The `echo` and `print` statements are used to output data to the screen.
echo "Hello, World!";
print ("Hello, World!");
*/
#####################################################

// comparison operators
/*
== equal to (checks if two values are equal) example: 5 == "5"=> true
=== identical (checks if two values are equal and of the same type) example: 5 === "5" => false
!= not equal to (checks if two values are not equal) example: 5 != 6 => true
!== not identical (checks if two values are not equal or not of the same type) example: 5 !== "5" => true
> greater than (checks if the left value is greater than the right value) example: 5 > 3 => true
<  less than (checks if the left value is less than the right value) example: 3 < 5 => true
>= greater than or equal to (checks if the left value is greater than or equal to the right value) example: 5 >= 5 => true
<= less than or equal to (checks if the left value is less than or equal to the right value) example: 3 <= 5 => true
<> not equal to (checks if two values are not equal) example: 5 <> 6 => true  is the sane as 5 != 6
*/
#####################################################

// logical operators
/*
and (&&) - returns true if both operands are true         1      1
or (||) - returns true if at least one operand is true        1      0     |  0      1
xor - returns true if exactly one operand is true            1      0     |  0      1 
not (!) - negates the value of the operand (true becomes false, false becomes true)       0   0
*/
#####################################################

// control flow statements
/*if statement - executes a block of code if a condition is true
if (condition) {
    // code to execute if condition is true
} elseif (another_condition) {
    // code to execute if another_condition is true
} else {
    // code to execute if none of the conditions above are true
}
switch statement - selects one of many blocks of code to execute based on the value of a variable
switch (variable    [the vat that the code gonna check on]) {
    case condition 1:   
        // code to execute if variable equals condotion 1
        break;
    case condition 2:
        // code to execute if variable equals condition 2
        break;
    default:
        // code to execute if variable does not match any case
}
*/
#####################################################

// ternary operator
/*
The ternary operator is a shorthand way of writing an if-else statement. It has the following syntax:

condition ? code_if_true : code_if_false;   ===     if (condition) {
                                                                                                code_if_true;
                                                                                            } else {
                                                                                                code_if_false;
                                                                                            }
*/
###########################################################

// loops
/*
for loop - executes a block of code a specified number of times
for (initialization; condition; increment[update]) {
    // code to execute in each iteration
}
while loop - executes a block of code as long as a condition is true
while (condition) {
    // code to execute as long as condition is true
}
do-while loop - executes a block of code at least once and then continues as long as a condition is true
do {
    // code to execute at least once
} while (condition);
*/
###########################################################

// arrays
/*
Arrays are used to store multiple values in a single variable. They can hold different types of data, such as numbers, strings, and objects. 
$variable_name = [value1, value2, value3]; // indexed array
$variable_name = ["key1" => "value1", "key2" => "value2"]; // associative array  # helpful to use when you want to access the values by their keys instead of their index.
$variablee_name = [["value1", "value2"], ["value3", "value4"]]; // multidimensional array    # simbly an array of arrays.
*/
###########################################################
#problem solving example: sum of diagonal elements in a 2D array :fire:
// $nest_array = [
//     [1, 2, 3, 4],
//     [5, 6, 7, 8],
//     [9, 10, 11, 12],
//     [13, 14, 15, 16]
// ];

// $sum = 0;
// for ($i=0; $i < count($nest_array); $i++) { 
//     $sum += $nest_array[$i][$i];
//     $sum += $nest_array[(count($nest_array) -$i)-1][$i];
// }
// echo "The sum of the diagonal elements is: " . $sum;
###########################################################

// functions
/*
Functions are reusable blocks of code that perform a specific task. They can take parameters and return values.
function function_name($parameter1, $parameter2) {
    // code to execute when calling the function
    return $value;                      // the return statement is used at the end of the function code, any code after the return statement will not be executed.
}
    */
###########################################################
// OOP (Object-Oriented Programming)
/*
OOP is a programming paradigm that uses objects to represent data and methods to manipulate that data. It allows for encapsulation, inheritance, and polymorphism.
class ClassName {
    public $property1; // public property
    private $property2; // private property
    protected $property3; // protected property

    public function method1() {
        // code for method1
    }

    private function method2() {
        // code for method2
    }

    protected function method3() {
        // code for method3
    }
    constructor is a special method that is called when an object is created from a class. It is used to initialize the object's properties.
class ClassName {
    public $property1;

    public function __construct($value) {
        $this->property1 = $value; // $this refers to the current object
    }
}
    */
// class User{
//     public $haight;
//     public $favfood;
//     public function sport($sport) {
//         echo "user's favourite sport is $sport ";
//     }
//     public function gf() {
//         echo "the user has a GirtFriend ";
//     }
// }

// $user1 = new User();

// $user1 -> haight = "190Cm"; echo $user1->haight . "<br>";
// $user1 -> favfood = "Pasta"; echo $user1->favfood . "<br>";
// $user1 -> sport("karate");
// $user1 -> gf();

// $user2 = new User();
// $user2 -> haight = "167Cm"; echo $user2 -> haight . "<br>";
// $user2 -> favfood = "Chicken"; echo $user2 -> favfood . "<br>";
// $user2 -> sport("football");

# const example

// class Person{
//     public $name;
//     public $age;
//     public $gender;

//     public function __construct($name, $age, $gender) {
//         $this ->name = $name;
//         $this ->age = $age;
//         $this ->gender = $gender;
//         echo $name, $age, $gender;
//     }
// }

// $person1 = new Person("essam", 19, "male");    // new object named person1, it will imediatly call the function since it has __construct
// $person2 = new Person("Morgan", 345, "male");    // new object named person2, it will imediatly call the function since it has __construct
