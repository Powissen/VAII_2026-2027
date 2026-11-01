<?php

/** @var \Framework\Support\LinkGenerator $link */
?>

<main class="flex flex-col items-center mt-6">
    <!-- Service banner [SECTION] -->
    <section class="flex flex-col items-center w-full lg:w-11/12 h-min mx-16 p-6 bg-darkpurple rounded-lg">
    <div class="flex flex-col lg:flex-row justify-between w-full">
        <p class="lg:hidden self-center text-xl xl:text-3xl text-center text-white font-bold">Rýchly a spoľahlivý servis počítačov <br>a výkup zariadení.</p>
        <p class="hidden lg:block self-center text-lg lg:text-xl xl:text-2xl 2xl:text-3xl text-center text-white font-bold">Rýchly a spoľahlivý servis počítačov a výkup zariadení.</p>
        <div class="flex flex-row justify-center mt-6 space-x-4">
        <button class="py-2 px-6 bg-vibrantgreen text-sm xl:text-lg text-white font-bold rounded-2xl">Objednať servis <br>zariadenia</button>
        <button class="py-2 px-6 bg-lightgreen text-sm xl:text-lg text-white font-bold rounded-2xl">Sledovať stav <br>objednávky</button>            
        </div>
    </div>

    <div class="w-11/12 h-1 my-6 bg-[#58546C]"></div>

    <div class="flex flex-col lg:flex-row items-center lg:justify-between w-11/12 2xl:w-3/4 h-full py-2 gap-x-16 gap-y-6 lg:gap-y-0">
        <div class="w-11/12 lg:w-1/3 p-6 bg-[#3F3F53] text-white border border-4 rounded-xl border-[#51507B]">
        <h3 class="text-center text-2xl font-bold">Bezplatný zvoz kuriérom</h3>
        <p class="mt-6">Vyzdvihneme vaše zariadenie, vykonáme diagnostiku a ponúkneme transparentnú cenovú ponuku pred opravou.</p>
        </div>

        <div class="w-11/12 lg:w-1/3 p-6 bg-[#3F3F53] text-white border border-4 rounded-xl border-[#51507B]">
        <h3 class="text-center text-2xl font-bold">Výkup za hotovosť</h3>
        <p class="mt-6">Máte staré, nefunkčné alebo nepotrebné zariadenie? Odkúpime ho za férovú čiastku alebo ponúkneme protiúčet.</p>
        </div>

        <div class="w-11/12 lg:w-1/3 p-6 bg-[#3F3F53] text-white border border-4 rounded-xl border-[#51507B]">
        <h3 class="text-center text-2xl font-bold">Prehľad v reálnom čase</h3>
        <p class="mt-6">Schvaľujte cenové ponuky online, komunikujte s technikom a sledujte aktuálny stav opravy vo vašom účte.</p>
        </div>
    </div>
    </section>

    <!-- Online shop [SECTION] -->
    <section class="flex flex-col w-full my-12">
        <div class="flex flex-col lg:flex-row justify-between lg:px-12 w-full">
            <p class="text-xl lg:text-2xl font-bold text-center">Repasované produkty a príslušenstvo</p>
            <div class="flex flex-row items-center justify-center mt-2 gap-x-4">
            <p>Filtrovať podľa kategórií</p>
            <i class="fa-solid fa-sliders text-2xl"></i>
            </div>
        </div>

        <div class="flex flex-wrap justify-center mt-6 gap-16">
            <!-- 1: Notebook -->
            <div class="flex flex-row justify-around">
            <div class="w-96 h-80 border border-3 border-gray-400 rounded-xl">
                <div class="h-1/2 bg-white rounded-t-xl border-b-3 border-gray-400">
                <img class="w-full h-32 object-contain"  src="<?= $link->asset('images/refurbished.png') ?>">
                </div>
                <div class="flex flex-col h-1/2 p-3 bg-gray-200 rounded-b-xl">
                <div class="w-fit px-2 bg-lightgreen/25 border-2 border-lightgreen rounded-xl">
                    <p class="text-sm text-lightgreen font-bold">Notebook</p>
                </div>
                <p class="mt-2">Lenovo ThinkPad T480 i5</p>
                <p class="h-8 text-sm">Intel Core i5, 16GB RAM, 512GB SSD, Windows 11 Pro</p>
                <div class="flex-1 flex items-center justify-between mt-2">
                    <p class="text-xl font-bold">349.00€</p>
                    <button class="px-2 py-1 bg-lightgreen text-sm text-white font-bold rounded-xl">Pridať do košíka</button>
                </div>
                </div>
            </div>
            </div>

            <!-- 2: Stolný počítač -->
            <div class="flex flex-row h-max justify-around">
            <div class="w-96 h-80 border border-3 border-gray-400 rounded-xl">
                <div class="h-1/2 bg-white rounded-t-xl border-b-3 border-gray-400">
                <img class="w-full h-32 object-contain"  src="<?= $link->asset('images/refurbished.png') ?>">
                </div>
                <div class="flex flex-col h-1/2 p-3 bg-gray-200 rounded-b-xl">
                <div class="w-fit px-2 bg-lightgreen/25 border-2 border-lightgreen rounded-xl">
                    <p class="text-sm text-lightgreen font-bold">Stolný počítač</p>
                </div>
                <p class="mt-2">Dell OptiPlex 7050 SFF</p>
                <p class="h-8 text-sm">Intel Core i7-7700, 16GB RAM, 256GB SSD, Windows 11 Pro</p>
                <div class="flex-1 flex items-center justify-between mt-2">
                    <p class="text-xl font-bold">279.00€</p>
                    <button class="px-2 py-1 bg-lightgreen text-sm text-white font-bold rounded-xl">Pridať do košíka</button>
                </div>
                </div>
            </div>
            </div>

            <!-- 3: Grafická karta -->
            <div class="flex flex-row justify-around">
            <div class="w-96 h-80 border border-3 border-gray-400 rounded-xl">
                <div class="h-1/2 bg-white rounded-t-xl border-b-3 border-gray-400">
                <img class="w-full h-32 object-contain"  src="<?= $link->asset('images/refurbished.png') ?>">
                </div>
                <div class="flex flex-col h-1/2 p-3 bg-gray-200 rounded-b-xl">
                <div class="w-fit px-2 bg-lightgreen/25 border-2 border-lightgreen rounded-xl">
                    <p class="text-sm text-lightgreen font-bold">Grafická karta</p>
                </div>
                <p class="mt-2">NVIDIA GeForce GTX 1660 Super</p>
                <p class="h-8 text-sm">6GB GDDR6, 3× DisplayPort, HDMI, PCIe 3.0 x16</p>
                <div class="flex-1 flex items-center justify-between mt-2">
                    <p class="text-xl font-bold">129.00€</p>
                    <button class="px-2 py-1 bg-lightgreen text-sm text-white font-bold rounded-xl">Pridať do košíka</button>
                </div>
                </div>
            </div>
            </div>

            <!-- 4: Monitor -->
            <div class="flex flex-row justify-around">
            <div class="w-96 h-80 border border-3 border-gray-400 rounded-xl">
                <div class="h-1/2 bg-white rounded-t-xl border-b-3 border-gray-400">
                <img class="w-full h-32 object-contain"  src="<?= $link->asset('images/refurbished.png') ?>">
                </div>
                <div class="flex flex-col h-1/2 p-3 bg-gray-200 rounded-b-xl">
                <div class="w-fit px-2 bg-lightgreen/25 border-2 border-lightgreen rounded-xl">
                    <p class="text-sm text-lightgreen font-bold">Monitor</p>
                </div>
                <p class="mt-2">Dell UltraSharp U2419H</p>
                <p class="h-8 text-sm">24", Full HD IPS, HDMI, DisplayPort, výškovo nastaviteľný stojan</p>
                <div class="flex-1 flex items-center justify-between mt-2">
                    <p class="text-xl font-bold">119.00€</p>
                    <button class="px-2 py-1 bg-lightgreen text-sm text-white font-bold rounded-xl">Pridať do košíka</button>
                </div>
                </div>
            </div>
            </div>

            <!-- 5: Notebook -->
            <div class="flex flex-row justify-around">
            <div class="w-96 h-80 border border-3 border-gray-400 rounded-xl">
                <div class="h-1/2 bg-white rounded-t-xl border-b-3 border-gray-400">
                <img class="w-full h-32 object-contain"  src="<?= $link->asset('images/refurbished.png') ?>">
                </div>
                <div class="flex flex-col h-1/2 p-3 bg-gray-200 rounded-b-xl">
                <div class="w-fit px-2 bg-lightgreen/25 border-2 border-lightgreen rounded-xl">
                    <p class="text-sm text-lightgreen font-bold">Notebook</p>
                </div>
                <p class="mt-2">HP EliteBook 840 G5</p>
                <p class="h-8 text-sm">Intel Core i5-8350U, 8GB RAM, 256GB SSD, 14" Full HD</p>
                <div class="flex-1 flex items-center justify-between mt-2">
                    <p class="text-xl font-bold">299.00€</p>
                    <button class="px-2 py-1 bg-lightgreen text-sm text-white font-bold rounded-xl">Pridať do košíka</button>
                </div>
                </div>
            </div>
            </div>

            <!-- 6: SSD disk -->
            <div class="flex flex-row justify-around">
            <div class="w-96 h-80 border border-3 border-gray-400 rounded-xl">
                <div class="h-1/2 bg-white rounded-t-xl border-b-3 border-gray-400">
                <img class="w-full h-32 object-contain"  src="<?= $link->asset('images/refurbished.png') ?>">
                </div>
                <div class="flex flex-col h-1/2 p-3 bg-gray-200 rounded-b-xl">
                <div class="w-fit px-2 bg-lightgreen/25 border-2 border-lightgreen rounded-xl">
                    <p class="text-sm text-lightgreen font-bold">SSD disk</p>
                </div>
                <p class="mt-2">Samsung 970 EVO Plus 1TB</p>
                <p class="h-8 text-sm">NVMe M.2, rýchlosť čítania až 3500 MB/s</p>
                <div class="flex-1 flex items-center justify-between mt-2">
                    <p class="text-xl font-bold">79.00€</p>
                    <button class="px-2 py-1 bg-lightgreen text-sm text-white font-bold rounded-xl">Pridať do košíka</button>
                </div>
                </div>
            </div>
            </div>

            <!-- 7: Klávesnica -->
            <div class="flex flex-row justify-around">
            <div class="w-96 h-80 border border-3 border-gray-400 rounded-xl">
                <div class="h-1/2 bg-white rounded-t-xl border-b-3 border-gray-400">
                <img class="w-full h-32 object-contain"  src="<?= $link->asset('images/refurbished.png') ?>">
                </div>
                <div class="flex flex-col h-1/2 p-3 bg-gray-200 rounded-b-xl">
                <div class="w-fit px-2 bg-lightgreen/25 border-2 border-lightgreen rounded-xl">
                    <p class="text-sm text-lightgreen font-bold">Príslušenstvo</p>
                </div>
                <p class="mt-2">Logitech K380 Multi-Device</p>
                <p class="h-8 text-sm">Bluetooth klávesnica, tichý chod, párovanie až 3 zariadení, SK/CZ</p>
                <div class="flex-1 flex items-center justify-between mt-2">
                    <p class="text-xl font-bold">39.00€</p>
                    <button class="px-2 py-1 bg-lightgreen text-sm text-white font-bold rounded-xl">Pridať do košíka</button>
                </div>
                </div>
            </div>
            </div>

            <!-- 8: Dokovacia stanica -->
            <div class="flex flex-row justify-around">
            <div class="w-96 h-80 border border-3 border-gray-400 rounded-xl">
                <div class="h-1/2 bg-white rounded-t-xl border-b-3 border-gray-400">
                <img class="w-full h-32 object-contain"  src="<?= $link->asset('images/refurbished.png') ?>">
                </div>
                <div class="flex flex-col h-1/2 p-3 bg-gray-200 rounded-b-xl">
                <div class="w-fit px-2 bg-lightgreen/25 border-2 border-lightgreen rounded-xl">
                    <p class="text-sm text-lightgreen font-bold">Príslušenstvo</p>
                </div>
                <p class="mt-2">Lenovo ThinkPad USB-C Dock Gen 2</p>
                <p class="h-8 text-sm">2× DisplayPort, HDMI, Ethernet, 4× USB, nabíjanie notebooku</p>
                <div class="flex-1 flex items-center justify-between mt-2">
                    <p class="text-xl font-bold">89.00€</p>
                    <button class="px-2 py-1 bg-lightgreen text-sm text-white font-bold rounded-xl">Pridať do košíka</button>
                </div>
                </div>
            </div>
            </div>
        </div>
    </section>
</main>