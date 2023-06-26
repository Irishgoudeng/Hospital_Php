<?php
require 'config.php';
if (!empty($_SESSION["id"])) {
  header("Location: index.php");
}
if (isset($_POST["submit"])) {
  $email = $_POST["email"];
  $password = $_POST["password"];
  $role = mysqli_query($conn, "SELECT roleID from tbl_users");
  $result = mysqli_query($conn, "SELECT * FROM tbl_users WHERE email = '$email'");
  $row = mysqli_fetch_assoc($result);
  if (mysqli_num_rows($result) > 0) {
    if ($password == $row['password']) {
      $_SESSION["login"] = true;
      if ($row['roleID'] == 0) {
        $_SESSION["login"] = true;
        $_SESSION["id"] = $row["id"];
        header("Location: Admin/AdminDashboard.php");
      }
      // else if( $row['roleID'] == 1){
      //   $_SESSION["login"] = true;
      //   $_SESSION["id"] = $row["id"];
      //   header("Location: Doctor/AdminDashboard.php");
      // }
      else if ($row['roleID'] == 2) {
        $_SESSION["login"] = true;
        $_SESSION["id"] = $row["id"];
        header("Location: Patient/PatientDashboard.php");
      }
    } else {
      header("Location: login.php");
      "<script> alert('Wrong Password'); </script>";
    }
  } else {
    header("Location: login.php");
    "<script> alert('User Not Registered'); </script>";
  }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="../../dist/output.css" rel="stylesheet">
</head>

<body>

  <!-- component -->
  <section class="flex flex-col md:flex-row h-screen items-center">

    <div class="bg-indigo-600 hidden lg:block w-full md:w-1/2 xl:w-2/3 h-screen">
      <img src="../../src/img/landing_banner2.png" alt="" class="w-full h-full object-cover">
    </div>

    <div class="bg-white w-full md:max-w-md lg:max-w-full md:mx-auto md:w-1/2 xl:w-1/3 h-screen px-6 lg:px-16 xl:px-12
          flex items-center justify-center">


      <div class="w-full h-100">

        <img src="../../src/img/logo.png" alt="" class="justify-start items-start">
        <h1 class="text-xl md:text-2xl font-bold leading-tight mt-12">Log in to your account</h1>



        <form class="mt-6" action="#" method="post">
          <div>
            <label class="block text-gray-700">Email Address</label>
            <input type="email" name="email" id="" placeholder="Enter Email Address" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none" autofocus autocomplete required>
          </div>

          <div class="mt-4">
            <label class="block text-gray-700">Password</label>
            <input type="password" name="password" id="" placeholder="Enter Password" minlength="6" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500
                  focus:bg-white focus:outline-none" required>
          </div>

          <div class="text-right mt-2">
            <a href="#" class="text-sm font-semibold text-gray-700 hover:text-blue-700 focus:text-blue-700">Forgot Password?</a>
          </div>

          <a href="Admin/AdminDashboard.php"><button type="submit" name="submit" class="w-full block bg-black hover:bg-gray-500 focus:bg-gray-400  text-white font-semibold rounded-lg
                px-4 py-3 mt-6">Log In</button></a>
        </form>

        <hr class="my-6 border-gray-300 w-full">


        <p class="mt-8">Need an account? <a href="register.php" class="text-blue-500 hover:text-blue-700 font-semibold">Create an
            account</a></p>


      </div>
    </div>

  </section>

</body>

</html>