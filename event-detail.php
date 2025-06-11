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
        <div class="text-4xl font-bold mb-2">Events</div>
        <div class="text-xl">Home > Events > Call for Papers – 3rd Spring Flowers International Conference on Myanmar
        </div>
    </div>
</section>
<!-- hero section  -->

<!-- main  -->
<section class="container mx-auto px-4 py-20">
    <div class="text-3xl font-playfair font-bold">
        Call for Papers - 3rd Spring Flowers International Conference on Myanmar
    </div>

    <div class="flex items-start flex-col lg:flex-row gap-4 h-fit lg:h-[90vh] mt-8">
        <div class="flex flex-col gap-4 w-full lg:w-[70%] h-full">
            <img src="./images/event-detail.png" alt="photo" class="h-[91%] w-full object-cover rounded-lg">
            <button class="w-full rounded-lg text-center bg-deep-blue py-4 text-white font-playfair text-xl">Download
                Call for Papers in PDF
                format here →</button>
        </div>
        <div class="w-full lg:w-[30%] h-full shadow-lg border-2 border-gray-300 rounded-lg font-playfair p-4">
            <div class="text-deep-blue flex justify-between border-b-2 border-gray-200 pb-6">
                <p class="text-2xl font-bold">Event Detail</p>
                <img src="./icons/star.svg" alt="star">
            </div>

            <div class="flex flex-col justify-between h-[94%] p-4">

                <div class="flex items-center border-b-2 border-gray-200 py-4 gap-4">
                    <img src="./icons/calendar-deep-blue.svg" alt="calendar-deep-blue">
                    <div class="flex flex-col">
                        <p class="text-lg font-semibold">Start Date:</p>
                        <p>February 7, 2024 - 8:00 am</p>
                    </div>
                </div>
                <div class="flex items-center border-b-2 border-gray-200 py-4 gap-4">
                    <img src="./icons/calendar-deep-blue.svg" alt="calendar-deep-blue">
                    <div class="flex flex-col">
                        <p class="text-lg font-semibold">End Date:</p>
                        <p>February 10, 2024 - 11:30 pm</p>
                    </div>
                </div>
                <div class="flex items-center border-b-2 border-gray-200 py-4 gap-4">
                    <img src="./icons/organizer.svg" alt="calendar-deep-blue">
                    <div class="flex flex-col">
                        <p class="text-lg font-semibold">Orgainzer</p>
                        <p>Center for Research, Policy and Innovation</p>
                    </div>
                </div>
                <div class="flex items-center border-b-2 border-gray-200 py-4 gap-4">
                    <img src="./icons/event-category.svg" alt="event-category">
                    <div class="flex flex-col">
                        <p class="text-lg font-semibold">Event Category</p>
                        <p>Research and Scholarships</p>
                    </div>
                </div>
                <div class="flex items-center border-b-2 border-gray-200 py-4 gap-4">
                    <img src="./icons/event-category.svg" alt="event-category">
                    <div class="flex flex-col">
                        <p class="text-lg font-semibold">Event Tags</p>
                        <p>February 7, 2024 - 8:00 am</p>
                    </div>
                </div>
                <div class="flex items-center py-4 gap-4">
                    <img src="./icons/location.svg" alt="location">
                    <div class="flex flex-col">
                        <p class="text-lg font-semibold">Venue</p>
                        <p>University of IndianapolisIN United States </p>
                    </div>
                </div>

                <img src="./images/basemap.png" alt="">
            </div>

        </div>
    </div>

    <!-- text area  -->
    <div class="w-full mt-10">
        <p class="mb-4">The Center for Research, Policy and Innovation (CRPI), in collaboration with its partners, is
            organizing an
            international conference with the objectives of:</p>
        <ol class="list-decimal list-inside">
            <li>
                Promoting critical analysis and a deeper understanding of the challenges Myanmar (Burma) is currently
                facing and approaches to building a new Myanmar</li>
            <li>
                Identifying challenges and opportunities for responding in a unified way to the conflict in Myanmar</li>
            <li>
                Fostering dialogue and debate among stakeholders from diverse backgrounds, including elected officials
                of Myanmar, members of the international community, CSOs, human rights groups, media, academics, etc.
                The program will include:
                <ul class="list-disc list-inside">
                    <li>Expert panels</li>
                    <li>Panel presentations of academic papers and</li>
                    <li>Roundtable Discussions</li>
                    <li>Keynote speech</li>
                </ul>
            </li>
        </ol>

        <p class="mt-10">The full program is forthcoming.</p>
        <p class="mt-8">Expert panels are expected to cover the following topics: conflict in Myanmar, humanitarian
            assistance, provision of public goods and services, health, education, constitutional and institutional
            reform, and the role of the international community in change in Myanmar.</p>
        <p class="mt-8">We are inviting scholars and researchers to submit papers to present in panel sessions. Topics
            for papers and panels may include but are not limited to the following, in the context of Myanmar:</p>
        <ul class="list-disc mt-8 list-inside">
            <li>Education</li>
            <li>Business and Economy</li>
            <li>Culture, Society, Language, and Religion</li>
            <li>Environment, Climate Change, Land, Wild Life and Natural Resources</li>
            <li>Gender and Equity</li>
            <li>Resolution, Conflict and Repression</li>
            <li>Good Governance, Rule of Law and Peace</li>
            <li>
                Human Rights, Law and Justice</li>
            <li>Public Health and Well-being</li>
            <li>Migration and IDPs</li>
            <li>International Relations and Humanitarian Crisis</li>
            <li>Industry, Infrastructure and Innovation</li>
        </ul>
        <p class="mt-8">Guidelines for submission of abstracts:</p>
        <ol class="mt-8 list-decimal list-inside">
            <li>Abstracts must be 200-250 words in length, in English.</li>
            <li>Abstracts should be submitted via the application form or scan the QR code attached on the next page.
            </li>
            <li>The deadline for submission of abstracts is January 7, 2024. </li>
            <li>Notification of acceptance of abstracts will be given by January 15, 2022.</li>
            <li>Full papers should be 5,000-10,000 words in length, in English APA Style. Submission of the full papers
                by January 31, 2024 to the email address.</li>
        </ol>
        <p class="mt-8">Conference website, co-hosts, registration, etc. to be announced later. For general questions,
            contact: <a href="#" class="text-blue-400">info@thebact.org</a></p>
    </div>

    <!-- form  -->
    <div class="bg-[#F5F5F5] w-full rounded-2xl shadow-xl mt-10 p-10 lg:p-20">

        <form action="upload.php" method="POST" enctype="multipart/form-data">

            <!-- inputs  -->
            <div class="grid grid-cols-6 gap-8">
                <div class="col-span-3">
                    <label for="first-name" class="block mb-2">First Name <span class="text-red-700">*</span></label>
                    <input type="text" class="border-2 border-gray-200 rounded-lg p-4 w-full" name="first-name">
                </div>
                <div class="col-span-3">
                    <label for="last-name" class="block  mb-2">Last Name</label>
                    <input type="text" class="border-2 border-gray-200 rounded-lg p-4 w-full" name="last-name">
                </div>
                <div class="col-span-6">
                    <label for="email" class="block mb-2">Email <span class="text-red-700">*</span></label>
                    <input type="text" class="border-2 border-gray-200 rounded-lg p-4 w-full" name="email">
                </div>
                <div class="col-span-6">
                    <label for="phone-number" class="block  mb-2">Phone Number<span
                            class="text-red-700">*</span></label>
                    <input type="text" class="border-2 border-gray-200 rounded-lg p-4 w-full" name="phone-number">
                </div>
                <div class="col-span-6">
                    <label for="address-line-1" class="block mb-2">Address Line 1</label>
                    <input type="text" class="border-2 border-gray-200 rounded-lg p-4 w-full" name="address-line-1">
                </div>
                <div class="col-span-6">
                    <label for="address-line-2" class="block mb-2">Address Line 2</label>
                    <input type="text" class="border-2 border-gray-200 rounded-lg p-4 w-full" name="address-line-2">
                </div>
                <div class="col-span-2">
                    <label for="city" class="block mb-2">City</label>
                    <input type="text" class="border-2 border-gray-200 rounded-lg p-4 w-full" name="city">
                </div>
                <div class="col-span-2">
                    <label for="state" class="block  mb-2">State</label>
                    <input type="text" class="border-2 border-gray-200 rounded-lg p-4 w-full" name="state">
                </div>
                <div class="col-span-2">
                    <label for="zip-code" class="block mb-2">Zip Code</label>
                    <input type="text" class="border-2 border-gray-200 rounded-lg p-4 w-full" name="zip-code">
                </div>
            </div>

            <!-- checkbox inputs  -->
            <div>
                <div class="text-[#5273FA] my-6 mt-10 text-2xl">Departments of Interest</div>

                <div class="flex lg:flex-row flex-col items-start w-full">
                    <div class="w-full lg:w-1/2">
                        <div>
                            <input type="checkbox" name="education" id="education">
                            <label for="education" class="ml-4">Education</label>
                        </div>
                        <div>
                            <input type="checkbox" name="business" id="business">
                            <label for="education" class="ml-4">Business and Economy</label>
                        </div>
                        <div>
                            <input type="checkbox" name="society" id="society">
                            <label for="education" class="ml-4">Society, Culture, Language, and Religion</label>
                        </div>
                        <div>
                            <input type="checkbox" name="environment" id="environment">
                            <label for="education" class="ml-4">Environment, Climate Change, Land, Wild Life and Natural
                                Resources</label>
                        </div>
                        <div>
                            <input type="checkbox" name="gender" id="gender">
                            <label for="education" class="ml-4">Gender and Equity</label>
                        </div>
                        <div>
                            <input type="checkbox" name="gender" id="gender">
                            <label for="education" class="ml-4">Gender and Equity</label>
                        </div>
                        <div>
                            <input type="checkbox" name="resoluton" id="resoluton">
                            <label for="education" class="ml-4">Resolution, Conflict and Repression</label>
                        </div>
                        <div>
                            <input type="checkbox" name="governance" id="governance">
                            <label for="education" class="ml-4">Good Governance, Rule of Law and Peace</label>
                        </div>
                    </div>

                    <div class="w-full lg:w-1/2">
                        <div>
                            <input type="checkbox" name="human-right" id="human-right">
                            <label for="education" class="ml-4">Human Rights, Law and Justice</label>
                        </div>
                        <div>
                            <input type="checkbox" name="public-health" id="public-health">
                            <label for="education" class="ml-4">Public Health and Well-being</label>
                        </div>
                        <div>
                            <input type="checkbox" name="migration" id="migration">
                            <label for="education" class="ml-4">Migration and IDPs</label>
                        </div>
                        <div>
                            <input type="checkbox" name="international" id="international">
                            <label for="education" class="ml-4">International Relations and Humanitarian Crisis</label>
                        </div>
                        <div>
                            <input type="checkbox" name="industry" id="industry">
                            <label for="education" class="ml-4">Industry, Infrastructure and Innovation</label>
                        </div>
                        <div>
                            <input type="checkbox" name="other" id="other">
                            <label for="education" class="ml-4">Other</label>
                        </div>
                    </div>
                </div>

            </div>

            <!-- image input  -->
            <div>
                <div class="text-[#5273FA] my-6 mt-10 text-2xl">Abstract</div>
                <div class="flex items-center justify-center border-2 border-dashed border-gray-400 rounded-lg p-8 text-center hover:bg-gray-100 cursor-pointer"
                    onclick="document.getElementById('fileInput').click()">
                    <div>
                        <img src="./icons/image-input.svg" alt="image-input" class="w-20 h-20 mx-auto">
                        <p class="my-4 text-xl font-semibold">Click or drag files to this area to upload.</p>
                        <p class="text-lg text-gray-500">You can upload up to 2 files.</p>
                    </div>
                </div>
                <input id="fileInput" type="file" name="files[]" accept="application/pdf, image/*" multiple
                    class="hidden" onchange="handleFileSelection(event)">
                <div id="fileList" class="text-sm text-gray-700"></div>
            </div>

            <button type="submit"
                class="w-full bg-deep-blue hover:bg-blue-800 text-white text-lg font-semibold py-4 rounded-lg mt-14 transition-all duration-200 ease-in-out">
                Submit
            </button>
        </form>
    </div>
</section>
<!-- main  -->


<script src="./assets/js/event-detail-form.js"></script>

<?php include './templates/footer.php'; ?>