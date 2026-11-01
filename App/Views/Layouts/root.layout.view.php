<?php

/** @var string $contentHTML */
/** @var \Framework\Auth\AppUser $user */
/** @var \Framework\Support\LinkGenerator $link */
?>
<!DOCTYPE html>
<html lang="sk">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= App\Configuration::APP_NAME ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <link rel="stylesheet" href="<?= $link->asset('css/style.css') ?>">
</head>

<body class="bg-[#F4F4F4]">
    <!-- [HEADER - LARGE SCREENS]-->
    <header class="hidden lg:flex items-center mx-8 mt-4">
      <!-- Logo -->
      <div class="flex-1 flex flex-row items-center h-24 gap-x-6">
        <!-- <i class="fa-solid fa-screwdriver-wrench text-4xl lg:text-6xl"></i>
             <p class="text-xl lg:text-3xl font-bold">Názov projektu</p> -->
        <a href="<?= $link->url('home.index') ?>" class="flex items-center gap-x-2">
            <i class="fa-solid fa-screwdriver-wrench text-4xl lg:text-6xl"></i>
            <span class="text-xl lg:text-3xl font-bold">Názov projektu</span>
        </a>
      </div>

      <!-- Search bar -->
      <div class="flex-none flex w-1/4 h-12 bg-gray-400 rounded-xl">
        <input type="text" class="w-full px-4 text-white text-lg font-bold rounded-xl" placeholder="Aké zariadenie hľadáte?...">
      </div>

      <!-- Cart/Login/Register -->
      <div class="flex-1 flex justify-end items-center gap-x-6">
        <div class="relative mr-10">
          <i class="fa-solid fa-cart-shopping text-2xl"></i>
          <span class="absolute -bottom-3 -right-3 flex items-center justify-center w-4 h-4 rounded-full bg-black text-white text-xs font-bold">0</span>
        </div>
        <?php if ($user->isLoggedIn()) { ?>
            <div class="flex flex-col text-right">
                <p class="text-2xl font-bold">Ferdinand Fridrich</p>
                <p class="font-bold">Úroveň 2</p>
            </div>
            <div class="flex items-center justify-center w-24 h-24 rounded-full bg-gray-300">
                <i class="fa-regular fa-face-smile text-6xl"></i>
            </div>
        <?php } else { ?>
            <!-- <button class="p-3 bg-lightgreen text-white font-bold rounded-2xl" href="<?= $link->url('home.panel') ?>">Prihlásenie</button> -->
            <a href="<?= $link->url('home.panel') ?>" class="p-3 bg-lightgreen text-white font-bold rounded-2xl inline-block text-center">Prihlásenie</a>
            <!-- <button class="p-3 bg-vibrantgreen text-white font-bold rounded-2xl">Registrácia</button> -->
            <a class="p-3 bg-vibrantgreen text-white font-bold rounded-2xl inline-block text-center">Registrácia</a>
        <?php } ?>
      </div>
    </header>

    <!-- [HEADER - SMALL SCREENS]-->
    <header class="lg:hidden flex flex-col w-full px-4 gap-y-2">

      <div class="flex flex-row w-full items-center my-2">
        <!-- Logo -->
        <div class="flex-1 flex flex-row items-center gap-x-2">
            <!-- <i class="fa-solid fa-screwdriver-wrench text-4xl lg:text-6xl"></i>
             <p class="text-xl lg:text-3xl font-bold">Názov projektu</p> -->
            <a href="<?= $link->url('home.index') ?>" class="flex items-center gap-x-2">
                <i class="fa-solid fa-screwdriver-wrench text-4xl lg:text-6xl"></i>
                <span class="text-xl lg:text-3xl font-bold">Názov projektu</span>
            </a>
        </div>

        <!-- Login/Register -->
        <?php if ($user->isLoggedIn()) { ?>
            <div class="flex-1 flex justify-end items-center gap-x-2">
                <div class="flex flex-col text-right">
                    <p class="font-bold">Ferdinand Fridrich</p>
                    <p class="text-sm font-bold">Úroveň 2</p>
                </div>
                <div class="flex items-center justify-center w-10 h-10 rounded-full bg-gray-300">
                    <i class="fa-regular fa-face-smile text-3xl"></i>
                </div>
            </div>
        <?php } else { ?>
            <div class="flex-1 flex flex-col w-1/2 items-end gap-x-6 gap-y-1">
                <!-- <button class="p-3 bg-lightgreen text-white font-bold rounded-2xl" href="<?= $link->url('home.panel') ?>">Prihlásenie</button> -->
                <a href="<?= $link->url('home.panel') ?>" class="p-3 bg-lightgreen text-white font-bold rounded-2xl inline-block text-center">Prihlásenie</a>
                <!-- <button class="p-3 bg-vibrantgreen text-white font-bold rounded-2xl">Registrácia</button> -->
                <a class="p-3 bg-vibrantgreen text-white font-bold rounded-2xl inline-block text-center">Registrácia</a>
            </div>
        <?php } ?>
      </div>

      <div class="flex flex-row w-full px-4">
        <!-- Search bar -->
        <div class="flex-none flex w-4/5 h-11 lg:h-12 bg-gray-400 rounded-xl">
          <input type="text" class="w-full px-4 text-white text-lg font-bold rounded-xl" placeholder="Aké zariadenie hľadáte?...">
        </div>
        
        <!-- Cart -->
        <div class="flex-1 flex items-center justify-center">
          <div class="relative items-center">
            <i class="fa-solid fa-cart-shopping text-2xl"></i>
            <span class="absolute -bottom-3 -right-3 flex items-center justify-center w-4 h-4 rounded-full bg-black text-white text-xs font-bold">0</span>
          </div>
        </div>
      </div>
    </header>
    
<div class="w-full mt-4 h-1 bg-gray-300"></div>

<?= $contentHTML ?>

<footer class="flex justify-around h-6 bg-darkpurple">
    <p class="text-white font-medium">Lukáš Lokša - 5ZYI36</p>
</footer>

</body>
</html>
