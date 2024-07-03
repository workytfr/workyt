<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
@include('livewire.navbar') <!-- Inclure la navbar -->
<!-- Hero -->
<div class="relative overflow-hidden before:absolute before:top-0 before:start-1/2 before:bg-[url('https://preline.co/assets/svg/examples/polygon-bg-element.svg')] dark:before:bg-[url('https://preline.co/assets/svg/examples-dark/polygon-bg-element.svg')] before:bg-no-repeat before:bg-top before:bg-cover before:size-full before:-z-[1] before:transform before:-translate-x-1/2">
    <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 pt-24 pb-10">
        <!-- Announcement Banner -->
        <div class="flex justify-center">
            <a class="inline-flex items-center gap-x-2 bg-white border border-gray-200 text-sm text-gray-800 p-1 ps-3 rounded-full transition hover:border-gray-300 dark:bg-neutral-800 dark:border-neutral-700 dark:hover:border-neutral-600 dark:text-neutral-200" href="#">
                #Association loi 1901
                <span class="py-1.5 px-2.5 inline-flex justify-center items-center gap-x-2 rounded-full bg-gray-200 font-semibold text-sm text-gray-600 dark:bg-neutral-700 dark:text-neutral-400">
                <img src="{{ asset('img/home/buildings.svg') }}" alt="Building" class="w-5 h-5">
        </span>
            </a>
        </div>
        <!-- End Announcement Banner -->

        <!-- Title -->
        <div class="mt-5 max-w-2xl text-center mx-auto">
            <h1 class="block font-bold text-gray-800 text-4xl md:text-5xl lg:text-6xl dark:text-neutral-200">
                Plongez dans Workyt !
                <span class="bg-clip-text bg-gradient-to-tl from-blue-600 to-violet-600 text-transparent">La plate-forme d'apprentissage gratuite ...</span>
            </h1>
        </div>
        <!-- End Title -->

        <div class="mt-5 max-w-3xl text-center mx-auto">
            <p class="text-lg text-gray-600 dark:text-neutral-400"> Les ressources d'apprentissage gratuites sont au cœur de notre mission sociale, car nous pensons que les principaux obstacles au début de l'éducation sont l'accès, le manque de confiance et le coût.
            </p>
        </div>

        <!-- Buttons -->
        <div class="mt-8 gap-3 flex justify-center">
            <a class="inline-flex justify-center items-center gap-x-3 text-center bg-gradient-to-tl from-blue-600 to-violet-600 hover:from-violet-600 hover:to-blue-600 border border-transparent text-white text-sm font-medium rounded-md focus:outline-none focus:ring-1 focus:ring-gray-600 py-3 px-4 dark:focus:ring-offset-gray-800" href="#">
                Rejoindre le serveur Discord
                <x-bi-discord />
            </a>
        </div>
    </div>
</div>
<!-- End Hero -->
<!-- Icon Blocks -->
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
    <div class="max-w-4xl mx-auto">
        <!-- Grid -->
        <div class="grid md:grid-cols-2 gap-6 lg:gap-12">
            <div class="space-y-6 lg:space-y-10">
                <!-- Icon Block -->
                <div class="flex">
                    <svg class="flex-shrink-0 mt-2 size-8 text-gray-800 dark:text-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="18" height="10" x="3" y="11" rx="2"/><circle cx="12" cy="5" r="2"/><path d="M12 7v4"/><line x1="8" x2="8" y1="16" y2="16"/><line x1="16" x2="16" y1="16" y2="16"/></svg>
                    <div class="ms-5 sm:ms-8">
                        <h3 class="text-base sm:text-lg font-semibold text-gray-800 dark:text-neutral-200">
                            Forum communautaire
                        </h3>
                        <p class="mt-1 text-gray-600 dark:text-neutral-400">
                            L'espace d'entraide gratuit et illimité, Workyt aide les élèves à obtenir des explications.
                        </p>
                    </div>
                </div>
                <!-- End Icon Block -->

                <!-- Icon Block -->
                <div class="flex">
                    <svg class="flex-shrink-0 mt-2 size-8 text-gray-800 dark:text-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m7.5 4.27 9 5.15"/><path d="M21 8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16Z"/><path d="m3.3 7 8.7 5 8.7-5"/><path d="M12 22V12"/></svg>
                    <div class="ms-5 sm:ms-8">
                        <h3 class="text-base sm:text-lg font-semibold text-gray-800 dark:text-neutral-200">
                            Cours / Fiche de révision
                        </h3>
                        <p class="mt-1 text-gray-600 dark:text-neutral-400">
                            Développer des compétences pour une véritable évolution dans vos études.
                        </p>
                    </div>
                </div>
                <!-- End Icon Block -->

                <!-- Icon Block -->
                <div class="flex">
                    <svg class="flex-shrink-0 mt-2 size-8 text-gray-800 dark:text-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>
                    <div class="ms-5 sm:ms-8">
                        <h3 class="text-base sm:text-lg font-semibold text-gray-800 dark:text-neutral-200">
                           Le Blog
                        </h3>
                        <p class="mt-1 text-gray-600 dark:text-neutral-400">
                            Toute l'actualité sur le sujet Éducation. Consultez l'ensemble des articles, reportages, directs, photos et vidéos.
                        </p>
                    </div>
                </div>
                <!-- End Icon Block -->
            </div>
            <!-- End Col -->

            <div class="space-y-6 lg:space-y-10">
                <!-- Icon Block -->
                <div class="flex">
                    <svg class="flex-shrink-0 mt-2 size-8 text-gray-800 dark:text-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9H4.5a2.5 2.5 0 0 1 0-5H6"/><path d="M18 9h1.5a2.5 2.5 0 0 0 0-5H18"/><path d="M4 22h16"/><path d="M10 14.66V17c0 .55-.47.98-.97 1.21C7.85 18.75 7 20.24 7 22"/><path d="M14 14.66V17c0 .55.47.98.97 1.21C16.15 18.75 17 20.24 17 22"/><path d="M18 2H6v7a6 6 0 0 0 12 0V2Z"/></svg>
                    <div class="ms-5 sm:ms-8">
                        <h3 class="text-base sm:text-lg font-semibold text-gray-800 dark:text-neutral-200">
                            La gamification de l'apprentissage
                        </h3>
                        <p class="mt-1 text-gray-600 dark:text-neutral-400">
                            Apprendre en s'amusant, c'est possible ! Découvrez comment la gamification peut vous aider à apprendre plus vite.
                        </p>
                    </div>
                </div>
                <!-- End Icon Block -->

                <!-- Icon Block -->
                <div class="flex">
                    <svg class="flex-shrink-0 mt-2 size-8 text-gray-800 dark:text-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                    <div class="ms-5 sm:ms-8">
                        <h3 class="text-base sm:text-lg font-semibold text-gray-800 dark:text-neutral-200">
                            Un réseau d'echanges
                        </h3>
                        <p class="mt-1 text-gray-600 dark:text-neutral-400">
                            Partagez vos connaissances et échangez avec d'autres workeurs sur Workyt.
                        </p>
                    </div>
                </div>
                <!-- End Icon Block -->

                <!-- Icon Block -->
                <div class="flex">
                    <svg class="flex-shrink-0 mt-2 size-8 text-gray-800 dark:text-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 10v12"/><path d="M15 5.88 14 10h5.83a2 2 0 0 1 1.92 2.56l-2.33 8A2 2 0 0 1 17.5 22H4a2 2 0 0 1-2-2v-8a2 2 0 0 1 2-2h2.76a2 2 0 0 0 1.79-1.11L12 2h0a3.13 3.13 0 0 1 3 3.88Z"/></svg>
                    <div class="ms-5 sm:ms-8">
                        <h3 class="text-base sm:text-lg font-semibold text-gray-800 dark:text-neutral-200">
                            Plusieurs outils à votre disposition
                        </h3>
                        <p class="mt-1 text-gray-600 dark:text-neutral-400">
                            Utilisez les outils de Workyt pour améliorer votre apprentissage.
                        </p>
                    </div>
                </div>
                <!-- End Icon Block -->
            </div>
            <!-- End Col -->
        </div>
        <!-- End Grid -->
    </div>
</div>
<!-- End Icon Blocks -->
<!-- Features -->
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
    <!-- Grid -->
    <div class="md:grid md:grid-cols-2 md:items-center md:gap-12 xl:gap-32">
        <div>
            <img class="rounded-xl" src="{{ asset('img/home/workyt_woman_read.png') }}" alt="woman reading">
        </div>
        <!-- End Col -->

        <div class="mt-5 sm:mt-10 lg:mt-0">
            <div class="space-y-6 sm:space-y-8">
                <!-- Title -->
                <div class="space-y-2 md:space-y-4">
                    <h2 class="font-bold text-3xl lg:text-4xl text-gray-800 dark:text-neutral-200">
                        Rejoignez notre communauté grandissante
                    </h2>
                    <p class="text-gray-500 dark:text-neutral-500">
                        Le passage à l’e-learning marque une évolution significative dans l'histoire récente de l’éducation, entraînant des transformations profondes dans la pédagogie et dans l’utilisation des technologies pour soutenir l'apprentissage. De nouvelles méthodes éducatives émergent, promettant d'améliorer tant l'offre éducative que l'expérience d'apprentissage.
                    </p>
                </div>
                <!-- End Title -->

                <!-- List -->
                <ul class="space-y-2 sm:space-y-4">
                    <li class="flex space-x-3">
            <span class="mt-0.5 size-5 flex justify-center items-center rounded-full bg-blue-50 text-blue-600 dark:bg-blue-800/30 dark:text-blue-500">
              <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
            </span>

                        <span class="text-sm sm:text-base text-gray-500 dark:text-neutral-500">
              <span class="font-bold">Communauté</span> active
            </span>
                    </li>

                    <li class="flex space-x-3">
            <span class="mt-0.5 size-5 flex justify-center items-center rounded-full bg-blue-50 text-blue-600 dark:bg-blue-800/30 dark:text-blue-500">
              <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
            </span>

                        <span class="text-sm sm:text-base text-gray-500 dark:text-neutral-500">
                            Un espace de <span class="font-bold">partage</span> et d'<span class="font-bold">échange</span>
            </span>
                    </li>

                    <li class="flex space-x-3">
            <span class="mt-0.5 size-5 flex justify-center items-center rounded-full bg-blue-50 text-blue-600 dark:bg-blue-800/30 dark:text-blue-500">
              <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
            </span>

                        <span class="text-sm sm:text-base text-gray-500 dark:text-neutral-500">
                            <span class="font-bold">Ressources</span> d'apprentissage gratuites
            </span>
                    </li>
                </ul>
                <!-- End List -->
            </div>
        </div>
        <!-- End Col -->
    </div>
    <!-- End Grid -->
</div>
<!-- End Features -->
<!-- Testimonials -->
<div class="overflow-hidden bg-gray-800 dark:bg-neutral-950">
    <div class="relative max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <!-- Title -->
        <div class="max-w-2xl w-3/4 lg:w-1/2 mb-6 sm:mb-10 md:mb-16">
            <h2 class="text-2xl sm:text-3xl lg:text-4xl text-white font-semibold">
                Les petites choses que nos utilisateurs disent à propos de nous !!
            </h2>
        </div>
        <!-- End Title -->

        <!-- Grid -->
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Card -->
            <div class="flex h-auto">
                <div class="flex flex-col bg-white rounded-xl dark:bg-neutral-900">
                    <div class="flex-auto p-4 md:p-6">
                        <p class="text-base italic md:text-lg text-gray-800 dark:text-neutral-200">
                            C'est un excellent outil pour les étudiants qui veulent apprendre et s'améliorer. J'ai trouvé des ressources incroyables et des personnes formidables. Merci Workyt !
                        </p>
                    </div>

                    <div class="p-4 bg-gray-100 rounded-b-xl md:px-7 dark:bg-neutral-800">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <span class="inline-flex items-center justify-center size-[46px] rounded-full bg-gray-800 font-semibold text-white leading-none dark:bg-white dark:text-neutral-800">
                                    T
                                </span>
                            </div>

                            <div class="grow ms-3">
                                <p class="text-sm sm:text-base font-semibold text-gray-800 dark:text-neutral-200">
                                    Thomas
                                </p>
                                <p class="text-xs text-gray-500 dark:text-neutral-400">
                                    Ancien bénévole | Workyt
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div class="flex h-auto">
                <div class="flex flex-col bg-white rounded-xl dark:bg-neutral-900">
                    <div class="flex-auto p-4 md:p-6">
                        <p class="text-base italic md:text-lg text-gray-800 dark:text-neutral-200">
                            Un site en construction, ils proposent pas mal de services comme : l'aide aux exercices, des fiches de révision ou cours, un blog d'actualité, conseils et méthodes. Très ravi de ce site, j'attend toujours la version finale du site ;) !
                        </p>
                    </div>

                    <div class="p-4 bg-gray-100 rounded-b-xl md:px-7 dark:bg-neutral-800">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <span class="inline-flex items-center justify-center size-[46px] rounded-full bg-gray-800 font-semibold text-white leading-none dark:bg-white dark:text-neutral-800">
                                    M
                                </span>
                            </div>

                            <div class="grow ms-3">
                                <p class="text-sm sm:text-base font-semibold text-gray-800 dark:text-neutral-200">
                                    Mouloud
                                </p>
                                <p class="text-xs text-gray-500 dark:text-neutral-400">
                                    Utilisateur | Workyt
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div class="flex h-auto">
                <div class="flex flex-col bg-white rounded-xl dark:bg-neutral-900">
                    <div class="flex-auto p-4 md:p-6">
                        <p class="text-base italic md:text-lg text-gray-800 dark:text-neutral-200">
                            Très content du service proposé. J'adore ! Je recommande vivement Workyt pour les étudiants qui veulent apprendre et s'améliorer.
                        </p>
                    </div>

                    <div class="p-4 bg-gray-100 rounded-b-xl md:px-7 dark:bg-neutral-800">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <span class="inline-flex items-center justify-center size-[46px] rounded-full bg-gray-800 font-semibold text-white leading-none dark:bg-white dark:text-neutral-800">
                                    N
                                </span>
                            </div>

                            <div class="grow ms-3">
                                <p class="text-sm sm:text-base font-semibold text-gray-800 dark:text-neutral-200">
                                    Nicolas
                                </p>
                                <p class="text-xs text-gray-500 dark:text-neutral-400">
                                    Utilisateur | Workyt
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Card -->
        </div>
        <!-- End Grid -->

        <!-- Grid -->
        <div class="mt-20 grid gap-6 grid-cols-2 sm:gap-12 lg:grid-cols-3 lg:gap-8">
            <!-- Stats -->
            <div>
                <h4 class="text-lg sm:text-xl font-semibold text-white">Nombre de bénévoles</h4>
                <p class="mt-2 sm:mt-3 text-4xl sm:text-6xl font-bold text-blue-500">90+</p>
                <p class="mt-1 text-gray-400">engagés pour vous aider</p>
            </div>
            <!-- End Stats -->

            <!-- Stats -->
            <div>
                <h4 class="text-lg sm:text-xl font-semibold text-white">Nombre d'impressions</h4>
                <p class="mt-2 sm:mt-3 text-4xl sm:text-6xl font-bold text-blue-500">1 500+</p>
                <p class="mt-1 text-gray-400">par mois</p>
            </div>
            <!-- End Stats -->

            <!-- Stats -->
            <div>
                <h4 class="text-lg sm:text-xl font-semibold text-white">Taux de réponses</h4>
                <p class="mt-2 sm:mt-3 text-4xl sm:text-6xl font-bold text-blue-500">75%</p>
                <p class="mt-1 text-gray-400">sur le forum</p>
            </div>
            <!-- End Stats -->
        </div>
        <!-- End Grid -->

        <!-- SVG Element -->
        <div class="absolute bottom-0 end-0 transform lg:translate-x-32" aria-hidden="true">
            <svg class="w-40 h-auto sm:w-72" width="1115" height="636" viewBox="0 0 1115 636" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0.990203 279.321C-1.11035 287.334 3.68307 295.534 11.6966 297.634L142.285 331.865C150.298 333.965 158.497 329.172 160.598 321.158C162.699 313.145 157.905 304.946 149.892 302.845L33.8132 272.418L64.2403 156.339C66.3409 148.326 61.5475 140.127 53.5339 138.026C45.5204 135.926 37.3213 140.719 35.2207 148.733L0.990203 279.321ZM424.31 252.289C431.581 256.26 440.694 253.585 444.664 246.314C448.635 239.044 445.961 229.931 438.69 225.96L424.31 252.289ZM23.0706 296.074C72.7581 267.025 123.056 230.059 187.043 212.864C249.583 196.057 325.63 198.393 424.31 252.289L438.69 225.96C333.77 168.656 249.817 164.929 179.257 183.892C110.144 202.465 54.2419 243.099 7.92943 270.175L23.0706 296.074Z" fill="currentColor" class="fill-orange-500"/>
                <path d="M451.609 382.417C446.219 388.708 446.95 398.178 453.241 403.567L555.763 491.398C562.054 496.788 571.524 496.057 576.913 489.766C582.303 483.474 581.572 474.005 575.281 468.615L484.15 390.544L562.222 299.413C567.612 293.122 566.881 283.652 560.59 278.263C554.299 272.873 544.829 273.604 539.44 279.895L451.609 382.417ZM837.202 559.655C841.706 566.608 850.994 568.593 857.947 564.09C864.9 559.586 866.885 550.298 862.381 543.345L837.202 559.655ZM464.154 407.131C508.387 403.718 570.802 395.25 638.136 410.928C704.591 426.401 776.318 465.66 837.202 559.655L862.381 543.345C797.144 442.631 718.724 398.89 644.939 381.709C572.033 364.734 504.114 373.958 461.846 377.22L464.154 407.131Z" fill="currentColor" class="fill-cyan-500"/>
                <path d="M447.448 0.194357C439.203 -0.605554 431.87 5.43034 431.07 13.6759L418.035 148.045C417.235 156.291 423.271 163.623 431.516 164.423C439.762 165.223 447.095 159.187 447.895 150.942L459.482 31.5025L578.921 43.0895C587.166 43.8894 594.499 37.8535 595.299 29.6079C596.099 21.3624 590.063 14.0296 581.818 13.2297L447.448 0.194357ZM1086.03 431.727C1089.68 439.166 1098.66 442.239 1106.1 438.593C1113.54 434.946 1116.62 425.96 1112.97 418.521L1086.03 431.727ZM434.419 24.6572C449.463 42.934 474.586 81.0463 521.375 116.908C568.556 153.07 637.546 187.063 742.018 200.993L745.982 171.256C646.454 157.985 582.444 125.917 539.625 93.0974C496.414 59.978 474.537 26.1903 457.581 5.59138L434.419 24.6572ZM742.018 200.993C939.862 227.372 1054.15 366.703 1086.03 431.727L1112.97 418.521C1077.85 346.879 956.138 199.277 745.982 171.256L742.018 200.993Z" fill="currentColor" class="fill-white"/>
            </svg>
        </div>
        <!-- End SVG Element -->
    </div>
</div>
<!-- End Testimonials -->
</body>
</html>
