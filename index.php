<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="/public/images/diplaydoctor-logo.webp" type="image/webp" />

  <title><?php echo isset($pageTitle) ? $pageTitle : 'Expert TV Repair in Kolkata | Doorstep Service | Display Doctor'; ?></title>
  <meta name="description"
    content="Need reliable TV repair in Kolkata? Display Doctor offers fast, affordable doorstep service for LED, LCD, and Smart TVs. Book your same-day repair today!" />
  <meta name="keywords"
    content="TV repair in Kolkata, LED TV repair Kolkata, LCD TV repair near me, TV technician near me, TV repair service centre near me, Display Doctor, doorstep TV repair Kolkata, smart TV repair." />
  <meta name="author" content="Shahid Ali" />

  <meta property="og:title" content="Display Doctor - Expert TV Repair Services in Kolkata" />
  <meta property="og:description"
    content="Get fast, transparent, and affordable doorstep TV repair in Kolkata. We fix LED, LCD, and Smart TVs with same-day service. Contact our experts today!" />
  <meta property="og:image" content="/public/images/preview.png" />
  <meta property="og:type" content="website" />

  <link href="/dist/output.css" rel="stylesheet" />
</head>

<body>
  <header id="navbar" class="bg-white shadow">
    <?php include_once __DIR__ . '/components/navbar.php'; ?>
  </header>

  <main>


    <section id="hero-section">
      <div class="bg-secondary text-center p-2 text-primary font-medium text-sm md:text-base">
        Limited Slots Available Today - Book Now!
      </div>

      <div
        class="bg-primary w-full min-h-[calc(100vh-40px)] flex flex-col md:flex-row items-center justify-between p-6 lg:p-16 gap-10">
        <div class="w-full md:w-[55%] flex flex-col items-start">
          <span
            class="bg-secondary text-primary rounded-2xl px-3 py-1.5 text-sm font-semibold flex items-center gap-2 mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
              stroke="currentColor" class="size-5 shrink-0">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
            Same Day Service Available
          </span>

          <h1 class="text-white text-4xl md:text-5xl lg:text-6xl font-bold leading-tight">
            TV Not Working? <br class="hidden md:block" />
            <span class="text-secondary">We Fix It Fast</span>
          </h1>

          <p class="text-white mt-4 mb-6 text-xl md:text-2xl">
            Professional TV Repair Service at Your Doorstep in Kolkata
          </p>

          <ul class="mb-8 space-y-2">
            <li class="flex items-center gap-3 text-white font-semibold">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                stroke="currentColor" class="size-6 text-green-500 shrink-0">
                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
              </svg>
              <span>Certified Technicians</span>
            </li>
            <li class="flex items-center gap-3 text-white font-semibold">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                stroke="currentColor" class="size-6 text-green-500 shrink-0">
                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
              </svg>
              <span>Quick Doorstep Service</span>
            </li>
            <li class="flex items-center gap-3 text-white font-semibold">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                stroke="currentColor" class="size-6 text-green-500 shrink-0">
                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
              </svg>
              <span>Affordable Pricing</span>
            </li>
            <li class="flex items-center gap-3 text-white font-semibold">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                stroke="currentColor" class="size-6 text-green-500 shrink-0">
                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
              </svg>
              <span>Same-Day Service</span>
            </li>
          </ul>

          <div class="flex flex-wrap gap-4 w-full">
            <a href="tel:+917605884658" aria-label="Call +91 7605884658"
              class="flex text-white text-sm font-medium gap-2 items-center border-secondary border-2 px-5 py-3 rounded-md transition-colors hover:bg-secondary hover:text-primary">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-5 shrink-0">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
              </svg>
              <span>+91 7605884658</span>
            </a>

            <a href="https://wa.me/917605884658" target="_blank" rel="noopener noreferrer" aria-label="Chat on WhatsApp"
              class="bg-secondary text-primary px-5 py-3 rounded-md flex items-center gap-2 font-semibold transition-transform hover:scale-105">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-5 shrink-0">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M12 20.25c4.97 0 9-3.694 9-8.25s-4.03-8.25-9-8.25S3 7.444 3 12c0 2.104.859 4.023 2.273 5.48.432.447.74 1.04.586 1.641a4.483 4.483 0 0 1-.923 1.785A5.969 5.969 0 0 0 6 21c1.282 0 2.47-.402 3.445-1.087.81.22 1.668.337 2.555.337Z" />
              </svg>
              Whatsapp
            </a>
          </div>
        </div>

        <div class="w-full md:w-[40%] rounded-xl overflow-hidden shadow-2xl mt-8 md:mt-0">
          <img src="/public/images/heroimage.webp" alt="A Technician Repairing a TV at our service center."
            class="w-full h-auto object-cover" />
        </div>
      </div>
    </section>
    <section class="py-16 md:py-24 px-6 lg:px-16 bg-linear-to-b from-gray-50 to-blue-100">
      <div class="max-w-7xl mx-auto">
        <div class="text-center mb-12">
          <h2 class="text-4xl md:text-5xl font-extrabold text-transparent bg-clip-text bg-primary inline-block pb-1">
            We Specialize In
          </h2>
          <div class="w-16 h-1.5 bg-secondary mx-auto mt-3 rounded-full"></div>
        </div>

        <div class="max-w-4xl mx-auto text-center space-y-6 text-gray-600 text-base md:text-lg mb-16">
          <p>
            Our team provides complete TV repair service covering every brand
            and model. From installation and software updates to hardware
            fixes and power issues, we make sure your TV runs smoothly without
            interruptions.
          </p>
          <p>
            We also handle TV screen repair, sound problems, panel issues, and
            remote connectivity - giving you an all-in-one solution under one
            roof.
          </p>
          <p>
            If you're searching for a reliable TV repair near you, our
            doorstep service ensures quick and hassle-free support. With
            expert technicians and genuine spare parts, we bring back your
            TV's performance like new.
          </p>
        </div>

        <ul class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
          <li
            class="bg-white rounded-xl shadow-[0_4px_20px_-10px_rgba(0,0,0,0.1)] hover:shadow-lg hover:border-2 hover:border-yellow-400 transition-shadow duration-300 p-6 flex items-center gap-4">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
              stroke="currentColor" class="size-6 text-green-500 shrink-0">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
            <span class="font-medium text-gray-800 text-sm md:text-base">Screen Repair & Replacement</span>
          </li>

          <li
            class="bg-white rounded-xl shadow-[0_4px_20px_-10px_rgba(0,0,0,0.1)] hover:shadow-lg hover:border-2 hover:border-yellow-400 transition-shadow duration-300 p-6 flex items-center gap-4">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
              stroke="currentColor" class="size-6 text-green-500 shrink-0">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
            <span class="font-medium text-gray-800 text-sm md:text-base">Sound & Audio Issues</span>
          </li>

          <li
            class="bg-white rounded-xl shadow-[0_4px_20px_-10px_rgba(0,0,0,0.1)] hover:shadow-lg hover:border-2 hover:border-yellow-400 transition-shadow duration-300 p-6 flex items-center gap-4">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
              stroke="currentColor" class="size-6 text-green-500 shrink-0">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
            <span class="font-medium text-gray-800 text-sm md:text-base">Panel & Display Problems</span>
          </li>

          <li
            class="bg-white rounded-xl shadow-[0_4px_20px_-10px_rgba(0,0,0,0.1)] hover:border-2 hover:border-yellow-400 hover:shadow-lg p-6 flex items-center gap-4">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
              stroke="currentColor" class="size-6 text-green-500 shrink-0">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
            <span class="font-medium text-gray-800 text-sm md:text-base">Remote Connectivity</span>
          </li>

          <li
            class="bg-white rounded-xl shadow-[0_4px_20px_-10px_rgba(0,0,0,0.1)] hover:shadow-lg hover:border-2 hover:border-yellow-400 transition-shadow duration-300 p-6 flex items-center gap-4">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
              stroke="currentColor" class="size-6 text-green-500 shrink-0">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
            <span class="font-medium text-gray-800 text-sm md:text-base">Software Updates</span>
          </li>

          <li
            class="bg-white rounded-xl shadow-[0_4px_20px_-10px_rgba(0,0,0,0.1)] hover:shadow-lg hover:border-2 hover:border-yellow-400 transition-shadow duration-300 p-6 flex items-center gap-4">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
              stroke="currentColor" class="size-6 text-green-500 shrink-0">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
            <span class="font-medium text-gray-800 text-sm md:text-base">Power Issues</span>
          </li>

          <li
            class="bg-white rounded-xl shadow-[0_4px_20px_-10px_rgba(0,0,0,0.1)] hover:shadow-lg hover:border-2 hover:border-yellow-400 transition-shadow duration-300 p-6 flex items-center gap-4">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
              stroke="currentColor" class="size-6 text-green-500 shrink-0">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
            <span class="font-medium text-gray-800 text-sm md:text-base">Hardware Fixes</span>
          </li>

          <li
            class="bg-white rounded-xl shadow-[0_4px_20px_-10px_rgba(0,0,0,0.1)] hover:shadow-lg hover:border-2 hover:border-yellow-400 transition-shadow duration-300 p-6 flex items-center gap-4">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
              stroke="currentColor" class="size-6 text-green-500 shrink-0">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
            <span class="font-medium text-gray-800 text-sm md:text-base">Installation Service</span>
          </li>
        </ul>
      </div>
      <div class="max-w-7xl mx-auto my-6 flex justify-center w-full">
        <a href="tel:+917605884658" aria-label="Call +91 7605884658"
          class="flex flex-col justify-center items-center text-center text-white w-full sm:w-[50%] md:w-[40%] lg:w-[30%] text-lg font-bold gap-1 bg-secondary border-secondary border-2 px-5 py-3 rounded-md transition-colors hover:bg-secondary hover:text-primary">
          <span>Enquiry Now</span>
          <div class="flex items-center gap-2">
            <span>Call</span>
            <span>+91 7605884658</span>
          </div>
        </a>
      </div>
    </section>
    <!--Who We are section-->
    <section class="py-16 md:py-24 px-6 lg:px-16 bg-[#FAFAFA]">
      <div class="max-w-7xl mx-auto flex flex-col lg:flex-row items-center gap-12 lg:gap-16">
        <div class="w-full lg:w-1/2 relative rounded-xl border border-secondary shadow-lg overflow-hidden group">
          <img src="/public/images/heroimage.webp" alt="Technician working on internal electronics of a TV"
            class="w-full h-auto object-cover rounded-xl" />

          <button
            class="absolute top-1/2 left-4 -translate-y-1/2 bg-white/70 rounded-full p-2.5 shadow-md hover:bg-white transition-colors group-hover:block hidden">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
              stroke="currentColor" class="size-6 text-secondary">
              <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
            </svg>
          </button>
          <button
            class="absolute top-1/2 right-4 -translate-y-1/2 bg-white/70 rounded-full p-2.5 shadow-md hover:bg-white transition-colors group-hover:block hidden">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
              stroke="currentColor" class="size-6 text-secondary">
              <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
            </svg>
          </button>

          <div class="absolute bottom-4 left-1/2 -translate-x-1/2 flex gap-1.5">
            <span class="size-2.5 rounded-full bg-secondary"></span>
            <span class="size-2.5 rounded-full bg-white/70"></span>
            <span class="size-2.5 rounded-full bg-white/70"></span>
            <span class="size-2.5 rounded-full bg-white/70"></span>
          </div>
        </div>

        <div class="w-full lg:w-1/2 flex flex-col items-start gap-10">
          <div>
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-extrabold text-secondary mb-3 leading-tight">
              Who We Are
            </h2>

            <p class="text-gray-600 text-base md:text-lg mb-8">
              At
              <span class="text-secondary font-medium">Display Doctor</span>,
              we are committed to delivering expert repairs and reliable
              solutions for your home appliances, ensuring top-notch service
              every time.
            </p>

            <ul class="space-y-4">
              <li class="flex items-center gap-3">
                <span class="size-3.5 rounded-full bg-secondary shrink-0"></span>
                <p class="text-gray-700 text-base">
                  Specializing in
                  <span class="font-semibold">LCD, LED, QLED, and OLED TVs</span>
                  with precision repairs.
                </p>
              </li>
              <li class="flex items-center gap-3">
                <span class="size-3.5 rounded-full bg-secondary shrink-0"></span>
                <p class="text-gray-700 text-base">
                  Trusted by
                  <span class="font-semibold">10,000+ happy customers</span>
                  for quality and efficiency.
                </p>
              </li>
              <li class="flex items-center gap-3">
                <span class="size-3.5 rounded-full bg-secondary shrink-0"></span>
                <p class="text-gray-700 text-base">
                  Over
                  <span class="font-semibold">15 years of experience</span> in
                  appliance service and maintenance.
                </p>
              </li>
            </ul>
          </div>

          <div class="w-full">
            <h3 class="text-2xl md:text-3xl font-bold text-gray-800 mb-3 leading-tight">
              Brands We Work With
            </h3>

            <p class="text-gray-600 text-base md:text-lg mb-10">
              We specialize in servicing these premium TV brands with expert
              care and genuine parts.
            </p>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
              <div
                class="bg-white rounded-xl shadow-md p-6 flex items-center justify-center border border-gray-100 hover:border-secondary transition-colors duration-300">
                <p class="font-medium text-gray-800 text-base md:text-lg text-center">
                  Samsung
                </p>
              </div>
              <div
                class="bg-white rounded-xl shadow-md p-6 flex items-center justify-center border border-gray-100 hover:border-secondary transition-colors duration-300">
                <p class="font-medium text-gray-800 text-base md:text-lg text-center">
                  LG
                </p>
              </div>
              <div
                class="bg-white rounded-xl shadow-md p-6 flex items-center justify-center border border-gray-100 hover:border-secondary transition-colors duration-300">
                <p class="font-medium text-gray-800 text-base md:text-lg text-center">
                  Sony
                </p>
              </div>
              <div
                class="bg-white rounded-xl shadow-md p-6 flex items-center justify-center border border-gray-100 hover:border-secondary transition-colors duration-300">
                <p class="font-medium text-gray-800 text-base md:text-lg text-center">
                  Hisense
                </p>
              </div>
              <div
                class="bg-white rounded-xl shadow-md p-6 flex items-center justify-center border border-gray-100 hover:border-secondary transition-colors duration-300">
                <p class="font-medium text-gray-800 text-base md:text-lg text-center">
                  Xiaomi
                </p>
              </div>
              <div
                class="bg-white rounded-xl shadow-md p-6 flex items-center justify-center border border-gray-100 hover:border-secondary transition-colors duration-300">
                <p class="font-medium text-gray-800 text-base md:text-lg text-center">
                  OnePlus
                </p>
              </div>
              <div
                class="bg-white rounded-xl shadow-md p-6 flex items-center justify-center border border-gray-100 hover:border-secondary transition-colors duration-300">
                <p class="font-medium text-gray-800 text-base md:text-lg text-center">
                  Panasonic
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="max-w-7xl mx-auto mt-12 mb-6 flex justify-center w-full">
        <a href="tel:+917605884658" aria-label="Call +91 7605884658"
          class="flex flex-col justify-center items-center text-center text-white w-full sm:w-[50%] md:w-[40%] lg:w-[30%] text-lg font-bold gap-1 bg-secondary border-secondary border-2 px-5 py-3 rounded-md transition-colors hover:bg-secondary hover:text-primary">
          <span>Enquiry Now</span>
          <div class="flex items-center gap-2">
            <span>Call</span>
            <span>+91 7605884658</span>
          </div>
        </a>
      </div>
    </section>
    <section class="bg-primary py-16 md:py-24 px-6 lg:px-16">
      <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16">
          <h2 class="text-3xl md:text-4xl lg:text-5xl font-extrabold text-secondary mb-6">
            Why Choose Us?
          </h2>
          <p class="text-gray-300 text-base md:text-lg max-w-3xl mx-auto leading-relaxed">
            At
            <span class="font-semibold text-secondary">Display Doctor</span>,
            we take pride in providing expert repairs, ensuring
            <strong class="text-white font-semibold">reliability, affordability, and customer satisfaction.</strong>
          </p>
        </div>

        <ul class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-8 gap-y-12">
          <li class="flex flex-col items-center text-center group">
            <div
              class="w-16 h-16 rounded-full bg-secondary flex items-center justify-center mb-5 shadow-lg transform transition-transform group-hover:scale-110 duration-300">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                stroke="currentColor" class="w-8 h-8 text-primary" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z" />
              </svg>
            </div>
            <h3 class="text-xl font-bold text-white mb-3">
              Expert Technicians
            </h3>
            <p class="text-gray-400 text-sm md:text-base leading-relaxed max-w-sm">
              Skilled professionals ensuring precise appliance repairs.
            </p>
          </li>

          <li class="flex flex-col items-center text-center group">
            <div
              class="w-16 h-16 rounded-full bg-secondary flex items-center justify-center mb-5 shadow-lg transform transition-transform group-hover:scale-110 duration-300">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                stroke="currentColor" class="w-8 h-8 text-primary" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
              </svg>
            </div>
            <h3 class="text-xl font-bold text-white mb-3">
              Quality Service Guaranteed
            </h3>
            <p class="text-gray-400 text-sm md:text-base leading-relaxed max-w-sm">
              We use advanced tools and original parts for durable repairs.
            </p>
          </li>

          <li class="flex flex-col items-center text-center group">
            <div
              class="w-16 h-16 rounded-full bg-secondary flex items-center justify-center mb-5 shadow-lg transform transition-transform group-hover:scale-110 duration-300">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                stroke="currentColor" class="w-8 h-8 text-primary" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M10.5 6h9.75M10.5 6a1.5 1.5 0 11-3 0m3 0a1.5 1.5 0 10-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-9.75 0h9.75" />
              </svg>
            </div>
            <h3 class="text-xl font-bold text-white mb-3">
              Genuine Spare Parts
            </h3>
            <p class="text-gray-400 text-sm md:text-base leading-relaxed max-w-sm">
              Only certified, high-quality spare parts for maximum
              performance.
            </p>
          </li>

          <li class="flex flex-col items-center text-center group">
            <div
              class="w-16 h-16 rounded-full bg-secondary flex items-center justify-center mb-5 shadow-lg transform transition-transform group-hover:scale-110 duration-300">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                stroke="currentColor" class="w-8 h-8 text-primary" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
            </div>
            <h3 class="text-xl font-bold text-white mb-3">Timely Repairs</h3>
            <p class="text-gray-400 text-sm md:text-base leading-relaxed max-w-sm">
              Swift service to ensure minimal disruption to your routine.
            </p>
          </li>

          <li class="flex flex-col items-center text-center group">
            <div
              class="w-16 h-16 rounded-full bg-secondary flex items-center justify-center mb-5 shadow-lg transform transition-transform group-hover:scale-110 duration-300">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                stroke="currentColor" class="w-8 h-8 text-primary" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
            </div>
            <h3 class="text-xl font-bold text-white mb-3">
              Affordable Pricing
            </h3>
            <p class="text-gray-400 text-sm md:text-base leading-relaxed max-w-sm">
              Transparent pricing with no hidden costs. No advance fees.
            </p>
          </li>

          <li class="flex flex-col items-center text-center group">
            <div
              class="w-16 h-16 rounded-full bg-secondary flex items-center justify-center mb-5 shadow-lg transform transition-transform group-hover:scale-110 duration-300">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                stroke="currentColor" class="w-8 h-8 text-primary" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M15.182 15.182a4.5 4.5 0 01-6.364 0M21 12a9 9 0 11-18 0 9 9 0 0118 0zM9.75 9.75c0 .414-.168.75-.375.75S9 10.164 9 9.75 9.168 9 9.375 9s.375.336.375.75zm3.625 0c0 .414-.168.75-.375.75s-.375-.336-.375-.75.168-.75.375-.75.375.336.375.75z" />
              </svg>
            </div>
            <h3 class="text-xl font-bold text-white mb-3">
              Customer Satisfaction Guaranteed
            </h3>
            <p class="text-gray-400 text-sm md:text-base leading-relaxed max-w-sm">
              We stand by our work with a full satisfaction guarantee.
            </p>
          </li>
        </ul>
      </div>
    </section>

<?php include_once __DIR__ . '/components/footer.php'; ?>
