<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tradeded Pro</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        dark: '#0f1217',
                        darker: '#080a0e',
                        primary: '#2e71ff',
                        success: '#00c076',
                        danger: '#ff5757',
                        secondary: '#1e2329'
                    }
                }
            }
        }
    </script>
    <style>
        .nav-link-custom {
            position: relative;
            transition: all 0.3s ease;
            overflow: hidden;
        }
        .nav-link-custom::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, #2e71ff 0%, #00c076 100%);
            transition: left 0.3s ease;
            z-index: -1;
        }
        .nav-link-custom:hover::before,
        .nav-link-custom.active::before {
            left: 0;
        }
        .nav-link-custom:hover,
        .nav-link-custom.active {
            color: #fff !important;
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(46, 113, 255, 0.3);
        }
        .mobile-nav-bg {
            background: rgba(15, 18, 23, 0.98);
            backdrop-filter: blur(20px);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
        }
        .logo-glow {
            box-shadow: 0 0 20px rgba(46, 113, 255, 0.5);
            transition: all 0.3s ease;
        }
        .logo-glow:hover {
            box-shadow: 0 0 30px rgba(46, 113, 255, 0.8);
            transform: scale(1.05);
        }
        .header-gradient {
            background: linear-gradient(135deg, #0f1217 0%, #1a1f2e 50%, #0f1217 100%);
            border-bottom: 1px solid rgba(46, 113, 255, 0.2);
        }
        .nav-menu-enter {
            animation: slideInFromTop 0.3s ease-out;
        }
        @keyframes slideInFromTop {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .mobile-nav-item {
            transition: all 0.3s ease;
        }
        .mobile-nav-item:hover {
            transform: translateX(10px);
            background: rgba(46, 113, 255, 0.1);
        }
    </style>
    <!-- TradingView Widget Script -->
    <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
</head>
<body class="bg-darker text-white">
    <!-- Header -->
    <header class="header-gradient shadow-2xl sticky top-0 z-50 backdrop-blur-md">
        <div class="container mx-auto flex items-center justify-between py-4 px-6">
            <a href="/index.php" class="flex items-center space-x-3 group">
                <div class="relative">
                    <img src="/logo.png" alt="Tradeded Pro Logo" class="h-12 w-12 rounded-full logo-glow border-2 border-primary">
                    <div class="absolute inset-0 rounded-full bg-primary opacity-20 animate-pulse"></div>
                </div>
                <div class="flex flex-col">
                    <span class="font-bold text-2xl text-primary tracking-wide group-hover:text-white transition-colors duration-300">Tradeded Pro</span>
                    <span class="text-xs text-gray-400 font-medium">Professional Trading Platform</span>
                </div>
            </a>
            
            <nav class="hidden md:flex space-x-1 lg:space-x-3 items-center nav-menu-enter">
                <a href="/index.php" class="nav-link-custom px-5 py-3 rounded-xl text-gray-300 font-semibold text-sm lg:text-base relative z-10">
                    <span class="flex items-center space-x-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                        <span>Home</span>
                    </span>
                </a>
                <a href="/market.php" class="nav-link-custom px-5 py-3 rounded-xl text-gray-300 font-semibold text-sm lg:text-base relative z-10">
                    <span class="flex items-center space-x-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                        </svg>
                        <span>Markets</span>
                    </span>
                </a>
                <a href="/copy-trading.php" class="nav-link-custom px-5 py-3 rounded-xl text-gray-300 font-semibold text-sm lg:text-base relative z-10">
                    <span class="flex items-center space-x-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                        </svg>
                        <span>Copy Trading</span>
                    </span>
                </a>
                <a href="/about.php" class="nav-link-custom px-5 py-3 rounded-xl text-gray-300 font-semibold text-sm lg:text-base relative z-10">
                    <span class="flex items-center space-x-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span>About Us</span>
                    </span>
                </a>
                <a href="/contact.php" class="nav-link-custom px-5 py-3 rounded-xl text-gray-300 font-semibold text-sm lg:text-base relative z-10">
                    <span class="flex items-center space-x-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        <span>Contact</span>
                    </span>
                </a>
                <div class="flex items-center space-x-3 ml-6">
                    <a href="https://tradededpro.com/app/user/register" class="px-4 py-2 rounded-lg bg-gradient-to-r from-success to-primary text-white font-bold shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300">
                        Sign Up
                    </a>
                    <a href="https://tradededpro.com/app/user/login" class="px-4 py-2 rounded-lg bg-primary text-white font-bold shadow-lg hover:bg-blue-700 hover:shadow-xl transform hover:scale-105 transition-all duration-300">
                        Login
                    </a>
                </div>
            </nav>
            
            <button id="navToggle" class="md:hidden text-primary focus:outline-none hover:text-white transition-colors duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
        
        <!-- Mobile Nav -->
        <div id="mobileNav" class="mobile-nav-bg fixed inset-0 flex flex-col items-center justify-center space-y-8 text-xl font-semibold text-gray-200 hidden md:hidden z-50">
            <div class="text-center mb-8">
                <img src="/logo.png" alt="Tradeded Pro Logo" class="h-16 w-16 rounded-full logo-glow border-2 border-primary mx-auto mb-4">
                <h2 class="text-2xl font-bold text-primary">Tradeded Pro</h2>
                <p class="text-sm text-gray-400">Professional Trading Platform</p>
            </div>
            
            <a href="/index.php" class="mobile-nav-item nav-link-custom px-8 py-4 rounded-xl w-64 text-center flex items-center justify-center space-x-3">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                </svg>
                <span>Home</span>
            </a>
            <a href="/market.php" class="mobile-nav-item nav-link-custom px-8 py-4 rounded-xl w-64 text-center flex items-center justify-center space-x-3">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                </svg>
                <span>Markets</span>
            </a>
            <a href="/copy-trading.php" class="mobile-nav-item nav-link-custom px-8 py-4 rounded-xl w-64 text-center flex items-center justify-center space-x-3">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                </svg>
                <span>Copy Trading</span>
            </a>
            <a href="/about.php" class="mobile-nav-item nav-link-custom px-8 py-4 rounded-xl w-64 text-center flex items-center justify-center space-x-3">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <span>About Us</span>
            </a>
            <a href="/contact.php" class="mobile-nav-item nav-link-custom px-8 py-4 rounded-xl w-64 text-center flex items-center justify-center space-x-3">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                </svg>
                <span>Contact</span>
            </a>
            
            <div class="flex flex-col space-y-4 mt-8">
                <a href="https://tradededpro.com/app/user/register" class="px-8 py-3 rounded-lg bg-gradient-to-r from-success to-primary text-white font-bold shadow-lg w-64 text-center">Sign Up</a>
                <a href="https://tradededpro.com/app/user/login" class="px-8 py-3 rounded-lg bg-primary text-white font-bold shadow-lg w-64 text-center">Login</a>
            </div>
            
            <button id="closeMobileNav" class="mt-8 text-danger text-lg hover:text-red-400 transition-colors duration-300 flex items-center space-x-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
                <span>Close Menu</span>
            </button>
        </div>
    </header>
    <script>
        // Mobile nav toggle
        document.addEventListener('DOMContentLoaded', function() {
            var navToggle = document.getElementById('navToggle');
            var mobileNav = document.getElementById('mobileNav');
            var closeMobileNav = document.getElementById('closeMobileNav');
            navToggle && navToggle.addEventListener('click', function() {
                mobileNav.classList.remove('hidden');
            });
            closeMobileNav && closeMobileNav.addEventListener('click', function() {
                mobileNav.classList.add('hidden');
            });
            // Highlight current page
            var links = document.querySelectorAll('nav a, #mobileNav a');
            var path = window.location.pathname.replace(/^\//, '');
            links.forEach(function(link) {
                var href = link.getAttribute('href').replace(/^\//, '');
                if(href === path) {
                    link.classList.add('active');
                }
            });
        });
    </script> 