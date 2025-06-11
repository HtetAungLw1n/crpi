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
        <div class="text-4xl font-bold mb-2">Publication</div>
        <div class="text-xl">Home > Publication > Publication - Center for Research, Policy and Innovation (CRPI)</div>
    </div>
</section>
<!-- hero section  -->

<!-- main  -->
<section class="container mx-auto px-4 py-20">
    <div class="w-full relative">
        <img src="./images/slider2.png" alt="img" class="w-full opacity-70">
        <div
            class="w-full lg:w-[50%] bg-deep-blue px-8 py-2 absolute top-0 lg:top-10 left-1/2 transform -translate-x-1/2 text-md md:text-lg lg:text-4xl text-white font-bold font-playfair">
            Publication Title – Center for Research, Policy and Innovation (CRPI)
        </div>
        <img src="./images/ebook-reader-books.png" alt="book"
            class="absolute h-[50%] top-20 lg:top-60 left-1/2 transform -translate-x-1/2">
    </div>


    <!-- first text-area  -->
    <div>
        <div class="text-xl lg:text-4xl font-bold font-playfair my-8">Publication Title - Center for Research, Policy
            and
            Innovation (CRPI)</div>

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
    <div class="font-playfair border-b-2 border-gray-300 pb-16">
        <!-- paragraph -->
        <div class="mt-8">
            <div class="indent-4">
                The Burmese American Community Institute (BACI) is a dynamic, forward-looking, and growing organization.
                We
                seek motivated, committed, and enthusiastic candidates to join our team as a Lead Researcher at the
                Center for Research, Policy and Innovation (CRPI).
            </div>

            <div class="mt-4 block"> In collaborative partnership with the National
                University of the Union of Myanmar – Global Campus and other Universities in the USA, CRPI facilitates
                and enables collaborative research and action projects with various researchers in Indiana, as well as
                with Burmese scholars, other international scholars, and scholars across the US whose research and
                projects might be applicable to the Burmese American community, to Myanmar, and to Southeast Asia.</div>

            <div class="mt-4 block"> Particularly, a 10-week intensive Participatory Action Research (PAR) scientific
                research project with
                one’s chosen topic this summer is expected to produce academically written paper with its main findings
                and solution-oriented policy recommendations to be presented to the stakeholders at the end of the
                project.</div>
        </div>

        <!-- qualifications -->
        <div>
            <div class="text-[#5273FA] my-6 mt-10 text-2xl font-semibold">Key Features</div>
            <ul class="list-outside list-disc pl-6">
                <li>Current faculty member at a University, Graduate student, doctoral degree, advanced or terminal
                    degree preferred (College Senior may be considered).</li>
                <li>Strong familiarity with research methodology and/or experience</li>
                <li>Commitment to participatory action research as a method of engaging and empowering youth to create
                    positive social change</li>
                <li>Outstanding written and verbal communication skills; strong writing highly desired</li>
                <li>Able to work in a fast-paced environment/meet deadlines</li>
                <li>Proficiency in Microsoft Office and internet applications</li>
                <li>Demonstrate high level of professionalism, respect, and personal integrity</li>
                <li>Be a team player; able to collaborate with others</li>
                <li>International experience – high degree of cultural sensitivity and competence</li>
                <li>Enthusiasm for <span class="text-[#5273FA]"><a href="#">CRPI mission</a></span></li>
                <li>Flexibility and availability/willingness to work some weekends</li>
            </ul>
        </div>

    </div>

    <!-- Related Publication -->
    <div>
        <div class="text-4xl font-bold font-playfair mt-8">Related Publication</div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 mt-8 gap-8">

            <div class="cursor-pointer">
                <div class="overflow-hidden group">
                    <img src="./images/publications/publications-one.png" alt="one"
                        class="transform transition-transform duration-500 ease-in-out group-hover:scale-110 filter group-hover:grayscale" />
                </div>
                <div class="mt-8 text-2xl w-full text-center font-semibold">CRPI summer 2022</div>
            </div>

            <div class="cursor-pointer">
                <div class="overflow-hidden group">
                    <img src="./images/publications/publications-one.png" alt="one"
                        class="transform transition-transform duration-500 ease-in-out group-hover:scale-110 filter group-hover:grayscale" />
                </div>
                <div class="mt-8 text-2xl w-full text-center font-semibold">CRPI summer 2022</div>
            </div>

            <div class="cursor-pointer">
                <div class="overflow-hidden group">
                    <img src="./images/publications/publications-one.png" alt="one"
                        class="transform transition-transform duration-500 ease-in-out group-hover:scale-110 filter group-hover:grayscale" />
                </div>
                <div class="mt-8 text-2xl w-full text-center font-semibold">CRPI summer 2022</div>
            </div>
        </div>
    </div>

</section>
<!-- main  -->

<?php include './templates/footer.php'; ?>