-- Selection de tous les pays 

USE dcpro9_aztrek;
SELECT *
FROM pays;

-- Selection des sejours avec le booléen en avant pour la section en avant du site 

USE dcpro9_aztrek;
SELECT *
FROM sejour 
WHERE sejour.en_avant = 1;

-- Selection des séjours selon les pays

USE dcpro9_aztrek;
SELECT 
    sejour.titre,
    sejour.image,
    pays.id,
    pays.label
FROM sejour
INNER JOIN pays ON pays.id = sejour.pays_id;