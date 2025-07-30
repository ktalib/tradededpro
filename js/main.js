// --- Crypto Data Section ---
// Function to fetch cryptocurrency data from CoinGecko API
async function fetchCryptoData() {
    try {
        const response = await fetch('https://api.coingecko.com/api/v3/coins/markets?vs_currency=usd&order=market_cap_desc&per_page=100&page=1&sparkline=false&price_change_percentage=24h');
        if (!response.ok) {
            throw new Error('Network response was not ok');
        }
        const data = await response.json();
        return data;
    } catch (error) {
        console.error('Error fetching crypto data:', error);
        return null;
    }
}

// Function to format price with appropriate decimal places
function formatPrice(price) {
    if (price < 0.01) {
        return price.toFixed(6);
    } else if (price < 1) {
        return price.toFixed(4);
    } else if (price < 10) {
        return price.toFixed(2);
    } else {
        return price.toFixed(2);
    }
}

// Function to create a coin row
function createCoinRow(coin) {
    const priceChangeClass = coin.price_change_percentage_24h >= 0 ? 'text-success' : 'text-danger';
    const priceChangeSymbol = coin.price_change_percentage_24h >= 0 ? '+' : '';
    return `
        <tr class="border-b border-gray-800">
            <td class="py-3 flex items-center">
                <div class="w-6 h-6 rounded-full mr-2 flex items-center justify-center overflow-hidden">
                    <img src="${coin.image}" alt="${coin.name}" class="w-full h-full object-cover">
                </div>
                <span>${coin.symbol.toUpperCase()}</span>
            </td>
            <td class="text-right">${formatPrice(coin.current_price)}</td>
            <td class="text-right ${priceChangeClass}">${priceChangeSymbol}${coin.price_change_percentage_24h.toFixed(2)}%</td>
            <td class="text-right">
                <button class="bg-secondary text-primary text-xs px-2 py-1 rounded">Trade</button>
            </td>
        </tr>
    `;
}

// Function to update the tables with live data
async function updateCryptoTables() {
    const cryptoData = await fetchCryptoData();
    if (!cryptoData) {
        const errorMessage = `
            <tr>
                <td colspan="4" class="py-4 text-center text-gray-400">Failed to load data. Please try again later.</td>
            </tr>
        `;
        document.getElementById('hotFuturesTable').innerHTML = errorMessage;
        document.getElementById('hotTokensTable').innerHTML = errorMessage;
        document.getElementById('spotGainersTable').innerHTML = errorMessage;
        document.getElementById('futuresGainersTable').innerHTML = errorMessage;
        return;
    }
    // Sort for top market cap coins (hot futures)
    const topMarketCapCoins = [...cryptoData].slice(0, 4);
    // Sort for hot tokens (tokens with high volume)
    const hotTokens = [...cryptoData]
        .sort((a, b) => b.total_volume - a.total_volume)
        .slice(0, 4);
    // Sort for top spot gainers
    const topSpotGainers = [...cryptoData]
        .sort((a, b) => b.price_change_percentage_24h - a.price_change_percentage_24h)
        .filter(coin => coin.price_change_percentage_24h > 0)
        .slice(0, 4);
    // Sort for futures gainers (use a different metric for simulation - market cap + price change)
    const futuresGainers = [...cryptoData]
        .sort((a, b) => (b.market_cap * b.price_change_percentage_24h) - (a.market_cap * a.price_change_percentage_24h))
        .filter(coin => coin.price_change_percentage_24h > 0)
        .slice(0, 4);
    // Update Hot Futures table
    let hotFuturesHtml = '';
    topMarketCapCoins.forEach(coin => {
        hotFuturesHtml += createCoinRow(coin);
    });
    document.getElementById('hotFuturesTable').innerHTML = hotFuturesHtml;
    // Update Hot Tokens table
    let hotTokensHtml = '';
    hotTokens.forEach(coin => {
        hotTokensHtml += createCoinRow(coin);
    });
    document.getElementById('hotTokensTable').innerHTML = hotTokensHtml;
    // Update Spot Gainers table
    let spotGainersHtml = '';
    topSpotGainers.forEach(coin => {
        spotGainersHtml += createCoinRow(coin);
    });
    document.getElementById('spotGainersTable').innerHTML = spotGainersHtml;
    // Update Futures Gainers table
    let futuresGainersHtml = '';
    futuresGainers.forEach(coin => {
        futuresGainersHtml += createCoinRow(coin);
    });
    document.getElementById('futuresGainersTable').innerHTML = futuresGainersHtml;
}

// Tab switching functionality for Hot Futures/Hot Tokens
if (document.getElementById('hotFuturesBtn')) {
    document.getElementById('hotFuturesBtn').addEventListener('click', function() {
        this.classList.add('text-white', 'font-semibold', 'border-b-2', 'border-primary');
        this.classList.remove('text-gray-400');
        document.getElementById('hotTokensBtn').classList.remove('text-white', 'font-semibold', 'border-b-2', 'border-primary');
        document.getElementById('hotTokensBtn').classList.add('text-gray-400');
        document.getElementById('hotFuturesContent').classList.remove('hidden');
        document.getElementById('hotTokensContent').classList.add('hidden');
    });
}
if (document.getElementById('hotTokensBtn')) {
    document.getElementById('hotTokensBtn').addEventListener('click', function() {
        this.classList.add('text-white', 'font-semibold', 'border-b-2', 'border-primary');
        this.classList.remove('text-gray-400');
        document.getElementById('hotFuturesBtn').classList.remove('text-white', 'font-semibold', 'border-b-2', 'border-primary');
        document.getElementById('hotFuturesBtn').classList.add('text-gray-400');
        document.getElementById('hotFuturesContent').classList.add('hidden');
        document.getElementById('hotTokensContent').classList.remove('hidden');
    });
}
// Tab switching functionality for Spot Gainers/Futures Gainers
if (document.getElementById('spotGainersBtn')) {
    document.getElementById('spotGainersBtn').addEventListener('click', function() {
        this.classList.add('text-white', 'font-semibold', 'border-b-2', 'border-primary');
        this.classList.remove('text-gray-400');
        document.getElementById('futuresGainersBtn').classList.remove('text-white', 'font-semibold', 'border-b-2', 'border-primary');
        document.getElementById('futuresGainersBtn').classList.add('text-gray-400');
        document.getElementById('spotGainersContent').classList.remove('hidden');
        document.getElementById('futuresGainersContent').classList.add('hidden');
    });
}
if (document.getElementById('futuresGainersBtn')) {
    document.getElementById('futuresGainersBtn').addEventListener('click', function() {
        this.classList.add('text-white', 'font-semibold', 'border-b-2', 'border-primary');
        this.classList.remove('text-gray-400');
        document.getElementById('spotGainersBtn').classList.remove('text-white', 'font-semibold', 'border-b-2', 'border-primary');
        document.getElementById('spotGainersBtn').classList.add('text-gray-400');
        document.getElementById('spotGainersContent').classList.add('hidden');
        document.getElementById('futuresGainersContent').classList.remove('hidden');
    });
}
// Initialize data and set interval
if (document.getElementById('hotFuturesTable')) {
    updateCryptoTables();
    setInterval(updateCryptoTables, 60000);
}

// --- Carousel Section ---
document.addEventListener('DOMContentLoaded', function() {
    const carousel = document.getElementById('carousel');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    const indicators = document.getElementById('indicators');
    const items = document.querySelectorAll('.carousel-item');
    if (!carousel || !prevBtn || !nextBtn || !indicators || items.length === 0) return;
    let currentIndex = 0;
    let itemsPerView = getItemsPerView();
    let totalSlides = Math.ceil(items.length / itemsPerView);
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
    function getItemsPerView() {
        if (window.innerWidth >= 1024) {
            return 4; // Desktop
        } else if (window.innerWidth >= 768) {
            return 2; // Tablet
        } else {
            return 1; // Mobile
        }
    }
    function goToSlide(index) {
        currentIndex = index;
        const scrollPosition = index * (carousel.clientWidth / itemsPerView);
        carousel.scrollTo({
            left: scrollPosition,
            behavior: 'smooth'
        });
        updateIndicators();
    }
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
    function nextSlide() {
        currentIndex = (currentIndex + 1) % totalSlides;
        goToSlide(currentIndex);
    }
    function prevSlide() {
        currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
        goToSlide(currentIndex);
    }
    prevBtn.addEventListener('click', prevSlide);
    nextBtn.addEventListener('click', nextSlide);
    carousel.addEventListener('scroll', function() {
        const scrollPosition = carousel.scrollLeft;
        const slideWidth = carousel.clientWidth / itemsPerView;
        currentIndex = Math.round(scrollPosition / slideWidth);
        updateIndicators();
    });
    window.addEventListener('resize', function() {
        const newItemsPerView = getItemsPerView();
        if (newItemsPerView !== itemsPerView) {
            itemsPerView = newItemsPerView;
            createIndicators();
            goToSlide(0);
        }
    });
    createIndicators();
});
// --- TradingView Widget Initialization ---
document.addEventListener('DOMContentLoaded', function() {
    if (typeof TradingView !== 'undefined' && document.getElementById('tradingview_chart')) {
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
    }
}); 