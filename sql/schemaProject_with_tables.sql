create schema if not exists project collate utf8_general_ci;

create table if not exists recipe_entries
(
	recipe_ID int auto_increment
		primary key,
	recipe_name varchar(75) not null,
	recipe_core varchar(20) not null,
	recipe_link text not null,
	recipe_image text not null,
	recipe_description longtext not null
);

create table if not exists spice_entries
(
	spice_ID int auto_increment
		primary key,
	spice_name varchar(30) not null,
	spice_suffix varchar(30) null,
	spice_image text not null,
	spice_description longtext not null
);

create table if not exists subscribe_details
(
	user_ID int auto_increment
		primary key,
	first_name varchar(50) not null,
	last_name varchar(50) not null,
	e_mail varchar(75) not null
);


