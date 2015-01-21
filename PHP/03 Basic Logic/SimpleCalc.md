# SimpleCalc: Week1
Over the course of several steps, create a php program that will read 1 or 2 numbers and an operator from the querystring and then return an html page page that shows the problem and the answer. For example URLs I'm going to assume that you are in your localhost environment and that your php file is called calc.php. So an example URL will look like: http://localhost/calc.php?n1=3&n2=5&opp=add

## Step 1: Print out the inputs
Given the example URL above your program should output a page that looks like:
```
Number 1: 3
Number 2: 5
Operator: add
```
### Hints:
- don't get fancy or clever. Do **only** the minimum work to satisfy each step.

## Step 2: Implement the "add" operator
Add the two inputs and display the result. Example output:
```
Number 1: 3
Number 2: 5
Operator: add
Result: 8
```
### Hints:
- no if-statement is necessary yet since "add" is the only operator. (This derives from the first hint)

## Step 3: Implement the "sub" operator
This is just like "add", but it does subtraction instead.

### Hints:
- this would be a good time to add an if-statement
- there are **only** two options so keep the if-statement as simple as possible
- we saw in class that '+' is used to add to numbers. Subtraction uses the '-' character, crazy eh?
```php
$result = 3 + 4; // addition
$result = 3 - 4; // subtraction
```

## Step 4: Format the output better
Add a prettier representation of the problem to the output. Example:
```
Number 1: 3
Number 2: 5
Operator: add
Result: 8

3 + 5 = 8
```

## Step 5: Add "mult" and "div" operators
Add one of them, test your program and then add the other one.

### Hints:
- The multiply operator is "*" and the division operator is "/"

## Step 6: Add a "pow" operator, that is exponentiaion
While we haven't covered using functions in any detail, math functions are pretty easy to use and I will show you how. PHP provides a function "pow()" that will raise a number to a power. For instance, to square the number 3, that is 3 to the 2nd power (3x3), you would use this code:
```php
$result = pow(3,2); // $result will be equal to 9
```
To get the cube of 2, that is 2 to the third power (2x2x2), you would use this code:
```php
$result = pow(2,3); // $result will be equal to 8
```

## Step 7: Add more operators of your choosing
PHP provides a wealth of built in math operators. You can see them all (and start familiarizing yourself with the PHP documentation) at http://php.net/manual/en/ref.math.php . If you click on any of the functions you will get a page that describes the function and give one or more examples of how to use it.
