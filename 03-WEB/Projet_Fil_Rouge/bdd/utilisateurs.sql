--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id_utilisateur` int(10) UNSIGNED NOT NULL,
  `nom_utilisateur` varchar(60) NOT NULL,
  `prenom_utilisateur` varchar(50) NOT NULL,
  `mail_utilisateur` varchar(150) NOT NULL,
  `pass_utilisateur` varchar(400) NOT NULL,
  `id_niveau` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id_utilisateur`, `nom_utilisateur`, `prenom_utilisateur`, `mail_utilisateur`, `pass_utilisateur`, `id_niveau`) VALUES
(1, 'CASTAFIORE', 'Bianca', 'bcastafiore@gmail.com', '$2y$10$2osdGr.NcLSyh6BcwkFIrO4.39XwM8G1gVltSKX5BZwE4Buxz6mZK', 2),
(2, 'Szut', 'Piotr', 'Pszut@gmail.com', '$2y$10$xXYfyPb.VS2MmhUqCQGNWeJPm/rYqifT3HNHVxXr0.dqdC8XDb09a', 2);
