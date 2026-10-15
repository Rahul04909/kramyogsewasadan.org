<!-- Hero Slide Container (Flipkart Style: Wide, Sleek, Responsive) -->
<div class="relative w-full h-[400px] md:h-[500px] overflow-hidden bg-gradient-to-r from-[#fdfbfb] to-[#ebedee] rounded-xl shadow-lg flex items-center">
  
  <!-- Background Accent Elements (Leaves/Nature vibe from brochure) -->
  <div class="absolute top-0 right-0 w-1/2 h-full bg-gradient-to-l from-green-50 to-transparent opacity-50 z-0"></div>

  <!-- Content Wrapper -->
  <div class="relative z-10 flex flex-col-reverse md:flex-row w-full max-w-7xl mx-auto px-6 md:px-12 items-center justify-between">
    
    <!-- Left Column: Text & CTAs (60%) -->
    <div class="w-full md:w-3/5 flex flex-col justify-center space-y-5 text-center md:text-left">
      
      <!-- Eyebrow / Trust Name -->
      <div class="inline-flex items-center justify-center md:justify-start space-x-2">
        <span class="px-3 py-1 bg-blue-100 text-[#003366] text-xs md:text-sm font-bold rounded-full uppercase tracking-wider">
          कर्म योग सेवा सदन ट्रस्ट
        </span>
        <span class="text-green-700 text-xs md:text-sm font-semibold hidden md:inline-block">
          मानव सेवा | समावेशी समाज | उज्जवल कल
        </span>
      </div>

      <!-- Main Headline -->
      <h1 class="text-3xl md:text-5xl lg:text-6xl font-extrabold text-[#003366] leading-tight">
        आपकी <span class="text-[#D11A2A]">छोटी-सी मदद,</span> <br /> 
        किसी की <span class="text-green-700">बड़ी उम्मीद</span>
      </h1>

      <!-- Description / Mission -->
      <p class="text-gray-700 text-base md:text-lg lg:text-xl max-w-2xl font-medium leading-relaxed">
        वृद्ध, दिव्यांग, असहाय एवं जरूरतमंद लोगों की सेवा में निरंतर प्रयासरत। 
        <span class="bg-yellow-100 text-gray-900 px-1">आपका छोटा-सा सहयोग किसी के लिए भोजन, सहारा और नई उम्मीद बन सकता है।</span>
      </p>

      <!-- CTA Buttons -->
      <div class="flex flex-col sm:flex-row items-center md:justify-start gap-4 pt-4">
        <!-- Primary Donate Button -->
        <a href="#donate" class="w-full sm:w-auto px-8 py-3 md:py-4 bg-[#D11A2A] hover:bg-red-800 text-white text-lg font-bold rounded-md shadow-[0_4px_14px_0_rgba(209,26,42,0.39)] transition-all transform hover:scale-105 flex items-center justify-center gap-2">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
          </svg>
          दान करें
        </a>
        
        <!-- Secondary Join Button -->
        <a href="#join" class="w-full sm:w-auto px-8 py-3 md:py-4 bg-white border-2 border-[#228B22] text-[#228B22] hover:bg-green-50 text-lg font-bold rounded-md transition-all flex items-center justify-center gap-2">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
            <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" />
          </svg>
          सेवा से जुड़ें
        </a>
      </div>
    </div>

    <!-- Right Column: Image (40%) -->
    <!-- Note for Dev: Replace the generic hands image URL with a cropped high-res image from the brochure (like the hands together or the sunset silhouettes) -->
    <div class="w-full md:w-2/5 flex justify-center md:justify-end mb-6 md:mb-0 relative z-10">
      <div class="relative w-64 h-64 md:w-80 md:h-80 lg:w-[400px] lg:h-[400px]">
        <img 
          src="https://images.unsplash.com/photo-1593113514232-aa7f9fb57145?q=80&w=800&auto=format&fit=crop" 
          alt="Hands joining together in support" 
          class="w-full h-full object-cover rounded-full shadow-2xl border-4 border-white"
        />
        <!-- Small floating badge for trust -->
        <div class="absolute bottom-4 -left-4 bg-white p-3 rounded-xl shadow-lg border border-gray-100 flex items-center gap-2">
          <span class="text-[#003366] font-bold text-sm">80G Certified</span>
          <div class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></div>
        </div>
      </div>
    </div>

  </div>
</div>