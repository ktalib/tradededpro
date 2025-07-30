<?php include 'include/header.php'; ?>

<!-- Market Page Content -->
<main class="min-h-screen bg-darker">
    <!-- Hero Section -->
    <section class="relative overflow-hidden">
        <!-- Animated Background -->
        <div class="absolute inset-0 bg-gradient-to-br from-slate-900 via-blue-900 to-slate-900">
            <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%239C92AC" fill-opacity="0.05"%3E%3Ccircle cx="30" cy="30" r="2"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-40"></div>
            <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-r from-blue-600/20 via-green-600/20 to-purple-600/20 animate-pulse"></div>
        </div>
        
        <!-- Floating Elements -->
        <div class="absolute top-20 left-10 w-20 h-20 bg-gradient-to-r from-green-400 to-blue-500 rounded-full opacity-20 animate-bounce"></div>
        <div class="absolute top-40 right-20 w-16 h-16 bg-gradient-to-r from-blue-400 to-purple-500 rounded-full opacity-20 animate-pulse"></div>
        <div class="absolute bottom-20 left-20 w-12 h-12 bg-gradient-to-r from-purple-400 to-pink-500 rounded-full opacity-20 animate-bounce" style="animation-delay: 1s;"></div>
        
        <div class="relative z-10 container mx-auto text-center py-20 px-4">
            <div class="mb-8">
                <span class="inline-block px-4 py-2 bg-gradient-to-r from-green-500/20 to-blue-500/20 border border-green-500/30 rounded-full text-green-300 text-sm font-medium mb-6">
                    📈 Live Market Data
                </span>
            </div>
            
            <h1 class="text-5xl md:text-7xl font-bold mb-6 bg-gradient-to-r from-green-400 via-blue-400 to-purple-400 bg-clip-text text-transparent leading-tight">
                Market Overview
            </h1>
            <p class="text-xl md:text-2xl text-slate-300 mb-12 max-w-4xl mx-auto leading-relaxed">
                Real-time cryptocurrency and stock market data with advanced analytics and trading insights.
            </p>
            
            <!-- Market Tabs -->
            <div class="flex flex-wrap justify-center gap-4 mb-12">
                <button onclick="showMarketTab('crypto')" id="cryptoBtn" class="group relative px-8 py-4 bg-gradient-to-r from-green-600 to-blue-600 text-white rounded-xl font-semibold shadow-lg hover:shadow-green-500/25 transition-all duration-300 active-tab transform hover:scale-105">
                    <span class="relative z-10 flex items-center space-x-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                        </svg>
                        <span>Cryptocurrency</span>
                    </span>
                    <div class="absolute inset-0 bg-gradient-to-r from-green-700 to-blue-700 rounded-xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                </button>
                
                <button onclick="showMarketTab('stocks')" id="stocksBtn" class="group relative px-8 py-4 bg-slate-800/50 backdrop-blur-sm border-0 text-slate-300 rounded-xl font-semibold hover:bg-slate-700/50 transition-all duration-300 transform hover:scale-105">
                    <span class="flex items-center space-x-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                        </svg>
                        <span>Stocks</span>
                    </span>
                </button>
                
                <button onclick="showMarketTab('forex')" id="forexBtn" class="group relative px-8 py-4 bg-slate-800/50 backdrop-blur-sm border-0 text-slate-300 rounded-xl font-semibold hover:bg-slate-700/50 transition-all duration-300 transform hover:scale-105">
                    <span class="flex items-center space-x-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z"></path>
                        </svg>
                        <span>Forex</span>
                    </span>
                </button>
            </div>
        </div>
    </section>

    <!-- Market Stats Overview -->
    <section class="py-12 px-4">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-12">
                <!-- Market Cap -->
                <div class="group relative bg-gradient-to-br from-slate-800/80 via-slate-900/60 to-slate-800/80 rounded-2xl p-6 border-0 hover:shadow-2xl hover:shadow-green-500/20 transition-all duration-500 transform hover:-translate-y-2">
                    <div class="absolute inset-0 bg-gradient-to-br from-green-500/5 to-transparent rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="relative z-10">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-emerald-600 rounded-xl flex items-center justify-center shadow-lg">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4zM18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9z"></path>
                                </svg>
                            </div>
                            <span class="text-2xl font-bold text-white" id="totalMarketCap">$2.1T</span>
                        </div>
                        <h3 class="text-sm font-medium text-gray-400 uppercase tracking-wide">Total Market Cap</h3>
                        <p class="text-xs text-gray-500 mt-1">24h change: <span class="text-green-400">+2.4%</span></p>
                    </div>
                </div>

                <!-- 24h Volume -->
                <div class="group relative bg-gradient-to-br from-slate-800/80 via-slate-900/60 to-slate-800/80 rounded-2xl p-6 border-0 hover:shadow-2xl hover:shadow-blue-500/20 transition-all duration-500 transform hover:-translate-y-2">
                    <div class="absolute inset-0 bg-gradient-to-br from-blue-500/5 to-transparent rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="relative z-10">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-cyan-600 rounded-xl flex items-center justify-center shadow-lg">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z"></path>
                                </svg>
                            </div>
                            <span class="text-2xl font-bold text-white" id="totalVolume">$89.2B</span>
                        </div>
                        <h3 class="text-sm font-medium text-gray-400 uppercase tracking-wide">24h Volume</h3>
                        <p class="text-xs text-gray-500 mt-1">Global trading volume</p>
                    </div>
                </div>

                <!-- BTC Dominance -->
                <div class="group relative bg-gradient-to-br from-slate-800/80 via-slate-900/60 to-slate-800/80 rounded-2xl p-6 border-0 hover:shadow-2xl hover:shadow-orange-500/20 transition-all duration-500 transform hover:-translate-y-2">
                    <div class="absolute inset-0 bg-gradient-to-br from-orange-500/5 to-transparent rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="relative z-10">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-orange-500 to-yellow-500 rounded-xl flex items-center justify-center shadow-lg">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M3 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <span class="text-2xl font-bold text-white" id="btcDominance">52.3%</span>
                        </div>
                        <h3 class="text-sm font-medium text-gray-400 uppercase tracking-wide">BTC Dominance</h3>
                        <p class="text-xs text-gray-500 mt-1">Bitcoin market share</p>
                    </div>
                </div>

                <!-- Active Coins -->
                <div class="group relative bg-gradient-to-br from-slate-800/80 via-slate-900/60 to-slate-800/80 rounded-2xl p-6 border-0 hover:shadow-2xl hover:shadow-purple-500/20 transition-all duration-500 transform hover:-translate-y-2">
                    <div class="absolute inset-0 bg-gradient-to-br from-purple-500/5 to-transparent rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="relative z-10">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-indigo-600 rounded-xl flex items-center justify-center shadow-lg">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <span class="text-2xl font-bold text-white" id="activeCoins">13,247</span>
                        </div>
                        <h3 class="text-sm font-medium text-gray-400 uppercase tracking-wide">Active Coins</h3>
                        <p class="text-xs text-gray-500 mt-1">Listed cryptocurrencies</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Cryptocurrency Tab -->
    <section id="cryptoTab" class="py-12 px-4">
        <div class="container mx-auto">
            <!-- Search and Filters -->
            <div class="relative bg-gradient-to-br from-slate-800/50 via-slate-800/30 to-slate-900/50 backdrop-blur-sm rounded-2xl p-8 mb-8 border-0 shadow-2xl">
                <div class="absolute inset-0 bg-gradient-to-r from-green-600/5 via-blue-600/5 to-purple-600/5 rounded-2xl"></div>
                <div class="relative z-10">
                    <div class="flex items-center space-x-3 mb-8">
                        <div class="w-10 h-10 bg-gradient-to-r from-green-500 to-blue-500 rounded-xl flex items-center justify-center">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold bg-gradient-to-r from-green-400 to-blue-400 bg-clip-text text-transparent">Search & Filter</h3>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                        <div class="space-y-2">
                            <label class="block text-sm font-semibold text-slate-300 mb-3">Search Coin</label>
                            <input type="text" id="coinSearch" placeholder="Bitcoin, Ethereum..." class="w-full bg-slate-900/50 border-0 rounded-xl px-4 py-3 text-white placeholder-slate-400 focus:ring-2 focus:ring-green-500/20 focus:outline-none transition-all duration-300 backdrop-blur-sm">
                        </div>
                        <div class="space-y-2">
                            <label class="block text-sm font-semibold text-slate-300 mb-3">Category</label>
                            <select class="w-full bg-slate-900/50 border-0 rounded-xl px-4 py-3 text-white focus:ring-2 focus:ring-green-500/20 focus:outline-none transition-all duration-300 backdrop-blur-sm">
                                <option>All Categories</option>
                                <option>DeFi</option>
                                <option>Layer 1</option>
                                <option>Meme Coins</option>
                                <option>Gaming</option>
                            </select>
                        </div>
                        <div class="space-y-2">
                            <label class="block text-sm font-semibold text-slate-300 mb-3">Market Cap</label>
                            <select class="w-full bg-slate-900/50 border-0 rounded-xl px-4 py-3 text-white focus:ring-2 focus:ring-green-500/20 focus:outline-none transition-all duration-300 backdrop-blur-sm">
                                <option>All Caps</option>
                                <option>Large Cap (>$10B)</option>
                                <option>Mid Cap ($1B-$10B)</option>
                                <option>Small Cap (<$1B)</option>
                            </select>
                        </div>
                        <div class="space-y-2">
                            <label class="block text-sm font-semibold text-slate-300 mb-3">Sort By</label>
                            <select class="w-full bg-slate-900/50 border-0 rounded-xl px-4 py-3 text-white focus:ring-2 focus:ring-green-500/20 focus:outline-none transition-all duration-300 backdrop-blur-sm">
                                <option>Market Cap</option>
                                <option>Price</option>
                                <option>24h Change</option>
                                <option>Volume</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Crypto Market Table -->
            <div class="bg-gradient-to-br from-slate-800/80 via-slate-900/60 to-slate-800/80 rounded-2xl p-6 border-0 shadow-2xl">
                <h3 class="text-xl font-bold text-white mb-6 flex items-center space-x-2">
                    <svg class="w-5 h-5 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                    </svg>
                    <span>Top Cryptocurrencies</span>
                </h3>
                
                <div class="overflow-x-auto">
                    <table class="w-full text-left">
                        <thead>
                            <tr class="border-b border-slate-700/50">
                                <th class="pb-3 text-slate-400 font-medium">#</th>
                                <th class="pb-3 text-slate-400 font-medium">Name</th>
                                <th class="pb-3 text-slate-400 font-medium">Price</th>
                                <th class="pb-3 text-slate-400 font-medium">24h %</th>
                                <th class="pb-3 text-slate-400 font-medium">7d %</th>
                                <th class="pb-3 text-slate-400 font-medium">Market Cap</th>
                                <th class="pb-3 text-slate-400 font-medium">Volume (24h)</th>
                                <th class="pb-3 text-slate-400 font-medium">Chart</th>
                            </tr>
                        </thead>
                        <tbody id="cryptoTableBody">
                            <!-- Crypto data will be populated here -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- Stocks Tab -->
    <section id="stocksTab" class="py-12 px-4 hidden">
        <div class="container mx-auto">
            <!-- Stock Market Table -->
            <div class="bg-gradient-to-br from-slate-800/80 via-slate-900/60 to-slate-800/80 rounded-2xl p-6 border-0 shadow-2xl">
                <h3 class="text-xl font-bold text-white mb-6 flex items-center space-x-2">
                    <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                    </svg>
                    <span>Stock Market</span>
                </h3>
                
                <div class="overflow-x-auto">
                    <table class="w-full text-left">
                        <thead>
                            <tr class="border-b border-slate-700/50">
                                <th class="pb-3 text-slate-400 font-medium">Symbol</th>
                                <th class="pb-3 text-slate-400 font-medium">Company</th>
                                <th class="pb-3 text-slate-400 font-medium">Price</th>
                                <th class="pb-3 text-slate-400 font-medium">Change</th>
                                <th class="pb-3 text-slate-400 font-medium">Change %</th>
                                <th class="pb-3 text-slate-400 font-medium">Volume</th>
                                <th class="pb-3 text-slate-400 font-medium">Market Cap</th>
                            </tr>
                        </thead>
                        <tbody id="stocksTableBody">
                            <!-- Stock data will be populated here -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- Forex Tab -->
    <section id="forexTab" class="py-12 px-4 hidden">
        <div class="container mx-auto">
            <!-- Forex Market Table -->
            <div class="bg-gradient-to-br from-slate-800/80 via-slate-900/60 to-slate-800/80 rounded-2xl p-6 border-0 shadow-2xl">
                <h3 class="text-xl font-bold text-white mb-6 flex items-center space-x-2">
                    <svg class="w-5 h-5 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z"></path>
                    </svg>
                    <span>Forex Market</span>
                </h3>
                
                <div class="overflow-x-auto">
                    <table class="w-full text-left">
                        <thead>
                            <tr class="border-b border-slate-700/50">
                                <th class="pb-3 text-slate-400 font-medium">Pair</th>
                                <th class="pb-3 text-slate-400 font-medium">Price</th>
                                <th class="pb-3 text-slate-400 font-medium">Change</th>
                                <th class="pb-3 text-slate-400 font-medium">Change %</th>
                                <th class="pb-3 text-slate-400 font-medium">High</th>
                                <th class="pb-3 text-slate-400 font-medium">Low</th>
                                <th class="pb-3 text-slate-400 font-medium">Trend</th>
                            </tr>
                        </thead>
                        <tbody id="forexTableBody">
                            <!-- Forex data will be populated here -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</main>

<style>
.active-tab {
    background: linear-gradient(135deg, #10b981 0%, #3b82f6 100%) !important;
}

.price-up {
    color: #10b981;
}

.price-down {
    color: #ef4444;
}

.price-neutral {
    color: #64748b;
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

/* Mini chart styles */
.mini-chart {
    width: 80px;
    height: 40px;
}
</style>

<script>
// Sample cryptocurrency data
const cryptoData = [
    {
        rank: 1,
        name: "Bitcoin",
        symbol: "BTC",
        price: 43250.00,
        change24h: 2.45,
        change7d: -1.23,
        marketCap: 847000000000,
        volume: 28500000000,
        logo: "https://cryptologos.cc/logos/bitcoin-btc-logo.png"
    },
    {
        rank: 2,
        name: "Ethereum",
        symbol: "ETH",
        price: 2650.75,
        change24h: 3.21,
        change7d: 5.67,
        marketCap: 318000000000,
        volume: 15200000000,
        logo: "https://cryptologos.cc/logos/ethereum-eth-logo.png"
    },
    {
        rank: 3,
        name: "Tether",
        symbol: "USDT",
        price: 1.00,
        change24h: 0.01,
        change7d: -0.02,
        marketCap: 95000000000,
        volume: 45000000000,
        logo: "https://cryptologos.cc/logos/tether-usdt-logo.png"
    },
    {
        rank: 4,
        name: "BNB",
        symbol: "BNB",
        price: 315.20,
        change24h: 1.85,
        change7d: 3.45,
        marketCap: 47000000000,
        volume: 1200000000,
        logo: "https://cryptologos.cc/logos/bnb-bnb-logo.png"
    },
    {
        rank: 5,
        name: "Solana",
        symbol: "SOL",
        price: 98.45,
        change24h: 5.67,
        change7d: 12.34,
        marketCap: 42000000000,
        volume: 2100000000,
        logo: "https://cryptologos.cc/logos/solana-sol-logo.png"
    }
];

// Sample stock data
const stockData = [
    {
        symbol: "AAPL",
        company: "Apple Inc.",
        price: 182.52,
        change: 2.45,
        changePercent: 1.36,
        volume: 45000000,
        marketCap: 2800000000000
    },
    {
        symbol: "MSFT",
        company: "Microsoft Corporation",
        price: 378.85,
        change: -1.23,
        changePercent: -0.32,
        volume: 28000000,
        marketCap: 2750000000000
    },
    {
        symbol: "GOOGL",
        company: "Alphabet Inc.",
        price: 142.56,
        change: 3.21,
        changePercent: 2.30,
        volume: 32000000,
        marketCap: 1800000000000
    },
    {
        symbol: "AMZN",
        company: "Amazon.com Inc.",
        price: 155.89,
        change: 1.85,
        changePercent: 1.20,
        volume: 38000000,
        marketCap: 1600000000000
    },
    {
        symbol: "TSLA",
        company: "Tesla Inc.",
        price: 248.42,
        change: -5.67,
        changePercent: -2.23,
        volume: 95000000,
        marketCap: 790000000000
    }
];

// Sample forex data
const forexData = [
    {
        pair: "EUR/USD",
        price: 1.0875,
        change: 0.0023,
        changePercent: 0.21,
        high: 1.0892,
        low: 1.0845,
        trend: "up"
    },
    {
        pair: "GBP/USD",
        price: 1.2654,
        change: -0.0045,
        changePercent: -0.35,
        high: 1.2698,
        low: 1.2632,
        trend: "down"
    },
    {
        pair: "USD/JPY",
        price: 149.85,
        change: 0.67,
        changePercent: 0.45,
        high: 150.12,
        low: 149.23,
        trend: "up"
    },
    {
        pair: "USD/CHF",
        price: 0.8756,
        change: 0.0012,
        changePercent: 0.14,
        high: 0.8768,
        low: 0.8742,
        trend: "up"
    },
    {
        pair: "AUD/USD",
        price: 0.6523,
        change: -0.0034,
        changePercent: -0.52,
        high: 0.6567,
        low: 0.6512,
        trend: "down"
    }
];

// Tab switching functionality
function showMarketTab(tab) {
    // Hide all tabs
    document.getElementById('cryptoTab').classList.add('hidden');
    document.getElementById('stocksTab').classList.add('hidden');
    document.getElementById('forexTab').classList.add('hidden');
    
    // Remove active class from all buttons
    document.getElementById('cryptoBtn').classList.remove('active-tab');
    document.getElementById('stocksBtn').classList.remove('active-tab');
    document.getElementById('forexBtn').classList.remove('active-tab');
    
    // Show selected tab and activate button
    document.getElementById(tab + 'Tab').classList.remove('hidden');
    document.getElementById(tab + 'Btn').classList.add('active-tab');
    
    // Load tab-specific content
    if (tab === 'crypto') {
        loadCryptoData();
    } else if (tab === 'stocks') {
        loadStockData();
    } else if (tab === 'forex') {
        loadForexData();
    }
}

// Load cryptocurrency data
function loadCryptoData() {
    const tbody = document.getElementById('cryptoTableBody');
    tbody.innerHTML = '';
    
    cryptoData.forEach(coin => {
        const row = document.createElement('tr');
        row.className = 'border-b border-slate-700/30 hover:bg-slate-800/30 transition-colors';
        
        const changeClass = coin.change24h > 0 ? 'price-up' : coin.change24h < 0 ? 'price-down' : 'price-neutral';
        const change7dClass = coin.change7d > 0 ? 'price-up' : coin.change7d < 0 ? 'price-down' : 'price-neutral';
        
        row.innerHTML = `
            <td class="py-4 text-slate-400">${coin.rank}</td>
            <td class="py-4">
                <div class="flex items-center space-x-3">
                    <img src="${coin.logo}" alt="${coin.name}" class="w-8 h-8 rounded-full" onerror="this.src='https://via.placeholder.com/32x32/64748b/ffffff?text=${coin.symbol}'">
                    <div>
                        <div class="font-semibold text-white">${coin.name}</div>
                        <div class="text-sm text-slate-400">${coin.symbol}</div>
                    </div>
                </div>
            </td>
            <td class="py-4 text-white font-semibold">$${coin.price.toLocaleString()}</td>
            <td class="py-4 ${changeClass} font-semibold">${coin.change24h > 0 ? '+' : ''}${coin.change24h.toFixed(2)}%</td>
            <td class="py-4 ${change7dClass} font-semibold">${coin.change7d > 0 ? '+' : ''}${coin.change7d.toFixed(2)}%</td>
            <td class="py-4 text-white">$${(coin.marketCap / 1000000000).toFixed(1)}B</td>
            <td class="py-4 text-slate-300">$${(coin.volume / 1000000000).toFixed(1)}B</td>
            <td class="py-4">
                <div class="mini-chart bg-slate-700/30 rounded flex items-center justify-center">
                    <svg class="w-12 h-6 ${changeClass}" fill="none" stroke="currentColor" viewBox="0 0 24 12">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M2 8l4-4 4 4 6-6 4 4"></path>
                    </svg>
                </div>
            </td>
        `;
        
        tbody.appendChild(row);
    });
}

// Load stock data
function loadStockData() {
    const tbody = document.getElementById('stocksTableBody');
    tbody.innerHTML = '';
    
    stockData.forEach(stock => {
        const row = document.createElement('tr');
        row.className = 'border-b border-slate-700/30 hover:bg-slate-800/30 transition-colors';
        
        const changeClass = stock.change > 0 ? 'price-up' : stock.change < 0 ? 'price-down' : 'price-neutral';
        
        row.innerHTML = `
            <td class="py-4 text-white font-semibold">${stock.symbol}</td>
            <td class="py-4 text-white">${stock.company}</td>
            <td class="py-4 text-white font-semibold">$${stock.price.toFixed(2)}</td>
            <td class="py-4 ${changeClass} font-semibold">${stock.change > 0 ? '+' : ''}${stock.change.toFixed(2)}</td>
            <td class="py-4 ${changeClass} font-semibold">${stock.changePercent > 0 ? '+' : ''}${stock.changePercent.toFixed(2)}%</td>
            <td class="py-4 text-slate-300">${(stock.volume / 1000000).toFixed(1)}M</td>
            <td class="py-4 text-white">$${(stock.marketCap / 1000000000000).toFixed(2)}T</td>
        `;
        
        tbody.appendChild(row);
    });
}

// Load forex data
function loadForexData() {
    const tbody = document.getElementById('forexTableBody');
    tbody.innerHTML = '';
    
    forexData.forEach(pair => {
        const row = document.createElement('tr');
        row.className = 'border-b border-slate-700/30 hover:bg-slate-800/30 transition-colors';
        
        const changeClass = pair.change > 0 ? 'price-up' : pair.change < 0 ? 'price-down' : 'price-neutral';
        const trendIcon = pair.trend === 'up' ? '↗' : pair.trend === 'down' ? '↘' : '→';
        
        row.innerHTML = `
            <td class="py-4 text-white font-semibold">${pair.pair}</td>
            <td class="py-4 text-white font-semibold">${pair.price.toFixed(4)}</td>
            <td class="py-4 ${changeClass} font-semibold">${pair.change > 0 ? '+' : ''}${pair.change.toFixed(4)}</td>
            <td class="py-4 ${changeClass} font-semibold">${pair.changePercent > 0 ? '+' : ''}${pair.changePercent.toFixed(2)}%</td>
            <td class="py-4 text-slate-300">${pair.high.toFixed(4)}</td>
            <td class="py-4 text-slate-300">${pair.low.toFixed(4)}</td>
            <td class="py-4 text-center">
                <span class="${changeClass} text-lg">${trendIcon}</span>
            </td>
        `;
        
        tbody.appendChild(row);
    });
}

// Search functionality
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('coinSearch');
    if (searchInput) {
        searchInput.addEventListener('input', function(e) {
            const searchTerm = e.target.value.toLowerCase();
            // Implement search filtering logic here
            console.log('Searching for:', searchTerm);
        });
    }
    
    // Load crypto tab by default
    showMarketTab('crypto');
    
    // Update market stats periodically
    setInterval(updateMarketStats, 30000); // Update every 30 seconds
});

// Update market statistics
function updateMarketStats() {
    // Simulate real-time updates
    const marketCap = document.getElementById('totalMarketCap');
    const volume = document.getElementById('totalVolume');
    const btcDom = document.getElementById('btcDominance');
    const activeCoins = document.getElementById('activeCoins');
    
    if (marketCap) {
        // Add small random variations to simulate live data
        const variation = (Math.random() - 0.5) * 0.02; // ±1% variation
        const currentValue = parseFloat(marketCap.textContent.replace('$', '').replace('T', ''));
        const newValue = currentValue * (1 + variation);
        marketCap.textContent = `$${newValue.toFixed(1)}T`;
    }
}

// Initialize page
document.addEventListener('DOMContentLoaded', function() {
    showMarketTab('crypto');
});
</script>

<?php include 'include/footer.php'; ?>