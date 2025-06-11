<?php include './templates/header.php' ?>
<?php include './templates/nav.php' ?>

<!-- hero section  -->
<section class="w-full relative">
    <nav class="absolute top-0 left-0 w-full h-28 z-20 flex items-center justify-between px-4 bg-[#00142E] text-white">
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
                        <input type="text" class="outline-none w-full" placeholder="Search.." />
                        <img src="../icons/Vector.svg" alt="search" class="search-close cursor-pointer" />
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="bg-deep-blue font-playfair pt-40 pb-20 text-white text-center">
        <div class="text-4xl font-bold mb-2">Contact Us</div>
        <div class="text-xl">Home > Contact Us</div>
    </div>
</section>
<!-- hero section  -->

<!-- main  -->
<section class="container mx-auto p-10 font-playfair">
    <div class="text-center">
        <div class="text-3xl font-bold">Want to get in touch?</div>
        <div class="text-lg mt-4 font-semibold">Use this contact form below. We typically reply within 24 hours.</div>
    </div>

    <!-- form  -->
    <div class="bg-[#F5F5F5] w-full rounded-2xl shadow-xl mt-10 p-10 lg:p-20">
        <div class="grid grid-cols-1 grid-rows-8 lg:grid-cols-2 lg:grid-rows-4 gap-10">
            <input type="text" class="border-2 border-gray-200 rounded-lg p-4" placeholder="Name">
            <input type="text" class="border-2 border-gray-200 rounded-lg p-4" placeholder="Phone Number">
            <input type="text" class="border-2 border-gray-200 rounded-lg p-4" placeholder="Email">
            <input type="text" class="border-2 border-gray-200 rounded-lg p-4" placeholder="Subject">
            <textarea class="lg:col-span-2 row-span-4 border-2 border-gray-200 rounded-lg p-4"
                placeholder="Message"></textarea>
        </div>
        <div class="w-full flex justify-center items-center">
            <button
                class="text-white rounded-full bg-deep-blue font-poppins px-20 py-4 text-base md:text-lg hover-button mt-16">
                Submit
            </button>
        </div>
    </div>
</section>
<!-- main  -->

<img src="./images/basemap.png" alt="map" class="w-full mt-10 md:mt-20">

<?php include './templates/footer.php'; ?>