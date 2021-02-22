<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Calculator</title> 
    </head>
<body>

    <form method="POST">
    <h1>Calculator</h1>
    
     <p>Enter first number:</p>
        <input type="text" name="cal1">
        <p>Enter second number:</p>
        <input type="text" name="cal2">
        <p>Select the calculator symbol</p>
        <select name="operator" id="">
               <option>None</option>
               <option>Add</option>
               <option>Subtract</option>
               <option>Multiply</option>
               <option>Divide</option>
            </select>
        <button type="submit" name="submit" value="submit">Calculate</button>
    
    </form>
    
<?php
    if (isset($_POST['submit'])) {
                    $result1 = $_POST['cal1'];
                    $result2 = $_POST['cal2'];
                    $operator = $_POST['operator'];
                    switch ($operator) {
                        case 'None':
                            echo "<br> You need to select any operator";
                            break;
                        case 'Add':
                            echo "<br> The result is: ", $result1 + $result2;
                            break;
                        case 'Subtract':
                            echo "<br> The result is: ", $result1 - $result2;
                            break;
                        case 'Multiply':
                            echo "<br> The result is: ", $result1 * $result2;
                            break;
                        case 'Divide':
                            echo "<br> The result is: ", $result1 / $result2;
                            break;
        
                    }
                }
                ?>
    </body> 
</html>