create table 'passenger'(
'id'int(3) NOT NULL,
'fullname' varchar(20) default null,
'lastname' varchar(20) default null,
'email' varchar(20) default null,
'username' varchar(20) default null,
'password' varchar(20) default null,
'contact' varchar(30) default null,
PRIMARY KEY ('id')
)ENGINE=InnoDB Default Charset=utf8mb4 collate=utf8mb4_0900_ai_ci;