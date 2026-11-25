<?php

/** @var \Framework\Support\LinkGenerator $link */
/** @var \App\Models\Product[] $products */
/** @var \App\Models\Category[] $categories */
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
        <div class="flex flex-col lg:flex-row justify-between items-center lg:px-12 w-full">
            <div class="flex flex-col">
                <p class="text-xl lg:text-2xl font-bold text-center">Repasované produkty a príslušenstvo</p>
                <p id="products-count" class="text-sm font-bold text-gray-600"></p>
            </div>

            <!-- Dočasný presun na editovaciu stránku-->
            <a 
                href="<?= $link->url('category.index') ?>"
                class="bg-darkpurple text-white font-bold rounded-lg p-2">
                Editácia sortimentu
            </a>
        
            <div class="flex flex-row items-center justify-center mt-2 gap-x-4">
                <p>Filtrovať podľa kategórií</p>
                <!-- <i class="fa-solid fa-sliders text-2xl"></i> -->
                 <div class="flex flex-col items-center my-6 gap-2">
                    <select id="category-selector" class="p-2 border-2 rounded-lg cursor-pointer">
                        <option value="all">Všetky kategórie</option>
                        <?php foreach ($categories as $category) : ?>
                            <option value="<?= $category->getId() ?? 'none' ?>">
                                <?= htmlspecialchars($category->getName() ?? '') ?>
                            </option>
                        <?php endforeach; ?>
                    </select>

                    <p id="products-count" class="text-sm font-bold text-gray-600"></p>
                </div>
            </div>
        </div>

        <div id="product-container" class="flex flex-wrap justify-center mt-6 gap-16">
            <?php foreach ($products as $product) : ?>
                <?php if ($product->getCategoryId() != null) : ?>
                    <div data-category-id="<?= $product->getCategoryId() ?>" class="product flex flex-row justify-around">
                        <div class="w-96 h-max border border-3 border-gray-400 rounded-xl">
                            <div class="h-1/2 bg-white rounded-t-xl border-b-3 border-gray-400">
                            <img class="w-full h-32 object-contain" src="<?= $product->getImage() ?>">
                            </div>
                            <div class="flex flex-col h-1/2 p-3 bg-gray-200 rounded-b-xl">
                                <div class="w-fit px-2 bg-lightgreen/25 border-2 border-lightgreen rounded-xl">
                                    <p class="text-sm text-lightgreen font-bold"><?= $product->getCategory() ?></p>
                                </div>
                                <p class="mt-2"><?= $product->getName() ?></p>
                                <p class="h-8 text-sm"><?= $product->getParameters() ?></p>
                                <div class="flex-1 flex items-center justify-between mt-2">
                                    <p class="text-xl font-bold"><?= $product->getPrice() ?>€</p>
                                    <button class="px-2 py-1 bg-lightgreen text-sm text-white font-bold rounded-xl">Pridať do košíka</button>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </section>
</main>