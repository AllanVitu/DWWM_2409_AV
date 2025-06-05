--
-- Structure de la table `habilitations`
--

CREATE TABLE `habilitations` (
  `id_niveau` int(10) UNSIGNED NOT NULL,
  `libelle_niveau` varchar(50) NOT NULL,
  `droits_habilitation` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `habilitations`
--

INSERT INTO `habilitations` (`id_niveau`, `libelle_niveau`, `droits_habilitation`) VALUES
(1, 'Superadmin', 'Accès tous dossier de ventes'),
(2, 'Agent_commercial', 'Accès à ses dossiers uniquement');