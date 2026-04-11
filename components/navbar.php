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
                        <a href="/about.php" class="rounded-md px-3 py-2 text-sm font-medium text-[#0a3d61] hover:bg-[#0a3d61] hover:text-white transition">About</a>
                        <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-[#0a3d61] hover:bg-[#0a3d61] hover:text-white transition">Services</a>
                        <a href="/contact.php" class="rounded-md px-3 py-2 text-sm font-medium text-[#0a3d61] hover:bg-[#0a3d61] hover:text-white transition">Contact Us</a>
                    </div>
                </div>
            </div>

            <!-- Right side: notification + profile -->
            <div class="absolute inset-y-0 right-0 flex items-center gap-2 pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">

                <!-- Notification bell -->
                <button type="button" class="relative rounded-full p-1 text-gray-400 hover:text-[#0a3d61] focus:outline-none focus:ring-2 focus:ring-[#0a3d61] transition">
                    <span class="sr-only">View notifications</span>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
                    </svg>
                </button>

                <!-- Profile dropdown -->
                <div class="relative ml-1">
                    <button
                        id="dd-profile-btn"
                        type="button"
                        aria-expanded="false"
                        aria-haspopup="true"
                        class="relative flex rounded-full focus:outline-none focus:ring-2 focus:ring-[#0a3d61] focus:ring-offset-2"
                    >
                        <span class="sr-only">Open user menu</span>
                        <img src="/public/images/diplaydoctor-logo.webp" alt="" class="size-8 rounded-full bg-gray-200 ring-1 ring-gray-300" />
                    </button>

                    <!-- Dropdown menu -->
                    <div
                        id="dd-profile-menu"
                        role="menu"
                        aria-orientation="vertical"
                        aria-labelledby="profile-btn"
                        class="hidden absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black/10 focus:outline-none"
                    >
                        <a href="#" role="menuitem" class="block px-4 py-2 text-sm text-[#0a3d61] hover:bg-gray-100 transition">Your profile</a>
                        <a href="#" role="menuitem" class="block px-4 py-2 text-sm text-[#0a3d61] hover:bg-gray-100 transition">Settings</a>
                        <a href="#" role="menuitem" class="block px-4 py-2 text-sm text-[#0a3d61] hover:bg-gray-100 transition">Sign out</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Mobile menu -->
    <div id="dd-mobile-menu" class="hidden" >
        <div class="space-y-1 px-2 pt-2 pb-3">
            <a href="/index.php" aria-current="page" class="block rounded-md px-3 py-2 text-base font-medium text-[#0a3d61] bg-[#0a3d61]/10">Home</a>
            <a href="/about.php" class="block rounded-md px-3 py-2 text-base font-medium text-[#0a3d61] hover:bg-[#0a3d61] hover:text-white transition">About</a>
            <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-[#0a3d61] hover:bg-[#0a3d61] hover:text-white transition">Services</a>
            <a href="/contact.php" class="block rounded-md px-3 py-2 text-base font-medium text-[#0a3d61] hover:bg-[#0a3d61] hover:text-white transition">Contact Us</a>
        </div>
    </div>
</nav>
