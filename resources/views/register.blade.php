<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Buat Account Baru!</h1>
    <h4>Sign Up Form</h4>
    <form action="/welcome" method="GET">
        <label for="firstname">First Name:</label>
        <br><br>
        <input type="text" id="firstname" name="firstname" required>
        <br><br>
        <label for="lastname">Last Name:</label>
        <br><br>
        <input type="text" id="lastname" name="lastname" required>
        <br><br>
        <label for="gender">Gender:</label>
        <br><br>
        <input type="radio" id="male" name="gender" value="male">Male
        <br>
        <input type="radio" id="female" name="gender" value="female">Female
        <br>
        <input type="radio" id="other" name="gender" value="other">Other
        <br>
        <br>
        <label for="nationality">Nationality</label>
        <br><br>
        <select name="nationality">
            <option id="ind" name="nationality" value="ind">Indonesian</option>
            <option id="chn" name="nationality" value="chn">Chinese</option>
            <option id="eng" name="nationality" value="eng">English</option>
        </select>
        <br><br>
        <label for="language">Language Spoken:</label>
        <br><br>
        <input type="checkbox" name="indonesia">Bahasa Indonesia
        <br>
        <input type="checkbox" name="english">English
        <br>
        <input type="checkbox" name="other">Other
        <br><br>
        <label for="alamat">Bio:</label>
        <br><br>
        <textarea name="alamat" id="" cols="30" rows="10" required></textarea>
        <br>
        <button type="submit">Sign Up</button>
    </form>
</body>

</html>
