<!DOCTYPE html>
<html>
<head>
  <title>Task 2</title>
</head>
<body>

<form action = "Control/results.php" method = "post">

<h1> Registration Form </h1>
<hr> </hr>

<table>
<tr>
<td> First Name :</td> 
   <td>  <input type = "text" Name = "fname"> </td>
</tr>

<tr>
   <td> Last Name : </td>
   <td> <input type = "text" Name = "lname"> </td>
</tr>

<tr>
   <td> Age : </td>
   <td> <input type="text" Name = "age"> </td>
</tr>

<tr>
    <td>Designation</td>
    <td> 
        <input type="radio" Name = "designation" value = "Junior Programmer"> Junior Programmer
        <input type="radio" Name = "designation" value = "Senior Programmer"> Senior Programmer
        <input type="radio" Name = "designation" value = "Project Lead"> Project Lead
</td>
</tr>

<tr>
    <td>Prefered Language</td>
    <td> 
        <input type="checkbox" Name = "pref lang1" value = "JAVA"> JAVA
        <input type="checkbox" Name = "pref lang2" value = "PHP"> PHP
        <input type="checkbox" Name = "pref lang3" value = "C++"> C++
</td>
</tr>

<tr>
<td> Email :</td>
   <td>  <input type = "text" Name = "email"> </td>
</tr>

<tr>
<td> Password :</td>
   <td>  <input type = "password" Name = "password"> </td>
</tr>

<tr>
    <td> Please choose a file</td>
    <td>
        <input type="file" id = "myfile"></td>
</tr>
</table>

<input type="Submit" Name="submit">
<input type="Reset" Name="reset">

</body>
</html>