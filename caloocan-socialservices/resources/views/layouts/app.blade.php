<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Caloocan City Social Services')</title>
    <meta name="description" content="Caloocan City Social Services Management System - Serving Batang Kankaloo">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    
    <!-- Built Assets -->
    <link rel="stylesheet" href="{{ asset('build/assets/app-Cz6b_xPh.css') }}">
    <script src="{{ asset('build/assets/app-D6BIOc1U.js') }}" defer></script>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="bg-gray-50 font-sans">
    <!-- Header -->
    <header class="bg-caloocan-primary shadow-sm sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <!-- Left: Logo and Title -->
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <div class="flex items-center space-x-3">
                            <img src="{{ asset('images/caloocan-seal.png') }}" alt="Caloocan City Seal" class="w-10 h-10 rounded-lg">
                            <div>
                                <h1 class="text-xl font-bold text-white">Caloocan City</h1>
                                <p class="text-sm text-white/90">Social Services</p>
                            </div>
                        </div>
                    </div>
                </div>
                

                
                <!-- Navigation -->
                <nav class="hidden md:flex items-center space-x-8">
                    <a href="{{ route('home') }}" class="text-white hover:text-caloocan-accent px-3 py-2 rounded-md text-sm font-medium transition-colors">Home</a>
                    <a href="{{ route('aics') }}" class="text-white hover:text-caloocan-accent px-3 py-2 rounded-md text-sm font-medium transition-colors">AICS</a>
                    <a href="{{ route('osca') }}" class="text-white hover:text-caloocan-accent px-3 py-2 rounded-md text-sm font-medium transition-colors">OSCA</a>
                    <a href="{{ route('pdao') }}" class="text-white hover:text-caloocan-accent px-3 py-2 rounded-md text-sm font-medium transition-colors">PDAO</a>
                    <a href="{{ route('solo-parent') }}" class="text-white hover:text-caloocan-accent px-3 py-2 rounded-md text-sm font-medium transition-colors">Solo Parent</a>
                    <a href="{{ route('livelihood') }}" class="text-white hover:text-caloocan-accent px-3 py-2 rounded-md text-sm font-medium transition-colors">Livelihood</a>
                    
                    <!-- Live Time and Date -->
                    <div class="text-white text-sm font-medium ml-4">
                        <div id="live-time" class="text-caloocan-accent"></div>
                        <div id="live-date" class="text-white/80"></div>
                    </div>
                </nav>
                
                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button type="button" class="text-white hover:text-caloocan-accent focus:outline-none focus:text-caloocan-accent" id="mobile-menu-button">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Mobile menu -->
        <div class="md:hidden hidden" id="mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 bg-caloocan-primary border-t border-caloocan-accent">
                <a href="{{ route('home') }}" class="text-white hover:text-caloocan-accent block px-3 py-2 rounded-md text-base font-medium">Home</a>
                <a href="{{ route('aics') }}" class="text-white hover:text-caloocan-accent block px-3 py-2 rounded-md text-base font-medium">AICS</a>
                <a href="{{ route('osca') }}" class="text-white hover:text-caloocan-primary block px-3 py-2 rounded-md text-base font-medium">OSCA</a>
                <a href="{{ route('pdao') }}" class="text-white hover:text-caloocan-accent block px-3 py-2 rounded-md text-base font-medium">PDAO</a>
                <a href="{{ route('solo-parent') }}" class="text-white hover:text-caloocan-accent block px-3 py-2 rounded-md text-base font-medium">Solo Parent</a>
                <a href="{{ route('livelihood') }}" class="text-white hover:text-caloocan-accent block px-3 py-2 rounded-md text-base font-medium">Livelihood</a>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <div class="flex items-center space-x-3 mb-4">
                        <img src="{{ asset('images/caloocan-seal.png') }}" alt="Caloocan City Seal" class="w-8 h-8 rounded-lg">
                        <h3 class="text-lg font-bold">Caloocan City</h3>
                    </div>
                    <p class="text-gray-400 text-sm">
                        Serving the community of Batang Kankaloo with comprehensive social services and support programs.
                    </p>
                </div>
                
                <div>
                    <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="{{ route('aics') }}" class="text-gray-400 hover:text-white transition-colors">AICS</a></li>
                        <li><a href="{{ route('osca') }}" class="text-gray-400 hover:text-white transition-colors">OSCA</a></li>
                        <li><a href="{{ route('pdao') }}" class="text-gray-400 hover:text-white transition-colors">PDAO</a></li>
                        <li><a href="{{ route('solo-parent') }}" class="text-gray-400 hover:text-white transition-colors">Solo Parent</a></li>
                        <li><a href="{{ route('livelihood') }}" class="text-gray-400 hover:text-white transition-colors">Livelihood</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-semibold mb-4">Contact Info</h4>
                    <div class="space-y-2 text-sm text-gray-400">
                        <p>📍 Caloocan City Hall</p>
                        <p>📞 (02) 8-XXX-XXXX</p>
                        <p>📧 socialservices@caloocan.gov.ph</p>
                        <p>🕒 Mon-Fri: 8:00 AM - 5:00 PM</p>
                    </div>
                </div>
            </div>
            
            <div class="border-t border-gray-800 mt-8 pt-8 text-center">
                <p class="text-gray-400 text-sm">
                    © {{ date('Y') }} Caloocan City Social Services. All rights reserved.
                </p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            const mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('hidden');
        });

        // Live Time and Date
        function updateTimeAndDate() {
            const now = new Date();
            
            // Format time (12-hour format with AM/PM)
            const timeOptions = { 
                hour: '2-digit', 
                minute: '2-digit', 
                second: '2-digit',
                hour12: true 
            };
            const timeString = now.toLocaleTimeString('en-US', timeOptions);
            
            // Format date
            const dateOptions = { 
                weekday: 'short', 
                year: 'numeric', 
                month: 'short', 
                day: 'numeric' 
            };
            const dateString = now.toLocaleDateString('en-US', dateOptions);
            
            // Update the display
            document.getElementById('live-time').textContent = timeString;
            document.getElementById('live-date').textContent = dateString;
        }

        // Update immediately and then every second
        updateTimeAndDate();
        setInterval(updateTimeAndDate, 1000);
    </script>
</body>
</html>
