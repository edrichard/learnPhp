--
-- Structure de la table `logs`
--

CREATE TABLE IF NOT EXISTS `logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `message` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=ARCHIVE  DEFAULT CHARSET=latin1 AUTO_INCREMENT=0 ;