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
        <div class="text-4xl font-bold mb-2">Programs</div>
        <div class="text-xl font-notoserif">Home > Programs > Research Fellow – Center for Research, Policy and
            Innovation (CRPI)
        </div>
    </div>
</section>
<!-- hero section  -->

<!-- main  -->
<section class="container mx-auto px-4 py-20">
    <img src="./images/scientific-big.png" alt="img" class="w-full">

    <!-- first text-area  -->
    <div class="font-notoserif">
        <div class="text-xl lg:text-4xl font-bold font-playfair my-8">Research Fellow - Center for Research, Policy and
            Innovation
            (CRPI)</div>

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

        <!-- status  -->
        <div class="bg-[#D5D5D5] p-8 rounded-lg w-full mt-8 space-y-2">
            <div class="flex lg:items-center items-start">
                <div class="w-1/2 lg:w-52">Hours</div>
                <div class="w-1/2"><span class="mr-4">:</span>Full-time or part-time</div>
            </div>
            <div class="flex lg:items-center items-start">
                <div class="w-1/2 lg:w-52">Duration</div>
                <div class="w-1/2"><span class="mr-4">:</span>Summer 2023 (With the possibility of continuation to Fall
                    2023 and beyond)</div>
            </div>
            <div class="flex lg:items-center items-start">
                <div class="w-1/2 lg:w-52">Pay</div>
                <div class="w-1/2"><span class="mr-4">:</span>Stipend; negotiable</div>
            </div>
            <div class="flex lg:items-center items-start">
                <div class="w-1/2 lg:w-52">Project Primary Site</div>
                <div class="w-1/2"><span class="mr-4">:</span>Virtual</div>
            </div>

        </div>

    </div>

    <!-- second text-area  -->
    <div class="font-notoserif">
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
            <div class="text-[#5273FA] my-6 mt-10 text-2xl font-semibold font-playfair">Qualifications</div>
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

        <!-- responsibilites -->
        <div>
            <div class="text-[#5273FA] my-6 mt-10 text-2xl font-semibold font-playfair">Responsibilites</div>
            <ul class="list-outside list-disc ml-4">
                <li>Complete orientation and training (will take place during the first week of the program)</li>
                <li>Successfully implement the program curriculum, leading the research process from beginning to end
                </li>
                <li>Introduce and explain key concepts in research methodology, making sure students or project team
                    members fully grasp each step and why it matters</li>
                <li>Lead 4-7 or more students/scholars as the groups engages in research projects, helping each student
                    and team overcome challenges as they arise, and ensuring the active participation of all group
                    members in the research and the implementation process of the project</li>
                <li>Attend staff or larger groups meeting, prepare meeting notes</li>
                <li>Closely work with Program Assistants and Interns</li>
                <li>Fully document daily reflections, observations, and program activities</li>
                <li>Prepare bi-weekly reports to Project Director or Supervisor</li>
                <li>Participate in program evaluation</li>
                <li>Assume responsibilities as assigned</li>
            </ul>
        </div>

        <!-- Deliverables -->
        <div>
            <div class="text-[#5273FA] my-6 mt-10 text-2xl font-semibold font-playfair">Deliverables</div>
            <ul class="list-outside list-disc ml-4">
                <li>20-30 pages long academically written paper with policy and action recommendations</li>
                <li>Executive Summary of the project that outlines the main findings of the study and solution
                    recommendations
                </li>
                <li>PowerPoint slides for final research/project presentation</li>
                <li>Raw data and all project related materials. E.g. survey forms, articles, journals, etc.</li>
            </ul>
        </div>

        <div class="mt-8">
            Interested candidates should submit a resume and a one-page cover letter to Human Resources
            at HR@thebaci.org. Applications will be reviewed immediately.
        </div>
    </div>

    <?php include './templates/share-news-programs.php' ?>

    <?php include './components/relatedNewsAndPrograms.php'; ?>

</section>
<!-- main  -->

<?php include './templates/footer.php'; ?>