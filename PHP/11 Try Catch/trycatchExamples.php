<?php


function addTwoNumbers($x, $y){

    if(!is_numeric($x)){
        throw new Exception();
    }

    if(!is_numeric($y)){
        throw new Exception();
    }

    // Try to turn $x into a number
    return $x + $y;

}

function isValid($isTrue){
    if($isTrue){
        echo "Pass<br>";
    }
    else {
        echo "Failed<br>";
    }
}

isValid(addTwoNumbers(4,5) == 9);
isValid(addTwoNumbers(3,5) == 8);
isValid(addTwoNumbers(-1,5) == 4);
isValid(addTwoNumbers(0,5) == 5);
isValid(addTwoNumbers(1,50000000000) == 50000000001);
isValid(addTwoNumbers(1,500000000000000000000000000) == 500000000000000000000000001);
isValid(addTwoNumbers(500000000000000000000000000,500000000000000000000000000) == 1000000000000000000000000000);

isValid(addTwoNumbers("4",5) == 9);

try {
    isValid(addTwoNumbers("a",5) == 9);    
} 
catch(Exception $e) {
    echo "Exception thrown<br>";
}


try {
    addTwoNumbers(4,"b");    
} 
catch(Exception $e) {
    echo "Exception thrown<br>";
}


// 1. Write a function to check if number is positive
//      if it is positive echo 'Number is Positive'
//      If it is negative Throw an exception
function isPositive($x){
    if($x < 0){
        throw new Exception();
    }

    echo "Number is Positive<br>";
}

isPositive(5);
try {
    isPositive(-5);
}
catch(Exception $e)
{
    echo "Exception<br>";
}

// 2. Write a function to check if a variable is numeric
//      if it is numeric echo 'Variable is Numeric'
//      If it is not Throw an exception
function isNumeric($x) {

    if(!is_numeric($x)){
        throw new Exception("Variable is not Numeric");
    }

    echo "Variable is Numeric<br>";

}

isNumeric(4);
try {
    isNumeric("a");
}
catch(Exception $e) {
    echo $e->getMessage() . "<br>";
    
}


// 3. Write a function to check if a variable is numeric
//    AND positive
//      if it not numeric Throw a NotANumberException
//      if it not positive Throw a NotPositiveException

function Radical($x) {
    if(!is_numeric($x)){
        throw new NotANumberException();
    }

    if($x < 0){
        throw new NotPositiveException();
    }

    echo "Radical<br>";
}

Class NotPositiveException extends Exception {

}

Class NotANumberException extends Exception {
    
}

Radical(5);

try {

    Radical("-a");
}
catch(NotPositiveException $e){
    echo "Ah ha ... this failed because it was not a POSITIVE number<br>";
}
catch(NotANumberException $e){
    echo "Ah ha ... this failed because it was not a number<br>";
}
catch(Exception $e)
{
    echo "Something went wrong.... but I don't know for sure what it was... :(<br>";
}

// 3. Write a function to validate Age
// Throw an AgeOutOfRangeException if not between (0-108)
Class AgeOutOfRangeException extends Exception {}

function validateAge($age){

    if(!is_numeric($age)){
        throw new NotANumberException();
    }

    if($age < 0) {
        throw new AgeOutOfRangeException();
    }

    if($age > 108) {
        throw new AgeOutOfRangeException();   
    }

    echo "Yeah, you are not too young or too old<br>";

}

validateAge(10);
validateAge(0);
validateAge(108);
validateAge(109);

// 4. Write a function to validate a password
// Throw an InValidPasswordException if not at least length 8
