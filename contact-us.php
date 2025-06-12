<?php include './templates/header.php' ?>
<?php include './templates/nav.php' ?>

<!-- hero section  -->
<section class="w-full relative">
    <?php include './templates/second-nav.php' ?>

    <div class="bg-deep-blue font-playfair py-16 text-white text-center">
        <div class="text-4xl font-bold mb-4">Contact Us</div>
        <div class="text-xl font-notoserif">Home > Contact Us</div>
    </div>
</section>
<!-- hero section  -->

<!-- main  -->
<section class="container mx-auto p-10 font-playfair">
    <div class="text-center">
        <div class="text-3xl font-bold">Want to get in touch?</div>
        <div class="text-lg mt-4 font-semibold">Use this contact form below. We typically reply within 24 hours.</div>
    </div>

    <!-- form  -->
    <div class="bg-[#F5F5F5] w-full rounded-2xl shadow-xl mt-10 p-10 lg:p-20">
        <div class="grid grid-cols-1 grid-rows-8 lg:grid-cols-2 lg:grid-rows-4 gap-10">
            <input type="text" class="border-2 border-gray-200 rounded-lg p-4" placeholder="Name">
            <input type="text" class="border-2 border-gray-200 rounded-lg p-4" placeholder="Phone Number">
            <input type="text" class="border-2 border-gray-200 rounded-lg p-4" placeholder="Email">
            <input type="text" class="border-2 border-gray-200 rounded-lg p-4" placeholder="Subject">
            <textarea class="lg:col-span-2 row-span-4 border-2 border-gray-200 rounded-lg p-4"
                placeholder="Message"></textarea>
        </div>
        <div class="w-full flex justify-center items-center">
            <button
                class="text-white rounded-full bg-deep-blue font-poppins px-20 py-4 text-base md:text-lg hover-button mt-16">
                Submit
            </button>
        </div>
    </div>
</section>
<!-- main  -->

<img src="./images/basemap.png" alt="map" class="w-full mt-10 md:mt-20">

<?php include './templates/footer.php'; ?>