CREATE TABLE IF NOT EXISTS `products` (
    `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
    `product_number` varchar(15) NOT NULL,
    `sku` varchar(15) NOT NULL,
    `shop_status` boolean DEFAULT 1,
    `hidden` boolean DEFAULT 0,
    `weight` float,
    `ean` varchar(75),
    `stock` int(10),
    `replenishment_time` int(10),
    `tdp` varchar(75),
    `active_from` varchar(75),
    `active_until` varchar(75),
    `puid` int(10) UNSIGNED,
    `pdf_link` text,
    `length` varchar(75),
    `width` varchar(75),
    `depth` varchar(75),
    `deeplink` text,
    `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    `deleted_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1;

CREATE TABLE IF NOT EXISTS `product_manufacturer` (
    `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
    `product_id` int(10) UNSIGNED NOT NULL,
    `name` varchar(120) NOT NULL,
    PRIMARY KEY (`id`),
    FOREIGN KEY (product_id) REFERENCES products(id) 
) ENGINE=InnoDB AUTO_INCREMENT=1;

CREATE TABLE IF NOT EXISTS `product_text` (
    `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
    `type` varchar(10) DEFAULT 'text1',
    `product_id` int(10) UNSIGNED NOT NULL,
    `de` text NOT NULL,
    `en` text NOT NULL,
    PRIMARY KEY (`id`),
    FOREIGN KEY (product_id) REFERENCES products(id) 
) ENGINE=InnoDB AUTO_INCREMENT=1;


CREATE TABLE IF NOT EXISTS `product_vk` (
    `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
    `product_id` int(10) UNSIGNED NOT NULL,
    `vk1` float,
    `vk2` float,
    `vk3` float,
    `vk4` float,
    `vk5` float,
    `vk6` float,
    PRIMARY KEY (`id`),
    FOREIGN KEY (product_id) REFERENCES products(id) 
) ENGINE=InnoDB AUTO_INCREMENT=1;


CREATE TABLE IF NOT EXISTS `test` (
    `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
    `name` varchar(120) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1;