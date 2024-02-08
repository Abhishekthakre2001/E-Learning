<?php
include('./stud_java_navi.php');
?>
<h1>Java Variables</h1>
<pre>
A variable is a container which holds the value while the Java program is executed. A variable is assigned with a data type.
Variable is a name of memory location. There are three types of variables in java: local, instance and static.

    There are two types of data types in Java: primitive and non-primitive.
<h4>Variable</h4>
A variable is the name of a reserved area allocated in memory. In other words, it is a name of 
the memory location. It is a combination of "vary + able" which means its value can be changed. 
<img src="./java_image/variable_type.png" width="700px" height="400px">
Types of Variables
There are three types of variables in Java:

1)local variable
2)instance variable
3)static variable

<img src="./java_image/java_variable.png" width="800px" height="400px">

1) Local Variable
A variable declared inside the body of the method is called local variable. You can use this variable only within that method and the other methods in the class aren't even aware that the variable exists.

A local variable cannot be defined with "static" keyword.

2) Instance Variable
A variable declared inside the class but outside the body of the method, is called an instance variable. It is not declared as static.

It is called an instance variable because its value is instance-specific and is not shared among instances.

3) Static variable
A variable that is declared as static is called a static variable. It cannot be local. You can create a single copy of the static variable and share it among all the instances of the class. Memory allocation for static variables happens only once when the class is loaded in the memory.
</pre>

</body>
</html>