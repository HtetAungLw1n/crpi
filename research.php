<?php include './templates/header.php' ?>
<?php include './templates/nav.php' ?>

<!-- hero section  -->
<section class="w-full relative">
    <?php include './templates/second-nav.php' ?>

    <div class="bg-deep-blue font-playfair py-16 text-white text-center">
        <div class="text-4xl font-bold mb-4">Policy Action Research</div>
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
            <div class="flex flex-col md:flex-row items-start lg:items-center gap-2 border-r-2 border-gray-200 px-2">
                <img src="./icons/calendar-deep-blue-2.svg" alt="calendar">
                <div class="text-nowrap">January 20,2024</div>
            </div>
            <div class="flex flex-col md:flex-row items-start lg:items-center gap-2 px-2"><img
                    src="./icons/clock-deep-blue.svg" alt="clock">11:30
                pm</div>
            <div class="flex flex-col md:flex-row items-start lg:items-center gap-2 border-l-2 border-gray-200 px-2">
                <img src="./icons/category-name.svg" alt="category">Category Name
            </div>
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