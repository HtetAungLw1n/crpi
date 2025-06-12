<?php include './templates/header.php' ?>
<?php include './templates/nav.php' ?>

<!-- hero section  -->
<section class="w-full relative">
    <nav class="relative w-full h-28 z-20 flex items-center justify-between px-4 bg-[#00142E] text-white">
        <div class="container mx-auto w-full h-16 flex justify-between items-center">
            <img src="./images/logo.png" alt="logo" />

            <!-- this is for mobile  -->
            <div class="lg:hidden w-10 h-10 cursor-pointer" id="mobile-menu-btn">
                <img src="./icons/burger-menu-white.svg" alt="burger" class="w-full" />
            </div>

            <!-- this is for desktop  -->
            <div class="hidden lg:flex items-center font-poppins h-full">
                <a href="/"
                    class="px-10 text-xl h-full flex items-center hover:bg-white hover:text-black transition duration-500 ease-in-out">Home</a>
                <a href="/about-us.php"
                    class="px-10 text-xl h-full flex items-center hover:bg-white hover:text-black transition duration-500 ease-in-out">About
                    Us</a>

                <!-- program navbar with dropdown  -->
                <div
                    class="dropdown px-10 text-xl h-full flex items-center hover:bg-white hover:text-black transition duration-500 ease-in-out">
                    <a href="/programs.php" class="flex items-center gap-4">
                        Programs <img src="./icons/arrow-down.svg" alt="arrow-down" />
                    </a>

                    <!-- program dropdown content -->
                    <div class="absolute top-full right-0 w-screen bg-white text-black shadow-lg dropdown-content z-50">
                        <div class="container mx-auto py-6">
                            <h2 class="text-2xl font-bold text-deep-blue">
                                Research & Ideas
                            </h2>
                            <div class="grid grid-cols-3 mt-8 gap-8">
                                <div class="flex flex-col gap-8">
                                    <a href="#" class="hover:text-deep-blue">Research</a>
                                    <a href="#" class="hover:text-deep-blue">Academic Papers</a>
                                </div>
                                <div class="flex flex-col gap-8">
                                    <a href="#" class="hover:text-deep-blue">Analysis</a>
                                    <a href="#" class="hover:text-deep-blue">
                                        Center for Holistic International Human Rights Law
                                        Praxis
                                    </a>
                                </div>
                                <div class="flex flex-col gap-8">
                                    <a href="#" class="hover:text-deep-blue">Center for Land and Natural Resources
                                        Policy</a>
                                    <a href="#" class="hover:text-deep-blue">Center for Constitution & Democratic
                                        Governance</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- publications navbar with dropdown  -->
                <div
                    class="dropdown px-10 text-xl h-full flex items-center hover:bg-white hover:text-black transition duration-500 ease-in-out">
                    <a href="/publication.php" class="flex items-center gap-4">
                        Publications
                        <img src="./icons/arrow-down.svg" alt="arrow-down" />
                    </a>

                    <!-- Publications dropdown content -->
                    <div class="absolute top-full right-0 w-screen bg-white text-black shadow-lg dropdown-content z-50">
                        <div class="container mx-auto py-6">
                            <h2 class="text-2xl font-bold text-deep-blue">
                                Research & Publications
                            </h2>
                            <div class="grid grid-cols-3 mt-8 gap-8">
                                <div class="flex flex-col gap-8">
                                    <a href="#" class="hover:text-deep-blue">Arts and Humanities, Public Health</a>
                                    <a href="#" class="hover:text-deep-blue">Development and Economic
                                    </a>
                                </div>
                                <div class="flex flex-col gap-8">
                                    <a href="#" class="hover:text-deep-blue">Education, Human Rights, and Gender</a>
                                    <a href="#" class="hover:text-deep-blue">Environment, and Engineering</a>
                                </div>
                                <div class="flex flex-col gap-8">
                                    <a href="#" class="hover:text-deep-blue">Public Policy, Law and Diplomacy</a>
                                    <a href="#" class="hover:text-deep-blue">Others</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <a href="/events.php"
                    class="px-10 text-xl h-full flex items-center hover:bg-white hover:text-black transition duration-500 ease-in-out">Events</a>
                <a href="/contact-us.php"
                    class="px-10 text-xl h-full flex items-center hover:bg-white hover:text-black transition duration-500 ease-in-out">Contact
                    Us</a>

                <!-- search -->
                <div class="text-xl h-full flex items-center cursor-pointer search-icon p-4">
                    <img src="../icons/search-white.svg" alt="search" class="search-trigger h-6" />
                    <div class="absolute top-1/2 right-48 flex bg-white p-4 rounded-lg search-input"
                        style="transform: translateY(-50%)">
                        <input type="text" class="outline-none w-full text-black" placeholder="Search.." />
                        <img src="../icons/Vector.svg" alt="search" class="search-close cursor-pointer" />
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="bg-deep-blue font-playfair py-16 text-white text-center">
        <div class="text-xl md:text-3xl lg:text-4xl font-bold mb-4">Registration
        </div>
        <div class="text-md md:text-lg lg:text-xl font-notoserif">Home > Registration for Spring Flowers International
            Conference on Myanmar Feb 8 to 12, 2023
        </div>
    </div>
</section>
<!-- hero section  -->

<!-- main  -->
<section class="container mx-auto px-4 py-20">

    <div class="border-b-2 border-gray-300 pb-20">
        <img src="./images/slider2.png" alt="img" class="w-full object-cover">

        <div class="font-notoserif">
            <div class="text-xl lg:text-4xl font-bold font-playfair my-8">Registration for Spring Flowers International
                Conference on Myanmar Feb 8 to 12, 2023</div>

            <!-- date and time -->
            <div class="flex items-center justify-start text-deep-blue">
                <div
                    class="flex flex-col md:flex-row items-start lg:items-center gap-2 border-r-2 border-gray-200 px-2">
                    <img src="./icons/calendar-deep-blue-2.svg" alt="calendar">
                    <div class="text-nowrap">January 20,2024</div>
                </div>
                <div class="flex flex-col md:flex-row items-start lg:items-center gap-2 px-2"><img
                        src="./icons/clock-deep-blue.svg" alt="clock">11:30
                    pm</div>
                <div
                    class="flex flex-col md:flex-row items-start lg:items-center gap-2 border-l-2 border-gray-200 px-2">
                    <img src="./icons/category-name.svg" alt="category">Category Name
                </div>
            </div>
        </div>

        <!-- second text-area  -->
        <div class="font-notoserif">
            <div class="mt-8">

                To attend the conference virtually, register Here. Registration is FREE. We have made this
                arrangement to make the conference more accessible to all. The registration is good for the entire
                conference or parts of it, including the celebration of the 76th Myanmar Union Day.


            </div>
            <div class="mt-8">To attend in person for the 76th Union Day of Myanmar on Feb 11, 2023, register <a
                    href="#" class="text-deep-blue underline">Here</a>.
            </div>


        </div>

    </div>

    <?php include './components/relatedNewsAndPrograms.php'; ?>

</section>
<!-- main  -->

<?php include './templates/footer.php'; ?>