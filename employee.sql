CREATE TABLE users ( 
id int(10) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
employee_id int(10) NOT NULL, 
fnameth varchar(255) NOT NULL, 
lnameth varchar(255) NOT NULL, 
fnameeng varchar(255) NOT NULL, 
lnameeng varchar(255) NOT NULL, 
nickname varchar(255) NOT NULL, 
floor varchar(255) NOT NULL, 
extn varchar(255) NOT NULL, 
usermail varchar(255) NOT NULL, 
password varchar(255) NOT NULL, 
phonenumber varchar(255) NOT NULL, 
sex varchar(255) NOT NULL, 
workgroup varchar(255) NOT NULL, 
department varchar(255) NOT NULL, 
departmenteng varchar(255) NOT NULL, 
roleuser varchar(255) NOT NULL, 
station varchar(255) NOT NULL, 
create_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP 
)ENGINE=INNODB DEFAULT CHARSET=utf8;