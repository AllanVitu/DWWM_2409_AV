--
-- Structure de la table `documents`
--

CREATE TABLE `documents` (
  `id_document` int(10) UNSIGNED NOT NULL,
  `titre_doc` varchar(250) NOT NULL,
  `chemin_doc` varchar(300) NOT NULL,
  `auteur_doc` varchar(100) NOT NULL,
  `id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
