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
                    class="dropdown px-10 text-xl h-full flex items-center hover:bg-white hover:text-black hover:text-black transition duration-500 ease-in-out">
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
        <div class="text-4xl font-bold mb-2">About Us</div>
        <div class="text-xl">Home > About Us</div>
    </div>
</section>
<!-- hero section  -->

<!-- main  -->
<section>
    <div class="container mx-auto p-10 font-playfair">
        <div class="flex md:flex-row flex-col justify-between gap-10">
            <div class="flex flex-col md:w-1/2">
                <div class="text-3xl font-bold">About CRPI</div>
                <div class="text-2xl mt-4">
                    About Center for Research, Policy and Innovation
                </div>
                <div class="mt-8 text-lg indent-8 text-justify">
                    The Center for Research, Policy and Innovation (CRPI) promotes
                    collaborative research and action projects with local researchers,
                    Burmese scholars, international colleagues, and stakeholders
                    engaged in work related to the Burmese American community, Asian
                    Americans, Myanmar, Southeast Asia, and the diaspora communities.
                    The goal of the CRPI is to further innovative research activities,
                    policy, and development-oriented projects that align with BACI’s
                    vision and mission for advocacy, education, and service.
                </div>
            </div>
            <div class="md:w-1/2 flex justify-end">
                <img src="./images/about-us.png" alt="about" class="h-96 rounded-xl object-cover" />
            </div>
        </div>
        <div class="text-lg mt-8">
            Established in August 2020, the CRPI builds upon nine years of
            impactful research programming through BACI’s Upward College Summer
            Scholars program. The CRPI is expanding its partner network of
            researchers, scholars, and academic and professional institutions. 
            The Center’s vision is to advance community-driven research and
            strengthen community-university collaborations. 
        </div>

        <div class="text-lg">
            <div class="text-2xl text-deep-blue font-bold mt-12">
                CRPI Partners and Collaborators
            </div>
            <div class="my-4">
                Researchers and Scholars from the Following Institutions among
                others have either affiliated, contributed to, or currently member
                of the CRPI:
            </div>
            <ul class="list-disc list-inside font-semibold space-y-2">
                <li>Ball State University</li>
                <li>Boston University</li>
                <li>Brandeis University</li>
                <li>Harvard University</li>
                <li>Indiana University Bloomington</li>
                <li>Indiana University School of Medicine</li>
                <li>Indiana University School of Social Work</li>
                <li>IUPUI</li>
                <li>National University of Singapore</li>
                <li>Purdue University</li>
                <li>Purdue University Fort Wayne</li>
                <li>Thomas P. Miller & Associates</li>
                <li>Tufts University - The Fletcher School at Tufts University</li>
                <li>University of Indianapolis</li>
                <li>University of Lynchburg</li>
                <li>University of Pennsylvania and more</li>
            </ul>
            <div class="my-8">
                The Center's collaborative network of local and global scholars and
                leaders is growing. Mr. Elaisa Vahnie, MPA, Executive Director of
                BACI, leads the CRPI joined by Jessica Euna Lee, PhD, LSW, Assistant
                Professor at Indiana University School of Social Work, as
                co-director of the Center, Lian Hnin, MA, as the Associate Director
                and Lian Sang, MPH, Programs Director of BACI, as CRPI Research
                Support.
            </div>
            <div>
                CRPI research affiliates come from different backgrounds, among
                others, they include Dr. Ye Mon, Harvard University, Mary Encobo,
                MSEd, Purdue University Fort Wayne, Ei Ei Hlaing, Ph.D, Associate
                Professor, the University of Lynchburg, Maureen Hoffmann, PhD,
                Thomas P. Miller & Associates, Minyoung Lim, MSW, Indiana University
                School of Social Work, Friar Pious Malliar Bellian, Indiana
                University School of Social Work, Megan S. McHenry, MD, MS, FAAP,
                Assistant Professor of Pediatrics, Indiana University School of
                Medicine, Mengxi Zhang, PhD, Assistant Professor of Health Science,
                Ball State University, and Xiang Zhou, PhD, Assistant Professor in
                Counseling Psychology, Purdue University, and others.
            </div>
            <div class="my-8">
                Anyone interested in a collaborative research project with the CRPI
                should contact us at:
                <a href="#" class="text-blue-500">info@thebaci.org</a>
            </div>
        </div>
    </div>
</section>
<!-- main  -->


<?php include './templates/footer.php'; ?>