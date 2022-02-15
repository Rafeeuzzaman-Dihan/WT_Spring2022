<!DOCTYPE html>
<html>
<head>
  <title>Task 1</title>
</head>
<body>

<h1> Registration Form </h1>
<hr> </hr>

<table>
<tr>
<td> First Name :</td> 
   <td>  <input type = "text" Name = "name"> </td>
</tr>

<tr>
   <td> Last Name : </td>
   <td> <input type = "text" Name = "name"> </td>
</tr>

<tr>
   <td> Age : </td>
   <td> <input type="text" Name = "age"> </td>
</tr>

<tr>
    <td>Designation</td>
    <td> 
        <input type="radio" Name = "designation"> Junior Programmer
        <input type="radio" Name = "designation"> Senior programmer
        <input type="radio" Name = "designation"> Project Lead
</td>
</tr>

<tr>
    <td>Prefered Language</td>
    <td> 
        <input type="checkbox" Name = "pref lang">JAVA
        <input type="checkbox" Name = "pref lang">PHP
        <input type="checkbox" Name = "pref lang">C++
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