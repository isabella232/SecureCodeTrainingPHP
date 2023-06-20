#Change {1..34} to the number of users in training.
#Database and Table Create and Insert.
for i in {1..34}; do echo -e "CREATE DATABASE db"$i";\nUSE db"$i";\nCREATE TABLE users(id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,username varchar(20) DEFAULT NULL,password varchar(20) DEFAULT NULL,firstname varchar(20) DEFAULT NULL,surname varchar(20) DEFAULT NULL,email varchar(255) DEFAULT NULL);\nINSERT INTO users VALUES(1,'jane','jane','Jane','Doe','jane@email.com');\nINSERT INTO users VALUES(2,'john','john','John','Doe','john@email.com');"; done > create_db_table_and_insert.sql
#Create Users and Passwordc (then use the config_update.sh)
#Change {1..34} to the number of users in training.
for i in {1..34}; do echo -e "CREATE USER learning"$i"@localhost IDENTIFIED BY 'Secure@Password@"$i"';\nGRANT ALL PRIVILEGES on db"$i".* to learning"$i"@localhost;"; done > create_user_and_grant.sql