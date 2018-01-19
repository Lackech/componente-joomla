DROP TABLE IF EXISTS `#__congreso`;
DROP TABLE IF EXISTS `#__congreso_category`;
DROP TABLE IF EXISTS `#__congreso_keywords`;

CREATE TABLE IF NOT EXISTS `#__congreso` (
	`id`       INT(11)     NOT NULL AUTO_INCREMENT,
	`title` VARCHAR(25) NOT NULL,
	`catid` INT(11) NOT NULL,
	`description` VARCHAR(25) NOT NULL,
	`link` VARCHAR(25) NOT NULL,
	`published` tinyint(4) NOT NULL DEFAULT '1',
	PRIMARY KEY (`id`)
)
	ENGINE =MyISAM
	AUTO_INCREMENT =0
	DEFAULT CHARSET =utf8;

CREATE TABLE IF NOT EXISTS `#__congreso_category` (
	`catid`       INT(11)     NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(25) NOT NULL,
	`description` text,
	`published` tinyint(4) NOT NULL DEFAULT '1',
	PRIMARY KEY (`catid`)
)
	ENGINE =MyISAM
	AUTO_INCREMENT =0
	DEFAULT CHARSET =utf8;

CREATE TABLE IF NOT EXISTS `#__congreso_keywords` (
	`idword`       INT(11)     NOT NULL AUTO_INCREMENT,
	`word` VARCHAR(25) NOT NULL,
	`published` tinyint(4) NOT NULL DEFAULT '1',
	PRIMARY KEY (`idword`)
)
	ENGINE =MyISAM
	AUTO_INCREMENT =0
	DEFAULT CHARSET =utf8;
