<!DOCTYPE html>
<html>
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
   <style>
    body {
    margin: 0;
    padding: 0;
    overflow-x: hidden;
  }
  /* nav {
    width: 15vw!important;
    height: 100vh;
    background-color: #b9b6b6ec;
    position:fixed;
    margin-top: 128px;
    height: 150vh;
    }
   

@media screen and (min-width: 700px) and (max-width: 1500px) {
  
    nav {
        width: 10%; 
    }
}
@media screen and (min-width: 300px) and (max-width: 699px) {
    
    nav {
        width: 100%; 
      }
}

    .cont{
      display: flex;
      flex-direction: column;
    }
    ul {
   margin: 10px;
    padding: 25px;
    }
  li {
    position: relative;
    list-style: none;
  }
  a {
    display: block;
    color:white;
    font-size: 17px;
    text-decoration: none;
    padding: 10px;
    transition: background-color 0.3s;
  }
  a:hover {
    background-color: #555;
  }
  
   */
  .topnav-right{
    overflow: hidden;
    background-color: #555;
    
    
  }
  
  .topnav-right a {
    float: left;
    color: #f2f2f2;
    text-align: left;
    padding-top: 20px;
    padding-bottom: 20px;
    padding-left: 30px;
    padding-right: 30px;
    font-size: 17px;
    margin-left: 0%;
   text-decoration:none;
  }
  
  .topnav a:hover {
    background-color: #ddd;
    color: black;
  }
  
  .topnav a.active {
    background-color: #555;
    color: white;
  }
  
  .topnav-right {
    float: right;
  }
  h1{
    margin-top: 150px;
    display: flex;
    justify-content: center;
  }
  pre {
                  /* Adds a scrollbar when necessary */
        }

        @media screen and (max-width: 600px) {
            /* Adjust styles for smaller screens if needed */
            pre {
                font-size: 14px;  /* Example: Reduce font size for smaller screens */
            }
        }
  pre{
    white-space: pre-wrap;  /* Allows the text to wrap to the next line */
            word-wrap: break-word;  /* Allows long words to break and wrap */
            overflow: auto; 
    margin-left: 300px;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 20px;
    color: black;
  }
  .fixed-header{
          width: 100%;
          position: fixed;   
          background-image: url("./image/pic1.jpg");     
          background-image: url("./image/pic1.jpg");
          box-sizing: border-box;
          color: #fff;
          top: 0;
}
      .heading{
        font-size: 50px;
        font-family: cursive;
        margin-left: 100px;
        color:#555 ;
      }


      .sidebar {
  margin-top: 135px;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}
 
.sidebar a.active {
  background-color: #555;
  color: white;
  height:70px;
}

.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}

@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    
    position: fixed;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
  pre{
    margin:0px 35px;
  }
}
@media screen and (min-width: 0px) and (max-width: 450px) {
    .topnav-right a{
      padding: 20px 9px;
    }
  }
@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
    display: inline-flex;
  }
}
@media screen and (max-width:768px) {
  img{
    width:250px;
    height:250px;
  }
  
}
    </style>
  
  </head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="50">

  <div class="fixed-header">
    <div class="heading">
      E-learning
    </div>
  <div class="topnav-right">
    <a href="uploadvideo.php">UPLOAD VIDEO</a>
    <a href="uploadnotesjava.php">UPLOAD NOTES</a>
    <a href="index.html">LOGOUT</a>
  </div>
  </div>
  <!-- <div class="cont">
  <nav>
    <ul>
      <li><a href="#features_of_java">Features of Java</a></li>
      <li><a href="#java_variable">Java Variables</a></li>
      <li><a href="#java_datatype">Data Types </a></li>
      <li><a href="#java_oops">OOPs Concepts</a></li>
    </ul>
  </nav>
</div> -->
<div class="sidebar">
  <a href="#features_of_java">Features of Java</a>
  <a href="#java_variable">Java Variables</a>
  <a href="#java_datatype">Data Types</a>
  <a href="#java_oops">OOPs Concepts</a>
</div>

<section id="features_of_java">
<pre>
<h1>Features of Java</h1>
<h4>JAVA</h4>
Our core Java programming tutorial is designed for students and working professionals.
Java is an object-oriented, class-based, concurrent, secured and general-purpose computer-programming language.
<img src="./java_image/java-features.png" width="400px" height="400px"> 
<h4>What is Java?</h4>
Java is a programming language and a platform. Java is a high level, robust, object-oriented and secure programming language.
Java was developed by Sun Microsystems (which is now the subsidiary of Oracle) in the year 1995.
James Gosling is known as the father of Java. Before Java, its name was Oak. Since Oak was already 
a registered company, so James Gosling and his team changed the name from Oak to Java.
<h4>Platform:</h4>
 Any hardware or software environment in which a program runs, is known as a platform. 
Since Java has a runtime environment (JRE) and API, it is called a platform.
</pre>
</section>



<section id="java_variable">
<h1>Java Variables</h1>
<pre>
A variable is a container which holds the value while the Java program is executed.
 A variable is assigned with a data type.
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
A variable declared inside the body of the method is called local variable. 
You can use this variable only within that method and the other methods in the class aren't even aware that
 the variable exists.

A local variable cannot be defined with "static" keyword.

2) Instance Variable
A variable declared inside the class but outside the body of the method, is called an instance variable.
 It is not declared as static.

It is called an instance variable because its value is instance-specific and is not shared among instances.

3) Static variable
A variable that is declared as static is called a static variable. It cannot be local. You can create a single
 copy of the static variable and share it among all the instances of the class. Memory allocation for static 
 variables happens only once when the class is loaded in the memory.
</pre>
</section>


<section id="java_datatype">
<pre>
    <h1>Data Types in Java</h1>
Data types specify the different sizes and values that can be stored in the variable. There are two
types of data types in Java:

<img src="./java_image/datatypejava.png" width="600px" height="400px">

1. <b>Primitive data types:</b> The primitive data types include boolean, char, byte, short, int, long, float and double.
2. <b> Non-primitive data types:</b> The non-primitive data types include Classes, Interfaces, and Arrays.

<h4>Java Primitive Data Types</h4>
In Java language, primitive data types are the building blocks of data manipulation. These are the
most basic data types available in Java language.

There are 8 types of primitive data types:

1. boolean data type
2. byte data type
3. char data type
4. short data type
5. int data type
6. long data type
7. float data type
8. double data type

<img src="./java_image/data_type2.png" width="800px" height="400px">

</pre>

</section>


<section id="java_oops">
<h1>Object class in Java</h1>
<pre>

The Object class is the parent class of all the classes in java by default. In other words, it is
the topmost class of java.

The Object class is beneficial if you want to refer any object whose type you don't know. Notice
that parent class reference variable can refer the child class object, know as upcasting.

Let's take an example, there is getObject() method that returns an object but it can be of any type
like Employee,Student etc, we can use Object class reference to refer that object. For example:

Object obj=getObject();//we don't know what object will be returned from this method 

The Object class provides some common behaviors to all the objects such as object can be compared, object 
can be cloned, object can be notified etc.

<img src="./java_image/oops2.png" width="600px" height="300px">

<h4>Object-Oriented Programming System</h4>
Object means a real-world entity such as a pen, chair, table, computer, watch, etc. Object-Oriented 
Programming is a methodology or paradigm to design a program using classes and objects. It simplifies 
software development and maintenance by providing some concepts:
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

</section>
</body>
</html>