CREATE TABLE `%prefix%tables` (
	`id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
	`title` VARCHAR(255) NOT NULL,
	`created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`settings` TEXT NOT NULL,
	`meta` TEXT NULL AFTER `created_at`,
	PRIMARY KEY (`id`)
)
	DEFAULT CHARSET=utf8
;

CREATE TABLE `%prefix%columns` (
	`id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
	`table_id` INT(10) UNSIGNED NULL DEFAULT NULL,
	`index` INT(10) UNSIGNED NOT NULL,
	`title` VARCHAR(255) NOT NULL,
	PRIMARY KEY (`id`)
)
	DEFAULT CHARSET=utf8
;

CREATE TABLE `%prefix%rows` (
	`id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
	`table_id` INT(10) UNSIGNED NULL DEFAULT NULL,
	`data` TEXT NOT NULL,
	PRIMARY KEY (`id`)
)
	DEFAULT CHARSET=utf8
;

CREATE TABLE `%prefix%diagrams` (
	`id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
	`table_id` INT(10) UNSIGNED NULL DEFAULT NULL,
	`start_row` INT(10) UNSIGNED NULL DEFAULT NULL,
	`start_col` INT(10) UNSIGNED NULL DEFAULT NULL,
	`end_row` INT(10) UNSIGNED NULL DEFAULT NULL,
	`end_col` INT(10) UNSIGNED NULL DEFAULT NULL,
	`data` MEDIUMTEXT NULL DEFAULT NULL,
	PRIMARY KEY (`id`)
)
DEFAULT CHARSET=utf8
;


ALTER TABLE `%prefix%tables`
    ADD COLUMN `meta` TEXT NULL AFTER `created_at`;