<?php include 'include/header.php'; ?>

<!-- Copy Trading Page Content -->
<main class="min-h-screen bg-darker">
    <!-- Enhanced Hero Section -->
    <section class="relative overflow-hidden">
        <!-- Animated Background -->
        <div class="absolute inset-0 bg-gradient-to-br from-slate-900 via-purple-900 to-slate-900">
            <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%239C92AC" fill-opacity="0.05"%3E%3Ccircle cx="30" cy="30" r="2"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-40"></div>
            <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-r from-blue-600/20 via-purple-600/20 to-cyan-600/20 animate-pulse"></div>
        </div>
        
        <!-- Floating Elements -->
        <div class="absolute top-20 left-10 w-20 h-20 bg-gradient-to-r from-blue-400 to-purple-500 rounded-full opacity-20 animate-bounce"></div>
        <div class="absolute top-40 right-20 w-16 h-16 bg-gradient-to-r from-purple-400 to-pink-500 rounded-full opacity-20 animate-pulse"></div>
        <div class="absolute bottom-20 left-20 w-12 h-12 bg-gradient-to-r from-cyan-400 to-blue-500 rounded-full opacity-20 animate-bounce" style="animation-delay: 1s;"></div>
        
        <div class="relative z-10 container mx-auto px-4 py-20">
            <div class="flex flex-col lg:flex-row items-center justify-between gap-12">
                <!-- Left Content -->
                <div class="lg:w-1/2 text-center lg:text-left">
                    <div class="mb-8">
                        <span class="inline-block px-4 py-2 bg-gradient-to-r from-blue-500/20 to-purple-500/20 border border-blue-500/30 rounded-full text-blue-300 text-sm font-medium mb-6">
                            🚀 Professional Copy Trading Platform
                        </span>
                    </div>
                    
                    <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold mb-6 bg-gradient-to-r from-blue-400 via-purple-400 to-cyan-400 bg-clip-text text-transparent leading-tight">
                        Copy <span class="text-blue-400">Expert Traders</span> With One Click
                    </h1>
                    <p class="text-xl md:text-2xl text-slate-300 mb-12 max-w-2xl mx-auto lg:mx-0 leading-relaxed">
                        Learn from the best and automatically replicate their winning strategies in your own portfolio. Start earning with proven trading expertise.
                    </p>
                    
                    <!-- CTA Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start mb-12">
                        <button onclick="showTab('discover')" class="group relative px-8 py-4 bg-gradient-to-r from-blue-600 to-purple-600 text-white rounded-xl font-semibold shadow-lg hover:shadow-blue-500/25 transition-all duration-300 transform hover:scale-105">
                            <span class="relative z-10 flex items-center justify-center space-x-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                </svg>
                                <span>Find Traders</span>
                            </span>
                        </button>
                        
                        <button onclick="scrollToSection('how-it-works')" class="group relative px-8 py-4 bg-transparent border-2 border-white/30 hover:border-white text-white rounded-xl font-semibold hover:bg-white/10 transition-all duration-300 transform hover:scale-105">
                            <span class="flex items-center justify-center space-x-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span>How It Works</span>
                            </span>
                        </button>
                    </div>
                </div>
                
                <!-- Right Content - Dashboard Preview -->
                <div class="lg:w-1/2 mt-8 lg:mt-0">
                    <div class="relative">
                        <div class="bg-gradient-to-tr from-blue-600/20 to-purple-600/20 rounded-2xl shadow-2xl p-1 backdrop-blur-sm">
                            <div class="bg-slate-900/90 rounded-xl p-6 backdrop-blur-sm">
                                <div class="flex items-center justify-between mb-6">
                                    <h3 class="text-white font-semibold">Live Trading Dashboard</h3>
                                    <div class="flex items-center space-x-2">
                                        <div class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></div>
                                        <span class="text-green-400 text-sm font-medium">LIVE</span>
                                    </div>
                                </div>
                                
                                <!-- Mock Trading Cards -->
                                <div class="space-y-4">
                                    <div class="flex items-center justify-between p-4 bg-slate-800/50 rounded-lg">
                                        <div class="flex items-center space-x-3">
                                            <div class="w-10 h-10 bg-gradient-to-r from-orange-500 to-yellow-500 rounded-full flex items-center justify-center">
                                                <span class="text-white font-bold text-sm">₿</span>
                                            </div>
                                            <div>
                                                <div class="text-white font-medium">BTC Whale</div>
                                                <div class="text-slate-400 text-sm">Bitcoin Specialist</div>
                                            </div>
                                        </div>
                                        <div class="text-right">
                                            <div class="text-green-400 font-bold">+$1,245</div>
                                            <div class="text-green-400 text-sm">+24.9%</div>
                                        </div>
                                    </div>
                                    
                                    <div class="flex items-center justify-between p-4 bg-slate-800/50 rounded-lg">
                                        <div class="flex items-center space-x-3">
                                            <div class="w-10 h-10 bg-gradient-to-r from-blue-500 to-purple-500 rounded-full flex items-center justify-center">
                                                <span class="text-white font-bold text-sm">Ξ</span>
                                            </div>
                                            <div>
                                                <div class="text-white font-medium">ETH Pro</div>
                                                <div class="text-slate-400 text-sm">DeFi Expert</div>
                                            </div>
                                        </div>
                                        <div class="text-right">
                                            <div class="text-green-400 font-bold">+$892</div>
                                            <div class="text-green-400 text-sm">+17.8%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Floating ROI Badge -->
                        <div class="absolute -bottom-4 -right-4 bg-gradient-to-r from-green-500 to-emerald-500 rounded-2xl p-4 shadow-lg hidden lg:block">
                            <div class="text-white text-2xl font-bold">+178%</div>
                            <div class="text-white/80 text-xs">Average ROI</div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Tab Navigation -->
            <div class="flex flex-wrap justify-center gap-4 mt-16">
                <button onclick="showTab('discover')" id="discoverBtn" class="group relative px-8 py-4 bg-gradient-to-r from-blue-600 to-purple-600 text-white rounded-xl font-semibold shadow-lg hover:shadow-blue-500/25 transition-all duration-300 active-tab transform hover:scale-105">
                    <span class="relative z-10 flex items-center space-x-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                        <span>Discover Traders</span>
                    </span>
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-700 to-purple-700 rounded-xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                </button>
                
                <!-- <button onclick="showTab('portfolio')" id="portfolioBtn" class="group relative px-8 py-4 bg-slate-800/50 backdrop-blur-sm border-0 text-slate-300 rounded-xl font-semibold hover:bg-slate-700/50 transition-all duration-300 transform hover:scale-105">
                    <span class="flex items-center space-x-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                        </svg>
                        <span>My Portfolio</span>
                    </span>
                </button> -->
                
                <!-- <button onclick="showTab('leaderboard')" id="leaderboardBtn" class="group relative px-8 py-4 bg-slate-800/50 backdrop-blur-sm border-0 text-slate-300 rounded-xl font-semibold hover:bg-slate-700/50 transition-all duration-300 transform hover:scale-105">
                    <span class="flex items-center space-x-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                        </svg>
                        <span>Leaderboard</span>
                    </span>
                </button> -->
            </div>
        </div>
    </section>

    <!-- What is Copy Trading Section -->
    <section class="py-16 px-4">
        <div class="container mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">What is Copy Trading?</h2>
                <div class="max-w-4xl mx-auto">
                    <div class="bg-gradient-to-br from-slate-800/80 via-slate-900/60 to-slate-800/80 rounded-2xl p-8 border-0 shadow-2xl">
                        <div class="space-y-6 text-slate-300 leading-relaxed">
                            <p class="text-lg">
                                Copy Trading allows you to automatically copy the positions opened and managed by another selected investor in real-time. With copy trading you don't need to be a market expert or dedicate hours to research and analysis.
                            </p>
                            <p class="text-lg">
                                When you copy a trader your account will mirror their trading activity - opening and closing positions at the same time and for the same proportional amounts.
                            </p>
                            <p class="text-lg">
                                It's a perfect blend of social networking and trading creating opportunities for both novice traders to learn and experienced traders to earn additional income.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="py-16 px-4">
        <div class="container mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-white text-center mb-12">Benefits of Copy Trading</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="group relative bg-gradient-to-br from-slate-800/80 via-slate-900/60 to-slate-800/80 rounded-2xl p-8 border-0 hover:shadow-2xl hover:shadow-blue-500/20 transition-all duration-500 transform hover:-translate-y-2">
                    <div class="absolute inset-0 bg-gradient-to-br from-blue-500/5 to-transparent rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="relative z-10">
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-purple-500 rounded-xl flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-blue-400">Learn While You Earn</h3>
                        </div>
                        <p class="text-slate-300 leading-relaxed">Watch professional traders in action and learn their strategies while your portfolio grows.</p>
                    </div>
                </div>

                <div class="group relative bg-gradient-to-br from-slate-800/80 via-slate-900/60 to-slate-800/80 rounded-2xl p-8 border-0 hover:shadow-2xl hover:shadow-green-500/20 transition-all duration-500 transform hover:-translate-y-2">
                    <div class="absolute inset-0 bg-gradient-to-br from-green-500/5 to-transparent rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="relative z-10">
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 bg-gradient-to-r from-green-500 to-emerald-500 rounded-xl flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-green-400">Save Time</h3>
                        </div>
                        <p class="text-slate-300 leading-relaxed">No need to constantly monitor markets or make difficult trading decisions. Let experienced traders do the work for you.</p>
                    </div>
                </div>

                <div class="group relative bg-gradient-to-br from-slate-800/80 via-slate-900/60 to-slate-800/80 rounded-2xl p-8 border-0 hover:shadow-2xl hover:shadow-purple-500/20 transition-all duration-500 transform hover:-translate-y-2">
                    <div class="absolute inset-0 bg-gradient-to-br from-purple-500/5 to-transparent rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="relative z-10">
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 bg-gradient-to-r from-purple-500 to-pink-500 rounded-xl flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-purple-400">Diversify Strategies</h3>
                        </div>
                        <p class="text-slate-300 leading-relaxed">Copy multiple traders with different approaches to create a well-balanced portfolio with diverse strategies.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Overview -->
    <section class="py-12 px-4">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-12">
                <!-- Total Traders -->
                <div class="group relative bg-gradient-to-br from-slate-800/80 via-slate-900/60 to-slate-800/80 rounded-2xl p-6 border-0 hover:shadow-2xl hover:shadow-primary/20 transition-all duration-500 transform hover:-translate-y-2">
                    <div class="absolute inset-0 bg-gradient-to-br from-primary/5 to-transparent rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="relative z-10">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-primary to-blue-600 rounded-xl flex items-center justify-center shadow-lg">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"></path>
                                </svg>
                            </div>
                            <span class="text-2xl font-bold text-white">2,847</span>
                        </div>
                        <h3 class="text-sm font-medium text-gray-400 uppercase tracking-wide">Active Traders</h3>
                        <p class="text-xs text-gray-500 mt-1">Professional traders available</p>
                    </div>
                </div>

                <!-- Total Copiers -->
                <div class="group relative bg-gradient-to-br from-slate-800/80 via-slate-900/60 to-slate-800/80 rounded-2xl p-6 border-0 hover:shadow-2xl hover:shadow-success/20 transition-all duration-500 transform hover:-translate-y-2">
                    <div class="absolute inset-0 bg-gradient-to-br from-success/5 to-transparent rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="relative z-10">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-success to-green-600 rounded-xl flex items-center justify-center shadow-lg">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <span class="text-2xl font-bold text-white">18,392</span>
                        </div>
                        <h3 class="text-sm font-medium text-gray-400 uppercase tracking-wide">Total Copiers</h3>
                        <p class="text-xs text-gray-500 mt-1">Users copying trades</p>
                    </div>
                </div>

                <!-- Total AUM -->
                <div class="group relative bg-gradient-to-br from-slate-800/80 via-slate-900/60 to-slate-800/80 rounded-2xl p-6 border-0 hover:shadow-2xl hover:shadow-yellow-500/20 transition-all duration-500 transform hover:-translate-y-2">
                    <div class="absolute inset-0 bg-gradient-to-br from-yellow-500/5 to-transparent rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="relative z-10">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-yellow-500 to-orange-500 rounded-xl flex items-center justify-center shadow-lg">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4zM18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z"></path>
                                </svg>
                            </div>
                            <span class="text-2xl font-bold text-white">$24.7M</span>
                        </div>
                        <h3 class="text-sm font-medium text-gray-400 uppercase tracking-wide">Total AUM</h3>
                        <p class="text-xs text-gray-500 mt-1">Assets under management</p>
                    </div>
                </div>

                <!-- Success Rate -->
                <div class="group relative bg-gradient-to-br from-slate-800/80 via-slate-900/60 to-slate-800/80 rounded-2xl p-6 border-0 hover:shadow-2xl hover:shadow-purple-500/20 transition-all duration-500 transform hover:-translate-y-2">
                    <div class="absolute inset-0 bg-gradient-to-br from-purple-500/5 to-transparent rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="relative z-10">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-indigo-600 rounded-xl flex items-center justify-center shadow-lg">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <span class="text-2xl font-bold text-white">73.2%</span>
                        </div>
                        <h3 class="text-sm font-medium text-gray-400 uppercase tracking-wide">Avg Success Rate</h3>
                        <p class="text-xs text-gray-500 mt-1">Profitable trades</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Discover Traders Tab -->
    <section id="discoverTab" class="py-12 px-4">
        <div class="container mx-auto">
            <!-- Enhanced Filters -->
            <div class="relative bg-gradient-to-br from-slate-800/50 via-slate-800/30 to-slate-900/50 backdrop-blur-sm rounded-2xl p-8 mb-8 border-0 shadow-2xl">
                <div class="absolute inset-0 bg-gradient-to-r from-blue-600/5 via-purple-600/5 to-cyan-600/5 rounded-2xl"></div>
                <div class="relative z-10">
                    <div class="flex items-center space-x-3 mb-8">
                        <div class="w-10 h-10 bg-gradient-to-r from-blue-500 to-purple-500 rounded-xl flex items-center justify-center">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 100 4m0-4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 100 4m0-4v2m0-6V4"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold bg-gradient-to-r from-blue-400 to-purple-400 bg-clip-text text-transparent">Filter Traders</h3>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                        <div class="space-y-2">
                            <label class="block text-sm font-semibold text-slate-300 mb-3">ROI Period</label>
                            <select class="w-full bg-slate-900/50 border-0 rounded-xl px-4 py-3 text-white focus:ring-2 focus:ring-blue-500/20 focus:outline-none transition-all duration-300 backdrop-blur-sm">
                                <option>7 Days</option>
                                <option>30 Days</option>
                                <option>90 Days</option>
                                <option>All Time</option>
                            </select>
                        </div>
                        <div class="space-y-2">
                            <label class="block text-sm font-semibold text-slate-300 mb-3">Min ROI (%)</label>
                            <input type="number" placeholder="0" class="w-full bg-slate-900/50 border-0 rounded-xl px-4 py-3 text-white placeholder-slate-400 focus:ring-2 focus:ring-blue-500/20 focus:outline-none transition-all duration-300 backdrop-blur-sm">
                        </div>
                        <div class="space-y-2">
                            <label class="block text-sm font-semibold text-slate-300 mb-3">Min Copiers</label>
                            <input type="number" placeholder="10" class="w-full bg-slate-900/50 border-0 rounded-xl px-4 py-3 text-white placeholder-slate-400 focus:ring-2 focus:ring-blue-500/20 focus:outline-none transition-all duration-300 backdrop-blur-sm">
                        </div>
                        <div class="space-y-2">
                            <label class="block text-sm font-semibold text-slate-300 mb-3">Trading Style</label>
                            <select class="w-full bg-slate-900/50 border-0 rounded-xl px-4 py-3 text-white focus:ring-2 focus:ring-blue-500/20 focus:outline-none transition-all duration-300 backdrop-blur-sm">
                                <option>All Styles</option>
                                <option>Scalping</option>
                                <option>Day Trading</option>
                                <option>Swing Trading</option>
                                <option>Long Term</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Top Traders Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="tradersGrid">
                <!-- Trader cards will be populated here -->
            </div>
        </div>
    </section>

    <!-- Portfolio Tab -->
    <section id="portfolioTab" class="py-12 px-4 hidden">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Portfolio Overview -->
                <div class="lg:col-span-2">
                    <div class="bg-gradient-to-br from-slate-800/80 via-slate-900/60 to-slate-800/80 rounded-xl p-6 mb-8 border-0">
                        <h3 class="text-xl font-semibold mb-6">Portfolio Overview</h3>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                            <div class="text-center">
                                <div class="text-3xl font-bold text-white mb-2">$12,450.00</div>
                                <div class="text-sm text-gray-400">Total Balance</div>
                            </div>
                            <div class="text-center">
                                <div class="text-3xl font-bold text-success mb-2">+$2,340.50</div>
                                <div class="text-sm text-gray-400">Total PnL</div>
                            </div>
                            <div class="text-center">
                                <div class="text-3xl font-bold text-success mb-2">+23.15%</div>
                                <div class="text-sm text-gray-400">ROI (30D)</div>
                            </div>
                        </div>
                    </div>

                    <!-- Active Copies -->
                    <div class="bg-gradient-to-br from-slate-800/80 via-slate-900/60 to-slate-800/80 rounded-xl p-6 border-0">
                        <h3 class="text-xl font-semibold mb-6">Active Copies</h3>
                        <div id="activeCopies">
                            <!-- Active copy positions will be populated here -->
                        </div>
                    </div>
                </div>

                <!-- Quick Actions -->
                <div>
                    <div class="bg-gradient-to-br from-slate-800/80 via-slate-900/60 to-slate-800/80 rounded-xl p-6 border-0">
                        <h3 class="text-xl font-semibold mb-6">Quick Actions</h3>
                        <div class="space-y-4">
                            <button class="w-full bg-primary text-white py-3 rounded-lg font-semibold hover:bg-blue-600 transition-colors">
                                Start New Copy
                            </button>
                            <button class="w-full bg-slate-600 text-white py-3 rounded-lg font-semibold hover:bg-slate-500 transition-colors">
                                Manage Copies
                            </button>
                            <button class="w-full bg-success text-white py-3 rounded-lg font-semibold hover:bg-green-600 transition-colors">
                                Deposit Funds
                            </button>
                        </div>
                    </div>

                    <!-- Performance Chart -->
                    <div class="bg-gradient-to-br from-slate-800/80 via-slate-900/60 to-slate-800/80 rounded-xl p-6 mt-6 border-0">
                        <h3 class="text-xl font-semibold mb-6">Performance</h3>
                        <div id="performanceChart" style="height: 300px;"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Leaderboard Tab -->
    <section id="leaderboardTab" class="py-12 px-4 hidden">
        <div class="container mx-auto">
            <div class="bg-gradient-to-br from-slate-800/80 via-slate-900/60 to-slate-800/80 rounded-xl p-6 border-0">
                <h3 class="text-xl font-semibold mb-6">Top Performers</h3>
                <div class="overflow-x-auto">
                    <table class="w-full text-left">
                        <thead>
                            <tr class="border-b border-slate-700/50">
                                <th class="pb-3 text-gray-400 font-medium">Rank</th>
                                <th class="pb-3 text-gray-400 font-medium">Trader</th>
                                <th class="pb-3 text-gray-400 font-medium">ROI (30D)</th>
                                <th class="pb-3 text-gray-400 font-medium">Win Rate</th>
                                <th class="pb-3 text-gray-400 font-medium">Copiers</th>
                                <th class="pb-3 text-gray-400 font-medium">AUM</th>
                                <th class="pb-3 text-gray-400 font-medium">Action</th>
                            </tr>
                        </thead<tbody id="leaderboardTable">
                            <!-- Leaderboard data will be populated here -->
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Trading Signals Section -->
            <div class="bg-gradient-to-br from-slate-800/80 via-slate-900/60 to-slate-800/80 rounded-2xl p-6 border-0 shadow-2xl mt-8">
                <h3 class="text-xl font-bold text-white mb-6 flex items-center space-x-2">
                    <svg class="w-5 h-5 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                    <span>Live Trading Signals</span>
                </h3>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" id="tradingSignals">
                    <!-- Trading signals will be populated here -->
                </div>
            </div>
        </div>
    </section>

    <!-- Video Tutorials Section -->
    <section class="py-16 px-4">
        <div class="container mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">Learn Copy Trading</h2>
                <p class="text-xl text-slate-300 max-w-3xl mx-auto">
                    Watch our comprehensive video tutorials to master copy trading and start earning with confidence.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Video 1 -->
                <div class="group relative bg-gradient-to-br from-slate-800/80 via-slate-900/60 to-slate-800/80 rounded-2xl overflow-hidden border-0 shadow-2xl hover:shadow-blue-500/20 transition-all duration-500 transform hover:-translate-y-2">
                    <div class="absolute inset-0 bg-gradient-to-br from-blue-500/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="relative z-10">
                        <!-- Video Thumbnail -->
                        <div class="relative aspect-video bg-gradient-to-br from-slate-700 to-slate-800 rounded-t-2xl overflow-hidden">
                            <div class="absolute inset-0 bg-gradient-to-br from-blue-600/20 to-purple-600/20"></div>
                            <div class="absolute inset-0 flex items-center justify-center">
                                <div class="w-16 h-16 bg-gradient-to-r from-blue-600 to-purple-600 rounded-full flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-300">
                                    <svg class="w-8 h-8 text-white ml-1" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M8 5v14l11-7z"/>
                                    </svg>
                                </div>
                            </div>
                            <!-- Video Duration -->
                            <div class="absolute bottom-3 right-3 bg-black/70 text-white text-xs px-2 py-1 rounded">
                                5:42
                            </div>
                            <!-- Video Quality Badge -->
                            <div class="absolute top-3 left-3 bg-gradient-to-r from-blue-500 to-purple-500 text-white text-xs px-2 py-1 rounded-full font-semibold">
                                HD
                            </div>
                        </div>
                        
                        <!-- Video Content -->
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-white mb-3 group-hover:text-blue-400 transition-colors duration-300">
                                Getting Started with Copy Trading
                            </h3>
                            <p class="text-slate-300 text-sm leading-relaxed mb-4">
                                Learn the basics of copy trading, how to set up your account, and make your first copy trade. Perfect for beginners looking to start their journey.
                            </p>
                            
                            <!-- Video Stats -->
                            <div class="flex items-center justify-between text-xs text-slate-400 mb-4">
                                <div class="flex items-center space-x-4">
                                    <span class="flex items-center space-x-1">
                                        <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                                            <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>
                                        </svg>
                                        <span>12.5K views</span>
                                    </span>
                                    <span class="flex items-center space-x-1">
                                        <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"/>
                                        </svg>
                                        <span>98% liked</span>
                                    </span>
                                </div>
                                <span class="text-green-400 font-semibold">Beginner</span>
                            </div>
                            
                            <!-- Watch Button -->
                            <button class="w-full bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-500 hover:to-purple-500 text-white py-3 rounded-xl font-semibold transition-all duration-300 shadow-lg hover:shadow-blue-500/25 transform hover:scale-105">
                                <span class="flex items-center justify-center space-x-2">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M8 5v14l11-7z"/>
                                    </svg>
                                    <span>Watch Tutorial</span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Video 2 -->
                <div class="group relative bg-gradient-to-br from-slate-800/80 via-slate-900/60 to-slate-800/80 rounded-2xl overflow-hidden border-0 shadow-2xl hover:shadow-purple-500/20 transition-all duration-500 transform hover:-translate-y-2">
                    <div class="absolute inset-0 bg-gradient-to-br from-purple-500/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="relative z-10">
                        <!-- Video Thumbnail -->
                        <div class="relative aspect-video bg-gradient-to-br from-slate-700 to-slate-800 rounded-t-2xl overflow-hidden">
                            <div class="absolute inset-0 bg-gradient-to-br from-purple-600/20 to-pink-600/20"></div>
                            <div class="absolute inset-0 flex items-center justify-center">
                                <div class="w-16 h-16 bg-gradient-to-r from-purple-600 to-pink-600 rounded-full flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-300">
                                    <svg class="w-8 h-8 text-white ml-1" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M8 5v14l11-7z"/>
                                    </svg>
                                </div>
                            </div>
                            <!-- Video Duration -->
                            <div class="absolute bottom-3 right-3 bg-black/70 text-white text-xs px-2 py-1 rounded">
                                8:15
                            </div>
                            <!-- Video Quality Badge -->
                            <div class="absolute top-3 left-3 bg-gradient-to-r from-purple-500 to-pink-500 text-white text-xs px-2 py-1 rounded-full font-semibold">
                                HD
                            </div>
                        </div>
                        
                        <!-- Video Content -->
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-white mb-3 group-hover:text-purple-400 transition-colors duration-300">
                                Advanced Risk Management
                            </h3>
                            <p class="text-slate-300 text-sm leading-relaxed mb-4">
                                Master advanced risk management techniques, portfolio diversification, and how to set optimal stop-loss and take-profit levels for maximum returns.
                            </p>
                            
                            <!-- Video Stats -->
                            <div class="flex items-center justify-between text-xs text-slate-400 mb-4">
                                <div class="flex items-center space-x-4">
                                    <span class="flex items-center space-x-1">
                                        <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                                            <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>
                                        </svg>
                                        <span>8.7K views</span>
                                    </span>
                                    <span class="flex items-center space-x-1">
                                        <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"/>
                                        </svg>
                                        <span>95% liked</span>
                                    </span>
                                </div>
                                <span class="text-yellow-400 font-semibold">Intermediate</span>
                            </div>
                            
                            <!-- Watch Button -->
                            <button class="w-full bg-gradient-to-r from-purple-600 to-pink-600 hover:from-purple-500 hover:to-pink-500 text-white py-3 rounded-xl font-semibold transition-all duration-300 shadow-lg hover:shadow-purple-500/25 transform hover:scale-105">
                                <span class="flex items-center justify-center space-x-2">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M8 5v14l11-7z"/>
                                    </svg>
                                    <span>Watch Tutorial</span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Video 3 -->
                <div class="group relative bg-gradient-to-br from-slate-800/80 via-slate-900/60 to-slate-800/80 rounded-2xl overflow-hidden border-0 shadow-2xl hover:shadow-green-500/20 transition-all duration-500 transform hover:-translate-y-2">
                    <div class="absolute inset-0 bg-gradient-to-br from-green-500/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="relative z-10">
                        <!-- Video Thumbnail -->
                        <div class="relative aspect-video bg-gradient-to-br from-slate-700 to-slate-800 rounded-t-2xl overflow-hidden">
                            <div class="absolute inset-0 bg-gradient-to-br from-green-600/20 to-emerald-600/20"></div>
                            <div class="absolute inset-0 flex items-center justify-center">
                                <div class="w-16 h-16 bg-gradient-to-r from-green-600 to-emerald-600 rounded-full flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-300">
                                    <svg class="w-8 h-8 text-white ml-1" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M8 5v14l11-7z"/>
                                    </svg>
                                </div>
                            </div>
                            <!-- Video Duration -->
                            <div class="absolute bottom-3 right-3 bg-black/70 text-white text-xs px-2 py-1 rounded">
                                12:30
                            </div>
                            <!-- Video Quality Badge -->
                            <div class="absolute top-3 left-3 bg-gradient-to-r from-green-500 to-emerald-500 text-white text-xs px-2 py-1 rounded-full font-semibold">
                                4K
                            </div>
                        </div>
                        
                        <!-- Video Content -->
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-white mb-3 group-hover:text-green-400 transition-colors duration-300">
                                Pro Trading Strategies
                            </h3>
                            <p class="text-slate-300 text-sm leading-relaxed mb-4">
                                Discover professional trading strategies used by top performers. Learn how to analyze trader performance, market trends, and optimize your copy trading portfolio.
                            </p>
                            
                            <!-- Video Stats -->
                            <div class="flex items-center justify-between text-xs text-slate-400 mb-4">
                                <div class="flex items-center space-x-4">
                                    <span class="flex items-center space-x-1">
                                        <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                                            <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>
                                        </svg>
                                        <span>15.2K views</span>
                                    </span>
                                    <span class="flex items-center space-x-1">
                                        <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"/>
                                        </svg>
                                        <span>97% liked</span>
                                    </span>
                                </div>
                                <span class="text-red-400 font-semibold">Advanced</span>
                            </div>
                            
                            <!-- Watch Button -->
                            <button class="w-full bg-gradient-to-r from-green-600 to-emerald-600 hover:from-green-500 hover:to-emerald-500 text-white py-3 rounded-xl font-semibold transition-all duration-300 shadow-lg hover:shadow-green-500/25 transform hover:scale-105">
                                <span class="flex items-center justify-center space-x-2">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M8 5v14l11-7z"/>
                                    </svg>
                                    <span>Watch Tutorial</span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Video Section CTA -->
            <div class="text-center mt-12">
                <p class="text-slate-300 mb-6">Want to see more tutorials and get exclusive trading insights?</p>
                <button class="bg-gradient-to-r from-blue-600 via-purple-600 to-cyan-600 hover:from-blue-500 hover:via-purple-500 hover:to-cyan-500 text-white px-8 py-4 rounded-xl font-bold transition-all duration-300 transform hover:scale-105 shadow-lg">
                    <span class="flex items-center justify-center space-x-2">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M21 6.5l-9 6.5-9-6.5V4l9 6.5L21 4v2.5z"/>
                        </svg>
                        <span>Subscribe for More Content</span>
                    </span>
                </button>
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section id="how-it-works" class="py-20 px-4 relative overflow-hidden">
        <!-- Enhanced Background -->
        <div class="absolute inset-0 bg-gradient-to-br from-slate-900 via-purple-900/20 to-slate-900">
            <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%239C92AC" fill-opacity="0.03"%3E%3Ccircle cx="30" cy="30" r="2"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-40"></div>
        </div>
        
        <!-- Floating Background Elements -->
        <div class="absolute top-20 left-10 w-32 h-32 bg-gradient-to-r from-blue-400/10 to-purple-500/10 rounded-full blur-xl animate-pulse"></div>
        <div class="absolute bottom-20 right-10 w-40 h-40 bg-gradient-to-r from-purple-400/10 to-pink-500/10 rounded-full blur-xl animate-pulse" style="animation-delay: 2s;"></div>
        <div class="absolute top-1/2 left-1/4 w-24 h-24 bg-gradient-to-r from-cyan-400/10 to-blue-500/10 rounded-full blur-xl animate-pulse" style="animation-delay: 4s;"></div>

        <div class="container mx-auto relative z-10">
            <!-- Enhanced Header -->
            <div class="text-center mb-20">
                <div class="inline-block mb-6">
                    <span class="px-6 py-3 bg-gradient-to-r from-blue-500/20 to-purple-500/20 border border-blue-500/30 rounded-full text-blue-300 text-sm font-semibold backdrop-blur-sm">
                        ⚡ Simple 5-Step Process
                    </span>
                </div>
                <h2 class="text-4xl md:text-6xl font-bold mb-8 bg-gradient-to-r from-blue-400 via-purple-400 to-cyan-400 bg-clip-text text-transparent leading-tight">
                    How Copy Trading Works
                </h2>
                <p class="text-xl md:text-2xl text-slate-300 max-w-4xl mx-auto leading-relaxed">
                    Get started with copy trading in just 5 simple steps. Follow our comprehensive guide to begin copying successful traders and growing your portfolio with proven strategies.
                </p>
                
                <!-- Progress Indicator -->
                <div class="flex justify-center mt-12">
                    <div class="flex items-center space-x-4">
                        <div class="flex items-center space-x-2">
                            <div class="w-3 h-3 bg-blue-500 rounded-full animate-pulse"></div>
                            <span class="text-slate-400 text-sm">Browse</span>
                        </div>
                        <div class="w-8 h-0.5 bg-gradient-to-r from-blue-500 to-purple-500"></div>
                        <div class="flex items-center space-x-2">
                            <div class="w-3 h-3 bg-purple-500 rounded-full animate-pulse" style="animation-delay: 0.5s;"></div>
                            <span class="text-slate-400 text-sm">Analyze</span>
                        </div>
                        <div class="w-8 h-0.5 bg-gradient-to-r from-purple-500 to-green-500"></div>
                        <div class="flex items-center space-x-2">
                            <div class="w-3 h-3 bg-green-500 rounded-full animate-pulse" style="animation-delay: 1s;"></div>
                            <span class="text-slate-400 text-sm">Budget</span>
                        </div>
                        <div class="w-8 h-0.5 bg-gradient-to-r from-green-500 to-yellow-500"></div>
                        <div class="flex items-center space-x-2">
                            <div class="w-3 h-3 bg-yellow-500 rounded-full animate-pulse" style="animation-delay: 1.5s;"></div>
                            <span class="text-slate-400 text-sm">Configure</span>
                        </div>
                        <div class="w-8 h-0.5 bg-gradient-to-r from-yellow-500 to-cyan-500"></div>
                        <div class="flex items-center space-x-2">
                            <div class="w-3 h-3 bg-cyan-500 rounded-full animate-pulse" style="animation-delay: 2s;"></div>
                            <span class="text-slate-400 text-sm">Start</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="relative">
                <!-- Enhanced Timeline Line with Glow Effect -->
                <div class="absolute left-8 md:left-1/2 top-0 bottom-0 w-1 bg-gradient-to-b from-blue-500 via-purple-500 via-green-500 via-yellow-500 to-cyan-500 transform md:-translate-x-1/2 shadow-lg"></div>
                <div class="absolute left-8 md:left-1/2 top-0 bottom-0 w-3 bg-gradient-to-b from-blue-500/20 via-purple-500/20 via-green-500/20 via-yellow-500/20 to-cyan-500/20 transform md:-translate-x-1/2 blur-sm"></div>

                <!-- Enhanced Steps -->
                <div class="relative z-10 space-y-20">
                    <!-- Step 1 - Enhanced -->
                    <div class="group flex flex-col md:flex-row md:items-center" data-step="1">
                        <div class="md:w-5/12 md:text-right md:pr-6 mb-6 md:mb-0">
                            <div class="bg-gradient-to-br from-slate-800/90 via-slate-900/70 to-slate-800/90 rounded-2xl p-6 border border-blue-500/20 shadow-xl backdrop-blur-sm hover:shadow-blue-500/30 transition-all duration-500 transform hover:-translate-y-1 group-hover:border-blue-500/40">
                                <div class="absolute inset-0 bg-gradient-to-br from-blue-500/5 to-transparent rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                                <div class="relative z-10">
                                    <div class="flex items-center justify-center md:justify-end mb-4">
                                        <div class="w-12 h-12 bg-gradient-to-r from-blue-600 to-purple-600 rounded-xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-300">
                                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <h3 class="text-2xl font-bold text-blue-400 mb-4 group-hover:text-blue-300 transition-colors duration-300">Step 1: Browse Traders</h3>
                                    <p class="text-slate-300 leading-relaxed mb-4">
                                        Explore our marketplace of verified traders. Filter by performance metrics, risk level, and trading style to find traders that match your goals.
                                    </p>
                                    <div class="flex flex-wrap gap-2 justify-center md:justify-end">
                                        <span class="px-3 py-1 bg-blue-500/20 text-blue-300 rounded-full text-xs font-semibold border border-blue-500/30 hover:bg-blue-500/30 transition-colors duration-300">Performance</span>
                                        <span class="px-3 py-1 bg-purple-500/20 text-purple-300 rounded-full text-xs font-semibold border border-purple-500/30 hover:bg-purple-500/30 transition-colors duration-300">Risk Analysis</span>
                                        <span class="px-3 py-1 bg-green-500/20 text-green-300 rounded-full text-xs font-semibold border border-green-500/30 hover:bg-green-500/30 transition-colors duration-300">History</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="absolute left-8 md:left-1/2 transform -translate-x-1/2 flex items-center justify-center w-16 h-16 bg-gradient-to-r from-blue-600 to-purple-600 rounded-full text-white shadow-xl border-4 border-slate-900 group-hover:scale-110 transition-transform duration-300 z-20">
                            <span class="font-bold text-lg">1</span>
                        </div>
                        <div class="md:w-5/12 md:pl-6 pl-16">
                            <div class="bg-gradient-to-br from-slate-800/60 to-slate-900/60 rounded-2xl p-6 backdrop-blur-sm border border-slate-700/50 hover:border-blue-500/30 transition-all duration-500 transform hover:-translate-y-1">
                                <h4 class="text-lg font-bold text-white mb-4 flex items-center">
                                    <svg class="w-4 h-4 text-blue-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                                    </svg>
                                    Top Performers Preview
                                </h4>
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                                    <div class="bg-slate-900/60 rounded-xl p-4 text-center hover:bg-slate-900/80 transition-colors duration-300 border border-slate-700/50">
                                        <div class="w-10 h-10 bg-gradient-to-r from-orange-500 to-yellow-500 rounded-full mx-auto mb-2 flex items-center justify-center shadow-lg">
                                            <span class="text-white font-bold text-sm">₿</span>
                                        </div>
                                        <div class="text-white font-semibold text-sm">BTC Expert</div>
                                        <div class="text-green-400 text-xs font-semibold">+245% ROI</div>
                                        <div class="text-slate-400 text-xs mt-1">2.4K Copiers</div>
                                    </div>
                                    <div class="bg-slate-900/60 rounded-xl p-4 text-center hover:bg-slate-900/80 transition-colors duration-300 border border-slate-700/50">
                                        <div class="w-10 h-10 bg-gradient-to-r from-blue-500 to-purple-500 rounded-full mx-auto mb-2 flex items-center justify-center shadow-lg">
                                            <span class="text-white font-bold text-sm">Ξ</span>
                                        </div>
                                        <div class="text-white font-semibold text-sm">ETH Pro</div>
                                        <div class="text-green-400 text-xs font-semibold">+178% ROI</div>
                                        <div class="text-slate-400 text-xs mt-1">1.8K Copiers</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Step 2 - Enhanced -->
                    <div class="group flex flex-col md:flex-row md:items-center" data-step="2">
                        <div class="md:w-5/12 md:pr-6 pl-16 md:pl-0 mb-6 md:mb-0 md:order-2">
                            <div class="bg-gradient-to-br from-slate-800/90 via-slate-900/70 to-slate-800/90 rounded-2xl p-6 border border-purple-500/20 shadow-xl backdrop-blur-sm hover:shadow-purple-500/30 transition-all duration-500 transform hover:-translate-y-1 group-hover:border-purple-500/40">
                                <div class="absolute inset-0 bg-gradient-to-br from-purple-500/5 to-transparent rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                                <div class="relative z-10">
                                    <div class="flex items-center justify-center md:justify-start mb-4">
                                        <div class="w-12 h-12 bg-gradient-to-r from-purple-600 to-pink-600 rounded-xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-300">
                                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <h3 class="text-2xl font-bold text-purple-400 mb-4 group-hover:text-purple-300 transition-colors duration-300">Step 2: Analyze Performance</h3>
                                    <p class="text-slate-300 leading-relaxed mb-4">
                                        Review detailed performance analytics including historical returns, trading frequency, and risk metrics to make informed decisions.
                                    </p>
                                    <div class="grid grid-cols-3 gap-3 text-center">
                                        <div class="p-3 bg-slate-900/40 rounded-lg border border-green-500/20">
                                            <div class="text-xl font-bold text-green-400 mb-1">78.5%</div>
                                            <div class="text-xs text-slate-400 font-medium">Win Rate</div>
                                        </div>
                                        <div class="p-3 bg-slate-900/40 rounded-lg border border-blue-500/20">
                                            <div class="text-xl font-bold text-blue-400 mb-1">6.2</div>
                                            <div class="text-xs text-slate-400 font-medium">Risk Score</div>
                                        </div>
                                        <div class="p-3 bg-slate-900/40 rounded-lg border border-purple-500/20">
                                            <div class="text-xl font-bold text-purple-400 mb-1">215%</div>
                                            <div class="text-xs text-slate-400 font-medium">Yearly ROI</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="absolute left-8 md:left-1/2 transform -translate-x-1/2 flex items-center justify-center w-16 h-16 bg-gradient-to-r from-purple-600 to-pink-600 rounded-full text-white shadow-xl border-4 border-slate-900 group-hover:scale-110 transition-transform duration-300 z-20">
                            <span class="font-bold text-lg">2</span>
                        </div>
                        <div class="md:w-5/12 md:pl-6 pl-16 md:order-1">
                            <div class="bg-gradient-to-br from-slate-800/60 to-slate-900/60 rounded-2xl p-6 backdrop-blur-sm border border-slate-700/50 hover:border-purple-500/30 transition-all duration-500 transform hover:-translate-y-1">
                                <h4 class="text-lg font-bold text-white mb-4 flex items-center">
                                    <svg class="w-4 h-4 text-purple-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                    Performance Analytics
                                </h4>
                                <div class="space-y-3">
                                    <div class="flex justify-between items-center p-3 bg-slate-900/60 rounded-lg border border-slate-700/50 hover:border-green-500/30 transition-colors duration-300">
                                        <span class="text-slate-300 font-medium text-sm">Monthly Return</span>
                                        <span class="text-green-400 font-bold">+24.5%</span>
                                    </div>
                                    <div class="flex justify-between items-center p-3 bg-slate-900/60 rounded-lg border border-slate-700/50 hover:border-yellow-500/30 transition-colors duration-300">
                                        <span class="text-slate-300 font-medium text-sm">Max Drawdown</span>
                                        <span class="text-yellow-400 font-bold">-8.2%</span>
                                    </div>
                                    <div class="flex justify-between items-center p-3 bg-slate-900/60 rounded-lg border border-slate-700/50 hover:border-blue-500/30 transition-colors duration-300">
                                        <span class="text-slate-300 font-medium text-sm">Sharpe Ratio</span>
                                        <span class="text-blue-400 font-bold">2.34</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Step 3 - Enhanced -->
                    <div class="group flex flex-col md:flex-row md:items-center" data-step="3">
                        <div class="md:w-5/12 md:text-right md:pr-8 mb-8 md:mb-0">
                            <div class="bg-gradient-to-br from-slate-800/90 via-slate-900/70 to-slate-800/90 rounded-3xl p-8 border border-green-500/20 shadow-2xl backdrop-blur-sm hover:shadow-green-500/30 transition-all duration-500 transform hover:-translate-y-2 group-hover:border-green-500/40">
                                <div class="absolute inset-0 bg-gradient-to-br from-green-500/5 to-transparent rounded-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                                <div class="relative z-10">
                                    <div class="flex items-center justify-center md:justify-end mb-6">
                                        <div class="w-16 h-16 bg-gradient-to-r from-green-600 to-emerald-600 rounded-2xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-300">
                                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <h3 class="text-3xl font-bold text-green-400 mb-6 group-hover:text-green-300 transition-colors duration-300">Step 3: Set Your Budget</h3>
                                    <p class="text-slate-300 leading-relaxed text-lg mb-6">
                                        Decide how much you want to allocate to copying each trader. Start with as little as $100 and scale up as you gain confidence and see positive results.
                                    </p>
                                    <div class="space-y-4">
                                        <div class="flex justify-between items-center p-4 bg-slate-900/40 rounded-xl border border-green-500/20">
                                            <span class="text-slate-400 font-medium">Minimum Investment</span>
                                            <span class="text-green-400 font-bold text-lg">$100</span>
                                        </div>
                                        <div class="flex justify-between items-center p-4 bg-slate-900/40 rounded-xl border border-blue-500/20">
                                            <span class="text-slate-400 font-medium">Recommended Start</span>
                                            <span class="text-blue-400 font-bold text-lg">$500-$1000</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="absolute left-8 md:left-1/2 transform -translate-x-1/2 flex items-center justify-center w-20 h-20 bg-gradient-to-r from-green-600 to-emerald-600 rounded-full text-white shadow-2xl border-4 border-slate-900 group-hover:scale-110 transition-transform duration-300 z-20">
                            <span class="font-bold text-2xl">3</span>
                        </div>
                        <div class="md:w-5/12 md:pl-8 pl-20">
                            <div class="bg-gradient-to-br from-slate-800/60 to-slate-900/60 rounded-3xl p-8 backdrop-blur-sm border border-slate-700/50 hover:border-green-500/30 transition-all duration-500 transform hover:-translate-y-1">
                                <h4 class="text-xl font-bold text-white mb-6 flex items-center">
                                    <svg class="w-5 h-5 text-green-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                                    </svg>
                                    Portfolio Allocation
                                </h4>
                                <div class="space-y-4">
                                    <div class="flex items-center justify-between p-4 bg-slate-900/60 rounded-xl border border-slate-700/50 hover:border-orange-500/30 transition-colors duration-300">
                                        <div class="flex items-center space-x-3">
                                            <div class="w-10 h-10 bg-orange-500 rounded-full flex items-center justify-center shadow-lg">
                                                <span class="text-white text-sm font-bold">₿</span>
                                            </div>
                                            <span class="text-white font-medium">Bitcoin Trader</span>
                                        </div>
                                        <span class="text-green-400 font-bold text-lg">$2,500</span>
                                    </div>
                                    <div class="flex items-center justify-between p-4 bg-slate-900/60 rounded-xl border border-slate-700/50 hover:border-blue-500/30 transition-colors duration-300">
                                        <div class="flex items-center space-x-3">
                                            <div class="w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center shadow-lg">
                                                <span class="text-white text-sm font-bold">Ξ</span>
                                            </div>
                                            <span class="text-white font-medium">ETH Expert</span>
                                        </div>
                                        <span class="text-green-400 font-bold text-lg">$1,500</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Step 4 - Enhanced -->
                    <div class="group flex flex-col md:flex-row md:items-center" data-step="4">
                        <div class="md:w-5/12 md:pr-8 pl-20 md:pl-0 mb-8 md:mb-0 md:order-2">
                            <div class="bg-gradient-to-br from-slate-800/90 via-slate-900/70 to-slate-800/90 rounded-3xl p-8 border border-yellow-500/20 shadow-2xl backdrop-blur-sm hover:shadow-yellow-500/30 transition-all duration-500 transform hover:-translate-y-2 group-hover:border-yellow-500/40">
                                <div class="absolute inset-0 bg-gradient-to-br from-yellow-500/5 to-transparent rounded-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                                <div class="relative z-10">
                                    <div class="flex items-center justify-center md:justify-start mb-6">
                                        <div class="w-16 h-16 bg-gradient-to-r from-yellow-600 to-orange-600 rounded-2xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-300">
                                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <h3 class="text-3xl font-bold text-yellow-400 mb-6 group-hover:text-yellow-300 transition-colors duration-300">Step 4: Configure Risk Settings</h3>
                                    <p class="text-slate-300 leading-relaxed text-lg mb-6">
                                        Set up risk management parameters including stop loss, take profit, and maximum investment limits to protect your capital and optimize returns.
                                    </p>
                                    <div class="grid grid-cols-2 gap-6">
                                        <div class="text-center p-4 bg-slate-900/40 rounded-xl border border-red-500/20">
                                            <div class="text-2xl font-bold text-red-400 mb-2">15%</div>
                                            <div class="text-xs text-slate-400 font-medium">Stop Loss</div>
                                        </div>
                                        <div class="text-center p-4 bg-slate-900/40 rounded-xl border border-green-500/20">
                                            <div class="text-2xl font-bold text-green-400 mb-2">50%</div>
                                            <div class="text-xs text-slate-400 font-medium">Take Profit</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="absolute left-8 md:left-1/2 transform -translate-x-1/2 flex items-center justify-center w-20 h-20 bg-gradient-to-r from-yellow-600 to-orange-600 rounded-full text-white shadow-2xl border-4 border-slate-900 group-hover:scale-110 transition-transform duration-300 z-20">
                            <span class="font-bold text-2xl">4</span>
                        </div>
                        <div class="md:w-5/12 md:pl-8 pl-20 md:order-1">
                            <div class="bg-gradient-to-br from-slate-800/60 to-slate-900/60 rounded-3xl p-8 backdrop-blur-sm border border-slate-700/50 hover:border-yellow-500/30 transition-all duration-500 transform hover:-translate-y-1">
                                <h4 class="text-xl font-bold text-white mb-6 flex items-center">
                                    <svg class="w-5 h-5 text-yellow-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                    </svg>
                                    Risk Management
                                </h4>
                                <div class="space-y-4">
                                    <div class="p-4 bg-slate-900/60 rounded-xl border border-slate-700/50">
                                        <div class="flex justify-between items-center mb-3">
                                            <span class="text-slate-300 text-sm font-medium">Stop Loss</span>
                                            <span class="text-red-400 font-bold">15%</span>
                                        </div>
                                        <div class="w-full bg-slate-700 rounded-full h-3 overflow-hidden">
                                            <div class="bg-gradient-to-r from-red-500 to-red-400 h-3 rounded-full transition-all duration-1000" style="width: 30%"></div>
                                        </div>
                                    </div>
                                    <div class="p-4 bg-slate-900/60 rounded-xl border border-slate-700/50">
                                        <div class="flex justify-between items-center mb-3">
                                            <span class="text-slate-300 text-sm font-medium">Take Profit</span>
                                            <span class="text-green-400 font-bold">50%</span>
                                        </div>
                                        <div class="w-full bg-slate-700 rounded-full h-3 overflow-hidden">
                                            <div class="bg-gradient-to-r from-green-500 to-green-400 h-3 rounded-full transition-all duration-1000" style="width: 50%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Step 5 - Enhanced -->
                    <div class="group flex flex-col md:flex-row md:items-center" data-step="5">
                        <div class="md:w-5/12 md:text-right md:pr-8 mb-8 md:mb-0">
                            <div class="bg-gradient-to-br from-slate-800/90 via-slate-900/70 to-slate-800/90 rounded-3xl p-8 border border-cyan-500/20 shadow-2xl backdrop-blur-sm hover:shadow-cyan-500/30 transition-all duration-500 transform hover:-translate-y-2 group-hover:border-cyan-500/40">
                                <div class="absolute inset-0 bg-gradient-to-br from-cyan-500/5 to-transparent rounded-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                                <div class="relative z-10">
                                    <div class="flex items-center justify-center md:justify-end mb-6">
                                        <div class="w-16 h-16 bg-gradient-to-r from-cyan-600 to-blue-600 rounded-2xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-300">
                                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h1m4 0h1m-6 4h.01M19 10a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <h3 class="text-3xl font-bold text-cyan-400 mb-6 group-hover:text-cyan-300 transition-colors duration-300">Step 5: Start Copying</h3>
                                    <p class="text-slate-300 leading-relaxed text-lg mb-6">
                                        Click "Start Copying" and watch as trades are automatically executed in your account. Monitor performance and adjust settings as needed for optimal results.
                                    </p>
                                    <div class="flex items-center justify-center md:justify-end space-x-3 p-4 bg-slate-900/40 rounded-xl border border-green-500/20">
                                        <div class="w-3 h-3 bg-green-500 rounded-full animate-pulse"></div>
                                        <span class="text-green-400 font-bold text-lg">Live Trading Active</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="absolute left-8 md:left-1/2 transform -translate-x-1/2 flex items-center justify-center w-20 h-20 bg-gradient-to-r from-cyan-600 to-blue-600 rounded-full text-white shadow-2xl border-4 border-slate-900 group-hover:scale-110 transition-transform duration-300 z-20">
                            <span class="font-bold text-2xl">5</span>
                        </div>
                        <div class="md:w-5/12 md:pl-8 pl-20">
                            <div class="bg-gradient-to-br from-slate-800/60 to-slate-900/60 rounded-3xl p-8 backdrop-blur-sm border border-slate-700/50 hover:border-cyan-500/30 transition-all duration-500 transform hover:-translate-y-1">
                                <h4 class="text-xl font-bold text-white mb-6 flex items-center">
                                    <svg class="w-5 h-5 text-cyan-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                    </svg>
                                    Live Trading Activity
                                </h4>
                                <div class="space-y-4">
                                    <div class="flex items-center justify-between p-4 bg-slate-900/60 rounded-xl border border-slate-700/50 hover:border-green-500/30 transition-colors duration-300">
                                        <div class="flex items-center space-x-3">
                                            <div class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></div>
                                            <span class="text-slate-300 font-medium">BTC/USDT</span>
                                        </div>
                                        <div class="flex items-center space-x-2">
                                            <span class="text-green-400 font-medium">Long</span>
                                            <span class="text-green-400 font-bold text-lg">+3.2%</span>
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-between p-4 bg-slate-900/60 rounded-xl border border-slate-700/50 hover:border-green-500/30 transition-colors duration-300">
                                        <div class="flex items-center space-x-3">
                                            <div class="w-2 h-2 bg-green-500 rounded-full animate-pulse" style="animation-delay: 0.5s;"></div>
                                            <span class="text-slate-300 font-medium">ETH/USDT</span>
                                        </div>
                                        <div class="flex items-center space-x-2">
                                            <span class="text-green-400 font-medium">Long</span>
                                            <span class="text-green-400 font-bold text-lg">+4.9%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Enhanced CTA Section -->
            <div class="text-center mt-20">
                <div class="bg-gradient-to-r from-blue-600/20 via-purple-600/20 to-cyan-600/20 rounded-3xl p-8 border border-blue-500/30 backdrop-blur-sm">
                    <h3 class="text-2xl md:text-3xl font-bold text-white mb-4">Ready to Start Your Copy Trading Journey?</h3>
                    <p class="text-slate-300 text-lg mb-8 max-w-2xl mx-auto">
                        Join thousands of successful traders who are already earning with our platform. Start with just $100 and watch your portfolio grow.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <button onclick="showTab('discover')" class="group relative px-8 py-4 bg-gradient-to-r from-blue-600 to-purple-600 text-white rounded-xl font-bold shadow-lg hover:shadow-blue-500/25 transition-all duration-300 transform hover:scale-105 overflow-hidden">
                            <span class="relative z-10 flex items-center justify-center space-x-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                </svg>
                                <span>Browse Top Traders</span>
                            </span>
                            <div class="absolute inset-0 bg-gradient-to-r from-blue-700 to-purple-700 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        </button>
                        <button class="group relative px-8 py-4 bg-transparent border-2 border-white/30 hover:border-white text-white rounded-xl font-bold hover:bg-white/10 transition-all duration-300 transform hover:scale-105">
                            <span class="flex items-center justify-center space-x-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                                <span>Create Free Account</span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-16 px-4">
        <div class="container mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">Frequently Asked Questions</h2>
                <p class="text-xl text-slate-300 max-w-3xl mx-auto">
                    Get answers to common questions about copy trading and how our platform works.
                </p>
            </div>

            <div class="max-w-4xl mx-auto space-y-4">
                <div class="bg-gradient-to-br from-slate-800/80 via-slate-900/60 to-slate-800/80 rounded-2xl border-0 shadow-2xl overflow-hidden">
                    <button class="faq-toggle w-full flex justify-between items-center p-6 text-left hover:bg-slate-700/30 transition-colors" onclick="toggleFAQ(this)">
                        <span class="text-lg font-semibold text-white">How much money do I need to start copy trading?</span>
                        <svg class="w-6 h-6 text-blue-400 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="faq-content hidden px-6 pb-6">
                        <p class="text-slate-300 leading-relaxed">
                            You can start copy trading with as little as $100. We recommend diversifying across multiple traders once your portfolio grows beyond $1000. This allows you to spread risk and potentially increase returns by following different trading strategies.
                        </p>
                    </div>
                </div>

                <div class="bg-gradient-to-br from-slate-800/80 via-slate-900/60 to-slate-800/80 rounded-2xl border-0 shadow-2xl overflow-hidden">
                    <button class="faq-toggle w-full flex justify-between items-center p-6 text-left hover:bg-slate-700/30 transition-colors" onclick="toggleFAQ(this)">
                        <span class="text-lg font-semibold text-white">Can I modify or stop trades from the traders I copy?</span>
                        <svg class="w-6 h-6 text-blue-400 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="faq-content hidden px-6 pb-6">
                        <p class="text-slate-300 leading-relaxed">
                            Yes, you have full control over your account. You can set maximum risk parameters, stop copying specific traders at any time, or manually close individual positions. You can also adjust copy ratios and set stop-loss/take-profit levels for additional risk management.
                        </p>
                    </div>
                </div>

                <div class="bg-gradient-to-br from-slate-800/80 via-slate-900/60 to-slate-800/80 rounded-2xl border-0 shadow-2xl overflow-hidden">
                    <button class="faq-toggle w-full flex justify-between items-center p-6 text-left hover:bg-slate-700/30 transition-colors" onclick="toggleFAQ(this)">
                        <span class="text-lg font-semibold text-white">How are traders compensated for being copied?</span>
                        <svg class="w-6 h-6 text-blue-400 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="faq-content hidden px-6 pb-6">
                        <p class="text-slate-300 leading-relaxed">
                            Traders you copy receive a performance fee based on profitable trades. This creates alignment between your interests and theirs - they only earn when you earn. The fee structure is transparent and typically ranges from 10-20% of profits generated.
                        </p>
                    </div>
                </div>

                <div class="bg-gradient-to-br from-slate-800/80 via-slate-900/60 to-slate-800/80 rounded-2xl border-0 shadow-2xl overflow-hidden">
                    <button class="faq-toggle w-full flex justify-between items-center p-6 text-left hover:bg-slate-700/30 transition-colors" onclick="toggleFAQ(this)">
                        <span class="text-lg font-semibold text-white">Can I become a trader that others copy?</span>
                        <svg class="w-6 h-6 text-blue-400 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="faq-content hidden px-6 pb-6">
                        <p class="text-slate-300 leading-relaxed">
                            Absolutely! Once you've established a track record on our platform, you can apply to become a featured trader. This can create an additional revenue stream as others copy your trades. You'll need to meet certain performance and risk criteria to qualify.
                        </p>
                    </div>
                </div>

                <div class="bg-gradient-to-br from-slate-800/80 via-slate-900/60 to-slate-800/80 rounded-2xl border-0 shadow-2xl overflow-hidden">
                    <button class="faq-toggle w-full flex justify-between items-center p-6 text-left hover:bg-slate-700/30 transition-colors" onclick="toggleFAQ(this)">
                        <span class="text-lg font-semibold text-white">What are the risks involved in copy trading?</span>
                        <svg class="w-6 h-6 text-blue-400 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="faq-content hidden px-6 pb-6">
                        <p class="text-slate-300 leading-relaxed">
                            Copy trading involves the same risks as any trading activity. Past performance doesn't guarantee future results. Market volatility can lead to losses, and you should only invest what you can afford to lose. We recommend starting small and diversifying across multiple traders to manage risk.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 px-4">
        <div class="container mx-auto">
            <div class="bg-gradient-to-r from-blue-600 via-purple-600 to-cyan-600 rounded-3xl p-8 md:p-12 text-center shadow-2xl">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">Ready to Start Copy Trading?</h2>
                <p class="text-xl text-white/90 mb-8 max-w-2xl mx-auto">
                    Follow successful traders and let their expertise work for you. Get started in minutes and begin building your portfolio with proven strategies.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <button onclick="showTab('discover')" class="bg-white text-blue-600 hover:bg-gray-100 px-8 py-4 rounded-xl font-bold transition-all duration-300 transform hover:scale-105 shadow-lg">
                        Browse Top Traders
                    </button>
                    <button class="bg-transparent border-2 border-white hover:bg-white hover:text-blue-600 text-white px-8 py-4 rounded-xl font-bold transition-all duration-300 transform hover:scale-105">
                        Create Account
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Copy Trading Modal --<!-- Enhanced Copy Trading Modal -->
    <div id="copyModal" class="fixed inset-0 bg-black/70 backdrop-blur-sm hidden z-50 flex items-center justify-center p-4">
        <div class="bg-gradient-to-br from-slate-800/95 via-slate-900/90 to-slate-800/95 backdrop-blur-xl rounded-3xl p-8 max-w-lg w-full border-0 shadow-2xl">
            <div class="flex justify-between items-center mb-8">
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 bg-gradient-to-r from-blue-500 to-purple-500 rounded-xl flex items-center justify-center">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold bg-gradient-to-r from-blue-400 to-purple-400 bg-clip-text text-transparent">Copy Trader</h3>
                </div>
                <button onclick="closeCopyModal()" class="text-gray-400 hover:text-white transition-colors p-2 hover:bg-slate-700/50 rounded-xl">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            
            <div id="selectedTraderInfo" class="mb-8">
                <!-- Selected trader info will be populated here -->
            </div>
            
            <div class="space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-semibold text-slate-300 mb-3">Copy Amount (USDT)</label>
                        <div class="relative">
                            <span class="absolute left-3 top-1/2 transform -translate-y-1/2 text-slate-400">$</span>
                            <input type="number" id="copyAmount" placeholder="100" min="10" class="w-full bg-slate-900/50 border-0 rounded-xl pl-8 pr-4 py-4 text-white placeholder-slate-400 focus:ring-2 focus:ring-blue-500/30 focus:outline-none transition-all duration-300">
                        </div>
                        <p class="text-xs text-slate-400 mt-2">Minimum: $10 USDT</p>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-semibold text-slate-300 mb-3">Copy Ratio</label>
                        <select class="w-full bg-slate-900/50 border-0 rounded-xl px-4 py-4 text-white focus:ring-2 focus:ring-blue-500/30 focus:outline-none transition-all duration-300">
                            <option value="1">1:1 (Fixed Amount)</option>
                            <option value="0.5">1:0.5 (Half Ratio)</option>
                            <option value="2">1:2 (Double Ratio)</option>
                        </select>
                    </div>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-semibold text-slate-300 mb-3">Stop Loss (%)</label>
                        <div class="relative">
                            <input type="number" id="stopLoss" placeholder="20" min="1" max="50" class="w-full bg-slate-900/50 border-0 rounded-xl px-4 py-4 text-white placeholder-slate-400 focus:ring-2 focus:ring-red-500/30 focus:outline-none transition-all duration-300">
                            <span class="absolute right-3 top-1/2 transform -translate-y-1/2 text-slate-400">%</span>
                        </div>
                        <p class="text-xs text-slate-400 mt-2">Max loss tolerance</p>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-semibold text-slate-300 mb-3">Take Profit (%)</label>
                        <div class="relative">
                            <input type="number" id="takeProfit" placeholder="50" min="5" class="w-full bg-slate-900/50 border-0 rounded-xl px-4 py-4 text-white placeholder-slate-400 focus:ring-2 focus:ring-green-500/30 focus:outline-none transition-all duration-300">
                            <span class="absolute right-3 top-1/2 transform -translate-y-1/2 text-slate-400">%</span>
                        </div>
                        <p class="text-xs text-slate-400 mt-2">Profit target</p>
                    </div>
                </div>
                
                <!-- Risk Warning -->
                <div class="bg-gradient-to-r from-yellow-500/10 to-orange-500/10 border border-yellow-500/20 rounded-xl p-4">
                    <div class="flex items-start space-x-3">
                        <svg class="w-5 h-5 text-yellow-400 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                        </svg>
                        <div>
                            <h4 class="text-sm font-semibold text-yellow-400 mb-1">Risk Warning</h4>
                            <p class="text-xs text-slate-300">Copy trading involves risk. Past performance doesn't guarantee future results. Only invest what you can afford to lose.</p>
                        </div>
                    </div>
                </div>
                
                <div class="flex space-x-4">
                    <button onclick="confirmCopy()" class="flex-1 bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-500 hover:to-purple-500 text-white py-4 rounded-xl font-semibold transition-all duration-300 shadow-lg hover:shadow-blue-500/25 transform hover:scale-105">
                        <span class="flex items-center justify-center space-x-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                            <span>Start Copying</span>
                        </span>
                    </button>
                    <button onclick="closeCopyModal()" class="flex-1 bg-slate-700/50 hover:bg-slate-600/50 text-slate-300 hover:text-white py-4 rounded-xl font-semibold transition-all duration-300 border border-slate-600/30 hover:border-slate-500/50">
                        Cancel
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Enhanced View Details Modal -->
    <div id="viewDetailsModal" class="fixed inset-0 bg-black/70 backdrop-blur-sm hidden z-50 flex items-center justify-center p-4">
        <div class="bg-gradient-to-br from-slate-800/95 via-slate-900/90 to-slate-800/95 backdrop-blur-xl rounded-3xl p-8 max-w-4xl w-full border-0 shadow-2xl max-h-[90vh] overflow-y-auto">
            <div class="flex justify-between items-center mb-8">
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 bg-gradient-to-r from-purple-500 to-pink-500 rounded-xl flex items-center justify-center">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold bg-gradient-to-r from-purple-400 to-pink-400 bg-clip-text text-transparent">Trader Details</h3>
                </div>
                <button onclick="closeViewDetailsModal()" class="text-gray-400 hover:text-white transition-colors p-2 hover:bg-slate-700/50 rounded-xl">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            
            <div id="traderDetailsContent">
                <!-- Trader details content will be populated here -->
            </div>
        </div>
    </div>
</main>

<style>
.active-tab {
    background: linear-gradient(135deg, #2e71ff 0%, #00c076 100%) !important;
}

.trader-card {
    transition: all 0.5s ease;
}

.trader-card:hover {
    transform: translateY(-8px) scale(1.02);
    box-shadow: 0 25px 50px rgba(46, 113, 255, 0.3);
}

.profit-positive {
    color: #10b981;
}

.profit-negative {
    color: #ef4444;
}

.rank-badge {
    background: linear-gradient(135deg, #ffd700 0%, #ffed4e 100%);
    color: #000;
}

.rank-badge.silver {
    background: linear-gradient(135deg, #c0c0c0 0%, #e8e8e8 100%);
}

.rank-badge.bronze {
    background: linear-gradient(135deg, #cd7f32 0%, #daa520 100%);
}

/* Remove any white borders globally */
* {
    border-color: transparent !important;
}

.border-slate-700\/50 {
    border-color: rgba(51, 65, 85, 0.5) !important;
}

.border-slate-600\/50 {
    border-color: rgba(71, 85, 105, 0.5) !important;
}
</style>

<script>
// Sample trader data with realistic profile pictures
const sampleTraders = [
    {
        id: 1,
        name: "CryptoMaster",
        avatar: "https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=150&h=150&fit=crop&crop=face&auto=format",
        roi30d: 45.2,
        winRate: 78.5,
        copiers: 1247,
        aum: 2450000,
        tradingStyle: "Day Trading",
        verified: true,
        description: "Professional crypto trader with 5+ years experience in DeFi and spot trading"
    },
    {
        id: 2,
        name: "BTCWhale",
        avatar: "https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=150&h=150&fit=crop&crop=face&auto=format",
        roi30d: 38.7,
        winRate: 82.1,
        copiers: 892,
        aum: 1890000,
        tradingStyle: "Swing Trading",
        verified: true,
        description: "Bitcoin specialist focusing on long-term trends and institutional strategies"
    },
    {
        id: 3,
        name: "AltcoinPro",
        avatar: "https://images.unsplash.com/photo-1494790108755-2616b612b786?w=150&h=150&fit=crop&crop=face&auto=format",
        roi30d: 52.3,
        winRate: 71.2,
        copiers: 634,
        aum: 1230000,
        tradingStyle: "Scalping",
        verified: false,
        description: "Altcoin expert with focus on emerging projects and high-frequency trading"
    },
    {
        id: 4,
        name: "TechAnalyst",
        avatar: "https://images.unsplash.com/photo-1560250097-0b93528c311a?w=150&h=150&fit=crop&crop=face&auto=format",
        roi30d: 29.8,
        winRate: 85.7,
        copiers: 1456,
        aum: 3120000,
        tradingStyle: "Long Term",
        verified: true,
        description: "Technical analysis expert with consistent returns using advanced indicators"
    },
    {
        id: 5,
        name: "DeFiTrader",
        avatar: "https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=150&h=150&fit=crop&crop=face&auto=format",
        roi30d: 41.5,
        winRate: 76.3,
        copiers: 723,
        aum: 1670000,
        tradingStyle: "Day Trading",
        verified: true,
        description: "DeFi protocols and yield farming specialist with institutional background"
    },
    {
        id: 6,
        name: "RiskManager",
        avatar: "https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?w=150&h=150&fit=crop&crop=face&auto=format",
        roi30d: 22.1,
        winRate: 89.4,
        copiers: 2103,
        aum: 4560000,
        tradingStyle: "Long Term",
        verified: true,
        description: "Conservative approach with excellent risk management and capital preservation"
    }
];

// Tab switching functionality
function showTab(tab) {
    // Hide all tabs
    document.getElementById('discoverTab').classList.add('hidden');
    document.getElementById('portfolioTab').classList.add('hidden');
    document.getElementById('leaderboardTab').classList.add('hidden');
    
    // Remove active class from all buttons
    document.getElementById('discoverBtn').classList.remove('active-tab');
    document.getElementById('portfolioBtn').classList.remove('active-tab');
    document.getElementById('leaderboardBtn').classList.remove('active-tab');
    
    // Show selected tab and activate button
    document.getElementById(tab + 'Tab').classList.remove('hidden');
    document.getElementById(tab + 'Btn').classList.add('active-tab');
    
    // Load tab-specific content
    if (tab === 'discover') {
        loadTraders();
    } else if (tab === 'portfolio') {
        loadPortfolio();
    } else if (tab === 'leaderboard') {
        loadLeaderboard();
    }
}

// Load traders grid
function loadTraders() {
    const grid = document.getElementById('tradersGrid');
    grid.innerHTML = '';
    
    sampleTraders.forEach(trader => {
        const card = createTraderCard(trader);
        grid.appendChild(card);
    });
}

// Create enhanced trader card
function createTraderCard(trader) {
    const card = document.createElement('div');
    card.className = 'trader-card group relative overflow-hidden bg-gradient-to-br from-slate-800/80 via-slate-900/60 to-slate-800/80 backdrop-blur-lg rounded-3xl p-8 border-0 shadow-2xl hover:shadow-blue-500/30 transition-all duration-700 transform hover:-translate-y-3 hover:scale-[1.02]';
    
    const roiClass = trader.roi30d >= 0 ? 'text-emerald-400' : 'text-red-400';
    const roiIcon = trader.roi30d >= 0 ? '▲' : '▼';
    const roiBgClass = trader.roi30d >= 0 ? 'from-emerald-500/10 via-green-500/5 to-emerald-600/10' : 'from-red-500/10 via-pink-500/5 to-red-600/10';
    const roiGlowClass = trader.roi30d >= 0 ? 'shadow-emerald-500/20' : 'shadow-red-500/20';
    
    card.innerHTML = `
        <!-- Animated Background Gradient -->
        <div class="absolute inset-0 bg-gradient-to-br ${roiBgClass} opacity-0 group-hover:opacity-100 transition-opacity duration-700"></div>
        
        <!-- Subtle Pattern Overlay -->
        <div class="absolute inset-0 opacity-5 bg-[url('data:image/svg+xml,%3Csvg width="40" height="40" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="%23ffffff" fill-opacity="0.1"%3E%3Cpath d="M20 20c0 11.046-8.954 20-20 20v-40c11.046 0 20 8.954 20 20z"/%3E%3C/g%3E%3C/svg%3E')]"></div>
        
        <!-- Glowing Border Effect -->
        <div class="absolute inset-0 rounded-3xl bg-gradient-to-r from-blue-500/20 via-purple-500/20 to-cyan-500/20 opacity-0 group-hover:opacity-100 transition-opacity duration-700 blur-sm"></div>
        
        <!-- Card Content -->
        <div class="relative z-10">
            <!-- Header Section -->
            <div class="flex items-start justify-between mb-8">
                <div class="flex items-center space-x-5">
                    <!-- Enhanced Profile Picture -->
                    <div class="relative">
                        <div class="absolute inset-0 bg-gradient-to-r from-blue-500 to-purple-500 rounded-full p-0.5 group-hover:from-blue-400 group-hover:to-purple-400 transition-all duration-500">
                            <div class="bg-slate-900 rounded-full p-1">
                                <img src="${trader.avatar}" alt="${trader.name}" class="w-16 h-16 rounded-full object-cover transition-transform duration-500 group-hover:scale-110">
                            </div>
                        </div>
                        ${trader.verified ? `
                            <div class="absolute -bottom-1 -right-1 w-6 h-6 bg-gradient-to-r from-blue-500 to-purple-500 rounded-full flex items-center justify-center shadow-lg ${roiGlowClass}">
                                <svg class="w-3.5 h-3.5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                        ` : ''}
                        <!-- Online Status Indicator -->
                        <div class="absolute top-0 right-0 w-4 h-4 bg-green-500 rounded-full border-2 border-slate-900 animate-pulse"></div>
                    </div>
                    
                    <!-- Trader Info -->
                    <div class="space-y-2">
                        <div class="flex items-center space-x-3">
                            <h4 class="font-bold text-white text-xl tracking-tight">${trader.name}</h4>
                            ${trader.verified ? '<span class="px-3 py-1 bg-gradient-to-r from-blue-500/20 to-purple-500/20 border-0 text-blue-300 rounded-full text-xs font-semibold">VERIFIED</span>' : ''}
                        </div>
                        <div class="flex items-center space-x-3">
                            <span class="px-3 py-1.5 bg-gradient-to-r from-slate-700/80 to-slate-800/80 backdrop-blur-sm rounded-full text-xs font-semibold text-slate-300 border-0">${trader.tradingStyle}</span>
                            <span class="px-3 py-1.5 bg-gradient-to-r from-green-500/20 to-emerald-500/20 text-green-300 rounded-full text-xs font-semibold border-0">ACTIVE</span>
                        </div>
                    </div>
                </div>
                
                <!-- Enhanced ROI Badge -->
                <div class="text-right">
                    <div class="relative">
                        <div class="absolute inset-0 bg-gradient-to-r ${trader.roi30d >= 0 ? 'from-emerald-500/20 to-green-500/20' : 'from-red-500/20 to-pink-500/20'} rounded-2xl blur-lg opacity-50"></div>
                        <div class="relative inline-flex items-center space-x-2 px-4 py-3 bg-gradient-to-r from-slate-900/90 to-slate-800/90 backdrop-blur-sm rounded-2xl border-0">
                            <div class="flex flex-col items-center">
                                <span class="${roiClass} text-sm font-medium">${roiIcon}</span>
                                <span class="text-2xl font-bold ${roiClass}">${Math.abs(trader.roi30d).toFixed(1)}%</span>
                            </div>
                        </div>
                    </div>
                    <div class="text-xs text-slate-400 mt-2 font-medium">30D ROI</div>
                </div>
            </div>
            
            <!-- Description with Better Typography -->
            <div class="mb-8">
                <p class="text-slate-300 leading-relaxed text-sm font-medium">${trader.description}</p>
            </div>
            
            <!-- Enhanced Stats Grid -->
            <div class="grid grid-cols-3 gap-4 mb-8">
                <div class="group/stat relative">
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-500/10 to-purple-500/10 rounded-2xl opacity-0 group-hover/stat:opacity-100 transition-opacity duration-300"></div>
                    <div class="relative text-center p-4 bg-gradient-to-br from-slate-900/50 to-slate-800/50 backdrop-blur-sm rounded-2xl border-0 hover:border-slate-600/50 transition-all duration-300">
                        <div class="text-xl font-bold text-white mb-2">${trader.winRate}%</div>
                        <div class="text-xs text-slate-400 uppercase tracking-wider font-semibold">Win Rate</div>
                        <div class="mt-2 w-full bg-slate-700/50 rounded-full h-1.5">
                            <div class="bg-gradient-to-r from-emerald-500 to-green-500 h-1.5 rounded-full transition-all duration-1000" style="width: ${trader.winRate}%"></div>
                        </div>
                    </div>
                </div>
                
                <div class="group/stat relative">
                    <div class="absolute inset-0 bg-gradient-to-r from-purple-500/10 to-pink-500/10 rounded-2xl opacity-0 group-hover/stat:opacity-100 transition-opacity duration-300"></div>
                    <div class="relative text-center p-4 bg-gradient-to-br from-slate-900/50 to-slate-800/50 backdrop-blur-sm rounded-2xl border-0 hover:border-slate-600/50 transition-all duration-300">
                        <div class="text-xl font-bold text-white mb-2">${trader.copiers.toLocaleString()}</div>
                        <div class="text-xs text-slate-400 uppercase tracking-wider font-semibold">Copiers</div>
                        <div class="mt-2 flex items-center justify-center space-x-1">
                            <svg class="w-3 h-3 text-purple-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-xs text-purple-400 font-medium">Popular</span>
                        </div>
                    </div>
                </div>
                
                <div class="group/stat relative">
                    <div class="absolute inset-0 bg-gradient-to-r from-yellow-500/10 to-orange-500/10 rounded-2xl opacity-0 group-hover/stat:opacity-100 transition-opacity duration-300"></div>
                    <div class="relative text-center p-4 bg-gradient-to-br from-slate-900/50 to-slate-800/50 backdrop-blur-sm rounded-2xl border-0 hover:border-slate-600/50 transition-all duration-300">
                        <div class="text-xl font-bold text-white mb-2">$${(trader.aum / 1000000).toFixed(1)}M</div>
                        <div class="text-xs text-slate-400 uppercase tracking-wider font-semibold">AUM</div>
                        <div class="mt-2 flex items-center justify-center space-x-1">
                            <svg class="w-3 h-3 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4zM18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9z"></path>
                            </svg>
                            <span class="text-xs text-yellow-400 font-medium">Assets</span>
                        </div>
                    </div>
                </div>
            </div>
            
                    </div>
    `;
    
    return card;
}

// Load portfolio
function loadPortfolio() {
    const activeCopies = document.getElementById('activeCopies');
    activeCopies.innerHTML = `
        <div class="space-y-4">
            <div class="flex items-center justify-between p-4 bg-slate-900/50 rounded-lg border-0">
                <div class="flex items-center space-x-3">
                    <img src="${sampleTraders[0].avatar}" alt="CryptoMaster" class="w-10 h-10 rounded-full">
                    <div>
                        <h5 class="font-semibold text-white">CryptoMaster</h5>
                        <p class="text-sm text-gray-400">Copied: $5,000</p>
                    </div>
                </div>
                <div class="text-right">
                    <div class="text-lg font-semibold text-emerald-400">+$1,250</div>
                    <div class="text-sm text-gray-400">+25.0%</div>
                </div>
            </div>
            
            <div class="flex items-center justify-between p-4 bg-slate-900/50 rounded-lg border-0">
                <div class="flex items-center space-x-3">
                    <img src="${sampleTraders[1].avatar}" alt="BTCWhale" class="w-10 h-10 rounded-full">
                    <div>
                        <h5 class="font-semibold text-white">BTCWhale</h5>
                        <p class="text-sm text-gray-400">Copied: $3,000</p>
                    </div>
                </div>
                <div class="text-right">
                    <div class="text-lg font-semibold text-emerald-400">+$690</div>
                    <div class="text-sm text-gray-400">+23.0%</div>
                </div>
            </div>
            
            <div class="flex items-center justify-between p-4 bg-slate-900/50 rounded-lg border-0">
                <div class="flex items-center space-x-3">
                    <img src="${sampleTraders[3].avatar}" alt="TechAnalyst" class="w-10 h-10 rounded-full">
                    <div>
                        <h5 class="font-semibold text-white">TechAnalyst</h5>
                        <p class="text-sm text-gray-400">Copied: $2,500</p>
                    </div>
                </div>
                <div class="text-right">
                    <div class="text-lg font-semibold text-emerald-400">+$400</div>
                    <div class="text-sm text-gray-400">+16.0%</div>
                </div>
            </div>
        </div>
    `;
}

// Load leaderboard
function loadLeaderboard() {
    const table = document.getElementById('leaderboardTable');
    table.innerHTML = '';
    
    // Sort traders by ROI
    const sortedTraders = [...sampleTraders].sort((a, b) => b.roi30d - a.roi30d);
    
    sortedTraders.forEach((trader, index) => {
        const row = document.createElement('tr');
        row.className = 'border-b border-slate-700/50 hover:bg-slate-800/50 transition-colors';
        
        const rankBadge = index < 3 ? 
            `<span class="rank-badge ${index === 0 ? '' : index === 1 ? 'silver' : 'bronze'} px-2 py-1 rounded-full text-xs font-bold">${index + 1}</span>` :
            `<span class="text-gray-400">${index + 1}</span>`;
        
        const roiClass = trader.roi30d >= 0 ? 'profit-positive' : 'profit-negative';
        const roiIcon = trader.roi30d >= 0 ? '▲' : '▼';
        
        row.innerHTML = `
            <td class="py-4">${rankBadge}</td>
            <td class="py-4">
                <div class="flex items-center space-x-3">
                    <img src="${trader.avatar}" alt="${trader.name}" class="w-8 h-8 rounded-full">
                    <div>
                        <div class="font-semibold text-white">${trader.name}</div>
                        <div class="text-sm text-gray-400">${trader.tradingStyle}</div>
                    </div>
                </div>
            </td>
            <td class="py-4 ${roiClass} font-semibold">${roiIcon} ${Math.abs(trader.roi30d).toFixed(1)}%</td>
            <td class="py-4 text-white">${trader.winRate}%</td>
            <td class="py-4 text-white">${trader.copiers.toLocaleString()}</td>
            <td class="py-4 text-white">$${(trader.aum / 1000000).toFixed(1)}M</td>
            <td class="py-4">
                <button onclick="openCopyModal(${trader.id})" class="bg-primary text-white px-4 py-2 rounded-lg font-medium hover:bg-blue-600 transition-colors">
                    Copy
                </button>
            </td>
        `;
        
        table.appendChild(row);
    });
}

// Modal functions
function openCopyModal(traderId) {
    const trader = sampleTraders.find(t => t.id === traderId);
    if (!trader) return;
    
    const modal = document.getElementById('copyModal');
    const traderInfo = document.getElementById('selectedTraderInfo');
    
    const roiClass = trader.roi30d >= 0 ? 'profit-positive' : 'profit-negative';
    const roiIcon = trader.roi30d >= 0 ? '▲' : '▼';
    
    traderInfo.innerHTML = `
        <div class="flex items-center space-x-3 p-4 bg-slate-900/50 rounded-lg border-0">
            <img src="${trader.avatar}" alt="${trader.name}" class="w-12 h-12 rounded-full">
            <div>
                <h4 class="font-semibold text-white">${trader.name}</h4>
                <p class="text-sm text-gray-400">${trader.tradingStyle}</p>
                <div class="text-sm ${roiClass}">${roiIcon} ${Math.abs(trader.roi30d).toFixed(1)}% (30D ROI)</div>
            </div>
        </div>
    `;
    
    modal.classList.remove('hidden');
}

function closeCopyModal() {
    document.getElementById('copyModal').classList.add('hidden');
}

function confirmCopy() {
    const amount = document.getElementById('copyAmount').value;
    const stopLoss = document.getElementById('stopLoss').value;
    const takeProfit = document.getElementById('takeProfit').value;
    
    if (!amount || amount < 10) {
        alert('Minimum copy amount is $10 USDT');
        return;
    }
    
    // Simulate copy confirmation
    alert(`Copy trade started successfully!\nAmount: $${amount} USDT\nStop Loss: ${stopLoss}%\nTake Profit: ${takeProfit}%`);
    closeCopyModal();
}

function viewTraderDetails(traderId) {
    const trader = sampleTraders.find(t => t.id === traderId);
    if (!trader) return;
    
    alert(`Viewing details for ${trader.name}\n\nThis would open a detailed trader profile page with:\n- Trading history\n- Performance charts\n- Risk metrics\n- Portfolio composition\n- Recent trades`);
}

// FAQ toggle functionality
function toggleFAQ(button) {
    const content = button.nextElementSibling;
    const icon = button.querySelector('svg');
    
    if (content.classList.contains('hidden')) {
        content.classList.remove('hidden');
        icon.style.transform = 'rotate(180deg)';
    } else {
        content.classList.add('hidden');
        icon.style.transform = 'rotate(0deg)';
    }
}

// Scroll to section functionality
function scrollToSection(sectionId) {
    const section = document.getElementById(sectionId);
    if (section) {
        section.scrollIntoView({ 
            behavior: 'smooth',
            block: 'start'
        });
    }
}

// Initialize page
document.addEventListener('DOMContentLoaded', function() {
    // Load discover tab by default
    showTab('discover');
});
</script>

<?php include 'include/footer.php'; ?>