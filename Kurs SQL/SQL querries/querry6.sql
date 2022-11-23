SELECT * FROM produkty ORDER BY id_produktu DESC LIMIT 2;
SELECT * FROM produkty;
INSERT INTO produkty (id_produktu, producent, model, kategoria, cena)
VALUES (NULL, 1, 'EP-300X','pralka', 3250);

INSERT INTO produkty (producent, model, kategoria, cena)
VALUES (2, 'S-500', 'pralka', 2299),   # id dodaje się samo
(3, 'G1500', 'kuchenka', 2499);  