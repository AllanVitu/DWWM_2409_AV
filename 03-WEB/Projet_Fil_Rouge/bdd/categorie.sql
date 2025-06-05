--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id_categorie` int(11) UNSIGNED NOT NULL,
  `lib_categorie` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id_categorie`, `lib_categorie`) VALUES
(1, 'Appartement'),
(2, 'Maison individuelle'),
(3, 'Terrain'),
(4, 'Local professionnel');