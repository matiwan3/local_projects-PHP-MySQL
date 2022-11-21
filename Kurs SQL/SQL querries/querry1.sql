SELECT * from produkty;
show tables;
SELECT * FROM producenci;
SELECT nazwa FROM producenci WHERE kraj="Korea Poludniowa";
SELECT * FROM produkty WHERE producent=3 OR producent=1;
SELECT * FROM produkty WHERE producent IN(1);
SELECT * FROM produkty WHERE kategoria="pralka" AND producent=1;
SELECT * FROM produkty WHERE kategoria="pralka" AND cena <= 2500;
SELECT * FROM produkty WHERE kategoria="pralka" AND cena > 2500;
SELECT model AS nazwa, kategoria, cena AS "$$$" FROM produkty WHERE kategoria="pralka" AND cena >= 2500;


