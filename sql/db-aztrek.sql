-- Selection de tous les pays 

USE dcpro9_aztrek;
SELECT *
FROM pays;

-- getOneSejour



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

-- Selection des infos des séjours pour les afficher dans la page séjour
-- getone sejour : sejour + pays


USE dcpro9_aztrek;
SELECT *
FROM pays
INNER JOIN sejour ON pays.id = sejour.pays_id
WHERE pays.id = sejour.id;

-- getalldepartsparsejour : depart where sejour_id = sejour
-- voir avec Pierre selection des colonnes 

USE dcpro9_aztrek;
  SELECT depart.*,
        DATE_FORMAT(depart.date_depart, "%d-%m-%Y") AS date_depart,
        depart.places_totale - SUM(reservation.nb_place) AS place_restante
    FROM depart 
    LEFT JOIN reservation ON reservation.depart_id = depart.id
    WHERE depart.sejour_id = 1
    GROUP BY depart.id



-- getimagesejour : sejour_image where sejour_id = sejour

USE dcpro9_aztrek;
SELECT *
FROM sejour_image
WHERE sejour_id = 1

-- getprixparsejour

USE dcpro9_aztrek;
SELECT 
    depart.prix,
    sejour.id,
    sejour.titre,
    pays.label
    FROM sejour
INNER JOIN depart ON sejour.id = depart.sejour_id
INNER JOIN pays ON sejour.pays_id = pays.id
WHERE sejour.id = 1 


-- getcomm : sejour inner join user where sejour
-- voir avec Pierre pour la selection des items necessaire

USE dcpro9_aztrek;
SELECT *
FROM commentaire
INNER JOIN sejour ON commentaire.sejour_id = sejour.id
INNER JOIN user ON commentaire.sejour_id = user.id
WHERE sejour.id = 1


--getOneUser (pour l'admin)

USE dcpro9_aztrek;
SELECT *
FROM user 
WHERE user.id = 1

-- getAllUser (pour l'admin)
-- voir avec Pierre la selection des items 


USE dcpro9_aztrek;
SELECT user.*,
COUNT(commentaire.id) AS total_commentaire,
COUNT(reservation.id) AS total_reservation,
CONCAT(user.nom, ' ', user.prenom) AS nom_complet
FROM user 
INNER JOIN commentaire ON user.id = commentaire.user_id
INNER JOIN reservation ON reservation.user_id = user.id 
GROUP BY user.id 


USE dcpro9_aztrek;
SELECT *,
DATE_FORMAT(depart.date_depart, "%d-%m-%Y") AS date_depart
FROM sejour 
INNER JOIN depart ON sejour.id = depart.sejour_id