CREATE DATABASE live_edit;
USE live_edit;
CREATE TABLE biodata (

                id INT unsigned not null auto_increment primary key,
                surname VARCHAR(40) not null,
                firstname VARCHAR(255),
                email VARCHAR(255),
                phone_number VARCHAR(255)

                 );

INSERT INTO biodata ( surname, firstname, email, phone_number) VALUES ( "Ibrahim", "Olayinka", "ibrahimolayinkaa@gmail.com", 07065643303);
INSERT INTO biodata ( surname, firstname, email, phone_number) VALUES ( "Yusuf", "Omotoyosi", "yusufomotoyosi@gmail.com", 08055646303);
INSERT INTO biodata ( surname, firstname, email, phone_number) VALUES ( "Fisayo", "Adeniyi", "fisayoade@scamat.org", 08106642203);
