<?php

/** @var \Framework\Support\LinkGenerator $link */
/** @var \App\Models\Product|null $product */
/** @var \App\Models\Category[] $categories */
?>

<div class="flex flex-col w-full items-center">
    <h1 class="mt-6 text-3xl font-bold"><?= $product !== null ? 'Úprava produktu' : 'Pridanie nového produktu' ?></h1>
    <h2 class="text-2xl font-bold"><?= $product !== null ? 'v databáze' : 'do databázy' ?></h2>
    <form action="<?= $link->url('product.add') ?>" method="post" class="flex flex-col w-1/4 items-center mt-6 p-6 mb-10 border border-2 rounded-lg">

        <!-- ID Produktu (skryté - pre editáciu) -->
        <?php if ($product !== null): ?>
            <input type="hidden" name="id" value="<?= $product->getId() ?>">
        <?php endif; ?>

        <!-- Názov produktu -->
        <span>Názov produktu</span>
        <input 
            type="text" 
            name="name" 
            required 
            placeholder="Dell Optiplex ...."
            value="<?= $product?->getName() ?? '' ?>"
            class="w-full border-2 rounded-lg" 
        />

        <!-- Hlavné parametre -->
        <span class="mt-8">Hlavné parametre</span>
        <input 
            type="text" 
            name="parameters" 
            required 
            placeholder="Intel Core i5, 16GB RAM ...."
            value="<?= $product?->getParameters() ?? '' ?>"
            class="w-full border-2 rounded-lg mb-6" 
        />

        <!-- Popis -->
        <span class="mt-8">Popis produktu</span>
        <textarea 
            name="description" 
            placeholder="Intel Core i5, 16GB RAM ...."
            class="w-full border-2 rounded-lg mb-6"><?= $product?->getDescription() ?? '' ?></textarea>

        <!-- Kategória -->
        <span class="mt-8">Kategória produktu</span>
        <select 
            name="category_id" 
            class="w-full p-2 border border-2 rounded-lg cursor-pointer">
            <?php foreach ($categories as $category) : ?>
                <option 
                    value="<?= $category->getId() ?>" 
                    <?= $product && $product->getCategoryId() == $category->getId() ? 'selected' : '' ?>
                >
                    <?= $category->getName() ?>
                </option>
            <?php endforeach; ?>
        </select>

        <!-- Cena -->
        <span class="mt-8">Cena produktu (€)</span>
        <input 
            type="number"
            step="0.01" 
            name="price" 
            required 
            placeholder="149.60 ..."
            value="<?= $product?->getPrice() ?? '' ?>"
            class="w-full border-2 rounded-lg mb-6" 
        />

        <!-- Obrázok -->
        <span class="mt-8">URL obrázku</span>
        <input 
            type="text" 
            name="image" 
            required 
            placeholder="https:// ..."
            value="<?= $product?->getImage() ?? '' ?>"
            class="w-full border-2 rounded-lg mb-6" 
        />

        <!-- Potvrdenie pridania -->
        <button type="submit" class="w-full mt-6 py-2 bg-vibrantgreen text-white font-bold rounded-lg hover:bg-green-600 cursor-pointer">
            <?= $product !== null ? 'Uložiť zmeny' : 'Pridať produkt' ?>
        </button>
    </form>
</div>