<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $c_pass = $_POST["c_pass"];
    
    // Check if passwords match
    if ($pass != $c_pass) {
        echo "Passwords do not match";
        exit();
    }
    
    // File upload handling
    $target_dir = "profile/";
    $target_file = $target_dir . basename($_FILES["profile_image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    
    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["profile_image"]["tmp_name"]);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
    
    // Check file size
    if ($_FILES["profile_image"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    
    // Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif") {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["profile_image"]["tmp_name"], $target_file)) {
            echo "The file " . basename($_FILES["profile_image"]["name"]) . " has been uploaded.";
            $profile_image = basename($_FILES["profile_image"]["name"]); // File name saved in variable
            $servername = "localhost";
            $dbUsername = "root"; // Database username
            $dbPassword = ""; // Database password
            $dbName = "project"; // Database name

            // Create database connection using mysqli
            $conn = new mysqli($servername, $dbUsername, $dbPassword, $dbName);

            // Check connection
            if ($conn->connect_error) {
                die('Connection failed: ' . $conn->connect_error);
            }
            $stmt = $conn->prepare("INSERT INTO userbase (username, email, password, Profile) VALUES (?, ?, ?, ?)");
            $stmt->bind_param('ssss', $_POST['name'], $_POST['email'], $_POST['pass'], $profile_image);


            // Execute the prepared statement
            if ($stmt->execute()) {
                session_start();
                $_SESSION["name"] = $name;
                $_SESSION["email"] = $email;
                $_SESSION["profile"] = $profile_image;
                header("Location: home.php");
                exit();

            } else {
                echo "Error: " . $stmt->error;
            }
            $stmt->close();
            $conn->close();

        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
    
    // Now you can use $name, $email, $pass, $c_pass, and $profile_image variables for further processing.
    // For example, you can insert these values into a database.
    
} else {
    echo "Invalid request!";
}
?>
