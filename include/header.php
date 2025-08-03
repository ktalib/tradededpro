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
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            border-radius: 8px;
        }
        .nav-link-custom::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, #2e71ff 0%, #00c076 100%);
            border-radius: 8px;
            opacity: 0;
            transition: opacity 0.3s ease;
            z-index: -1;
        }
        .nav-link-custom:hover::before,
        .nav-link-custom.active::before {
            opacity: 1;
        }
        .nav-link-custom:hover,
        .nav-link-custom.active {
            color: #fff !important;
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(46, 113, 255, 0.3);
        }
        .nav-icon {
            transition: all 0.3s ease;
        }
        .nav-link-custom:hover .nav-icon {
            transform: scale(1.1);
        }
        .logo-container {
            transition: all 0.3s ease;
        }
        .logo-text {
            background: linear-gradient(135deg, #2e71ff 0%, #00c076 50%, #2e71ff 100%);
            background-size: 200% 200%;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            animation: gradientShift 3s ease-in-out infinite;
            font-weight: 800;
            letter-spacing: -0.5px;
        }
        @keyframes gradientShift {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }
        .logo-container:hover .logo-text {
            transform: scale(1.05);
        }
        .header-gradient {
            background: linear-gradient(135deg, rgba(8, 10, 14, 0.95) 0%, rgba(15, 18, 23, 0.98) 50%, rgba(8, 10, 14, 0.95) 100%);
            border-bottom: 1px solid rgba(46, 113, 255, 0.2);
            backdrop-filter: blur(20px);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
        }
        .nav-menu-enter {
            animation: slideInFromTop 0.5s cubic-bezier(0.4, 0, 0.2, 1);
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
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            border-radius: 12px;
        }
        .mobile-nav-item:hover {
            transform: translateX(10px);
            background: linear-gradient(135deg, rgba(46, 113, 255, 0.1) 0%, rgba(0, 192, 118, 0.1) 100%);
        }
        .cta-button {
            position: relative;
            overflow: hidden;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            border-radius: 8px;
        }
        .cta-button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.5s ease;
        }
        .cta-button:hover::before {
            left: 100%;
        }
        .cta-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(46, 113, 255, 0.4);
        }
        .hamburger-menu {
            position: relative;
            width: 30px;
            height: 30px;
            cursor: pointer;
            transition: all 0.3s ease;
            z-index: 60;
        }
        .hamburger-line {
            position: absolute;
            width: 100%;
            height: 2px;
            background: linear-gradient(135deg, #2e71ff 0%, #00c076 100%);
            border-radius: 2px;
            transition: all 0.3s ease;
        }
        .hamburger-line:nth-child(1) { top: 6px; }
        .hamburger-line:nth-child(2) { top: 14px; }
        .hamburger-line:nth-child(3) { top: 22px; }
        .hamburger-menu:hover .hamburger-line {
            box-shadow: 0 0 8px rgba(46, 113, 255, 0.5);
        }
        .hamburger-menu.active .hamburger-line:nth-child(1) {
            transform: rotate(45deg);
            top: 14px;
        }
        .hamburger-menu.active .hamburger-line:nth-child(2) {
            opacity: 0;
        }
        .hamburger-menu.active .hamburger-line:nth-child(3) {
            transform: rotate(-45deg);
            top: 14px;
        }
        .mobile-nav-overlay {
            background: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(10px);
            animation: fadeIn 0.3s ease-out;
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        .mobile-sidebar {
            background: linear-gradient(135deg, rgba(8, 10, 14, 0.98) 0%, rgba(15, 18, 23, 0.95) 100%);
            backdrop-filter: blur(30px);
            border-right: 1px solid rgba(46, 113, 255, 0.2);
            box-shadow: 4px 0 20px rgba(0, 0, 0, 0.3);
            animation: slideInFromLeft 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        @keyframes slideInFromLeft {
            from {
                transform: translateX(-100%);
            }
            to {
                transform: translateX(0);
            }
        }
        .mobile-sidebar.closing {
            animation: slideOutToLeft 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        @keyframes slideOutToLeft {
            from {
                transform: translateX(0);
            }
            to {
                transform: translateX(-100%);
            }
        }
        .notification-badge {
            position: absolute;
            top: -6px;
            right: -6px;
            width: 16px;
            height: 16px;
            background: linear-gradient(135deg, #ff5757 0%, #ff8a80 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 9px;
            font-weight: bold;
            color: white;
            animation: pulse 2s infinite;
        }
        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.1); }
        }
        .header-scroll {
            background: rgba(8, 10, 14, 0.98);
            backdrop-filter: blur(25px);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.4);
        }
        .hot-badge {
            background: linear-gradient(135deg, #ff6b6b 0%, #ff8e53 100%);
            color: white;
            padding: 2px 6px;
            border-radius: 10px;
            font-size: 9px;
            font-weight: bold;
            margin-left: 4px;
            animation: glow 2s ease-in-out infinite alternate;
        }
        @keyframes glow {
            from { box-shadow: 0 0 5px rgba(255, 107, 107, 0.5); }
            to { box-shadow: 0 0 10px rgba(255, 107, 107, 0.8); }
        }
    </style>
    <!-- TradingView Widget Script -->
    <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
</head>
<body class="bg-darker text-white">
    <!-- Header -->
    <header class="header-gradient shadow-2xl sticky top-0 z-50 backdrop-blur-md transition-all duration-300" id="header">
        <div class="container mx-auto flex items-center justify-between py-3 px-4 sm:py-4 sm:px-6">
            <!-- Enhanced Logo -->
            <a href="/index.php" class="logo-container flex items-center space-x-3 group">
                <div class="relative">
                    <div class="w-10 h-10 rounded-lg bg-gradient-to-br from-primary via-success to-primary p-0.5 shadow-lg hover:shadow-primary/50 transition-all duration-300">
                        <div class="w-full h-full rounded-lg bg-darker flex items-center justify-center">
                            <svg class="w-5 h-5 text-primary group-hover:text-white transition-colors duration-300" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/>
                            </svg>
                        </div>
                    </div>
                    <div class="absolute -top-1 -right-1 w-3 h-3 bg-gradient-to-r from-success to-primary rounded-full animate-pulse"></div>
                </div>
                <div class="flex flex-col">
                    <span class="logo-text text-lg sm:text-xl font-bold tracking-tight">Tradeded Pro</span>
                    <span class="text-xs text-gray-400 font-medium opacity-80 group-hover:opacity-100 transition-opacity duration-300 hidden sm:block">Professional Trading</span>
                </div>
            </a>
            
            <!-- Clean Navigation -->
            <nav class="hidden lg:flex space-x-2 xl:space-x-4 items-center nav-menu-enter">
                <a href="/index.php" class="nav-link-custom px-4 py-2.5 text-gray-300 font-medium text-sm lg:text-base relative transition-all duration-300 hover:text-white">
                    <span class="flex items-center space-x-2">
                        <svg class="nav-icon w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                        <span>Home</span>
                    </span>
                </a>
                
                <a href="/market.php" class="nav-link-custom px-4 py-2.5 text-gray-300 font-medium text-sm lg:text-base relative transition-all duration-300 hover:text-white">
                    <span class="flex items-center space-x-2">
                        <svg class="nav-icon w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                        </svg>
                        <span>Markets</span>
                        <div class="notification-badge">3</div>
                    </span>
                </a>
                
                <a href="/copy-trading.php" class="nav-link-custom px-4 py-2.5 text-gray-300 font-medium text-sm lg:text-base relative transition-all duration-300 hover:text-white">
                    <span class="flex items-center space-x-2">
                        <svg class="nav-icon w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                        </svg>
                        <span>Copy Trading</span>
                        <span class="hot-badge">HOT</span>
                    </span>
                </a>
                
                <a href="/about.php" class="nav-link-custom px-4 py-2.5 text-gray-300 font-medium text-sm lg:text-base relative transition-all duration-300 hover:text-white">
                    <span class="flex items-center space-x-2">
                        <svg class="nav-icon w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span>About</span>
                    </span>
                </a>
                
                <a href="/contact.php" class="nav-link-custom px-4 py-2.5 text-gray-300 font-medium text-sm lg:text-base relative transition-all duration-300 hover:text-white">
                    <span class="flex items-center space-x-2">
                        <svg class="nav-icon w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        <span>Contact</span>
                    </span>
                </a>
                
                <!-- CTA Buttons -->
                <div class="flex items-center space-x-3 ml-6 border-l border-gray-700/50 pl-6">
                    <a href="https://tradededpro.com/app/user/register" class="cta-button px-5 py-2.5 bg-gradient-to-r from-success to-primary text-white font-semibold shadow-lg hover:shadow-xl transition-all duration-300 relative overflow-hidden">
                        <span class="relative z-10 flex items-center space-x-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
                            </svg>
                            <span>Sign Up</span>
                        </span>
                    </a>
                    
                    <a href="https://tradededpro.com/app/user/login" class="cta-button px-5 py-2.5 bg-slate-800/80 hover:bg-primary text-white font-semibold shadow-lg hover:shadow-xl transition-all duration-300 border border-slate-600/50 hover:border-primary/50">
                        <span class="flex items-center space-x-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>
                            </svg>
                            <span>Login</span>
                        </span>
                    </a>
                </div>
            </nav>
            
            <!-- Tablet Navigation (simplified) -->
            <nav class="hidden md:flex lg:hidden items-center space-x-2">
                <a href="/index.php" class="nav-link-custom px-3 py-2 text-gray-300 font-medium text-sm relative transition-all duration-300 hover:text-white">
                    <svg class="nav-icon w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                    </svg>
                </a>
                <a href="/market.php" class="nav-link-custom px-3 py-2 text-gray-300 font-medium text-sm relative transition-all duration-300 hover:text-white">
                    <svg class="nav-icon w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                    </svg>
                </a>
                <a href="/copy-trading.php" class="nav-link-custom px-3 py-2 text-gray-300 font-medium text-sm relative transition-all duration-300 hover:text-white">
                    <svg class="nav-icon w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                    </svg>
                </a>
                <a href="/about.php" class="nav-link-custom px-3 py-2 text-gray-300 font-medium text-sm relative transition-all duration-300 hover:text-white">
                    <svg class="nav-icon w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </a>
                <a href="/contact.php" class="nav-link-custom px-3 py-2 text-gray-300 font-medium text-sm relative transition-all duration-300 hover:text-white">
                    <svg class="nav-icon w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                </a>
                <div class="flex items-center space-x-2 ml-4 border-l border-gray-700/50 pl-4">
                    <a href="https://tradededpro.com/app/user/register" class="cta-button px-3 py-2 bg-gradient-to-r from-success to-primary text-white font-semibold text-xs shadow-lg hover:shadow-xl transition-all duration-300 relative overflow-hidden">
                        Sign Up
                    </a>
                    <a href="https://tradededpro.com/app/user/login" class="cta-button px-3 py-2 bg-slate-800/80 hover:bg-primary text-white font-semibold text-xs shadow-lg hover:shadow-xl transition-all duration-300 border border-slate-600/50 hover:border-primary/50">
                        Login
                    </a>
                </div>
            </nav>

            <!-- Mobile Menu Button -->
            <button id="navToggle" class="md:hidden hamburger-menu focus:outline-none p-2 -mr-2">
                <div class="hamburger-line"></div>
                <div class="hamburger-line"></div>
                <div class="hamburger-line"></div>
            </button>
        </div>
        
        <!-- Mobile Sidebar Navigation -->
        <div id="mobileNav" class="mobile-nav-overlay fixed inset-0 hidden z-50">
            <!-- Sidebar -->
            <div class="mobile-sidebar fixed left-0 top-0 h-full w-80 max-w-[85vw] flex flex-col">
                <!-- Sidebar Header -->
                <div class="flex items-center justify-between p-6 border-b border-gray-700/50">
                    <div class="flex items-center space-x-3">
                        <div class="w-10 h-10 rounded-lg bg-gradient-to-br from-primary via-success to-primary p-0.5 shadow-lg">
                            <div class="w-full h-full rounded-lg bg-darker flex items-center justify-center">
                                <svg class="w-5 h-5 text-primary" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/>
                                </svg>
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <span class="logo-text text-lg font-bold tracking-tight">Tradeded Pro</span>
                            <span class="text-xs text-gray-400 font-medium">Professional Trading</span>
                        </div>
                    </div>
                    <button id="closeMobileNav" class="p-2 rounded-lg hover:bg-gray-700/50 transition-colors duration-200">
                        <svg class="w-5 h-5 text-gray-400 hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>

                <!-- Navigation Menu -->
                <div class="flex-1 overflow-y-auto py-6">
                    <nav class="px-6 space-y-2">
                        <!-- Main Navigation -->
                        <div class="space-y-1">
                            <p class="text-xs font-semibold text-gray-400 uppercase tracking-wider mb-3">Main Menu</p>
                            
                            <a href="/index.php" class="mobile-nav-item nav-link-custom flex items-center space-x-3 px-4 py-3 text-gray-300 hover:text-white rounded-lg group">
                                <svg class="w-5 h-5 text-gray-400 group-hover:text-primary transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                                </svg>
                                <span class="font-medium">Home</span>
                            </a>

                            <a href="/market.php" class="mobile-nav-item nav-link-custom flex items-center space-x-3 px-4 py-3 text-gray-300 hover:text-white rounded-lg group relative">
                                <svg class="w-5 h-5 text-gray-400 group-hover:text-primary transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                </svg>
                                <span class="font-medium">Markets</span>
                                <div class="ml-auto">
                                    <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-red-500/20 text-red-400">3</span>
                                </div>
                            </a>

                            <a href="/copy-trading.php" class="mobile-nav-item nav-link-custom flex items-center space-x-3 px-4 py-3 text-gray-300 hover:text-white rounded-lg group relative">
                                <svg class="w-5 h-5 text-gray-400 group-hover:text-primary transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                </svg>
                                <span class="font-medium">Copy Trading</span>
                                <div class="ml-auto">
                                    <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-bold bg-gradient-to-r from-orange-500 to-red-500 text-white">HOT</span>
                                </div>
                            </a>

                            <a href="/about.php" class="mobile-nav-item nav-link-custom flex items-center space-x-3 px-4 py-3 text-gray-300 hover:text-white rounded-lg group">
                                <svg class="w-5 h-5 text-gray-400 group-hover:text-primary transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span class="font-medium">About</span>
                            </a>

                            <a href="/contact.php" class="mobile-nav-item nav-link-custom flex items-center space-x-3 px-4 py-3 text-gray-300 hover:text-white rounded-lg group">
                                <svg class="w-5 h-5 text-gray-400 group-hover:text-primary transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                                <span class="font-medium">Contact</span>
                            </a>
                        </div>

                        <!-- Divider -->
                        <div class="border-t border-gray-700/50 my-6"></div>

                        <!-- Account Section -->
                        <div class="space-y-1">
                            <p class="text-xs font-semibold text-gray-400 uppercase tracking-wider mb-3">Account</p>
                            
                            <a href="https://tradededpro.com/app/user/register" class="flex items-center space-x-3 px-4 py-3 text-white bg-gradient-to-r from-success to-primary rounded-lg hover:from-success/90 hover:to-primary/90 transition-all duration-200 group">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
                                </svg>
                                <span class="font-semibold">Sign Up</span>
                                <svg class="w-4 h-4 ml-auto group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>

                            <a href="https://tradededpro.com/app/user/login" class="flex items-center space-x-3 px-4 py-3 text-gray-300 hover:text-white border border-gray-600/50 hover:border-primary/50 rounded-lg transition-all duration-200 group">
                                <svg class="w-5 h-5 text-gray-400 group-hover:text-primary transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>
                                </svg>
                                <span class="font-medium">Login</span>
                                <svg class="w-4 h-4 ml-auto group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </nav>
                </div>

                <!-- Sidebar Footer -->
                <div class="p-6 border-t border-gray-700/50">
                    <div class="text-center">
                        <p class="text-xs text-gray-400 mb-2">Professional Trading Platform</p>
                        <div class="flex items-center justify-center space-x-4 text-gray-500">
                            <span class="text-xs">v2.1.0</span>
                            <span class="w-1 h-1 bg-gray-500 rounded-full"></span>
                            <span class="text-xs">© 2024</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <script>
        // Mobile nav toggle with animations
        document.addEventListener('DOMContentLoaded', function() {
            var navToggle = document.getElementById('navToggle');
            var mobileNav = document.getElementById('mobileNav');
            var closeMobileNav = document.getElementById('closeMobileNav');
            var header = document.getElementById('header');
            
            // Mobile nav toggle
            navToggle && navToggle.addEventListener('click', function() {
                navToggle.classList.toggle('active');
                mobileNav.classList.remove('hidden');
                document.body.style.overflow = 'hidden';
            });
            
            closeMobileNav && closeMobileNav.addEventListener('click', function() {
                navToggle.classList.remove('active');
                mobileNav.classList.add('hidden');
                document.body.style.overflow = 'auto';
            });
            
            // Close mobile nav when clicking on a link
            var mobileLinks = document.querySelectorAll('#mobileNav a[href^="/"]');
            mobileLinks.forEach(function(link) {
                link.addEventListener('click', function() {
                    navToggle.classList.remove('active');
                    mobileNav.classList.add('hidden');
                    document.body.style.overflow = 'auto';
                });
            });
            
            // Close mobile nav when clicking outside
            mobileNav && mobileNav.addEventListener('click', function(e) {
                if (e.target === mobileNav) {
                    navToggle.classList.remove('active');
                    mobileNav.classList.add('hidden');
                    document.body.style.overflow = 'auto';
                }
            });
            
            // Handle escape key to close mobile nav
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape' && !mobileNav.classList.contains('hidden')) {
                    navToggle.classList.remove('active');
                    mobileNav.classList.add('hidden');
                    document.body.style.overflow = 'auto';
                }
            });
            
            // Header scroll effect
            window.addEventListener('scroll', function() {
                if (window.scrollY > 100) {
                    header.classList.add('header-scroll');
                } else {
                    header.classList.remove('header-scroll');
                }
            });
            
            // Highlight current page
            var links = document.querySelectorAll('nav a, #mobileNav a');
            var path = window.location.pathname.replace(/^\//, '');
            links.forEach(function(link) {
                var href = link.getAttribute('href').replace(/^\//, '');
                if(href === path || (path === '' && href === 'index.php')) {
                    link.classList.add('active');
                }
            });
            
            // Add smooth scroll behavior for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            });
        });
    </script>