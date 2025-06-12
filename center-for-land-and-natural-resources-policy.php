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
        <div class="text-xl md:text-3xl lg:text-4xl font-bold mb-2">Center for Land and Natural Resources Policy
        </div>
        <div class="text-md md:text-lg lg:text-xl font-notoserif">Home > Programs > Center for Land and Natural
            Resources Policy</div>
    </div>
</section>
<!-- hero section  -->

<!-- first  -->
<section class="container mx-auto px-4 py-20">

    <div class="text-4xl font-bold font-playfair">Center for Land and Natural Resources Policy</div>
    <div class="w-full mt-10">
        <div>
            Land and natural resources in Myanmar are central to the nation’s economy but also to the culture,
            identity,and livelihoods of its diverse peoples, to the power of the military and ethnic armed
            organizations, and topolitical and armed conflict.
        </div>
        <div>
            Recent research by BACI’s Center for Policy, Research, and Innovation (CRPI) has highlighted a shared
            view
            among stakeholders that it is vital to address issues related to land and resource governance in the
            current
            context of political upheaval. As democratic actors struggle for a federal democratic union, they need
            to
            think about how to replace the current centralized Government of Myanmar system of land and resource
            governance with a federal one rooted in respect for the rights of the people.
        </div>
        <div>
            In many parts of the country, also, land grabbing, illegal mining and logging, and other threats to land
            and
            natural resources have skyrocketed since the coup. And in areas controlled by resistance forces, there
            is a
            need to deliver good land and resource governance for the good of the people but also to shore up
            support
            for the democracy movement.
        </div>
        <div>
            A new Center for Land and Natural Resources Governance and Policy (CLNRP) that will become a leading
            institution to support Myanmar policy stakeholders in the area of land and natural resource management
            and
            governance. Its three main areas of work are research and analysis, teaching, and civic engagement.
        </div>
    </div>

    <div>
        <div class="text-deep-blue my-6 mt-10 text-2xl font-playfair font-semibold">Research and Analysis</div>
        <div class="my-6">The Center conducts research and analysis in the following areas:</div>
        <ul class="list-outside list-disc pl-6 font-semibold">
            <li>Stakeholder perspectives and engagement</li>
            <li>Federal land and resource governance</li>
            <li>Customary land tenure</li>
            <li>Land and resource policy development</li>
            <li>Land and natural resources in constitutions</li>
        </ul>
        <div class="mt-6">Research will primarily be based on remote interviews, desk research, and analysis of
            available data. All data and analysis will be policy oriented. The published research papers are
            available in the following.</div>
    </div>
</section>
<!-- first  -->

<!-- book section  -->
<section class="bg-deep-blue lg:p-8">
    <div class="container mx-auto flex flex-col lg:flex-row items-center justify-center h-full">

        <div class="lg:w-1/2 h-full">
            <img src="./images/land-governance-book.png" alt="bookPhoto" class="h-full">
        </div>
        <div class="lg:w-1/2 text-white pl-20 pb-20 lg:pl-0 md:pr-20 lg:pr-40 space-y-6">
            <div class="flex items-center gap-4">
                <img src="./icons/calendar.svg" alt="calender">
                <div class="text-gray-400">June 15, 2024</div>
            </div>
            <div class="text-xl lg:text-3xl font-semibold">Land Governance Reform in the context of political transition
                in Myanmar
            </div>
            <div class="text-gray-400">Executive summary</div>
            <button
                class="bg-[#5273FA] rounded-lg px-8 py-2 hover:bg-black transition-all duration-300 ease-in-out">Download</button>
        </div>
    </div>
</section>
<!-- book section  -->


<!-- text section  -->
<section class="container mx-auto px-4 py-20 ">

    <div class="space-y-4 border-b-2 border-gray-300 pb-20">
        <div>
            Prior to the military coup d'état on February 1, 2021, land reform was an important concern for a broad
            range of civil society and political actors in Myanmar. In the immediate aftermath of the coup, however,
            interest in land issues declined precipitously due to more pressing political and humanitarian concerns.
            Since then, as it has become apparent that the political struggle will be long and drawn out, it has been
            recognized that enduring political-economic issues, including land, will need to be addressed in the current
            moment. However, there has been little public discussion of how to work on land issues, due to security
            concerns and other priorities. Recognizing this lack of public discussion, our team of researchers
            affiliated with the Center for Research, Policy, and Innovation (CRPI) of the Burmese American Community
            Institute (BACI) carried out research aimed at identifying and analyzing different perspectives on how to
            address land issues in Myanmar in the current conjuncture as well as in the context of a potential future
            political transition.
        </div>
        <div>
            Research was conducted using qualitative methods, with data collected almost exclusively through online,
            semi-structured interviews. We interviewed a range of “policy stakeholders”, actors who have played a
            significant role in land governance reform and are likely continue doing so in the future. We also
            interviewed “key informants” - individuals who, through their positions, relationships, and experience,
            could provide valuable information to address the research questions.
        </div>
        <div>
            In discussions about the pre-coup land governance system, we found that interviewees were highly critical of
            the Government of Myanmar (GoM) system, with their critiques potentially sharpened by the new political
            context. Additionally, they expressed appreciation of the approaches taken in ethnic land policies. One
            prevalent criticism of the GoM system was its excessive centralization, indicating a lack of devolution of
            powers to the states, regions, and ultimately, the people. Many interviewees objected to the Union being the
            ultimate owner of all land and highlighted the absence of recognition of customary tenure. Interviewees
            explained that the GoM system facilitated investment in land and natural resources, leading to land grabbing
            and the dispossession of local communities without their consent. Displaced people lost their land, crony
            companies acquired land without using it productively, and those attempting to protect their land rights
            were criminalized. Many past land grabs had not been resolved and attempts to address land-related issues
            through the legal system had often led to further losses. Additionally, concerns were raised about the
            inadequate protection of forests. Critiques extended to the complexity of the GoM land governance system,
            which made protecting land rights even more challenging. Interviewees complained about the land cadaster and
            raised concerns about corruption in land management. Several interviewees criticized the influential role of
            the military in the land sector, noting that it possessed large areas of land confiscated under previous
            regimes.
        </div>
        <div>
            There were significant variations in perspectives on the political changes taking place, visions for a
            future system of land governance, and ideas about specific ways in which laws and institutions should be
            changed, alongside some areas of convergence. There was agreement among interviewees that the military junta
            must be overthrown
        </div>
        <div>
            and that a new political system must be instituted. There was a general consensus that federal democracy is
            the desired outcome of a political transition, although there were disagreements on the specific features of
            this envisioned system. Interviewees conveyed uncertainty regarding the timing and nature of any potential
            transition.
        </div>
        <div>
            Interviewees generally expressed the view that a future land governance system should be federal, in line
            with their visions for the political future of Myanmar. They agreed that there will need to be laws and
            institutions at the federal level but disagreed on how extensive they should be. Many interviewees expressed
            support for broad principles that a future system should embody, emphasizing a people- and
            community-centered approach. They felt it should protect Indigenous Peoples’ land rights (especially their
            customary tenure systems), institutionalize the principle of free, prior and informed consent (FPIC), and
            follow international standards. It was noted that existing ethnic land policies served as visions for future
            land governance, but interviewees generally did not articulate specific visions for land governance in
            Bamar-majority regions where similar policies are absent.
        </div>
        <div>
            For the most part, interviewees advocated for a significant transformation of the existing system to
            dispense with the problematic laws and institutions that have robbed people of their rights and access to
            land. However, there was some disagreement regarding how much of a break from the past is necessary. Some
            interviewees wanted to create a completely new legal system, seeking to either completely replace the
            current GoM system of laws or radically transform it. On the other hand, a smaller number of interviewees
            believed that the current GoM legal system could be effectively reformed. The latter highlighted potential
            risks associated with abolishing it altogether and emphasized the considerable effort invested in
            constructing the current system. There were contrasting views on the future of land- related institutions.
            Some interviewees asserted the need for their complete redesign, especially at the state level, and some
            suggested that the current institutional components could be reorganized into new structures rather than
            creating entirely new institutions.
        </div>
        <div>
            Almost all interviewees shared a common view that specific actions can be taken in the current moment
            concerning policy and on-the-ground initiatives, even amidst numerous pressing political and humanitarian
            issues. However, diverse perspectives on policy development emerged among interviewees, highlighting the
            challenges associated with crafting forward-looking policies. Some interviewees expressed reservations about
            policy work on land, believing that the current moment might not be opportune for initiating it. On the
            contrary, many others emphasized the importance of commencing policy work now and were eager to participate.
        </div>
        <div>
            Despite diverse perspectives on the timing of policy development, active efforts are already underway. Land
            is included in four articles within the Federal Democracy Charter and the National Unity Government (NUG)
            has established institutions and formulated policies for the governance and management of natural resources
            which partially address land issues. Interviewees held varying opinions regarding the potential for engaging
            with NUG on land policy work, with some expressing concerns about the nature of NUG’s engagement with civil
            society. However, there was a general
        </div>
        <div>
            consensus that the National Unity Consultative Council (NUCC) is a legitimate space where land issues could
            potentially be addressed, although it is not currently playing such a role. Work on drafting a Transitional
            Constitution is also moving forward, and it is anticipated to include provisions related to land. However,
            as of now, there have reportedly been no discussions regarding such provisions. Ethnic Resistance
            Organizations (EROs, also called Ethnic Armed Organizations (EAOs)), state-level consultative councils, and
            civil society organizations (CSOs) continue to work on ethnic land policies. One interviewee said that land
            should be addressed in state-level charters and constitutions, and several interviewees mentioned that they
            expected new state-level bodies to begin work on land administration in the near future. There is no similar
            work on land policy development being done in the Bamar-majority regions.
        </div>
        <div>
            Regarding work on land on the ground, some interviewees felt that it was possible in People’s Defense Force
            (PDF)-controlled areas and even in some State Administration Council (SAC)-controlled areas. As interim
            administrative bodies form at the local level, it is likely that they will need to take on some land
            management functions. Two interviewees described bottom-up land use planning as key to development of a
            future land governance system. Some interviewees highlighted the immediate need to deal with ongoing cases
            of land grabbing and mining, which have increased in many areas following the coup. Some said that
            documentation of customary tenure and land governance practice on the ground should be undertaken. Others
            highlighted the importance of addressing immediate needs, such as by providing humanitarian support, but
            they generally felt that this could happen alongside land-related work.
        </div>
        <div>
            Various other proposed short-term measures fall within the scope of dialogue and capacity building. Many
            interviewees expressed the view that dialogue would be a useful next step; one specific area where some
            interviewees saw the need for dialogue is on responsible investment and alternative models of development
            that do not require a role for big business. Learning from other countries to help with policy development
            for Myanmar was also seen as a good idea. While the ability of CSOs to operate varies across the country,
            many continue to be active, often at considerable security risk. Many interviewees talked about CSOs playing
            an important role in short- term initiatives.
        </div>
        <div>
            Based upon the insights from interviewees and our own analysis and perspectives, we offer six
            recommendations:

            <ul class="list-outside list-decimal pl-8 mt-8 space-y-2">
                <li>
                    <span class="font-semibold">
                        Transform the current land governance system:
                    </span> It is crucial to pursue land policy development at this juncture to establish a foundational
                    framework for alternative land governance systems in the future.
                </li>
                <li>
                    <span class="font-semibold">
                        Prioritize land policy development:
                    </span> The existing GoM governance system must be
                    replaced with one that is federal and democratic and builds on existing ethnic land policies, to
                    align with the objectives of a diverse range of actors. This is an ideal moment to pursue such
                    action, in line with the broader revolution.
                </li>
                <li>
                    <span class="font-semibold">
                        Support local-level action:
                    </span> Encourage and support actions at the local level to safeguard and manage land. Consider the
                    feasibility of such actions within the prevailing security context.
                </li>
                <li>
                    <span class="font-semibold">
                        Consider federal land governance in Bamar-majority regions:
                    </span> Extend considerations for the future of federal land governance beyond ethnic states to
                    include Bamar-majority regions. Address the challenges posed by the entrenched centralized system of
                    the GoM.
                </li>
                <li>
                    <span class="font-semibold">
                        Build capacities:
                    </span> Provide support for the capacities of key actors at different levels involved in land
                    management and governance, which is essential for effective and sustainable land governance.
                </li>
            </ul>
            <div class="mt-8">
                The center closely collaborate with the <a href="#" class="text-blue-400 underline">NUUM</a>. Visit <a
                    href="#" class="text-blue-400 underline">CLNRP page</a> for more information on
                course and
                academic programs it offers.
            </div>
        </div>
    </div>

    <?php include './components/relatedNewsAndPrograms.php'; ?>
</section>
<!-- text section  -->


<?php include './templates/footer.php'; ?>