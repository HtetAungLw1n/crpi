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
                        <input type="text" class="outline-none w-full text-black" placeholder="Search.." />
                        <img src="../icons/Vector.svg" alt="search" class="search-close cursor-pointer" />
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="bg-deep-blue font-playfair pt-40 pb-20 text-white text-center">
        <div class="text-4xl font-bold mb-2">Policy Action Research</div>
        <div class="text-xl font-notoserif">Home > Programs > CRPI Policy Action Research Summer Program with the Center
            for Research, Policy and Innovation (CRPI)
        </div>
    </div>
</section>
<!-- hero section  -->

<!-- main  -->
<section class="container mx-auto px-4 py-20">
    <img src="./images/scientific-big.png" alt="img" class="w-full">

    <!-- first text-area  -->
    <div class="font-notoserif">
        <div class="text-xl lg:text-4xl font-bold font-playfair my-8">CRPI Policy Action Research Summer Program with
            the Center for Research, Policy and Innovation (CRPI)</div>

        <!-- date and time -->
        <div class="flex items-center justify-start text-deep-blue">
            <div class="flex items-start lg:items-center gap-2 border-r-2 border-gray-200 px-2"><img
                    src="./icons/calendar-deep-blue-2.svg" alt="calendar">January 20,
                2024
            </div>
            <div class="flex items-start lg:items-center gap-2 px-2"><img src="./icons/clock-deep-blue.svg"
                    alt="clock">11:30
                pm</div>
            <div class="flex items-start lg:items-center gap-2 border-l-2 border-gray-200 px-2"><img
                    src="./icons/category-name.svg" alt="category">Category Name</div>
        </div>
    </div>

    <!-- second text-area  -->
    <div class="font-notoserif pb-20 border-b-2 border-gray-300">
        <!-- paragraph -->
        <div class="mt-8">
            <div class="indent-4">
                In this program, researchers and scholars participate in intensive scientific group research projects
                from during the summer (June – August), primarily utilizing participatory action research (PAR)
                methodology. In consultation with the CRPI Directors and under the leadership of research fellows or
                lead researchers, teams of 5 to 7 researchers and scholars will form and propose topics for research.
                Each research team is expected to produce an academic paper that includes its main findings and
                solution-oriented policy recommendations and present it to relevant stakeholders at the end of the
                project. Project deliverables include:
            </div>

            <ul class="list-outside list-disc pl-6 mt-8">
                <li>A 20-30 page academic paper with policy and action recommendations</li>
                <li>An executive summary of the paper that outlines the main findings of the study and policy
                    recommendations</li>
                <li>PowerPoint slides for the final research/project presentation</li>
                <li>Literature reviewed, documentation relating to the methodology (such as survey forms), and raw data.
                </li>
            </ul>
        </div>

        <div class="mt-8 block">The CRPI Policy Action Research will be carried out through NUUM and carries up to 9
            credit hours.
        </div>

        <div class="mt-8  font-bold"> To join the program &#8594; <a href="#"
                class="bg-[#EDEDED] rounded-lg px-8 py-2 hover:bg-blue-400 transition duration-200 ease-in-out block lg:inline mt-4 lg:mt-0">see
                the
                announcement the CRPI
                2023</a>
        </div>


    </div>

    <?php include './components/relatedNewsAndPrograms.php'; ?>

</section>
<!-- main  -->

<?php include './templates/footer.php'; ?>