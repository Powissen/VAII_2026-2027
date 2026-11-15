<?php

/** @var \Framework\Support\LinkGenerator $link */
/** @var \App\Models\Category|null $category */
?>

<div class="flex flex-col w-full items-center">
    <h1 class="mt-6 text-3xl font-bold"><?= $category !== null ? 'Úprava kategórie' : 'Pridanie novej kategórie' ?></h1>
    <h2 class="text-2xl font-bold"><?= $category !== null ? 'v databáze' : 'do databázy' ?></h2>
    
    <form action="<?= $link->url('category.add') ?>" method="post" class="flex flex-col w-1/4 items-center mt-6 p-6 mb-10 border border-2 rounded-lg">

        <!-- ID Kategórie (skryté - pre editáciu) -->
        <?php if ($category !== null): ?>
            <input type="hidden" name="id" value="<?= $category->getId() ?>">
        <?php endif; ?>

        <!-- Názov kategórie -->
        <span>Názov kategórie</span>
        <input 
            type="text" 
            name="name" 
            required 
            placeholder="Notebooky, Monitory ...."
            value="<?= $category?->getName() ?? '' ?>"
            class="w-full border-2 rounded-lg mb-6" 
        />

        <!-- Popis kategórie -->
        <span>Popis kategórie</span>
        <textarea 
            name="description" 
            placeholder="V tejto kategorii sa nachadza..."
            class="w-full border-2 rounded-lg mb-6"><?= $category?->getDescription() ?? '' ?></textarea>


        <!-- Potvrdenie pridania / uloženia -->
        <button type="submit" class="w-full mt-6 py-2 bg-vibrantgreen text-white font-bold rounded-lg hover:bg-green-600 cursor-pointer">
            <?= $category !== null ? 'Uložiť zmeny' : 'Pridať kategóriu' ?>
        </button>
    </form>
</div>