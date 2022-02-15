<?php
$fname = $_POST["fname"];

if (strlen($fname)<5)
{
    echo "Names must be 5 characters or more.";
}
else
{
    echo "Your first name is ". $_POST["fname"];
}

echo "<br>";

$lname = $_POST["lname"];
if (strlen($lname)<5) 
{
    echo "Names must be 5 characters or more.";
}
else
{
    echo "Your last name is ". $_POST["lname"];
}

echo "<br>";

$age = $_POST["age"];
if ($age == "") 
{
    echo "Please enter your age.";
}
else
{
    echo "Your agee is ". $_POST["age"];
}

echo "<br>";

if (isset($_POST["designation"]))
{
    echo "You have selected ". $_POST["designation"];
}
else
{
    echo "You must select at least one radio button.";
}

echo "<br>";

if (isset($_POST["preflang1"]) || isset($_POST["preflang2"]) || isset($_POST["preflang3"]))
{
    if (isset($_POST["preflang1"]))
    {
        echo "You have picked on of the ".$_POST["preflang1"];
    }

    echo "<br>";

    if (isset($_POST["preflang2"]))
    {
        echo "You have picked on of the ".$_POST["preflang2"];
    }

    echo "<br>";

    if (isset($_POST["preflang3"]))
    {
        echo "You have picked on of the ".$_POST["preflang3"];
    }
}   

    else 
    {
        echo "You must select at least one checkbox.";
    }    

?>