--
-- Structure de la table `proprietaires`
--

CREATE TABLE `proprietaires` (
  `id_proprietaire` int(10) UNSIGNED NOT NULL,
  `nom` varchar(60) NOT NULL,
  `prenom` varchar(60) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `code_postal` int(11) NOT NULL,
  `ville` varchar(80) NOT NULL,
  `telephone` varchar(15) NOT NULL,
  `mail` varchar(80) NOT NULL,
  `statut` varchar(20) NOT NULL,
  `office_notarial_titre` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `proprietaires`
--

INSERT INTO `proprietaires` (`id_proprietaire`, `nom`, `prenom`, `adresse`, `code_postal`, `ville`, `telephone`, `mail`, `statut`, `office_notarial_titre`) VALUES
(2, 'HADDOCK', 'Archibald', 'rue de Moulinsard', 74000, 'Annecy', '0635353535', 'ahaddock@gmail.com', 'nom propre', 'étude de  M. Séraphin Lampion '),
(3, 'Tournesol', 'Tryphon', '36, Rue Cornavin ', 74000, 'Annecy', '038815151515', 'ttournesol@gmail.com', 'Gérant SCI ', 'Etude de M. Séraphin lampion');
