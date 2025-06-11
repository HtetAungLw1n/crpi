<?php
// Initialize variables
$month = isset($_GET['month']) ? intval($_GET['month']) : date('n');
$year = isset($_GET['year']) ? intval($_GET['year']) : date('Y');
$firstDayOfMonth = mktime(0, 0, 0, $month, 1, $year);
$daysInMonth = date('t', $firstDayOfMonth);
$monthName = date('F', $firstDayOfMonth);

// Adjust month/year for navigation
$prevMonth = $month - 1;
$nextMonth = $month + 1;
$prevYear = $year;
$nextYear = $year;

if ($prevMonth < 1) {
    $prevMonth = 12;
    $prevYear--;
}
if ($nextMonth > 12) {
    $nextMonth = 1;
    $nextYear++;
}

// Weekday offset
$startDay = date('w', $firstDayOfMonth);
?>


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
                    class="dropdown px-10 text-xl h-full flex items-center hover:bg-white hover:text-blacktransition duration-500 ease-in-out">
                    <a href="/programs.php" class="flex items-center gap-4">
                        Programs <img src="./icons/arrow-down.svg" alt="arrow-down" />
                    </a>

                    <!-- program dropdown content -->
                    <div class="absolute top-full right-0 w-screen bg-white text-black shadow-lg dropdown-content z-30">
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
                    <div class="absolute top-full right-0 w-screen bg-white text-black shadow-lg dropdown-content z-30">
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
        <div class="text-4xl font-bold mb-2">Events</div>
        <div class="text-xl">Home > Events</div>
    </div>
</section>
<!-- hero section  -->

<!-- main -->
<section class="container mx-auto px-4 md:px-0 py-20">
    <!-- fliter component -->
    <div class="w-full flex flex-col lg:flex-row lg:justify-center items-start lg:items-center gap-4">
        <div class="w-full lg:w-3/5 flex items-center gap-2 lg:gap-4">
            <div
                class="text-white px-8 lg:px-12 py-2 lg:py-4 bg-deep-blue rounded-full text-sm  md:text-xl font-semibold cursor-pointer">
                Upcoming
                Events</div>
            <div
                class="text-white px-8 lg:px-12 py-2 lg:py-4 bg-gray-300 rounded-full text-sm  md:text-xl font-semibold cursor-pointer">
                Current Events
            </div>
            <div
                class="text-white px-8 lg:px-12 py-2 lg:py-4 bg-gray-300 rounded-full text-sm  md:text-xl font-semibold cursor-pointer">
                Past
                Events
            </div>
        </div>
        <div class="w-full lg:w-2/5 flex items-center gap-4">
            <div class="flex  justify-between items-center bg-gray-300 w-full rounded-xl overflow-hidden">
                <input type="email" placeholder="Search ..."
                    class="sm:flex-1 px-4 py-3 text-black focus:outline-none bg-gray-300" />
                <button class="bg-deep-blue text-white px-6 py-3 font-semibold hover:bg-[#004c90] transition">
                    <img src="./icons/search-white.svg" alt="search-icon" class="h-8 w-8">
                </button>
            </div>
            <div class="bg-gray-200 rounded w-fit p-4 cursor-pointer relative" onclick="toggleCalendar()">
                <img src="./icons/fliter.svg" alt="fliter">

                <!-- Calendar Div (hidden by default) -->
                <div id="calendar" class="hidden absolute bg-white rounded-lg shadow-lg p-6 w-80 z-50 right-0 top-14">
                    <!-- You can put your calendar HTML here -->
                    <!-- Header -->
                    <div class="flex justify-between items-center mb-4">
                        <span class="text-lg font-semibold"><?= $monthName ?></span>
                        <div class="flex items-center space-x-2">
                            <a href="?month=<?= $prevMonth ?>&year=<?= $prevYear ?>"
                                class="calendarBtn text-xl font-bold hover:text-blue-500">&lt;</a>
                            <a href="?month=<?= date('n') ?>&year=<?= date('Y') ?>"
                                class="calendarBtn text-lg text-pink-700  px-3 py-1 rounded">Today</a>
                            <a href="?month=<?= $nextMonth ?>&year=<?= $nextYear ?>"
                                class="calendarBtn text-xl font-bold hover:text-blue-500">&gt;</a>
                        </div>

                    </div>

                    <div class="grid grid-cols-7 gap-2 text-center">
                        <div class="font-bold">SU</div>
                        <div class="font-bold">MO</div>
                        <div class="font-bold">TU</div>
                        <div class="font-bold">WE</div>
                        <div class="font-bold">TH</div>
                        <div class="font-bold">FR</div>
                        <div class="font-bold">SA</div>

                        <!-- Days (example) -->
                        <?php
                        for ($i = 1; $i <= 31; $i++) {
                            echo "<div class='h-10 w-10 flex items-center justify-center hover:bg-deep-blue hover:text-white cursor-pointer rounded-full'>$i</div>";
                        }
                        ?>
                    </div>
                </div>
            </div>


        </div>
    </div>



    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 mt-20 gap-8">

        <!-- card  -->
        <a href="/programs-3" class="hover:cursor-pointer relative">
            <img src="./images/speacker-gp.png" alt="speaker" class="absolute -top-3 left-6 z-30" />
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
                    <div class="text-deep-blue text-xl md:text-2xl font-bold font-playfair mt-4">
                        Call for Papers – 3rd Spring Flowers International Conference
                        on Myanmar
                    </div>
                </div>
            </div>
        </a>

        <!-- card -->
        <a href="/programs-3" class="hover:cursor-pointer relative">
            <img src="./images/speacker-gp.png" alt="speaker" class="absolute -top-3 left-6 z-30" />
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
                    <div class="text-deep-blue text-xl md:text-2xl font-bold font-playfair mt-4">
                        Call for Papers – 3rd Spring Flowers International Conference
                        on Myanmar
                    </div>
                </div>
            </div>
        </a>

        <!-- card -->
        <a href="/programs-3" class="hover:cursor-pointer relative">
            <img src="./images/speacker-gp.png" alt="speaker" class="absolute -top-3 left-6 z-30" />
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
                    <div class="text-deep-blue text-xl md:text-2xl font-bold font-playfair mt-4">
                        Call for Papers – 3rd Spring Flowers International Conference
                        on Myanmar
                    </div>
                </div>
            </div>
        </a>

        <!-- card  -->
        <a href="/programs-3" class="hover:cursor-pointer relative">
            <img src="./images/speacker-gp.png" alt="speaker" class="absolute -top-3 left-6 z-30" />
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
                    <div class="text-deep-blue text-xl md:text-2xl font-bold font-playfair mt-4">
                        Call for Papers – 3rd Spring Flowers International Conference
                        on Myanmar
                    </div>
                </div>
            </div>
        </a>

        <!-- card -->
        <a href="/programs-3" class="hover:cursor-pointer relative">
            <img src="./images/speacker-gp.png" alt="speaker" class="absolute -top-3 left-6 z-30" />
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
                    <div class="text-deep-blue text-xl md:text-2xl font-bold font-playfair mt-4">
                        Call for Papers – 3rd Spring Flowers International Conference
                        on Myanmar
                    </div>
                </div>
            </div>
        </a>

        <!-- card  -->
        <a href="/programs-3" class="hover:cursor-pointer relative">
            <img src="./images/speacker-gp.png" alt="speaker" class="absolute -top-3 left-6 z-30" />
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
                    <div class="text-deep-blue text-xl md:text-2xl font-bold font-playfair mt-4">
                        Call for Papers – 3rd Spring Flowers International Conference
                        on Myanmar
                    </div>
                </div>
            </div>
        </a>

        <!-- card  -->
        <a href="/programs-3" class="hover:cursor-pointer relative">
            <img src="./images/speacker-gp.png" alt="speaker" class="absolute -top-3 left-6 z-30" />
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
                    <div class="text-deep-blue text-xl md:text-2xl font-bold font-playfair mt-4">
                        Call for Papers – 3rd Spring Flowers International Conference
                        on Myanmar
                    </div>
                </div>
            </div>
        </a>

        <!-- card -->
        <a href="/programs-3" class="hover:cursor-pointer relative">
            <img src="./images/speacker-gp.png" alt="speaker" class="absolute -top-3 left-6 z-30" />
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
                    <div class="text-deep-blue text-xl md:text-2xl font-bold font-playfair mt-4">
                        Call for Papers – 3rd Spring Flowers International Conference
                        on Myanmar
                    </div>
                </div>
            </div>
        </a>

        <!-- card  -->
        <a href="/programs-3" class="hover:cursor-pointer relative">
            <img src="./images/speacker-gp.png" alt="speaker" class="absolute -top-3 left-6 z-30" />
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
                    <div class="text-deep-blue text-xl md:text-2xl font-bold font-playfair mt-4">
                        Call for Papers – 3rd Spring Flowers International Conference
                        on Myanmar
                    </div>
                </div>
            </div>
        </a>

        <!-- card  -->
        <a href="/programs-3" class="hover:cursor-pointer relative">
            <img src="./images/speacker-gp.png" alt="speaker" class="absolute -top-3 left-6 z-30" />
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
                    <div class="text-deep-blue text-xl md:text-2xl font-bold font-playfair mt-4">
                        Call for Papers – 3rd Spring Flowers International Conference
                        on Myanmar
                    </div>
                </div>
            </div>
        </a>

        <!-- card -->
        <a href="/programs-3" class="hover:cursor-pointer relative">
            <img src="./images/speacker-gp.png" alt="speaker" class="absolute -top-3 left-6 z-30" />
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
                    <div class="text-deep-blue text-xl md:text-2xl font-bold font-playfair mt-4">
                        Call for Papers – 3rd Spring Flowers International Conference
                        on Myanmar
                    </div>
                </div>
            </div>
        </a>

        <!-- card  -->
        <a href="/programs-3" class="hover:cursor-pointer relative">
            <img src="./images/speacker-gp.png" alt="speaker" class="absolute -top-3 left-6 z-30" />
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
                    <div class="text-deep-blue text-xl md:text-2xl font-bold font-playfair mt-4">
                        Call for Papers - 3rd Spring Flowers International Conference
                        on Myanmar
                    </div>
                </div>
            </div>
        </a>

    </div>



    <?php include './templates/pagination.php'; ?>
</section>
<!-- main -->
<script src="../assets/js/toggleCalendar.js"></script>
<?php include './templates/footer.php'; ?>