<!DOCTYPE html>

<html class="dark" lang="pt-BR">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700;800&amp;family=Inter:wght@400;500;600&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="./css/output.css" />
    <title>Academia | Management Pro</title>
</head>

<body class="bg-background text-on-background selection:bg-primary-container selection:text-on-primary-container">
    <!-- TopNavBar -->
    <header class="fixed top-0 left-0 right-0 h-16 z-50 bg-background/80 backdrop-blur-md border-b border-white/5">
        <nav class="flex justify-between items-center px-gutter max-w-[1440px] mx-auto h-full">
            <div class="flex items-center gap-2 pulse-logo">
                <span class="font-headline-sm text-headline-sm font-bold text-primary-fixed">Academia</span>
                <span class="text-xs uppercase tracking-widest text-on-surface-variant font-label-sm border border-on-surface-variant/30 px-2 py-0.5 rounded">Pro</span>
            </div>
            <div class="hidden md:flex gap-base">
                <a class="px-4 py-2 font-label-lg text-label-lg text-secondary hover:text-primary-fixed transition-colors" href="#modalidades">Modalidades</a>
                <a class="px-4 py-2 font-label-lg text-label-lg text-secondary hover:text-primary-fixed transition-colors" href="#planos">Planos</a>
                <a class="px-4 py-2 font-label-lg text-label-lg text-secondary hover:text-primary-fixed transition-colors" href="#contato">Unidades</a>
            </div>
            <div class="flex items-center gap-4">
                <button class="material-symbols-outlined text-secondary hover:text-primary-fixed transition-colors">notifications</button>
                <button class="bg-primary-container text-on-primary-container px-6 py-2 rounded-full font-label-lg text-label-lg active:scale-95 transition-all btn-hover-glow">Começar Agora</button>
            </div>
        </nav>
    </header>
    <main class="pt-16">
        <!-- Hero Section -->
        <section class="relative min-h-[921px] flex items-center overflow-hidden">
            <div class="absolute inset-0 z-0">
                <img class="w-full h-full object-cover grayscale opacity-40" data-alt="A powerful cinematic wide shot of a professional athlete performing a heavy deadlift in a gritty, high-end athletic facility. The lighting is dramatic and moody, featuring sharp highlights on the muscles and deep shadows in the background. The color palette is dark charcoal and slate gray, with an energetic atmosphere of focused determination and raw power." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCJnNzDsXvI5jO3ILMi6WCildwGAHNAOMoEcFeVyWc5fi9U7gtQu_7nNT6i4UrXoBC6BKfnk4RAF0OZlSDaBYmhTcrii5pT85IUkXL-aZpc0DxdRzaPadxaj0cRn-XbYYD8D7OJe0_Yqq6-jc2KS0SlMCqO3Mg2NoWkRnPvnznFAaVWkfFxIT-bfaTkWoPZXONa8YUnpCr5K58d0pRZckbJ0Cpt_ZgRQX47JY71cXASqPsmNLpo-kAJ-6SAUXJtpcKoHNNzTOB6GC0" />
                <div class="absolute inset-0 bg-gradient-to-r from-background via-background/80 to-transparent"></div>
                <div class="absolute inset-0 hero-mesh pointer-events-none"></div>
            </div>
            <div class="relative z-10 max-w-[1440px] mx-auto px-gutter w-full">
                <div class="max-w-2xl">
                    <span class="inline-block px-3 py-1 mb-6 bg-surface-container-high border border-primary-fixed/20 text-primary-fixed font-label-sm text-label-sm rounded uppercase tracking-tighter animate-fade-up" style="animation-delay: 0.1s;">Performance de Elite</span>
                    <h1 class="font-headline-xl text-headline-xl mb-6 text-primary leading-[1.1] tracking-tighter animate-fade-up" style="animation-delay: 0.2s;">
                        TRANSFORME O SEU <br />
                        <span class="text-primary-fixed text-glow">SUOR EM RESULTADO.</span>
                    </h1>
                    <p class="font-body-lg text-body-lg text-secondary mb-10 max-w-lg animate-fade-up" style="animation-delay: 0.3s;">
                        A gestão inteligente do seu treino com infraestrutura de ponta e os melhores profissionais do mercado. Elevando o padrão do fitness brasileiro.
                    </p>
                    <div class="flex flex-wrap gap-4 animate-fade-up" style="animation-delay: 0.4s;">
                        <button class="bg-primary-container text-on-primary-container px-8 py-4 rounded-lg font-headline-sm text-headline-sm hover:brightness-110 active:scale-98 transition-all btn-hover-glow">
                            Agendar Aula Grátis
                        </button>
                        <button class="border-2 border-secondary text-primary px-8 py-4 rounded-lg font-headline-sm text-headline-sm hover:bg-white/5 active:scale-98 transition-all">
                            Conhecer Planos
                        </button>
                    </div>
                </div>
            </div>
            <!-- Animated Scroll Indicator -->
            <a class="absolute bottom-10 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2 opacity-50 hover:opacity-100 transition-opacity cursor-pointer group" href="#modalidades">
                <span class="text-[10px] uppercase tracking-widest font-label-sm">Scroll</span>
                <div class="w-px h-12 bg-gradient-to-b from-primary-fixed to-transparent group-hover:h-16 transition-all duration-500"></div>
            </a>
        </section>
        <!-- Modalities (Bento Grid) -->
        <section class="py-section-gap px-gutter max-w-[1440px] mx-auto reveal" id="modalidades">
            <div class="flex justify-between items-end mb-12">
                <div>
                    <h2 class="font-headline-lg text-headline-lg mb-2">Modalidades</h2>
                    <p class="text-secondary font-body-md text-body-md">Experiências desenhadas para cada objetivo.</p>
                </div>
                <div class="h-px flex-1 mx-8 bg-surface-container-highest hidden md:block"></div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-12 gap-6 h-auto md:h-[600px]">
                <!-- Musculação -->
                <div class="md:col-span-7 relative group overflow-hidden rounded-xl bg-surface-container card-lift transition-all duration-500">
                    <img class="absolute inset-0 w-full h-full object-cover opacity-60 group-hover:scale-110 group-hover:opacity-80 transition-all duration-700" data-alt="Close up action shot of a person lifting a heavy chrome dumbbell in a high-contrast gym setting. The lighting highlights the grit and metallic texture of the equipment. The overall aesthetic is dark mode professional, with deep charcoal tones and a focus on strength and endurance." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDFuEeuJFX4AheLpM_2-nOKK_7ZY1HkSvmD-6vhMU_BzO6RJM-nU8lML_W6idV44NcPtnnJjxbQEqFr0BhD0-ky4b2IfD_-URx8-IpLq30cNtSUzoMUcgEkSBPuLJeDl-fgFn2lK7-hR0cEraLdA9dB51rGKy82jTXJ_8_xi-nFzxMzn-97ZPIDN7It-yLrkIWVGKmFTHMpSi2rABma_ScSqWeyVwvb6jFiR1tLkDZosJLs2J1vOQylt3bjRESu8ChM_rQCO7f33-k" />
                    <div class="absolute inset-0 bg-gradient-to-t from-background to-transparent opacity-80 group-hover:opacity-60 transition-opacity"></div>
                    <div class="absolute bottom-0 left-0 p-8">
                        <h3 class="font-headline-md text-headline-md mb-2">Musculação</h3>
                        <p class="font-body-sm text-body-sm text-secondary max-w-sm mb-4">Equipamentos de última geração e acompanhamento personalizado para hipertrofia e força.</p>
                        <span class="flex items-center gap-2 text-primary-fixed font-label-lg text-label-lg group-hover:translate-x-2 transition-transform">Ver Detalhes <span class="material-symbols-outlined">arrow_forward</span></span>
                    </div>
                </div>
                <!-- CrossFit -->
                <div class="md:col-span-5 relative group overflow-hidden rounded-xl bg-surface-container card-lift transition-all duration-500">
                    <img class="absolute inset-0 w-full h-full object-cover opacity-60 group-hover:scale-110 group-hover:opacity-80 transition-all duration-700" data-alt="An intense CrossFit workout scene featuring athletes performing functional movements in a high-octane environment. The lighting is moody and focused, with a cinematic dark gray color palette. Energy and dynamism are captured through motion blur and high-contrast lighting effects." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAcIsexi9gQS0qZz5Vt4zzduFozAMKJUDEyNqMITdBq6Sw0S7um7jyTgrSamGIRmcm4rq_6RFOnjaENzAolgT1tsk_NGB_fEqoDQFVb79f5658h188RE_08S0272p1u0z_Az6Eu4eY7CgWZ2sYRaXiJQoTMOSkTOWZ7_wNyZFgce9z3BmcPeloAb3gcoBZ20CQwrs9XvPwAFjMmNqj9Y68USzQu-EXUPjqOAkstdjcPcB6dwdYVvdtenyoZERUvMG_T3beISyivSz8" />
                    <div class="absolute inset-0 bg-gradient-to-t from-background to-transparent opacity-80 group-hover:opacity-60 transition-opacity"></div>
                    <div class="absolute bottom-0 left-0 p-8">
                        <h3 class="font-headline-md text-headline-md mb-2">CrossFit</h3>
                        <p class="font-body-sm text-body-sm text-secondary max-w-xs mb-4">WODs dinâmicos que desafiam seus limites físicos e mentais diariamente.</p>
                        <span class="flex items-center gap-2 text-primary-fixed font-label-lg text-label-lg group-hover:translate-x-2 transition-transform">Ver Detalhes <span class="material-symbols-outlined">arrow_forward</span></span>
                    </div>
                </div>
                <!-- Pilates & Yoga -->
                <div class="md:col-span-12 relative group overflow-hidden rounded-xl bg-surface-container card-lift transition-all duration-500 min-h-[250px]">
                    <img class="absolute inset-0 w-full h-full object-cover opacity-50 group-hover:scale-105 group-hover:opacity-70 transition-all duration-700" data-alt="A serene Pilates studio setting with high-end reformers and a minimalist aesthetic. The lighting is soft and atmospheric, emphasizing balance and flow. Deep charcoal shadows contrast with subtle lime green accents, creating a calm yet energizing professional wellness space." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAe97W_LPjmHOb4g72lFntVpP_zSSlQIJnjm8LxqDMn-tIr9C117rge8gDL7nehpsWlUIVz-WBxuakIbn5kTS0gU-3VEzjXm_VPTXl_rhK68gelwm5Y9HXZuQE7KaGQMHgIGrB3nGzWv5Riyh-xh-PvKAnDa1v5RtHsES-jKRoDJflAr6tbXA0KP5uXENDWfw5_VWj3PFbJxNxrhI0Bp9wDkE_0ThQ9AwlBirvTwFCCl39HGtxmb2zNOcp1ZtZLdNMDFTKWdIQAL6c" />
                    <div class="absolute inset-0 bg-gradient-to-r from-background via-background/60 to-transparent group-hover:opacity-40 transition-opacity"></div>
                    <div class="absolute inset-y-0 left-0 p-8 flex flex-col justify-center max-w-md">
                        <h3 class="font-headline-md text-headline-md mb-2">Pilates &amp; Wellness</h3>
                        <p class="font-body-sm text-body-sm text-secondary mb-4">Foco em mobilidade, postura e consciência corporal em um ambiente premium e exclusivo.</p>
                        <span class="flex items-center gap-2 text-primary-fixed font-label-lg text-label-lg group-hover:translate-x-2 transition-transform">Agendar Aula Experimental <span class="material-symbols-outlined">arrow_forward</span></span>
                    </div>
                </div>
            </div>
        </section>
        <!-- Pricing Grid -->
        <section class="bg-surface-container-low py-section-gap reveal" id="planos">
            <div class="px-gutter max-w-[1440px] mx-auto">
                <div class="text-center mb-16">
                    <h2 class="font-headline-lg text-headline-lg mb-4">Escolha seu Plano</h2>
                    <p class="font-body-md text-body-md text-secondary">Acesso total às melhores unidades do país.</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Mensal -->
                    <div class="bg-surface-container p-8 rounded-2xl border border-white/5 flex flex-col transition-all duration-300 plan-card-hover group">
                        <div class="mb-8">
                            <h3 class="font-headline-sm text-headline-sm mb-2 text-secondary group-hover:text-primary transition-colors">Mensal</h3>
                            <div class="flex items-baseline gap-1">
                                <span class="text-secondary font-label-lg">R$</span>
                                <span class="text-4xl font-extrabold text-primary">129</span>
                                <span class="text-secondary font-label-sm">/mês</span>
                            </div>
                        </div>
                        <ul class="space-y-4 mb-10 flex-grow">
                            <li class="flex items-center gap-3 font-body-sm text-body-sm text-secondary">
                                <span class="material-symbols-outlined text-primary-fixed">check_circle</span> Musculação Ilimitada
                            </li>
                            <li class="flex items-center gap-3 font-body-sm text-body-sm text-secondary">
                                <span class="material-symbols-outlined text-primary-fixed">check_circle</span> Área de Cardio
                            </li>
                            <li class="flex items-center gap-3 font-body-sm text-body-sm text-secondary">
                                <span class="material-symbols-outlined text-primary-fixed">check_circle</span> Armários Rotativos
                            </li>
                        </ul>
                        <button class="w-full py-4 rounded-lg border border-secondary text-primary font-label-lg text-label-lg hover:bg-white/5 transition-all">Selecionar Plano</button>
                    </div>
                    <!-- VIP Black (Featured) -->
                    <div class="bg-primary-container p-8 rounded-2xl border border-primary-fixed shadow-2xl scale-105 z-10 flex flex-col transition-all duration-300 plan-card-hover popular-card-glow">
                        <div class="flex justify-between items-start mb-8">
                            <div>
                                <h3 class="font-headline-sm text-headline-sm mb-2 text-on-primary-container">VIP Black</h3>
                                <div class="flex items-baseline gap-1">
                                    <span class="text-on-primary-container/70 font-label-lg">R$</span>
                                    <span class="text-5xl font-extrabold text-on-primary-container">199</span>
                                    <span class="text-on-primary-container/70 font-label-sm">/mês</span>
                                </div>
                            </div>
                            <span class="bg-on-primary-container text-primary-container px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-widest">Popular</span>
                        </div>
                        <ul class="space-y-4 mb-10 flex-grow">
                            <li class="flex items-center gap-3 font-body-sm text-body-sm text-on-primary-container font-medium">
                                <span class="material-symbols-outlined">stars</span> Todas as Modalidades
                            </li>
                            <li class="flex items-center gap-3 font-body-sm text-body-sm text-on-primary-container font-medium">
                                <span class="material-symbols-outlined">stars</span> Acesso Multi-Unidades
                            </li>
                            <li class="flex items-center gap-3 font-body-sm text-body-sm text-on-primary-container font-medium">
                                <span class="material-symbols-outlined">stars</span> Convide um amigo (5x/mês)
                            </li>
                            <li class="flex items-center gap-3 font-body-sm text-body-sm text-on-primary-container font-medium">
                                <span class="material-symbols-outlined">stars</span> Avaliação Bioimpedância
                            </li>
                        </ul>
                        <button class="w-full py-4 rounded-lg bg-on-primary-container text-primary-container font-headline-sm text-headline-sm hover:brightness-125 transition-all">Matricule-se Agora</button>
                    </div>
                    <!-- Semestral -->
                    <div class="bg-surface-container p-8 rounded-2xl border border-white/5 flex flex-col transition-all duration-300 plan-card-hover group">
                        <div class="mb-8">
                            <h3 class="font-headline-sm text-headline-sm mb-2 text-secondary group-hover:text-primary transition-colors">Semestral</h3>
                            <div class="flex items-baseline gap-1">
                                <span class="text-secondary font-label-lg">R$</span>
                                <span class="text-4xl font-extrabold text-primary">159</span>
                                <span class="text-secondary font-label-sm">/mês</span>
                            </div>
                        </div>
                        <ul class="space-y-4 mb-10 flex-grow">
                            <li class="flex items-center gap-3 font-body-sm text-body-sm text-secondary">
                                <span class="material-symbols-outlined text-primary-fixed">check_circle</span> Musculação + CrossFit
                            </li>
                            <li class="flex items-center gap-3 font-body-sm text-body-sm text-secondary">
                                <span class="material-symbols-outlined text-primary-fixed">check_circle</span> Sem taxa de matrícula
                            </li>
                            <li class="flex items-center gap-3 font-body-sm text-body-sm text-secondary">
                                <span class="material-symbols-outlined text-primary-fixed">check_circle</span> Aulas Coletivas
                            </li>
                        </ul>
                        <button class="w-full py-4 rounded-lg border border-secondary text-primary font-label-lg text-label-lg hover:bg-white/5 transition-all">Selecionar Plano</button>
                    </div>
                </div>
            </div>
        </section>
        <!-- Stats Section -->
        <section class="py-section-gap border-y border-white/5 reveal">
            <div class="px-gutter max-w-[1440px] mx-auto grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="text-center group">
                    <span class="block font-headline-xl text-headline-xl text-primary mb-2 group-hover:scale-110 transition-transform cursor-default">15+</span>
                    <span class="text-secondary font-label-lg uppercase tracking-widest">Unidades</span>
                </div>
                <div class="text-center group">
                    <span class="block font-headline-xl text-headline-xl text-primary-fixed mb-2 group-hover:scale-110 transition-transform cursor-default">50k+</span>
                    <span class="text-secondary font-label-lg uppercase tracking-widest">Membros</span>
                </div>
                <div class="text-center group">
                    <span class="block font-headline-xl text-headline-xl text-primary mb-2 group-hover:scale-110 transition-transform cursor-default">200+</span>
                    <span class="text-secondary font-label-lg uppercase tracking-widest">Personal Trainers</span>
                </div>
                <div class="text-center group">
                    <span class="block font-headline-xl text-headline-xl text-primary-fixed mb-2 group-hover:scale-110 transition-transform cursor-default">24h</span>
                    <span class="text-secondary font-label-lg uppercase tracking-widest">Funcionamento</span>
                </div>
            </div>
        </section>
    </main>
    <!-- Footer -->
    <footer class="bg-surface-container-lowest pt-section-gap pb-base" id="contato">
        <div class="max-w-[1440px] mx-auto px-gutter grid grid-cols-1 md:grid-cols-4 gap-12 mb-section-gap">
            <div class="col-span-1 md:col-span-1">
                <div class="flex items-center gap-2 mb-6 pulse-logo">
                    <span class="font-headline-sm text-headline-sm font-bold text-primary">Academia</span>
                    <span class="text-xs uppercase tracking-widest text-on-surface-variant font-label-sm border border-on-surface-variant/30 px-2 py-0.5 rounded">Pro</span>
                </div>
                <p class="text-secondary font-body-sm text-body-sm mb-6 max-w-xs">
                    Transformando vidas através do movimento e da alta performance. A rede de academias que mais cresce no Brasil.
                </p>
                <div class="flex gap-4">
                    <a class="w-10 h-10 rounded-full bg-surface-container-high flex items-center justify-center hover:bg-primary-container hover:text-on-primary-container transition-all hover:scale-110" href="#">
                        <svg class="w-5 h-5 fill-current" viewbox="0 0 24 24">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"></path>
                        </svg>
                    </a>
                    <a class="w-10 h-10 rounded-full bg-surface-container-high flex items-center justify-center hover:bg-primary-container hover:text-on-primary-container transition-all hover:scale-110" href="#">
                        <svg class="w-5 h-5 fill-current" viewbox="0 0 24 24">
                            <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="col-span-1">
                <h4 class="font-headline-sm text-headline-sm mb-6">Links Rápidos</h4>
                <ul class="space-y-3">
                    <li><a class="text-secondary hover:text-primary-fixed transition-colors font-body-sm" href="#">Unidades</a></li>
                    <li><a class="text-secondary hover:text-primary-fixed transition-colors font-body-sm" href="#">Horários</a></li>
                    <li><a class="text-secondary hover:text-primary-fixed transition-colors font-body-sm" href="#">Personal Trainers</a></li>
                    <li><a class="text-secondary hover:text-primary-fixed transition-colors font-body-sm" href="#">Carreiras</a></li>
                </ul>
            </div>
            <div class="col-span-1">
                <h4 class="font-headline-sm text-headline-sm mb-6">Suporte</h4>
                <ul class="space-y-3">
                    <li><a class="text-secondary hover:text-primary-fixed transition-colors font-body-sm" href="#">Central de Ajuda</a></li>
                    <li><a class="text-secondary hover:text-primary-fixed transition-colors font-body-sm" href="#">Termos de Uso</a></li>
                    <li><a class="text-secondary hover:text-primary-fixed transition-colors font-body-sm" href="#">Privacidade</a></li>
                    <li><a class="text-secondary hover:text-primary-fixed transition-colors font-body-sm" href="#">Trabalhe Conosco</a></li>
                </ul>
            </div>
            <div class="col-span-1">
                <h4 class="font-headline-sm text-headline-sm mb-6">Contato</h4>
                <ul class="space-y-3">
                    <li class="flex items-start gap-3 text-secondary font-body-sm">
                        <span class="material-symbols-outlined text-primary-fixed">location_on</span>
                        <span>Av. Paulista, 1000 - São Paulo, SP</span>
                    </li>
                    <li class="flex items-center gap-3 text-secondary font-body-sm">
                        <span class="material-symbols-outlined text-primary-fixed">call</span>
                        <span>(11) 99999-8888</span>
                    </li>
                    <li class="flex items-center gap-3 text-secondary font-body-sm">
                        <span class="material-symbols-outlined text-primary-fixed">mail</span>
                        <span>contato@academia-pro.com.br</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="max-w-[1440px] mx-auto px-gutter pt-base border-t border-white/5 flex flex-col md:flex-row justify-between items-center gap-4">
            <p class="text-on-surface-variant font-label-sm text-label-sm">© 2024 Academia Management Pro. Todos os direitos reservados.</p>
            <div class="flex gap-base">
                <img alt="Secure Shield" class="h-6 opacity-50 hover:opacity-100 transition-opacity" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBAIx1R96Q4izHNV0sLbWlhnWjvtSJiSxgIptOIPOgSYtLSznEPEmKqNUv28YkYjbj3Yj-sFcWhFF67tOnNJJueEWQkVFMs46XJ9oSSU_gmVKNhg-b39GKQRuUAbpMqOTaN4aiQe8W0GrDCjgC5EGpOI33nLIBY8o4A0EBCYcuo99vrZf_3-YjtFjjrqQBM3-BF1zI-R082qtF88wk2DuQITur5lRClK9Yxs5FZZaB6vtG0kL946l3kdvh7t-CfqfrKwyIBOABveOo" />
                <img alt="Encryption Shield" class="h-6 opacity-50 hover:opacity-100 transition-opacity" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA6XZqBN2c9OnntFzu2wblmHenCcVhOLflQbckcM0oMybELV3TPBpyAow_iw7G8Xq-r5UanHMGY7fj5UovEg0S3eJkFxy8ay-geldd4Fjh57i6350ZVXc8c2zHUCbDoHpTaT_E0ISnEMoI9PxpTq6--UJlBrC1QiSgEG5hfrON_X4lsTGna1io1bGzqMnkRWFKlWwZ4E7B4gSMPC-pp26xZFQ_Z7uLYztQbGxyVJZVPvDAAfjVazhvMo-Sx_ln-aUGnU2sFZWf7TLk" />
            </div>
        </div>
    </footer>
    <script>
        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    targetElement.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Scroll Reveal Implementation
        const revealCallback = (entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                    // Once animated, we can unobserve if we only want it once
                    // observer.unobserve(entry.target); 
                } else {
                    // Optional: remove class to animate again when scrolling back up
                    // entry.target.classList.remove('active');
                }
            });
        };

        const revealObserver = new IntersectionObserver(revealCallback, {
            threshold: 0.15,
            rootMargin: '0px 0px -50px 0px'
        });

        document.querySelectorAll('.reveal').forEach(el => {
            revealObserver.observe(el);
        });

        // Handle Reduced Motion preferences
        const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)');
        if (prefersReducedMotion.matches) {
            document.querySelectorAll('.reveal').forEach(el => el.classList.add('active'));
        }
    </script>
</body>

</html>