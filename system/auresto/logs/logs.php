<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2017-06-26 17:17:55 --> Query error: Specified key was too long; max key length is 1000 bytes - Invalid query: ALTER TABLE 0ihw8tjza_permalinks ADD UNIQUE INDEX `uniqueSlug` (`slug`, `controller`);
ERROR - 2017-06-26 17:17:57 --> Query error: Incorrect datetime value: '0000-00-00 00:00:00' for column 'date_modified' at row 1 - Invalid query: ALTER TABLE `0ihw8tjza_currencies`
	ADD date_modified DATETIME NOT NULL AFTER currency_status
ERROR - 2017-06-26 17:17:57 --> Query error: Unknown column 'date_modified' in 'field list' - Invalid query: UPDATE `0ihw8tjza_currencies` SET `symbol_position` = '0', `thousand_sign` = ',', `decimal_sign` = '.', `decimal_position` = '2', `date_modified` = '2017-06-25 17:17:57'
ERROR - 2017-06-26 17:17:58 --> Query error: Field 'priority' doesn't have a default value - Invalid query: 
REPLACE INTO `0ihw8tjza_categories` (`category_id`, `name`, `description`, `parent_id`, `image`)
VALUES
	(15, 'Appetizer', '', 0, 'data/no_photo.png'),
	(16, 'Main Course', '', 0, ''),
	(17, 'Salads', '', 0, ''),
	(18, 'Seafoods', '', 0, ''),
	(19, 'Traditional', '', 0, ''),
	(20, 'Vegetarian', '', 0, ''),
	(21, 'Soups', '', 0, ''),
	(22, 'Desserts', '', 0, ''),
	(23, 'Drinks', '', 0, ''),
	(24, 'Specials', '', 0, ''),
	(26, 'Rice Dishes', '', 16, 'data/vegetable-fried-rice.jpg');

ERROR - 2017-06-26 17:17:58 --> Query error: Incorrect date value: '0000-00-00' for column 'date_added' at row 1 - Invalid query: 


REPLACE INTO `0ihw8tjza_coupons` (`coupon_id`, `name`, `code`, `type`, `discount`, `min_total`, `redemptions`, `customer_redemptions`, `validity`, `fixed_date`, `fixed_from_time`, `fixed_to_time`, `period_start_date`, `period_end_date`, `recurring_every`, `recurring_from_time`, `recurring_to_time`, `description`, `status`, `date_added`) VALUES
(11, 'Half Sundays', '2222', 'F', '100.00', '500.00', 0, 0, 'forever', NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, '', 1, '0000-00-00'),
(12, 'Half Tuesdays', '3333', 'P', '30.00', '1000.00', 0, 0, 'forever', NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, '', 1, '0000-00-00'),
(13, 'Full Mondays', 'MTo6TuTg', 'P', '50.00', '0.00', 0, 1, 'forever', NULL, '00:00:00', '23:59:00', NULL, NULL, '', '00:00:00', '23:59:00', '', 1, '0000-00-00'),
(14, 'Full Tuesdays', '4444', 'F', '500.00', '5000.00', 0, 0, 'recurring', NULL, '00:00:00', '23:59:00', NULL, NULL, '0, 2, 4, 5, 6', '00:00:00', '23:59:00', '', 1, '0000-00-00'),
(15, 'Full Wednesdays', '5555', 'F', '5000.00', '5000.00', 0, 0, 'forever', NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, '', 1, '0000-00-00');

ERROR - 2017-06-26 17:17:58 --> Query error: Field 'default_value_id' doesn't have a default value - Invalid query: 

REPLACE INTO `0ihw8tjza_menu_options` (`menu_option_id`, `menu_id`, `option_id`, `required`, `option_values`) VALUES
(22, 85, 22, 1, 'a:3:{i:3;a:3:{s:15:"option_value_id";s:1:"8";s:5:"price";s:0:"";s:20:"menu_option_value_id";s:0:"";}i:4;a:3:{s:15:"option_value_id";s:1:"9";s:5:"price";s:0:"";s:20:"menu_option_value_id";s:0:"";}i:5;a:3:{s:15:"option_value_id";s:2:"10";s:5:"price";s:0:"";s:20:"menu_option_value_id";s:0:"";}}'),
(23, 81, 23, 0, 'a:3:{i:1;a:3:{s:15:"option_value_id";s:1:"7";s:5:"price";s:0:"";s:20:"menu_option_value_id";s:0:"";}i:2;a:3:{s:15:"option_value_id";s:1:"6";s:5:"price";s:0:"";s:20:"menu_option_value_id";s:0:"";}i:3;a:3:{s:15:"option_value_id";s:2:"15";s:5:"price";s:0:"";s:20:"menu_option_value_id";s:0:"";}}'),
(24, 85, 24, 1, 'a:2:{i:1;a:3:{s:15:"option_value_id";s:2:"13";s:5:"price";s:0:"";s:20:"menu_option_value_id";s:0:"";}i:2;a:3:{s:15:"option_value_id";s:2:"14";s:5:"price";s:0:"";s:20:"menu_option_value_id";s:0:"";}}'),
(25, 84, 22, 0, 'a:3:{i:1;a:3:{s:15:"option_value_id";s:1:"8";s:5:"price";s:0:"";s:20:"menu_option_value_id";s:2:"52";}i:2;a:3:{s:15:"option_value_id";s:1:"9";s:5:"price";s:0:"";s:20:"menu_option_value_id";s:2:"53";}i:3;a:3:{s:15:"option_value_id";s:2:"11";s:5:"price";s:0:"";s:20:"menu_option_value_id";s:2:"54";}}'),
(26, 79, 22, 0, 'a:5:{i:1;a:3:{s:15:"option_value_id";s:1:"8";s:5:"price";s:0:"";s:20:"menu_option_value_id";s:2:"55";}i:2;a:3:{s:15:"option_value_id";s:1:"9";s:5:"price";s:0:"";s:20:"menu_option_value_id";s:2:"56";}i:3;a:3:{s:15:"option_value_id";s:2:"10";s:5:"price";s:0:"";s:20:"menu_option_value_id";s:2:"57";}i:4;a:3:{s:15:"option_value_id";s:2:"11";s:5:"price";s:0:"";s:20:"menu_option_value_id";s:2:"58";}i:5;a:3:{s:15:"option_value_id";s:2:"12";s:5:"price";s:0:"";s:20:"menu_option_value_id";s:2:"59";}}'),
(27, 79, 24, 1, 'a:2:{i:6;a:3:{s:15:"option_value_id";s:2:"13";s:5:"price";s:0:"";s:20:"menu_option_value_id";s:2:"60";}i:7;a:3:{s:15:"option_value_id";s:2:"14";s:5:"price";s:0:"";s:20:"menu_option_value_id";s:2:"61";}}'),
(28, 78, 22, 1, 'a:5:{i:1;a:3:{s:15:"option_value_id";s:1:"8";s:5:"price";s:0:"";s:20:"menu_option_value_id";s:2:"62";}i:2;a:3:{s:15:"option_value_id";s:1:"9";s:5:"price";s:0:"";s:20:"menu_option_value_id";s:2:"63";}i:3;a:3:{s:15:"option_value_id";s:2:"10";s:5:"price";s:0:"";s:20:"menu_option_value_id";s:2:"64";}i:4;a:3:{s:15:"option_value_id";s:2:"11";s:5:"price";s:0:"";s:20:"menu_option_value_id";s:2:"65";}i:5;a:3:{s:15:"option_value_id";s:2:"12";s:5:"price";s:0:"";s:20:"menu_option_value_id";s:2:"66";}}');

ERROR - 2017-06-26 17:17:58 --> Query error: Field 'mealtime_id' doesn't have a default value - Invalid query: 

REPLACE INTO `0ihw8tjza_menus` (`menu_id`, `menu_name`, `menu_description`, `menu_price`, `menu_photo`, `menu_category_id`, `stock_qty`, `minimum_qty`, `subtract_stock`, `menu_status`) VALUES
(76, 'PUFF-PUFF', 'Traditional Nigerian donut ball, rolled in sugar', '4.99', 'data/puff_puff.jpg', 24, 856, 3, 1, 1),
(77, 'SCOTCH EGG', 'Boiled egg wrapped in a ground meat mixture, coated in breadcrumbs, and deep-fried.', '2.00', 'data/scotch_egg.jpg', 15, 0, 1, 1, 1),
(78, 'ATA RICE', 'Small pieces of beef, goat, stipe, and tendon sautéed in crushed green Jamaican pepper.', '12.00', 'data/Seared_Ahi_Spinach_Salad.jpg', 16, 1000, 1, 0, 1),
(79, 'RICE AND DODO', '(plantains) w/chicken, fish, beef or goat', '11.99', 'data/rice_and_dodo.jpg', 16, 655, 1, 1, 1),
(80, 'Special Shrimp Deluxe', 'Fresh shrimp sautéed in blended mixture of tomatoes, onion, peppers over choice of rice', '12.99', 'data/deluxe_bbq_shrimp-1.jpg', 18, 265, 1, 1, 1),
(81, 'Whole catfish with rice and vegetables', 'Whole catfish slow cooked in tomatoes, pepper and onion sauce with seasoning to taste', '13.99', 'data/FriedWholeCatfishPlate_lg.jpg', 24, 145, 1, 1, 1),
(82, 'African Salad', 'With baked beans, egg, tuna, onion, tomatoes , green peas and carrot with your choice of dressing.', '8.99', '', 17, 500, 1, 0, 1),
(83, 'Seafood Salad', 'With shrimp, egg and imitation crab meat', '5.99', 'data/seafoods_salad.JPG', 17, 490, 1, 1, 1),
(84, 'EBA', 'Grated cassava', '11.99', 'data/eba.jpg', 16, 407, 1, 1, 1),
(85, 'AMALA', 'Yam flour', '11.99', 'data/DSCF3711.JPG', 19, 470, 1, 1, 1),
(86, 'YAM PORRIDGE', 'in tomatoes sauce', '9.99', 'data/yam_porridge.jpg', 20, 457, 1, 1, 1),
(87, 'Boiled Plantain', 'w/spinach soup', '9.99', 'data/pesto.jpg', 19, 434, 1, 1, 1);

ERROR - 2017-06-26 17:17:58 --> Query error: Field 'type' doesn't have a default value - Invalid query: 

REPLACE INTO `0ihw8tjza_working_hours` (`location_id`, `weekday`, `opening_time`, `closing_time`, `status`)
VALUES
  (11, 0, '00:00:00', '23:59:00', 1),
  (11, 1, '00:00:00', '23:59:00', 1),
  (11, 2, '00:00:00', '23:59:00', 1),
  (11, 3, '00:00:00', '23:59:00', 1),
  (11, 4, '00:00:00', '23:59:00', 1),
  (11, 5, '00:00:00', '23:59:00', 1),
  (11, 6, '00:00:00', '23:59:00', 1),
  (12, 0, '02:00:00', '17:59:00', 1),
  (12, 1, '02:00:00', '17:59:00', 1),
  (12, 2, '02:00:00', '17:59:00', 1),
  (12, 3, '02:00:00', '17:59:00', 1),
  (12, 4, '02:00:00', '17:59:00', 1),
  (12, 5, '02:00:00', '17:59:00', 1),
  (12, 6, '02:00:00', '17:59:00', 1),
  (13, 0, '00:00:00', '23:59:00', 0),
  (13, 1, '00:00:00', '23:59:00', 0),
  (13, 2, '00:00:00', '23:59:00', 0),
  (13, 3, '00:00:00', '23:59:00', 0),
  (13, 4, '00:00:00', '23:59:00', 0),
  (13, 5, '00:00:00', '23:59:00', 0),
  (13, 6, '00:00:00', '23:59:00', 0);
ERROR - 2017-06-27 16:54:12 --> Severity: User Error --> Curl failed with error #60: SSL certificate problem: unable to get local issuer certificate C:\Users\qxiong.ADUNEO\PhpstormProjects\AuResto\system\auresto\libraries\Location.php 770
ERROR - 2017-06-27 16:54:29 --> Severity: User Error --> Curl failed with error #60: SSL certificate problem: unable to get local issuer certificate C:\Users\qxiong.ADUNEO\PhpstormProjects\AuResto\system\auresto\libraries\Location.php 770
ERROR - 2017-06-27 16:55:43 --> Severity: User Error --> Curl failed with error #60: SSL certificate problem: unable to get local issuer certificate C:\Users\qxiong.ADUNEO\PhpstormProjects\AuResto\system\auresto\libraries\Location.php 770
ERROR - 2017-06-27 16:56:49 --> Curl failed with error #%d: %s
ERROR - 2017-06-27 16:58:01 --> Curl failed with error 60: SSL certificate problem: unable to get local issuer certificate
ERROR - 2017-06-28 15:58:27 --> Query error: Specified key was too long; max key length is 1000 bytes - Invalid query: ALTER TABLE xv0of9caa_permalinks ADD UNIQUE INDEX `uniqueSlug` (`slug`, `controller`);
ERROR - 2017-06-28 15:58:28 --> Query error: Incorrect datetime value: '0000-00-00 00:00:00' for column 'date_modified' at row 1 - Invalid query: ALTER TABLE `xv0of9caa_currencies`
	ADD date_modified DATETIME NOT NULL AFTER currency_status
ERROR - 2017-06-28 15:58:28 --> Query error: Unknown column 'date_modified' in 'field list' - Invalid query: UPDATE `xv0of9caa_currencies` SET `symbol_position` = '0', `thousand_sign` = ',', `decimal_sign` = '.', `decimal_position` = '2', `date_modified` = '2017-06-27 15:58:28'
ERROR - 2017-06-28 15:58:29 --> Query error: Field 'priority' doesn't have a default value - Invalid query: 
REPLACE INTO `xv0of9caa_categories` (`category_id`, `name`, `description`, `parent_id`, `image`)
VALUES
	(15, 'Appetizer', '', 0, 'data/no_photo.png'),
	(16, 'Main Course', '', 0, ''),
	(17, 'Salads', '', 0, ''),
	(18, 'Seafoods', '', 0, ''),
	(19, 'Traditional', '', 0, ''),
	(20, 'Vegetarian', '', 0, ''),
	(21, 'Soups', '', 0, ''),
	(22, 'Desserts', '', 0, ''),
	(23, 'Drinks', '', 0, ''),
	(24, 'Specials', '', 0, ''),
	(26, 'Rice Dishes', '', 16, 'data/vegetable-fried-rice.jpg');

ERROR - 2017-06-28 15:58:29 --> Query error: Incorrect date value: '0000-00-00' for column 'date_added' at row 1 - Invalid query: 


REPLACE INTO `xv0of9caa_coupons` (`coupon_id`, `name`, `code`, `type`, `discount`, `min_total`, `redemptions`, `customer_redemptions`, `validity`, `fixed_date`, `fixed_from_time`, `fixed_to_time`, `period_start_date`, `period_end_date`, `recurring_every`, `recurring_from_time`, `recurring_to_time`, `description`, `status`, `date_added`) VALUES
(11, 'Half Sundays', '2222', 'F', '100.00', '500.00', 0, 0, 'forever', NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, '', 1, '0000-00-00'),
(12, 'Half Tuesdays', '3333', 'P', '30.00', '1000.00', 0, 0, 'forever', NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, '', 1, '0000-00-00'),
(13, 'Full Mondays', 'MTo6TuTg', 'P', '50.00', '0.00', 0, 1, 'forever', NULL, '00:00:00', '23:59:00', NULL, NULL, '', '00:00:00', '23:59:00', '', 1, '0000-00-00'),
(14, 'Full Tuesdays', '4444', 'F', '500.00', '5000.00', 0, 0, 'recurring', NULL, '00:00:00', '23:59:00', NULL, NULL, '0, 2, 4, 5, 6', '00:00:00', '23:59:00', '', 1, '0000-00-00'),
(15, 'Full Wednesdays', '5555', 'F', '5000.00', '5000.00', 0, 0, 'forever', NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, '', 1, '0000-00-00');

ERROR - 2017-06-28 15:58:29 --> Query error: Field 'default_value_id' doesn't have a default value - Invalid query: 

REPLACE INTO `xv0of9caa_menu_options` (`menu_option_id`, `menu_id`, `option_id`, `required`, `option_values`) VALUES
(22, 85, 22, 1, 'a:3:{i:3;a:3:{s:15:"option_value_id";s:1:"8";s:5:"price";s:0:"";s:20:"menu_option_value_id";s:0:"";}i:4;a:3:{s:15:"option_value_id";s:1:"9";s:5:"price";s:0:"";s:20:"menu_option_value_id";s:0:"";}i:5;a:3:{s:15:"option_value_id";s:2:"10";s:5:"price";s:0:"";s:20:"menu_option_value_id";s:0:"";}}'),
(23, 81, 23, 0, 'a:3:{i:1;a:3:{s:15:"option_value_id";s:1:"7";s:5:"price";s:0:"";s:20:"menu_option_value_id";s:0:"";}i:2;a:3:{s:15:"option_value_id";s:1:"6";s:5:"price";s:0:"";s:20:"menu_option_value_id";s:0:"";}i:3;a:3:{s:15:"option_value_id";s:2:"15";s:5:"price";s:0:"";s:20:"menu_option_value_id";s:0:"";}}'),
(24, 85, 24, 1, 'a:2:{i:1;a:3:{s:15:"option_value_id";s:2:"13";s:5:"price";s:0:"";s:20:"menu_option_value_id";s:0:"";}i:2;a:3:{s:15:"option_value_id";s:2:"14";s:5:"price";s:0:"";s:20:"menu_option_value_id";s:0:"";}}'),
(25, 84, 22, 0, 'a:3:{i:1;a:3:{s:15:"option_value_id";s:1:"8";s:5:"price";s:0:"";s:20:"menu_option_value_id";s:2:"52";}i:2;a:3:{s:15:"option_value_id";s:1:"9";s:5:"price";s:0:"";s:20:"menu_option_value_id";s:2:"53";}i:3;a:3:{s:15:"option_value_id";s:2:"11";s:5:"price";s:0:"";s:20:"menu_option_value_id";s:2:"54";}}'),
(26, 79, 22, 0, 'a:5:{i:1;a:3:{s:15:"option_value_id";s:1:"8";s:5:"price";s:0:"";s:20:"menu_option_value_id";s:2:"55";}i:2;a:3:{s:15:"option_value_id";s:1:"9";s:5:"price";s:0:"";s:20:"menu_option_value_id";s:2:"56";}i:3;a:3:{s:15:"option_value_id";s:2:"10";s:5:"price";s:0:"";s:20:"menu_option_value_id";s:2:"57";}i:4;a:3:{s:15:"option_value_id";s:2:"11";s:5:"price";s:0:"";s:20:"menu_option_value_id";s:2:"58";}i:5;a:3:{s:15:"option_value_id";s:2:"12";s:5:"price";s:0:"";s:20:"menu_option_value_id";s:2:"59";}}'),
(27, 79, 24, 1, 'a:2:{i:6;a:3:{s:15:"option_value_id";s:2:"13";s:5:"price";s:0:"";s:20:"menu_option_value_id";s:2:"60";}i:7;a:3:{s:15:"option_value_id";s:2:"14";s:5:"price";s:0:"";s:20:"menu_option_value_id";s:2:"61";}}'),
(28, 78, 22, 1, 'a:5:{i:1;a:3:{s:15:"option_value_id";s:1:"8";s:5:"price";s:0:"";s:20:"menu_option_value_id";s:2:"62";}i:2;a:3:{s:15:"option_value_id";s:1:"9";s:5:"price";s:0:"";s:20:"menu_option_value_id";s:2:"63";}i:3;a:3:{s:15:"option_value_id";s:2:"10";s:5:"price";s:0:"";s:20:"menu_option_value_id";s:2:"64";}i:4;a:3:{s:15:"option_value_id";s:2:"11";s:5:"price";s:0:"";s:20:"menu_option_value_id";s:2:"65";}i:5;a:3:{s:15:"option_value_id";s:2:"12";s:5:"price";s:0:"";s:20:"menu_option_value_id";s:2:"66";}}');

ERROR - 2017-06-28 15:58:29 --> Query error: Field 'mealtime_id' doesn't have a default value - Invalid query: 

REPLACE INTO `xv0of9caa_menus` (`menu_id`, `menu_name`, `menu_description`, `menu_price`, `menu_photo`, `menu_category_id`, `stock_qty`, `minimum_qty`, `subtract_stock`, `menu_status`) VALUES
(76, 'PUFF-PUFF', 'Traditional Nigerian donut ball, rolled in sugar', '4.99', 'data/puff_puff.jpg', 24, 856, 3, 1, 1),
(77, 'SCOTCH EGG', 'Boiled egg wrapped in a ground meat mixture, coated in breadcrumbs, and deep-fried.', '2.00', 'data/scotch_egg.jpg', 15, 0, 1, 1, 1),
(78, 'ATA RICE', 'Small pieces of beef, goat, stipe, and tendon sautéed in crushed green Jamaican pepper.', '12.00', 'data/Seared_Ahi_Spinach_Salad.jpg', 16, 1000, 1, 0, 1),
(79, 'RICE AND DODO', '(plantains) w/chicken, fish, beef or goat', '11.99', 'data/rice_and_dodo.jpg', 16, 655, 1, 1, 1),
(80, 'Special Shrimp Deluxe', 'Fresh shrimp sautéed in blended mixture of tomatoes, onion, peppers over choice of rice', '12.99', 'data/deluxe_bbq_shrimp-1.jpg', 18, 265, 1, 1, 1),
(81, 'Whole catfish with rice and vegetables', 'Whole catfish slow cooked in tomatoes, pepper and onion sauce with seasoning to taste', '13.99', 'data/FriedWholeCatfishPlate_lg.jpg', 24, 145, 1, 1, 1),
(82, 'African Salad', 'With baked beans, egg, tuna, onion, tomatoes , green peas and carrot with your choice of dressing.', '8.99', '', 17, 500, 1, 0, 1),
(83, 'Seafood Salad', 'With shrimp, egg and imitation crab meat', '5.99', 'data/seafoods_salad.JPG', 17, 490, 1, 1, 1),
(84, 'EBA', 'Grated cassava', '11.99', 'data/eba.jpg', 16, 407, 1, 1, 1),
(85, 'AMALA', 'Yam flour', '11.99', 'data/DSCF3711.JPG', 19, 470, 1, 1, 1),
(86, 'YAM PORRIDGE', 'in tomatoes sauce', '9.99', 'data/yam_porridge.jpg', 20, 457, 1, 1, 1),
(87, 'Boiled Plantain', 'w/spinach soup', '9.99', 'data/pesto.jpg', 19, 434, 1, 1, 1);

ERROR - 2017-06-28 15:58:29 --> Query error: Field 'type' doesn't have a default value - Invalid query: 

REPLACE INTO `xv0of9caa_working_hours` (`location_id`, `weekday`, `opening_time`, `closing_time`, `status`)
VALUES
  (11, 0, '00:00:00', '23:59:00', 1),
  (11, 1, '00:00:00', '23:59:00', 1),
  (11, 2, '00:00:00', '23:59:00', 1),
  (11, 3, '00:00:00', '23:59:00', 1),
  (11, 4, '00:00:00', '23:59:00', 1),
  (11, 5, '00:00:00', '23:59:00', 1),
  (11, 6, '00:00:00', '23:59:00', 1),
  (12, 0, '02:00:00', '17:59:00', 1),
  (12, 1, '02:00:00', '17:59:00', 1),
  (12, 2, '02:00:00', '17:59:00', 1),
  (12, 3, '02:00:00', '17:59:00', 1),
  (12, 4, '02:00:00', '17:59:00', 1),
  (12, 5, '02:00:00', '17:59:00', 1),
  (12, 6, '02:00:00', '17:59:00', 1),
  (13, 0, '00:00:00', '23:59:00', 0),
  (13, 1, '00:00:00', '23:59:00', 0),
  (13, 2, '00:00:00', '23:59:00', 0),
  (13, 3, '00:00:00', '23:59:00', 0),
  (13, 4, '00:00:00', '23:59:00', 0),
  (13, 5, '00:00:00', '23:59:00', 0),
  (13, 6, '00:00:00', '23:59:00', 0);
ERROR - 2017-06-28 15:58:29 --> Severity: Notice --> unserialize(): Error at offset 41 of 73 bytes C:\Users\qxiong.ADUNEO\PhpstormProjects\AuResto\system\auresto\core\TI_Loader.php 206
ERROR - 2017-06-28 16:04:21 --> Severity: Notice --> unserialize(): Error at offset 41 of 73 bytes C:\Users\qxiong.ADUNEO\PhpstormProjects\AuResto\system\auresto\core\TI_Loader.php 206
ERROR - 2017-06-28 16:09:52 --> Severity: Notice --> unserialize(): Error at offset 41 of 73 bytes C:\Users\qxiong.ADUNEO\PhpstormProjects\AuResto\system\auresto\core\TI_Loader.php 206
ERROR - 2017-06-28 16:11:36 --> Severity: Notice --> unserialize(): Error at offset 41 of 73 bytes C:\Users\qxiong.ADUNEO\PhpstormProjects\AuResto\system\auresto\core\TI_Loader.php 206
ERROR - 2017-06-29 09:27:46 --> Severity: Notice --> unserialize(): Error at offset 41 of 73 bytes C:\Users\qxiong.ADUNEO\PhpstormProjects\AuResto\system\auresto\core\TI_Loader.php 206
ERROR - 2017-06-29 09:27:46 --> Severity: Notice --> unserialize(): Error at offset 41 of 73 bytes C:\Users\qxiong.ADUNEO\PhpstormProjects\AuResto\system\auresto\core\TI_Loader.php 206
ERROR - 2017-06-29 09:31:27 --> Severity: Notice --> unserialize(): Error at offset 41 of 73 bytes C:\Users\qxiong.ADUNEO\PhpstormProjects\AuResto\system\auresto\core\TI_Loader.php 206
ERROR - 2017-06-29 09:32:27 --> Severity: Notice --> unserialize(): Error at offset 41 of 73 bytes C:\Users\qxiong.ADUNEO\PhpstormProjects\AuResto\system\auresto\core\TI_Loader.php 206
ERROR - 2017-06-29 09:34:23 --> Severity: Notice --> unserialize(): Error at offset 41 of 73 bytes C:\Users\qxiong.ADUNEO\PhpstormProjects\AuResto\system\auresto\core\TI_Loader.php 206
ERROR - 2017-06-29 09:34:28 --> Severity: Notice --> unserialize(): Error at offset 41 of 73 bytes C:\Users\qxiong.ADUNEO\PhpstormProjects\AuResto\system\auresto\core\TI_Loader.php 206
ERROR - 2017-06-29 09:39:26 --> Severity: Notice --> unserialize(): Error at offset 41 of 73 bytes C:\Users\qxiong.ADUNEO\PhpstormProjects\AuResto\system\auresto\core\TI_Loader.php 206
ERROR - 2017-06-29 09:49:05 --> Severity: Notice --> unserialize(): Error at offset 41 of 73 bytes C:\Users\qxiong.ADUNEO\PhpstormProjects\AuResto\system\auresto\core\TI_Loader.php 206
ERROR - 2017-06-29 10:29:18 --> Query error: Specified key was too long; max key length is 1000 bytes - Invalid query: ALTER TABLE 6thjfywey_permalinks ADD UNIQUE INDEX `uniqueSlug` (`slug`, `controller`);
ERROR - 2017-06-29 10:29:20 --> Query error: Incorrect datetime value: '0000-00-00 00:00:00' for column 'date_modified' at row 1 - Invalid query: ALTER TABLE `6thjfywey_currencies`
	ADD date_modified DATETIME NOT NULL AFTER currency_status
ERROR - 2017-06-29 10:29:20 --> Query error: Unknown column 'date_modified' in 'field list' - Invalid query: UPDATE `6thjfywey_currencies` SET `symbol_position` = '0', `thousand_sign` = ',', `decimal_sign` = '.', `decimal_position` = '2', `date_modified` = '2017-06-28 10:29:20'
ERROR - 2017-06-29 10:29:20 --> Query error: Field 'priority' doesn't have a default value - Invalid query: 
REPLACE INTO `6thjfywey_categories` (`category_id`, `name`, `description`, `parent_id`, `image`)
VALUES
	(15, 'Appetizer', '', 0, 'data/no_photo.png'),
	(16, 'Main Course', '', 0, ''),
	(17, 'Salads', '', 0, ''),
	(18, 'Seafoods', '', 0, ''),
	(19, 'Traditional', '', 0, ''),
	(20, 'Vegetarian', '', 0, ''),
	(21, 'Soups', '', 0, ''),
	(22, 'Desserts', '', 0, ''),
	(23, 'Drinks', '', 0, ''),
	(24, 'Specials', '', 0, ''),
	(26, 'Rice Dishes', '', 16, 'data/vegetable-fried-rice.jpg');

ERROR - 2017-06-29 10:29:20 --> Query error: Incorrect date value: '0000-00-00' for column 'date_added' at row 1 - Invalid query: 


REPLACE INTO `6thjfywey_coupons` (`coupon_id`, `name`, `code`, `type`, `discount`, `min_total`, `redemptions`, `customer_redemptions`, `validity`, `fixed_date`, `fixed_from_time`, `fixed_to_time`, `period_start_date`, `period_end_date`, `recurring_every`, `recurring_from_time`, `recurring_to_time`, `description`, `status`, `date_added`) VALUES
(11, 'Half Sundays', '2222', 'F', '100.00', '500.00', 0, 0, 'forever', NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, '', 1, '0000-00-00'),
(12, 'Half Tuesdays', '3333', 'P', '30.00', '1000.00', 0, 0, 'forever', NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, '', 1, '0000-00-00'),
(13, 'Full Mondays', 'MTo6TuTg', 'P', '50.00', '0.00', 0, 1, 'forever', NULL, '00:00:00', '23:59:00', NULL, NULL, '', '00:00:00', '23:59:00', '', 1, '0000-00-00'),
(14, 'Full Tuesdays', '4444', 'F', '500.00', '5000.00', 0, 0, 'recurring', NULL, '00:00:00', '23:59:00', NULL, NULL, '0, 2, 4, 5, 6', '00:00:00', '23:59:00', '', 1, '0000-00-00'),
(15, 'Full Wednesdays', '5555', 'F', '5000.00', '5000.00', 0, 0, 'forever', NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, '', 1, '0000-00-00');

ERROR - 2017-06-29 10:29:20 --> Query error: Field 'default_value_id' doesn't have a default value - Invalid query: 

REPLACE INTO `6thjfywey_menu_options` (`menu_option_id`, `menu_id`, `option_id`, `required`, `option_values`) VALUES
(22, 85, 22, 1, 'a:3:{i:3;a:3:{s:15:"option_value_id";s:1:"8";s:5:"price";s:0:"";s:20:"menu_option_value_id";s:0:"";}i:4;a:3:{s:15:"option_value_id";s:1:"9";s:5:"price";s:0:"";s:20:"menu_option_value_id";s:0:"";}i:5;a:3:{s:15:"option_value_id";s:2:"10";s:5:"price";s:0:"";s:20:"menu_option_value_id";s:0:"";}}'),
(23, 81, 23, 0, 'a:3:{i:1;a:3:{s:15:"option_value_id";s:1:"7";s:5:"price";s:0:"";s:20:"menu_option_value_id";s:0:"";}i:2;a:3:{s:15:"option_value_id";s:1:"6";s:5:"price";s:0:"";s:20:"menu_option_value_id";s:0:"";}i:3;a:3:{s:15:"option_value_id";s:2:"15";s:5:"price";s:0:"";s:20:"menu_option_value_id";s:0:"";}}'),
(24, 85, 24, 1, 'a:2:{i:1;a:3:{s:15:"option_value_id";s:2:"13";s:5:"price";s:0:"";s:20:"menu_option_value_id";s:0:"";}i:2;a:3:{s:15:"option_value_id";s:2:"14";s:5:"price";s:0:"";s:20:"menu_option_value_id";s:0:"";}}'),
(25, 84, 22, 0, 'a:3:{i:1;a:3:{s:15:"option_value_id";s:1:"8";s:5:"price";s:0:"";s:20:"menu_option_value_id";s:2:"52";}i:2;a:3:{s:15:"option_value_id";s:1:"9";s:5:"price";s:0:"";s:20:"menu_option_value_id";s:2:"53";}i:3;a:3:{s:15:"option_value_id";s:2:"11";s:5:"price";s:0:"";s:20:"menu_option_value_id";s:2:"54";}}'),
(26, 79, 22, 0, 'a:5:{i:1;a:3:{s:15:"option_value_id";s:1:"8";s:5:"price";s:0:"";s:20:"menu_option_value_id";s:2:"55";}i:2;a:3:{s:15:"option_value_id";s:1:"9";s:5:"price";s:0:"";s:20:"menu_option_value_id";s:2:"56";}i:3;a:3:{s:15:"option_value_id";s:2:"10";s:5:"price";s:0:"";s:20:"menu_option_value_id";s:2:"57";}i:4;a:3:{s:15:"option_value_id";s:2:"11";s:5:"price";s:0:"";s:20:"menu_option_value_id";s:2:"58";}i:5;a:3:{s:15:"option_value_id";s:2:"12";s:5:"price";s:0:"";s:20:"menu_option_value_id";s:2:"59";}}'),
(27, 79, 24, 1, 'a:2:{i:6;a:3:{s:15:"option_value_id";s:2:"13";s:5:"price";s:0:"";s:20:"menu_option_value_id";s:2:"60";}i:7;a:3:{s:15:"option_value_id";s:2:"14";s:5:"price";s:0:"";s:20:"menu_option_value_id";s:2:"61";}}'),
(28, 78, 22, 1, 'a:5:{i:1;a:3:{s:15:"option_value_id";s:1:"8";s:5:"price";s:0:"";s:20:"menu_option_value_id";s:2:"62";}i:2;a:3:{s:15:"option_value_id";s:1:"9";s:5:"price";s:0:"";s:20:"menu_option_value_id";s:2:"63";}i:3;a:3:{s:15:"option_value_id";s:2:"10";s:5:"price";s:0:"";s:20:"menu_option_value_id";s:2:"64";}i:4;a:3:{s:15:"option_value_id";s:2:"11";s:5:"price";s:0:"";s:20:"menu_option_value_id";s:2:"65";}i:5;a:3:{s:15:"option_value_id";s:2:"12";s:5:"price";s:0:"";s:20:"menu_option_value_id";s:2:"66";}}');

ERROR - 2017-06-29 10:29:20 --> Query error: Field 'mealtime_id' doesn't have a default value - Invalid query: 

REPLACE INTO `6thjfywey_menus` (`menu_id`, `menu_name`, `menu_description`, `menu_price`, `menu_photo`, `menu_category_id`, `stock_qty`, `minimum_qty`, `subtract_stock`, `menu_status`) VALUES
(76, 'PUFF-PUFF', 'Traditional Nigerian donut ball, rolled in sugar', '4.99', 'data/puff_puff.jpg', 24, 856, 3, 1, 1),
(77, 'SCOTCH EGG', 'Boiled egg wrapped in a ground meat mixture, coated in breadcrumbs, and deep-fried.', '2.00', 'data/scotch_egg.jpg', 15, 0, 1, 1, 1),
(78, 'ATA RICE', 'Small pieces of beef, goat, stipe, and tendon sautéed in crushed green Jamaican pepper.', '12.00', 'data/Seared_Ahi_Spinach_Salad.jpg', 16, 1000, 1, 0, 1),
(79, 'RICE AND DODO', '(plantains) w/chicken, fish, beef or goat', '11.99', 'data/rice_and_dodo.jpg', 16, 655, 1, 1, 1),
(80, 'Special Shrimp Deluxe', 'Fresh shrimp sautéed in blended mixture of tomatoes, onion, peppers over choice of rice', '12.99', 'data/deluxe_bbq_shrimp-1.jpg', 18, 265, 1, 1, 1),
(81, 'Whole catfish with rice and vegetables', 'Whole catfish slow cooked in tomatoes, pepper and onion sauce with seasoning to taste', '13.99', 'data/FriedWholeCatfishPlate_lg.jpg', 24, 145, 1, 1, 1),
(82, 'African Salad', 'With baked beans, egg, tuna, onion, tomatoes , green peas and carrot with your choice of dressing.', '8.99', '', 17, 500, 1, 0, 1),
(83, 'Seafood Salad', 'With shrimp, egg and imitation crab meat', '5.99', 'data/seafoods_salad.JPG', 17, 490, 1, 1, 1),
(84, 'EBA', 'Grated cassava', '11.99', 'data/eba.jpg', 16, 407, 1, 1, 1),
(85, 'AMALA', 'Yam flour', '11.99', 'data/DSCF3711.JPG', 19, 470, 1, 1, 1),
(86, 'YAM PORRIDGE', 'in tomatoes sauce', '9.99', 'data/yam_porridge.jpg', 20, 457, 1, 1, 1),
(87, 'Boiled Plantain', 'w/spinach soup', '9.99', 'data/pesto.jpg', 19, 434, 1, 1, 1);

ERROR - 2017-06-29 10:29:20 --> Query error: Field 'type' doesn't have a default value - Invalid query: 

REPLACE INTO `6thjfywey_working_hours` (`location_id`, `weekday`, `opening_time`, `closing_time`, `status`)
VALUES
  (11, 0, '00:00:00', '23:59:00', 1),
  (11, 1, '00:00:00', '23:59:00', 1),
  (11, 2, '00:00:00', '23:59:00', 1),
  (11, 3, '00:00:00', '23:59:00', 1),
  (11, 4, '00:00:00', '23:59:00', 1),
  (11, 5, '00:00:00', '23:59:00', 1),
  (11, 6, '00:00:00', '23:59:00', 1),
  (12, 0, '02:00:00', '17:59:00', 1),
  (12, 1, '02:00:00', '17:59:00', 1),
  (12, 2, '02:00:00', '17:59:00', 1),
  (12, 3, '02:00:00', '17:59:00', 1),
  (12, 4, '02:00:00', '17:59:00', 1),
  (12, 5, '02:00:00', '17:59:00', 1),
  (12, 6, '02:00:00', '17:59:00', 1),
  (13, 0, '00:00:00', '23:59:00', 0),
  (13, 1, '00:00:00', '23:59:00', 0),
  (13, 2, '00:00:00', '23:59:00', 0),
  (13, 3, '00:00:00', '23:59:00', 0),
  (13, 4, '00:00:00', '23:59:00', 0),
  (13, 5, '00:00:00', '23:59:00', 0),
  (13, 6, '00:00:00', '23:59:00', 0);
ERROR - 2017-06-29 10:29:21 --> Severity: Notice --> unserialize(): Error at offset 37 of 73 bytes C:\Users\qxiong.ADUNEO\PhpstormProjects\AuResto\system\auresto\core\TI_Loader.php 206
ERROR - 2017-06-29 10:31:12 --> Severity: Notice --> unserialize(): Error at offset 37 of 73 bytes C:\Users\qxiong.ADUNEO\PhpstormProjects\AuResto\system\auresto\core\TI_Loader.php 206
ERROR - 2017-06-29 10:32:34 --> Query error: Specified key was too long; max key length is 1000 bytes - Invalid query: ALTER TABLE dkumwmgku_permalinks ADD UNIQUE INDEX `uniqueSlug` (`slug`, `controller`);
ERROR - 2017-06-29 10:32:35 --> Query error: Incorrect datetime value: '0000-00-00 00:00:00' for column 'date_modified' at row 1 - Invalid query: ALTER TABLE `dkumwmgku_currencies`
	ADD date_modified DATETIME NOT NULL AFTER currency_status
ERROR - 2017-06-29 10:32:35 --> Query error: Unknown column 'date_modified' in 'field list' - Invalid query: UPDATE `dkumwmgku_currencies` SET `symbol_position` = '0', `thousand_sign` = ',', `decimal_sign` = '.', `decimal_position` = '2', `date_modified` = '2017-06-28 10:32:35'
ERROR - 2017-06-29 10:32:36 --> Query error: Field 'priority' doesn't have a default value - Invalid query: 
REPLACE INTO `dkumwmgku_categories` (`category_id`, `name`, `description`, `parent_id`, `image`)
VALUES
	(15, 'Appetizer', '', 0, 'data/no_photo.png'),
	(16, 'Main Course', '', 0, ''),
	(17, 'Salads', '', 0, ''),
	(18, 'Seafoods', '', 0, ''),
	(19, 'Traditional', '', 0, ''),
	(20, 'Vegetarian', '', 0, ''),
	(21, 'Soups', '', 0, ''),
	(22, 'Desserts', '', 0, ''),
	(23, 'Drinks', '', 0, ''),
	(24, 'Specials', '', 0, ''),
	(26, 'Rice Dishes', '', 16, 'data/vegetable-fried-rice.jpg');

ERROR - 2017-06-29 10:32:36 --> Query error: Incorrect date value: '0000-00-00' for column 'date_added' at row 1 - Invalid query: 


REPLACE INTO `dkumwmgku_coupons` (`coupon_id`, `name`, `code`, `type`, `discount`, `min_total`, `redemptions`, `customer_redemptions`, `validity`, `fixed_date`, `fixed_from_time`, `fixed_to_time`, `period_start_date`, `period_end_date`, `recurring_every`, `recurring_from_time`, `recurring_to_time`, `description`, `status`, `date_added`) VALUES
(11, 'Half Sundays', '2222', 'F', '100.00', '500.00', 0, 0, 'forever', NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, '', 1, '0000-00-00'),
(12, 'Half Tuesdays', '3333', 'P', '30.00', '1000.00', 0, 0, 'forever', NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, '', 1, '0000-00-00'),
(13, 'Full Mondays', 'MTo6TuTg', 'P', '50.00', '0.00', 0, 1, 'forever', NULL, '00:00:00', '23:59:00', NULL, NULL, '', '00:00:00', '23:59:00', '', 1, '0000-00-00'),
(14, 'Full Tuesdays', '4444', 'F', '500.00', '5000.00', 0, 0, 'recurring', NULL, '00:00:00', '23:59:00', NULL, NULL, '0, 2, 4, 5, 6', '00:00:00', '23:59:00', '', 1, '0000-00-00'),
(15, 'Full Wednesdays', '5555', 'F', '5000.00', '5000.00', 0, 0, 'forever', NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, '', 1, '0000-00-00');

ERROR - 2017-06-29 10:32:36 --> Query error: Field 'default_value_id' doesn't have a default value - Invalid query: 

REPLACE INTO `dkumwmgku_menu_options` (`menu_option_id`, `menu_id`, `option_id`, `required`, `option_values`) VALUES
(22, 85, 22, 1, 'a:3:{i:3;a:3:{s:15:"option_value_id";s:1:"8";s:5:"price";s:0:"";s:20:"menu_option_value_id";s:0:"";}i:4;a:3:{s:15:"option_value_id";s:1:"9";s:5:"price";s:0:"";s:20:"menu_option_value_id";s:0:"";}i:5;a:3:{s:15:"option_value_id";s:2:"10";s:5:"price";s:0:"";s:20:"menu_option_value_id";s:0:"";}}'),
(23, 81, 23, 0, 'a:3:{i:1;a:3:{s:15:"option_value_id";s:1:"7";s:5:"price";s:0:"";s:20:"menu_option_value_id";s:0:"";}i:2;a:3:{s:15:"option_value_id";s:1:"6";s:5:"price";s:0:"";s:20:"menu_option_value_id";s:0:"";}i:3;a:3:{s:15:"option_value_id";s:2:"15";s:5:"price";s:0:"";s:20:"menu_option_value_id";s:0:"";}}'),
(24, 85, 24, 1, 'a:2:{i:1;a:3:{s:15:"option_value_id";s:2:"13";s:5:"price";s:0:"";s:20:"menu_option_value_id";s:0:"";}i:2;a:3:{s:15:"option_value_id";s:2:"14";s:5:"price";s:0:"";s:20:"menu_option_value_id";s:0:"";}}'),
(25, 84, 22, 0, 'a:3:{i:1;a:3:{s:15:"option_value_id";s:1:"8";s:5:"price";s:0:"";s:20:"menu_option_value_id";s:2:"52";}i:2;a:3:{s:15:"option_value_id";s:1:"9";s:5:"price";s:0:"";s:20:"menu_option_value_id";s:2:"53";}i:3;a:3:{s:15:"option_value_id";s:2:"11";s:5:"price";s:0:"";s:20:"menu_option_value_id";s:2:"54";}}'),
(26, 79, 22, 0, 'a:5:{i:1;a:3:{s:15:"option_value_id";s:1:"8";s:5:"price";s:0:"";s:20:"menu_option_value_id";s:2:"55";}i:2;a:3:{s:15:"option_value_id";s:1:"9";s:5:"price";s:0:"";s:20:"menu_option_value_id";s:2:"56";}i:3;a:3:{s:15:"option_value_id";s:2:"10";s:5:"price";s:0:"";s:20:"menu_option_value_id";s:2:"57";}i:4;a:3:{s:15:"option_value_id";s:2:"11";s:5:"price";s:0:"";s:20:"menu_option_value_id";s:2:"58";}i:5;a:3:{s:15:"option_value_id";s:2:"12";s:5:"price";s:0:"";s:20:"menu_option_value_id";s:2:"59";}}'),
(27, 79, 24, 1, 'a:2:{i:6;a:3:{s:15:"option_value_id";s:2:"13";s:5:"price";s:0:"";s:20:"menu_option_value_id";s:2:"60";}i:7;a:3:{s:15:"option_value_id";s:2:"14";s:5:"price";s:0:"";s:20:"menu_option_value_id";s:2:"61";}}'),
(28, 78, 22, 1, 'a:5:{i:1;a:3:{s:15:"option_value_id";s:1:"8";s:5:"price";s:0:"";s:20:"menu_option_value_id";s:2:"62";}i:2;a:3:{s:15:"option_value_id";s:1:"9";s:5:"price";s:0:"";s:20:"menu_option_value_id";s:2:"63";}i:3;a:3:{s:15:"option_value_id";s:2:"10";s:5:"price";s:0:"";s:20:"menu_option_value_id";s:2:"64";}i:4;a:3:{s:15:"option_value_id";s:2:"11";s:5:"price";s:0:"";s:20:"menu_option_value_id";s:2:"65";}i:5;a:3:{s:15:"option_value_id";s:2:"12";s:5:"price";s:0:"";s:20:"menu_option_value_id";s:2:"66";}}');

ERROR - 2017-06-29 10:32:36 --> Query error: Field 'mealtime_id' doesn't have a default value - Invalid query: 

REPLACE INTO `dkumwmgku_menus` (`menu_id`, `menu_name`, `menu_description`, `menu_price`, `menu_photo`, `menu_category_id`, `stock_qty`, `minimum_qty`, `subtract_stock`, `menu_status`) VALUES
(76, 'PUFF-PUFF', 'Traditional Nigerian donut ball, rolled in sugar', '4.99', 'data/puff_puff.jpg', 24, 856, 3, 1, 1),
(77, 'SCOTCH EGG', 'Boiled egg wrapped in a ground meat mixture, coated in breadcrumbs, and deep-fried.', '2.00', 'data/scotch_egg.jpg', 15, 0, 1, 1, 1),
(78, 'ATA RICE', 'Small pieces of beef, goat, stipe, and tendon sautéed in crushed green Jamaican pepper.', '12.00', 'data/Seared_Ahi_Spinach_Salad.jpg', 16, 1000, 1, 0, 1),
(79, 'RICE AND DODO', '(plantains) w/chicken, fish, beef or goat', '11.99', 'data/rice_and_dodo.jpg', 16, 655, 1, 1, 1),
(80, 'Special Shrimp Deluxe', 'Fresh shrimp sautéed in blended mixture of tomatoes, onion, peppers over choice of rice', '12.99', 'data/deluxe_bbq_shrimp-1.jpg', 18, 265, 1, 1, 1),
(81, 'Whole catfish with rice and vegetables', 'Whole catfish slow cooked in tomatoes, pepper and onion sauce with seasoning to taste', '13.99', 'data/FriedWholeCatfishPlate_lg.jpg', 24, 145, 1, 1, 1),
(82, 'African Salad', 'With baked beans, egg, tuna, onion, tomatoes , green peas and carrot with your choice of dressing.', '8.99', '', 17, 500, 1, 0, 1),
(83, 'Seafood Salad', 'With shrimp, egg and imitation crab meat', '5.99', 'data/seafoods_salad.JPG', 17, 490, 1, 1, 1),
(84, 'EBA', 'Grated cassava', '11.99', 'data/eba.jpg', 16, 407, 1, 1, 1),
(85, 'AMALA', 'Yam flour', '11.99', 'data/DSCF3711.JPG', 19, 470, 1, 1, 1),
(86, 'YAM PORRIDGE', 'in tomatoes sauce', '9.99', 'data/yam_porridge.jpg', 20, 457, 1, 1, 1),
(87, 'Boiled Plantain', 'w/spinach soup', '9.99', 'data/pesto.jpg', 19, 434, 1, 1, 1);

ERROR - 2017-06-29 10:32:36 --> Query error: Field 'type' doesn't have a default value - Invalid query: 

REPLACE INTO `dkumwmgku_working_hours` (`location_id`, `weekday`, `opening_time`, `closing_time`, `status`)
VALUES
  (11, 0, '00:00:00', '23:59:00', 1),
  (11, 1, '00:00:00', '23:59:00', 1),
  (11, 2, '00:00:00', '23:59:00', 1),
  (11, 3, '00:00:00', '23:59:00', 1),
  (11, 4, '00:00:00', '23:59:00', 1),
  (11, 5, '00:00:00', '23:59:00', 1),
  (11, 6, '00:00:00', '23:59:00', 1),
  (12, 0, '02:00:00', '17:59:00', 1),
  (12, 1, '02:00:00', '17:59:00', 1),
  (12, 2, '02:00:00', '17:59:00', 1),
  (12, 3, '02:00:00', '17:59:00', 1),
  (12, 4, '02:00:00', '17:59:00', 1),
  (12, 5, '02:00:00', '17:59:00', 1),
  (12, 6, '02:00:00', '17:59:00', 1),
  (13, 0, '00:00:00', '23:59:00', 0),
  (13, 1, '00:00:00', '23:59:00', 0),
  (13, 2, '00:00:00', '23:59:00', 0),
  (13, 3, '00:00:00', '23:59:00', 0),
  (13, 4, '00:00:00', '23:59:00', 0),
  (13, 5, '00:00:00', '23:59:00', 0),
  (13, 6, '00:00:00', '23:59:00', 0);
