

CREATE TABLE `surveydb`.`answer` ( `id` INT(20) NOT NULL AUTO_INCREMENT , `name` VARCHAR(255) NOT NULL , `email`
VARCHAR(255) NOT NULL , `q1` VARCHAR(255) NOT NULL , `q2` VARCHAR(255) NOT NULL , `q3` VARCHAR(255) NOT NULL , `q4`
VARCHAR(255) NOT NULL , `q5` VARCHAR(255) NOT NULL , `q6` VARCHAR(255) NOT NULL , `q7` VARCHAR(255) NOT NULL , `q8`
VARCHAR(255) NOT NULL , `q9` VARCHAR(255) NOT NULL , `q10` VARCHAR(255) NOT NULL , `q11` VARCHAR(255) NOT NULL ,
`message` VARCHAR(255) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;