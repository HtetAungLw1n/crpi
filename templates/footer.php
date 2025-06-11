    <!-- Footer Section -->
    <footer class="bg-deep-blue text-white py-8 md:py-12 px-8 md:p-10">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-8 border-t border-transparent pt-8">
            <!-- Left Column -->
            <div>
                <h3 class="text-2xl font-bold mb-4">CRPI</h3>
                <ul class="space-y-2 text-base font-notoserif">
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
                <ul class="space-y-2 text-base font-notoserif">
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
            class="bg-white w-full h-full p-8 flex flex-col gap-6 font-poppins fixed left-0 top-0 transform translate-x-full transition-transform duration-300 ease-in-out">
            <button id="close-mobile-menu" class="absolute top-4 right-4 text-3xl text-deep-blue">
                &times;
            </button>
            <a href="/" class="text-xl py-2 border-b border-gray-200">Home</a>
            <a href="/about-us.html" class="text-xl py-2 border-b border-gray-200">About Us</a>
            <!-- Programs Dropdown (mobile) -->
            <div>
                <button class="flex items-center justify-between w-full text-xl py-2 border-b border-gray-200"
                    id="mobile-programs-toggle">
                    Programs
                    <img src="./icons/arrow-down.svg" alt="arrow-down" class="ml-2 w-5 h-5" />
                </button>
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
                <button class="flex items-center justify-between w-full text-xl py-2 border-b border-gray-200"
                    id="mobile-publications-toggle">
                    Publications
                    <img src="./icons/arrow-down.svg" alt="arrow-down" class="ml-2 w-5 h-5" />
                </button>
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
            <a href="/events" class="text-xl py-2 border-b border-gray-200">Events</a>
            <a href="/contact-us" class="text-xl py-2 border-b border-gray-200">Contact Us</a>
            <!-- Social icons -->
            <div class="flex gap-4 mt-6">
                <img src="./icons/pinterest.svg" alt="pinterest" class="w-6 h-6" />
                <img src="./icons/instagram.svg" alt="instagram" class="w-6 h-6" />
                <img src="./icons/twitter.svg" alt="twitter" class="w-6 h-6" />
                <img src="./icons/facebook.svg" alt="facebook" class="w-6 h-6" />
            </div>
        </div>
    </div>

    <script src="../assets/js/search.js"></script>
    <script src="../assets/js/burger-menu.js"></script>
    </body>

    </html>