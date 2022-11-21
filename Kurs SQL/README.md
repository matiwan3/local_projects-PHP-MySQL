### SQL course (yt)
https://www.youtube.com/watch?v=BcZmEaX8u3w&list=PL6aekdNhY7DA1wcv-k2MtZxasDeGlre57&index=1
<br>
## *importing database:*
<br>
CREATE TABLE produkty (<br>
    id_produktu int PRIMARY KEY NOT NULL AUTO_INCREMENT UNIQUE,<br>
    producent int NOT NULL,<br>
    model varchar(255) NOT NULL UNIQUE,<br>
    kategoria varchar(255) NOT NULL,<br>
    cena int NOT NULL<br>
);<br>
<br>
CREATE TABLE producenci (<br>
    id_producenta int PRIMARY KEY NOT NULL AUTO_INCREMENT UNIQUE,<br>
    nazwa varchar(255) NOT NULL UNIQUE,<br>
    data_powstania DATE NOT NULL,<br>
    kraj varchar(255) NOT NULL<br>
);<br>
 <br>
 <br>
ALTER TABLE produkty<br>
add constraint producenci_fk foreign key (producent) references producenci(id_producenta);<br>
 <br>
INSERT INTO producenci<br>
VALUES (null, "Samsung", '1995-12-1', "Korea Poludniowa"),<br>
(null, "LG", '1991-9-11', "Korea Poludniowa"),<br>
(null, "Amica", '1997-7-24', "Polska");<br>
 <br>
INSERT INTO produkty<br>
VALUES (null, 1, "EP-200", "pralka", 2500),<br>
(null, 1, "EP-200X", "pralka", 2750),<br>
(null, 1, "EP-300", "pralka", 3199),<br>
(null, 1, "EE-1000", "telewizor", 3999),<br>
(null, 1, "EE-2000", "telewizor", 4499),<br>
(null, 1, "EX-550", "kuchenka", 2100),<br>
(null, 1, "EZ-550", "lodówka", 3500),<br>
(null, 2, "S-300", "pralka", 2999),<br>
(null, 2, "S-400", "pralka", 2199),<br>
(null, 2, "X-500", "telewizor", 1999),<br>
(null, 2, "X-600", "telewizor", 2599),<br>
(null, 2, "Z-700", "lodówka", 2200),<br>
(null, 3, "U3000", "pralka", 1550),<br>
(null, 3, "U3001", "pralka", 2400),<br>
(null, 3, "G1000", "kuchenka", 1999),<br>
(null, 3, "L100", "lodówka", 2500),<br>
(null, 3, "L105", "lodówka", 3150);<br>
