@extends('layouts.app')

@section('title', 'Livelihood & Training - Caloocan City Social Services')

@section('content')
<!-- Hero Section -->
<section class="relative overflow-hidden bg-gradient-to-br from-caloocan-orange to-caloocan-primary">
    <div class="absolute inset-0 bg-black bg-opacity-20"></div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
        <div class="text-center">
            <div class="w-20 h-20 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-6">
                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0V6a2 2 0 012 2v6a2 2 0 01-2 2H8a2 2 0 01-2-2V8a2 2 0 012-2V6"></path>
                </svg>
            </div>
            <h1 class="text-5xl font-bold text-white mb-6">Livelihood & Training</h1>
            <p class="text-xl text-white/90 max-w-3xl mx-auto">
                Skills development, vocational training, and livelihood programs to empower our community members.
            </p>
        </div>
    </div>
</section>

<!-- Main Content -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
            <!-- Main Content -->
            <div class="lg:col-span-2">
                <div class="bg-white rounded-2xl shadow-lg p-8 mb-8">
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">About Livelihood & Training Programs</h2>
                    <p class="text-lg text-gray-600 mb-6">
                        Our Livelihood and Training programs are designed to empower Caloocan City residents with the skills, knowledge, and resources they need to become self-sufficient and economically independent. We offer a wide range of training programs and support services to help individuals start their own businesses or find better employment opportunities.
                    </p>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                        <div class="bg-caloocan-orange/10 p-6 rounded-xl">
                            <h3 class="text-xl font-semibold text-caloocan-orange mb-3">Vocational Training</h3>
                            <p class="text-gray-700">Comprehensive training programs in various trades and technical skills.</p>
                        </div>
                        <div class="bg-caloocan-primary/10 p-6 rounded-xl">
                            <h3 class="text-xl font-semibold text-caloocan-primary mb-3">Entrepreneurship</h3>
                            <p class="text-gray-700">Business development, financial literacy, and startup support programs.</p>
                        </div>
                        <div class="bg-caloocan-secondary/10 p-6 rounded-xl">
                            <h3 class="text-xl font-semibold text-caloocan-secondary mb-3">Skills Development</h3>
                            <p class="text-gray-700">Computer literacy, digital skills, and modern workplace training.</p>
                        </div>
                        <div class="bg-caloocan-accent/10 p-6 rounded-xl">
                            <h3 class="text-xl font-semibold text-caloocan-accent mb-3">Job Placement</h3>
                            <p class="text-gray-700">Career counseling, job matching, and employment assistance services.</p>
                        </div>
                    </div>
                </div>

                <!-- Training Programs Section -->
                <div class="bg-white rounded-2xl shadow-lg p-8 mb-8">
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">Available Training Programs</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="space-y-4">
                            <h3 class="text-xl font-semibold text-caloocan-orange mb-4">Technical Skills</h3>
                            <ul class="space-y-2 text-gray-600">
                                <li class="flex items-center">
                                    <svg class="w-4 h-4 text-caloocan-orange mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    Welding and Metal Works
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-4 h-4 text-caloocan-orange mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    Electrical Installation
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-4 h-4 text-caloocan-orange mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    Plumbing and Sanitation
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-4 h-4 text-caloocan-orange mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    Automotive Repair
                                </li>
                            </ul>
                        </div>
                        <div class="space-y-4">
                            <h3 class="text-xl font-semibold text-caloocan-primary mb-4">Business & Services</h3>
                            <ul class="space-y-2 text-gray-600">
                                <li class="flex items-center">
                                    <svg class="w-4 h-4 text-caloocan-primary mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    Food Processing & Cooking
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-4 h-4 text-caloocan-primary mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    Beauty and Wellness
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-4 h-4 text-caloocan-primary mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    Dressmaking & Tailoring
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-4 h-4 text-caloocan-primary mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    Small Business Management
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Support Services Section -->
                <div class="bg-white rounded-2xl shadow-lg p-8 mb-8">
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">Support Services</h2>
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="w-12 h-12 bg-gradient-to-br from-caloocan-orange to-caloocan-primary rounded-full flex items-center justify-center mr-6">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold text-gray-900 mb-2">Financial Literacy Training</h3>
                                <p class="text-gray-600">Learn about budgeting, saving, investing, and managing personal finances effectively.</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-12 h-12 bg-gradient-to-br from-caloocan-primary to-caloocan-secondary rounded-full flex items-center justify-center mr-6">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold text-gray-900 mb-2">Microfinance Support</h3>
                                <p class="text-gray-600">Access to small loans and financial assistance to start or expand your business.</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-12 h-12 bg-gradient-to-br from-caloocan-secondary to-caloocan-accent rounded-full flex items-center justify-center mr-6">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold text-gray-900 mb-2">Mentorship Programs</h3>
                                <p class="text-gray-600">Connect with experienced professionals and entrepreneurs for guidance and support.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Requirements Section -->
                <div class="bg-white rounded-2xl shadow-lg p-8">
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">Program Requirements</h2>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <div class="w-6 h-6 bg-caloocan-orange rounded-full flex items-center justify-center mr-4 mt-1">
                                <span class="text-white text-sm font-bold">1</span>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-900 mb-2">Age Requirement</h3>
                                <p class="text-gray-600">Must be 18 years old and above (some programs may have specific age requirements)</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-6 h-6 bg-caloocan-primary rounded-full flex items-center justify-center mr-4 mt-1">
                                <span class="text-white text-sm font-bold">2</span>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-900 mb-2">Residency</h3>
                                <p class="text-gray-600">Must be a resident of Caloocan City for at least 6 months</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-6 h-6 bg-caloocan-secondary rounded-full flex items-center justify-center mr-4 mt-1">
                                <span class="text-white text-sm font-bold">3</span>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-900 mb-2">Educational Background</h3>
                                <p class="text-gray-600">At least elementary graduate (specific programs may require higher education)</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="w-6 h-6 bg-caloocan-accent rounded-full flex items-center justify-center mr-4 mt-1">
                                <span class="text-white text-sm font-bold">4</span>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-900 mb-2">Commitment</h3>
                                <p class="text-gray-600">Must be willing to complete the full training program and attend all sessions</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="lg:col-span-1">
                <!-- Contact Card -->
                <div class="bg-white rounded-2xl shadow-lg p-6 mb-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Contact Livelihood Office</h3>
                    <div class="space-y-3">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 text-caloocan-orange mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <span class="text-gray-700">Caloocan City Hall, 5th Floor</span>
                        </div>
                        <div class="flex items-center">
                            <svg class="w-5 h-5 text-caloocan-orange mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                            <span class="text-gray-700">(02) 8-XXX-XXXX</span>
                        </div>
                        <div class="flex items-center">
                            <svg class="w-5 h-5 text-caloocan-orange mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            <span class="text-gray-700">livelihood@caloocan.gov.ph</span>
                        </div>
                    </div>
                </div>

                <!-- Office Hours -->
                <div class="bg-white rounded-2xl shadow-lg p-6 mb-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Office Hours</h3>
                    <div class="space-y-2">
                        <div class="flex justify-between">
                            <span class="text-gray-600">Monday - Friday</span>
                            <span class="font-semibold">8:00 AM - 5:00 PM</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">Saturday</span>
                            <span class="font-semibold">8:00 AM - 12:00 PM</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">Sunday</span>
                            <span class="font-semibold text-red-500">Closed</span>
                        </div>
                    </div>
                </div>

                <!-- Quick Actions -->
                <div class="bg-gradient-to-br from-caloocan-orange to-caloocan-primary rounded-2xl p-6 text-white">
                    <h3 class="text-xl font-bold mb-4">Start Your Journey</h3>
                    <p class="mb-4 text-white/90">Transform your life with our comprehensive training and livelihood programs.</p>
                    <a href="tel:+6328XXXXXXX" class="block w-full bg-white text-caloocan-orange text-center py-3 rounded-lg font-semibold hover:bg-gray-100 transition-colors">
                        📞 Call Livelihood Office
                    </a>
                </div>

                <!-- Upcoming Programs -->
                <div class="bg-white rounded-2xl shadow-lg p-6 mt-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Upcoming Programs</h3>
                    <div class="space-y-3">
                        <div class="border-l-4 border-caloocan-orange pl-4">
                            <h4 class="font-semibold text-gray-900">Basic Computer Training</h4>
                            <p class="text-sm text-gray-600">Starts: March 15, 2024</p>
                        </div>
                        <div class="border-l-4 border-caloocan-primary pl-4">
                            <h4 class="font-semibold text-gray-900">Food Processing Workshop</h4>
                            <p class="text-sm text-gray-600">Starts: March 20, 2024</p>
                        </div>
                        <div class="border-l-4 border-caloocan-secondary pl-4">
                            <h4 class="font-semibold text-gray-900">Entrepreneurship Seminar</h4>
                            <p class="text-sm text-gray-600">Starts: March 25, 2024</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Related Services -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-gray-900 text-center mb-12">Other Social Services</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <a href="{{ route('aics') }}" class="bg-gray-50 rounded-xl p-6 hover:bg-caloocan-primary/10 transition-colors group">
                <div class="w-12 h-12 bg-caloocan-primary rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                    </svg>
                </div>
                <h3 class="font-semibold text-gray-900 mb-2">AICS</h3>
                <p class="text-sm text-gray-600">Crisis Assistance</p>
            </a>
            <a href="{{ route('osca') }}" class="bg-gray-50 rounded-xl p-6 hover:bg-caloocan-secondary/10 transition-colors group">
                <div class="w-12 h-12 bg-caloocan-secondary rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                </div>
                <h3 class="font-semibold text-gray-900 mb-2">OSCA</h3>
                <p class="text-sm text-gray-600">Senior Citizens Affairs</p>
            </a>
            <a href="{{ route('pdao') }}" class="bg-gray-50 rounded-xl p-6 hover:bg-caloocan-accent/10 transition-colors group">
                <div class="w-12 h-12 bg-caloocan-accent rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h3 class="font-semibold text-gray-900 mb-2">PDAO</h3>
                <p class="text-sm text-gray-600">Persons with Disability</p>
            </a>
            <a href="{{ route('solo-parent') }}" class="bg-gray-50 rounded-xl p-6 hover:bg-caloocan-gold/10 transition-colors group">
                <div class="w-12 h-12 bg-caloocan-gold rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="font-semibold text-gray-900 mb-2">Solo Parent</h3>
                <p class="text-sm text-gray-600">Child Welfare Support</p>
            </a>
        </div>
    </div>
</section>
@endsection
