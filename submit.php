<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $phone = htmlspecialchars($_POST["phone"]);
    $gender = htmlspecialchars($_POST["gender"]);
    $course = htmlspecialchars($_POST["course"]);
    $address = htmlspecialchars($_POST["address"]);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Registration Success</title>
<style>
body {
    margin: 0;
    height: 100vh;
    background: linear-gradient(135deg, #6a11cb, #2575fc);
    display: flex;
    justify-content: center;
    align-items: center;
    font-family: 'Poppins', sans-serif;
    color: white;
}
.result-box {
    background: rgba(255, 255, 255, 0.15);
    padding: 30px 40px;
    border-radius: 20px;
    backdrop-filter: blur(10px);
    box-shadow: 0 8px 32px rgba(31, 38, 135, 0.37);
    width: 450px;
    text-align: center;
}
h2 {
    margin-bottom: 20px;
    color: #fff;
}
p {
    text-align: left;
    font-size: 16px;
    line-height: 1.6;
    color: #f1f1f1;
}
a {
    display: inline-block;
    margin-top: 25px;
    background: #fff;
    color: #2575fc;
    padding: 10px 20px;
    border-radius: 8px;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
}
a:hover {
    background: #2575fc;
    color: white;
    transform: scale(1.05);
}
</style>
</head>
<body>
<div class="result-box">
    <h2>Registration Successful 🎉</h2>
    <p><strong>Name:</strong> <?= $name ?></p>
    <p><strong>Email:</strong> <?= $email ?></p>
    <p><strong>Phone:</strong> <?= $phone ?></p>
    <p><strong>Gender:</strong> <?= $gender ?></p>
    <p><strong>Course:</strong> <?= $course ?></p>
    <p><strong>Address:</strong> <?= nl2br($address) ?></p>
    <a href="index.html">← Go Back</a>
</div>
</body>
</html>
