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
not (!) - negates the value of the operand (true becomes false, false becomes true)
*/
?>