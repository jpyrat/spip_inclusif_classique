<?php
// This is a SPIP language file  --  Ceci est un fichier langue de SPIP
// Fichier source, a modifier dans https://git.spip.net/spip/forum.git

return [
	'avis_connexion_erreur_fichier_cle_manquant_1' => 'L’installation doit être faite par un webmestre avec un backup des clés et son mot de passe',
	'avis_connexion_erreur_fichier_cle_manquant_2' => 'L’installation doit être faite par un webmestre avec un backup des clés',
	'avis_connexion_ldap_echec_3' => 'Alternativement, n’utilisez pas le support LDAP pour importer des utilisateurs.',
	'bouton_radio_apparaitre_liste_redacteurs_connectes' => 'Apparaître dans la liste des rédacteurs connectés',
	'bouton_radio_non_apparaitre_liste_redacteurs_connectes' => 'Ne pas apparaître dans la liste des rédacteurs',
	'cache_modifiable_webmestre' => 'Ce paramètre est modifiable par le webmestre du site.',
	'entree_informations_connexion_ldap' => 'Veuillez entrer dans ce formulaire les informations de connexion à votre annuaire LDAP.
	Ces informations doivent pouvoir vous être fournies par l’administrateur du système,
	ou du réseau.',
	'info_admin_statuer_webmestre' => 'Donner à cet administrateur les droits de webmestre',
	'info_admin_webmestre' => 'Cet administrateur est <b>webmestre</b>',
	'info_administrateur' => 'Administrateur',
	'info_administrateur_1' => 'Administrateur',
	'info_administrateur_site_01' => 'Si vous êtes administrateur du site, veuillez',
	'info_administrateurs' => 'Administrateurs',
	'info_chemin_acces_2' => 'Vous devez désormais configurer le chemin d’accès aux informations dans l’annuaire. Cette information est indispensable pour lire les profils utilisateurs stockés dans l’annuaire.',
	'info_email_webmestre' => 'Adresse email du webmestre',
	'info_facilite_suivi_activite' => 'Afin de faciliter le suivi de l’activité
		éditoriale du site, SPIP peut faire parvenir par mail, par exemple
		à une mailing-list des rédacteurs, l’annonce des demandes de
		publication et des validations d’articles. Indiquer une ou plusieurs adresses, séparées par des virgules.',
	'info_forums_abo_invites' => 'Votre site comporte des forums sur abonnement ; les visiteurs sont donc invités à s’enregistrer sur le site public.',
	'info_gauche_auteurs' => 'Vous trouverez ici tous les auteurs du site.
 Leur statut est indiqué par la couleur de leur icone (administrateur = vert ; rédacteur = jaune).',
	'info_gauche_messagerie' => 'La messagerie vous permet d’échanger des messages entre rédacteurs, de conserver des pense-bêtes (pour votre usage personnel) ou d’afficher des annonces sur la page d’accueil de l’espace privé (si vous êtes administrateur).',
	'info_inscription_automatique' => 'Inscription automatique de nouveaux rédacteurs',
	'info_liste_redacteurs_connectes' => 'Liste des rédacteurs connectés',
	'info_multi_langues_choisies' => 'Veuillez sélectionner ci-après les langues à disposition des rédacteurs de votre site.
		Les langues déjà utilisées dans votre site (affichées en premier) ne peuvent pas être désactivées.',
	'info_option_accepter_visiteurs' => 'Accepter l’inscription de visiteurs du site public',
	'info_option_ne_pas_accepter_visiteurs' => 'Refuser l’inscription des visiteurs',
	'info_preview_texte' => 'Il est possible de prévisualiser les différents éléments éditoriaux du site ayant au moins le statut « proposé », ainsi que les éléments en cours de rédaction dont on est l’auteur. Cette fonctionnalité doit-elle être disponible pour les administrateurs, les rédacteurs, ou personne ?',
	'info_question_accepter_visiteurs' => 'Si les squelettes de votre site prévoient l’enregistrement de visiteurs sans accès à l’espace privé, veuillez activer l’option ci-dessous :',
	'info_question_inscription_nouveaux_redacteurs' => 'Acceptez-vous les inscriptions de nouveaux rédacteurs à
  partir du site public ? Si vous acceptez, les visiteurs pourront s’inscrire
  depuis un formulaire automatisé et accéderont alors à l’espace privé pour
  proposer leurs propres articles. <div class="notice">Lors de la phase d’inscription,
  les utilisateurs reçoivent un courrier électronique automatique
  leur fournissant leurs codes d’accès au site privé. Certains
  hébergeurs désactivent l’envoi de mails depuis leurs
  serveurs : dans ce cas, l’inscription automatique est
  impossible.</div>',
	'info_reserve_admin' => 'Seuls les administrateurs peuvent modifier cette adresse.',
	'info_statut_administrateur' => 'Administrateur',
	'info_statut_utilisateurs_1' => 'Statut par défaut des utilisateurs importés',
	'info_statut_utilisateurs_2' => 'Choisissez le statut qui est attribué aux personnes présentes dans l’annuaire LDAP lorsqu’elles se connectent pour la première fois. Vous pourrez par la suite modifier cette valeur pour chaque auteur au cas par cas.',
	'item_administrateur_2' => 'administrateur',
	'item_choix_administrateurs' => 'les administrateurs',
	'texte_admin_effacer_01' => 'Cette commande efface <i>tout</i> le contenu de la base de données,
y compris <i>tous</i> les accès rédacteurs et administrateurs. Après l’avoir exécutée, vous devrez lancer la
réinstallation de SPIP pour recréer une nouvelle base ainsi qu’un premier accès administrateur.',
	'texte_annuaire_ldap_1' => 'Si vous avez accès à un annuaire (LDAP), vous pouvez l’utiliser pour importer automatiquement des utilisateurs sous SPIP.',
	'texte_auteur_messagerie' => 'Ce site peut vous indiquer en permanence la liste des rédacteurs connectés, ce qui vous permet d’échanger des messages en direct. Vous pouvez décider de ne pas apparaître dans cette liste (vous êtes « invisible » pour les autres utilisateurs).',
	'texte_fichier_authent' => '<b>SPIP doit-il créer les fichiers spéciaux
<tt>.htpasswd</tt> et <tt>.htpasswd-admin</tt> dans le répertoire @dossier@ ?</b>
<p>Ces fichiers peuvent vous servir à restreindre l’accès aux auteurs et administrateurs en d’autres endroits de votre site (programme externe de statistiques, par exemple).</p>
<p>Si vous n’en avez pas l’utilité, vous pouvez laisser cette option à sa valeur par défaut (pas de création des fichiers).</p>',
	'texte_messagerie_agenda' => 'Une messagerie permet aux rédacteurs du site de communiquer entre eux directement dans l’espace privé du site. Elle est associée à un agenda.',
	'texte_travail_collaboratif' => 'S’il est fréquent que plusieurs rédacteurs
		travaillent sur le même article, le système
		peut afficher les articles récemment « ouverts »
		afin d’éviter les modifications simultanées.
		Cette option est désactivée par défaut
		afin d’éviter d’afficher des messages d’avertissement
		intempestifs.',
];
