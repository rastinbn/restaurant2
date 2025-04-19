<?php
?>
<section
    class="bg-cover bg-center bg-[rgba(0,0,0,0.5)] bg-blend-multiply h-lvh animate__animated animate__fadeIn animate__slow" style="background-image: url('img/back.jpg');">

    <header class="brightness-[1]">
        <div class="mx-auto flex h-16 max-w-screen-xl items-center gap-8 px-4 sm:px-6 lg:px-8">
            <a class="block text-teal-600" href="#">
                <span class="sr-only">Home</span>
                <img src="img/logo.webp" class="h-8">

                </img>
            </a>

            <div class="flex flex-1 items-center justify-end md:justify-between">
                <nav aria-label="Global" class="hidden md:block">

                </nav>

                <div class="flex items-center gap-4">
                    <div class="sm:flex sm:gap-4">
                        <a class="block rounded-md bg-orange-500 px-5 py-2.5 text-sm font-medium text-white transition hover:bg-orange-700 dark:bg-gray-500 dark:hover:bg-gray-600"
                           href="login/login.php">
                            Login
                        </a>
                        <a class="block rounded-md bg-orange-300 px-5 py-2.5 text-sm font-medium text-orange-400 transition hover:bg-orange-500 hover:text-white dark:bg-gray-400 text-white dark:hover:bg-gray-600"
                           href="signup/signup.php">
                            Register
                        </a>
                    </div>

                    <button
                        class="block rounded-sm bg-gray-100 p-2.5 text-oram-600 transition hover:text-gray-600/75 md:hidden">
                        <span class="sr-only">Toggle menu</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </header>
