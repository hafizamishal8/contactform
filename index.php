<?php

include('connect.php');

$servername = "localhost";
$username = "root";
$password = "";
$connect = mysqli_connect($servername, $username, $password);

if(!$connect){
    die("Connection failed:" .mysqli_connect_error());
}
echo"Connected succesfully";

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple form</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="form-container">
        <h2>Contact Us</h2>

        <form method="post">
            <div class="form-group">
                <label for="name">Full Name:</label>
                <input type="text" id="name" name="name" placeholder="Enter your full name" required>
            </div>

            <div class="form-group">
                <label for="email">Email Address:</label>
                <input type="email" id="email" name="email" placeholder="Enter your email address" required>
            </div>

            <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input type="telephone" id="phone" name="phone" placeholder="Enter your phone number" required>
            </div>

            <div class="form-group">
                <label for="age">Age:</label>
                <input type="number" id="age" name="age" placeholder="Enter your age" required>
            </div>

            <div class="form-group">
                <label for="gender">Gender:</label>
                <select id="gender" name="gender" required>
                    <option value="">Select your gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </div>

            <div class="form-group">
                <label for="services">Services Interested In:</label>
                <div class="checkbox-group">
                    <label><input type="checkbox" name="services" value="web_design"> Web Design</label>
                    <label><input type="checkbox" name="services" value="seo"> SEO</label>
                    <label><input type="checkbox" name="services" value="marketing"> Digital Marketing</label>
                </div>
            </div>

            <div class="form-group">
                <label for="country">Country:</label>

                <select id="country" name="country" required>
                    <option value="">Select your country</option>
                    <option value="pakistan">Pakistan</option>
                    <option value="india">India</option>
                    <option value="usa">USA</option>
                    <option value="uk">UK</option>
                    <option value="other">Other</option>
                </select>
                
            </div>

              


            

            <div class="form-group">
                <label for="comments">Your Message:</label>
                <textarea id="comments" name="comments" rows="4" placeholder="Enter your message here"></textarea>
            </div>

            <div class="form-group">
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>

</body>

</html>