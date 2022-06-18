# CodeIgniter 4 Framework

- Implementación de PHP CodeIgniter 4 para la realizción de CRUD de usuarios, en la tabla tb_users
- creación de la tabla en SQL:

CREATE TABLE `biblioteca`.tb_users (`id` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(256) NOT NULL , `document` VARCHAR(256) NOT NULL , `password` VARCHAR(256) NOT NULL , `birth_date` DATE NOT NULL , `phone` VARCHAR(256) NOT NULL , `eps_id` INT NOT NULL , `role_id` INT NOT NULL , `created_at` DATETIME NOT NULL , `gender` VARCHAR(256) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

- La base de datos se configura en Config/Database.php
- La Carpeta de la aplicación se instala en la carpeta htdocs de la carpeta de instalación de XAMPP
 para una integración con la base de datos de MySQL.