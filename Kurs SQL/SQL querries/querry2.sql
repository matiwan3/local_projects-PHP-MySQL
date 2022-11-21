# FILTROWANIE REKORDÓW
SELECT AVG(cena) FROM produkty WHERE producent=1;
SELECT SUM(cena) FROM produkty;
SELECT COUNT(cena) FROM produkty;
SELECT MIN(cena) FROM produkty;
SELECT AVG(cena) AS srednia FROM produkty;
SELECT * FROM produkty ORDER BY cena DESC;
SELECT * FROM produkty ORDER BY kategoria DESC, cena DESC;
SELECT * FROM produkty WHERE model LIKE('EE-_000') ORDER BY model;
SELECT * FROM produkty WHERE model LIKE('_P%') ORDER BY model;
SELECT * FROM produkty WHERE model LIKE('E_-2%') ORDER BY model;






