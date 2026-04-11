<nav class="bg-white shadow-sm border-b border-gray-200">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8" id="og-dd">
        <div class="relative flex h-16 items-center justify-between">

            <!-- Mobile hamburger button -->
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <button
                    id="dd-hamburger-btn"
                    type="button"
                    aria-expanded="false"
                    aria-controls="mobile-menu"
                    class="relative inline-flex items-center justify-center rounded-md p-2 text-[#0a3d61] hover:bg-[#0a3d61]/10 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-[#0a3d61] transition"
                >
                    <span class="sr-only">Open main menu</span>
                    <!-- Hamburger icon -->
                    <svg id="dd-icon-open" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <!-- Close (X) icon -->
                    <svg id="dd-icon-close" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" class="size-6 hidden">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <!-- Logo + Desktop nav links -->
            <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                <div class="flex shrink-0 items-center">
                    <img src="/public/images/diplaydoctor-logo.webp" alt="Display Doctor Logo" class="h-8 w-auto" />
                </div>
                <div class="hidden sm:ml-6 sm:block">
                    <div class="flex space-x-4">
                        <a href="/index.php" class="rounded-md px-3 py-2 text-sm font-medium text-[#0a3d61]" aria-current="page">Home</a>
                        <a href="/pages/about.php" class="rounded-md px-3 py-2 text-sm font-medium text-[#0a3d61] hover:bg-[#0a3d61] hover:text-white transition">About</a>
                        <a href="/pages/services.php" class="rounded-md px-3 py-2 text-sm font-medium text-[#0a3d61] hover:bg-[#0a3d61] hover:text-white transition">Services</a>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <!-- Mobile menu -->
    <div id="dd-mobile-menu" class="hidden" >
        <div class="space-y-1 px-2 pt-2 pb-3">
            <a href="/index.php" aria-current="page" class="block rounded-md px-3 py-2 text-base font-medium text-[#0a3d61] bg-[#0a3d61]/10">Home</a>
            <a href="/pages/about.php" class="block rounded-md px-3 py-2 text-base font-medium text-[#0a3d61] hover:bg-[#0a3d61] hover:text-white transition">About</a>
            <a href="/pages/services.php" class="block rounded-md px-3 py-2 text-base font-medium text-[#0a3d61] hover:bg-[#0a3d61] hover:text-white transition">Services</a>
        </div>
    </div>
</nav>
