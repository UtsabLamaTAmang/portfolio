<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Marc - UI/UX Designer & Developer')</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Alpine.js for interactivity -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
    <!-- Custom Tailwind Config -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'dark-bg': '#0E0E0E',
                        'card-bg': '#1A1A1A',
                        'accent-blue': '#3B82F6',
                    },
                    fontFamily: {
                        'sans': ['Inter', 'system-ui', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        
        .gradient-text {
            background: linear-gradient(135deg, #3B82F6, #8B5CF6);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .card-hover {
            transition: all 0.3s ease;
        }
        
        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
    </style>
</head>
<body class="bg-dark-bg text-white min-h-screen">
    <!-- Navigation -->
    <nav class="fixed top-0 left-0 right-0 z-50 bg-dark-bg/95 backdrop-blur-sm border-b border-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex items-center space-x-2">
    <!-- Circular blue dot -->
    <div class="w-3 h-3 bg-blue-500 rounded-full"></div>
    
    <!-- Brand name -->
    <span class="text-xl font-bold">MARC</span>
</div>

                
                <!-- Desktop Navigation -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#work" class="text-gray-300 hover:text-white transition-colors">Work</a>
                    <a href="#services" class="text-gray-300 hover:text-white transition-colors">Services</a>
                    <a href="#tools" class="text-gray-300 hover:text-white transition-colors">Tools</a>
                    <a href="#blog" class="text-gray-300 hover:text-white transition-colors">Blog</a>
                    <a href="#about" class="text-gray-300 hover:text-white transition-colors">About</a>
                    <a href="#contact" class="text-gray-300 hover:text-white transition-colors">Contact</a>
                    <button class="bg-accent-blue hover:bg-blue-600 text-white px-6 py-2 rounded-lg transition-colors">
                        Get in Touch
                    </button>
                </div>
                
                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button class="text-gray-300 hover:text-white">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="pt-16">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-card-bg border-t border-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Start a Project -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">Start a Project</h3>
                    <p class="text-gray-400 mb-4">Let's build something great together.</p>
                    <button class="bg-accent-blue hover:bg-blue-600 text-white px-4 py-2 rounded-lg transition-colors">
                        Get in touch
                    </button>
                </div>
                
                <!-- Services -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">Services</h3>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white transition-colors">UI/UX Design</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Web Development</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">SaaS Development</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">API Integration</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Consultancy</a></li>
                    </ul>
                </div>
                
                <!-- Tools -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">Tools</h3>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white transition-colors">Website Audit</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">SEO Analysis</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Project Timeline</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">A/B Testing</a></li>
                    </ul>
                </div>
                
                <!-- Connect -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">Connect</h3>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white transition-colors">LinkedIn</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Schedule a Call</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Instagram</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2023 Marc Trestman. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html> 