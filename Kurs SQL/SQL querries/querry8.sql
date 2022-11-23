SELECT * FROM produkty;
INSERT INTO produkty (id_produktu, producent, model, kategoria, cena) VALUES (NULL, 1, 'EP-300S','pralka', 3399);

DELETE FROM produkty WHERE  id_produktu IN(18,19,20);

SET SQL_SAFE_UPDATES = 0;  # bezpieczne uaktualnianie 1 - wlaczony / 0 - wylaczony;