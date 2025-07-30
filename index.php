<?php include 'include/header.php'; ?>
    <section class="relative w-full">
        <!-- Background Image with Responsive Height -->
        <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('https://t3.ftcdn.net/jpg/04/73/98/12/360_F_473981217_HfaWcdUeoNgfhF2LBtrcLYiJLF3t9QWO.jpg');">
        </div>
        
        <!-- Dark Overlay -->
        <div class="absolute inset-0 banner-overlay"></div>
        
        <!-- Banner Content -->
        <div class="relative container mx-auto px-4 py-16 md:py-24 lg:py-32 flex flex-col justify-center items-start">
            <div class="max-w-2xl">
                <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-4 text-white">Exclusive Bonus Offers</h1>
                <p class="text-base md:text-lg text-gray-200 mb-6">Discover our special promotions and rewards designed to enhance your experience. Take advantage of these limited-time offers today.</p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="https://tradededpro.com/app/user/register" class="bg-gradient-to-r from-blue-700 to-blue-500 hover:from-blue-800 hover:to-blue-600 text-white font-bold py-2 px-6 rounded-lg transition-all duration-300 shadow-lg">
                        Explore Offers
                    </a>
                   
                </div>
            </div>
        </div>
    </section>
    <!-- Main Chart Section -->
    <!-- <section class="p-4">
        <div class="bg-dark rounded-lg p-4 mb-8">
            <div class="flex justify-between items-center mb-4">
                <div>
                    <h2 class="text-2xl font-bold text-green-500">108,341.65</h2>
                    <p class="text-success text-sm">+1,270.89 (+1.19%)</p>
                </div>
                <div class="flex space-x-2">
                    <button class="bg-secondary px-3 py-1 rounded text-sm">1H</button>
                    <button class="bg-secondary px-3 py-1 rounded text-sm">4H</button>
                    <button class="bg-primary px-3 py-1 rounded text-sm">1D</button>
                    <button class="bg-secondary px-3 py-1 rounded text-sm">1W</button>
                </div>
            </div>
            <div id="tradingview_chart" class="h-64 md:h-96"></div>
        </div>
    </section> -->

    <!-- Trending Tokens Section -->
    <section class="px-4 py-8">
        <h2 class="text-2xl font-bold text-center mb-2">Most Trending Tokens</h2>
        <p class="text-gray-400 text-center text-sm mb-6">Trade across 2,000+ pairs on 5:1-125x leverage pairs</p>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-8">
            <!-- Hot Futures -->
            <div class="bg-dark rounded-lg overflow-hidden">
                <div class="flex border-b border-gray-800">
                    <button id="hotFuturesBtn" class="flex-1 py-3 px-4 bg-dark text-white font-semibold border-b-2 border-primary">Hot Futures</button>
                    <button id="hotTokensBtn" class="flex-1 py-3 px-4 text-gray-400">Hot Tokens</button>
                </div>
                <div class="p-4">
                    <table id="hotFuturesContent" class="w-full">
                        <thead>
                            <tr class="text-gray-400 text-sm">
                                <th class="text-left pb-2">Name</th>
                                <th class="text-right pb-2">Price</th>
                                <th class="text-right pb-2">24h</th>
                                <th class="text-right pb-2">Trade</th>
                            </tr>
                        </thead>
                        <tbody id="hotFuturesTable">
                            <tr>
                                <td colspan="4" class="py-4 text-center text-gray-400">Loading...</td>
                            </tr>
                        </tbody>
                    </table>
                    <table id="hotTokensContent" class="w-full hidden">
                        <thead>
                            <tr class="text-gray-400 text-sm">
                                <th class="text-left pb-2">Name</th>
                                <th class="text-right pb-2">Price</th>
                                <th class="text-right pb-2">24h</th>
                                <th class="text-right pb-2">Trade</th>
                            </tr>
                        </thead>
                        <tbody id="hotTokensTable">
                            <tr>
                                <td colspan="4" class="py-4 text-center text-gray-400">Loading...</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Spot Gainers -->
            <div class="bg-dark rounded-lg overflow-hidden">
                <div class="flex border-b border-gray-800">
                    <button id="spotGainersBtn" class="flex-1 py-3 px-4 bg-dark text-white font-semibold border-b-2 border-primary">Spot Gainers</button>
                    <button id="futuresGainersBtn" class="flex-1 py-3 px-4 text-gray-400">Futures Gainers</button>
                </div>
                <div class="p-4">
                    <table id="spotGainersContent" class="w-full">
                        <thead>
                            <tr class="text-gray-400 text-sm">
                                <th class="text-left pb-2">Name</th>
                                <th class="text-right pb-2">Price</th>
                                <th class="text-right pb-2">24h</th>
                                <th class="text-right pb-2">Trade</th>
                            </tr>
                        </thead>
                        <tbody id="spotGainersTable">
                            <tr>
                                <td colspan="4" class="py-4 text-center text-gray-400">Loading...</td>
                            </tr>
                        </tbody>
                    </table>
                    <table id="futuresGainersContent" class="w-full hidden">
                        <thead>
                            <tr class="text-gray-400 text-sm">
                                <th class="text-left pb-2">Name</th>
                                <th class="text-right pb-2">Price</th>
                                <th class="text-right pb-2">24h</th>
                                <th class="text-right pb-2">Trade</th>
                            </tr>
                        </thead>
                        <tbody id="futuresGainersTable">
                            <tr>
                                <td colspan="4" class="py-4 text-center text-gray-400">Loading...</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <script src="js/main.js"></script>
    </section>

    <!-- Promotional Banners -->
    <section class="px-4 py-8 bg-gray-950">
        <div class="relative max-w-7xl mx-auto">
            <div class="relative">
                <!-- Carousel Navigation Buttons -->
                <button id="prevBtn" class="absolute -left-4 top-1/2 -translate-y-1/2 z-10 bg-white/10 hover:bg-white/20 text-white rounded-full p-2 hidden md:block">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5">
                        <path d="m15 18-6-6 6-6"/>
                    </svg>
                </button>
                <button id="nextBtn" class="absolute -right-4 top-1/2 -translate-y-1/2 z-10 bg-white/10 hover:bg-white/20 text-white rounded-full p-2 hidden md:block">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5">
                        <path d="m9 18 6-6-6-6"/>
                    </svg>
                </button>
                
                <!-- Carousel Container -->
                <div id="carousel" class="carousel-container flex space-x-4 overflow-x-auto pb-4 snap-x snap-mandatory scroll-smooth">
                    <!-- Card 1 -->
                    <div class="carousel-item min-w-[280px] md:min-w-[calc(50%-1rem)] lg:min-w-[calc(25%-1rem)] bg-gradient-to-r from-blue-900 to-blue-700 rounded-lg p-4 flex flex-col justify-between h-40 snap-center shadow-lg">
                        <div>
                            <p class="text-xs bg-white text-blue-900 inline-block px-2 py-0.5 rounded">NEWBIE</p>
                            <h3 class="text-xl font-bold mt-2">Welcome Bonus</h3>
                            <p class="text-sm">Up to</p>
                        </div>
                        <div class="flex justify-between items-end">
                            <p class="text-2xl font-bold">$50,000</p>
                            <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center">
                                <span class="text-blue-900 font-bold">$</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Card 2 -->
                    <div class="carousel-item min-w-[280px] md:min-w-[calc(50%-1rem)] lg:min-w-[calc(25%-1rem)] bg-gradient-to-r from-indigo-900 to-indigo-700 rounded-lg p-4 flex flex-col justify-between h-40 snap-center shadow-lg">
                        <div>
                            <p class="text-xs bg-white text-indigo-900 inline-block px-2 py-0.5 rounded">PROMOTION</p>
                            <h3 class="text-xl font-bold mt-2">Trading Bonus</h3>
                            <p class="text-sm">Up to</p>
                        </div>
                        <div class="flex justify-between items-end">
                            <p class="text-2xl font-bold">$50</p>
                            <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center">
                                <span class="text-indigo-900 font-bold">$</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Card 3 -->
                    <div class="carousel-item min-w-[280px] md:min-w-[calc(50%-1rem)] lg:min-w-[calc(25%-1rem)] bg-gradient-to-r from-purple-900 to-purple-700 rounded-lg p-4 flex flex-col justify-between h-40 snap-center shadow-lg">
                        <div>
                            <p class="text-xs bg-white text-purple-900 inline-block px-2 py-0.5 rounded">EXCLUSIVE</p>
                            <h3 class="text-xl font-bold mt-2">Leaderboard</h3>
                            <p class="text-sm">Win prizes</p>
                        </div>
                        <div class="flex justify-between items-end">
                            <p class="text-2xl font-bold">$25,000</p>
                            <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center">
                                <span class="text-purple-900 font-bold">$</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Card 4 -->
                    <div class="carousel-item min-w-[280px] md:min-w-[calc(50%-1rem)] lg:min-w-[calc(25%-1rem)] bg-gradient-to-r from-cyan-900 to-cyan-700 rounded-lg p-4 flex flex-col justify-between h-40 snap-center shadow-lg">
                        <div>
                            <p class="text-xs bg-white text-cyan-900 inline-block px-2 py-0.5 rounded">SPECIAL</p>
                            <h3 class="text-xl font-bold mt-2">Zero Fees</h3>
                            <p class="text-sm">Limited time</p>
                        </div>
                        <div class="flex justify-between items-end">
                            <p class="text-2xl font-bold">0% FEES</p>
                            <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center">
                                <span class="text-cyan-900 font-bold">%</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Card 5 -->
                    <div class="carousel-item min-w-[280px] md:min-w-[calc(50%-1rem)] lg:min-w-[calc(25%-1rem)] bg-gradient-to-r from-emerald-900 to-emerald-700 rounded-lg p-4 flex flex-col justify-between h-40 snap-center shadow-lg">
                        <div>
                            <p class="text-xs bg-white text-emerald-900 inline-block px-2 py-0.5 rounded">BONUS</p>
                            <h3 class="text-xl font-bold mt-2">Referral Reward</h3>
                            <p class="text-sm">Invite friends</p>
                        </div>
                        <div class="flex justify-between items-end">
                            <p class="text-2xl font-bold">$100</p>
                            <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center">
                                <span class="text-emerald-900 font-bold">$</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Card 6 -->
                    <div class="carousel-item min-w-[280px] md:min-w-[calc(50%-1rem)] lg:min-w-[calc(25%-1rem)] bg-gradient-to-r from-amber-900 to-amber-700 rounded-lg p-4 flex flex-col justify-between h-40 snap-center shadow-lg">
                        <div>
                            <p class="text-xs bg-white text-amber-900 inline-block px-2 py-0.5 rounded">LIMITED</p>
                            <h3 class="text-xl font-bold mt-2">Weekend Special</h3>
                            <p class="text-sm">Every weekend</p>
                        </div>
                        <div class="flex justify-between items-end">
                            <p class="text-2xl font-bold">$200</p>
                            <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center">
                                <span class="text-amber-900 font-bold">$</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Card 7 -->
                    <div class="carousel-item min-w-[280px] md:min-w-[calc(50%-1rem)] lg:min-w-[calc(25%-1rem)] bg-gradient-to-r from-rose-900 to-rose-700 rounded-lg p-4 flex flex-col justify-between h-40 snap-center shadow-lg">
                        <div>
                            <p class="text-xs bg-white text-rose-900 inline-block px-2 py-0.5 rounded">VIP</p>
                            <h3 class="text-xl font-bold mt-2">Premium Access</h3>
                            <p class="text-sm">Exclusive benefits</p>
                        </div>
                        <div class="flex justify-between items-end">
                            <p class="text-2xl font-bold">PREMIUM</p>
                            <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center">
                                <span class="text-rose-900 font-bold">$</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Card 8 -->
                    <div class="carousel-item min-w-[280px] md:min-w-[calc(50%-1rem)] lg:min-w-[calc(25%-1rem)] bg-gradient-to-r from-teal-900 to-teal-700 rounded-lg p-4 flex flex-col justify-between h-40 snap-center shadow-lg">
                        <div>
                            <p class="text-xs bg-white text-teal-900 inline-block px-2 py-0.5 rounded">SEASONAL</p>
                            <h3 class="text-xl font-bold mt-2">Holiday Bonus</h3>
                            <p class="text-sm">Limited offer</p>
                        </div>
                        <div class="flex justify-between items-end">
                            <p class="text-2xl font-bold">$500</p>
                            <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center">
                                <span class="text-teal-900 font-bold">$</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Carousel Indicators -->
            <div id="indicators" class="flex justify-center mt-4 space-x-2">
                <!-- Indicators will be added by JavaScript -->
            </div>
        </div>
    </section>
    <section class="px-4 py-12 max-w-7xl mx-auto">
        <h2 class="text-3xl font-bold text-center mb-8">Comprehensive Crypto Market Overview</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Card 1: Bitcoin -->
        <div class="bg-dark rounded-lg p-6 shadow-lg">
            <div class="flex items-center justify-between mb-4">
                <div class="flex items-center">
                    <div class="w-8 h-8 rounded-full bg-amber-500 mr-3 flex items-center justify-center">
                        <span class="font-bold text-white">₿</span>
                    </div>
                    <span class="font-bold text-xl">Bitcoin</span>
                </div>
                <span class="text-amber-500 font-semibold">BTC</span>
            </div>
            <p class="text-gray-400 text-sm mb-2">24h Trading Volume</p>
           
            
            <!-- TradingView Widget for Bitcoin -->
            <div class="tradingview-widget-container">
                <div class="tradingview-widget-container__widget"></div>
                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
                {
                "symbol": "BINANCE:BTCUSDT",
                "width": "100%",
                "height": 220,
                "locale": "en",
                "dateRange": "12M",
                "colorTheme": "dark",
                "isTransparent": true,
                "autosize": true,
                "largeChartUrl": "https://tradededpro.com/app/user/trade"
                }
                </script>
            </div>
        </div>
        
        <!-- Card 2: Ethereum -->
        <div class="bg-dark rounded-lg p-6 shadow-lg">
            <div class="flex items-center justify-between mb-4">
                <div class="flex items-center">
                    <div class="w-8 h-8 rounded-full bg-indigo-500 mr-3 flex items-center justify-center">
                        <span class="font-bold text-white">Ξ</span>
                    </div>
                    <span class="font-bold text-xl">Ethereum</span>
                </div>
                <span class="text-indigo-500 font-semibold">ETH</span>
            </div>
            <p class="text-gray-400 text-sm mb-2">24h Trading Volume</p>
          
            
            <!-- TradingView Widget for Ethereum -->
            <div class="tradingview-widget-container">
                <div class="tradingview-widget-container__widget"></div>
                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
                {
                "symbol": "BINANCE:ETHUSDT",
                "width": "100%",
                "height": 220,
                "locale": "en",
                "dateRange": "12M",
                "colorTheme": "dark",
                "isTransparent": true,
                "autosize": true,
                "largeChartUrl": "https://tradededpro.com/app/user/trade"
                }
                </script>
            </div>
        </div>
        
        <!-- Card 3: Solana -->
        <div class="bg-dark rounded-lg p-6 shadow-lg">
            <div class="flex items-center justify-between mb-4">
                <div class="flex items-center">
                    <div class="w-8 h-8 rounded-full bg-purple-500 mr-3 flex items-center justify-center">
                        <span class="font-bold text-white">◎</span>
                    </div>
                    <span class="font-bold text-xl">Solana</span>
                </div>
                <span class="text-purple-500 font-semibold">SOL</span>
            </div>
            <p class="text-gray-400 text-sm mb-2">24h Trading Volume</p>
             
            
            <!-- TradingView Widget for Solana -->
            <div class="tradingview-widget-container">
                <div class="tradingview-widget-container__widget"></div>
                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
                {
                "symbol": "BINANCE:SOLUSDT",
                "width": "100%",
                "height": 220,
                "locale": "en",
                "dateRange": "12M",
                "colorTheme": "dark",
                "isTransparent": true,
                "autosize": true,
                "largeChartUrl": "https://tradededpro.com/app/user/trade"
                }
                </script>
            </div>
        </div>
        
        <!-- Card 4: Cardano -->
        <div class="bg-dark rounded-lg p-6 shadow-lg">
            <div class="flex items-center justify-between mb-4">
                <div class="flex items-center">
                    <div class="w-8 h-8 rounded-full bg-blue-500 mr-3 flex items-center justify-center">
                        <span class="font-bold text-white">₳</span>
                    </div>
                    <span class="font-bold text-xl">Cardano</span>
                </div>
                <span class="text-blue-500 font-semibold">ADA</span>
            </div>
            <p class="text-gray-400 text-sm mb-2">24h Trading Volume</p>
           
            
            <!-- TradingView Widget for Cardano -->
            <div class="tradingview-widget-container">
                <div class="tradingview-widget-container__widget"></div>
                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
                {
                "symbol": "BINANCE:ADAUSDT",
                "width": "100%",
                "height": 220,
                "locale": "en",
                "dateRange": "12M",
                "colorTheme": "dark",
                "isTransparent": true,
                "autosize": true,
                "largeChartUrl": "https://tradededpro.com/app/user/trade"
                }
                </script>
            </div>
        </div>
        
        <!-- Card 5: Ripple -->
        <div class="bg-dark rounded-lg p-6 shadow-lg">
            <div class="flex items-center justify-between mb-4">
                <div class="flex items-center">
                    <div class="w-8 h-8 rounded-full bg-cyan-500 mr-3 flex items-center justify-center">
                        <span class="font-bold text-white">✕</span>
                    </div>
                    <span class="font-bold text-xl">Ripple</span>
                </div>
                <span class="text-cyan-500 font-semibold">XRP</span>
            </div>
            <p class="text-gray-400 text-sm mb-2">24h Trading Volume</p>
       
            
            <!-- TradingView Widget for Ripple -->
            <div class="tradingview-widget-container">
                <div class="tradingview-widget-container__widget"></div>
                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
                {
                "symbol": "BINANCE:XRPUSDT",
                "width": "100%",
                "height": 220,
                "locale": "en",
                "dateRange": "12M",
                "colorTheme": "dark",
                "isTransparent": true,
                "autosize": true,
                "largeChartUrl": "https://tradededpro.com/app/user/trade"
                }
                </script>
            </div>
        </div>
        
        <!-- Card 6: Polkadot -->
        <div class="bg-dark rounded-lg p-6 shadow-lg">
            <div class="flex items-center justify-between mb-4">
                <div class="flex items-center">
                    <div class="w-8 h-8 rounded-full bg-pink-500 mr-3 flex items-center justify-center">
                        <span class="font-bold text-white">●</span>
                    </div>
                    <span class="font-bold text-xl">Polkadot</span>
                </div>
                <span class="text-pink-500 font-semibold">DOT</span>
            </div>
            <p class="text-gray-400 text-sm mb-2">24h Trading Volume</p>
        
            
            <!-- TradingView Widget for Polkadot -->
            <div class="tradingview-widget-container">
                <div class="tradingview-widget-container__widget"></div>
                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
                {
                "symbol": "BINANCE:DOTUSDT",
                "width": "100%",
                "height": 220,
                "locale": "en",
                "dateRange": "12M",
                "colorTheme": "dark",
                "isTransparent": true,
                "autosize": true,
                "largeChartUrl": "https://tradededpro.com/app/user/trade"
                }
                </script>
            </div>
        </div>
    </div>

  
    <div class="text-center text-sm text-gray-400 mt-8">
        <p>Data source: Official data from each platform. Sustainable liquidity refers to the average daily trading volume.</p>
        <p class="mt-2">Last updated: <script>
            const date = new Date();
            date.setDate(date.getDate() - 2);
            document.write(date.toLocaleDateString('en-US', { month: 'long', day: 'numeric', year: 'numeric' }));
        </script></p>
    </div>
    <!-- Hold MX Section -->
</section>
    <section class="px-4 py-12 bg-dark">
        <h2 class="text-2xl font-bold text-center mb-8">Hold MX to Enjoy Various Privileges</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
            <div class="bg-darker rounded-lg p-4">
                <div class="flex items-center mb-4">
                    <div class="w-8 h-8 rounded-full bg-blue-900 mr-2 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <span class="font-semibold">Participate in MX Free Staking Events</span>
                </div>
                <div class="h-40 relative">
                    <div class="absolute inset-0">
                        <svg viewBox="0 0 200 100" class="w-full h-full">
                            <path d="M0,50 Q50,0 100,50 T200,50" fill="none" stroke="#2e71ff" stroke-width="2"></path>
                        </svg>
                    </div>
                </div>
                <div class="text-center">
                    <p class="text-gray-400 text-sm">Total Staking APY</p>
                    <p class="text-3xl font-bold">42.47%</p>
                </div>
            </div>
            <div class="grid grid-cols-1 gap-4">
                <div class="bg-darker rounded-lg p-4">
                    <div class="flex items-center mb-4">
                        <div class="w-8 h-8 rounded-full bg-blue-900 mr-2 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <span class="font-semibold">Enjoy Up to 50% Off Trading Fees</span>
                    </div>
                </div>
                <div class="bg-darker rounded-lg p-4">
                    <div class="flex items-center mb-4">
                        <div class="w-8 h-8 rounded-full bg-blue-900 mr-2 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <span class="font-semibold">Up to 70% Referral Commission</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Section -->
    <section class="px-4 py-12 text-center">
        <h2 class="text-2xl font-bold mb-8">Why Choose Tradeded Pro?</h2>
        <div class="relative mb-8">
           
            <div class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-40 h-4 bg-blue-500 opacity-20 rounded-full blur-xl"></div>
        </div>
        <h3 class="text-3xl font-bold text-blue-400 mb-2">The Easiest Way to Crypto?</h3>
        <p class="text-xl mb-8">You just found it.</p>
        <div class="flex flex-col items-center">
            <div class="w-full max-w-3xl relative">
                <video id="videoPlayer" class="w-full h-auto rounded-lg shadow-lg" autoplay muted controls>
                    <source src="video.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
           
        </div>
    </section>

    <!-- Security Measures -->
    <section class="px-4 py-12">
        <h2 class="text-2xl font-bold text-center mb-2">Three Major Measures to Safeguard Asset Security</h2>
        <p class="text-gray-400 text-center text-sm mb-8">Multiple protection for your assets with 100% secure proof and full compensation for losses caused by the platform.</p>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="bg-dark rounded-lg p-6 text-center">
                <div class="w-16 h-16 rounded-full bg-blue-900 mx-auto flex items-center justify-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                </div>
                <h3 class="text-lg font-bold mb-2">Reserve Rate Exceeds 100%</h3>
                <p class="text-gray-400 text-sm">We maintain a reserve rate exceeding 100% to ensure your assets are always backed and secure.</p>
            </div>
            <div class="bg-dark rounded-lg p-6 text-center">
                <div class="w-16 h-16 rounded-full bg-blue-900 mx-auto flex items-center justify-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                    </svg>
                </div>
                <h3 class="text-lg font-bold mb-2">Secure Asset Storage</h3>
                <p class="text-gray-400 text-sm">Multi-signature cold wallets and advanced security protocols protect the safety of your stored assets.</p>
            </div>
            <div class="bg-dark rounded-lg p-6 text-center">
                <div class="w-16 h-16 rounded-full bg-blue-900 mx-auto flex items-center justify-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                </div>
                <h3 class="text-lg font-bold mb-2">Futures Insurance Fund</h3>
                <p class="text-gray-400 text-sm">Our insurance fund provides an additional layer of protection so you can trade with confidence.</p>
            </div>
        </div>
    </section>

    <!-- Mobile App Section -->
    <section class="px-4 py-12 bg-dark">
        <h2 class="text-2xl font-bold text-center mb-8">Trade Anywhere with the Tradeded Pro App</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
            <div class="text-center md:text-left">
                <img src="2.png" alt="Tradeded Pro Mobile App" class="mx-auto md:mx-0 h-96 object-contain">
            </div>
            <div>
                <div class="bg-darker rounded-lg p-6 mb-6">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-xl font-bold">Scan to Download</h3>
                        <div class="flex space-x-2">
                            <span class="text-xs bg-blue-900 px-2 py-1 rounded">iOS</span>
                            <span class="text-xs bg-green-900 px-2 py-1 rounded">Android</span>
                        </div>
                    </div>
                    <div class="flex justify-center mb-4">
                        <div class="w-32 h-32 bg-white p-2 rounded-lg">
                            <!-- QR Code placeholder -->
                            <div id="qrcode" class="w-full h-full bg-white p-2 rounded-lg flex items-center justify-center">
                                <!-- QR Code will be generated here -->
                            </div>
                            <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
                            <script>
                                // Generate QR code when page loads
                                document.addEventListener('DOMContentLoaded', function() {
                                    new QRCode(document.getElementById("qrcode"), {
                                        text: "https://tradededpro.com/download",
                                        width: 128,
                                        height: 128,
                                        colorDark: "#000000",
                                        colorLight: "#ffffff",
                                        correctLevel: QRCode.CorrectLevel.H
                                    });
                                });
                            </script>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-2">
                        <a href="#" class="flex items-center justify-center bg-black rounded-lg p-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z" />
                            </svg>
                            <span>App Store</span>
                        </a>
                        <a href="#" class="flex items-center justify-center bg-black rounded-lg p-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10l-2 1m0 0l-2-1m2 1v2.5M20 7l-2 1m2-1l-2-1m2 1v2.5M14 4l-2-1-2 1M4 7l2-1M4 7l2 1M4 7v2.5M12 21l-2-1m2 1l2-1m-2 1v-2.5M6 18l-2-1v-2.5M18 18l2-1v-2.5" />
                            </svg>
                            <span>Google Play</span>
                        </a>
                    </div>
                </div>
                <div class="text-center md:text-left">
                    <p class="text-gray-400 mb-4">Download our mobile app to trade on the go with full functionality and real-time market data.</p>
                    <p class="text-gray-400 text-sm">Available for iOS and Android devices.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- TradingView Widget Initialization -->
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {
            new TradingView.widget({
                "autosize": true,
                "symbol": "BINANCE:BTCUSDT",
                "interval": "D",
                "timezone": "Etc/UTC",
                "theme": "dark",
                "style": "1",
                "locale": "en",
                "toolbar_bg": "#0f1217",
                "enable_publishing": false,
                "hide_top_toolbar": true,
                "hide_legend": false,
                "save_image": false,
                "container_id": "tradingview_chart"
            });
        });
   
    
        document.addEventListener('DOMContentLoaded', function() {
            const carousel = document.getElementById('carousel');
            const prevBtn = document.getElementById('prevBtn');
            const nextBtn = document.getElementById('nextBtn');
            const indicators = document.getElementById('indicators');
            const items = document.querySelectorAll('.carousel-item');
            
            let currentIndex = 0;
            let itemsPerView = getItemsPerView();
            let totalSlides = Math.ceil(items.length / itemsPerView);
            
            // Create indicators
            function createIndicators() {
                indicators.innerHTML = '';
                totalSlides = Math.ceil(items.length / itemsPerView);
                
                for (let i = 0; i < totalSlides; i++) {
                    const dot = document.createElement('button');
                    dot.classList.add('w-2', 'h-2', 'rounded-full', 'bg-gray-600', 'indicator');
                    dot.setAttribute('aria-label', `Go to slide ${i + 1}`);
                    
                    if (i === currentIndex) {
                        dot.classList.add('active');
                        dot.classList.remove('bg-gray-600');
                        dot.classList.add('bg-white');
                    }
                    
                    dot.addEventListener('click', () => {
                        goToSlide(i);
                    });
                    
                    indicators.appendChild(dot);
                }
            }
            
            // Get items per view based on screen size
            function getItemsPerView() {
                if (window.innerWidth >= 1024) {
                    return 4; // Desktop
                } else if (window.innerWidth >= 768) {
                    return 2; // Tablet
                } else {
                    return 1; // Mobile
                }
            }
            
            // Go to specific slide
            function goToSlide(index) {
                currentIndex = index;
                const scrollPosition = index * (carousel.clientWidth / itemsPerView);
                carousel.scrollTo({
                    left: scrollPosition,
                    behavior: 'smooth'
                });
                updateIndicators();
            }
            
            // Update indicators
            function updateIndicators() {
                const dots = document.querySelectorAll('.indicator');
                dots.forEach((dot, index) => {
                    if (index === currentIndex) {
                        dot.classList.add('active');
                        dot.classList.remove('bg-gray-600');
                        dot.classList.add('bg-white');
                    } else {
                        dot.classList.remove('active');
                        dot.classList.remove('bg-white');
                        dot.classList.add('bg-gray-600');
                    }
                });
            }
            
            // Next slide
            function nextSlide() {
                currentIndex = (currentIndex + 1) % totalSlides;
                goToSlide(currentIndex);
            }
            
            // Previous slide
            function prevSlide() {
                currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
                goToSlide(currentIndex);
            }
            
            // Event listeners
            prevBtn.addEventListener('click', prevSlide);
            nextBtn.addEventListener('click', nextSlide);
            
            // Handle scroll events to update indicators
            carousel.addEventListener('scroll', function() {
                const scrollPosition = carousel.scrollLeft;
                const slideWidth = carousel.clientWidth / itemsPerView;
                currentIndex = Math.round(scrollPosition / slideWidth);
                updateIndicators();
            });
            
            // Handle resize events
            window.addEventListener('resize', function() {
                const newItemsPerView = getItemsPerView();
                if (newItemsPerView !== itemsPerView) {
                    itemsPerView = newItemsPerView;
                    createIndicators();
                    goToSlide(0);
                }
            });
            
            // Initialize
            createIndicators();
        });
    </script>
<?php include 'footer.php'; ?>