SELECT * FROM produkty WHERE id_produktu IN(19,20);

UPDATE produkty SET model = 'EP-350X', cena = 3200 WHERE id_produktu = 18;
UPDATE produkty SET cena = cena - 100 WHERE id_produktu IN(19,20);
