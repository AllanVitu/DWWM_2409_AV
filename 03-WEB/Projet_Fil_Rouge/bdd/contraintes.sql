--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `association_img`
--
ALTER TABLE `association_img`
  ADD CONSTRAINT `FK_bien_immmo` FOREIGN KEY (`id`) REFERENCES `biens_immobiliers` (`id`),
  ADD CONSTRAINT `FK_img` FOREIGN KEY (`id_image`) REFERENCES `images` (`id_image`);

--
-- Contraintes pour la table `biens_immobiliers`
--
ALTER TABLE `biens_immobiliers`
  ADD CONSTRAINT `biens_immobiliers_ibfk_1` FOREIGN KEY (`id_utilisateur_commercial`) REFERENCES `utilisateurs` (`id_utilisateur`),
  ADD CONSTRAINT `biens_immobiliers_ibfk_2` FOREIGN KEY (`id_categorie`) REFERENCES `categories` (`id_categorie`),
  ADD CONSTRAINT `fK_proprietaire` FOREIGN KEY (`id_proprietaire`) REFERENCES `proprietaires` (`id_proprietaire`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_departement` FOREIGN KEY (`num_departement`) REFERENCES `departements` (`id_dep`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `documents`
--
ALTER TABLE `documents`
  ADD CONSTRAINT `documents_ibfk_1` FOREIGN KEY (`id`) REFERENCES `biens_immobiliers` (`id`);

--
-- Contraintes pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD CONSTRAINT `utilisateurs_ibfk_1` FOREIGN KEY (`id_niveau`) REFERENCES `habilitations` (`id_niveau`);
COMMIT;