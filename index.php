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
            Expert TV Repair in Kolkata <br class="hidden md:block" />
            <span class="text-secondary">We Fix It Fast</span>
          </h1>

          <p class="text-white mt-4 mb-6 text-xl md:text-2xl font-medium">
            Professional TV Repair Service at Your Doorstep for LED, LCD & Smart TVs.
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
              class="bg-secondary text-primary px-5 py-3 rounded-md flex items-center gap-2 font-semibold transition-transform hover:scale-105 shadow-md">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-5 shrink-0">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M12 20.25c4.97 0 9-3.694 9-8.25s-4.03-8.25-9-8.25S3 7.444 3 12c0 2.104.859 4.023 2.273 5.48.432.447.74 1.04.586 1.641a4.483 4.483 0 0 1-.923 1.785A5.969 5.969 0 0 0 6 21c1.282 0 2.47-.402 3.445-1.087.81.22 1.668.337 2.555.337Z" />
              </svg>
              Whatsapp
            </a>
          </div>
        </div>

        <div class="w-full md:w-[40%] rounded-xl overflow-hidden shadow-2xl mt-8 md:mt-0 relative">
          <img src="/public/images/heroimage.webp" alt="A Technician Repairing a TV at our service center."
            class="w-full h-auto object-cover" />
          <div class="absolute inset-0 bg-linear-to-t from-primary/30 to-transparent pointer-events-none"></div>
        </div>
      </div>
    </section>

    <section id="services-grid" class="bg-blue-50 py-16 md:py-24 px-6 lg:px-16 scroll-mt-16">
        <div class="max-w-5xl mx-auto">
            <div class="text-center mb-16">
                <!-- Changed to H2 for SEO -->
                <h2 class="text-4xl md:text-5xl font-extrabold text-primary mb-6">Our TV Repair Services in Kolkata</h2>
                <p class="text-gray-700 text-lg md:text-xl max-w-3xl mx-auto leading-relaxed">
                    At <strong class="text-secondary">Display Doctor</strong>, we provide complete and professional solutions for Tv Repair in Kolkata. Every television problem is different, which is why we focus on proper inspection, accurate diagnosis, and reliable repair instead of temporary fixes.
                </p>
                <p class="text-gray-600 mt-4">
                    Our services cover LED, LCD, Smart, and Android televisions for homes and small businesses across Kolkata.
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-8">
                <!-- Service 1 - SEO Target IDs Added -->
                <div id="led-tv-repair" class="bg-white p-8 rounded-2xl shadow-lg border-t-4 border-secondary hover:-translate-y-2 transition-transform duration-300">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4 flex items-center gap-3">
                        <svg class="size-8 text-primary" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 0 1-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0 1 15 18.257V17.25m6-12V15a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 15V5.25m18 0A2.25 2.25 0 0 0 18.75 3H5.25A2.25 2.25 0 0 0 3 5.25m18 0V12a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 12V5.25" />
                        </svg>
                        LED TV Repair Service
                    </h3>
                    <p class="text-gray-600 mb-4">
                        LED televisions are the most commonly used TVs today. While they offer better picture quality and energy efficiency, they can develop issues over time due to regular usage and power fluctuations.
                    </p>
                    <p class="text-gray-800 font-medium mb-2">We handle common LED TV problems such as:</p>
                    <ul class="list-disc list-inside text-gray-600 space-y-1 mb-4">
                        <li>TV not turning on</li>
                        <li>Sound working but no picture</li>
                        <li>Screen flickering</li>
                        <li>Dark screen or dim display</li>
                        <li>Backlight failure</li>
                        <li>HDMI port not detecting</li>
                        <li>Power board or motherboard issues</li>
                    </ul>
                    <p class="text-sm italic text-gray-500">
                        Many customers contact us when searching for reliable <strong class="text-gray-700">led tv repair kolkata</strong> solutions. Our technicians inspect the internal components carefully and suggest the most practical repair option.
                    </p>
                </div>

                <!-- Service 2 -->
                <div id="lcd-tv-repair" class="bg-white p-8 rounded-2xl shadow-lg border-t-4 border-secondary hover:-translate-y-2 transition-transform duration-300">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4 flex items-center gap-3">
                        <svg class="size-8 text-primary" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 20.25h12m-7.5-3v3m3-3v3m-10.125-3h17.25c.621 0 1.125-.504 1.125-1.125V4.875c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125Z" />
                        </svg>
                        LCD TV Repair
                    </h3>
                    <p class="text-gray-600 mb-4">
                        Although LCD TVs are older compared to LED models, they are still widely used in many households. Over time, LCD TVs may face display distortion, color fading, or sound issues.
                    </p>
                    <p class="text-gray-800 font-medium mb-2">Our LCD TV repair services include:</p>
                    <ul class="list-disc list-inside text-gray-600 space-y-1 mb-4">
                        <li>Screen panel troubleshooting</li>
                        <li>Audio circuit repair</li>
                        <li>Display line correction</li>
                        <li>Input and connection issues</li>
                    </ul>
                    <p class="text-sm italic text-gray-500">
                        If you are unsure whether your TV can be repaired, a proper inspection can help you decide before replacing it.
                    </p>
                </div>

                <!-- Service 3 -->
                <div id="smart-tv-repair" class="bg-white p-8 rounded-2xl shadow-lg border-t-4 border-secondary hover:-translate-y-2 transition-transform duration-300">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4 flex items-center gap-3">
                        <svg class="size-8 text-primary" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 3v1.5M4.5 8.25H3m18 0h-1.5M4.5 12H3m18 0h-1.5m-15 3.75H3m18 0h-1.5M8.25 19.5V21M12 3v1.5m0 15V21m3.75-18v1.5m0 15V21m-9-1.5h10.5a2.25 2.25 0 0 0 2.25-2.25V6.75a2.25 2.25 0 0 0-2.25-2.25H6.75A2.25 2.25 0 0 0 4.5 6.75v10.5a2.25 2.25 0 0 0 2.25 2.25Z" />
                        </svg>
                        Smart TV & Android TV Repair
                    </h3>
                    <p class="text-gray-600 mb-4">
                        Smart TVs require both hardware and software expertise. Problems are not always related to physical parts — sometimes software glitches can cause performance issues.
                    </p>
                    <p class="text-gray-800 font-medium mb-2">We provide support for:</p>
                    <ul class="list-disc list-inside text-gray-600 space-y-1 mb-4">
                        <li>WiFi connection problems</li>
                        <li>Apps not opening or crashing</li>
                        <li>Slow performance</li>
                        <li>Software update errors</li>
                        <li>Screen freezing</li>
                        <li>Audio-video sync problems</li>
                    </ul>
                    <p class="text-sm italic text-gray-500">
                        An experienced <strong class="text-gray-700">tv technician near me</strong> should be able to identify whether the issue is software-based or hardware-related.
                    </p>
                </div>

                <!-- Service 4 -->
                <div id="tv-panel-repair" class="bg-white p-8 rounded-2xl shadow-lg border-t-4 border-secondary hover:-translate-y-2 transition-transform duration-300">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4 flex items-center gap-3">
                        <svg class="size-8 text-primary" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3.75v4.5m0-4.5h4.5m-4.5 0L9 9M3.75 20.25v-4.5m0 4.5h4.5m-4.5 0L9 15M20.25 3.75h-4.5m4.5 0v4.5m0-4.5L15 9m5.25 11.25h-4.5m4.5 0v-4.5m0 4.5L15 15" />
                        </svg>
                        TV Screen & Panel Repair
                    </h3>
                    <p class="text-gray-600 mb-4">
                        Display issues are among the most concerning problems for TV owners. A black screen, vertical lines, or uneven brightness may indicate panel or backlight failure.
                    </p>
                    <p class="text-gray-800 font-medium mb-2">We assist with:</p>
                    <ul class="list-disc list-inside text-gray-600 space-y-1 mb-4">
                        <li>LED backlight replacement</li>
                        <li>Panel inspection</li>
                        <li>Screen line correction</li>
                        <li>Display driver troubleshooting</li>
                    </ul>
                    <p class="text-sm italic text-gray-500">
                        Not all screen problems require full replacement. A proper evaluation can sometimes reduce the repair cost significantly.
                    </p>
                </div>

                <!-- Service 5 -->
                <div id="motherboard-repair" class="bg-white p-8 rounded-2xl shadow-lg border-t-4 border-secondary hover:-translate-y-2 transition-transform duration-300">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4 flex items-center gap-3">
                        <svg class="size-8 text-primary" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m3.75 13.5 10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75Z" />
                        </svg>
                        Power Supply & Motherboard Repair
                    </h3>
                    <p class="text-gray-600 mb-4">
                        Power-related issues are one of the most common reasons people look for <strong class="text-gray-700">Tv Repair in Kolkata</strong>. Voltage fluctuations can damage internal circuits over time.
                    </p>
                    <p class="text-gray-800 font-medium mb-2">We provide:</p>
                    <ul class="list-disc list-inside text-gray-600 space-y-1 mb-4">
                        <li>Power board repair</li>
                        <li>Internal fuse replacement</li>
                        <li>Motherboard diagnostics</li>
                        <li>Circuit-level troubleshooting</li>
                    </ul>
                    <p class="text-sm italic text-gray-500">
                        Accurate testing is important before replacing expensive components unnecessarily.
                    </p>
                </div>

                <!-- Service 6 -->
                <div id="hdmi-port-repair" class="bg-white p-8 rounded-2xl shadow-lg border-t-4 border-secondary hover:-translate-y-2 transition-transform duration-300">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4 flex items-center gap-3">
                        <svg class="size-8 text-primary" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 0 1-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0 1 15 18.257V17.25m6-12V15a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 15V5.25m18 0A2.25 2.25 0 0 0 18.75 3H5.25A2.25 2.25 0 0 0 3 5.25m18 0V12a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 12V5.25" />
                        </svg>
                        HDMI, USB & Connectivity Issue Repair
                    </h3>
                    <p class="text-gray-600 mb-4">
                        Modern televisions are connected to set-top boxes, gaming consoles, and sound systems. When ports stop working, it can disrupt the entire setup.
                    </p>
                    <p class="text-gray-800 font-medium mb-2">We repair:</p>
                    <ul class="list-disc list-inside text-gray-600 space-y-1 mb-4">
                        <li>HDMI port issues</li>
                        <li>USB detection problems</li>
                        <li>Audio output faults</li>
                        <li>External device connectivity errors</li>
                    </ul>
                    <p class="text-sm italic text-gray-500">
                        Proper port repair can restore functionality without replacing the entire board.
                    </p>
                </div>
            </div>
            
            <div class="mt-12 text-center">
                <a href="tel:+917605884658" class="inline-flex justify-center items-center gap-2 bg-secondary text-white font-bold text-lg px-8 py-4 rounded-xl shadow-lg hover:shadow-xl transition-transform hover:-translate-y-1">
                    Book Service Now: +91 7605884658
                </a>
            </div>
        </div>
    </section>

    <!--We Specialize In-->
    <section class="py-16 md:py-24 px-6 lg:px-16 bg-white">
      <div class="max-w-7xl mx-auto">
        <div class="text-center mb-12">
          <h2 class="text-4xl md:text-5xl font-extrabold text-primary inline-block pb-1">
            Common Specializations
          </h2>
          <div class="w-16 h-1.5 bg-secondary mx-auto mt-3 rounded-full"></div>
        </div>

        <ul class="grid grid-cols-2 md:grid-cols-4 gap-6">
          <li
            class="bg-gray-50 rounded-xl shadow-[0_4px_20px_-10px_rgba(0,0,0,0.1)] hover:shadow-lg hover:border-2 hover:border-secondary transition-shadow duration-300 p-6 flex flex-col items-center justify-center gap-4 text-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
              stroke="currentColor" class="size-8 text-primary shrink-0">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
            <span class="font-medium text-gray-800 text-sm md:text-base">Screen Repair</span>
          </li>

          <li
            class="bg-gray-50 rounded-xl shadow-[0_4px_20px_-10px_rgba(0,0,0,0.1)] hover:shadow-lg hover:border-2 hover:border-secondary transition-shadow duration-300 p-6 flex flex-col items-center justify-center gap-4 text-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
              stroke="currentColor" class="size-8 text-primary shrink-0">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
            <span class="font-medium text-gray-800 text-sm md:text-base">Audio & Sound</span>
          </li>

          <li
            class="bg-gray-50 rounded-xl shadow-[0_4px_20px_-10px_rgba(0,0,0,0.1)] hover:border-2 hover:border-secondary hover:shadow-lg p-6 flex flex-col items-center justify-center gap-4 text-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
              stroke="currentColor" class="size-8 text-primary shrink-0">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
            <span class="font-medium text-gray-800 text-sm md:text-base">Power Supplies</span>
          </li>

          <li
            class="bg-gray-50 rounded-xl shadow-[0_4px_20px_-10px_rgba(0,0,0,0.1)] hover:shadow-lg hover:border-2 hover:border-secondary transition-shadow duration-300 p-6 flex flex-col items-center justify-center gap-4 text-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
              stroke="currentColor" class="size-8 text-primary shrink-0">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
            <span class="font-medium text-gray-800 text-sm md:text-base">Hardware Fixes</span>
          </li>
        </ul>
      </div>
    </section>

    <!--Who We are section-->
    <section class="py-16 md:py-24 px-6 lg:px-16 bg-[#FAFAFA] border-t border-gray-100">
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
                class="bg-white rounded-xl shadow-sm p-6 flex items-center justify-center border border-gray-100 hover:border-secondary transition-colors duration-300">
                <p class="font-medium text-gray-800 text-base md:text-lg text-center">Samsung</p>
              </div>
              <div
                class="bg-white rounded-xl shadow-sm p-6 flex items-center justify-center border border-gray-100 hover:border-secondary transition-colors duration-300">
                <p class="font-medium text-gray-800 text-base md:text-lg text-center">LG</p>
              </div>
              <div
                class="bg-white rounded-xl shadow-sm p-6 flex items-center justify-center border border-gray-100 hover:border-secondary transition-colors duration-300">
                <p class="font-medium text-gray-800 text-base md:text-lg text-center">Sony</p>
              </div>
              <div
                class="bg-white rounded-xl shadow-sm p-6 flex items-center justify-center border border-gray-100 hover:border-secondary transition-colors duration-300">
                <p class="font-medium text-gray-800 text-base md:text-lg text-center">Hisense</p>
              </div>
              <div
                class="bg-white rounded-xl shadow-sm p-6 flex items-center justify-center border border-gray-100 hover:border-secondary transition-colors duration-300">
                <p class="font-medium text-gray-800 text-base md:text-lg text-center">Xiaomi</p>
              </div>
              <div
                class="bg-white rounded-xl shadow-sm p-6 flex items-center justify-center border border-gray-100 hover:border-secondary transition-colors duration-300">
                <p class="font-medium text-gray-800 text-base md:text-lg text-center">OnePlus</p>
              </div>
              <div
                class="bg-white rounded-xl shadow-sm p-6 flex items-center justify-center border border-gray-100 hover:border-secondary transition-colors duration-300">
                <p class="font-medium text-gray-800 text-base md:text-lg text-center">Panasonic</p>
              </div>
              
            </div>
            <div class="mt-12 text-center">
                <a href="tel:+917605884658" class="inline-flex justify-center items-center gap-2 bg-secondary text-white font-bold text-lg px-8 py-4 rounded-xl shadow-lg hover:shadow-xl transition-transform hover:-translate-y-1">
                    Book Service Now: +91 7605884658
                </a>
            </div>
          </div>
        </div>
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
