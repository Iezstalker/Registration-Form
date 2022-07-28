<?php
$insert = false;
if (isset($_POST['name'])) {

    // set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if (!$con) {
        die("connection to this database failed due to" .
            mysqli_connect_error());
    }
    // echo "Success connecting to the php";

    // Collect post variables
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $education = $_POST['education'];
    $college = $_POST['college'];
    $sql = "INSERT INTO `form`.`form` (`name`, `age`, `gender`, `phone`, `email`, `education`, `college`, `date`) VALUES ('$name', '$age', '$gender', '$phone', '$email', '$education', '$college', current_timestamp());";
    // echo $sql;

    // Execute the query
    if ($con->query($sql) == true) {
        // echo "successfully inserted";

        // Flag for successful insertion
        $insert = true;
    } else {
        echo "ERROR: $sql <br> $con->error";
    }
    // Close the database connection
    $con->close();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>

    <!-- CSS Section -->
    <link rel="stylesheet" href="style.css">

    <!-- Favicon Icon -->
    <link rel="shortcut icon" href="./icon/android-chrome-192x192.png" type="image/x-icon">
    <link rel="shortcut icon" href="./icon/android-chrome-512x512.png" type="image/x-icon">
    <link rel="shortcut icon" href="./icon/apple-touch-icon.png" type="image/x-icon">
    <link rel="shortcut icon" href="./icon/favicon-16x16.png" type="image/x-icon">
    <link rel="shortcut icon" href="./icon/favicon-32x32.png" type="image/x-icon">
    <link rel="shortcut icon" href="./icon/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="./icon/site.webmanifest" type="image/x-icon">

</head>

<body>

    <?php
    if ($insert == true) {
        echo "<p class='submitmsg'>!!Thanks for submitting your form!!</p>";
    }
    ?>

    <div class="container">
        <h1 class="head">Registration Form</h1><br>

        <p class="para">Enter your details & Submit The Form</p><br>

        <!-- Form Section -->
        <form action="index.php" method="post">
            <div class="name">
                <label for="name">Name</label><br>
                <input type="text" name="name" id="name" placeholder="Enter Your Name" required>
            </div>

            <div class="age">
                <label for="age">Age</label><br>
                <input type="number" name="age" id="age" placeholder="Enter Your Age" required>
            </div>

            <div class="gender">
                <div id="gender">
                    <label for="gender" aria-required="true">Gender
                    </label><br>
                </div>
                <input type="radio" name="gender" id="gender" value="male">
                <label for="gender">male</label><br>

                <input type="radio" name="gender" id="gender" value="female">
                <label for="gender">female</label><br>
            </div>

            <div class="phone">
                <label for="phone">Phone No.</label><br>
                <input type="tel" name="phone" id="phone" placeholder="Enter Your Phone No." required>
            </div>

            <div class="email">
                <label for="email">Email-Id</label><br>
                <input type="email" name="email" id="email" placeholder="Email" required>
            </div>

            <div class="education"><br>
                <div id="education">
                    <label for="education">Education</label><br>
                </div>

                <input type="radio" name="education" id="11th" value="11th">
                <label for="11th">11th</label><br>

                <input type="radio" name="education" id="12th" value="12th">
                <label for="12th">12th</label><br>

                <input type="radio" name="education" id="graduation" value="graduation">
                <label for="graduation">Graduation</label><br>

                <input type="radio" name="education" id="postgraduation" value="postgraduation">
                <label for="postgraduation">Post Graduation</label><br>

                <input type="radio" name="education" id="phd" value="phd">
                <label for="phd">PHD</label><br>

                <input type="radio" name="education" id="other" value="other">
                <label for="other" class="other">Other:</label> <input type="text" name="education" id="other"><br>
            </div>

            <div class="college">
                <label for="college">College</label><br>
                <input type="text" name="college" id="college" placeholder="College Name" required>
            </div>

            <!-- Button Section -->
            <div class="button">
                <a href="/index.html" id="anchor">
                    <button type="submit" class="btn">Submit</button></a>

                <button type="reset" class="reset">Clear Form</button>
            </div>

        </form>
    </div>

    <!-- Footer Section -->
    <footer>
        <div class="foot">
            Copyright &copy; Iezstalker 2022-23 Inc. | All Rights Reserved
        </div>
    </footer>

    <!-- JavaScript Section -->
    <script src="index.js"></script>
</body>

</html>