INSERT INTO membre (nom, date_naissance, genre, email, ville, mdp, image_profil) VALUES
('Harinala', '2007-07-04', 'Homme', 'harinala@gmail.com', 'Antananarivo', 'mdp1', 'harinala.jpg'),
('Rajo', '1985-05-12', 'Homme', 'rajo@gmail.com', 'Fianarantsoa', 'mdp2', 'rajo.jpg'),
('Charlie', '1992-09-20', 'Homme', 'charlie@gmail.com', 'Toamasina', 'mdp3', 'charlie.jpg'),
('Dina', '1995-12-15', 'Femme', 'dina@gmail.com', 'Mahajanga', 'mdp4', 'dina.jpg');

INSERT INTO categorie_objet (nom_categorie) VALUES
('Esthétique'),
('Bricolage'),
('Mécanique'),
('Cuisine');

INSERT INTO emprunt (id_objet, id_membre, date_emprunt, date_retour) VALUES
(1, 2, '2025-07-01', '2025-07-15'),
(5, 3, '2025-07-02', '2025-07-16'),
(8, 4, '2025-07-03', '2025-07-18'),
(12, 1, '2025-07-04', '2025-07-19'),
(17, 3, '2025-07-05', '2025-07-20'),
(21, 2, '2025-07-06', '2025-07-22'),
(25, 4, '2025-07-07', '2025-07-23'),
(29, 1, '2025-07-08', '2025-07-24'),
(33, 2, '2025-07-09', '2025-07-25'),
(38, 1, '2025-07-10', '2025-07-26');

INSERT INTO images_objet (id_objet, nom_image) VALUES
(1, 'obj1.jpg'), (11, 'obj1.jpg'), (21, 'obj1.jpg'), (31, 'obj1.jpg'),
(2, 'obj2.jpg'), (12, 'obj2.jpg'), (22, 'obj2.jpg'), (32, 'obj2.jpg'),
(3, 'obj3.jpg'), (13, 'obj3.jpg'), (23, 'obj3.jpg'), (33, 'obj3.jpg'),
(4, 'obj4.jpg'), (14, 'obj4.jpg'), (24, 'obj4.jpg'), (34, 'obj4.jpg'),
(5, 'obj5.jpg'), (15, 'obj5.jpg'), (25, 'obj5.jpg'), (35, 'obj5.jpg'),
(6, 'obj6.jpg'), (16, 'obj6.jpg'), (26, 'obj6.jpg'), (36, 'obj6.jpg'),
(7, 'obj7.jpg'), (17, 'obj7.jpg'), (27, 'obj7.jpg'), (37, 'obj7.jpg'),
(8, 'obj8.jpg'), (18, 'obj8.jpg'), (28, 'obj8.jpg'), (38, 'obj8.jpg'),
(9, 'obj9.jpg'), (19, 'obj9.jpg'), (29, 'obj9.jpg'), (39, 'obj9.jpg'),
(10, 'obj10.jpg'), (20, 'obj10.jpg'), (30, 'obj10.jpg'), (40, 'obj10.jpg');

INSERT INTO objet (nom_objet, id_categorie, id_membre) VALUES
('Sèche-cheveux', 1, 1),
('Perceuse', 2, 1),
('Clé à molette', 3, 1),
('Mixeur', 4, 1),
('Lisseur', 1, 1),
('Tournevis', 2, 1),
('Pompe à air', 3, 1),
('Robot cuiseur', 4, 1),
('Crème visage', 1, 1),
('Scie sauteuse', 2, 1),

('Sèche-cheveux', 1, 2),
('Perceuse', 2, 2),
('Clé à molette', 3, 2),
('Mixeur', 4, 2),
('Lisseur', 1, 2),
('Tournevis', 2, 2),
('Pompe à air', 3, 2),
('Robot cuiseur', 4, 2),
('Crème visage', 1, 2),
('Scie sauteuse', 2, 2),

('Sèche-cheveux', 1, 3),
('Perceuse', 2, 3),
('Clé à molette', 3, 3),
('Mixeur', 4, 3),
('Lisseur', 1, 3),
('Tournevis', 2, 3),
('Pompe à air', 3, 3),
('Robot cuiseur', 4, 3),
('Crème visage', 1, 3),
('Scie sauteuse', 2, 3),

('Sèche-cheveux', 1, 4),
('Perceuse', 2, 4),
('Clé à molette', 3, 4),
('Mixeur', 4, 4),
('Lisseur', 1, 4),
('Tournevis', 2, 4),
('Pompe à air', 3, 4),
('Robot cuiseur', 4, 4),
('Crème visage', 1, 4),
('Scie sauteuse', 2, 4);
