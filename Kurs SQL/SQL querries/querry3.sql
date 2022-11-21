SELECT * FROM produkty ORDER BY cena DESC LIMIT 5;
SELECT kategoria FROM produkty;
SELECT DISTINCT kategoria, producent FROM produkty; # unikalne kategorie;
SELECT concat(upper(kategoria), ' : ', model, ' cena: ', cena , ' zl') AS produkt FROM produkty LIMIT 7;