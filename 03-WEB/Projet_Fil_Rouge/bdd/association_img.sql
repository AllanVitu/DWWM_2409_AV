--
-- Structure de la table `association_img`
--

CREATE TABLE `association_img` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_image` int(10) UNSIGNED NOT NULL,
  `img_ppal` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;