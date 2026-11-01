<?php

/** @var \Framework\Support\LinkGenerator $link */
?>

<main class="flex flex-col lg:flex-row">
    <!-- Side panel [SECTION] [LARGE SCREENS] -->
    <section class="hidden lg:flex flex-col items-center w-1/4 bg-darkpurple">
        <div class="flex flex-col items-center w-3/4 mt-6 p-2 bg-lightpurple rounded-xl">
            <p class="text-white text-lg xl:text-2xl text-center font-bold">Aktuálny stav bodov</p>
            <p class="text-vibrantgreen text-lg xl:text-xl font-bold">145b (Úroveň 2)</p>
        </div>

        <button class="flex w-5/6 h-18 mt-12 py-1 items-center bg-lightpurple rounded-xl">
            <i class="fa-solid fa-grip ml-2 text-4xl text-white"></i>
            <span class="ml-2 text-white text-2xl text-left font-bold">Prehľad</span>
        </button>
        <button class="flex w-5/6 h-18 mt-6 py-2 items-center bg-lightpurple rounded-xl">
            <i class="fa-solid fa-box-open ml-2 text-4xl text-white"></i>
            <span class="ml-2 text-white text-2xl text-left font-bold">História objednávok</span>
        </button>
        <button class="flex w-5/6 h-18 mt-6 py-1 items-center bg-lightpurple rounded-xl">
            <i class="fa-solid fa-user ml-2 text-4xl text-white"></i>
            <span class="ml-2 text-white text-2xl text-left font-bold">Profil a nastavenia</span>
        </button>
        
        <div class="w-full h-1 mt-auto bg-lightpurple"></div>

        <button class="flex w-5/6 h-18 mt-6 items-center bg-lightpurple rounded-xl">
            <i class="fa-solid fa-arrow-left-long ml-4 text-4xl text-white"></i>
            <span class="ml-4 text-white text-2xl text-left font-bold">Hlavná stránka</span>
        </button>     
    </section>

    <!-- Menu [SMALL SCREENS] -->
    <details class="lg:hidden w-full flex flex-col-reverse bg-darkpurple max-h-screen overflow-y-auto">
        <summary class="flex items-center justify-between h-10 px-6 py-3 text-white font-bold cursor-pointer list-none">
            <span>Menu</span>
            <i class="fa-solid fa-bars text-2xl"></i>
        </summary>

        <div class="flex flex-col items-center pb-6">
            <div class="flex flex-col items-center w-3/4 my-6 p-2 bg-lightpurple rounded-xl">
                <p class="text-white text-xl font-bold">Aktuálny stav bodov</p>
                <p class="text-vibrantgreen font-bold">145b (Úroveň 2)</p>
            </div>

            <button class="flex w-5/6 mt-4 py-2 items-center bg-lightpurple rounded-xl">
                <i class="fa-solid fa-grip ml-2 text-3xl text-white"></i>
                <span class="ml-2 text-white text-xl font-bold">Prehľad</span>
            </button>
            <button class="flex w-5/6 mt-4 py-2 items-center bg-lightpurple rounded-xl">
                <i class="fa-solid fa-box-open ml-2 text-3xl text-white"></i>
                <span class="ml-2 text-white text-xl font-bold">História objednávok</span>
            </button>
            <button class="flex w-5/6 mt-4 py-2 items-center bg-lightpurple rounded-xl">
                <i class="fa-solid fa-user ml-2 text-3xl text-white"></i>
                <span class="ml-2 text-white text-xl font-bold">Profil a nastavenia</span>
            </button>

            <div class="w-full h-1 mt-6 bg-lightpurple"></div>

            <button class="flex w-5/6 mt-4 py-2 items-center bg-lightpurple rounded-xl">
                <i class="fa-solid fa-arrow-left-long ml-4 text-3xl text-white"></i>
                <span class="ml-4 text-white text-xl font-bold">Hlavná stránka</span>
            </button>
        </div>
    </details>

    <!-- Main panel -->
    <section class="flex flex-col items-center w-full lg:w-3/4">

        <div class="flex flex-col w-11/12 lg:w-3/4 h-36 mt-8 items-center justify-center bg-darkpurple rounded-3xl">
            <p class="text-vibrantgreen text-3xl lg:text-5xl font-bold">Zákaznícky portál</p>
            <p class="mt-6 text-white text-xl lg:text-3xl text-center font-bold">Vitajte späť, Ferdinand Fridrich!</p>
        </div>

        <button class="py-2 px-6 lg:px-20 mt-6 text-white text-xl lg:text-3xl font-bold bg-lightgreen rounded-3xl">Objednať servis/výkup</button>

        <!-- Order section -->
        <div class="w-3/4">
            <div class="flex justify-center w-full lg:w-3/6 mt-8 py-2 bg-darkpurple rounded-2xl">
                <p class="text-white text-lg lg:text-2xl font-bold">[2] Aktívne objednávky</p>
            </div>

            <!-- Service order -->
            <div class="w-full h-min my-3 px-4 py-3 bg-white border border-darkpurple rounded-2xl">

                <div class="flex flex-col lg:flex-row lg:items-center gap-y-2">
                    <p class="lg:flex-1 text-xl lg:text-2xl font-bold">Servis zariadenia</p>
                    <p class="w-fit px-3 text-sm lg:text-base text-orange-400 font-medium bg-orange-200/50 border border-orange-400 rounded-2xl">
                        Čaká na schválenie zákazníkom
                    </p>
                    <p class="lg:flex-1 lg:text-right text-lg xl:text-2xl font-medium">ID: #SRV-002-26</p>
                </div>

                <div class="w-full my-2 h-0.5 bg-darkpurple"></div>

                <div class="flex flex-col md:flex-row gap-y-3 md:gap-x-6">
                    <div class="md:w-1/2">
                        <p class="text-gray-500">Zariadenie:</p>
                        <p>Notebook Lenovo ThinkPad T480</p>
                    </div>
                    <div class="md:w-1/2">
                        <p class="text-gray-500">Popis problému:</p>
                        <p>Počítač sa samovoľne reštartuje pri záťaži a nenabíja batériu.</p>
                    </div>
                </div>

                <div class="flex flex-col lg:flex-row lg:items-center w-full mt-3 px-4 py-3 gap-y-3 lg:gap-x-4 bg-gray-300 border border-darkpurple rounded-2xl">
                    <div class="lg:flex-1">
                        <p class="text-lg font-medium">Cenová ponuka:</p>
                        <div class="flex flex-col sm:flex-row sm:items-center sm:gap-x-2">
                            <p>Výmena napájacieho konektora + vyčistenie chladenia:</p>
                            <p class="text-xl text-lightgreen font-medium">45.00€</p>
                        </div>
                    </div>
                    <div class="flex flex-col sm:flex-row gap-y-2 sm:gap-x-4">
                        <button class="bg-vibrantgreen px-4 py-2 lg:py-1 text-white text-lg font-bold rounded-2xl">Prijať ponuku</button>
                        <button class="bg-red-500 px-4 py-2 lg:py-1 text-white text-lg font-bold rounded-2xl">Odstúpiť / Vrátiť</button>
                    </div>
                </div>
            </div>



            <!-- Purchase order -->
            <div class="w-full h-min mt-4 px-4 py-3 md:pb-0 bg-white border border-darkpurple rounded-2xl">

                <div class="flex flex-col lg:flex-row lg:items-center gap-y-2">
                    <p class="lg:flex-1 text-xl lg:text-2xl font-bold">Výkup zariadenia</p>
                    <p class="w-fit px-3 text-sm lg:text-base text-orange-400 font-medium bg-orange-200/50 border border-orange-400 rounded-2xl">
                        Čaká na doručenie k nám
                    </p>
                    <p class="lg:flex-1 lg:text-right text-lg xl:text-2xl font-medium">ID: #VYK-014-26</p>
                </div>

                <div class="w-full my-2 h-0.5 bg-darkpurple"></div>

                <div class="flex flex-col md:flex-row gap-y-3 md:gap-x-6">
                    <div class="md:w-1/2">
                        <p class="text-gray-500">Zariadenie:</p>
                        <p>Notebook HP ProBook 450 G6</p>
                    </div>
                    <div class="md:w-1/2">
                        <p class="text-gray-500">Popis problému:</p>
                        <p>Kuriér GLS vyzdvihne zariadenie u vás dňa 20.10.2026. Prosíme vás o zabalenie zariadenia do krabice a nalepenie prepravného štítku.</p>
                    </div>
                </div>

                <div class="flex flex-col md:flex-row md:justify-center my-3 gap-y-2 md:gap-y-0 md:gap-x-4 lg:gap-x-12">
                    <button class="text-white bg-darkpurple px-6 py-2 md:py-1 rounded-xl">Zmeniť termín vyzdvihnutia</button>
                    <button class="text-white bg-vibrantgreen px-6 py-2 md:py-1 rounded-xl">Stiahnúť prepravný štítok</button>
                    <button class="text-white bg-red-500 px-6 py-2 md:py-1 rounded-xl">Zrušiť výkup zariadenia</button>
                </div>
            </div>
        </div>

        <!-- Stats -->
        <div class="flex justify-around w-3/4 h-min mt-4 bg-gray-200 rounded-t-xl">
            <div class="flex flex-col items-center p-4">
                <i class="fa-solid fa-truck p-1 text-xl lg:text-3xl"></i>
                <p class="flex items-center justify-center h-16 text-sm lg:text-xl text-center font-medium">Dokončené objednávky</p>
                <p class="text-vibrantgreen text-xl lg:text-2xl font-bold">5</p>
            </div>

            <div class="flex flex-col items-center p-4">
                <i class="fa-solid fa-wallet p-1 text-xl lg:text-3xl"></i>
                <p class="flex items-center justify-center h-16 text-sm lg:text-xl text-center font-medium">Vykúpené zariadenia</p>
                <p class="text-vibrantgreen text-xl lg:text-2xl font-bold">1</p>
            </div>

            <div class="flex flex-col items-center p-4">
                <i class="fa-regular fa-gem p-1 text-xl lg:text-3xl"></i>
                <p class="flex items-center justify-center h-16 text-sm lg:text-xl text-center font-medium">Ušetrené vďaka bodom</p>
                <p class="text-vibrantgreen text-xl lg:text-2xl font-bold">5,43€</p>
            </div>
        </div>
    </section>
</main>