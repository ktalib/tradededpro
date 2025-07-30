<?php include 'include/header.php'; ?>

<!-- Hero Section -->
<section class="relative overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-primary via-blue-900 to-purple-900"></div>
    <div class="absolute inset-0 bg-black opacity-40"></div>
    <div class="relative max-w-7xl mx-auto px-4 py-24 lg:py-32">
        <div class="text-center">
            <div class="inline-flex items-center px-4 py-2 rounded-full bg-white/10 backdrop-blur-sm border border-white/20 mb-8">
                <span class="text-sm font-medium text-white">💬 Get in Touch</span>
            </div>
            <h1 class="text-4xl md:text-6xl lg:text-7xl font-extrabold text-white mb-6 leading-tight">
                Contact <span class="bg-gradient-to-r from-blue-400 to-purple-400 bg-clip-text text-transparent">Our Team</span>
            </h1>
            <p class="text-xl md:text-2xl text-blue-100 mb-8 max-w-4xl mx-auto leading-relaxed">
                We're here to help! Reach out to our expert team for support, questions, partnership opportunities, or any assistance you need.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#contact-form" class="px-8 py-4 bg-gradient-to-r from-success to-primary text-white font-bold rounded-xl shadow-2xl hover:shadow-3xl transform hover:scale-105 transition-all duration-300">
                    Send Message
                </a>
                <a href="tel:+1-630-555-0123" class="px-8 py-4 bg-white/10 backdrop-blur-sm text-white font-bold rounded-xl border border-white/20 hover:bg-white/20 transition-all duration-300">
                    Call Now
                </a>
            </div>
        </div>
    </div>
    
    <!-- Floating Elements -->
    <div class="absolute top-20 left-10 w-20 h-20 bg-blue-500/20 rounded-full blur-xl animate-pulse"></div>
    <div class="absolute bottom-20 right-10 w-32 h-32 bg-purple-500/20 rounded-full blur-xl animate-pulse delay-1000"></div>
    <div class="absolute top-1/2 left-1/4 w-16 h-16 bg-green-500/20 rounded-full blur-xl animate-pulse delay-500"></div>
</section>

<!-- Contact Methods -->
<section class="py-20 px-4">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16">
            <div class="inline-flex items-center px-4 py-2 rounded-full bg-primary/10 border border-primary/20 mb-6">
                <span class="text-sm font-medium text-primary">📞 Multiple Ways to Reach Us</span>
            </div>
            <h2 class="text-4xl font-bold text-white mb-6">Choose Your Preferred Contact Method</h2>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                Our dedicated support team is available 24/7 to assist you with any questions or concerns.
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-16">
            <!-- Live Chat -->
            <div class="group bg-gradient-to-br from-dark to-darker rounded-2xl p-8 border border-primary/20 hover:border-primary/40 transition-all duration-300 hover:transform hover:scale-105 text-center">
                <div class="w-16 h-16 bg-gradient-to-br from-primary to-blue-600 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-4">Live Chat</h3>
                <p class="text-gray-400 mb-6">Instant support available 24/7</p>
                <button class="w-full px-4 py-2 bg-primary text-white font-semibold rounded-lg hover:bg-blue-700 transition-colors">
                    Start Chat
                </button>
            </div>
            
            <!-- Email Support -->
            <div class="group bg-gradient-to-br from-dark to-darker rounded-2xl p-8 border border-success/20 hover:border-success/40 transition-all duration-300 hover:transform hover:scale-105 text-center">
                <div class="w-16 h-16 bg-gradient-to-br from-success to-green-600 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-4">Email Support</h3>
                <p class="text-gray-400 mb-6">Response within 2 hours</p>
                <a href="mailto:support@tradededpro.com" class="block w-full px-4 py-2 bg-success text-white font-semibold rounded-lg hover:bg-green-700 transition-colors">
                    Send Email
                </a>
            </div>
            
            <!-- Phone Support -->
            <div class="group bg-gradient-to-br from-dark to-darker rounded-2xl p-8 border border-purple-500/20 hover:border-purple-500/40 transition-all duration-300 hover:transform hover:scale-105 text-center">
                <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-purple-600 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-4">Phone Support</h3>
                <p class="text-gray-400 mb-6">Direct line to our experts</p>
                <a href="tel:+1-630-555-0123" class="block w-full px-4 py-2 bg-purple-500 text-white font-semibold rounded-lg hover:bg-purple-700 transition-colors">
                    Call Now
                </a>
            </div>
            
            <!-- Video Call -->
            <div class="group bg-gradient-to-br from-dark to-darker rounded-2xl p-8 border border-orange-500/20 hover:border-orange-500/40 transition-all duration-300 hover:transform hover:scale-105 text-center">
                <div class="w-16 h-16 bg-gradient-to-br from-orange-500 to-red-500 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-4">Video Call</h3>
                <p class="text-gray-400 mb-6">Schedule a consultation</p>
                <button class="w-full px-4 py-2 bg-orange-500 text-white font-semibold rounded-lg hover:bg-orange-700 transition-colors">
                    Book Call
                </button>
            </div>
        </div>
    </div>
</section>

<!-- Contact Form & Information -->
<section id="contact-form" class="py-20 px-4 bg-dark/30">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
            <!-- Contact Form -->
            <div>
                <div class="inline-flex items-center px-4 py-2 rounded-full bg-primary/10 border border-primary/20 mb-6">
                    <span class="text-sm font-medium text-primary">📝 Send Us a Message</span>
                </div>
                <h2 class="text-4xl font-bold text-white mb-6">Get in Touch</h2>
                <p class="text-lg text-gray-300 mb-8">
                    Fill out the form below and our team will get back to you within 24 hours. For urgent matters, please use our live chat or phone support.
                </p>
                
                <div class="bg-gradient-to-br from-dark/80 to-darker/80 rounded-2xl p-8 border border-white/10 backdrop-blur-sm">
                    <!-- Success message placeholder -->
                    <div id="successMessage" class="hidden mb-6 p-4 rounded-xl bg-success/20 border border-success/40 text-success text-center font-semibold">
                        <svg class="w-6 h-6 inline-block mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        Message sent successfully! We'll get back to you soon.
                    </div>
                    
                    <form action="#" method="post" class="space-y-6" id="contactForm">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="name" class="block text-gray-300 mb-3 font-semibold flex items-center">
                                    <svg class="w-4 h-4 mr-2 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                    </svg>
                                    Full Name
                                </label>
                                <input type="text" id="name" name="name" class="w-full px-4 py-3 rounded-xl bg-darker/80 text-white border border-white/10 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all duration-300" placeholder="Enter your full name" required>
                            </div>
                            <div>
                                <label for="email" class="block text-gray-300 mb-3 font-semibold flex items-center">
                                    <svg class="w-4 h-4 mr-2 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                    </svg>
                                    Email Address
                                </label>
                                <input type="email" id="email" name="email" class="w-full px-4 py-3 rounded-xl bg-darker/80 text-white border border-white/10 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all duration-300" placeholder="Enter your email address" required>
                            </div>
                        </div>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="phone" class="block text-gray-300 mb-3 font-semibold flex items-center">
                                    <svg class="w-4 h-4 mr-2 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                    </svg>
                                    Phone Number
                                </label>
                                <input type="tel" id="phone" name="phone" class="w-full px-4 py-3 rounded-xl bg-darker/80 text-white border border-white/10 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all duration-300" placeholder="Enter your phone number">
                            </div>
                            <div>
                                <label for="subject" class="block text-gray-300 mb-3 font-semibold flex items-center">
                                    <svg class="w-4 h-4 mr-2 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                                    </svg>
                                    Subject
                                </label>
                                <select id="subject" name="subject" class="w-full px-4 py-3 rounded-xl bg-darker/80 text-white border border-white/10 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all duration-300" required>
                                    <option value="">Select a subject</option>
                                    <option value="general">General Inquiry</option>
                                    <option value="support">Technical Support</option>
                                    <option value="partnership">Partnership</option>
                                    <option value="media">Media Inquiry</option>
                                    <option value="feedback">Feedback</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                        </div>
                        
                        <div>
                            <label for="message" class="block text-gray-300 mb-3 font-semibold flex items-center">
                                <svg class="w-4 h-4 mr-2 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                                </svg>
                                Message
                            </label>
                            <textarea id="message" name="message" rows="6" class="w-full px-4 py-3 rounded-xl bg-darker/80 text-white border border-white/10 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all duration-300 resize-none" placeholder="Tell us how we can help you..." required></textarea>
                        </div>
                        
                        <button type="submit" class="w-full bg-gradient-to-r from-primary to-blue-600 text-white font-bold py-4 rounded-xl transition-all duration-300 shadow-lg hover:shadow-xl transform hover:scale-105 text-lg flex items-center justify-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                            </svg>
                            Send Message
                        </button>
                    </form>
                </div>
            </div>
            
            <!-- Contact Information -->
            <div>
                <div class="inline-flex items-center px-4 py-2 rounded-full bg-success/10 border border-success/20 mb-6">
                    <span class="text-sm font-medium text-success">📍 Contact Information</span>
                </div>
                <h2 class="text-4xl font-bold text-white mb-6">Reach Out to Us</h2>
                <p class="text-lg text-gray-300 mb-8">
                    Our headquarters is located in Naperville, Illinois. We're always ready to assist you with any questions or concerns.
                </p>
                
                <div class="space-y-8">
                    <!-- Address -->
                    <div class="bg-gradient-to-br from-dark/80 to-darker/80 rounded-2xl p-6 border border-white/10 backdrop-blur-sm">
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-primary/20 rounded-xl flex items-center justify-center flex-shrink-0 mt-1">
                                <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a2 2 0 01-2.828 0l-4.243-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-white mb-2">Corporate Headquarters</h3>
                                <p class="text-gray-300 leading-relaxed">
                                    1804 N Naper BLVD Suite 380<br>
                                    Naperville, IL 60563<br>
                                    United States
                                </p>
                                <a href="https://maps.google.com/?q=1804+N+Naper+BLVD+Suite+380,+Naperville,+IL+60563" target="_blank" class="inline-flex items-center mt-3 text-primary hover:text-blue-400 transition-colors">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                    </svg>
                                    View on Google Maps
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Contact Details -->
                    <div class="bg-gradient-to-br from-dark/80 to-darker/80 rounded-2xl p-6 border border-white/10 backdrop-blur-sm">
                        <div class="space-y-4">
                            <div class="flex items-center space-x-4">
                                <div class="w-10 h-10 bg-success/20 rounded-lg flex items-center justify-center">
                                    <svg class="w-5 h-5 text-success" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-gray-400 text-sm">Email</p>
                                    <a href="mailto:support@tradededpro.com" class="text-white hover:text-primary transition-colors font-semibold">support@tradededpro.com</a>
                                </div>
                            </div>
                            
                            <div class="flex items-center space-x-4">
                                <div class="w-10 h-10 bg-purple-500/20 rounded-lg flex items-center justify-center">
                                    <svg class="w-5 h-5 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-gray-400 text-sm">Phone</p>
                                    <a href="tel:+1-630-555-0123" class="text-white hover:text-primary transition-colors font-semibold">+1 (630) 555-0123</a>
                                </div>
                            </div>
                            
                            <div class="flex items-center space-x-4">
                                <div class="w-10 h-10 bg-orange-500/20 rounded-lg flex items-center justify-center">
                                    <svg class="w-5 h-5 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-gray-400 text-sm">Media Inquiries</p>
                                    <a href="mailto:media@tradededpro.com" class="text-white hover:text-primary transition-colors font-semibold">media@tradededpro.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Business Hours -->
                    <div class="bg-gradient-to-br from-dark/80 to-darker/80 rounded-2xl p-6 border border-white/10 backdrop-blur-sm">
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-blue-500/20 rounded-xl flex items-center justify-center flex-shrink-0 mt-1">
                                <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-white mb-3">Business Hours</h3>
                                <div class="space-y-2 text-gray-300">
                                    <p><span class="font-semibold">Monday - Friday:</span> 9:00 AM - 6:00 PM CST</p>
                                    <p><span class="font-semibold">Saturday - Sunday:</span> Closed</p>
                                    <p class="text-primary font-semibold mt-3">🌟 24/7 Online Support Available</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-20 px-4">
    <div class="max-w-4xl mx-auto">
        <div class="text-center mb-16">
            <div class="inline-flex items-center px-4 py-2 rounded-full bg-primary/10 border border-primary/20 mb-6">
                <span class="text-sm font-medium text-primary">❓ Frequently Asked Questions</span>
            </div>
            <h2 class="text-4xl font-bold text-white mb-6">Quick Answers</h2>
            <p class="text-xl text-gray-300">
                Find answers to the most common questions about our platform and services.
            </p>
        </div>
        
        <div class="space-y-4">
            <!-- FAQ Item 1 -->
            <div class="bg-gradient-to-br from-dark/80 to-darker/80 rounded-2xl border border-white/10 backdrop-blur-sm">
                <button class="w-full px-6 py-4 text-left flex items-center justify-between focus:outline-none" onclick="toggleFAQ(1)">
                    <span class="text-lg font-semibold text-white">How do I get started with Tradeded Pro?</span>
                    <svg id="faq-icon-1" class="w-5 h-5 text-primary transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div id="faq-content-1" class="hidden px-6 pb-4">
                    <p class="text-gray-300 leading-relaxed">
                        Getting started is easy! Simply click the "Sign Up" button, complete our quick verification process, and you'll be ready to trade within minutes. We offer a $50,000 welcome bonus for new users.
                    </p>
                </div>
            </div>
            
            <!-- FAQ Item 2 -->
            <div class="bg-gradient-to-br from-dark/80 to-darker/80 rounded-2xl border border-white/10 backdrop-blur-sm">
                <button class="w-full px-6 py-4 text-left flex items-center justify-between focus:outline-none" onclick="toggleFAQ(2)">
                    <span class="text-lg font-semibold text-white">Is my money safe with Tradeded Pro?</span>
                    <svg id="faq-icon-2" class="w-5 h-5 text-primary transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div id="faq-content-2" class="hidden px-6 pb-4">
                    <p class="text-gray-300 leading-relaxed">
                        Absolutely! We use bank-grade security measures including multi-signature cold wallets, insurance fund protection, and regular security audits. Your funds are protected with industry-leading security protocols.
                    </p>
                </div>
            </div>
            
            <!-- FAQ Item 3 -->
            <div class="bg-gradient-to-br from-dark/80 to-darker/80 rounded-2xl border border-white/10 backdrop-blur-sm">
                <button class="w-full px-6 py-4 text-left flex items-center justify-between focus:outline-none" onclick="toggleFAQ(3)">
                    <span class="text-lg font-semibold text-white">What trading fees do you charge?</span>
                    <svg id="faq-icon-3" class="w-5 h-5 text-primary transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div id="faq-content-3" class="hidden px-6 pb-4">
                    <p class="text-gray-300 leading-relaxed">
                        We offer competitive trading fees starting from 0.1%. MX token holders enjoy up to 50% fee discounts. We also have special promotions with zero fees for new users during their first month.
                    </p>
                </div>
            </div>
            
            <!-- FAQ Item 4 -->
            <div class="bg-gradient-to-br from-dark/80 to-darker/80 rounded-2xl border border-white/10 backdrop-blur-sm">
                <button class="w-full px-6 py-4 text-left flex items-center justify-between focus:outline-none" onclick="toggleFAQ(4)">
                    <span class="text-lg font-semibold text-white">Do you offer customer support?</span>
                    <svg id="faq-icon-4" class="w-5 h-5 text-primary transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div id="faq-content-4" class="hidden px-6 pb-4">
                    <p class="text-gray-300 leading-relaxed">
                        Yes! We provide 24/7 customer support through live chat, email, and phone. Our expert team is always ready to assist you with any questions or technical issues you may encounter.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
// FAQ Toggle Function
function toggleFAQ(index) {
    const content = document.getElementById(`faq-content-${index}`);
    const icon = document.getElementById(`faq-icon-${index}`);
    
    if (content.classList.contains('hidden')) {
        content.classList.remove('hidden');
        icon.style.transform = 'rotate(180deg)';
    } else {
        content.classList.add('hidden');
        icon.style.transform = 'rotate(0deg)';
    }
}

// Contact Form Submission
document.getElementById('contactForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Show success message
    const successMessage = document.getElementById('successMessage');
    successMessage.classList.remove('hidden');
    
    // Reset form
    this.reset();
    
    // Hide success message after 5 seconds
    setTimeout(() => {
        successMessage.classList.add('hidden');
    }, 5000);
    
    // Scroll to success message
    successMessage.scrollIntoView({ behavior: 'smooth', block: 'center' });
});
</script>

<?php include 'include/footer.php'; ?> 