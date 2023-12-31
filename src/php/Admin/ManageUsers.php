<?php
// require_once('../config.php');

// $sql = "SELECT * from tbl_users";
// $result = mysqli_query($conn, $sql);

require_once '../config.php';
require_once '../config/functions.php';

$result = display_users();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../../dist/output.css">
</head>

<body>

    <div class="flex h-screen">

        <aside class="bg-white-100 w-1/4 p-4">
            <div class=" mb-8 text-4xl font-semibold Poppins">
                <a href="AdminDashboard.php">
                    <img src="../../img/logo.png" alt="LOGO" />
                </a>
            </div>
            <nav>
                <ul>
                    <li class="mb-4">
                        <a class="flex items-center" href="AdminDashboard.php">
                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512" height="25px" width="25px">
                                <rect x="48" y="48" width="176" height="176" rx="20" ry="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                <rect x="288" y="48" width="176" height="176" rx="20" ry="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                <rect x="48" y="288" width="176" height="176" rx="20" ry="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                                <rect x="288" y="288" width="176" height="176" rx="20" ry="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                            </svg>
                            <span>DASHBOARD</span>
                        </a>
                    </li>

                    <li class="mb-4">
                        <a href="ManageDoctors.php" class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512" height="25px" width="25px">
                                <rect x="32" y="112" width="448" height="352" rx="48" ry="48" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32" />
                                <path d="M144 112V80a32 32 0 0132-32h160a32 32 0 0132 32v32M256 208v160M336 288H176" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                            </svg>
                            <span>DOCTORS</span>
                        </a>
                    </li>
                    <li class="mb-4">
                        <a href="ManageUsers.php" class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512" height="25px" width="25px">
                                <rect x="32" y="112" width="448" height="352" rx="48" ry="48" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32" />
                                <path d="M144 112V80a32 32 0 0132-32h160a32 32 0 0132 32v32M256 208v160M336 288H176" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                            </svg>
                            <span>USERS</span>
                        </a>
                    </li>
                    <li class="mb-4">
                        <a class="flex items-center" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512" height="25px" width="25px">
                                <path d="M262.29 192.31a64 64 0 1057.4 57.4 64.13 64.13 0 00-57.4-57.4zM416.39 256a154.34 154.34 0 01-1.53 20.79l45.21 35.46a10.81 10.81 0 012.45 13.75l-42.77 74a10.81 10.81 0 01-13.14 4.59l-44.9-18.08a16.11 16.11 0 00-15.17 1.75A164.48 164.48 0 01325 400.8a15.94 15.94 0 00-8.82 12.14l-6.73 47.89a11.08 11.08 0 01-10.68 9.17h-85.54a11.11 11.11 0 01-10.69-8.87l-6.72-47.82a16.07 16.07 0 00-9-12.22 155.3 155.3 0 01-21.46-12.57 16 16 0 00-15.11-1.71l-44.89 18.07a10.81 10.81 0 01-13.14-4.58l-42.77-74a10.8 10.8 0 012.45-13.75l38.21-30a16.05 16.05 0 006-14.08c-.36-4.17-.58-8.33-.58-12.5s.21-8.27.58-12.35a16 16 0 00-6.07-13.94l-38.19-30A10.81 10.81 0 0149.48 186l42.77-74a10.81 10.81 0 0113.14-4.59l44.9 18.08a16.11 16.11 0 0015.17-1.75A164.48 164.48 0 01187 111.2a15.94 15.94 0 008.82-12.14l6.73-47.89A11.08 11.08 0 01213.23 42h85.54a11.11 11.11 0 0110.69 8.87l6.72 47.82a16.07 16.07 0 009 12.22 155.3 155.3 0 0121.46 12.57 16 16 0 0015.11 1.71l44.89-18.07a10.81 10.81 0 0113.14 4.58l42.77 74a10.8 10.8 0 01-2.45 13.75l-38.21 30a16.05 16.05 0 00-6.05 14.08c.33 4.14.55 8.3.55 12.47z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                            </svg>
                            <span>SETTINGS</span>
                        </a>
                    </li>
                </ul>
            </nav>



        </aside>


        <main class="bg-gray-100 flex-1 p-4">

        <h1 class="text-5xl">USER MANAGEMENT</h1>


            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class=" py-3">
                            Name
                        </th>
                        <th scope="col" class=" py-3">
                            Role
                        </th>
                        <th scope="col" class=" py-3">
                            Active
                        </th>
                        <th scope="col" class=" py-3">
                            Edit
                        </th>
                        <th scope="col" class=" py-3">
                            Delete
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class=" dark:border-gray-700">
                        <?php

                        while ($row = mysqli_fetch_assoc($result)) {

                        ?>

                            <td class=""><?php echo $row['name']; ?></td>
                            <td class="">
                                <?php

                                if ($row['roleID'] == 0) {
                                    echo "<p> Admin </p>";
                                } else if ($row['roleID'] == 1) {
                                    echo "<p> Doctor </p>";
                                } else {
                                    echo "<p> Patient </p>";
                                }

                                ?></td>
                            </td>
                            <td class="">
                                <?php

                                if ($row['isActive'] == 1) {
                                    echo "<p> Active </p>";
                                } else {
                                    echo "<p> Inactive </p>";
                                }

                                ?>
                            </td>
                            <td class=""><a href="#" class="">
                                    <button class=" bg-blue-400 hover:bg-blue-500 text-blue-700 font-semibold
                                         hover:text-white py-2 px-4 border
                                         border-blue-500 hover:border-transparent rounded">
                                        Edit
                                    </button></a></td>
                            <td class=""><a href="#" class="">
                                    <button class=" bg-red-600 hover:bg-red-500 text-red-700 font-semibold
                                         hover:text-red py-2 px-4 border
                                         border-red-500 hover:border-transparent rounded">
                                        Delete
                                    </button></a></td>
                    </tr>

                <?php
                        }
                ?>

                </tbody>
            </table>


        </main>

    </div>
</body>

</html>