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
                <a href="/Admin/dashboard">
                    <img src="../../img/logo.png" alt="LOGO" />
                </a>
            </div>
            <nav>
                <ul>
                    <li class="mb-4">
                        <a class="flex items-center" href="AdminDashboard.php"">
                            <svg xmlns=" http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512" height="25px" width="25px">
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

            <div class="p-8 my-4">
                <h2 class="font-semibold text-2xl">Welcome Admin!</h2>
            </div>

            <div class="p-4">
                <div class="grid grid-cols-2 gap-4 mb-4">

                    <div class="mx-2 grid grid-cols-2 gap-72 ">
                        <h3 class="font-semibold">Doctors Available</h3>
                        <div class="bg-white rounded-lg shadow-md p-4 justify-center ">
                            <div class="flex flex-col">
                                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                                    <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                                        <div class="overflow-hidden">
                                            <table class="min-w-full text-left text-sm font-light">
                                                <thead class="border-b font-medium dark:border-neutral-500">
                                                    <tr>
                                                        <th scope="col" class="px-6 py-4">#</th>
                                                        <th scope="col" class="px-6 py-4">First</th>
                                                        <th scope="col" class="px-6 py-4">Last</th>
                                                        <th scope="col" class="px-6 py-4">Handle</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                                                        <td class="whitespace-nowrap px-6 py-4 font-medium">1</td>
                                                        <td class="whitespace-nowrap px-6 py-4">Mark</td>
                                                        <td class="whitespace-nowrap px-6 py-4">Otto</td>
                                                        <td class="whitespace-nowrap px-6 py-4">@mdo</td>
                                                    </tr>
                                                    <tr class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                                                        <td class="whitespace-nowrap px-6 py-4 font-medium">2</td>
                                                        <td class="whitespace-nowrap px-6 py-4">Jacob</td>
                                                        <td class="whitespace-nowrap px-6 py-4">Thornton</td>
                                                        <td class="whitespace-nowrap px-6 py-4">@fat</td>
                                                    </tr>
                                                    <tr class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                                                        <td class="whitespace-nowrap px-6 py-4 font-medium">3</td>
                                                        <td class="whitespace-nowrap px-6 py-4">Larry</td>
                                                        <td class="whitespace-nowrap px-6 py-4">Wild</td>
                                                        <td class="whitespace-nowrap px-6 py-4">@twitter</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="AddNewDoctor.php"><button class="bg-white rounded-lg shadow-md p-1 justify-end items-end mt-6">+ Add New
                                Doctor</button>
                        </a>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4 mb-4">

                    <div class="mx-2 grid grid-cols-2 gap-72 ">
                        <h3 class="font-semibold">Current Hospital Departments</h3>
                        <div class="bg-white rounded-lg shadow-md p-4 justify-center ">
                            <div class="flex flex-col">
                                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                                    <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                                        <div class="overflow-hidden">
                                            <table class="min-w-full text-left text-sm font-light">
                                                <thead class="border-b font-medium dark:border-neutral-500">
                                                    <tr>
                                                        <th scope="col" class="px-6 py-4">#</th>
                                                        <th scope="col" class="px-6 py-4">First</th>
                                                        <th scope="col" class="px-6 py-4">Last</th>
                                                        <th scope="col" class="px-6 py-4">Handle</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                                                        <td class="whitespace-nowrap px-6 py-4 font-medium">1</td>
                                                        <td class="whitespace-nowrap px-6 py-4">Mark</td>
                                                        <td class="whitespace-nowrap px-6 py-4">Otto</td>
                                                        <td class="whitespace-nowrap px-6 py-4">@mdo</td>
                                                    </tr>
                                                    <tr class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                                                        <td class="whitespace-nowrap px-6 py-4 font-medium">2</td>
                                                        <td class="whitespace-nowrap px-6 py-4">Jacob</td>
                                                        <td class="whitespace-nowrap px-6 py-4">Thornton</td>
                                                        <td class="whitespace-nowrap px-6 py-4">@fat</td>
                                                    </tr>
                                                    <tr class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                                                        <td class="whitespace-nowrap px-6 py-4 font-medium">3</td>
                                                        <td class="whitespace-nowrap px-6 py-4">Larry</td>
                                                        <td class="whitespace-nowrap px-6 py-4">Wild</td>
                                                        <td class="whitespace-nowrap px-6 py-4">@twitter</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <a href="AddNewDepartments.php"><button class="bg-white rounded-lg shadow-md p-1 justify-end items-end mt-6">+ Add New
                                Department</button>
                    </div>

                    </a>
                </div>


                <div class="h-48 mb-4">



                </div>

            </div>

        </main>
    </div>
</body>

</html>