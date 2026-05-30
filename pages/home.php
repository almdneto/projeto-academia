<?php

require_once __DIR__ . '/../includes/auth/auth_check.php';
require_once __DIR__ . '/../includes/admin/admin_check.php';

$erroPermission = $_SESSION['erro_permission'] ?? '';
unset($_SESSION['erro_permission']);

?>

<!DOCTYPE html>

<html class="dark" lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <title>Power &amp; Performance | Upgrade Your Potential</title>
  <link rel="stylesheet" href="../css/output.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800&amp;family=Inter:wght@400;500;600&amp;display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
  <style>
    .bg-primary-container-90 {
      background-color: rgb(195 244 0 / 0.9);
    }

    body {
      background-color: #131313;
      color: #e4e2e1;
      font-family: 'Inter', sans-serif;
    }

    .neon-glow {
      text-shadow: 0 0 10px rgba(171, 214, 0, 0.4);
    }

    .card-lift:hover {
      transform: translateY(-4px);
      transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
      box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.5);
    }

    .btn-press:active {
      transform: scale(0.98);
    }

    .bento-grid {
      display: grid;
      grid-template-columns: repeat(12, 1fr);
      gap: 24px;
    }

    .custom-scrollbar::-webkit-scrollbar {
      width: 4px;
    }

    .custom-scrollbar::-webkit-scrollbar-track {
      background: #1b1c1c;
    }

    .custom-scrollbar::-webkit-scrollbar-thumb {
      background: #abd600;
    }
  </style>
  <link rel="stylesheet" href="../css/output.css">
</head>

<body class="bg-background overflow-x-hidden">
  <!-- Top Navigation -->
  <header class="fixed top-0 w-full z-50 bg-background/80 backdrop-blur-md flex justify-between items-center px-container-padding-desktop max-w-[1440px] left-1/2 -translate-x-1/2 h-20">
    <div class="font-headline-lg text-headline-lg font-extrabold tracking-tighter text-primary-container uppercase">
      Power &amp; Performance
    </div>
    <div class="hidden md:flex items-center gap-8">
      <a class="text-primary-container font-bold border-b-2 border-primary-container font-label-lg text-label-lg transition-colors" href="#">PLANS</a>
      <a class="text-on-surface-variant font-label-lg text-label-lg hover:text-primary-container transition-colors" href="#">EQUIPMENT</a>
      <a class="text-on-surface-variant font-label-lg text-label-lg hover:text-primary-container transition-colors" href="#">RECOVERY</a>
      <button class="bg-primary-container text-on-primary-fixed px-6 py-2 rounded-full font-bold uppercase text-label-lg tracking-widest hover:scale-105 transition-transform duration-200">
        Join Now
      </button>
    </div>
    <div class="">
        <a class="flex items-center gap-3 px-4 py-3 text-secondary-fixed-dim hover:text-error transition-colors" href="/pages/auth/logout.php">
          <span class="material-symbols-outlined">logout</span>
          <span class="font-label-lg text-label-lg">Logout</span>
        </a>
      </div>
  </header>
  <main class="mt-20">
    <!-- Hero Section -->
    <section class="relative w-full h-[85vh] overflow-hidden flex items-center justify-center px-container-padding-desktop">
      <div class="absolute inset-0 z-0">
        <img class="w-full h-full object-cover opacity-40 mix-blend-luminosity" src="../images/login-cadastro.png" />
        <div class="absolute inset-0 bg-gradient-to-t from-background via-transparent to-background/50"></div>
      </div>
      <div class="relative z-10 w-full max-w-[1440px] grid lg:grid-cols-2 gap-12 items-center">
        <div class="space-y-6">
          <span class="inline-block px-4 py-1 bg-primary-container/20 text-primary-container font-bold tracking-widest uppercase text-label-lg rounded">Status: Plan Inactive</span>
          <h1 class="font-headline-xl text-headline-xl text-white uppercase leading-tight">
            Experience the <span class="text-primary-container neon-glow">Power</span> Within
          </h1>
          <p class="font-body-lg text-body-lg text-on-surface-variant max-w-lg">
            You're just one decision away from a completely different lifestyle. Unlock elite access and train with the world's most advanced equipment.
          </p>
          <div class="flex flex-wrap gap-4 pt-4">
            <button class="btn-press bg-primary-container text-on-primary-fixed px-8 py-4 rounded-lg font-bold uppercase tracking-wider text-label-lg hover:bg-primary-fixed transition-all">
              Activate My Plan
            </button>
            <button class="btn-press border-2 border-outline text-white px-8 py-4 rounded-lg font-bold uppercase tracking-wider text-label-lg hover:border-primary-container hover:text-primary-container transition-all flex items-center gap-2">
              <span class="material-symbols-outlined">play_circle</span>
              View Facility
            </button>
          </div>
        </div>
        <div class="hidden lg:block relative group">
          <div class="absolute -inset-1 bg-primary-container/20 rounded-xl blur-lg group-hover:bg-primary-container/30 transition-all"></div>
          <div class="relative bg-surface-container-high aspect-video rounded-xl overflow-hidden border border-outline/30 shadow-2xl">
            <img class="w-full h-full object-cover" data-alt="A cinematic cinematic interior view of a futuristic gym facility with neon green lighting strips and high-end weight lifting racks. The scene is atmospheric with light smoke in the air, creating a premium high-intensity workout environment. The colors are dominated by deep charcoals and electric lime accents." src="../images/trein.png" />
            <div class="absolute inset-0 flex items-center justify-center group-hover:scale-110 transition-transform duration-500 cursor-pointer">
              <div class="w-20 h-20 bg-primary-container-90 rounded-full flex items-center justify-center shadow-2xl">
                <span class="material-symbols-outlined text-on-primary-fixed text-4xl" style="font-variation-settings: 'FILL' 1;">play_arrow</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Elite Benefits Section -->
    <section class="py-section-gap px-container-padding-desktop max-w-[1440px] mx-auto">
      <div class="mb-12 text-center md:text-left">
        <h2 class="font-headline-lg text-headline-lg text-white uppercase mb-4">Elite Benefits</h2>
        <div class="h-1 w-24 bg-primary-container"></div>
      </div>
      <div class="bento-grid">
        <!-- 24/7 Access -->
        <div class="col-span-12 md:col-span-4 bg-surface-container-low border border-outline/10 p-8 rounded-xl card-lift flex flex-col justify-between h-80">
          <div class="space-y-4">
            <span class="material-symbols-outlined text-primary-container text-4xl">schedule</span>
            <h3 class="font-headline-md text-headline-md text-white uppercase">24/7 Access</h3>
            <p class="font-body-sm text-body-sm text-on-surface-variant">Unrestricted entry to all facility locations. Your training schedule, your rules. No excuses left.</p>
          </div>
          <a class="text-primary-container font-bold flex items-center gap-2 text-label-lg" href="#">LEARN MORE <span class="material-symbols-outlined text-sm">arrow_forward</span></a>
        </div>
        <!-- Elite Equipment -->
        <div class="col-span-12 md:col-span-8 relative bg-surface-container-low border border-outline/10 rounded-xl card-lift h-80 overflow-hidden">
          <img class="absolute inset-0 w-full h-full object-cover opacity-30" data-alt="Close-up shot of heavy duty chrome dumbbells on a rack in a high-end gym. The lighting is moody with dramatic highlights on the metal surfaces and neon green vertical light bars in the background. Professional sports photography style, dark aesthetic." src="../images/halters.png" />
          <div class="relative z-10 p-8 h-full flex flex-col justify-between">
            <div class="space-y-4 max-w-md">
              <span class="material-symbols-outlined text-primary-container text-4xl">fitness_center</span>
              <h3 class="font-headline-md text-headline-md text-white uppercase">Elite Equipment</h3>
              <p class="font-body-sm text-body-sm text-on-surface-variant">Train with industry-leading machinery from Eleiko, Prime, and Hammer Strength. Precision-engineered for maximum output.</p>
            </div>
            <button class="w-fit bg-primary-container/10 border border-primary-container/30 text-primary-container px-6 py-2 rounded-lg font-bold">VIEW GEAR LIST</button>
          </div>
        </div>
        <!-- Personal Training -->
        <div class="col-span-12 md:col-span-6 bg-surface-container-low border border-outline/10 p-8 rounded-xl card-lift flex gap-6">
          <div class="hidden sm:block w-32 h-32 rounded-lg overflow-hidden shrink-0">
            <img class="w-full h-full object-cover" data-alt="A professional fitness coach in black athletic wear explaining a workout program on a tablet. High-contrast lighting, gym environment background, sharp focus, motivating professional atmosphere." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCpSLSC2GE_smFkrQHO5ZFx5QiDV-dK_U9isFTMYd91x33Qs0JoiLqf10Pixd1vCuTUsVAz5qSpj14x51gZUWa1FL1nHUqG5p2ZjJiYdYTUKLUyNBcB4TLna0p9qu2c_pMb7waAS9U31eqcRU_Y6H-wsXaXo_Ls7Mo4L7GJvDNGqHC1KpwyYhlZH8egObXAur0nZMfnBi3lDwJ5v6i6CV1un-xeOhsJSVkuEC-jrrOYeEoURsXTKtHs2qYy8rTiSUtc8UlFJdeu39U" />
          </div>
          <div class="space-y-4">
            <span class="material-symbols-outlined text-primary-container text-4xl">person_pin_circle</span>
            <h3 class="font-headline-md text-headline-md text-white uppercase">Elite Coaching</h3>
            <p class="font-body-sm text-body-sm text-on-surface-variant">Work 1-on-1 with certified high-performance coaches specializing in athletic conditioning and biomechanics.</p>
          </div>
        </div>
        <!-- Recovery Spa -->
        <div class="col-span-12 md:col-span-6 bg-surface-container-low border border-outline/10 p-8 rounded-xl card-lift flex gap-6">
          <div class="hidden sm:block w-32 h-32 rounded-lg overflow-hidden shrink-0">
            <img class="w-full h-full object-cover" data-alt="A sleek modern recovery spa area featuring a cold plunge pool and a high-tech sauna with glowing white light and dark wood panels. Serene, high-end, futuristic recovery facility aesthetic." src="https://lh3.googleusercontent.com/aida-public/AB6AXuASu1dzCTNHEgDgoJcf9KIGzam7ybPPrz0VsCOWEGqAmTJu-YH8o8e0nCZsY1S-tcDST2e2QuO293nHGccamftHEUhEzrh3T-e79-ykygWvwU5ezIf7XiaQQIrTafX7YaPEPOs2tBigAyrPS2vpefJVvuX6jZR7WbwjlzkBIb-y0KDUdjO5vngTjmpHXaurkFDcotzST0Md8ibkVzH-J5ubgQe9uCQ9hxwGorciY7g6l79STF5FpuU8Bn9ijgF4XHxAPJSz4w2EEdI" />
          </div>
          <div class="space-y-4">
            <span class="material-symbols-outlined text-primary-container text-4xl">spa</span>
            <h3 class="font-headline-md text-headline-md text-white uppercase">Recovery Spa</h3>
            <p class="font-body-sm text-body-sm text-on-surface-variant">Cold plunges, infrared saunas, and compression therapy. Optimize your recovery to return stronger than yesterday.</p>
          </div>
        </div>
        <!-- Nutrition Lounge -->
        <div class="col-span-12 bg-surface-container-low border border-outline/10 p-8 rounded-xl card-lift flex flex-col md:flex-row items-center justify-between gap-8">
          <div class="space-y-4 md:max-w-xl text-center md:text-left">
            <span class="material-symbols-outlined text-primary-container text-4xl">restaurant</span>
            <h3 class="font-headline-md text-headline-md text-white uppercase">Performance Nutrition Lounge</h3>
            <p class="font-body-sm text-body-sm text-on-surface-variant">Custom meal prepping and professional-grade supplementation bar. Fuel your body with precisely what it needs for peak performance.</p>
          </div>
          <div class="flex gap-4">
            <div class="px-6 py-4 rounded-xl bg-background border border-outline/10 text-center">
              <span class="block text-primary-container font-bold text-headline-sm">0%</span>
              <span class="text-on-surface-variant text-label-sm uppercase">Sugars</span>
            </div>
            <div class="px-6 py-4 rounded-xl bg-background border border-outline/10 text-center">
              <span class="block text-primary-container font-bold text-headline-sm">100%</span>
              <span class="text-on-surface-variant text-label-sm uppercase">Fuel</span>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Testimonials -->
    <section class="py-section-gap bg-surface-container-lowest">
      <div class="max-w-[1440px] mx-auto px-container-padding-desktop">
        <h2 class="font-headline-lg text-headline-lg text-white uppercase text-center mb-16 tracking-tight">The <span class="text-primary-container">Champions</span> We Forge</h2>
        <div class="grid md:grid-cols-3 gap-8">
          <!-- Athlete 1 -->
          <div class="relative group p-8 rounded-2xl bg-surface-container border border-outline/10 overflow-hidden">
            <div class="absolute top-0 right-0 p-4 opacity-10 group-hover:opacity-20 transition-opacity">
              <span class="material-symbols-outlined text-9xl">format_quote</span>
            </div>
            <p class="relative z-10 font-body-md text-body-md text-on-surface italic mb-8">
              "Power &amp; Performance changed my trajectory. The recovery equipment alone added years to my career."
            </p>
            <div class="flex items-center gap-4">
              <div class="w-12 h-12 rounded-full overflow-hidden border-2 border-primary-container">
                <img class="w-full h-full object-cover" data-alt="Portrait of a muscular professional athlete with short cropped hair looking determined. Cinematic gym lighting, dark background with subtle electric green highlights. Focus on strength and professional performance." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDo-JgnE1VLhRoKv9ypBQErwgZrUdACaVWYAu1Q_Z4KzhUWa75eoRkdXON2waIl4mRUg7SHMKdCjzIstWm0_mri30urLfNhNhQkv-fctMY7DDZlm4_yBNzsKEJ0urIsbQNkJNMVnDFPns6xFjXoRf53vbPhNH_zVKLvlXRmyR9h9bGXfHlhFKaHjWs4Umm5tQ7P17h6ct3I8PV4IC1Mdbd5pWThm47CqK6iehGv83FOyPAm0HL-1szjDfgYVXpC70s1GVGYo93WNZw" />
              </div>
              <div>
                <h4 class="font-bold text-white uppercase">Marcus Vane</h4>
                <span class="text-primary-container text-label-sm uppercase">Pro Middleweight</span>
              </div>
            </div>
          </div>
          <!-- Athlete 2 -->
          <div class="relative group p-8 rounded-2xl bg-surface-container border border-outline/10 overflow-hidden">
            <div class="absolute top-0 right-0 p-4 opacity-10 group-hover:opacity-20 transition-opacity">
              <span class="material-symbols-outlined text-9xl">format_quote</span>
            </div>
            <p class="relative z-10 font-body-md text-body-md text-on-surface italic mb-8">
              "Nowhere else provides this level of data-driven coaching. If you're serious, this is the only place to be."
            </p>
            <div class="flex items-center gap-4">
              <div class="w-12 h-12 rounded-full overflow-hidden border-2 border-primary-container">
                <img class="w-full h-full object-cover" data-alt="Portrait of a female professional fitness athlete in athletic gear with a focused expression. High-key dramatic lighting highlights muscles, dark gym background with blurred green light streaks. Premium fitness aesthetic." src="https://lh3.googleusercontent.com/aida-public/AB6AXuC_10rhZRpoDNqf1RND9SgdzeZn4MP7fdWO7Xx7EA3lqWO4ZjCCQui26muGNri9mWu11z8pRG1cs5FYhyc3tiZj8ATD7OXjeJf7VxVISZFzA4MXBGdBwzd8ojYXo0vgz25gkAWQ45kCYu6oeSwzV4Otk6RKdm_XswRUkYhVJVYV7JIIf8_LNBxZZsp25kSwBw56CihQV5BV_prD8HK2TxWcKdjju0zaNSxp9qAD6CJtYo8HQh-LrDCd4JRFlM0Ji7ZTACiZDrqvzqo" />
              </div>
              <div>
                <h4 class="font-bold text-white uppercase">Elena Stark</h4>
                <span class="text-primary-container text-label-sm uppercase">National Olympian</span>
              </div>
            </div>
          </div>
          <!-- Athlete 3 -->
          <div class="relative group p-8 rounded-2xl bg-surface-container border border-outline/10 overflow-hidden">
            <div class="absolute top-0 right-0 p-4 opacity-10 group-hover:opacity-20 transition-opacity">
              <span class="material-symbols-outlined text-9xl">format_quote</span>
            </div>
            <p class="relative z-10 font-body-md text-body-md text-on-surface italic mb-8">
              "The community here pushes you. You don't just join a gym, you join a brotherhood of high-achievers."
            </p>
            <div class="flex items-center gap-4">
              <div class="w-12 h-12 rounded-full overflow-hidden border-2 border-primary-container">
                <img class="w-full h-full object-cover" data-alt="Close up portrait of a fit athlete sweating after a workout, looking into the camera with intensity. The lighting is low-key, gritty, and powerful with subtle neon green backlighting. High contrast sports photography." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBp1ZW8IVbgDPrttOfbeNGaNEmSuaXrLGNZc4Yw-pdo5HGIcWP3ltcEGYhuodSN63XaeXQwemC-zLZQbzubqsgXl45FJQsrVimOGH_s61D2JmDyHM8Y_kKY8crfpmKiKJAakh8U2vY3jP1wZ-pCCUduBtrCAvsPOTS24cUf68OX-d_9DR5R7C5WntKwY_7TEvIR85jpTp_qMePlq30onWsse8iYa-lUgDRj6XyZPgXCjl-O-Z2BD8FlZqSHy42YSAdQBqFPHbEL4sM" />
              </div>
              <div>
                <h4 class="font-bold text-white uppercase">Jordan Lee</h4>
                <span class="text-primary-container text-label-sm uppercase">Strength Specialist</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Pricing Table -->
    <section class="py-section-gap px-container-padding-desktop max-w-[1200px] mx-auto">
      <div class="text-center mb-16">
        <h2 class="font-headline-lg text-headline-lg text-white uppercase">Select Your Access Level</h2>
        <p class="font-body-md text-on-surface-variant mt-2">Flexible plans built for those who never settle.</p>
      </div>
      <div class="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto">
        <!-- Black Plan -->
        <div class="bg-surface-container-low border border-outline/20 p-8 rounded-2xl flex flex-col justify-between">
          <div>
            <h3 class="font-headline-md text-headline-md text-white uppercase mb-2">Black Plan</h3>
            <div class="flex items-baseline gap-1 mb-6">
              <span class="text-headline-lg font-bold text-white">$79</span>
              <span class="text-on-surface-variant">/MONTH</span>
            </div>
            <ul class="space-y-4 mb-8">
              <li class="flex items-center gap-3 text-on-surface">
                <span class="material-symbols-outlined text-primary-container text-lg">check_circle</span>
                24/7 Home Club Access
              </li>
              <li class="flex items-center gap-3 text-on-surface">
                <span class="material-symbols-outlined text-primary-container text-lg">check_circle</span>
                Elite Strength Equipment
              </li>
              <li class="flex items-center gap-3 text-on-surface">
                <span class="material-symbols-outlined text-primary-container text-lg">check_circle</span>
                Digital Performance Hub
              </li>
              <li class="flex items-center gap-3 text-on-surface-variant opacity-50 line-through">
                <span class="material-symbols-outlined text-lg">cancel</span>
                Recovery Spa Access
              </li>
              <li class="flex items-center gap-3 text-on-surface-variant opacity-50 line-through">
                <span class="material-symbols-outlined text-lg">cancel</span>
                Monthly Coaching Call
              </li>
            </ul>
          </div>
          <button class="w-full py-4 border-2 border-outline/50 text-white font-bold uppercase rounded-xl hover:border-white transition-colors">Start Standard</button>
        </div>
        <!-- Platinum Plan -->
        <div class="relative bg-surface border-2 border-primary-container p-8 rounded-2xl flex flex-col justify-between overflow-hidden">
          <div class="absolute top-4 right-[-35px] bg-primary-container text-on-primary-fixed font-bold py-1 px-12 rotate-45 text-sm uppercase">
            Most Popular
          </div>
          <div>
            <h3 class="font-headline-md text-headline-md text-primary-container uppercase mb-2">Platinum Plan</h3>
            <div class="flex items-baseline gap-1 mb-6">
              <span class="text-headline-lg font-bold text-white">$149</span>
              <span class="text-on-surface-variant">/MONTH</span>
            </div>
            <ul class="space-y-4 mb-8">
              <li class="flex items-center gap-3 text-on-surface">
                <span class="material-symbols-outlined text-primary-container text-lg" style="font-variation-settings: 'FILL' 1;">check_circle</span>
                Global Unlimited Access
              </li>
              <li class="flex items-center gap-3 text-on-surface">
                <span class="material-symbols-outlined text-primary-container text-lg" style="font-variation-settings: 'FILL' 1;">check_circle</span>
                Unlimited Recovery Spa
              </li>
              <li class="flex items-center gap-3 text-on-surface">
                <span class="material-symbols-outlined text-primary-container text-lg" style="font-variation-settings: 'FILL' 1;">check_circle</span>
                Professional Nutrition Coach
              </li>
              <li class="flex items-center gap-3 text-on-surface">
                <span class="material-symbols-outlined text-primary-container text-lg" style="font-variation-settings: 'FILL' 1;">check_circle</span>
                Monthly 1-on-1 Strategy Session
              </li>
              <li class="flex items-center gap-3 text-on-surface">
                <span class="material-symbols-outlined text-primary-container text-lg" style="font-variation-settings: 'FILL' 1;">check_circle</span>
                Bring-a-Friend (4x / Month)
              </li>
            </ul>
          </div>
          <button class="w-full py-4 bg-primary-container text-on-primary-fixed font-bold uppercase rounded-xl shadow-[0_0_20px_rgba(171,214,0,0.3)] hover:scale-[1.02] active:scale-95 transition-all">Activate Platinum</button>
        </div>
      </div>
    </section>
    <!-- CTA Footer -->
    <section class="relative py-24 px-container-padding-desktop overflow-hidden mt-12">
      <div class="absolute inset-0 z-0">
        <img class="w-full h-full object-cover opacity-20 scale-125 translate-y-1/4 filter blur-sm" src="https://lh3.googleusercontent.com/aida/ADBb0uhe-v5fvfz-Zp1DF8_RjF7Etf1GwCLtv00Dwy4dGeE9HXqfI3qUA36n7JY-0wCRBJOjgEXR6akj_Ze-1CqjhTCNQ1-t8p0Oe916-hQw78XZ_tb9hJu1EmnOYu3f7ibVxvcVdcuUBJq3qrwfNf-IFCaX9eI11kxz-B6fLRIi07JWMuaIvH8GDL2QKq64xGMA9c7yCBPO_U4R3JB3aBP6gTK_kK0Q8GirWQmin07FX7K2A2ll7jrkmvyo9Q" />
        <div class="absolute inset-0 bg-gradient-to-b from-background via-background/80 to-background"></div>
      </div>
      <div class="relative z-10 text-center space-y-8 max-w-3xl mx-auto">
        <h2 class="font-headline-xl text-headline-xl text-white uppercase leading-none">Your Transformation <br /><span class="text-primary-container neon-glow">Starts Here</span></h2>
        <p class="font-body-lg text-body-lg text-on-surface-variant">Don't wait for another Monday. The strongest version of you is waiting.</p>
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
          <button class="btn-press w-full sm:w-auto bg-primary-container text-on-primary-fixed px-12 py-5 rounded-full font-bold uppercase tracking-widest text-label-lg shadow-xl">
            Activate My Plan Now
          </button>
          <a class="text-white hover:text-primary-container underline font-bold uppercase text-label-lg transition-colors" href="#">Contact Support</a>
        </div>
      </div>
    </section>
  </main>
  <footer class="py-12 px-container-padding-desktop border-t border-outline/10 bg-background">
    <div class="max-w-[1440px] mx-auto flex flex-col md:flex-row justify-between items-center gap-8">
      <div class="text-center md:text-left">
        <div class="font-headline-sm text-headline-sm font-bold text-primary-container uppercase mb-2">Power &amp; Performance</div>
        <p class="text-on-surface-variant text-label-sm">HIGH PERFORMANCE HUB © 2024</p>
      </div>
      <div class="flex gap-8">
        <a class="text-on-surface-variant hover:text-primary-container transition-colors font-label-lg text-label-lg" href="#">PRIVACY</a>
        <a class="text-on-surface-variant hover:text-primary-container transition-colors font-label-lg text-label-lg" href="#">TERMS</a>
        <a class="text-on-surface-variant hover:text-primary-container transition-colors font-label-lg text-label-lg" href="#">FACILITIES</a>
      </div>
      <div class="flex gap-4">
        <div class="w-10 h-10 rounded-full border border-outline/20 flex items-center justify-center hover:bg-primary-container hover:text-on-primary-fixed transition-all cursor-pointer">
          <span class="material-symbols-outlined text-sm">social_leaderboard</span>
        </div>
        <div class="w-10 h-10 rounded-full border border-outline/20 flex items-center justify-center hover:bg-primary-container hover:text-on-primary-fixed transition-all cursor-pointer">
          <span class="material-symbols-outlined text-sm">share</span>
        </div>
      </div>
    </div>
  </footer>
  <script>
    // Micro-interaction for the floating neon effect
    document.addEventListener('mousemove', (e) => {
      const glow = document.querySelector('.neon-glow');
      const x = (e.clientX / window.innerWidth - 0.5) * 20;
      const y = (e.clientY / window.innerHeight - 0.5) * 20;
      if (glow) glow.style.transform = `translate(${x}px, ${y}px)`;
    });

    // Simple visibility observer for entrance animations
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('opacity-100');
          entry.target.classList.remove('opacity-0', 'translate-y-10');
        }
      });
    }, {
      threshold: 0.1
    });

    document.querySelectorAll('.card-lift').forEach(card => {
      card.classList.add('opacity-0', 'translate-y-10', 'transition-all', 'duration-700');
      observer.observe(card);
    });
  </script>
</body>

</html>