-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 06 mars 2023 à 15:50
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `datkominformatics`
--

-- --------------------------------------------------------

--
-- Structure de la table `blog`
--

CREATE TABLE `blog` (
  `id` int(9) NOT NULL,
  `titre` varchar(256) NOT NULL,
  `what` varchar(256) NOT NULL,
  `prefix` varchar(256) NOT NULL,
  `cover` varchar(256) NOT NULL,
  `minlecture` varchar(256) NOT NULL,
  `note` longtext NOT NULL,
  `datepub` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `branding`
--

CREATE TABLE `branding` (
  `id` int(9) NOT NULL,
  `nom` varchar(256) NOT NULL,
  `phone` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `want` varchar(256) NOT NULL,
  `about` varchar(256) NOT NULL,
  `datedemande` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `careers`
--

CREATE TABLE `careers` (
  `id` int(9) NOT NULL,
  `what` varchar(256) NOT NULL,
  `nom` varchar(256) NOT NULL,
  `dateligne` date NOT NULL DEFAULT current_timestamp(),
  `datedebut` date NOT NULL,
  `message` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `design`
--

CREATE TABLE `design` (
  `id` int(9) NOT NULL,
  `nom` varchar(256) NOT NULL,
  `phone` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `want` varchar(256) NOT NULL,
  `about` varchar(256) NOT NULL,
  `datedemande` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `dreamstudio`
--

CREATE TABLE `dreamstudio` (
  `id` int(9) NOT NULL,
  `nom` varchar(256) NOT NULL,
  `intro` varchar(256) NOT NULL,
  `about` varchar(256) NOT NULL,
  `cover` varchar(256) NOT NULL,
  `lien` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `juridical`
--

CREATE TABLE `juridical` (
  `id` int(9) NOT NULL,
  `typedoc` varchar(255) NOT NULL,
  `contenu` longtext NOT NULL,
  `datepub` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `juridical`
--

INSERT INTO `juridical` (`id`, `typedoc`, `contenu`, `datepub`) VALUES
(1, 'legalnotice', '&lt;h2 style=&quot;font-family: Gilroy_Extrabold; line-height: 1.2; font-size: 2rem; color: rgb(33, 37, 41);&quot;&gt;D&eacute;finitions&lt;/h2&gt;&lt;p style=&quot;font-size: 17px; margin-bottom: 1rem; color: rgb(33, 37, 41); font-family: Montserrat_Regular !important;&quot;&gt;Client :&amp;nbsp;tout professionnel ou personne physique capable au sens des articles 1123 et suivants du Code civil, ou personne morale, qui visite le Site objet des pr&eacute;sentes conditions g&eacute;n&eacute;rales.&lt;br&gt;&lt;br&gt;Prestations et Services :&amp;nbsp;&lt;a href=&quot;https://www.datkominformatics.com/&quot; style=&quot;font-family: Montserrat_SemiBold; font-size: 12px; font-weight: 400; text-transform: uppercase; letter-spacing: calc(2px + (3 * (100vw - 320px)) / 1080); color: rgb(0, 123, 255); text-decoration: none;&quot;&gt;DATKOM - INFORMATICS&lt;/a&gt;&amp;nbsp;met &agrave; disposition des Clients.&lt;br&gt;&lt;br&gt;Contenu :&amp;nbsp;Ensemble des &eacute;l&eacute;ments constituants l&rsquo;information pr&eacute;sente sur le Site, notamment textes &ndash; images &ndash; vid&eacute;os.&lt;br&gt;&lt;br&gt;Informations clients :&amp;nbsp;Ci-apr&egrave;s d&eacute;nomm&eacute; &laquo; Information (s) &raquo; qui correspondent &agrave; l&rsquo;ensemble des donn&eacute;es personnelles susceptibles d&rsquo;&ecirc;tre d&eacute;tenues par&amp;nbsp;&lt;a href=&quot;https://www.datkominformatics.com/&quot; style=&quot;font-family: Montserrat_SemiBold; font-size: 12px; font-weight: 400; text-transform: uppercase; letter-spacing: calc(2px + (3 * (100vw - 320px)) / 1080); color: rgb(0, 123, 255); text-decoration: none;&quot;&gt;DATKOM - INFORMATICS&lt;/a&gt;&amp;nbsp;pour la gestion de votre compte, de la gestion de la relation client et &agrave; des fins d&rsquo;analyses et de statistiques. Utilisateur :&amp;nbsp;Internaute se connectant, utilisant le site susnomm&eacute;.&lt;br&gt;&lt;br&gt;Informations personnelles :&amp;nbsp;&laquo; Les informations qui permettent, sous quelque forme que ce soit, directement ou non, l&#039;identification des personnes physiques auxquelles elles s&#039;appliquent &raquo; (article 4 de la loi n&deg; 78-17 du 6 janvier 1978).&lt;br&gt;&lt;br&gt;Les termes &laquo; donn&eacute;es &agrave; caract&egrave;re personnel &raquo;, &laquo; personne concern&eacute;e &raquo;, &laquo; sous-traitant &raquo; et &laquo; donn&eacute;es sensibles &raquo; ont le sens d&eacute;fini par le R&egrave;glement G&eacute;n&eacute;ral sur la Protection des Donn&eacute;es (RGPD : n&deg; 2016-679)&lt;br&gt;&lt;br&gt;&lt;/p&gt;&lt;h2 style=&quot;font-family: Gilroy_Extrabold; line-height: 1.2; font-size: 2rem; color: rgb(33, 37, 41);&quot;&gt;1. Pr&eacute;sentation du site internet.&lt;/h2&gt;&lt;p style=&quot;font-size: 17px; margin-bottom: 1rem; color: rgb(33, 37, 41); font-family: Montserrat_Regular !important;&quot;&gt;En vertu de l&#039;article 6 de la loi n&deg; 2004-575 du 21 juin 2004 pour la confiance dans l&#039;&eacute;conomie num&eacute;rique, il est pr&eacute;cis&eacute; aux utilisateurs du site internet&amp;nbsp;&lt;a href=&quot;https://www.datkominformatics.com/&quot; style=&quot;font-family: Montserrat_SemiBold; font-size: 12px; font-weight: 400; text-transform: uppercase; letter-spacing: calc(2px + (3 * (100vw - 320px)) / 1080); color: rgb(0, 123, 255); text-decoration: none;&quot;&gt;DATKOM - INFORMATICS&lt;/a&gt;&amp;nbsp;l&#039;identit&eacute; des diff&eacute;rents intervenants dans le cadre de sa r&eacute;alisation et de son suivi :&lt;br&gt;&lt;br&gt;Propri&eacute;taire&amp;nbsp;: SARL DATKOM INORMATICS Capital social de 100000&euro; &ndash; London, England 0000 Londres&lt;br&gt;&lt;br&gt;Responsable publication&amp;nbsp;: MOUKE Brice &ndash; bmouke17@gmail.com&lt;br&gt;&lt;br&gt;Le responsable publication est une personne physique ou une personne morale.&lt;br&gt;&lt;br&gt;Webmaster&amp;nbsp;: DATKOM INORMATICS &ndash;&amp;nbsp;&lt;a href=&quot;https://www.datkominformatics.com/&quot; style=&quot;font-family: Montserrat_SemiBold; font-size: 12px; font-weight: 400; text-transform: uppercase; letter-spacing: calc(2px + (3 * (100vw - 320px)) / 1080); color: rgb(0, 123, 255); text-decoration: none;&quot;&gt;DATKOM - INFORMATICS&lt;/a&gt;&lt;br&gt;&lt;br&gt;H&eacute;bergeur&amp;nbsp;: HOSTINGER, FRANCE&lt;br&gt;&lt;br&gt;D&eacute;l&eacute;gu&eacute; &agrave; la protection des donn&eacute;es&amp;nbsp;: MOUKE Brice &ndash; bmouke17@gmail.com&lt;br&gt;&lt;br&gt;Ce mod&egrave;le de mentions l&eacute;gales est propos&eacute; par le&amp;nbsp;g&eacute;n&eacute;rateur gratuit de mentions l&eacute;gales pour un site internet&lt;/p&gt;&lt;h2 style=&quot;font-family: Gilroy_Extrabold; line-height: 1.2; font-size: 2rem; color: rgb(33, 37, 41);&quot;&gt;2. Conditions g&eacute;n&eacute;rales d&rsquo;utilisation du site et des services propos&eacute;s.&lt;/h2&gt;&lt;p style=&quot;font-size: 17px; margin-bottom: 1rem; color: rgb(33, 37, 41); font-family: Montserrat_Regular !important;&quot;&gt;Le Site constitue une &oelig;uvre de l&rsquo;esprit prot&eacute;g&eacute;e par les dispositions du Code de la Propri&eacute;t&eacute; Intellectuelle et des R&eacute;glementations Internationales applicables. Le Client ne peut en aucune mani&egrave;re r&eacute;utiliser, c&eacute;der ou exploiter pour son propre compte tout ou partie des &eacute;l&eacute;ments ou travaux du Site.&lt;br&gt;&lt;br&gt;L&rsquo;utilisation du site&amp;nbsp;&lt;a href=&quot;https://www.datkominformatics.com/&quot; style=&quot;font-family: Montserrat_SemiBold; font-size: 12px; font-weight: 400; text-transform: uppercase; letter-spacing: calc(2px + (3 * (100vw - 320px)) / 1080); color: rgb(0, 123, 255); text-decoration: none;&quot;&gt;DATKOM - INFORMATICS&lt;/a&gt;&amp;nbsp;implique l&rsquo;acceptation pleine et enti&egrave;re des conditions g&eacute;n&eacute;rales d&rsquo;utilisation ci-apr&egrave;s d&eacute;crites. Ces conditions d&rsquo;utilisation sont susceptibles d&rsquo;&ecirc;tre modifi&eacute;es ou compl&eacute;t&eacute;es &agrave; tout moment, les utilisateurs du site&amp;nbsp;&lt;a href=&quot;https://www.datkominformatics.com/&quot; style=&quot;font-family: Montserrat_SemiBold; font-size: 12px; font-weight: 400; text-transform: uppercase; letter-spacing: calc(2px + (3 * (100vw - 320px)) / 1080); color: rgb(0, 123, 255); text-decoration: none;&quot;&gt;DATKOM - INFORMATICS&lt;/a&gt;&amp;nbsp;sont donc invit&eacute;s &agrave; les consulter de mani&egrave;re r&eacute;guli&egrave;re.&lt;br&gt;&lt;br&gt;Ce site internet est normalement accessible &agrave; tout moment aux utilisateurs. Une interruption pour raison de maintenance technique peut &ecirc;tre toutefois d&eacute;cid&eacute;e par&amp;nbsp;&lt;a href=&quot;https://www.datkominformatics.com/&quot; style=&quot;font-family: Montserrat_SemiBold; font-size: 12px; font-weight: 400; text-transform: uppercase; letter-spacing: calc(2px + (3 * (100vw - 320px)) / 1080); color: rgb(0, 123, 255); text-decoration: none;&quot;&gt;DATKOM - INFORMATICS&lt;/a&gt;, qui s&rsquo;efforcera alors de communiquer pr&eacute;alablement aux utilisateurs les dates et heures de l&rsquo;intervention. Le site web&amp;nbsp;&lt;a href=&quot;https://www.datkominformatics.com/&quot; style=&quot;font-family: Montserrat_SemiBold; font-size: 12px; font-weight: 400; text-transform: uppercase; letter-spacing: calc(2px + (3 * (100vw - 320px)) / 1080); color: rgb(0, 123, 255); text-decoration: none;&quot;&gt;DATKOM - INFORMATICS&lt;/a&gt;&amp;nbsp;est mis &agrave; jour r&eacute;guli&egrave;rement par&amp;nbsp;DATKOM-INFORMATICS&lt;br&gt;&lt;br&gt;De la m&ecirc;me fa&ccedil;on, les mentions l&eacute;gales peuvent &ecirc;tre modifi&eacute;es &agrave; tout moment : elles s&rsquo;imposent n&eacute;anmoins &agrave; l&rsquo;utilisateur qui est invit&eacute; &agrave; s&rsquo;y r&eacute;f&eacute;rer le plus souvent possible afin d&rsquo;en prendre connaissance.&lt;br&gt;&lt;br&gt;&lt;/p&gt;&lt;h2 style=&quot;font-family: Gilroy_Extrabold; line-height: 1.2; font-size: 2rem; color: rgb(33, 37, 41);&quot;&gt;3. Description des services fournis.&lt;/h2&gt;&lt;p style=&quot;font-size: 17px; margin-bottom: 1rem; color: rgb(33, 37, 41); font-family: Montserrat_Regular !important;&quot;&gt;Le site internet&amp;nbsp;&lt;a href=&quot;https://www.datkominformatics.com/&quot; style=&quot;font-family: Montserrat_SemiBold; font-size: 12px; font-weight: 400; text-transform: uppercase; letter-spacing: calc(2px + (3 * (100vw - 320px)) / 1080); color: rgb(0, 123, 255); text-decoration: none;&quot;&gt;DATKOM - INFORMATICS&lt;/a&gt;&amp;nbsp;a pour objet de fournir une information concernant l&rsquo;ensemble des activit&eacute;s de la soci&eacute;t&eacute;.&amp;nbsp;&lt;a href=&quot;https://www.datkominformatics.com/&quot; style=&quot;font-family: Montserrat_SemiBold; font-size: 12px; font-weight: 400; text-transform: uppercase; letter-spacing: calc(2px + (3 * (100vw - 320px)) / 1080); color: rgb(0, 123, 255); text-decoration: none;&quot;&gt;DATKOM - INFORMATICS&lt;/a&gt;&amp;nbsp;s&rsquo;efforce de fournir sur le site&amp;nbsp;&lt;a href=&quot;https://www.datkominformatics.com/&quot; style=&quot;font-family: Montserrat_SemiBold; font-size: 12px; font-weight: 400; text-transform: uppercase; letter-spacing: calc(2px + (3 * (100vw - 320px)) / 1080); color: rgb(0, 123, 255); text-decoration: none;&quot;&gt;DATKOM - INFORMATICS&lt;/a&gt;&amp;nbsp;des informations aussi pr&eacute;cises que possible.&lt;br&gt;&lt;br&gt;Toutefois, il ne pourra &ecirc;tre tenu responsable des oublis, des inexactitudes et des carences dans la mise &agrave; jour, qu&rsquo;elles soient de son fait ou du fait des tiers partenaires qui lui fournissent ces informations.&lt;br&gt;&lt;br&gt;Toutes les informations indiqu&eacute;es sur le site&amp;nbsp;&lt;a href=&quot;https://www.datkominformatics.com/&quot; style=&quot;font-family: Montserrat_SemiBold; font-size: 12px; font-weight: 400; text-transform: uppercase; letter-spacing: calc(2px + (3 * (100vw - 320px)) / 1080); color: rgb(0, 123, 255); text-decoration: none;&quot;&gt;DATKOM - INFORMATICS&lt;/a&gt;&amp;nbsp;sont donn&eacute;es &agrave; titre indicatif, et sont susceptibles d&rsquo;&eacute;voluer. Par ailleurs, les renseignements figurant sur le site&amp;nbsp;&lt;a href=&quot;https://www.datkominformatics.com/&quot; style=&quot;font-family: Montserrat_SemiBold; font-size: 12px; font-weight: 400; text-transform: uppercase; letter-spacing: calc(2px + (3 * (100vw - 320px)) / 1080); color: rgb(0, 123, 255); text-decoration: none;&quot;&gt;DATKOM - INFORMATICS&lt;/a&gt;&amp;nbsp;ne sont pas exhaustifs. Ils sont donn&eacute;s sous r&eacute;serve de modifications ayant &eacute;t&eacute; apport&eacute;es depuis leur mise en ligne.&lt;/p&gt;&lt;h2 style=&quot;font-family: Gilroy_Extrabold; line-height: 1.2; font-size: 2rem; color: rgb(33, 37, 41);&quot;&gt;4. Limitations contractuelles sur les donn&eacute;es techniques.&lt;/h2&gt;&lt;p style=&quot;font-size: 17px; margin-bottom: 1rem; color: rgb(33, 37, 41); font-family: Montserrat_Regular !important;&quot;&gt;Le site utilise la technologie JavaScript. Le site Internet ne pourra &ecirc;tre tenu responsable de dommages mat&eacute;riels li&eacute;s &agrave; l&rsquo;utilisation du site. De plus, l&rsquo;utilisateur du site s&rsquo;engage &agrave; acc&eacute;der au site en utilisant un mat&eacute;riel r&eacute;cent, ne contenant pas de virus et avec un navigateur de derni&egrave;re g&eacute;n&eacute;ration mis-&agrave;-jour Le site&amp;nbsp;&lt;a href=&quot;https://www.datkominformatics.com/&quot; style=&quot;font-family: Montserrat_SemiBold; font-size: 12px; font-weight: 400; text-transform: uppercase; letter-spacing: calc(2px + (3 * (100vw - 320px)) / 1080); color: rgb(0, 123, 255); text-decoration: none;&quot;&gt;DATKOM - INFORMATICS&lt;/a&gt;&amp;nbsp;est h&eacute;berg&eacute; chez un prestataire sur le territoire de l&rsquo;Union Europ&eacute;enne conform&eacute;ment aux dispositions du R&egrave;glement G&eacute;n&eacute;ral sur la Protection des Donn&eacute;es (RGPD : n&deg; 2016-679).&lt;br&gt;&lt;br&gt;L&rsquo;objectif est d&rsquo;apporter une prestation qui assure le meilleur taux d&rsquo;accessibilit&eacute;. L&rsquo;h&eacute;bergeur assure la continuit&eacute; de son service 24 Heures sur 24, tous les jours de l&rsquo;ann&eacute;e. Il se r&eacute;serve n&eacute;anmoins la possibilit&eacute; d&rsquo;interrompre le service d&rsquo;h&eacute;bergement pour les dur&eacute;es les plus courtes possibles notamment &agrave; des fins de maintenance, d&rsquo;am&eacute;lioration de ses infrastructures, de d&eacute;faillance de ses infrastructures ou si les Prestations et Services g&eacute;n&egrave;rent un trafic r&eacute;put&eacute; anormal.&lt;br&gt;&lt;br&gt;&lt;a href=&quot;https://www.datkominformatics.com/&quot; style=&quot;font-family: Montserrat_SemiBold; font-size: 12px; font-weight: 400; text-transform: uppercase; letter-spacing: calc(2px + (3 * (100vw - 320px)) / 1080); color: rgb(0, 123, 255); text-decoration: none;&quot;&gt;DATKOM - INFORMATICS&lt;/a&gt;&amp;nbsp;et l&rsquo;h&eacute;bergeur ne pourront &ecirc;tre tenus responsables en cas de dysfonctionnement du r&eacute;seau Internet, des lignes t&eacute;l&eacute;phoniques ou du mat&eacute;riel informatique et de t&eacute;l&eacute;phonie li&eacute;e notamment &agrave; l&rsquo;encombrement du r&eacute;seau emp&ecirc;chant l&rsquo;acc&egrave;s au serveur.&lt;/p&gt;&lt;h2 style=&quot;font-family: Gilroy_Extrabold; line-height: 1.2; font-size: 2rem; color: rgb(33, 37, 41);&quot;&gt;5. Propri&eacute;t&eacute; intellectuelle et contrefa&ccedil;ons.&lt;/h2&gt;&lt;p style=&quot;font-size: 17px; margin-bottom: 1rem; color: rgb(33, 37, 41); font-family: Montserrat_Regular !important;&quot;&gt;&lt;a href=&quot;https://www.datkominformatics.com/&quot; style=&quot;font-family: Montserrat_SemiBold; font-size: 12px; font-weight: 400; text-transform: uppercase; letter-spacing: calc(2px + (3 * (100vw - 320px)) / 1080); color: rgb(0, 123, 255); text-decoration: none;&quot;&gt;DATKOM - INFORMATICS&lt;/a&gt;&amp;nbsp;est propri&eacute;taire des droits de propri&eacute;t&eacute; intellectuelle et d&eacute;tient les droits d&rsquo;usage sur tous les &eacute;l&eacute;ments accessibles sur le site internet, notamment les textes, images, graphismes, logos, vid&eacute;os, ic&ocirc;nes et sons. Toute reproduction, repr&eacute;sentation, modification, publication, adaptation de tout ou partie des &eacute;l&eacute;ments du site, quel que soit le moyen ou le proc&eacute;d&eacute; utilis&eacute;, est interdite, sauf autorisation &eacute;crite pr&eacute;alable de :&amp;nbsp;&lt;a href=&quot;https://www.datkominformatics.com/&quot; style=&quot;font-family: Montserrat_SemiBold; font-size: 12px; font-weight: 400; text-transform: uppercase; letter-spacing: calc(2px + (3 * (100vw - 320px)) / 1080); color: rgb(0, 123, 255); text-decoration: none;&quot;&gt;DATKOM - INFORMATICS&lt;/a&gt;.&lt;br&gt;&lt;br&gt;Toute exploitation non autoris&eacute;e du site ou de l&rsquo;un quelconque des &eacute;l&eacute;ments qu&rsquo;il contient sera consid&eacute;r&eacute;e comme constitutive d&rsquo;une contrefa&ccedil;on et poursuivie conform&eacute;ment aux dispositions des articles L.335-2 et suivants du Code de Propri&eacute;t&eacute; Intellectuelle.&lt;/p&gt;&lt;h2 style=&quot;font-family: Gilroy_Extrabold; line-height: 1.2; font-size: 2rem; color: rgb(33, 37, 41);&quot;&gt;6. Limitations de responsabilit&eacute;.&lt;/h2&gt;&lt;p style=&quot;font-size: 17px; margin-bottom: 1rem; color: rgb(33, 37, 41); font-family: Montserrat_Regular !important;&quot;&gt;&lt;a href=&quot;https://www.datkominformatics.com/&quot; style=&quot;font-family: Montserrat_SemiBold; font-size: 12px; font-weight: 400; text-transform: uppercase; letter-spacing: calc(2px + (3 * (100vw - 320px)) / 1080); color: rgb(0, 123, 255); text-decoration: none;&quot;&gt;DATKOM - INFORMATICS&lt;/a&gt;&amp;nbsp;agit en tant qu&rsquo;&eacute;diteur du site.&amp;nbsp;&lt;a href=&quot;https://www.datkominformatics.com/&quot; style=&quot;font-family: Montserrat_SemiBold; font-size: 12px; font-weight: 400; text-transform: uppercase; letter-spacing: calc(2px + (3 * (100vw - 320px)) / 1080); color: rgb(0, 123, 255); text-decoration: none;&quot;&gt;DATKOM - INFORMATICS&lt;/a&gt;&amp;nbsp;est responsable de la qualit&eacute; et de la v&eacute;racit&eacute; du Contenu qu&rsquo;il publie.&lt;br&gt;&lt;br&gt;&lt;a href=&quot;https://www.datkominformatics.com/&quot; style=&quot;font-family: Montserrat_SemiBold; font-size: 12px; font-weight: 400; text-transform: uppercase; letter-spacing: calc(2px + (3 * (100vw - 320px)) / 1080); color: rgb(0, 123, 255); text-decoration: none;&quot;&gt;DATKOM - INFORMATICS&lt;/a&gt;&amp;nbsp;ne pourra &ecirc;tre tenu responsable des dommages directs et indirects caus&eacute;s au mat&eacute;riel de l&rsquo;utilisateur, lors de l&rsquo;acc&egrave;s au site internet&amp;nbsp;&lt;a href=&quot;https://www.datkominformatics.com/&quot; style=&quot;font-family: Montserrat_SemiBold; font-size: 12px; font-weight: 400; text-transform: uppercase; letter-spacing: calc(2px + (3 * (100vw - 320px)) / 1080); color: rgb(0, 123, 255); text-decoration: none;&quot;&gt;DATKOM - INFORMATICS&lt;/a&gt;, et r&eacute;sultant soit de l&rsquo;utilisation d&rsquo;un mat&eacute;riel ne r&eacute;pondant pas aux sp&eacute;cifications indiqu&eacute;es au point 4, soit de l&rsquo;apparition d&rsquo;un bug ou d&rsquo;une incompatibilit&eacute;.&lt;br&gt;&lt;br&gt;&lt;a href=&quot;https://www.datkominformatics.com/&quot; style=&quot;font-family: Montserrat_SemiBold; font-size: 12px; font-weight: 400; text-transform: uppercase; letter-spacing: calc(2px + (3 * (100vw - 320px)) / 1080); color: rgb(0, 123, 255); text-decoration: none;&quot;&gt;DATKOM - INFORMATICS&lt;/a&gt;&amp;nbsp;ne pourra &eacute;galement &ecirc;tre tenu responsable des dommages indirects (tels par exemple qu&rsquo;une perte de march&eacute; ou perte d&rsquo;une chance) cons&eacute;cutifs &agrave; l&rsquo;utilisation du site&amp;nbsp;&lt;a href=&quot;https://www.datkominformatics.com/&quot; style=&quot;font-family: Montserrat_SemiBold; font-size: 12px; font-weight: 400; text-transform: uppercase; letter-spacing: calc(2px + (3 * (100vw - 320px)) / 1080); color: rgb(0, 123, 255); text-decoration: none;&quot;&gt;DATKOM - INFORMATICS&lt;/a&gt;.&lt;br&gt;&lt;br&gt;Des espaces interactifs (possibilit&eacute; de poser des questions dans l&rsquo;espace contact) sont &agrave; la disposition des utilisateurs.&amp;nbsp;&lt;a href=&quot;https://www.datkominformatics.com/&quot; style=&quot;font-family: Montserrat_SemiBold; font-size: 12px; font-weight: 400; text-transform: uppercase; letter-spacing: calc(2px + (3 * (100vw - 320px)) / 1080); color: rgb(0, 123, 255); text-decoration: none;&quot;&gt;DATKOM - INFORMATICS&lt;/a&gt;&amp;nbsp;se r&eacute;serve le droit de supprimer, sans mise en demeure pr&eacute;alable, tout contenu d&eacute;pos&eacute; dans cet espace qui contreviendrait &agrave; la l&eacute;gislation applicable en France, en particulier aux dispositions relatives &agrave; la protection des donn&eacute;es.&lt;br&gt;&lt;br&gt;Le cas &eacute;ch&eacute;ant,&amp;nbsp;&lt;a href=&quot;https://www.datkominformatics.com/&quot; style=&quot;font-family: Montserrat_SemiBold; font-size: 12px; font-weight: 400; text-transform: uppercase; letter-spacing: calc(2px + (3 * (100vw - 320px)) / 1080); color: rgb(0, 123, 255); text-decoration: none;&quot;&gt;DATKOM - INFORMATICS&lt;/a&gt;&amp;nbsp;se r&eacute;serve &eacute;galement la possibilit&eacute; de mettre en cause la responsabilit&eacute; civile et/ou p&eacute;nale de l&rsquo;utilisateur, notamment en cas de message &agrave; caract&egrave;re raciste, injurieux, diffamant, ou pornographique, quel que soit le support utilis&eacute; (texte, photographie &hellip;).&lt;/p&gt;&lt;h2 style=&quot;font-family: Gilroy_Extrabold; line-height: 1.2; font-size: 2rem; color: rgb(33, 37, 41);&quot;&gt;7. Gestion des donn&eacute;es personnelles.&lt;/h2&gt;&lt;p style=&quot;font-size: 17px; margin-bottom: 1rem; color: rgb(33, 37, 41); font-family: Montserrat_Regular !important;&quot;&gt;Le Client est inform&eacute; des r&eacute;glementations concernant la communication marketing, la loi du 21 Juin 2014 pour la confiance dans l&rsquo;Economie Num&eacute;rique, la Loi Informatique et Libert&eacute; du 06 Ao&ucirc;t 2004 ainsi que du R&egrave;glement G&eacute;n&eacute;ral sur la Protection des Donn&eacute;es (RGPD : n&deg; 2016-679).&lt;br&gt;&lt;br&gt;7.1 Responsables de la collecte des donn&eacute;es personnelles Pour les Donn&eacute;es Personnelles collect&eacute;es dans le cadre de la cr&eacute;ation du compte personnel de l&rsquo;Utilisateur et de sa navigation sur le Site, le responsable du traitement des Donn&eacute;es Personnelles est : DATKOM INORMATICS.&amp;nbsp;&lt;a href=&quot;https://www.datkominformatics.com/&quot; style=&quot;font-family: Montserrat_SemiBold; font-size: 12px; font-weight: 400; text-transform: uppercase; letter-spacing: calc(2px + (3 * (100vw - 320px)) / 1080); color: rgb(0, 123, 255); text-decoration: none;&quot;&gt;DATKOM - INFORMATICS&lt;/a&gt;est repr&eacute;sent&eacute; par OCCANSEY Komla Marcel Darius, son repr&eacute;sentant l&eacute;gal.&lt;br&gt;&lt;br&gt;En tant que responsable du traitement des donn&eacute;es qu&rsquo;il collecte,&amp;nbsp;&lt;a href=&quot;https://www.datkominformatics.com/&quot; style=&quot;font-family: Montserrat_SemiBold; font-size: 12px; font-weight: 400; text-transform: uppercase; letter-spacing: calc(2px + (3 * (100vw - 320px)) / 1080); color: rgb(0, 123, 255); text-decoration: none;&quot;&gt;DATKOM - INFORMATICS&lt;/a&gt;&amp;nbsp;s&rsquo;engage &agrave; respecter le cadre des dispositions l&eacute;gales en vigueur. Il lui appartient notamment au Client d&rsquo;&eacute;tablir les finalit&eacute;s de ses traitements de donn&eacute;es, de fournir &agrave; ses prospects et clients, &agrave; partir de la collecte de leurs consentements, une information compl&egrave;te sur le traitement de leurs donn&eacute;es personnelles et de maintenir un registre des traitements conforme &agrave; la r&eacute;alit&eacute;.&lt;br&gt;&lt;br&gt;Chaque fois que&amp;nbsp;&lt;a href=&quot;https://www.datkominformatics.com/&quot; style=&quot;font-family: Montserrat_SemiBold; font-size: 12px; font-weight: 400; text-transform: uppercase; letter-spacing: calc(2px + (3 * (100vw - 320px)) / 1080); color: rgb(0, 123, 255); text-decoration: none;&quot;&gt;DATKOM - INFORMATICS&lt;/a&gt;&amp;nbsp;traite des Donn&eacute;es Personnelles,&amp;nbsp;&lt;a href=&quot;https://www.datkominformatics.com/&quot; style=&quot;font-family: Montserrat_SemiBold; font-size: 12px; font-weight: 400; text-transform: uppercase; letter-spacing: calc(2px + (3 * (100vw - 320px)) / 1080); color: rgb(0, 123, 255); text-decoration: none;&quot;&gt;DATKOM - INFORMATICS&lt;/a&gt;&amp;nbsp;prend toutes les mesures raisonnables pour s&rsquo;assurer de l&rsquo;exactitude et de la pertinence des Donn&eacute;es Personnelles au regard des finalit&eacute;s pour lesquelles&amp;nbsp;&lt;a href=&quot;https://www.datkominformatics.com/&quot; style=&quot;font-family: Montserrat_SemiBold; font-size: 12px; font-weight: 400; text-transform: uppercase; letter-spacing: calc(2px + (3 * (100vw - 320px)) / 1080); color: rgb(0, 123, 255); text-decoration: none;&quot;&gt;DATKOM - INFORMATICS&lt;/a&gt;&amp;nbsp;les traite.&lt;br&gt;&lt;br&gt;7.2 Finalit&eacute; des donn&eacute;es collect&eacute;es&amp;nbsp;&lt;a href=&quot;https://www.datkominformatics.com/&quot; style=&quot;font-family: Montserrat_SemiBold; font-size: 12px; font-weight: 400; text-transform: uppercase; letter-spacing: calc(2px + (3 * (100vw - 320px)) / 1080); color: rgb(0, 123, 255); text-decoration: none;&quot;&gt;DATKOM - INFORMATICS&lt;/a&gt;&amp;nbsp;est susceptible de traiter tout ou partie des donn&eacute;es :&lt;br&gt;&lt;br&gt;Pour permettre la navigation sur le Site et la gestion et la tra&ccedil;abilit&eacute; des prestations et services command&eacute;s par l&rsquo;utilisateur : donn&eacute;es de connexion et d&rsquo;utilisation du Site, facturation, historique des commandes, etc.&lt;br&gt;&lt;br&gt;Pour pr&eacute;venir et lutter contre la fraude informatique (spamming, hacking&hellip;) : mat&eacute;riel informatique utilis&eacute; pour la navigation, l&rsquo;adresse IP, le mot de passe (hash&eacute;)&lt;br&gt;&lt;br&gt;Pour am&eacute;liorer la navigation sur le Site : donn&eacute;es de connexion et d&rsquo;utilisation&lt;br&gt;&lt;br&gt;Pour mener des enqu&ecirc;tes de satisfaction facultatives sur&amp;nbsp;&lt;a href=&quot;https://www.datkominformatics.com/&quot; style=&quot;font-family: Montserrat_SemiBold; font-size: 12px; font-weight: 400; text-transform: uppercase; letter-spacing: calc(2px + (3 * (100vw - 320px)) / 1080); color: rgb(0, 123, 255); text-decoration: none;&quot;&gt;DATKOM - INFORMATICS&lt;/a&gt;&amp;nbsp;: adresse email&lt;br&gt;&lt;br&gt;Pour mener des campagnes de communication (sms, mail) : num&eacute;ro de t&eacute;l&eacute;phone, adresse email&lt;br&gt;&lt;br&gt;&lt;a href=&quot;https://www.datkominformatics.com/&quot; style=&quot;font-family: Montserrat_SemiBold; font-size: 12px; font-weight: 400; text-transform: uppercase; letter-spacing: calc(2px + (3 * (100vw - 320px)) / 1080); color: rgb(0, 123, 255); text-decoration: none;&quot;&gt;DATKOM - INFORMATICS&lt;/a&gt;&amp;nbsp;ne commercialise pas vos donn&eacute;es personnelles qui sont donc uniquement utilis&eacute;es par n&eacute;cessit&eacute; ou &agrave; des fins statistiques et d&rsquo;analyses.&lt;br&gt;&lt;br&gt;7.3 Droit d&rsquo;acc&egrave;s, de rectification et d&rsquo;opposition Conform&eacute;ment &agrave; la r&eacute;glementation europ&eacute;enne en vigueur, les Utilisateurs de&amp;nbsp;&lt;a href=&quot;https://www.datkominformatics.com/&quot; style=&quot;font-family: Montserrat_SemiBold; font-size: 12px; font-weight: 400; text-transform: uppercase; letter-spacing: calc(2px + (3 * (100vw - 320px)) / 1080); color: rgb(0, 123, 255); text-decoration: none;&quot;&gt;DATKOM - INFORMATICS&lt;/a&gt;&amp;nbsp;disposent des droits suivants :&lt;br&gt;&lt;br&gt;Droit d&#039;acc&egrave;s (article 15 RGPD) et de rectification (article 16 RGPD), de mise &agrave; jour, de compl&eacute;tude des donn&eacute;es des Utilisateurs droit de verrouillage ou d&rsquo;effacement des donn&eacute;es des Utilisateurs &agrave; caract&egrave;re personnel (article 17 du RGPD), lorsqu&rsquo;elles sont inexactes, incompl&egrave;tes, &eacute;quivoques, p&eacute;rim&eacute;es, ou dont la collecte, l&#039;utilisation, la communication ou la conservation est interdite&lt;br&gt;&lt;br&gt;Droit de retirer &agrave; tout moment un consentement (article 13-2c RGPD)&lt;br&gt;&lt;br&gt;Droit &agrave; la limitation du traitement des donn&eacute;es des Utilisateurs (article 18 RGPD)&lt;br&gt;&lt;br&gt;Droit d&rsquo;opposition au traitement des donn&eacute;es des Utilisateurs (article 21 RGPD)&lt;br&gt;&lt;br&gt;Droit &agrave; la portabilit&eacute; des donn&eacute;es que les Utilisateurs auront fournies, lorsque ces donn&eacute;es font l&rsquo;objet de traitements automatis&eacute;s fond&eacute;s sur leur consentement ou sur un contrat (article 20 RGPD)&lt;br&gt;&lt;br&gt;Droit de d&eacute;finir le sort des donn&eacute;es des Utilisateurs apr&egrave;s leur mort et de choisir &agrave; qui&amp;nbsp;&lt;a href=&quot;https://www.datkominformatics.com/&quot; style=&quot;font-family: Montserrat_SemiBold; font-size: 12px; font-weight: 400; text-transform: uppercase; letter-spacing: calc(2px + (3 * (100vw - 320px)) / 1080); color: rgb(0, 123, 255); text-decoration: none;&quot;&gt;DATKOM - INFORMATICS&lt;/a&gt;&amp;nbsp;devra communiquer (ou non) ses donn&eacute;es &agrave; un tiers qu&rsquo;ils aura pr&eacute;alablement d&eacute;sign&eacute;&lt;br&gt;&lt;br&gt;D&egrave;s que&amp;nbsp;&lt;a href=&quot;https://www.datkominformatics.com/&quot; style=&quot;font-family: Montserrat_SemiBold; font-size: 12px; font-weight: 400; text-transform: uppercase; letter-spacing: calc(2px + (3 * (100vw - 320px)) / 1080); color: rgb(0, 123, 255); text-decoration: none;&quot;&gt;DATKOM - INFORMATICS&lt;/a&gt;&amp;nbsp;a connaissance du d&eacute;c&egrave;s d&rsquo;un Utilisateur et &agrave; d&eacute;faut d&rsquo;instructions de sa part,&amp;nbsp;&lt;a href=&quot;https://www.datkominformatics.com/&quot; style=&quot;font-family: Montserrat_SemiBold; font-size: 12px; font-weight: 400; text-transform: uppercase; letter-spacing: calc(2px + (3 * (100vw - 320px)) / 1080); color: rgb(0, 123, 255); text-decoration: none;&quot;&gt;DATKOM - INFORMATICS&lt;/a&gt;&amp;nbsp;s&rsquo;engage &agrave; d&eacute;truire ses donn&eacute;es, sauf si leur conservation s&rsquo;av&egrave;re n&eacute;cessaire &agrave; des fins probatoires ou pour r&eacute;pondre &agrave; une obligation l&eacute;gale.&lt;br&gt;&lt;br&gt;Si l&rsquo;Utilisateur souhaite savoir comment&amp;nbsp;&lt;a href=&quot;https://www.datkominformatics.com/&quot; style=&quot;font-family: Montserrat_SemiBold; font-size: 12px; font-weight: 400; text-transform: uppercase; letter-spacing: calc(2px + (3 * (100vw - 320px)) / 1080); color: rgb(0, 123, 255); text-decoration: none;&quot;&gt;DATKOM - INFORMATICS&lt;/a&gt;&amp;nbsp;utilise ses Donn&eacute;es Personnelles, demander &agrave; les rectifier ou s&rsquo;oppose &agrave; leur traitement, l&rsquo;Utilisateur peut contacter&amp;nbsp;&lt;a href=&quot;https://www.datkominformatics.com/&quot; style=&quot;font-family: Montserrat_SemiBold; font-size: 12px; font-weight: 400; text-transform: uppercase; letter-spacing: calc(2px + (3 * (100vw - 320px)) / 1080); color: rgb(0, 123, 255); text-decoration: none;&quot;&gt;DATKOM - INFORMATICS&lt;/a&gt;&amp;nbsp;par &eacute;crit &agrave; l&rsquo;adresse suivante :&lt;br&gt;&lt;br&gt;DATKOM INORMATICS &ndash; DPO, MOUKE Brice London, England 0000 Londres.&lt;br&gt;&lt;br&gt;Dans ce cas, l&rsquo;Utilisateur doit indiquer les Donn&eacute;es Personnelles qu&rsquo;il souhaiterait que&amp;nbsp;&lt;a href=&quot;https://www.datkominformatics.com/&quot; style=&quot;font-family: Montserrat_SemiBold; font-size: 12px; font-weight: 400; text-transform: uppercase; letter-spacing: calc(2px + (3 * (100vw - 320px)) / 1080); color: rgb(0, 123, 255); text-decoration: none;&quot;&gt;DATKOM - INFORMATICS&lt;/a&gt;&amp;nbsp;corrige, mette &agrave; jour ou supprime, en s&rsquo;identifiant pr&eacute;cis&eacute;ment avec une copie d&rsquo;une pi&egrave;ce d&rsquo;identit&eacute; (carte d&rsquo;identit&eacute; ou passeport). Les demandes de suppression de Donn&eacute;es Personnelles seront soumises aux obligations qui sont impos&eacute;es &agrave;&amp;nbsp;&lt;a href=&quot;https://www.datkominformatics.com/&quot; style=&quot;font-family: Montserrat_SemiBold; font-size: 12px; font-weight: 400; text-transform: uppercase; letter-spacing: calc(2px + (3 * (100vw - 320px)) / 1080); color: rgb(0, 123, 255); text-decoration: none;&quot;&gt;DATKOM - INFORMATICS&lt;/a&gt;&amp;nbsp;par la loi, notamment en mati&egrave;re de conservation ou d&rsquo;archivage des documents. Enfin, les Utilisateurs de&amp;nbsp;&lt;a href=&quot;https://www.datkominformatics.com/&quot; style=&quot;font-family: Montserrat_SemiBold; font-size: 12px; font-weight: 400; text-transform: uppercase; letter-spacing: calc(2px + (3 * (100vw - 320px)) / 1080); color: rgb(0, 123, 255); text-decoration: none;&quot;&gt;DATKOM - INFORMATICS&lt;/a&gt;&amp;nbsp;peuvent d&eacute;poser une r&eacute;clamation aupr&egrave;s des autorit&eacute;s de contr&ocirc;le, et notamment de la CNIL (https://www.cnil.fr/fr/plaintes).&lt;br&gt;&lt;br&gt;7.4 Non-communication des donn&eacute;es personnelles&amp;nbsp;&lt;a href=&quot;https://www.datkominformatics.com/&quot; style=&quot;font-family: Montserrat_SemiBold; font-size: 12px; font-weight: 400; text-transform: uppercase; letter-spacing: calc(2px + (3 * (100vw - 320px)) / 1080); color: rgb(0, 123, 255); text-decoration: none;&quot;&gt;DATKOM - INFORMATICS&lt;/a&gt;&amp;nbsp;s&rsquo;interdit de traiter, h&eacute;berger ou transf&eacute;rer les Informations collect&eacute;es sur ses Clients vers un pays situ&eacute; en dehors de l&rsquo;Union europ&eacute;enne ou reconnu comme &laquo; non ad&eacute;quat &raquo; par la Commission europ&eacute;enne sans en informer pr&eacute;alablement le client. Pour autant,&amp;nbsp;&lt;a href=&quot;https://www.datkominformatics.com/&quot; style=&quot;font-family: Montserrat_SemiBold; font-size: 12px; font-weight: 400; text-transform: uppercase; letter-spacing: calc(2px + (3 * (100vw - 320px)) / 1080); color: rgb(0, 123, 255); text-decoration: none;&quot;&gt;DATKOM - INFORMATICS&lt;/a&gt;&amp;nbsp;reste libre du choix de ses sous-traitants techniques et commerciaux &agrave; la condition qu&rsquo;il pr&eacute;sente les garanties suffisantes au regard des exigences du R&egrave;glement G&eacute;n&eacute;ral sur la Protection des Donn&eacute;es (RGPD : n&deg; 2016-679).&lt;br&gt;&lt;br&gt;&lt;a href=&quot;https://www.datkominformatics.com/&quot; style=&quot;font-family: Montserrat_SemiBold; font-size: 12px; font-weight: 400; text-transform: uppercase; letter-spacing: calc(2px + (3 * (100vw - 320px)) / 1080); color: rgb(0, 123, 255); text-decoration: none;&quot;&gt;DATKOM - INFORMATICS&lt;/a&gt;&amp;nbsp;s&rsquo;engage &agrave; prendre toutes les pr&eacute;cautions n&eacute;cessaires afin de pr&eacute;server la s&eacute;curit&eacute; des Informations et notamment qu&rsquo;elles ne soient pas communiqu&eacute;es &agrave; des personnes non autoris&eacute;es. Cependant, si un incident impactant l&rsquo;int&eacute;grit&eacute; ou la confidentialit&eacute; des Informations du Client est port&eacute;e &agrave; la connaissance de&amp;nbsp;&lt;a href=&quot;https://www.datkominformatics.com/&quot; style=&quot;font-family: Montserrat_SemiBold; font-size: 12px; font-weight: 400; text-transform: uppercase; letter-spacing: calc(2px + (3 * (100vw - 320px)) / 1080); color: rgb(0, 123, 255); text-decoration: none;&quot;&gt;DATKOM - INFORMATICS&lt;/a&gt;, celle-ci devra dans les meilleurs d&eacute;lais informer le Client et lui communiquer les mesures de corrections prises. Par ailleurs&amp;nbsp;&lt;a href=&quot;https://www.datkominformatics.com/&quot; style=&quot;font-family: Montserrat_SemiBold; font-size: 12px; font-weight: 400; text-transform: uppercase; letter-spacing: calc(2px + (3 * (100vw - 320px)) / 1080); color: rgb(0, 123, 255); text-decoration: none;&quot;&gt;DATKOM - INFORMATICS&lt;/a&gt;&amp;nbsp;ne collecte aucune &laquo; donn&eacute;es sensibles &raquo;.&lt;br&gt;&lt;br&gt;Les Donn&eacute;es Personnelles de l&rsquo;Utilisateur peuvent &ecirc;tre trait&eacute;es par des filiales de&amp;nbsp;&lt;a href=&quot;https://www.datkominformatics.com/&quot; style=&quot;font-family: Montserrat_SemiBold; font-size: 12px; font-weight: 400; text-transform: uppercase; letter-spacing: calc(2px + (3 * (100vw - 320px)) / 1080); color: rgb(0, 123, 255); text-decoration: none;&quot;&gt;DATKOM - INFORMATICS&lt;/a&gt;&amp;nbsp;et des sous-traitants (prestataires de services), exclusivement afin de r&eacute;aliser les finalit&eacute;s de la pr&eacute;sente politique.&lt;br&gt;&lt;br&gt;Dans la limite de leurs attributions respectives et pour les finalit&eacute;s rappel&eacute;es ci-dessus, les principales personnes susceptibles d&rsquo;avoir acc&egrave;s aux donn&eacute;es des Utilisateurs de&amp;nbsp;&lt;a href=&quot;https://www.datkominformatics.com/&quot; style=&quot;font-family: Montserrat_SemiBold; font-size: 12px; font-weight: 400; text-transform: uppercase; letter-spacing: calc(2px + (3 * (100vw - 320px)) / 1080); color: rgb(0, 123, 255); text-decoration: none;&quot;&gt;DATKOM - INFORMATICS&lt;/a&gt;&amp;nbsp;sont principalement les agents de notre service client.&lt;br&gt;&lt;br&gt;&lt;/p&gt;&lt;h2 style=&quot;font-family: Gilroy_Extrabold; line-height: 1.2; font-size: 2rem; color: rgb(33, 37, 41);&quot;&gt;8. Notification d&rsquo;incident&lt;/h2&gt;&lt;p style=&quot;font-size: 17px; margin-bottom: 1rem; color: rgb(33, 37, 41); font-family: Montserrat_Regular !important;&quot;&gt;Quels que soient les efforts fournis, aucune m&eacute;thode de transmission sur Internet et aucune m&eacute;thode de stockage &eacute;lectronique n&#039;est compl&egrave;tement s&ucirc;re. Nous ne pouvons en cons&eacute;quence pas garantir une s&eacute;curit&eacute; absolue. Si nous prenions connaissance d&#039;une br&egrave;che de la s&eacute;curit&eacute;, nous avertirions les utilisateurs concern&eacute;s afin qu&#039;ils puissent prendre les mesures appropri&eacute;es.&lt;br&gt;&lt;br&gt;Nos proc&eacute;dures de notification d&rsquo;incident tiennent compte de nos obligations l&eacute;gales, qu&#039;elles se situent au niveau national ou europ&eacute;en.&lt;br&gt;&lt;br&gt;Nous nous engageons &agrave; informer pleinement nos clients de toutes les questions relevant de la s&eacute;curit&eacute; de leur compte et &agrave; leur fournir toutes les informations n&eacute;cessaires pour les aider &agrave; respecter leurs propres obligations r&eacute;glementaires en mati&egrave;re de reporting.&lt;br&gt;&lt;br&gt;Aucune information personnelle de l&#039;utilisateur du site&amp;nbsp;&lt;a href=&quot;https://www.datkominformatics.com/&quot; style=&quot;font-family: Montserrat_SemiBold; font-size: 12px; font-weight: 400; text-transform: uppercase; letter-spacing: calc(2px + (3 * (100vw - 320px)) / 1080); color: rgb(0, 123, 255); text-decoration: none;&quot;&gt;DATKOM - INFORMATICS&lt;/a&gt;&amp;nbsp;n&#039;est publi&eacute;e &agrave; l&#039;insu de l&#039;utilisateur, &eacute;chang&eacute;e, transf&eacute;r&eacute;e, c&eacute;d&eacute;e ou vendue sur un support quelconque &agrave; des tiers. Seule l&#039;hypoth&egrave;se du rachat de&amp;nbsp;&lt;a href=&quot;https://www.datkominformatics.com/&quot; style=&quot;font-family: Montserrat_SemiBold; font-size: 12px; font-weight: 400; text-transform: uppercase; letter-spacing: calc(2px + (3 * (100vw - 320px)) / 1080); color: rgb(0, 123, 255); text-decoration: none;&quot;&gt;DATKOM - INFORMATICS&lt;/a&gt;&amp;nbsp;et de ses droits permettrait la transmission des dites informations &agrave; l&#039;&eacute;ventuel acqu&eacute;reur qui serait &agrave; son tour tenu de la m&ecirc;me obligation de conservation et de modification des donn&eacute;es vis &agrave; vis de l&#039;utilisateur du site&amp;nbsp;&lt;a href=&quot;https://www.datkominformatics.com/&quot; style=&quot;font-family: Montserrat_SemiBold; font-size: 12px; font-weight: 400; text-transform: uppercase; letter-spacing: calc(2px + (3 * (100vw - 320px)) / 1080); color: rgb(0, 123, 255); text-decoration: none;&quot;&gt;DATKOM - INFORMATICS&lt;/a&gt;.&lt;br&gt;&lt;br&gt;S&eacute;curit&eacute; Pour assurer la s&eacute;curit&eacute; et la confidentialit&eacute; des Donn&eacute;es Personnelles et des Donn&eacute;es Personnelles de Sant&eacute;,&amp;nbsp;&lt;a href=&quot;https://www.datkominformatics.com/&quot; style=&quot;font-family: Montserrat_SemiBold; font-size: 12px; font-weight: 400; text-transform: uppercase; letter-spacing: calc(2px + (3 * (100vw - 320px)) / 1080); color: rgb(0, 123, 255); text-decoration: none;&quot;&gt;DATKOM - INFORMATICS&lt;/a&gt;&amp;nbsp;utilise des r&eacute;seaux prot&eacute;g&eacute;s par des dispositifs standards tels que par pare-feu, la pseudonymisation, l&rsquo;encryption et mot de passe.&lt;br&gt;&lt;br&gt;Lors du traitement des Donn&eacute;es Personnelles,&amp;nbsp;&lt;a href=&quot;https://www.datkominformatics.com/&quot; style=&quot;font-family: Montserrat_SemiBold; font-size: 12px; font-weight: 400; text-transform: uppercase; letter-spacing: calc(2px + (3 * (100vw - 320px)) / 1080); color: rgb(0, 123, 255); text-decoration: none;&quot;&gt;DATKOM - INFORMATICS&lt;/a&gt;prend toutes les mesures raisonnables visant &agrave; les prot&eacute;ger contre toute perte, utilisation d&eacute;tourn&eacute;e, acc&egrave;s non autoris&eacute;, divulgation, alt&eacute;ration ou destruction.&lt;br&gt;&lt;br&gt;&lt;/p&gt;&lt;h2 style=&quot;font-family: Gilroy_Extrabold; line-height: 1.2; font-size: 2rem; color: rgb(33, 37, 41);&quot;&gt;9. Liens hypertextes &laquo; cookies &raquo; et balises (&ldquo;tags&rdquo;) internet&lt;/h2&gt;&lt;p style=&quot;font-size: 17px; margin-bottom: 1rem; color: rgb(33, 37, 41); font-family: Montserrat_Regular !important;&quot;&gt;Le site&amp;nbsp;&lt;a href=&quot;https://www.datkominformatics.com/&quot; style=&quot;font-family: Montserrat_SemiBold; font-size: 12px; font-weight: 400; text-transform: uppercase; letter-spacing: calc(2px + (3 * (100vw - 320px)) / 1080); color: rgb(0, 123, 255); text-decoration: none;&quot;&gt;DATKOM - INFORMATICS&lt;/a&gt;&amp;nbsp;contient un certain nombre de liens hypertextes vers d&rsquo;autres sites, mis en place avec l&rsquo;autorisation de&amp;nbsp;&lt;a href=&quot;https://www.datkominformatics.com/&quot; style=&quot;font-family: Montserrat_SemiBold; font-size: 12px; font-weight: 400; text-transform: uppercase; letter-spacing: calc(2px + (3 * (100vw - 320px)) / 1080); color: rgb(0, 123, 255); text-decoration: none;&quot;&gt;DATKOM - INFORMATICS&lt;/a&gt;. Cependant,&amp;nbsp;&lt;a href=&quot;https://www.datkominformatics.com/&quot; style=&quot;font-family: Montserrat_SemiBold; font-size: 12px; font-weight: 400; text-transform: uppercase; letter-spacing: calc(2px + (3 * (100vw - 320px)) / 1080); color: rgb(0, 123, 255); text-decoration: none;&quot;&gt;DATKOM - INFORMATICS&lt;/a&gt;&amp;nbsp;n&rsquo;a pas la possibilit&eacute; de v&eacute;rifier le contenu des sites ainsi visit&eacute;s, et n&rsquo;assumera en cons&eacute;quence aucune responsabilit&eacute; de ce fait. Sauf si vous d&eacute;cidez de d&eacute;sactiver les cookies, vous acceptez que le site puisse les utiliser. Vous pouvez &agrave; tout moment d&eacute;sactiver ces cookies et ce gratuitement &agrave; partir des possibilit&eacute;s de d&eacute;sactivation qui vous sont offertes et rappel&eacute;es ci-apr&egrave;s, sachant que cela peut r&eacute;duire ou emp&ecirc;cher l&rsquo;accessibilit&eacute; &agrave; tout ou partie des Services propos&eacute;s par le site.&lt;br&gt;&lt;br&gt;&lt;/p&gt;&lt;h3 style=&quot;font-family: Gilroy_Extrabold; line-height: 1.2; font-size: 1.75rem; color: rgb(33, 37, 41);&quot;&gt;9.1. &laquo; COOKIES &raquo;&lt;/h3&gt;&lt;p style=&quot;font-size: 17px; margin-bottom: 1rem; color: rgb(33, 37, 41); font-family: Montserrat_Regular !important;&quot;&gt;Un &laquo; cookie &raquo; est un petit fichier d&rsquo;information envoy&eacute; sur le navigateur de l&rsquo;Utilisateur et enregistr&eacute; au sein du terminal de l&rsquo;Utilisateur (ex : ordinateur, smartphone), (ci-apr&egrave;s &laquo; Cookies &raquo;). Ce fichier comprend des informations telles que le nom de domaine de l&rsquo;Utilisateur, le fournisseur d&rsquo;acc&egrave;s Internet de l&rsquo;Utilisateur, le syst&egrave;me d&rsquo;exploitation de l&rsquo;Utilisateur, ainsi que la date et l&rsquo;heure d&rsquo;acc&egrave;s. Les Cookies ne risquent en aucun cas d&rsquo;endommager le terminal de l&rsquo;Utilisateur.&amp;nbsp;&lt;a href=&quot;https://www.datkominformatics.com/&quot; style=&quot;font-family: Montserrat_SemiBold; font-size: 12px; font-weight: 400; text-transform: uppercase; letter-spacing: calc(2px + (3 * (100vw - 320px)) / 1080); color: rgb(0, 123, 255); text-decoration: none;&quot;&gt;DATKOM - INFORMATICS&lt;/a&gt;&amp;nbsp;est susceptible de traiter les informations de l&rsquo;Utilisateur concernant sa visite du Site, telles que les pages consult&eacute;es, les recherches effectu&eacute;es. Ces informations permettent &agrave;&amp;nbsp;&lt;a href=&quot;https://www.datkominformatics.com/&quot; style=&quot;font-family: Montserrat_SemiBold; font-size: 12px; font-weight: 400; text-transform: uppercase; letter-spacing: calc(2px + (3 * (100vw - 320px)) / 1080); color: rgb(0, 123, 255); text-decoration: none;&quot;&gt;DATKOM - INFORMATICS&lt;/a&gt;&amp;nbsp;d&rsquo;am&eacute;liorer le contenu du Site, de la navigation de l&rsquo;Utilisateur.&lt;br&gt;&lt;br&gt;Les Cookies facilitant la navigation et/ou la fourniture des services propos&eacute;s par le Site, l&rsquo;Utilisateur peut configurer son navigateur pour qu&rsquo;il lui permette de d&eacute;cider s&rsquo;il souhaite ou non les accepter de mani&egrave;re &agrave; ce que des Cookies soient enregistr&eacute;s dans le terminal ou, au contraire, qu&rsquo;ils soient rejet&eacute;s, soit syst&eacute;matiquement, soit selon leur &eacute;metteur. L&rsquo;Utilisateur peut &eacute;galement configurer son logiciel de navigation de mani&egrave;re &agrave; ce que l&rsquo;acceptation ou le refus des Cookies lui soient propos&eacute;s ponctuellement, avant qu&rsquo;un Cookie soit susceptible d&rsquo;&ecirc;tre enregistr&eacute; dans son terminal.&amp;nbsp;&lt;a href=&quot;https://www.datkominformatics.com/&quot; style=&quot;font-family: Montserrat_SemiBold; font-size: 12px; font-weight: 400; text-transform: uppercase; letter-spacing: calc(2px + (3 * (100vw - 320px)) / 1080); color: rgb(0, 123, 255); text-decoration: none;&quot;&gt;DATKOM - INFORMATICS&lt;/a&gt;&amp;nbsp;informe l&rsquo;Utilisateur que, dans ce cas, il se peut que les fonctionnalit&eacute;s de son logiciel de navigation ne soient pas toutes disponibles.&lt;br&gt;&lt;br&gt;Si l&rsquo;Utilisateur refuse l&rsquo;enregistrement de Cookies dans son terminal ou son navigateur, ou si l&rsquo;Utilisateur supprime ceux qui y sont enregistr&eacute;s, l&rsquo;Utilisateur est inform&eacute; que sa navigation et son exp&eacute;rience sur le Site peuvent &ecirc;tre limit&eacute;es. Cela pourrait &eacute;galement &ecirc;tre le cas lorsque&amp;nbsp;&lt;a href=&quot;https://www.datkominformatics.com/&quot; style=&quot;font-family: Montserrat_SemiBold; font-size: 12px; font-weight: 400; text-transform: uppercase; letter-spacing: calc(2px + (3 * (100vw - 320px)) / 1080); color: rgb(0, 123, 255); text-decoration: none;&quot;&gt;DATKOM - INFORMATICS&lt;/a&gt;&amp;nbsp;ou l&rsquo;un de ses prestataires ne peut pas reconna&icirc;tre, &agrave; des fins de compatibilit&eacute; technique, le type de navigateur utilis&eacute; par le terminal, les param&egrave;tres de langue et d&rsquo;affichage ou le pays depuis lequel le terminal semble connect&eacute; &agrave; Internet.&lt;br&gt;&lt;br&gt;Le cas &eacute;ch&eacute;ant,&amp;nbsp;&lt;a href=&quot;https://www.datkominformatics.com/&quot; style=&quot;font-family: Montserrat_SemiBold; font-size: 12px; font-weight: 400; text-transform: uppercase; letter-spacing: calc(2px + (3 * (100vw - 320px)) / 1080); color: rgb(0, 123, 255); text-decoration: none;&quot;&gt;DATKOM - INFORMATICS&lt;/a&gt;&amp;nbsp;d&eacute;cline toute responsabilit&eacute; pour les cons&eacute;quences li&eacute;es au fonctionnement d&eacute;grad&eacute; du Site et des services &eacute;ventuellement propos&eacute;s par&amp;nbsp;&lt;a href=&quot;https://www.datkominformatics.com/&quot; style=&quot;font-family: Montserrat_SemiBold; font-size: 12px; font-weight: 400; text-transform: uppercase; letter-spacing: calc(2px + (3 * (100vw - 320px)) / 1080); color: rgb(0, 123, 255); text-decoration: none;&quot;&gt;DATKOM - INFORMATICS&lt;/a&gt;, r&eacute;sultant (i) du refus de Cookies par l&rsquo;Utilisateur (ii) de l&rsquo;impossibilit&eacute; pour&amp;nbsp;&lt;a href=&quot;https://www.datkominformatics.com/&quot; style=&quot;font-family: Montserrat_SemiBold; font-size: 12px; font-weight: 400; text-transform: uppercase; letter-spacing: calc(2px + (3 * (100vw - 320px)) / 1080); color: rgb(0, 123, 255); text-decoration: none;&quot;&gt;DATKOM - INFORMATICS&lt;/a&gt;&amp;nbsp;d&rsquo;enregistrer ou de consulter les Cookies n&eacute;cessaires &agrave; leur fonctionnement du fait du choix de l&rsquo;Utilisateur. Pour la gestion des Cookies et des choix de l&rsquo;Utilisateur, la configuration de chaque navigateur est diff&eacute;rente. Elle est d&eacute;crite dans le menu d&rsquo;aide du navigateur, qui permettra de savoir de quelle mani&egrave;re l&rsquo;Utilisateur peut modifier ses souhaits en mati&egrave;re de Cookies.&lt;br&gt;&lt;br&gt;&Agrave; tout moment, l&rsquo;Utilisateur peut faire le choix d&rsquo;exprimer et de modifier ses souhaits en mati&egrave;re de Cookies.&amp;nbsp;&lt;a href=&quot;https://www.datkominformatics.com/&quot; style=&quot;font-family: Montserrat_SemiBold; font-size: 12px; font-weight: 400; text-transform: uppercase; letter-spacing: calc(2px + (3 * (100vw - 320px)) / 1080); color: rgb(0, 123, 255); text-decoration: none;&quot;&gt;DATKOM - INFORMATICS&lt;/a&gt;&amp;nbsp;pourra en outre faire appel aux services de prestataires externes pour l&rsquo;aider &agrave; recueillir et traiter les informations d&eacute;crites dans cette section.&lt;br&gt;&lt;br&gt;Enfin, en cliquant sur les ic&ocirc;nes d&eacute;di&eacute;es aux r&eacute;seaux sociaux Twitter, Facebook, Linkedin et Google Plus figurant sur le Site de&amp;nbsp;&lt;a href=&quot;https://www.datkominformatics.com/&quot; style=&quot;font-family: Montserrat_SemiBold; font-size: 12px; font-weight: 400; text-transform: uppercase; letter-spacing: calc(2px + (3 * (100vw - 320px)) / 1080); color: rgb(0, 123, 255); text-decoration: none;&quot;&gt;DATKOM - INFORMATICS&lt;/a&gt;&amp;nbsp;ou dans son application mobile et si l&rsquo;Utilisateur a accept&eacute; le d&eacute;p&ocirc;t de cookies en poursuivant sa navigation sur le Site Internet ou l&rsquo;application mobile de&amp;nbsp;&lt;a href=&quot;https://www.datkominformatics.com/&quot; style=&quot;font-family: Montserrat_SemiBold; font-size: 12px; font-weight: 400; text-transform: uppercase; letter-spacing: calc(2px + (3 * (100vw - 320px)) / 1080); color: rgb(0, 123, 255); text-decoration: none;&quot;&gt;DATKOM - INFORMATICS&lt;/a&gt;, Twitter, Facebook, Linkedin et Google Plus peuvent &eacute;galement d&eacute;poser des cookies sur vos terminaux (ordinateur, tablette, t&eacute;l&eacute;phone portable).&lt;br&gt;&lt;br&gt;Ces types de cookies ne sont d&eacute;pos&eacute;s sur vos terminaux qu&rsquo;&agrave; condition que vous y consentiez, en continuant votre navigation sur le Site Internet ou l&rsquo;application mobile de&amp;nbsp;&lt;a href=&quot;https://www.datkominformatics.com/&quot; style=&quot;font-family: Montserrat_SemiBold; font-size: 12px; font-weight: 400; text-transform: uppercase; letter-spacing: calc(2px + (3 * (100vw - 320px)) / 1080); color: rgb(0, 123, 255); text-decoration: none;&quot;&gt;DATKOM - INFORMATICS&lt;/a&gt;. &Agrave; tout moment, l&rsquo;Utilisateur peut n&eacute;anmoins revenir sur son consentement &agrave; ce que&amp;nbsp;&lt;a href=&quot;https://www.datkominformatics.com/&quot; style=&quot;font-family: Montserrat_SemiBold; font-size: 12px; font-weight: 400; text-transform: uppercase; letter-spacing: calc(2px + (3 * (100vw - 320px)) / 1080); color: rgb(0, 123, 255); text-decoration: none;&quot;&gt;DATKOM - INFORMATICS&lt;/a&gt;&amp;nbsp;d&eacute;pose ce type de cookies.&lt;br&gt;&lt;br&gt;&lt;/p&gt;&lt;h3 style=&quot;font-family: Gilroy_Extrabold; line-height: 1.2; font-size: 1.75rem; color: rgb(33, 37, 41);&quot;&gt;Article 9.2. BALISES (&ldquo;TAGS&rdquo;) INTERNET&lt;/h3&gt;&lt;p style=&quot;font-size: 17px; margin-bottom: 1rem; color: rgb(33, 37, 41); font-family: Montserrat_Regular !important;&quot;&gt;&lt;a href=&quot;https://www.datkominformatics.com/&quot; style=&quot;font-family: Montserrat_SemiBold; font-size: 12px; font-weight: 400; text-transform: uppercase; letter-spacing: calc(2px + (3 * (100vw - 320px)) / 1080); color: rgb(0, 123, 255); text-decoration: none;&quot;&gt;DATKOM - INFORMATICS&lt;/a&gt;&amp;nbsp;peut employer occasionnellement des balises Internet (&eacute;galement appel&eacute;es &laquo; tags &raquo;, ou balises d&rsquo;action, GIF &agrave; un pixel, GIF transparents, GIF invisibles et GIF un &agrave; un) et les d&eacute;ployer par l&rsquo;interm&eacute;diaire d&rsquo;un partenaire sp&eacute;cialiste d&rsquo;analyses Web susceptible de se trouver (et donc de stocker les informations correspondantes, y compris l&rsquo;adresse IP de l&rsquo;Utilisateur) dans un pays &eacute;tranger.&lt;br&gt;&lt;br&gt;Ces balises sont plac&eacute;es &agrave; la fois dans les publicit&eacute;s en ligne permettant aux internautes d&rsquo;acc&eacute;der au Site, et sur les diff&eacute;rentes pages de celui-ci.&lt;br&gt;&lt;br&gt;Cette technologie permet &agrave;&amp;nbsp;&lt;a href=&quot;https://www.datkominformatics.com/&quot; style=&quot;font-family: Montserrat_SemiBold; font-size: 12px; font-weight: 400; text-transform: uppercase; letter-spacing: calc(2px + (3 * (100vw - 320px)) / 1080); color: rgb(0, 123, 255); text-decoration: none;&quot;&gt;DATKOM - INFORMATICS&lt;/a&gt;&amp;nbsp;d&rsquo;&eacute;valuer les r&eacute;ponses des visiteurs face au Site et l&rsquo;efficacit&eacute; de ses actions (par exemple, le nombre de fois o&ugrave; une page est ouverte et les informations consult&eacute;es), ainsi que l&rsquo;utilisation de ce Site par l&rsquo;Utilisateur.&lt;br&gt;&lt;br&gt;Le prestataire externe pourra &eacute;ventuellement recueillir des informations sur les visiteurs du Site et d&rsquo;autres sites Internet gr&acirc;ce &agrave; ces balises, constituer des rapports sur l&rsquo;activit&eacute; du Site &agrave; l&rsquo;attention de&amp;nbsp;&lt;a href=&quot;https://www.datkominformatics.com/&quot; style=&quot;font-family: Montserrat_SemiBold; font-size: 12px; font-weight: 400; text-transform: uppercase; letter-spacing: calc(2px + (3 * (100vw - 320px)) / 1080); color: rgb(0, 123, 255); text-decoration: none;&quot;&gt;DATKOM - INFORMATICS&lt;/a&gt;, et fournir d&rsquo;autres services relatifs &agrave; l&rsquo;utilisation de celui-ci et d&rsquo;Internet.&lt;br&gt;&lt;br&gt;&lt;/p&gt;&lt;h2 style=&quot;font-family: Gilroy_Extrabold; line-height: 1.2; font-size: 2rem; color: rgb(33, 37, 41);&quot;&gt;10. Droit applicable et attribution de juridiction.&lt;/h2&gt;&lt;p style=&quot;font-size: 17px; margin-bottom: 1rem; color: rgb(33, 37, 41); font-family: Montserrat_Regular !important;&quot;&gt;Tout litige en relation avec l&rsquo;utilisation du site&amp;nbsp;&lt;a href=&quot;https://www.datkominformatics.com/&quot; style=&quot;font-family: Montserrat_SemiBold; font-size: 12px; font-weight: 400; text-transform: uppercase; letter-spacing: calc(2px + (3 * (100vw - 320px)) / 1080); color: rgb(0, 123, 255); text-decoration: none;&quot;&gt;DATKOM - INFORMATICS&lt;/a&gt;&amp;nbsp;est soumis au droit fran&ccedil;ais. En dehors des cas o&ugrave; la loi ne le permet pas, il est fait attribution exclusive de juridiction aux tribunaux comp&eacute;tents de Lom&eacute;&lt;/p&gt;', '2022-02-09');

-- --------------------------------------------------------

--
-- Structure de la table `marketing`
--

CREATE TABLE `marketing` (
  `id` int(9) NOT NULL,
  `nom` varchar(256) NOT NULL,
  `phone` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `want` varchar(256) NOT NULL,
  `about` varchar(256) NOT NULL,
  `datedemande` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `id` int(9) NOT NULL,
  `nom` varchar(256) NOT NULL,
  `phone` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `message` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `newsletters`
--

CREATE TABLE `newsletters` (
  `id` int(9) NOT NULL,
  `email` varchar(256) NOT NULL,
  `inscription_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `newsletters`
--

INSERT INTO `newsletters` (`id`, `email`, `inscription_date`) VALUES
(1, 'feefef@gmail.com', '2021-10-13'),
(2, 'othnielignacio@gmail.com', '2021-11-05'),
(3, 'walidtraore@hotmail.fr', '2021-11-05'),
(4, 'lilnickelo3@gmail.com', '2021-11-19');

-- --------------------------------------------------------

--
-- Structure de la table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(9) NOT NULL,
  `nom` varchar(256) NOT NULL,
  `what` varchar(256) NOT NULL,
  `about` varchar(256) NOT NULL,
  `cover` varchar(256) NOT NULL,
  `lienprojet` varchar(256) NOT NULL,
  `img_un` varchar(256) NOT NULL,
  `img_deux` varchar(256) NOT NULL,
  `img_trois` varchar(256) NOT NULL,
  `img_quatre` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `projects`
--

CREATE TABLE `projects` (
  `id` int(9) NOT NULL,
  `nom` varchar(256) NOT NULL,
  `phone` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `about` varchar(256) NOT NULL,
  `datedemande` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(9) NOT NULL,
  `nom` varchar(256) NOT NULL,
  `prenom` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenom`, `email`, `password`) VALUES
(1, 'ALAO', 'Nickel', 'alaonick@gmail.com', 'e7f18ec48b6b0ef8fb20401d0b40713d'),
(2, 'OCCANSEY', 'Darius', 'occanseydarius69@gmail.com', '$2y$10$tVSReX1dwu77JoJ2l06nDeQA7zJWozeBYwTrb6igr32LdsvbFk69G');

-- --------------------------------------------------------

--
-- Structure de la table `web`
--

CREATE TABLE `web` (
  `id` int(9) NOT NULL,
  `nom` varchar(256) NOT NULL,
  `phone` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `want` varchar(256) NOT NULL,
  `about` varchar(256) NOT NULL,
  `datedemande` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `titre` (`titre`);

--
-- Index pour la table `branding`
--
ALTER TABLE `branding`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `careers`
--
ALTER TABLE `careers`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `design`
--
ALTER TABLE `design`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `juridical`
--
ALTER TABLE `juridical`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `marketing`
--
ALTER TABLE `marketing`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Index pour la table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nom` (`nom`);

--
-- Index pour la table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `web`
--
ALTER TABLE `web`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `branding`
--
ALTER TABLE `branding`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `careers`
--
ALTER TABLE `careers`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `design`
--
ALTER TABLE `design`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `juridical`
--
ALTER TABLE `juridical`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `marketing`
--
ALTER TABLE `marketing`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `web`
--
ALTER TABLE `web`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
