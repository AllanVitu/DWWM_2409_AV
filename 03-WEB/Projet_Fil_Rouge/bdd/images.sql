--
-- Structure de la table `images`
--

CREATE TABLE `images` (
  `id_image` int(11) UNSIGNED NOT NULL,
  `titre_image` varchar(250) NOT NULL,
  `chemin_image` varchar(300) NOT NULL,
  `texte_alternatif` varchar(250) NOT NULL,
  `extension` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;