CREATE TABLE `categories` (
                         `id` int(5) NOT NULL AUTO_INCREMENT,
                         `name` varchar(20) NOT NULL,
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
                         `category_id` int(4) NOT NULL,
                         `name` varchar(50) NOT NULL,
                         `parameters` varchar(100) NOT NULL,
                         `description` varchar(500) DEFAULT NULL,
                         `price` decimal(10,2) NOT NULL,
                         `image` varchar(300) NOT NULL,
                         PRIMARY KEY (`id`),
                         CONSTRAINT `fk_categories`
                            FOREIGN KEY (`category_id`)
                            REFERENCES `categories` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `products` (`id`, `category_id`, `name`, `parameters`, `description`, `price`, `image`) VALUES
(NULL, 1, 'Lenovo ThinkPad T480 i5', 'Intel Core i5, 16GB RAM, 512GB SSD, Windows 11 Pro', 'Popis produktu...', 349, 'https://www.renewit.in/wp-content/uploads/yootheme/cache/18/Untitled-design-2024-12-02T120545.010-18b0d1bc.png'),
(NULL, 2, 'Dell OptiPlex 7050 SFF', 'Intel Core i7-7700, 16GB RAM, 256GB SSD, Windows 11 Pro', 'Popis produktu...', 279, 'https://www.renewit.in/wp-content/uploads/yootheme/cache/18/Untitled-design-2024-12-02T120545.010-18b0d1bc.png');