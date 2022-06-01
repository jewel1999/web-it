
CREATE TABLE user_test ( 
id_user int(10) AUTO_INCREMENT PRIMARY key, 
firstname varchar (255) NOT NULL, 
lastname varchar (255) NOT NULL, 
useremail varchar (255) NOT NULL, 
user_password varchar (255) NOT NULL, 
uder_role varchar (255) NOT NULL, 
create_time Timestamp DEFAULT CURRENT_TIMESTAMP 
)ENGINE=INNODB DEFAULT charset=utf8;