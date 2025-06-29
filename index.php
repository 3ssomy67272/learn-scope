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
    ###########################################################
// Global variables
/*
Global variables are variables that can be accessed from anywhere in the code, including inside functions. They are declared using the `global` keyword.
$_SERVER - contains information about the server and the current request
$_GET - contains data sent to the script via URL parameters
$_POST - contains data sent to the script via HTTP POST method
$_REQUEST - contains data from both $_GET and $_POST
$_SESSION - used to store session variables
$_COOKIE - used to store cookie variables
$_FILES - used to access uploaded files
$_ENV - contains environment variables
$_GLOBALS - contains all global variables
*/ 
###########################################################

// connect to the mysql database
/*
$servername = "localhost/or server_ip";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";

$connect = new mysqli($servername, $username, $password, $dbname); // connection query
*/
//Database CRUD operations
/*
Create - insert data into the database 
    - CREATE TABLE [tablename] (column1 datatype, column2 datatype, ...);
Insert - insert data into the table
    - INSERT INTO [tablename] (column1, column2, ...) VALUES (value1, value2, ...);
Read - retrieve data from the table
    - SELECT column1, column2, ... FROM [tablename] WHERE condition;
Update - update existing data in the table
    - UPDATE [tablename] SET column1 = value1, column2 = value2, ... WHERE condition;
Delete - delete data from the table
    - DELETE FROM [tablename] WHERE condition;
*/
###########################################################

// FOREIGN KEYS
/*
Foreign keys are used to create a relationship between two tables in a database. They ensure referential integrity by linking a column in one table to the primary key of another table.
    - CREATE TABLE [child_table] (
        column1 datatype,
        column2 datatype,
        FOREIGN KEY (column_name_of_present table) REFERENCES [parent_table](primary_key_column)
    );
*/
###########################################################

// SQL JOINs
/*
JOINs are used to combine rows from two or more tables based on a related column between them. There are several types of JOINs:
INNER JOIN - returns only the rows that have matching values in both tables
    - SELECT [columns] FROM [table1] INNER JOIN [table2] ON [table1.column_name] = [table2.column_name];
LEFT JOIN - returns all rows from the left table and the matched rows from the right table, or NULL if there is no match
    - SELECT [columns] FROM [table1] LEFT JOIN [table2] ON [table1.column_name] = [table2.column_name];
RIGHT JOIN - returns all rows from the right table and the matched rows from the left table, or NULL if there is no match
    - SELECT [columns] FROM [table1] RIGHT JOIN [table2] ON [table1.column_name] = [table2.column_name];
FULL OUTER JOIN - returns all rows when there is a match in either left or right table records
    - SELECT [columns] FROM [table1] FULL OUTER JOIN [table2] ON [table1.column_name] = [table2.column_name];
cross join - returns the Cartesian product of two tables, i.e., all possible combinations of rows from both tables
    - SELECT [columns] FROM [table1] CROSS JOIN [table2];
    
*/
###########################################################
// laravel
/*
Laravel is a PHP framework that provides a clean and elegant syntax for building web applications. It follows the MVC (Model-View-Controller) architectural pattern and includes features such as routing, middleware, authentication, and more.
*/
// To get started with Laravel, you can follow these steps:
/*
1. Install Composer: Laravel uses Composer for dependency management. You can download and install Composer from https://getcomposer.org/download/.
2. Install Laravel: Once Composer is installed, you can create a new Laravel project by running the following command in your terminal: 
    composer create-project laravel/laravel [project_name]
3- setup the environment: After creating the project, you need to set up the environment variables. update the .env file in the root directory of your Laravel project with your database connection details and other configurations.
4. Run the development server: You can start the Laravel development server by running the following command in your terminal:
    php artisan serve
*/
############################################################

// laravel resources file
/*
Laravel resources are used to manage the views, controllers, and other assets of your application. The `resources` directory contains the following subdirectories:
*/

############################################################
// laravel routing
/*
Laravel routing allows you to define the URLs of your application and map them to specific controllers or actions. You can define routes in the `routes/web.php` file for web routes or `routes/api.php` for API routes.
To define a route, you can use the following syntax:
Route::get('/url', [ControllerName::class, 'methodName']);
Route::post('/url', [ControllerName::class, 'methodName']);
Route::view('/url', 'view.name'); // to return a view
Route::redirect('/old-url', '/new-url'); // to redirect from one URL to another
*/
#############################################################
// laravel yield and section
/*
In Laravel, `@yield` and `@section` are used to define and extend layouts in Blade templates.
`@section` is used to define a section of content in a Blade template, while `@yield` is used to display that content in a layout.
ex: <body>
    <h3>hello essam this a template nav bar that will be used on all ur pages</h3>
    
    @yield('content')
    
    
    <h6>this is a template footer that will be used on all ur pages</h6>
    </body>
-> this is the layout file, it will be used as a template for all the pages in the application.
@extends('[layout fiel name that will extend this layout]')


@section('title')
    <title>Essam's page</title>
@endsection

@section('content')
    <h1>Welcome to Essam's Page</h1>
    <p>This is a custom page for Essam.</p>
    <p>Feel free to customize this page as needed.</p>
    <p>Enjoy your visit!</p>
@endsection
-> this is the page that will extend the layout file, it will be used to display the content of the page. and sections to add your own contents to the layout.
*/
#############################################################

// laravel if and for loop statments
/*
they both exacly works like normal php code in line 79 and 109 of this file
but what makes it amazing is you can use it on HTML balde file too
check out laravel docs for the syntax and how to use
https://laravel.com/docs/12.x/blade#loops
https://laravel.com/docs/12.x/blade#if-statements
*/