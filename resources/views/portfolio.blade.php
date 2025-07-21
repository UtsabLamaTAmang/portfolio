@extends('layouts.app')

@section('title', 'About Me - Marc Trestman')

@section('content')
    <!-- Hero Section with Background Image and Overlay -->
    <section class="relative h-[80vh] flex items-center">
        <!-- Background Image -->
        <div class="absolute inset-0">
            <img src="{{ asset('images/marc-about.jpg') }}" alt="Marc Trestman" class="w-full h-full object-cover object-center" />
            <!-- Overlay -->
            <div class="absolute inset-0 bg-black bg-opacity-70"></div>
        </div>
        <!-- Content -->
        <div class="relative z-10 max-w-4xl mx-auto px-4">
            <h1 class="text-5xl md:text-6xl font-bold mb-6">About Me</h1>
            <h2 class="text-2xl md:text-3xl font-semibold text-blue-300 mb-4">
                Solving Digital Challenges Through Design &amp; Development
            </h2>
            <p class="text-lg text-gray-200 mb-6">
                I'm a full-stack designer and developer who bridges the gap between stunning visuals and robust functionality.
                After 5+ years transforming ideas into digital realities for clients across three continents, I've built a reputation for creating
                <span class="font-bold text-white">conversion-focused experiences that solve real business problems.</span>
            </p>
            <button class="bg-blue-400 hover:bg-blue-500 text-white px-8 py-3 rounded-lg text-lg font-semibold transition-colors">
                View Portfolio
            </button>
        </div>
    </section>

    <!-- Image Showcase Section -->
    <section class="py-20 bg-card-bg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Top Left - Headshot -->
                <div class="relative overflow-hidden rounded-2xl">
                    <img src="{{ asset('images/marc-headshot.jpg') }}" alt="Marc Headshot" class="w-full h-80 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                </div>
                
                <!-- Top Right - Working -->
                <div class="relative overflow-hidden rounded-2xl">
                    <img src="{{ asset('images/marc-working.jpg') }}" alt="Marc Working" class="w-full h-80 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                </div>
                
                <!-- Bottom Left - Laptop Screen -->
                <div class="relative overflow-hidden rounded-2xl bg-gradient-to-br from-blue-900 to-purple-900 p-8 flex items-center justify-center">
                    <div class="text-center space-y-4">
                        <h3 class="text-2xl font-bold text-white">AMPLIFYING THE VOICES</h3>
                        <h4 class="text-xl text-gray-300">YOU WANT TO HEAR</h4>
                        <div class="w-16 h-1 bg-white mx-auto rounded"></div>
                    </div>
                </div>
                
                <!-- Bottom Right - Promotional -->
                <div class="relative overflow-hidden rounded-2xl bg-gradient-to-br from-blue-600 to-purple-600 p-8">
                    <div class="flex items-center justify-between h-full">
                        <div class="space-y-4">
                            <h3 class="text-2xl font-bold text-white">UI/UX FIGMA DESIGN EXPERT</h3>
                            <p class="text-blue-100">Custom SaaS, Websites & Landing Pages That Convert</p>
                            <button class="bg-white text-blue-600 px-6 py-2 rounded-lg font-semibold hover:bg-gray-100 transition-colors">
                                ORDER NOW
                            </button>
                        </div>
                        <div class="w-24 h-24 bg-white/20 rounded-full flex items-center justify-center">
                            <span class="text-white text-2xl font-bold">M</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- The Problems I Solve Section -->
    <section class="py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold mb-6">The Problems I Solve</h2>
                <p class="text-xl text-gray-400 max-w-3xl mx-auto">
                    Many clients come to me with challenges that are hindering their digital growth and success.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="flex items-start space-x-4">
                    <div class="w-6 h-6 bg-accent-blue rounded-full flex-shrink-0 mt-1"></div>
                    <div>
                        <h3 class="text-lg font-semibold mb-2">Outdated digital presence</h3>
                        <p class="text-gray-400">Your current website doesn't reflect your brand's evolution</p>
                    </div>
                </div>
                
                <div class="flex items-start space-x-4">
                    <div class="w-6 h-6 bg-accent-blue rounded-full flex-shrink-0 mt-1"></div>
                    <div>
                        <h3 class="text-lg font-semibold mb-2">Slow conversions</h3>
                        <p class="text-gray-400">Visitors aren't turning into customers effectively</p>
                    </div>
                </div>
                
                <div class="flex items-start space-x-4">
                    <div class="w-6 h-6 bg-accent-blue rounded-full flex-shrink-0 mt-1"></div>
                    <div>
                        <h3 class="text-lg font-semibold mb-2">Non-performing websites</h3>
                        <p class="text-gray-400">Your site isn't achieving your business goals</p>
                    </div>
                </div>
                
                <div class="flex items-start space-x-4">
                    <div class="w-6 h-6 bg-accent-blue rounded-full flex-shrink-0 mt-1"></div>
                    <div>
                        <h3 class="text-lg font-semibold mb-2">Disjointed systems</h3>
                        <p class="text-gray-400">Your tools and processes aren't working together</p>
                    </div>
                </div>
                
                <div class="flex items-start space-x-4">
                    <div class="w-6 h-6 bg-accent-blue rounded-full flex-shrink-0 mt-1"></div>
                    <div>
                        <h3 class="text-lg font-semibold mb-2">Difficulty translating business ideas</h3>
                        <p class="text-gray-400">Struggling to turn concepts into digital solutions</p>
                    </div>
                </div>
                
                <div class="flex items-start space-x-4">
                    <div class="w-6 h-6 bg-accent-blue rounded-full flex-shrink-0 mt-1"></div>
                    <div>
                        <h3 class="text-lg font-semibold mb-2">Lack of strategic direction</h3>
                        <p class="text-gray-400">Unclear roadmap for digital growth</p>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-12">
                <p class="text-lg text-gray-400 max-w-2xl mx-auto">
                    I take a strategic, data-driven approach to solve these problems and create solutions that drive real business results.
                </p>
            </div>
        </div>
    </section>

    <!-- My Expertise Section -->
    <section class="py-20 bg-card-bg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="space-y-8">
                    <h2 class="text-4xl md:text-5xl font-bold">My Expertise</h2>
                    
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <!-- Strategy & Planning -->
                        <div class="bg-dark-bg rounded-xl p-6 card-hover">
                            <div class="w-12 h-12 bg-accent-blue rounded-lg flex items-center justify-center mb-4">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold mb-3">Strategy & Planning</h3>
                            <ul class="space-y-2 text-gray-400 text-sm">
                                <li>• Market Research</li>
                                <li>• User Analysis</li>
                                <li>• Competitive Analysis</li>
                                <li>• ROI Planning</li>
                            </ul>
                        </div>
                        
                        <!-- UI/UX Design -->
                        <div class="bg-dark-bg rounded-xl p-6 card-hover">
                            <div class="w-12 h-12 bg-accent-blue rounded-lg flex items-center justify-center mb-4">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17v4a2 2 0 002 2h4M5 7h6"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold mb-3">UI/UX Design</h3>
                            <ul class="space-y-2 text-gray-400 text-sm">
                                <li>• User Research</li>
                                <li>• Wireframing</li>
                                <li>• Prototyping</li>
                                <li>• Design Systems</li>
                            </ul>
                        </div>
                        
                        <!-- Development -->
                        <div class="bg-dark-bg rounded-xl p-6 card-hover">
                            <div class="w-12 h-12 bg-accent-blue rounded-lg flex items-center justify-center mb-4">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold mb-3">Development</h3>
                            <ul class="space-y-2 text-gray-400 text-sm">
                                <li>• Front-End</li>
                                <li>• Back-End</li>
                                <li>• Testing/QA</li>
                                <li>• API Integration</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="relative">
                    <img src="{{ asset('images/marc-expertise.jpg') }}" alt="Marc Expertise" class="w-full h-96 object-cover rounded-2xl">
                    <div class="absolute -bottom-6 -left-6 bg-card-bg rounded-xl p-6 shadow-lg">
                        <div class="text-center">
                            <div class="text-3xl font-bold text-accent-blue mb-2">500+</div>
                            <div class="text-gray-400">Projects Completed</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Technical Skills Section -->
    <section class="py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="relative">
                    <img src="{{ asset('images/figma-interface.jpg') }}" alt="Figma Interface" class="w-full h-96 object-cover rounded-2xl">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent rounded-2xl"></div>
                    <div class="absolute bottom-6 left-6">
                        <h3 class="text-2xl font-bold text-white mb-2">Unlock Revenue,</h3>
                        <h4 class="text-xl text-gray-300">Elevate Your Brand</h4>
                    </div>
                </div>
                
                <div class="space-y-8">
                    <h2 class="text-4xl md:text-5xl font-bold">Technical Skills</h2>
                    
                    <div class="space-y-6">
                        <!-- Design Skills -->
                        <div>
                            <h3 class="text-xl font-semibold mb-4 text-accent-blue">Design</h3>
                            <div class="space-y-4">
                                <div>
                                    <div class="flex justify-between items-center mb-2">
                                        <span class="text-gray-300">UI/UX Design</span>
                                        <span class="text-accent-blue font-semibold">93%</span>
                                    </div>
                                    <div class="w-full bg-gray-700 rounded-full h-2">
                                        <div class="bg-accent-blue h-2 rounded-full" style="width: 95%"></div>
                                    </div>
                                </div>
                                
                                <div>
                                    <div class="flex justify-between items-center mb-2">
                                        <span class="text-gray-300">Figma</span>
                                        <span class="text-accent-blue font-semibold">97%</span>
                                    </div>
                                    <div class="w-full bg-gray-700 rounded-full h-2">
                                        <div class="bg-accent-blue h-2 rounded-full" style="width: 90%"></div>
                                    </div>
                                </div>
                                
                                <div>
                                    <div class="flex justify-between items-center mb-2">
                                        <span class="text-gray-300">Adobe Creative Suite</span>
                                        <span class="text-accent-blue font-semibold">80%</span>
                                    </div>
                                    <div class="w-full bg-gray-700 rounded-full h-2">
                                        <div class="bg-accent-blue h-2 rounded-full" style="width: 85%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Development Skills -->
                        <div>
                            <h3 class="text-xl font-semibold mb-4 text-accent-blue">Development</h3>
                            <div class="space-y-4">
                                <div>
                                    <div class="flex justify-between items-center mb-2">
                                        <span class="text-gray-300">HTML/CSS/JS</span>
                                        <span class="text-accent-blue font-semibold">95%</span>
                                    </div>
                                    <div class="w-full bg-gray-700 rounded-full h-2">
                                        <div class="bg-accent-blue h-2 rounded-full" style="width: 95%"></div>
                                    </div>
                                </div>
                                
                                <div>
                                    <div class="flex justify-between items-center mb-2">
                                        <span class="text-gray-300">React.js</span>
                                        <span class="text-accent-blue font-semibold">90%</span>
                                    </div>
                                    <div class="w-full bg-gray-700 rounded-full h-2">
                                        <div class="bg-accent-blue h-2 rounded-full" style="width: 90%"></div>
                                    </div>
                                </div>
                                
                                <div>
                                    <div class="flex justify-between items-center mb-2">
                                        <span class="text-gray-300">Python</span>
                                        <span class="text-accent-blue font-semibold">65%</span>
                                    </div>
                                    <div class="w-full bg-gray-700 rounded-full h-2">
                                        <div class="bg-accent-blue h-2 rounded-full" style="width: 65%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- My Approach Section -->
    <section class="py-20 bg-card-bg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold mb-6">My Approach</h2>
                <p class="text-xl text-gray-400 max-w-3xl mx-auto">
                    A proven methodology that ensures successful project delivery and exceptional results.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Discover -->
                <div class="bg-dark-bg rounded-xl p-6 card-hover">
                    <div class="w-12 h-12 bg-accent-blue rounded-lg flex items-center justify-center mb-4">
                        <span class="text-white font-bold text-xl">1</span>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Discover</h3>
                    <p class="text-gray-400 mb-4">Uncover business goals, user needs, and market opportunities.</p>
                    <ul class="space-y-2 text-gray-400 text-sm">
                        <li>• Stakeholder interviews</li>
                        <li>• User research</li>
                        <li>• Market analysis</li>
                        <li>• Competitor review</li>
                    </ul>
                </div>
                
                <!-- Define -->
                <div class="bg-dark-bg rounded-xl p-6 card-hover">
                    <div class="w-12 h-12 bg-accent-blue rounded-lg flex items-center justify-center mb-4">
                        <span class="text-white font-bold text-xl">2</span>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Define</h3>
                    <p class="text-gray-400 mb-4">Translate research into clear strategies and requirements.</p>
                    <ul class="space-y-2 text-gray-400 text-sm">
                        <li>• User personas</li>
                        <li>• User journey mapping</li>
                        <li>• Information architecture</li>
                        <li>• Feature prioritization</li>
                    </ul>
                </div>
                
                <!-- Design -->
                <div class="bg-dark-bg rounded-xl p-6 card-hover">
                    <div class="w-12 h-12 bg-accent-blue rounded-lg flex items-center justify-center mb-4">
                        <span class="text-white font-bold text-xl">3</span>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Design</h3>
                    <p class="text-gray-400 mb-4">Create intuitive interfaces and exceptional user experiences.</p>
                    <ul class="space-y-2 text-gray-400 text-sm">
                        <li>• Wireframing</li>
                        <li>• Prototyping</li>
                        <li>• Visual design</li>
                        <li>• Design systems</li>
                    </ul>
                </div>
                
                <!-- Develop -->
                <div class="bg-dark-bg rounded-xl p-6 card-hover">
                    <div class="w-12 h-12 bg-accent-blue rounded-lg flex items-center justify-center mb-4">
                        <span class="text-white font-bold text-xl">4</span>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Develop</h3>
                    <p class="text-gray-400 mb-4">Build robust, scalable solutions using modern technologies.</p>
                    <ul class="space-y-2 text-gray-400 text-sm">
                        <li>• Frontend development</li>
                        <li>• Backend integration</li>
                        <li>• Testing & QA</li>
                        <li>• Deployment</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Client Success Stories Section -->
    <section class="py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold mb-6">Client Success Stories</h2>
                <p class="text-xl text-gray-400 max-w-3xl mx-auto">
                    Real results from real clients. Here's how I've helped businesses achieve their digital goals.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- BMX Media Group -->
                <div class="bg-card-bg rounded-xl p-6 card-hover">
                    <div class="w-12 h-12 bg-accent-blue rounded-lg flex items-center justify-center mb-4">
                        <span class="text-white font-bold text-sm">BMX</span>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">BMX Media Group</h3>
                    <div class="space-y-4">
                        <div>
                            <h4 class="text-sm font-semibold text-accent-blue mb-2">Challenge</h4>
                            <p class="text-gray-400 text-sm">Outdated website with poor user engagement and low conversion rates.</p>
                        </div>
                        <div>
                            <h4 class="text-sm font-semibold text-accent-blue mb-2">Solution</h4>
                            <p class="text-gray-400 text-sm">Complete redesign with modern UI/UX, improved navigation, and conversion optimization.</p>
                        </div>
                        <div>
                            <h4 class="text-sm font-semibold text-accent-blue mb-2">Result</h4>
                            <p class="text-gray-400 text-sm">40% increase in user engagement and 25% improvement in conversion rates.</p>
                        </div>
                    </div>
                </div>
                
                <!-- Wellness TOYS -->
                <div class="bg-card-bg rounded-xl p-6 card-hover">
                    <div class="w-12 h-12 bg-accent-blue rounded-lg flex items-center justify-center mb-4">
                        <span class="text-white font-bold text-sm">WT</span>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Wellness TOYS</h3>
                    <div class="space-y-4">
                        <div>
                            <h4 class="text-sm font-semibold text-accent-blue mb-2">Challenge</h4>
                            <p class="text-gray-400 text-sm">High bounce rates and poor mobile experience affecting sales.</p>
                        </div>
                        <div>
                            <h4 class="text-sm font-semibold text-accent-blue mb-2">Solution</h4>
                            <p class="text-gray-400 text-sm">Mobile-first redesign with improved user experience and streamlined checkout process.</p>
                        </div>
                        <div>
                            <h4 class="text-sm font-semibold text-accent-blue mb-2">Result</h4>
                            <p class="text-gray-400 text-sm">60% reduction in bounce rates and 35% increase in mobile conversions.</p>
                        </div>
                    </div>
                </div>
                
                <!-- Vrigint -->
                <div class="bg-card-bg rounded-xl p-6 card-hover">
                    <div class="w-12 h-12 bg-accent-blue rounded-lg flex items-center justify-center mb-4">
                        <span class="text-white font-bold text-sm">V</span>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Vrigint</h3>
                    <div class="space-y-4">
                        <div>
                            <h4 class="text-sm font-semibold text-accent-blue mb-2">Challenge</h4>
                            <p class="text-gray-400 text-sm">Complex product catalog with poor search functionality and customer satisfaction.</p>
                        </div>
                        <div>
                            <h4 class="text-sm font-semibold text-accent-blue mb-2">Solution</h4>
                            <p class="text-gray-400 text-sm">Advanced search system, improved product filtering, and enhanced user interface.</p>
                        </div>
                        <div>
                            <h4 class="text-sm font-semibold text-accent-blue mb-2">Result</h4>
                            <p class="text-gray-400 text-sm">50% increase in sales and 40% improvement in customer satisfaction scores.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Work With Me Section -->
    <section class="py-20 bg-card-bg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold mb-6">Why Work With Me</h2>
                <p class="text-xl text-gray-400 max-w-3xl mx-auto">
                    I bring a unique combination of skills and experience that sets me apart from other designers and developers.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Results-Driven -->
                <div class="text-center">
                    <div class="w-16 h-16 bg-accent-blue rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Results-Driven</h3>
                    <p class="text-gray-400">
                        I focus on measurable business outcomes, not just pretty designs. Every decision is made with your goals in mind.
                    </p>
                </div>
                
                <!-- Full-Stack Expertise -->
                <div class="text-center">
                    <div class="w-16 h-16 bg-accent-blue rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Full-Stack Expertise</h3>
                    <p class="text-gray-400">
                        From design to development, I handle the entire process. No communication gaps or handoff issues.
                    </p>
                </div>
                
                <!-- Strategic Partner -->
                <div class="text-center">
                    <div class="w-16 h-16 bg-accent-blue rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Strategic Partner</h3>
                    <p class="text-gray-400">
                        I become an extension of your team, providing strategic guidance and long-term partnership.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Beyond Work Section -->
    <section class="py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
                <!-- Text Content -->
                <div>
                    <h2 class="text-4xl md:text-5xl font-bold mb-8">Beyond Work</h2>
                    <div class="space-y-8 text-xl text-white">
                        <p>
                            When I'm not designing or coding, you'll find me exploring new technologies, contributing to open-source projects, or mentoring aspiring developers. I believe in continuous learning and giving back to the community that has supported my growth.
                        </p>
                        <p>
                            I'm also passionate about photography, hiking, and discovering new coffee shops in Tel Aviv. These activities help me maintain a fresh perspective and bring creative energy to my work.
                        </p>
                        <p>
                            My background in both design and development gives me a unique perspective on digital projects. I understand the challenges and opportunities from multiple angles, which helps me create solutions that are both beautiful and functional.
                        </p>
                    </div>
                </div>
                <!-- Image Grid -->
                <div class="grid grid-cols-2 grid-rows-2 gap-6">
                    <img src="{{ asset('images/marc-personal-1.jpg') }}" alt="Marc Personal 1" class="w-full h-56 object-cover rounded-xl" />
                    <img src="{{ asset('images/marc-personal-2.jpg') }}" alt="Marc Personal 2" class="w-full h-56 object-cover rounded-xl" />
                    <img src="{{ asset('images/marc-personal-3.jpg') }}" alt="Marc Personal 3" class="w-full h-56 object-cover rounded-xl" />
                    <img src="{{ asset('images/marc-personal-4.jpg') }}" alt="Marc Personal 4" class="w-full h-56 object-cover rounded-xl" />
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="py-20 bg-card-bg">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-4xl md:text-5xl font-bold mb-6">Ready to Discuss Your Project?</h2>
            <p class="text-xl text-gray-400 mb-8 max-w-2xl mx-auto">
                Let's schedule a call to explore how I can help you achieve your digital goals and create something amazing together.
            </p>
            <button class="bg-accent-blue hover:bg-blue-600 text-white px-8 py-4 rounded-lg text-lg font-semibold transition-colors">
                Get in touch
            </button>
        </div>
    </section>
@endsection 