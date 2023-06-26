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
                <a href="PatientDashboard.php">
                    <img src="../../img/logo.png" alt="LOGO" />
                </a>
            </div>
            <nav>
                <ul>
                    <li class="mb-4">
                        <a class="flex items-center" href="PatientDashboard.php">
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
                        <a href="PatientAppointments.php" class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512" height="25px" width="25px">
                                <rect fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32" x="48" y="80" width="416" height="384" rx="48" />
                                <circle cx="296" cy="232" r="24" />
                                <circle cx="376" cy="232" r="24" />
                                <circle cx="296" cy="312" r="24" />
                                <circle cx="376" cy="312" r="24" />
                                <circle cx="136" cy="312" r="24" />
                                <circle cx="216" cy="312" r="24" />
                                <circle cx="136" cy="392" r="24" />
                                <circle cx="216" cy="392" r="24" />
                                <circle cx="296" cy="392" r="24" />
                                <path fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32" stroke-linecap="round" d="M128 48v32M384 48v32" />
                                <path fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32" d="M464 160H48" />
                            </svg>
                            <span>APPOINTMENTS</span>
                        </a>
                    </li>
                    <li class="mb-4">
                        <a class="flex items-center" href="PatientDoctorsPage.php">
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

            <div class="mx-auto container max-w-2xl md:w-3/4 shadow-md">
                <div class="bg-gray-100 p-4 border-t-2 bg-opacity-5 border-indigo-400 rounded-t">
                    <div class="max-w-sm mx-auto md:w-full md:mx-0">
                        <div class="inline-flex items-center space-x-4">

                            <h1 class="text-gray-600">Charly Olivas</h1>
                        </div>
                    </div>
                </div>
                <div class="bg-white space-y-6">
                    <div class="md:inline-flex space-y-4 md:space-y-0 w-full p-4 text-gray-500 items-center">
                        <h2 class="md:w-1/3 max-w-sm mx-auto">Account</h2>
                        <div class="md:w-2/3 max-w-sm mx-auto">
                            <label class="text-sm text-gray-400">Email</label>
                            <div class="w-full inline-flex border">
                                <div class="pt-2 w-1/12 bg-gray-100 bg-opacity-50">
                                    <svg fill="none" class="w-6 text-gray-400 mx-auto" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                </div>
                                <input type="email" class="w-11/12 focus:outline-none focus:text-gray-600 p-2" placeholder="email@example.com" disabled />
                            </div>
                        </div>
                    </div>

                    <hr />
                    <div class="md:inline-flex  space-y-4 md:space-y-0  w-full p-4 text-gray-500 items-center">
                        <h2 class="md:w-1/3 mx-auto max-w-sm">Personal info</h2>
                        <div class="md:w-2/3 mx-auto max-w-sm space-y-5">
                            <div>
                                <label class="text-sm text-gray-400">Full name</label>
                                <div class="w-full inline-flex border">
                                    <div class="w-1/12 pt-2 bg-gray-100">
                                        <svg fill="none" class="w-6 text-gray-400 mx-auto" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                        </svg>
                                    </div>
                                    <input type="text" class="w-11/12 focus:outline-none focus:text-gray-600 p-2" placeholder="Charly Olivas" />
                                </div>
                            </div>
                            <div>
                                <label class="text-sm text-gray-400">Phone number</label>
                                <div class="w-full inline-flex border">
                                    <div class="pt-2 w-1/12 bg-gray-100">
                                        <svg fill="none" class="w-6 text-gray-400 mx-auto" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                                        </svg>
                                    </div>
                                    <input type="text" class="w-11/12 focus:outline-none focus:text-gray-600 p-2" placeholder="12341234" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr />
                    <div class="md:inline-flex w-full space-y-4 md:space-y-0 p-8 text-gray-500 items-center">
                        <h2 class="md:w-4/12 max-w-sm mx-auto">Change password</h2>

                        <div class="md:w-5/12 w-full md:pl-9 max-w-sm mx-auto space-y-5 md:inline-flex pl-2">
                            <div class="w-full inline-flex border-b">
                                <div class="w-1/12 pt-2">
                                    <svg fill="none" class="w-6 text-gray-400 mx-auto" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                    </svg>
                                </div>
                                <input type="password" class="w-11/12 focus:outline-none focus:text-gray-600 p-2 ml-4" placeholder="New" />
                            </div>
                        </div>

                        <div class="md:w-3/12 text-center md:pl-6">
                            <button class="text-white w-full mx-auto max-w-sm rounded-md text-center bg-indigo-400 py-2 px-4 inline-flex items-center focus:outline-none md:float-right">
                                <svg fill="none" class="w-4 text-white mr-2" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                                </svg>
                                Update
                            </button>
                        </div>
                    </div>

                    <hr />
                    <div class="w-full p-4 text-right text-gray-500 justify-start items-start">
                        <button class="inline-flex items-center focus:outline-none mr-4 bg-red-600">
                            <svg fill="none" class="w-4 mr-2" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                            </svg>
                            Delete account
                        </button>
                    </div>
                    <div class="w-full p-4 text-right text-gray-500">
                        <a href="../logout.php"><button class="inline-flex items-center focus:outline-none mr-4 text-green-600">
                              

                                <svg fill="none" class="w-4 mr-2" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg>
                                Log Out
                            </button></a>
                    </div>
                </div>
            </div>


        </main>
    </div>
</body>

</html>