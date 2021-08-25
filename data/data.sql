CREATE TABLE Admin
(
    idAdmin VARCHAR(10) NOT NULL PRIMARY KEY,
    loginAdmin VARCHAR(16) NOT NULL,
    mdpAdmin VARCHAR(8) NOT NULL
)Engine=InnoDB;


INSERT INTO Admin (idAdmin,loginAdmin,mdpadmin) values 
('Admin01','lolo@gmail.com','0000'),
('Admin02','mamy2@gmail.com','123456');