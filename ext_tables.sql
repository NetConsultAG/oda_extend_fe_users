#
# Table structure for table 'fe_users'
#
CREATE TABLE fe_users (
	tx_odaextendfeusers_anrede char(1) DEFAULT '' NOT NULL,
	tx_odaextendfeusers_land char(1) DEFAULT '' NOT NULL,
	tx_odaextendfeusers_vorname varchar(32) DEFAULT '' NOT NULL,
	tx_odaextendfeusers_geburtsdatum int(11) DEFAULT '0' NOT NULL,
	tx_odaextendfeusers_strasse varchar(32) DEFAULT '' NOT NULL,
	tx_odaextendfeusers_postfach varchar(32) DEFAULT '' NOT NULL,
	tx_odaextendfeusers_ausbildungsstand char(1) DEFAULT '' NOT NULL,
	tx_odaextendfeusers_bildungsinstitution varchar(64) DEFAULT '' NOT NULL,
	tx_odaextendfeusers_funktion_abteilung varchar(64) DEFAULT '' NOT NULL,
	tx_odaextendfeusers_kanton char(1) DEFAULT '' NOT NULL,
	tx_odaextendfeusers_region char(2) DEFAULT '' NOT NULL,
	tx_odaextendfeusers_beschreibung text,
	tx_odaextendfeusers_betriebsart int(11) DEFAULT '0' NOT NULL,
	tx_odaextendfeusers_agb tinyint(3) DEFAULT '0' NOT NULL,
	tx_odaextendfeusers_longitude varchar(255) DEFAULT '' NOT NULL,
	tx_odaextendfeusers_latitude varchar(255) DEFAULT '' NOT NULL,
	tx_odaextendfeusers_adresszusatz varchar(32) DEFAULT '' NOT NULL,
	tx_odaextendfeusers_code varchar(32) DEFAULT '' NOT NULL,
	tx_odaextendfeusers_uid_gef varchar(32) DEFAULT '' NOT NULL,
	tx_odaextendfeusers_bur_nummer varchar(32) DEFAULT '' NOT NULL,
);