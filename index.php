<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CRPI</title>
    <link rel="stylesheet" href="./assets/css/index.css" />

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    "deep-blue": "#00295C",
                },

                fontFamily: {
                    poppins: ["Poppins", "sans-serif"],
                    playfair: ["Playfair Display", "serif"],
                },
            },
        },
    };
    </script>
</head>

<body>
    <!-- top nav -->
    <nav class="w-full py-4 md:py-0 md:h-16 px-4 bg-deep-blue text-white">
        <div class="container h-full mx-auto flex flex-col gap-2 md:gap-0 md:flex-row justify-between items-center">
            <div class="flex items-center gap-4">
                <img src="./icons/emial-icon.svg" alt="email-cion" />
                Loremmail@gmail.com
            </div>
            <div class="hidden md:block">
                <span class="pr-10">safsdf</span> | <span class="pl-10">safsdf</span>
            </div>
            <div class="flex items-center space-x-4">
                <img src="./icons/pinterest.svg" alt="" class="cursor-pointer" />
                <img src="./icons/instagram.svg" alt="" class="cursor-pointer" />
                <img src="./icons/twitter.svg" alt="" class="cursor-pointer" />
                <img src="./icons/facebook.svg" alt="" class="cursor-pointer" />
            </div>
        </div>
    </nav>
    <!-- top nav -->

    <!-- hero section  -->
    <section class="w-full h-[75vh] md:h-[95vh] relative">
        <nav class="absolute top-10 left-0 w-full h-16 z-20 flex items-center justify-between px-4">
            <div class="container mx-auto w-full h-full flex justify-between items-center">
                <img src="./images/logo.png" alt="logo" />

                <!-- this is for mobile  -->
                <div class="lg:hidden w-10 h-10 cursor-pointer" id="mobile-menu-btn">
                    <img src="./icons/burger-menu.svg" alt="burger" class="w-full" />
                </div>

                <!-- this is for desktop  -->
                <div class="hidden lg:flex items-center font-poppins h-full">
                    <a href="/"
                        class="px-10 text-xl h-full flex items-center hover:bg-white transition duration-500 ease-in-out">Home</a>
                    <a href="/about-us.php"
                        class="px-10 text-xl h-full flex items-center hover:bg-white transition duration-500 ease-in-out">About
                        Us</a>

                    <!-- program navbar with dropdown  -->
                    <div
                        class="dropdown px-10 text-xl h-full flex items-center hover:bg-white hover:text-black transition duration-500 ease-in-out">
                        <a href="/programs.php" class="flex items-center gap-4">
                            Programs <img src="./icons/arrow-down.svg" alt="arrow-down" />
                        </a>

                        <!-- program dropdown content -->
                        <div
                            class="absolute top-full right-0 w-screen bg-white text-black shadow-lg dropdown-content z-50">
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
                        <div
                            class="absolute top-full right-0 w-screen bg-white text-black shadow-lg dropdown-content z-50">
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
                        class="px-10 text-xl h-full flex items-center hover:bg-white transition duration-500 ease-in-out">Events</a>
                    <a href="/contact-us.php"
                        class="px-10 text-xl h-full flex items-center hover:bg-white transition duration-500 ease-in-out">Contact
                        Us</a>

                    <!-- search -->
                    <div class="text-xl h-full flex items-center cursor-pointer search-icon p-4">
                        <img src="./icons/Vector.svg" alt="search" class="search-trigger" />
                        <div class="absolute top-1/2 right-48 flex bg-white p-4 rounded-lg search-input"
                            style="transform: translateY(-50%)">
                            <input type="text" class="outline-none w-full" placeholder="Search.." />
                            <img src="./icons/Vector.svg" alt="search" class="search-close cursor-pointer" />
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <div class="relative h-full overflow-hidden">
            <div id="slider" class="flex transition-transform duration-500 ease-in-out w-full h-[50vh] md:h-full">
                <img src="./images/herosection.png" alt="Slide 1" class="w-full flex-shrink-0 object-cover" />
                <img src="./images/slider2.png" alt="Slide 2" class="w-full flex-shrink-0 object-cover" />
            </div>

            <!-- Navigation Buttons -->
            <button id="prev"
                class="hidden md:block absolute left-5 top-1/2 transform -translate-y-1/2 bg-black bg-opacity-70 text-white px-3 py-1 text-4xl">
                &#10094;
            </button>
            <button id="next"
                class="hidden md:block absolute right-5 top-1/2 transform -translate-y-1/2 bg-black bg-opacity-70 text-white px-3 py-1 text-4xl">
                &#10095;
            </button>
        </div>

        <div
            class="absolute top-52 md:top-56 md:left-20 lg:left-44 bg-deep-blue text-white md:text-black md:bg-white/75 md:w-[80%] lg:w-[40%] p-8 md:p-16 rounded-3xl font-playfair">
            <div class="text-2xl md:text-4xl font-bold text-balance">
                Welcome to Center for Research, Policy and Innovation (CRPI)
            </div>
            <div class="my-10 line-clamp-5 text-sm md:text-lg text-justify font-semibold">
                The Center for Research, Policy and Innovation (CRPI) promotes
                collaborative research and action projects with local researchers,
                Burmese scholars, international colleagues, and stakeholders engaged
                in work related to the Burmese American community, Asian Americans,
                Myanmar, Southeast Asia, and the diaspora communities. The goal of the
                CRPI is to further innovative research activities, policy, and
                development-oriented projects that align with BACI’s vision and
                mission for advocacy, education, and service.
            </div>
            <button
                class="rounded-full bg-white/75 text-deep-blue md:text-white md:bg-deep-blue font-poppins px-8 md:px-10 py-4 text-base md:text-lg hover-button">
                Read More
            </button>
        </div>
    </section>
    <!-- hero section  -->

    <!-- Latest News and Programs  -->
    <section class="w-full px-8 py-10 md:py-20 md:px-0 font-playfair">
        <div class="text-center text-3xl md:text-4xl font-playfair font-bold">
            Lates News and Programs
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-20 container mx-auto mt-10">
            <!-- cards  -->
            <a href="/programs-3" class="hover:cursor-pointer">
                <div>
                    <div class="overflow-hidden group">
                        <img src="images/lates news and programs/american-scientific-researcher-with-young-scientist-working-in-modern-laboratory-ai-generative-free-photo 1.png"
                            alt="photo1"
                            class="w-full transform transition-transform duration-500 ease-in-out group-hover:scale-110 filter group-hover:grayscale" />
                    </div>
                    <div class="mt-4 px-1">
                        <div class="flex items-center gap-4 justify-between text-gray-400">
                            <div class="flex items-center gap-4 text-sm md:text-base">
                                <img src="./icons/calendar.svg" alt="calendar" />January
                                1,2023
                            </div>
                            <div class="flex items-center gap-4 text-sm md:text-base">
                                <img src="./icons/category.svg" alt="category" />Category Name
                            </div>
                        </div>
                        <div class="text-deep-blue text-xl md:text-2xl font-bold mt-2">
                            Summer intensive policy action research project
                        </div>
                        <div class="line-clamp-4 text-base md:text-lg mt-4">
                            In this program, researchers and scholars will participate in
                            intensive scientific group research projects primarily utilizing
                            participatory action research (PAR) methodology. In consultation
                            with the CRPI Directors and under the leadership of research
                            fellows or lead researchers,
                        </div>
                    </div>
                </div>
            </a>

            <a href="/programs-2" class="hover:cursor-pointer">
                <div>
                    <div class="overflow-hidden group">
                        <img src="images/lates news and programs/portrait-young-man-sitting-table_1048944-23959864.png"
                            alt="photo1"
                            class="w-full transform transition-transform duration-500 ease-in-out group-hover:scale-110 filter group-hover:grayscale" />
                    </div>
                    <div class="mt-4 px-1">
                        <div class="flex items-center gap-4 justify-between text-gray-400">
                            <div class="flex items-center gap-4 text-sm md:text-base">
                                <img src="./icons/calendar.svg" alt="calendar" />January
                                1,2023
                            </div>
                            <div class="flex items-center gap-4 text-sm md:text-base">
                                <img src="./icons/category.svg" alt="category" />Category Name
                            </div>
                        </div>
                        <div class="text-deep-blue text-xl md:text-2xl font-bold mt-2">
                            Summer intensive policy action research project
                        </div>
                        <div class="line-clamp-4 text-base md:text-lg mt-4">
                            In this program, researchers and scholars will participate in
                            intensive scientific group research projects primarily utilizing
                            participatory action research (PAR) methodology. In consultation
                            with the CRPI Directors and under the leadership of research
                            fellows or lead researchers,
                        </div>
                    </div>
                </div>
            </a>

            <a href="/programs-3" class="hover:cursor-pointer">
                <div>
                    <div class="overflow-hidden group">
                        <img src="images/lates news and programs/student copy.png" alt="photo1"
                            class="w-full transform transition-transform duration-500 ease-in-out group-hover:scale-110 filter group-hover:grayscale" />
                    </div>
                    <div class="mt-4 px-1">
                        <div class="flex items-center gap-4 justify-between text-gray-400">
                            <div class="flex items-center gap-4 text-sm md:text-base">
                                <img src="./icons/calendar.svg" alt="calendar" />January
                                1,2023
                            </div>
                            <div class="flex items-center gap-4 text-sm md:text-base">
                                <img src="./icons/category.svg" alt="category" />Category Name
                            </div>
                        </div>
                        <div class="text-deep-blue text-xl md:text-2xl font-bold mt-2">
                            Summer intensive policy action research project
                        </div>
                        <div class="line-clamp-4 text-base md:text-lg mt-4">
                            In this program, researchers and scholars will participate in
                            intensive scientific group research projects primarily utilizing
                            participatory action research (PAR) methodology. In consultation
                            with the CRPI Directors and under the leadership of research
                            fellows or lead researchers,
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <!-- dot pagination  -->
        <div class="w-full flex items-center justify-center mt-20 relative container mx-auto group">
            <div class="w-3 h-3 bg-[#5273FA] rounded-full mx-1 cursor-pointer"></div>
            <div class="w-3 h-3 bg-gray-400 rounded-full mx-1 cursor-pointer"></div>
            <div class="w-3 h-3 bg-gray-400 rounded-full mx-1 cursor-pointer"></div>

            <!-- bay ka view all link  -->
            <div class="absolute right-0">
                <a href="/programs"
                    class="oklu relative pb-2 bottom-0 right-0 flex justify-between items-center gap-2 font-poppins text-deep-blue cursor-pointer group overflow-hidden">
                    <div>View All</div>
                    <div class="w-7 h-7 bg-deep-blue p-2 flex justify-center">
                        <img src="./icons/arrow-top-right.svg" alt="arrow-top-right"
                            class="group-hover:rotate-45 transition duration-200 ease-in-out" />
                    </div>
                </a>
            </div>
        </div>
    </section>
    <!-- Latest News and Programs  -->

    <!-- Publication  -->
    <section
        class="py-20 px-8 md:px-0 font-playfair flex justify-center items-center bg-deep-blue text-white text-center">
        <div class="container">
            <div>
                <div class="text-3xl md:text-4xl">Publications</div>
                <div class="text-center text-base md:text-lg mt-8">
                    Researchers from the Center for Research, Policy and Innovation
                    (CRPI) presented their research findings and solution-oriented
                    policy action recommendations as the culmination of intensive
                    research project the summer of 2022 on the following 22 different
                    research topics.
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-20">
                <div class="cursor-pointer">
                    <div class="overflow-hidden group">
                        <img src="./images/publications/publications-one.png" alt="one"
                            class="transform transition-transform duration-500 ease-in-out group-hover:scale-110 filter group-hover:grayscale" />
                    </div>
                    <div class="mt-8 text-2xl">CRPI summer 2022</div>
                </div>

                <div class="cursor-pointer">
                    <div class="overflow-hidden group">
                        <img src="./images/publications/publications-two.png" alt="two"
                            class="transform transition-transform duration-500 ease-in-out group-hover:scale-110 filter group-hover:grayscale" />
                    </div>
                    <div class="mt-8 text-2xl">Policy Action</div>
                </div>

                <div class="cursor-pointer">
                    <div class="overflow-hidden group">
                        <img src="./images/publications/publications-one.png" alt="one"
                            class="transform transition-transform duration-500 ease-in-out group-hover:scale-110 filter group-hover:grayscale" />
                    </div>
                    <div class="mt-8 text-2xl">CRPI summer 2022</div>
                </div>
            </div>
            <button
                class="text-white rounded-full bg-[#0063B4] font-poppins px-10 py-4 text-base md:text-lg hover-button mt-16">
                See More
            </button>
        </div>
    </section>
    <!-- Publication  -->

    <!-- upcoming events  -->
    <section class="py-20 px-8 md:px-0 font-playfair flex justify-center items-center">
        <div class="container">
            <div class="text-center">
                <div class="text-3xl md:text-4xl">Upcoming Events</div>
                <div class="text-center text-base md:text-lg mt-8 line-clamp-2">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                    ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. Duis aute irure dolor in
                    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                    culpa qui officia deserunt mollit anim id est laborum.
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-y-10 md:gap-8 mt-20">
                <!-- 1  -->
                <a href="/programs-3" class="hover:cursor-pointer relative">
                    <img src="./images/speacker-gp.png" alt="speaker" class="absolute -top-3 left-6 z-50" />
                    <div>
                        <div class="overflow-hidden group h-64">
                            <img src="images/rear-view-audience.png" alt="photo1"
                                class="w-full h-full object-cover transform transition-transform duration-500 ease-in-out group-hover:scale-110 filter group-hover:grayscale" />
                        </div>

                        <div class="mt-4 px-1">
                            <div class="flex items-center gap-4 justify-between text-blue-400">
                                <div class="flex items-center gap-4 text-sm md:text-base">
                                    <img src="./icons/calendar-blue.svg" alt="calendar" />January 1,2023
                                </div>
                                <div class="flex items-center gap-4 text-sm md:text-base">
                                    <img src="./icons/clock-blue.png" alt="category" />11:30 pm
                                </div>
                            </div>
                            <div class="text-deep-blue text-xl md:text-2xl font-bold mt-4">
                                Call for Papers – 3rd Spring Flowers International Conference
                                on Myanmar
                            </div>
                        </div>
                    </div>
                </a>

                <!-- 2 -->
                <a href="/programs-3" class="hover:cursor-pointer relative">
                    <img src="./images/speacker-gp.png" alt="speaker" class="absolute -top-3 left-6 z-50" />
                    <div>
                        <div class="overflow-hidden group h-64">
                            <img src="images/lates news and programs/american-scientific-researcher-with-young-scientist-working-in-modern-laboratory-ai-generative-free-photo 1.png"
                                alt="photo1"
                                class="w-full h-full object-cover transform transition-transform duration-500 ease-in-out group-hover:scale-110 filter group-hover:grayscale" />
                        </div>

                        <div class="mt-4 px-1">
                            <div class="flex items-center gap-4 justify-between text-blue-400">
                                <div class="flex items-center gap-4 text-sm md:text-base">
                                    <img src="./icons/calendar-blue.svg" alt="calendar" />January 1,2023
                                </div>
                                <div class="flex items-center gap-4 text-sm md:text-base">
                                    <img src="./icons/clock-blue.png" alt="category" />11:30 pm
                                </div>
                            </div>
                            <div class="text-deep-blue text-xl md:text-2xl font-bold mt-4">
                                3rd Spring Flowers International Conference on Myanmar
                            </div>
                        </div>
                    </div>
                </a>

                <!-- 3 -->
                <a href="/programs-3" class="hover:cursor-pointer relative">
                    <img src="./images/speacker-gp.png" alt="speaker" class="absolute -top-3 left-6 z-50" />
                    <div>
                        <div class="overflow-hidden group h-64">
                            <img src="images/rear-view-audience.png" alt="photo1"
                                class="w-full h-full object-cover transform transition-transform duration-500 ease-in-out group-hover:scale-110 filter group-hover:grayscale" />
                        </div>

                        <div class="mt-4 px-1">
                            <div class="flex items-center gap-4 justify-between text-blue-400">
                                <div class="flex items-center gap-4 text-sm md:text-base">
                                    <img src="./icons/calendar-blue.svg" alt="calendar" />January 1,2023
                                </div>
                                <div class="flex items-center gap-4 text-sm md:text-base">
                                    <img src="./icons/clock-blue.png" alt="category" />11:30 pm
                                </div>
                            </div>
                            <div class="text-deep-blue text-xl md:text-2xl font-bold mt-4">
                                Call for Papers – 3rd Spring Flowers International Conference
                                on Myanmar
                            </div>
                        </div>
                    </div>
                </a>

                <!-- 4 -->
                <a href="/programs-3" class="hover:cursor-pointer relative">
                    <img src="./images/speacker-gp.png" alt="speaker" class="absolute -top-3 left-6 z-50" />
                    <div>
                        <div class="overflow-hidden group h-64">
                            <img src="images/lates news and programs/american-scientific-researcher-with-young-scientist-working-in-modern-laboratory-ai-generative-free-photo 1.png"
                                alt="photo1"
                                class="w-full h-full object-cover transform transition-transform duration-500 ease-in-out group-hover:scale-110 filter group-hover:grayscale" />
                        </div>

                        <div class="mt-4 px-1">
                            <div class="flex items-center gap-4 justify-between text-blue-400">
                                <div class="flex items-center gap-4 text-sm md:text-base">
                                    <img src="./icons/calendar-blue.svg" alt="calendar" />January 1,2023
                                </div>
                                <div class="flex items-center gap-4 text-sm md:text-base">
                                    <img src="./icons/clock-blue.png" alt="category" />11:30 pm
                                </div>
                            </div>
                            <div class="text-deep-blue text-xl md:text-2xl font-bold mt-4">
                                3rd Annual Myanmar Research Presentation
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="w-full flex justify-center items-center">
                <button
                    class="text-white rounded-full bg-deep-blue font-poppins px-10 py-4 text-base md:text-lg hover-button mt-16">
                    View All
                </button>
            </div>
        </div>
    </section>
    <!-- upcoming events  -->

    <!-- Newsletter Section -->
    <section class="bg-deep-blue text-white text-center py-10 md:py-20 px-8 md:px-0">
        <div class="container mx-auto">
            <h2 class="text-2xl md:text-4xl font-playfair font-bold">
                Subscribe to Our Newsletter
            </h2>
            <p class="text-sm md:text-base mt-8 max-w-xl mx-auto font-playfair">
                Subscribe for our weekly newsletter to get latest news, updates and
                amazing offers delivered directly in your inbox.
            </p>

            <div class="mt-8 max-w-5xl mx-auto flex sm:flex-row items-center">
                <input type="email" placeholder="Enter Your Email"
                    class="w-full sm:flex-1 px-4 py-3 rounded-l-md text-black focus:outline-none" />
                <button
                    class="bg-[#0063B4] text-white px-6 py-3 rounded-r-md font-semibold hover:bg-[#004c90] transition">
                    Subscribe
                </button>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="bg-deep-blue text-white py-8 md:py-12 px-8 md:px-4">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-8 border-t border-transparent pt-8">
            <!-- Left Column -->
            <div>
                <h3 class="text-2xl font-bold mb-4">CRPI</h3>
                <ul class="space-y-2 text-base font-playfair">
                    <li class="hover:text-slate-300">
                        <a href="/academic-papers">Academic Papers</a>
                    </li>
                    <li class="hover:text-slate-300">
                        <a href="/analysis">Analysis</a>
                    </li>
                    <li class="hover:text-slate-300">
                        <a href="/conference">Conference</a>
                    </li>
                    <li class="hover:text-slate-300"><a href="/events">Events</a></li>
                    <li class="hover:text-slate-300">
                        <a href="/fellowship">Fellowship</a>
                    </li>
                    <li class="hover:text-slate-300">
                        <a href="/programs">Programs</a>
                    </li>
                    <li class="hover:text-slate-300">
                        <a href="/scholarships">Scholarships</a>
                    </li>
                    <li class="hover:text-slate-300">
                        <a href="/uncategorized">Uncategorized</a>
                    </li>
                </ul>
            </div>

            <!-- Center Column -->
            <div>
                <h3 class="text-2xl font-bold mb-4">Conference</h3>
                <ul class="space-y-2 text-base font-playfair">
                    <li class="hover:text-slate-300">
                        <a href="/conference-schedule">Conference Schedule</a>
                    </li>
                    <li class="hover:text-slate-300">
                        <a href="/speakers">Speakers</a>
                    </li>
                    <li class="hover:text-slate-300">
                        <a href="/registration">Registration</a>
                    </li>
                </ul>
            </div>

            <!-- Right Column -->
            <div>
                <h3 class="text-2xl font-bold mb-4">Follow Us</h3>
                <div class="flex gap-4">
                    <a href="#" class="p-2 rounded-md">
                        <img src="./images/facebook.png" alt="facebook" />
                    </a>
                    <a href="#" class="p-2 rounded-md">
                        <img src="./images/linkedin.png" alt="linkedin" />
                    </a>
                    <a href="#" class="p-2 rounded-md">
                        <img src="./images/x.png" alt="x" />
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Mobile Menu Overlay -->
    <div id="mobile-menu"
        class="fixed inset-0 bg-black bg-opacity-60 z-50 hidden flex-col transition-opacity duration-300">
        <div id="mobile-menu-panel"
            class="bg-white w-full h-full p-8 flex flex-col gap-6 font-poppins relative fixed left-0 top-0 transform translate-x-full transition-transform duration-300 ease-in-out">
            <button id="close-mobile-menu" class="absolute top-4 right-4 text-3xl text-deep-blue">
                &times;
            </button>
            <a href="/" class="text-xl py-2 border-b border-gray-200">Home</a>
            <a href="./about-us.php" class="text-xl py-2 border-b border-gray-200">About Us</a>
            <!-- Programs Dropdown (mobile) -->
            <div>
                <a href="./programs.php"
                    class="flex items-center justify-between w-full text-xl py-2 border-b border-gray-200">
                    Programs
                    <img src="./icons/arrow-down.svg" alt="arrow-down" class="ml-2 w-5 h-5"
                        id="mobile-programs-toggle" />
                </a>
                <div id="mobile-programs-dropdown" class="pl-4 mt-2 hidden flex-col gap-4">
                    <a href="#" class="block py-1 text-base hover:text-slate-500">Research</a>
                    <a href="#" class="block py-1 text-base hover:text-slate-500">Academic Papers</a>
                    <a href="#" class="block py-1 text-base hover:text-slate-500">Analysis</a>
                    <a href="#" class="block py-1 text-base hover:text-slate-500">Center for Holistic International
                        Human Rights Law Praxis</a>
                    <a href="#" class="block py-1 text-base">Center for Land and Natural Resources Policy</a>
                    <a href="#" class="block py-1 text-base">Center for Constitution & Democratic Governance</a>
                </div>
            </div>
            <!-- Publications Dropdown (mobile) -->
            <div>
                <a href="/publication.php"
                    class="flex items-center justify-between w-full text-xl py-2 border-b border-gray-200">
                    Publications
                    <img src="./icons/arrow-down.svg" alt="arrow-down" class="ml-2 w-5 h-5"
                        id="mobile-publications-toggle" />
                </a>
                <div id="mobile-publications-dropdown" class="pl-4 mt-2 hidden flex-col gap-4">
                    <a href="#" class="block py-1 text-base hover:text-slate-500">Arts and Humanities, Public Health</a>
                    <a href="#" class="block py-1 text-base hover:text-slate-500">Development and Economic</a>
                    <a href="#" class="block py-1 text-base hover:text-slate-500">Education, Human Rights, and
                        Gender</a>
                    <a href="#" class="block py-1 text-base hover:text-slate-500">Environment, and Engineering</a>
                    <a href="#" class="block py-1 text-base hover:text-slate-500">Public Policy, Law and Diplomacy</a>
                    <a href="#" class="block py-1 text-base hover:text-slate-500">Others</a>
                </div>
            </div>
            <a href="/events.php" class="text-xl py-2 border-b border-gray-200">Events</a>
            <a href="/contact-us.php" class="text-xl py-2 border-b border-gray-200">Contact Us</a>
            <!-- Social icons -->
            <div class="flex gap-4 mt-6">
                <img src="./icons/pinterest.svg" alt="pinterest" class="w-6 h-6" />
                <img src="./icons/instagram.svg" alt="instagram" class="w-6 h-6" />
                <img src="./icons/twitter.svg" alt="twitter" class="w-6 h-6" />
                <img src="./icons/facebook.svg" alt="facebook" class="w-6 h-6" />
            </div>
        </div>
    </div>

    <script src="./assets/js/search.js"></script>
    <script src="./assets/js/slider.js"></script>
    <script src="./assets/js/burger-menu.js"></script>
</body>

</html>