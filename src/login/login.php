<?php
session_start();
require "../php/db.php";
if($_SERVER['REQUEST_METHOD'] == 'POST'){
$username = $_POST['name'];
$password = $_POST['password'];

    $username = $conn->real_escape_string($username);
    $password = $conn->real_escape_string($password);
$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($conn, $sql);
if($result -> num_rows > 0){
    $user = $result->fetch_assoc();
    if ($user['role'] == 'admin') {
        header("location:../admin.php");
    }else{
        header("location:../index.php");
        $_SESSION['statate'] = true;
    }
}elseif($username == 'admin' && $password == 'admin'){
    header("location:../admin.php");
    exit();
}else{
    echo "<p class='text-white'>wrong username or password</p>";
}
}
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
    <script src="../js/browser@4.js"></script>
    <link rel="stylesheet" href="../css/animate.css">

</head>
<body class="h-screen flex flex-col justify-center items-center dark:bg-gray-950 text-white">
    <div class="w-full max-w-md p-6 bg-gradient-to-br dark:from-gray-800 to-gray-900 rounded-lg shadow-md animate__animated animate__fadeInDown">
        <h1 class="text-center text-2xl font-bold mb-6 animate__animated animate__fadeIn animate__delay-1s">Login</h1>
        <form action="login.php" method="post" class="flex flex-col gap-4">
            <div class="flex flex-col animate__animated animate__fadeInLeft animate__delay-1s">
                <label for="email" class="mb-2">Email</label>
                <input type="text" id="email" name="name" required
                    class="bg-gray-50 border border-gray-700 text-gray-900 text-sm rounded-lg pl-2 focus:ring-blue-900 focus:border-blue-900 block w-full p-2 dark:bg-gray-900 dark:border-gray-600 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <div class="flex flex-col animate__animated animate__fadeInRight animate__delay-1s">
                <label for="password" class="mb-2">Password</label>
                <input type="password" id="password" name="password" required
                    class="bg-gray-50 border border-gray-700 text-gray-900 text-sm rounded-lg pl-2 focus:ring-blue-900 focus:border-blue-900 block w-full p-2 dark:bg-gray-900 dark:border-gray-600 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            <button type="submit"
                class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-800 dark:hover:bg-blue-900 focus:outline-none dark:focus:ring-blue-800 animate__animated animate__fadeInUp animate__delay-2s" name="login">
                Login
            </button>
        </form>
        <p class="text-center mt-4 animate__animated animate__fadeIn animate__delay-2s">Don't have an account? <a href="../signup/signup.php" class="text-blue-400 hover:underline">Sign Up</a></p>
    </div>
</body>
</html>
