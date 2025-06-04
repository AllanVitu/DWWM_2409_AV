CREATE TABLE IF NOT EXISTS candidats (
id_user INT UNSIGNED NOT NULL AUTO_INCREMENT,
lastname_user varchar(50) NOT NULL,
firstname_user varchar(50)NOT NULL,
mail_user varchar(150)NOT NULL,
pass_user varchar(500)NOT NULL,
departement_user int UNSIGNED NOT NULL,
age_user tinyint UNSIGNED NOT NULL,
PRIMARY KEY (id_user)
)ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS departements (
id_dep INT UNSIGNED NOT NULL PRIMARY KEY,
Name varchar(50) NOT NULL,
dep_actif INT UNSIGNED NOT NULL,
 dep_taux decimal(5.2) NOT NULL,
PRIMARY KEY(id_user)
)ENGINE=InnoDB;
