CREATE TABLE `categories` (
                         `id` int(5) NOT NULL AUTO_INCREMENT,
                         `name` varchar(20) NOT NULL,
                         `description` varchar(50) DEFAULT NULL,
                         PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Notebook'),
(2, 'Stolný počítač'),
(3, 'Grafická karta'),
(4, 'Monitor'),
(5, 'SSD Disk'),
(6, 'Prislušenstvo');



CREATE TABLE `products` (
                         `id` int(10) NOT NULL AUTO_INCREMENT,
                         `category_id` int(4) DEFAULT NULL,
                         `name` varchar(50) NOT NULL,
                         `parameters` varchar(100) NOT NULL,
                         `description` varchar(500) DEFAULT NULL,
                         `price` decimal(10,2) NOT NULL,
                         `image` varchar(300) NOT NULL,
                         PRIMARY KEY (`id`),
                         CONSTRAINT `fk_categories`
                            FOREIGN KEY (`category_id`)
                            REFERENCES `categories` (`id`)
                            ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `products` (`id`, `category_id`, `name`, `parameters`, `description`, `price`, `image`) VALUES
-- Kategória 1: Notebook (3 produkty)
(NULL, 1, 'Lenovo ThinkPad T480 i5', 'Intel Core i5, 16GB RAM, 512GB SSD, Windows 11 Pro', 'Odolný firemný notebook s dlhou výdržou batérie.', 349.00, 'https://www.renewit.in/wp-content/uploads/yootheme/cache/18/Untitled-design-2024-12-02T120545.010-18b0d1bc.png'),
(NULL, 1, 'Dell Latitude 5420', 'Intel Core i7-1185G7, 16GB RAM, 512GB NVMe, 14" FHD', 'Ľahký ultrabook vhodný na prácu aj cestovanie.', 429.00, 'https://www.renewit.in/wp-content/uploads/yootheme/cache/18/Untitled-design-2024-12-02T120545.010-18b0d1bc.png'),
(NULL, 1, 'HP EliteBook 840 G7', 'Intel Core i5-10310U, 8GB RAM, 256GB SSD, Podsvietená klávesnica', 'Kovové šasi a vysoké zabezpečenie pre každodennú kancelársku prácu.', 319.00, 'https://www.renewit.in/wp-content/uploads/yootheme/cache/18/Untitled-design-2024-12-02T120545.010-18b0d1bc.png'),

-- Kategória 2: Stolný počítač (2 produkty)
(NULL, 2, 'Dell OptiPlex 7050 SFF', 'Intel Core i7-7700, 16GB RAM, 256GB SSD, Windows 11 Pro', 'Kompaktný kancelársky počítač s tichým chodom.', 279.00, 'https://www.renewit.in/wp-content/uploads/yootheme/cache/18/Untitled-design-2024-12-02T120545.010-18b0d1bc.png'),
(NULL, 2, 'HP ProDesk 600 G4 Tower', 'Intel Core i5-8500, 16GB RAM, 512GB SSD, DVD-RW', 'Výkonná zostava s možnosťou ďalšieho rozšírenia.', 299.00, 'https://www.renewit.in/wp-content/uploads/yootheme/cache/18/Untitled-design-2024-12-02T120545.010-18b0d1bc.png'),

-- Kategória 3: Grafická karta (1 produkt)
(NULL, 3, 'NVIDIA GeForce RTX 3060 12GB', '12GB GDDR6, 192-bit, PCIe 4.0, HDMI, 3x DisplayPort', 'Výborný pomer ceny a výkonu pre hranie vo Full HD a QHD.', 289.00, 'https://www.renewit.in/wp-content/uploads/yootheme/cache/18/Untitled-design-2024-12-02T120545.010-18b0d1bc.png'),

-- Kategória 4: Monitor (2 produkty)
(NULL, 4, 'Dell UltraSharp U2422H', '24" IPS, 1920x1080, 60Hz, USB-C hub, Pivot', 'Profesionálny monitor s tenkými rámčekmi a verným podaním farieb.', 189.00, 'https://www.renewit.in/wp-content/uploads/yootheme/cache/18/Untitled-design-2024-12-02T120545.010-18b0d1bc.png'),
(NULL, 4, 'AOC 24G2SPU Gaming', '23.8" IPS, 165Hz, 1ms MPRT, FreeSync Premium', 'Herný monitor s plynulým obrazom a nízkou odozvou.', 159.00, 'https://www.renewit.in/wp-content/uploads/yootheme/cache/18/Untitled-design-2024-12-02T120545.010-18b0d1bc.png'),

-- Kategória 5: SSD Disk (zámerne 0 produktov - prázdna kategória)

-- Kategória 6: Príslušenstvo (1 produkt)
(NULL, 6, 'Logitech MX Master 3S', 'Bezdrôtová, 8000 DPI, USB-C nabíjanie, tiché tlačidlá', 'Ergonomická myš pre maximálnu produktivitu pri práci.', 95.00, 'https://www.renewit.in/wp-content/uploads/yootheme/cache/18/Untitled-design-2024-12-02T120545.010-18b0d1bc.png'),

-- Nepriradený produkt (bez kategórie)
(NULL, NULL, 'Univerzálna dokovacia stanica USB-C', '2x HDMI, 3x USB 3.0, RJ-45 Ethernet, PD 100W', 'Rozširujúci hub pre notebooky a tablety bez priradenej kategórie.', 59.00, 'https://www.renewit.in/wp-content/uploads/yootheme/cache/18/Untitled-design-2024-12-02T120545.010-18b0d1bc.png');