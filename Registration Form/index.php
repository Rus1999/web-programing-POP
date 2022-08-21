<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Registration Form</h3>
    <Form name="registration" method="post" action="./registored.php" enctype="multipart/form-data">
        <!-- Full name -->
        <b>Full name</b> <input type="textbox" name="firstname" placeholder="First name"> 
        <input type="textbox" name="lastname" placeholder="Last Name"> <br><br>

        <!-- company -->
        <b>Company</b>
        <input type="textbox" name="company" placeholder="Your company name"><br><br>

        <!-- email -->
        <b>Email</b>
        <input type="email" name="email" placeholder="email@example.com"><br><br>

        <!-- phone number -->
        <b>Phone number</b>
        <input type="number" name="phone" placeholder="xxx-xxxxxxx"><br><br>

        <!-- country -->
        <b>Country</b>
        <select name="country">
            <option value="Thailand">Thailand</option>
            <option value="Laos">Laos</option>
            <option value="USA">USA</option>
            <option value="Canada">Canada</option>
            <option value="French">French</option>
            <option value="Cambodia">Cambodia</option>
            <option value="England">England</option>
        </select><br><br>

        <!-- gender -->
        <b>Gender</b>
        <input type="radio" name="gender" value="Male" checked>Male
        <input type="radio" name="gender" value="Female">Female
        <br><br>

        <!-- language -->
        <b>Language</b>
        <input type="checkbox" name="l1" value="Thai">Thai
        <input type="checkbox" name="l2" value="French">French
        <input type="checkbox" name="l3" value="Other">Other
        <br><br>

        <!-- Photo -->
        <b>Photo Attachment</b>
        <input type="file" name="photofile">
        <br><br>

        <!-- password -->
        <b>Password</b>
        <input type="password" name="password">
        <br><br>

        <b>Confirm Password</b>
        <input type="password" name="cpassword">
        <br><br>

        <!-- agrement -->
        <input type="checkbox" name="terms" value="agree">
        <b>I agree with Terms and Conditions</b>
        <br><br>

        <!-- submit -->
        <input type="submit" name="submit">

        <!-- reset -->
        <input type="reset" name="reset">
    </Form>
    
</body>
</html>