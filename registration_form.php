<!DOCTYPE html>
<head>
    <title>Registraion Form</title>
</head>

<body>
    <h2>Simple Registraion Form</h2>
    <form method="post">
        <p>Please enter your First name:</p>
        <input type="text" name="fname"><br>
        <p>Please enter your Last name:</p>
        <input type="text" name="lname"><br>
        <p>Select a gender:</p>
        <select name="gender" id="">
                <option>None</option>
                <option>Male</option>
                <option>Female</option>
                </select>
            <br>
            <button type="submit" name="submit" value="submit">Submit</button>
    </form>
    <h3>Your entries:</h3>
    <?php
    //Simple php code to accept and display user input
    if (isset($_POST['submit'])) {
        echo "First name: ", $_POST['fname'];
        echo "<br>Last name: ", $_POST['lname'];
        echo "<br>Gender: ", $_POST['gender'];
    }

    
    
    ?>
</body>
</html>