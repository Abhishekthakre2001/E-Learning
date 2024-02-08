<?php
include('./stud_java_navi.php');
?>
<h1>Object class in Java</h1>
<pre>

The Object class is the parent class of all the classes in java by default. In other words, it is
the topmost class of java.

The Object class is beneficial if you want to refer any object whose type you don't know. Notice
that parent class reference variable can refer the child class object, know as upcasting.

Let's take an example, there is getObject() method that returns an object but it can be of any type
like Employee,Student etc, we can use Object class reference to refer that object. For example:

Object obj=getObject();//we don't know what object will be returned from this method 

The Object class provides some common behaviors to all the objects such as object can be compared, object can be cloned, object can be notified etc.

<img src="./java_image/oops2.png" width="600px" height="300px">

<h4>Object-Oriented Programming System</h4>
Object means a real-world entity such as a pen, chair, table, computer, watch, etc. Object-Oriented Programming is a methodology or paradigm to design a program using classes and objects. It simplifies software development and maintenance by providing some concepts:
    1. Object
    2. Class
    3. Inheritance
    4. Polymorphism
    5. Abstraction
    6. Encapsulation
    
    Apart from these concepts, there are some other terms which are used in Object-Oriented design:
    
    1. Coupling
    2. Cohesion
    3. Association
    4. Aggregation
    5. Composition
    <img src="./java_image/oops.png" width="800px" height="400px">
</pre>
</body>
</html>