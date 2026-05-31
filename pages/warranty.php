<?php
// Handle backend API requests
if (isset($_GET['action']) && $_GET['action'] === 'check') {
    header('Content-Type: application/json');
    $inv_number = isset($_GET['inv_number']) ? trim($_GET['inv_number']) : '';
    
    if (empty($inv_number)) {
        echo json_encode([
            'statusCode' => 400,
            'message' => 'Invoice number is required.'
        ]);
        exit;
    }
    
    // Construct the API url
    $apiUrl = 'https://admin.displaydoctor.in/api/warrenty?inv_number=' . urlencode($inv_number);
    
    // Perform curl request with SSL verification bypassed (essential for local dev environments)
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $apiUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 15);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    
    $response = curl_exec($ch);
    $errorMsg = curl_error($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    
    if ($response === false) {
        echo json_encode([
            'statusCode' => 500,
            'message' => 'Connection failed: ' . $errorMsg
        ]);
        exit;
    }
    
    $data = json_decode($response, true);
    if (json_last_error() !== JSON_ERROR_NONE) {
        echo json_encode([
            'statusCode' => 500,
            'message' => 'Invalid response structure from warranty database.'
        ]);
        exit;
    }
    
    // Forward the API response exactly
    echo json_encode($data);
    exit;
}

$pageTitle = "Warranty Checker | Display Doctor - Expert TV Repair";
include_once __DIR__ . '/../components/header.php';
?>

<div class="relative bg-gray-50 min-h-screen py-16 px-6 lg:px-16 font-sans overflow-hidden">
    <!-- Premium background decor elements -->
    <div class="absolute top-0 left-1/4 w-96 h-96 bg-primary/5 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute bottom-10 right-1/4 w-96 h-96 bg-secondary/5 rounded-full blur-3xl pointer-events-none"></div>

    <div class="max-w-4xl mx-auto relative z-10">
        <!-- Elegant Hero Header -->
        <div class="text-center mb-12">
            <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-bold bg-primary/10 text-primary uppercase tracking-widest mb-4">
                <svg class="size-3 animate-pulse text-secondary" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M2.166 11.388a.75.75 0 0 1 1.096-.188 12.02 12.02 0 0 0 13.476 0 .75.75 0 0 1 1.096.188A13.51 13.51 0 0 1 12.83 15.08a.75.75 0 0 1-.66-.66 12.02 12.02 0 0 0-4.34 0 .75.75 0 0 1-.66.66 13.51 13.51 0 0 1-5.004-3.692zM10 3a5 5 0 0 0-4.546 2.916C5.17 6.47 5.756 7 6.5 7h7c.744 0 1.33-.53 1.046-1.084A5 5 0 0 0 10 3z" clip-rule="evenodd" />
                </svg>
                Digital Verification
            </span>
            <h1 class="text-4xl sm:text-5xl font-extrabold text-gray-900 tracking-tight leading-tight">
                Warranty <span class="text-primary font-black">Shield</span> Verification
            </h1>
            <p class="text-gray-500 mt-4 text-base sm:text-lg max-w-xl mx-auto">
                Instantly check your repair warranty status, support tickets, and assigned technician details.
            </p>
            <div class="w-16 h-1 bg-secondary mx-auto mt-5 rounded-full"></div>
        </div>
        
        <!-- Search Input Card -->
        <div class="bg-white rounded-2xl shadow-xl border border-gray-100 p-6 sm:p-10 mb-8 transition-all duration-300 hover:shadow-2xl">
            <form id="warrantyForm" class="max-w-2xl mx-auto space-y-5">
                <div>
                    <label for="invoice_number" class="block text-xs uppercase tracking-widest font-black text-gray-400 mb-2">Enter Invoice Number</label>
                    <div class="relative rounded-2xl shadow-sm">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                            <svg class="size-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                            </svg>
                        </div>
                        <input type="text" id="invoice_number" name="invoice_number" required
                            class="block w-full rounded-2xl bg-gray-50/50 border border-gray-200 pl-12 pr-4 py-4 text-gray-900 font-mono tracking-wider placeholder-gray-400 focus:bg-white focus:border-primary focus:ring-4 focus:ring-primary/10 text-base sm:text-lg transition-all outline-none"
                            placeholder="e.g. INV-3359DCM6" style="border: 1px solid rgba(229, 231, 235, 1);">
                    </div>
                    <p class="mt-3 text-xs text-gray-400 flex items-center gap-2">
                        <svg class="size-4 text-gray-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        Case-sensitive. Look at your service bill for the invoice ID formatted as INV-XXXXX.
                    </p>
                </div>
                
                <button type="submit"
                    class="w-full flex justify-center items-center py-4 px-6 border border-transparent rounded-2xl shadow-lg text-base sm:text-lg font-bold text-white bg-primary hover:bg-[#1d3c63] focus:outline-none focus:ring-4 focus:ring-primary/10 hover:scale-[1.01] active:scale-[0.99] transition-all cursor-pointer">
                    <span id="btnText">Verify Warranty Status</span>
                    <svg id="btnSpinner" class="animate-spin -ml-1 mr-3 size-5 text-white hidden" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                </button>
            </form>
        </div>
        
        <!-- Error Container -->
        <div id="errorContainer" class="hidden bg-red-50 border-l-4 border-red-500 p-5 rounded-2xl mb-8 shadow-sm">
            <div class="flex">
                <div class="flex-shrink-0">
                    <svg class="size-6 text-red-500" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="ml-4">
                    <h3 class="text-sm font-bold text-red-800">Verification Failure</h3>
                    <p id="errorMessage" class="text-sm text-red-700 mt-1 font-medium"></p>
                    <p class="text-xs text-red-600 mt-2">
                        If you are sure this is correct, please try copying the invoice number directly from your invoice receipt. Or call our support helpline for assistant verification.
                    </p>
                </div>
            </div>
        </div>
        
        <!-- Initial / How it Works State -->
        <div id="initialStateContainer" class="grid sm:grid-cols-3 gap-6 mb-12">
            <div class="bg-white rounded-2xl p-6 border border-gray-100/60 shadow-sm flex flex-col items-center text-center">
                <div class="size-12 rounded-xl bg-primary/10 text-primary flex items-center justify-center mb-4">
                    <svg class="size-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
                <h3 class="font-bold text-gray-800 text-sm sm:text-base">1. Input invoice ID</h3>
                <p class="text-xs text-gray-500 mt-2 leading-relaxed">Enter the unique serial number found on your service receipt bill.</p>
            </div>
            <div class="bg-white rounded-2xl p-6 border border-gray-100/60 shadow-sm flex flex-col items-center text-center">
                <div class="size-12 rounded-xl bg-amber-500/10 text-amber-600 flex items-center justify-center mb-4">
                    <svg class="size-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                </div>
                <h3 class="font-bold text-gray-800 text-sm sm:text-base">2. View Timeline</h3>
                <p class="text-xs text-gray-500 mt-2 leading-relaxed">Instantly calculate exact remaining days and active display or board coverage.</p>
            </div>
            <div class="bg-white rounded-2xl p-6 border border-gray-100/60 shadow-sm flex flex-col items-center text-center">
                <div class="size-12 rounded-xl bg-emerald-500/10 text-emerald-600 flex items-center justify-center mb-4">
                    <svg class="size-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                </div>
                <h3 class="font-bold text-gray-800 text-sm sm:text-base">3. Find Technician</h3>
                <p class="text-xs text-gray-500 mt-2 leading-relaxed">Directly contact your assigned service specialist for quick inquiries.</p>
            </div>
        </div>
        
        <!-- Results Container (High-contrast Dashboard) -->
        <div id="resultsContainer" class="hidden space-y-6">
            
            <!-- Warranty Status Header Card -->
            <div class="bg-gradient-to-r from-primary to-[#183659] rounded-2xl shadow-xl overflow-hidden text-white relative border border-primary/20">
                <!-- Decorative background radial glows -->
                <div class="absolute -right-16 -top-16 w-52 h-52 rounded-full bg-white/5 pointer-events-none"></div>
                <div class="absolute -left-16 -bottom-16 w-40 h-40 rounded-full bg-white/5 pointer-events-none"></div>
                
                <div class="p-6 sm:p-8 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-6 relative z-10">
                    <div>
                        <span class="text-xs uppercase tracking-widest text-white/70 font-bold">Shield Verification</span>
                        <div class="flex items-center gap-3 mt-2">
                            <h2 id="statusTitle" class="text-3xl sm:text-4xl font-black tracking-tight">Active</h2>
                            <span id="statusDot" class="flex size-4 relative">
                                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                                <span class="relative inline-flex rounded-full size-4 bg-emerald-500"></span>
                            </span>
                        </div>
                        <p id="remainingDaysText" class="text-white/90 text-sm sm:text-base mt-3 font-semibold">-- days remaining</p>
                    </div>
                    
                    <div class="bg-white/10 backdrop-blur-md rounded-2xl p-5 border border-white/10 self-start sm:self-auto min-w-[200px] shadow-inner">
                        <span class="text-xs text-white/60 block font-bold uppercase tracking-wider">Invoice Serial</span>
                        <span id="displayInvoice" class="font-mono text-xl font-bold tracking-wider block mt-1.5 text-secondary">--</span>
                    </div>
                </div>
                
                <!-- Horizontal Progress Timeline -->
                <div class="px-6 sm:px-8 pb-8 relative z-10">
                    <div class="w-full bg-white/15 rounded-full h-3 overflow-hidden border border-white/5">
                        <div id="progressBar" class="bg-gradient-to-r from-secondary to-amber-300 h-full rounded-full transition-all duration-1000 ease-out" style="width: 0%;"></div>
                    </div>
                    <div class="flex justify-between text-xs text-white/70 mt-2 font-bold tracking-wide">
                        <span id="displayStartDate">Start Date: --</span>
                        <span id="displayEndDate">Expiry Date: --</span>
                    </div>
                </div>
            </div>
            
            <!-- Information Grid -->
            <div class="grid md:grid-cols-2 gap-6">
                
                <!-- Job details card -->
                <div class="bg-white rounded-2xl shadow-md border border-gray-100 p-6 flex flex-col justify-between hover:shadow-lg transition-shadow duration-300">
                    <div>
                        <div class="flex items-center gap-3 border-b border-gray-100 pb-4 mb-5">
                            <div class="p-2.5 rounded-xl bg-blue-50 text-primary">
                                <svg class="size-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-1.001M15 6.75h.008v.008H15V6.75Zm.008 9h-.008v-.008h.008v.008Zm0-2.25h-.008v-.008h.008v.008Zm0-2.25h-.008v-.008h.008v.008Zm0-2.25h-.008v-.008h.008v.008Z" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-extrabold text-gray-800">Job Specification</h3>
                        </div>
                        
                        <dl class="space-y-4">
                            <div>
                                <dt class="text-xs font-semibold text-gray-400 uppercase tracking-widest">Support Ticket</dt>
                                <dd id="displayTicket" class="text-sm font-bold text-primary mt-1 font-mono bg-primary/5 border border-primary/10 px-3.5 py-2 rounded-xl inline-block">--</dd>
                            </div>
                            
                            <div>
                                <dt class="text-xs font-semibold text-gray-400 uppercase tracking-widest">Repair Billing Date</dt>
                                <dd id="displayInvoiceDate" class="text-base font-semibold text-gray-800 mt-1">--</dd>
                            </div>
                        </dl>
                    </div>
                    
                    <div class="mt-8 pt-4 border-t border-gray-100 text-xs text-gray-400 font-medium">
                        Reference the ticket ID for fast helpdesk checks.
                    </div>
                </div>
                
                <!-- Technician Card -->
                <div class="bg-white rounded-2xl shadow-md border border-gray-100 p-6 flex flex-col justify-between hover:shadow-lg transition-shadow duration-300">
                    <div>
                        <div class="flex items-center gap-3 border-b border-gray-100 pb-4 mb-5">
                            <div class="p-2.5 rounded-xl bg-amber-50 text-secondary">
                                <svg class="size-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-extrabold text-gray-800">Assigned Technician</h3>
                        </div>
                        
                        <div class="flex items-center gap-3 mb-4">
                            <div class="size-10 rounded-full bg-secondary/15 text-secondary flex items-center justify-center font-bold text-sm">
                                <span id="techAvatarInitials">RM</span>
                            </div>
                            <div>
                                <dd id="displayTechName" class="text-base font-bold text-gray-800">--</dd>
                                <span class="text-xs text-gray-400 font-bold uppercase tracking-wider">Certified Specialist</span>
                            </div>
                        </div>
                        
                        <dl class="grid grid-cols-2 gap-4 border-t border-gray-50 pt-4">
                            <div>
                                <dt class="text-xs font-semibold text-gray-400 uppercase tracking-widest">Mobile Phone</dt>
                                <dd class="mt-1">
                                    <a id="displayTechPhone" href="#" class="text-primary hover:text-[#163554] font-bold flex items-center gap-1.5 text-sm">
                                        <svg class="size-4 text-gray-400 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                                        </svg>
                                        <span>--</span>
                                    </a>
                                </dd>
                            </div>
                            <div>
                                <dt class="text-xs font-semibold text-gray-400 uppercase tracking-widest">Email Address</dt>
                                <dd class="mt-1">
                                    <a id="displayTechEmail" href="#" class="text-primary hover:text-[#163554] font-bold flex items-center gap-1.5 text-xs break-all">
                                        <svg class="size-4 text-gray-400 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                                        </svg>
                                        <span>--</span>
                                    </a>
                                </dd>
                            </div>
                        </dl>
                    </div>
                    
                    <div class="mt-8 pt-4 border-t border-gray-100 text-xs text-gray-400 font-medium">
                        Reach out for feedback or specific repair questions.
                    </div>
                </div>
            </div>
            
            <!-- Quick Actions Banner -->
            <div id="warrantyAlertBox" class="bg-blue-50 border border-blue-100 rounded-2xl p-6 flex flex-col md:flex-row items-center justify-between gap-6">
                <div class="flex items-start gap-4">
                    <div class="p-3 bg-white rounded-2xl shadow-sm text-primary shrink-0">
                        <svg class="size-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z" />
                        </svg>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-900 text-base">Display Doctor Quality Shield</h4>
                        <p class="text-sm text-gray-600 mt-1">This warranty covers replacement parts, display panels, backlight errors, and technician services associated with this repair.</p>
                    </div>
                </div>
                
                <div class="flex gap-3 w-full md:w-auto shrink-0">
                    <a href="tel:+917605884658" class="flex-1 md:flex-none text-center bg-white text-gray-800 border border-gray-200 px-5 py-3 rounded-2xl text-sm font-bold hover:bg-gray-50 transition-colors">Call Support</a>
                    <a href="https://wa.me/917605884658" target="_blank" rel="noopener noreferrer" class="flex-1 md:flex-none text-center bg-secondary text-white px-5 py-3 rounded-2xl text-sm font-black hover:shadow-lg hover:brightness-105 transition-all">WhatsApp</a>
                </div>
            </div>
            
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('warrantyForm');
    const input = document.getElementById('invoice_number');
    const btnText = document.getElementById('btnText');
    const btnSpinner = document.getElementById('btnSpinner');
    const errorContainer = document.getElementById('errorContainer');
    const errorMessage = document.getElementById('errorMessage');
    const resultsContainer = document.getElementById('resultsContainer');
    const initialStateContainer = document.getElementById('initialStateContainer');
    
    // Result UI elements
    const statusTitle = document.getElementById('statusTitle');
    const statusDot = document.getElementById('statusDot');
    const remainingDaysText = document.getElementById('remainingDaysText');
    const displayInvoice = document.getElementById('displayInvoice');
    const progressBar = document.getElementById('progressBar');
    const displayStartDate = document.getElementById('displayStartDate');
    const displayEndDate = document.getElementById('displayEndDate');
    const displayTicket = document.getElementById('displayTicket');
    const displayInvoiceDate = document.getElementById('displayInvoiceDate');
    const displayTechName = document.getElementById('displayTechName');
    const displayTechPhone = document.getElementById('displayTechPhone');
    const displayTechEmail = document.getElementById('displayTechEmail');
    const techAvatarInitials = document.getElementById('techAvatarInitials');
    const warrantyAlertBox = document.getElementById('warrantyAlertBox');
    
    // Auto-check URL parameters
    const urlParams = new URLSearchParams(window.location.search);
    const invoiceParam = urlParams.get('invoice') || urlParams.get('inv_number');
    if (invoiceParam) {
        input.value = invoiceParam;
        checkWarranty(invoiceParam);
    }
    
    form.addEventListener('submit', (e) => {
        e.preventDefault();
        const invoiceNum = input.value.trim();
        if (invoiceNum) {
            checkWarranty(invoiceNum);
        }
    });
    
    function formatDate(dateStr) {
        if (!dateStr) return 'N/A';
        const date = new Date(dateStr);
        if (isNaN(date.getTime())) return dateStr;
        return date.toLocaleDateString('en-US', {
            year: 'numeric',
            month: 'long',
            day: 'numeric'
        });
    }
    
    function getInitials(name) {
        if (!name) return 'DD';
        const parts = name.trim().split(/\s+/);
        if (parts.length >= 2) {
            return (parts[0][0] + parts[parts.length - 1][0]).toUpperCase();
        }
        return parts[0].substring(0, 2).toUpperCase();
    }
    
    function checkWarranty(invoiceNum) {
        // Clear old states
        errorContainer.classList.add('hidden');
        resultsContainer.classList.add('hidden');
        initialStateContainer.classList.add('hidden');
        
        // Show loading state
        btnText.textContent = 'Verifying with database...';
        btnSpinner.classList.remove('hidden');
        form.querySelector('button[type="submit"]').disabled = true;
        
        // Update URL path silently without page refresh
        const newUrl = window.location.protocol + "//" + window.location.host + window.location.pathname + '?invoice=' + encodeURIComponent(invoiceNum);
        window.history.pushState({ path: newUrl }, '', newUrl);
        
        fetch(`warranty.php?action=check&inv_number=${encodeURIComponent(invoiceNum)}`)
            .then(res => {
                if (!res.ok) {
                    throw new Error('Database server returned an invalid response. Please try again.');
                }
                return res.json();
            })
            .then(data => {
                // If API returned a failure or structure is not what we expect
                if (!data || data.statusCode === 404 || !data.warranty_end_date) {
                    throw new Error(data.message || 'No active warranty or invoice record found. Verify the number (e.g., INV-3359DCM6) and try again.');
                }
                
                if (data.statusCode && data.statusCode !== 200) {
                    throw new Error(data.message || 'An error occurred while fetching invoice record details.');
                }
                
                // Populate elements
                displayInvoice.textContent = data.invoice_number || invoiceNum;
                displayTicket.textContent = data.issue?.ticket_number || 'N/A';
                
                displayStartDate.textContent = 'Invoice: ' + formatDate(data.createdAt);
                displayEndDate.textContent = 'Expires: ' + formatDate(data.warranty_end_date);
                displayInvoiceDate.textContent = formatDate(data.createdAt);
                
                const techName = data.technician?.fullName || 'Display Doctor Specialist';
                displayTechName.textContent = techName;
                techAvatarInitials.textContent = getInitials(techName);
                
                if (data.technician?.phone) {
                    displayTechPhone.href = 'tel:' + data.technician.phone;
                    displayTechPhone.querySelector('span').textContent = data.technician.phone;
                    displayTechPhone.classList.remove('hidden');
                } else {
                    displayTechPhone.classList.add('hidden');
                }
                
                if (data.technician?.email) {
                    displayTechEmail.href = 'mailto:' + data.technician.email;
                    displayTechEmail.querySelector('span').textContent = data.technician.email;
                    displayTechEmail.classList.remove('hidden');
                } else {
                    displayTechEmail.classList.add('hidden');
                }
                
                // Expiry and progress logic
                const start = new Date(data.createdAt);
                const end = new Date(data.warranty_end_date);
                const now = new Date();
                
                const totalDuration = end.getTime() - start.getTime();
                const timePassed = now.getTime() - start.getTime();
                const isExpired = now.getTime() > end.getTime();
                
                if (isExpired) {
                    statusTitle.textContent = 'Expired';
                    statusTitle.className = 'text-3xl font-extrabold tracking-tight text-red-300';
                    
                    statusDot.querySelector('.animate-ping').className = 'animate-ping absolute inline-flex h-full w-full rounded-full bg-red-400 opacity-75';
                    statusDot.querySelector('span:nth-child(2)').className = 'relative inline-flex rounded-full size-4 bg-red-500';
                    
                    remainingDaysText.textContent = 'This warranty coverage expired on ' + formatDate(data.warranty_end_date) + '.';
                    progressBar.style.width = '100%';
                    progressBar.className = 'bg-red-500 h-full rounded-full transition-all duration-1000 ease-out';
                    
                    // Alert card layout updates for expired items
                    warrantyAlertBox.className = 'bg-red-50 border border-red-100 rounded-2xl p-6 flex flex-col md:flex-row items-center justify-between gap-6';
                    warrantyAlertBox.querySelector('h4').textContent = 'Warranty Coverage Expired';
                    warrantyAlertBox.querySelector('p').textContent = 'The warranty period for this repair has concluded. Reach out to our customer care to renew coverage or request further service.';
                } else {
                    statusTitle.textContent = 'Active';
                    statusTitle.className = 'text-3xl font-extrabold tracking-tight text-white';
                    
                    statusDot.querySelector('.animate-ping').className = 'animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75';
                    statusDot.querySelector('span:nth-child(2)').className = 'relative inline-flex rounded-full size-4 bg-emerald-500';
                    
                    const daysRemaining = Math.max(0, Math.ceil((end.getTime() - now.getTime()) / (1000 * 60 * 60 * 24)));
                    remainingDaysText.textContent = `${daysRemaining} days of active warranty remaining.`;
                    
                    let progressPercent = 0;
                    if (totalDuration > 0) {
                        progressPercent = Math.min(100, Math.max(0, 100 - (timePassed / totalDuration) * 100));
                    }
                    progressBar.style.width = progressPercent + '%';
                    progressBar.className = 'bg-gradient-to-r from-secondary to-amber-300 h-full rounded-full transition-all duration-1000 ease-out';
                    
                    warrantyAlertBox.className = 'bg-blue-50 border border-blue-100 rounded-2xl p-6 flex flex-col md:flex-row items-center justify-between gap-6';
                    warrantyAlertBox.querySelector('h4').textContent = 'Display Doctor Quality Shield';
                    warrantyAlertBox.querySelector('p').textContent = 'This warranty covers replacement parts, display panels, backlight errors, and technician services associated with this repair.';
                }
                
                // Reveal results section
                resultsContainer.classList.remove('hidden');
                resultsContainer.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
            })
            .catch(err => {
                errorMessage.textContent = err.message || 'An error occurred. Check the invoice number and try again.';
                errorContainer.classList.remove('hidden');
                initialStateContainer.classList.remove('hidden');
            })
            .finally(() => {
                // Reset form button states
                btnText.textContent = 'Verify Warranty Status';
                btnSpinner.classList.add('hidden');
                form.querySelector('button[type="submit"]').disabled = false;
            });
    }
});
</script>

<?php include_once __DIR__ . '/../components/footer.php'; ?>
