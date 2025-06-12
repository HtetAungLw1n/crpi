<?php include './templates/header.php' ?>
<?php include './templates/nav.php' ?>

<!-- hero section  -->
<section class="w-full relative">
    <?php include './templates/second-nav.php' ?>

    <div class="bg-deep-blue font-playfair py-16 text-white text-center">
        <div class="text-xl md:text-3xl lg:text-4xl font-bold mb-4">Registration
        </div>
        <div class="text-md md:text-lg lg:text-xl font-notoserif">Home > Registration for Spring Flowers International
            Conference on Myanmar Feb 8 to 12, 2023
        </div>
    </div>
</section>
<!-- hero section  -->

<!-- main  -->
<section class="container mx-auto px-4 py-20">

    <div class="border-b-2 border-gray-300 pb-20">
        <img src="./images/slider2.png" alt="img" class="w-full object-cover">

        <div class="font-notoserif">
            <div class="text-xl lg:text-4xl font-bold font-playfair my-8">Registration for Spring Flowers International
                Conference on Myanmar Feb 8 to 12, 2023</div>

            <!-- date and time -->
            <div class="flex items-center justify-start text-deep-blue">
                <div
                    class="flex flex-col md:flex-row items-start lg:items-center gap-2 border-r-2 border-gray-200 px-2">
                    <img src="./icons/calendar-deep-blue-2.svg" alt="calendar">
                    <div class="text-nowrap">January 20,2024</div>
                </div>
                <div class="flex flex-col md:flex-row items-start lg:items-center gap-2 px-2"><img
                        src="./icons/clock-deep-blue.svg" alt="clock">11:30
                    pm</div>
                <div
                    class="flex flex-col md:flex-row items-start lg:items-center gap-2 border-l-2 border-gray-200 px-2">
                    <img src="./icons/category-name.svg" alt="category">Category Name
                </div>
            </div>
        </div>

        <!-- second text-area  -->
        <div class="font-notoserif">
            <div class="mt-8">

                To attend the conference virtually, register Here. Registration is FREE. We have made this
                arrangement to make the conference more accessible to all. The registration is good for the entire
                conference or parts of it, including the celebration of the 76th Myanmar Union Day.


            </div>
            <div class="mt-8">To attend in person for the 76th Union Day of Myanmar on Feb 11, 2023, register <a
                    href="#" class="text-deep-blue underline">Here</a>.
            </div>


        </div>

    </div>

    <?php include './components/relatedNewsAndPrograms.php'; ?>

</section>
<!-- main  -->

<?php include './templates/footer.php'; ?>