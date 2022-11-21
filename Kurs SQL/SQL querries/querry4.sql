SELECT AVG(cena) AS srednia FROM produkty;
SELECT AVG(cena) AS srednia FROM produkty WHERE kategoria = 'telewizor';
SELECT kategoria, AVG(cena) AS srednia FROM produkty GROUP BY kategoria;
