INSERT INTO membre (nom, date_naissance, genre, email, ville, mdp, image_profil) VALUES
('Alice', '1990-01-01', 'Femme', 'alice@example.com', 'Antananarivo', 'pass123', 'alice.jpg'),
('Bob', '1985-05-12', 'Homme', 'bob@example.com', 'Fianarantsoa', 'pass123', 'bob.jpg'),
('Charlie', '1992-09-20', 'Homme', 'charlie@example.com', 'Toamasina', 'pass123', 'charlie.jpg'),
('Dina', '1995-12-15', 'Femme', 'dina@example.com', 'Mahajanga', 'pass123', 'dina.jpg');

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