SELECT * FROM produkty;
SELECT model, cena, 
CASE 
	WHEN cena <= 2000 THEN 'TANIO'
    WHEN cena >= 3000 THEN 'DROGO'
    ELSE 'ŚREDNIO'
END AS cena_własna
FOM produkty ORDER BY cena_własna DESC;