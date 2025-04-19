<?php
require "../php/db.php";
$insertuser = "INSERT IGNORE INTO users (username, email, password) VALUES (?, ?, ?)";
if($_SERVER['REQUEST_METHOD'] == "POST"){
    if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $stmt = $conn->prepare($insertuser);
    $stmt->bind_param("sss", $name, $email, $password);
    if($stmt->execute()){
        echo "<p class='text-green-500 absolute left-[40%] top-0'>User registered successfully!</p>";
        $stmt->close();
    $conn->close();
    }else{
        echo "Error: " . $stmt->error;
    }
}
    
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="signup.css">
    <link rel="stylesheet" href="../css/animate.css">
    <script src="../js/browser@4.js"></script>

</head>

<body class="h-screen flex items-center justify-center dark:bg-gray-950 text-white">
    <div class="w-full max-w-md bg-gray-800 p-6 rounded-lg shadow-md animate__animated animate__fadeInDown">
        <h1 class="text-center text-2xl font-bold mb-4 animate__animated animate__fadeIn animate__delay-1s">Sign Up</h1>
        <form action="signup.php" method="post" class="flex flex-col gap-4">
            <div class="animate__animated animate__fadeInLeft animate__delay-1s">
                <label for="name" class="block mb-1">Name</label>
                <input type="text" id="name" name="name" required
                    class="w-full p-2 rounded-lg bg-gray-900 border border-gray-700 text-white focus:ring-blue-500 focus:border-blue-500">
            </div>
            <div class="animate__animated animate__fadeInRight animate__delay-1s">
                <label for="email" class="block mb-1">Email</label>
                <input type="email" id="email" name="email" required
                    class="w-full p-2 rounded-lg bg-gray-900 border border-gray-700 text-white focus:ring-blue-500 focus:border-blue-500">
            </div>
            <div class="animate__animated animate__fadeInLeft animate__delay-1s">
                <label for="password" class="block mb-1">Password</label>
                <input type="password" id="password" name="password" required
                    class="w-full p-2 rounded-lg bg-gray-900 border border-gray-700 text-white focus:ring-blue-500 focus:border-blue-500">
            </div>
            <button type="submit" name="submit"
                class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 rounded-lg animate__animated animate__fadeInUp animate__delay-2s animate__pulse">
                Sign Up
            </button>
        </form>
        <p class="text-center mt-4 animate__animated animate__fadeIn animate__delay-2s">
            Already have an account? <a href="../login/login.php" class="text-blue-400 hover:underline">Login</a>
        </p>
    </div>
    <script src="../js/custom.js"></script>
</body>

</html>
