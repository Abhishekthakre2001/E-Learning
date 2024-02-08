<?php
include('./studentnavigation.php');
?>
<h1>PHP Data Types</h1>
<pre>
    PHP data types are used to hold different types of data or values.
    PHP supports 8 primitive data types that can be categorized further in 3 types:

        1) Scalar Types (predefined)
        2) Compound Types (user-defined)
        3) Special Types   
<h4>PHP Data Types: Scalar Types</h4>
    It holds only single value. There are 4 scalar data types in PHP.

        1) boolean
                Booleans are the simplest data type works like switch. It holds only two values: TRUE (1) or FALSE (0). 
                It is often used with conditional statements. If the condition is correct, it returns TRUE otherwise FALSE.

        2) integer
                 Integer means numeric data with a negative or positive sign.
                It holds only whole numbers, i.e., numbers without fractional part or decimal points.

                Rules for integer:
        
                *  An integer can be either positive or negative.
                *  An integer must not contain decimal point.
                *  Integer can be decimal (base 10), octal (base 8), or hexadecimal (base 16).
                *  The range of an integer must be lie between 2,147,483,648 and 2,147,483,647 i.e., -2^31 to 2^31.

        3) float
                 A floating-point number is a number with a decimal point. Unlike integer, 
                 it can hold numbers with a fractional or decimal point, including a negative or positive sign.


        4) string
                 A string is a non-numeric data type. It holds letters or any alphabets, numbers, and even special characters.
                 String values must be enclosed either within single quotes or in double quotes. But both are treated differently.

                 <img src="./php_image/scalar.png" width="600px" height="400px">
                 

        <h4>PHP Data Types: Compound Types</h4>
        It can hold multiple values. There are 2 compound data types in PHP.
        1) array
                 An array is a compound data type. It can store multiple values of same data type in a single variable.
       
        2) object
                 Objects are the instances of user-defined classes that can store both values and functions.
                  They must be explicitly declared.

                  <img src="./php_image/compound-datatype.png" width="650px" height="550px">

        <h4>PHP Data Types: Special Types</h4>
        There are 2 special data types in PHP.
        1) resource
                Resources are not the exact data type in PHP. Basically, these are used to store 
                some function calls or references to external PHP resources.
                 For example - a database call. It is an external resource.

        2) NULL
                Null is a special data type that has only one value: NULL. 
                There is a convention of writing it in capital letters as it is case sensitive.
                The special type of data type NULL defined a variable with no value.


       

     
  </pre>
  </body>
</html>
