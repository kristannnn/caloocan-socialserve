@extends('layouts.app')

@section('title', 'Home - Caloocan City Social Services')

@section('content')
<!-- Caloocan City Banner Image -->
<section class="w-full">
    <img src="{{ asset('images/caloocan-banner.png') }}" alt="Caloocan City Banner" class="w-full h-auto">
</section>

<!-- Services Grid Section -->
<section id="services" class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Our Social Services</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Choose from our comprehensive range of social services designed to support every member of our community
            </p>
        </div>
        
        <!-- Services Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- AICS Card -->
            <a href="{{ route('aics') }}" class="service-card group">
                <div class="p-8">
                    <div class="w-16 h-16 bg-gradient-to-br from-caloocan-primary to-caloocan-secondary rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">AICS</h3>
                    <p class="text-gray-600 mb-4">
                        Assistance to Individuals in Crisis Situation - Emergency financial assistance for medical, burial, and other urgent needs.
                    </p>
                    <div class="flex items-center text-caloocan-primary font-semibold group-hover:translate-x-2 transition-transform duration-300">
                        Learn More
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </div>
                </div>
            </a>

            <!-- OSCA Card -->
            <a href="{{ route('osca') }}" class="service-card group">
                <div class="p-8">
                    <div class="w-16 h-16 bg-white rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-sm">
                        <img src="{{ asset('images/osca-logo.png') }}" alt="OSCA Logo" class="w-12 h-12 object-contain">
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">OSCA</h3>
                    <p class="text-gray-600 mb-4">
                        Office for Senior Citizens Affairs - Dedicated services and programs for our senior citizens aged 60 and above.
                    </p>
                    <div class="flex items-center text-caloocan-secondary font-semibold group-hover:translate-x-2 transition-transform duration-300">
                        Learn More
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </div>
                </div>
            </a>

            <!-- PDAO Card -->
            <a href="{{ route('pdao') }}" class="service-card group">
                <div class="p-8">
                    <div class="w-16 h-16 bg-white rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-sm">
                        <img src="{{ asset('images/pdao-logo.png') }}" alt="PDAO Logo" class="w-12 h-12 object-contain">
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">PDAO</h3>
                    <p class="text-gray-600 mb-4">
                        Persons with Disability Affairs Office - Comprehensive support and services for persons with disabilities.
                    </p>
                    <div class="flex items-center text-caloocan-accent font-semibold group-hover:translate-x-2 transition-transform duration-300">
                        Learn More
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </div>
                </div>
            </a>

            <!-- Solo Parent Card -->
            <a href="{{ route('solo-parent') }}" class="service-card group">
                <div class="p-8">
                    <div class="w-16 h-16 bg-gradient-to-br from-caloocan-gold to-caloocan-orange rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Solo Parent & Child Welfare</h3>
                    <p class="text-gray-600 mb-4">
                        Support programs for solo parents and comprehensive child welfare services for families in need.
                    </p>
                    <div class="flex items-center text-caloocan-gold font-semibold group-hover:translate-x-2 transition-transform duration-300">
                        Learn More
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </div>
                </div>
            </a>

            <!-- Livelihood Card -->
            <a href="{{ route('livelihood') }}" class="service-card group">
                <div class="p-8">
                    <div class="w-16 h-16 bg-gradient-to-br from-caloocan-orange to-caloocan-primary rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0V6a2 2 0 012 2v6a2 2 0 01-2 2H8a2 2 0 01-2-2V8a2 2 0 012-2V6"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Livelihood & Training</h3>
                    <p class="text-gray-600 mb-4">
                        Skills development, vocational training, and livelihood programs to empower our community members.
                    </p>
                    <div class="flex items-center text-caloocan-orange font-semibold group-hover:translate-x-2 transition-transform duration-300">
                        Learn More
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-4xl font-bold text-gray-900 mb-6">About Caloocan City Social Services</h2>
                <p class="text-lg text-gray-600 mb-6">
                    We are committed to providing comprehensive social services that uplift and empower every member of our community. 
                    Our programs are designed to address the diverse needs of Batang Kankaloo, ensuring no one is left behind.
                </p>
                <div class="space-y-4">
                    <div class="flex items-center">
                        <div class="w-8 h-8 bg-caloocan-primary rounded-full flex items-center justify-center mr-4">
                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <span class="text-gray-700">Comprehensive support programs</span>
                    </div>
                    <div class="flex items-center">
                        <div class="w-8 h-8 bg-caloocan-secondary rounded-full flex items-center justify-center mr-4">
                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <span class="text-gray-700">Professional and caring staff</span>
                    </div>
                    <div class="flex items-center">
                        <div class="w-8 h-8 bg-caloocan-accent rounded-full flex items-center justify-center mr-4">
                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <span class="text-gray-700">Accessible and inclusive services</span>
                    </div>
                </div>
            </div>
            <div class="relative">
                <div class="bg-gradient-to-br from-caloocan-primary to-caloocan-secondary rounded-2xl p-8 text-white">
                    <h3 class="text-2xl font-bold mb-4">Our Mission</h3>
                    <p class="text-lg mb-6">
                        To provide accessible, comprehensive, and quality social services that promote the well-being and development of all Caloocan City residents.
                    </p>
                    <div class="grid grid-cols-2 gap-4 text-center">
                        <div>
                            <div class="text-3xl font-bold">10,000+</div>
                            <div class="text-sm opacity-90">Families Served</div>
                        </div>
                        <div>
                            <div class="text-3xl font-bold">5</div>
                            <div class="text-sm opacity-90">Core Programs</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-20 bg-gradient-to-r from-caloocan-primary to-caloocan-secondary">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-4xl font-bold text-white mb-6">Need Help? We're Here for You</h2>
        <p class="text-xl text-white/90 mb-8 max-w-2xl mx-auto">
            Our dedicated team is ready to assist you with any questions about our social services programs.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="tel:+6328XXXXXXX" class="bg-white text-caloocan-primary px-8 py-3 rounded-full font-semibold hover:bg-gray-100 transition-colors duration-300 shadow-lg">
                📞 Call Us Now
            </a>
            <a href="mailto:socialservices@caloocan.gov.ph" class="border-2 border-white text-white px-8 py-3 rounded-full font-semibold hover:bg-white hover:text-caloocan-primary transition-colors duration-300">
                📧 Send Email
            </a>
        </div>
    </div>
</section>
@endsection
