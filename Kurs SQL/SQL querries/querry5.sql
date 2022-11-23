SELECT produkty.model, producenci.nazwa FROM produkty, producenci
WHERE produkty.producent = producenci.id_producenta;

SELECT produkty.model, producenci.nazwa
FROM produkty INNER JOIN producenci # inner = szukaj czesci wspolnej
ON produkty.producent = producenci.id_producenta;

ALTER TABLE produkty CHANGE column id_producenta producent int;
SELECT produkty.model, producenci.nazwa
FROM produkty NATURAL JOIN producenci;  # nazwy kolumn musza byc takie same id_produktuproducent