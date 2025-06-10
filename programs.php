<?php include './templates/header.php' ?>
<?php include './templates/nav.php' ?>

    <!-- hero section  -->
    <section class="w-full relative">
      <nav
        class="absolute top-0 left-0 w-full h-28 z-20 flex items-center justify-between px-4 bg-[#00142E] text-white"
      >
        <div
          class="container mx-auto w-full h-full flex justify-between items-center"
        >
          <img src="./images/logo.png" alt="logo" />

          <!-- this is for mobile  -->
          <div class="lg:hidden w-10 h-10 cursor-pointer" id="mobile-menu-btn">
            <img
              src="./icons/burger-menu-white.svg"
              alt="burger"
              class="w-full"
            />
          </div>

          <!-- this is for desktop  -->
          <div class="hidden lg:flex items-center font-poppins h-full">
            <a
              href="/"
              class="px-10 text-xl h-full flex items-center hover:bg-white hover:text-black transition duration-500 ease-in-out"
              >Home</a
            >
            <a
              href="/about-us.php"
              class="px-10 text-xl h-full flex items-center hover:bg-white hover:text-black transition duration-500 ease-in-out"
              >About Us</a
            >

            <!-- program navbar with dropdown  -->
            <div
              class="dropdown px-10 text-xl h-full flex items-center hover:bg-white hover:text-black hover:text-black transition duration-500 ease-in-out"
            >
              <a href="/programs.php" class="flex items-center gap-4">
                Programs <img src="./icons/arrow-down.svg" alt="arrow-down" />
              </a>

              <!-- program dropdown content -->
              <div
                class="absolute top-full right-0 w-screen bg-white text-black shadow-lg dropdown-content z-50"
              >
                <div class="container mx-auto py-6">
                  <h2 class="text-2xl font-bold text-deep-blue">
                    Research & Ideas
                  </h2>
                  <div class="grid grid-cols-3 mt-8 gap-8">
                    <div class="flex flex-col gap-8">
                      <a href="#" class="hover:text-deep-blue">Research</a>
                      <a href="#" class="hover:text-deep-blue"
                        >Academic Papers</a
                      >
                    </div>
                    <div class="flex flex-col gap-8">
                      <a href="#" class="hover:text-deep-blue">Analysis</a>
                      <a href="#" class="hover:text-deep-blue">
                        Center for Holistic International Human Rights Law
                        Praxis
                      </a>
                    </div>
                    <div class="flex flex-col gap-8">
                      <a href="#" class="hover:text-deep-blue"
                        >Center for Land and Natural Resources Policy</a
                      >
                      <a href="#" class="hover:text-deep-blue"
                        >Center for Constitution & Democratic Governance</a
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- publications navbar with dropdown  -->
            <div
              class="dropdown px-10 text-xl h-full flex items-center hover:bg-white hover:text-black transition duration-500 ease-in-out"
            >
              <a href="/programs" class="flex items-center gap-4">
                Publications
                <img src="./icons/arrow-down.svg" alt="arrow-down" />
              </a>

              <!-- Publications dropdown content -->
              <div
                class="absolute top-full right-0 w-screen bg-white text-black shadow-lg dropdown-content z-50"
              >
                <div class="container mx-auto py-6">
                  <h2 class="text-2xl font-bold text-deep-blue">
                    Research & Publications
                  </h2>
                  <div class="grid grid-cols-3 mt-8 gap-8">
                    <div class="flex flex-col gap-8">
                      <a href="#" class="hover:text-deep-blue"
                        >Arts and Humanities, Public Health</a
                      >
                      <a href="#" class="hover:text-deep-blue"
                        >Development and Economic
                      </a>
                    </div>
                    <div class="flex flex-col gap-8">
                      <a href="#" class="hover:text-deep-blue"
                        >Education, Human Rights, and Gender</a
                      >
                      <a href="#" class="hover:text-deep-blue"
                        >Environment, and Engineering</a
                      >
                    </div>
                    <div class="flex flex-col gap-8">
                      <a href="#" class="hover:text-deep-blue"
                        >Public Policy, Law and Diplomacy</a
                      >
                      <a href="#" class="hover:text-deep-blue">Others</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <a
              href="/events"
              class="px-10 text-xl h-full flex items-center hover:bg-white hover:text-black transition duration-500 ease-in-out"
              >Events</a
            >
            <a
              href="/contact-us"
              class="px-10 text-xl h-full flex items-center hover:bg-white hover:text-black transition duration-500 ease-in-out"
              >Contact Us</a
            >

            <!-- search -->
            <div
              class="text-xl h-full flex items-center cursor-pointer search-icon p-4"
            >
              <img
                src="../icons/search-white.svg"
                alt="search"
                class="search-trigger h-6"
              />
              <div
                class="absolute top-1/2 right-48 flex bg-white p-4 rounded-lg search-input"
                style="transform: translateY(-50%)"
              >
                <input
                  type="text"
                  class="outline-none w-full"
                  placeholder="Search.."
                />
                <img
                  src="../icons/Vector.svg"
                  alt="search"
                  class="search-close cursor-pointer"
                />
              </div>
            </div>
          </div>
        </div>
      </nav>

      <div
        class="bg-deep-blue font-playfair pt-40 pb-20 text-white text-center"
      >
        <div class="text-4xl font-bold mb-2">Programs</div>
        <div class="text-xl">Home > Programs</div>
      </div>
    </section>
    <!-- hero section  -->

    <!-- main  -->
    <section class="container mx-auto py-20 flex justify-between gap-10">
      <div class="grid grid-cols-3 gap-8 w-2/3">
        <a href="/programs-3" class="hover:cursor-pointer">
          <div>
            <div class="overflow-hidden group">
              <img
                src="images/lates news and programs/american-scientific-researcher-with-young-scientist-working-in-modern-laboratory-ai-generative-free-photo 1.png"
                alt="photo1"
                class="w-full transform transition-transform duration-500 ease-in-out group-hover:scale-110 filter group-hover:grayscale"
              />
            </div>
            <div class="mt-4 px-1">
              <div
                class="flex items-center gap-4 justify-between text-gray-400"
              >
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
              <img
                src="images/lates news and programs/american-scientific-researcher-with-young-scientist-working-in-modern-laboratory-ai-generative-free-photo 1.png"
                alt="photo1"
                class="w-full transform transition-transform duration-500 ease-in-out group-hover:scale-110 filter group-hover:grayscale"
              />
            </div>
            <div class="mt-4 px-1">
              <div
                class="flex items-center gap-4 justify-between text-gray-400"
              >
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
              <img
                src="images/lates news and programs/american-scientific-researcher-with-young-scientist-working-in-modern-laboratory-ai-generative-free-photo 1.png"
                alt="photo1"
                class="w-full transform transition-transform duration-500 ease-in-out group-hover:scale-110 filter group-hover:grayscale"
              />
            </div>
            <div class="mt-4 px-1">
              <div
                class="flex items-center gap-4 justify-between text-gray-400"
              >
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
              <img
                src="images/lates news and programs/american-scientific-researcher-with-young-scientist-working-in-modern-laboratory-ai-generative-free-photo 1.png"
                alt="photo1"
                class="w-full transform transition-transform duration-500 ease-in-out group-hover:scale-110 filter group-hover:grayscale"
              />
            </div>
            <div class="mt-4 px-1">
              <div
                class="flex items-center gap-4 justify-between text-gray-400"
              >
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
              <img
                src="images/lates news and programs/american-scientific-researcher-with-young-scientist-working-in-modern-laboratory-ai-generative-free-photo 1.png"
                alt="photo1"
                class="w-full transform transition-transform duration-500 ease-in-out group-hover:scale-110 filter group-hover:grayscale"
              />
            </div>
            <div class="mt-4 px-1">
              <div
                class="flex items-center gap-4 justify-between text-gray-400"
              >
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
              <img
                src="images/lates news and programs/american-scientific-researcher-with-young-scientist-working-in-modern-laboratory-ai-generative-free-photo 1.png"
                alt="photo1"
                class="w-full transform transition-transform duration-500 ease-in-out group-hover:scale-110 filter group-hover:grayscale"
              />
            </div>
            <div class="mt-4 px-1">
              <div
                class="flex items-center gap-4 justify-between text-gray-400"
              >
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
              <img
                src="images/lates news and programs/american-scientific-researcher-with-young-scientist-working-in-modern-laboratory-ai-generative-free-photo 1.png"
                alt="photo1"
                class="w-full transform transition-transform duration-500 ease-in-out group-hover:scale-110 filter group-hover:grayscale"
              />
            </div>
            <div class="mt-4 px-1">
              <div
                class="flex items-center gap-4 justify-between text-gray-400"
              >
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
              <img
                src="images/lates news and programs/american-scientific-researcher-with-young-scientist-working-in-modern-laboratory-ai-generative-free-photo 1.png"
                alt="photo1"
                class="w-full transform transition-transform duration-500 ease-in-out group-hover:scale-110 filter group-hover:grayscale"
              />
            </div>
            <div class="mt-4 px-1">
              <div
                class="flex items-center gap-4 justify-between text-gray-400"
              >
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
              <img
                src="images/lates news and programs/american-scientific-researcher-with-young-scientist-working-in-modern-laboratory-ai-generative-free-photo 1.png"
                alt="photo1"
                class="w-full transform transition-transform duration-500 ease-in-out group-hover:scale-110 filter group-hover:grayscale"
              />
            </div>
            <div class="mt-4 px-1">
              <div
                class="flex items-center gap-4 justify-between text-gray-400"
              >
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
      <div class="w-1/3">
        <div class="shadow-lg border-gray-200 border rounded-lg px-4 py-8">
          <div class="text-xl font-bold font-playfair mb-4">Search</div>
          <div class="bg-gray-300 flex px-4 py-2 rounded">
            <input
              type="text"
              class="bg-gray-300 w-full outline-none"
              placeholder="search..."
            />
            <img src="/icons/Vector.svg" alt="#" />
          </div>
        </div>
        <div></div>
        <div></div>
      </div>
    </section>
    <!-- main  -->

    <?php include './templates/footer.php'; ?>
