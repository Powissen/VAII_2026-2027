<?php

/** @var \Framework\Support\LinkGenerator $link */
/** @var \App\Models\Product[] $products */
/** @var \App\Models\Category[] $categories */
?>

<div class="flex flex-row justify-center my-2 gap-x-6">
    <a href="<?= $link->url('product.form') ?>"
        class="bg-darkpurple text-white font-bold rounded-lg py-2 px-6">
        Pridať produkt
    </a>

    <a href="<?= $link->url('category.form') ?>"
        class="bg-darkpurple text-white font-bold rounded-lg py-2 px-6">
        Pridať kategóriu
    </a>
</div>

<div class="grid grid-cols-1 lg:grid-cols-2 2xl:grid-cols-4 gap-x-16 gap-y-6 px-6">
    <?php foreach ($categories as $category) : ?>
        <div class="flex flex-col items-center">
            <h3 class="w-full text-center text-lightgreen font-bold my-2 bg-lightgreen/25 border-2 border-lightgreen rounded-xl"><?= $category->getName() ?></h3>

            <a href="<?= $link->url('category.form', ['id' => $category->getId()]) ?>" 
                class="<?= $category->getId() == null ? 'hidden' : '' ?> px-2 bg-lightpurple text-white text-xs font-bold rounded-lg cursor-pointer">
                Upraviť kategóriu
            </a>

            <form action="<?= $link->url('category.delete') ?>" method="post" class="<?= $category->getId() === null ? 'hidden' : '' ?>">
                <input type="hidden" name="id" value="<?= $category->getId() ?>">
                <button type="submit" 
                        class="px-2 bg-red-500 text-white text-xs font-bold rounded-lg cursor-pointer">
                    Zmazať kategóriu
                </button>
            </form>

            <ul>
                <?php foreach ($products as $product) : ?>
                    <?php if ($product->getCategoryId() == $category->getId()) : ?>
                        <div class="w-96 h-max my-2 border border-3 border-gray-400 rounded-xl">
                            <div class="h-1/2 bg-white rounded-t-xl border-b-3 border-gray-400">
                                <img class="w-full h-32 object-contain" src="<?= $product->getImage() ?>">
                            </div>
                            <div class="flex flex-col h-1/2 p-3 bg-gray-200 rounded-b-xl">
                                <p class="mt-2"><?= $product->getName() ?></p>
                                <p class="h-8 text-sm"><?= $product->getParameters() ?></p>
                                <div class="flex-1 flex justify-center mt-2">
                                    <p class="text-2xl font-bold"><?= $product->getPrice() ?>€</p>
                                </div>

                                <a href="<?= $link->url('product.edit', ['id' => $product->getId()]) ?>" 
                                    class="block w-full my-2 py-1 bg-lightpurple text-white text-center font-bold rounded-lg cursor-pointer">
                                    Upraviť produkt
                                </a>

                                <form action="<?= $link->url('product.delete') ?>" method="post" class="w-full">
                                    <input type="hidden" name="id" value="<?= $product->getId() ?>">
                                    <button type="submit" class="w-full my-2 py-1 bg-red-500 text-white font-bold rounded-lg cursor-pointer">
                                        Zmazať produkt
                                    </button>
                                </form>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endforeach; ?>
</div>