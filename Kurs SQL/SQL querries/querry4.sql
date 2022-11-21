SELECT AVG(cena) AS srednia FROM produkty;
SELECT AVG(cena) AS srednia FROM produkty WHERE kategoria = 'telewizor';
SELECT kategoria, AVG(cena) AS srednia FROM produkty GROUP BY kategoria;
SELECT producent, kategoria, AVG(cena) AS srednia FROM produkty GROUP BY kategoria, producent ORDER BY producent;
SELECT kategoria, AVG(cena) AS srednia FROM produkty GROUP BY kategoria HAVING kategoria ='kuchenka';
SELECT kategoria, AVG(cena) AS srednia FROM produkty GROUP BY kategoria HAVING AVG(cena) > 1500;  # having uzalezniamy of funkcji grupujacych, having dziala na pogrupowanych partiach danych a where selektywnie na osobnych partiach danych

