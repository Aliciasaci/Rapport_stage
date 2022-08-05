<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/script.js"></script>
    <link href="style/style.css" rel="stylesheet" />
    <title>Missions</title>
</head>

<body>
    <?php include_once("header.html") ?>
    <main>
        <div id="main-content">
            <section>
                <h1 class="big-title">3. Missions</h1>
                <h1 class="middle-title">3.1 Objectifs et cadre des missions effectuées</h1>
                <h2>a. Besoin et objectifs : </h2>
                <p>
                    La principale activité de notre équipe consiste à développer et à maintenir les différents sites internet du groupe, qu’ils soient internes ou publiques, et à veiller à leurs bon fonctionnement.<br /> De ce fait, le besoin, ainsi que
                    mes missions dans le cadre de mon stage, consistent à apporter de constantes modifications et améliorations à ces derniers. mais aussi en développer de nouveaux.
                </p>
                <ul>
                    <b>Parmi les principales sources de besoin : </b>
                    <li>Les demandes de corrections ou d’amélioration rapportés par les employés de la boite sur les outils qu’ils peuvent utiliser.</li>
                    <li>Intégration de nouvelles fonctionnalités à la demande.</li>
                    <li>Intervention sur des pannes ou bugs techniques.</li>
                    <li>Conception et développement de nouveaux projets à la demande.</li>
                    <li>Demandes d’assistance technique du personnel.</li>
                </ul>
                <ul>
                    <b>Les prinipaux objectifs : </b>
                    <li>Développer des plate-formes qualitatives et complètes pouvant faciliter le travail des employés.</li>
                    <li>Veiller aux bon fonctionnement des différents sites internes et publiques.</li>
                </ul>
                <h2>b. Cadre des missions</h2>
                <p>Pour l’organisation au sein de l’équipe. Nous adoptons une méthodologie agile qui nous permet d’être flexibles est réactifs aux différents besoins des métiers. Des tableau de tâches sont tenus entre nous afin de communiquer au mieux sur
                    les différentes tâches qui me sont attribuées.<br /><br /> Plusieurs points d’équipe hebdomadaires sont organisés pour tenir compte des avancées et difficultés de chacun et de la suite des événements.<br /><br /> Deux à trois fois par
                    semaine, un point est organisé avec mon tuteur pour faire un suivi général. Différents sujets sont abordés vis à vis des missions confiées ou encore de la vie dans l’entreprise en général.<br /><br /> Le détail des missions sera vu dans
                    la section suivante.
                </p>
                <h1 class="middle-title">3.2 L'existant</h1>
                <p>Dans cette section, je vais parler des sites internes ou publiques sur lequels j’ai personnellement travaillé et qui éxistaient déjà avant mon arrivé.</p>
                <h2><u>Sites internes</u></h2>
                <p>Les schémas suivant illustrent les différentes applis web qui utilisent l’API SOGEST. Ainsi que l'architecture client/API/Serveur/Base de donnée.<br /><br /> La pluparts des sites sont exclusivement utilisées en interne (The office, absences,
                    titres, sogest). D’autre, sont rendue publique (Kiosque SOPRESS, sites publiques..).
                </p>
                <img src="images/schema_1.png">
                <img id="image-2" src="images/schema_2.png">
                <div class="appli">
                    <h3>API SOGEST :</h3>
                    <p> est l’API exposée par l’outil “SOGEST”. Elle offre des services aux autres appli web citées dans le schéma.<br /> Les différents outils sont développés independament pour former un écosystème complet de gestion interne.<br />
                        <b>Technologies employées :</b> L'API est entièrement codé en PHP 7 et utilise une base de donnée MariaDB.<br />
                    </p>
                </div>
                <div class="appli">
                    <h3>SOGEST : </h3>
                    <p>est le système de gestion interne du groupe SO PRESS. Imaginé et conçu par Gilles FRANCOIS, le CTO. C'est à présent l'outil indispensable à la boite puisque la majorité de la gestion du personnel et des activitées relatives à la press
                        passent par celui-ci.<br /><br /> Chaque employé, permanent ou pas, y possède un compte lui permettant de gérer ses activitées.<br /> Ils ont par exemple, accès à leurs fiches de paies à travers leurs espaces personnels. Ils peuvent
                        également, en fonction de leurs droits, remplir et soumettre des notes de frais aux services adéquats ou encore poser leurs congès en utilisant l'outil "absences".<br /><br /> D'autres employés avec des droits d'administration ou
                        d'ultra administration ont accès à d'avantages de fonctionnalités. Parmi celles-ci :
                    <ul>
                        <li>Traiter des notes de frais.</li>
                        <li>Renseigner des fiches de paies ou autres document.</li>
                        <li>Génération de contrats.</li>
                        <li>Envoie de la version digital des magazines aux différents distributeurs.</li>
                        <li>Suivi des activitées de press (exemple : un nouveau numéro = une nouvelle activité)</li>
                    </ul>
                    <p>Plusieurs améliorations et mise à jours sont prévus afin de perfectionner le système.<br />
                        <b>Technologies employées :</b> PHP 7, JavaScript, Bootstrap et CSS personnalisé pour le front-end.
                    </p>
                </div>
                <div class="appli">
                    <h3>The Office : </h3>
                    <p>outil de gestion des bureaux de SOPRES. Il sert principalement à réserver les différentes salles (réunions, montages, casting..).<br />
                        <b>Technologies employées :</b> Vue 2, Bulma pour le front, et utilise API SOGEST.
                    </p>
                </div>
                <div class="appli">
                    <h3>Absences :</h3>
                    <p>Outil de gestions des congès. Les employés peuvent poser leurs congé à travers la plate-forme ainsi que consulter le calendrier des membres de leurs équipes.<br />
                        <b>Technologies employées :</b> Vue 2, Bulma pour le front, et utilise l'API SOGEST.
                    </p>
                </div>
                <div class="appli">
                    <h3>SSO (Single sign on)</h3>
                    <p>est un service d'authentification qui permet de se connecter dans n'importe quelle instance Wordpress en utilisant son compte SOGEST. Cette manière de faire simplifie considérablement la connexion aux multiples sites existants, puisqu'il
                        suffit de retenir un seul mot de passe au lieu de plusieurs.<br /></p>
                </div>
                <h2><u>Sites publiques</u></h2>
                <div class="appli">
                    <h3>sofoot.com :</h3>
                    <p>est un site traitant de l'actualité autours du football dans le monde, il représente l’une des activité principales de SOPRESS. Conçu et développé par Gilles FRANCOIS, le site est codé en PHP 7, JavaScript, HTML et SASS compilé avec
                        Grunt (outil qui permet d’automatiser des tâches répétitives tel que la génération d’un fichier CSS minifié à partir d’un fichier SASS).<br /><br /> Les commentaires et autre réactions du site provienennt d’un module à part qui est
                        une appli vue 2, alimentée par l’API “Réactions” qui elle, est codée en php et JavaScript.
                    </p>
                </div>
                <div class="appli">
                    <h3>Society-magazine :</h3>
                    <p>est le sommaire digitale au magazine "Society". Conçu avec du Wordpress, c’est l’un des sites qui utilise le SSO pour l’authentification au back-office.</p>
                </div>
                <div class="appli">
                    <h3>Allso, Sovage :</h3>
                    <p>les deux sites exposent le travail de production audiovisuelle de SOPRESS, Ils sont tous les deux conçu avec du Wordpress.</p>
                </div>
                <div class="appli">
                    <h3>Refonte sofoot.com :</h3>
                    <p>est le nouvelle version du sofoot.com actuel.</p>
                </div>
            </section>
            <section>
                <h1 class="middle-title">3.3 Focus sur les missions effectuées</h1>
                <p>Dans la section qui suit, je décrirai quelques une des différentes missions qui m’ont été confiée, ainsi que les aspects technique les concernant.
                </p>
                <div class="projet">
                    <h3><u>Installation des sites en local</u></h3>
                    <ol>
                        Afin de pouvoir apporter des modifications et maintenir les sites, il a fallu, dans un premier temps les installer en local.
                        <li>J’ai commencé par cloner les répertoires des différents sites depuis Gitlab. </li>
                        <li>Je me suis ensuite connecté aux bases de données en prod en utilisant un outil d'administration de base de données "HeidiSQL", pour cloner celle-ci en local. </li>
                        <li>J’ai crée un vhost(virtual host) à chacun des sites afin de maintenir une gestion séparée des noms. Chaque Vhost contient la version PHP utilisée par le site, si celle-ci est différente de la version par défaut du serveur.</li>
                        <li>J'ai ensuite rajouté le nom de domaine de chacun au fichier hosts de mon système d'exploitation.</li>
                        <li>Et enfin, j'ai clôné les fichiers de configurations en les adaptant à mon nouvel environnement.</li>
                    </ol>
                    <p>Cette opération a été répété autant de fois que j'ai eu de projet la nécéssitant.</p>
                </div>
                <div class="projet">
                    <h3><u>Installation d'un annuaire AD/LDAP(Lightweight Directory Access Protocol)</u></h3>
                    <p>L'une des missions les plus intéréssante que j'ai pu faire à été d'installer et de gérer un annuaire LDAP. le but étant de mettre en place une authentification SSO pour l'un de nos outils de communication/tchat, Mattermost. Il suffirait ensuite d'avoir un compte SOGEST et de s'y connecter pour accéder à son instance Mattermost.<br /><br />

                        <b>Comment ça marche ?</b><br />
                        Un annuaire est une base de données relationnel qui va contenir des informations sur des personnes, des groupes, machines etc. Ils sont couramment employés pour stocker les données d’authentification ou autre de personnes (mots de passe, username, e-mail, téléphone, etc.) ou des objets (localisation, marque, modèle, etc.). D'autres applications(exemple : Mattermost) peuvent utiliser ce service d’annuaire pour valider les identifiants de connexion.<br /><br />

                        <b>Le fonctionnement d'un AD/LDAP:</b><br />
                        un annuaire LDAP est un organisation hiérarchique d’entrées dont une des entrées est la racine.
                        <img id="image-3" src="images/ldap.png"><br />
                        Chaque entrée peut contenir des attributs auxquels on assigne des valeurs. Chaque entrée appartient au moins à une classe d’objet qui définit les attributs de l’entrée.<br /><br />

                        <b>Avantage à utiliser un annuaire LDAP:</b>
                    <ul>
                        <li>Single sign-on : pouvoir se connecter à des applications en utilisant les identifiants contenu dans l'annuaire (les même que SOGEST dans notre cas)</li>
                        <li>L'annuaire peut être interrogé par toute application compatible LDAP ayant besoin d'utiliser les informations (Mattermost dans notre cas)</li>
                    </ul>

                    <b class="fifth-title">Mon travail</b>
                    <ol>
                        <li><b>installer et configurer OpenLDAP et phpLDAP sur une machine Ubuntu :</b><br /><br />
                            <b class="fifth-title">1.1 OpenLDAP : </b><br />
                            Avant de me confier la tâche, mon tuteur a commencé par créer une machine virtuelle avec une instance ubuntu qu'il a hébérgé sur un serveur. Il m'a ensuite donné les accès et de là, j'ai prit la relève.
                            <br />J'ai commencé par installer un serveur Apache, MySQL et php sur ma machine. J'ai ensuite sécurisé mon serveur apache avec un certificat SSL. Il est important de le sécuriser puisque je vais travailler avec des données sensibles dans la suite.<br /><br />
                            J'ai ensuite installé le serveur LDAP en installant quelques packages avec les commandes suivantes :<br />
                            <p class="code">
                                $ sudo apt-get install slapd ldap-utils<br />
                                $ sudo dpkg-reconfigure slapd //configurer le serveur
                            </p><br />
                            Jusque là, notre serveur LDAP est monté et est en service. j'ai ensuite ouvert le port sur le pare-feu afin de laisser entrer les connexions externes avec la commande :
                            <p class="code">
                                $ sudo ufw allow ldap
                            </p>
                            J'ai pu testé le bon fonctionnement du serveur avec la commande, elle nous renvoit l'utilisateur avec lequel on est connecté.
                            <p class="code">
                                $ ldapwhoami -H ldap:// -x
                            </p>
                            Le résultat attendu est "anonymous".<br /><br />

                            <b class="fifth-title">1.2 phpLDAP : </b><br />
                            La deuxiéme étape a été d'installer phpLDAPadmin pour gérer les données sur une interface graphique.<br />
                            Les commandes :
                            <p class="code">
                                $ sudo apt-get install phpldapadmin<br />
                                $ sudo nano /etc/phpldapadmin/config.php
                            </p><br />

                            Une fois l'installation faite, j'ai adapté le fichier de configuration pour utiliser notre nom de domaine en renseignant les informations de notre serveur LDAP.<br /><br />

                            <b class="fifth-title">1.3 Connexion au phpLDAPadmin</b><br /><br />

                            En allant sur "https://notre.domaine.com/phpldapadmin", et en saisissant les coordonnée d'authentification adéquat, j'ai pu me connecter à l'annuaire.<br />
                        </li><br /><br />
                        <li><b>importer les données depuis SOGEST: </b><br /><br />
                            Après installation et configuration du serveur LDAP, j'ai crée une classe "Ldap" contenant les fonctions nécéssaires à la récupération des données depuis la base de données sogest et à l'export de celle-cis vers l'annuaire.<br />
                            J'ai ensuite créer un one shot(programme lancé une seule fois) dans lequel les fonctions sont appelées.<br />
                            A chaque utilisateur récupéré depuis SOGEST, une instance "user" est crée dans l'annuaire puis rempli avec les informations de la personne.
                            Ainsi, j'ai pu importer toutes les données utilisateur dans notre annuaire AD/LDAP<br /><br />

                        </li>
                        <li><b>automatisation de l'import/export des données</b><br /><br />
                            Une fois nos données importées, Il reste à automatiser le processus, puisqu'à la moindre modifications des informations par les utilisateurs, il faudrait qu'elles soient mise à jour dans l'annuaire. l'idée était d'appeller le script d'import/export depuis un <b>cron</b> qui s'exécuterait à chaque fois qu'un utilisateur modifie ses informations.<br /><br />
                            <b>Cron : </b>un cron est un programme qui permet aux utilisateurs des systèmes Unix d’exécuter automatiquement des scripts, des commandes ou des logiciels à une date et une heure spécifiée à l’avance, ou selon un cycle défini à l’avance.[Wikipédia]
                        </li><br />
                        <li><b>La suite du projet</b><br /><br />
                            a écrire plus tard.. besoin de validation auprès de gilles.
                        </li>
                    </ol>
                    <br />


                    </p>
                </div>
                <div class="projet">
                    <h3><u>Liseuse éléctronique</u></h3>
                    <p>
                        Un des projet qu'on a collectivement réalisé a été une liseuse éléctronique pour la MAIF. Aina a commencé par nous exposer le besoin en nous listant les différents objectifs et demandes du client.
                        Gilles m'a ensuite orienté vers des pistes par lequelles commencer, et qui se basent sur un ancien projet qu'il a lui-même réalisé.<br /><br />

                        <b class="fifth-title">Les objectifs :</b>
                    <ol>
                        <li>Une liseuse éléctronique qui diffuse un PDF de façon fluide.</li>
                        <li>Un code qui fonctionnent intégralement en local.</li>
                        <li>La liseuse doit intégrer des fonctionnalités tel que le zoom, le partage sur les réseaux sociaux ou encore des liens cliquables.</li>
                    </ol>

                    <b class="fifth-title">Technologies utilisées</b>
                    <ul>
                        <li>plugin Jquery flipbook : un plugin qui permet de streamer un pdf en utilisant la librairie PDF.js.</li>
                        <li>PHP 8, HTML5, CSS3, JQuery.</li>
                        <li>Sharer.js : librairie JavaScript qui permet de créer des boutons de partage sur les réseaux sociaux.</li>
                        <li>Amazon S3 pour le stockage d'image.</li>
                    </ul>
                    <p><b>Un plugin</b> est un logiciel conçu pour être greffé à un autre logiciel à travers une interface prévue à cet effet, et apporter à ce dernier de nouvelles fonctionnalités.[Wikipédia]</p>

                    <b class="fifth-title">Avantage à utiliser un plugin </b>
                    <ol>
                        <li>Utiliser un plugin nous a permit de simplement implémenter les fonctionnalités dont on avait besoin sans avoir recours à d'autre librairie ou de les coder nous-même.</li>
                        <li>Le pluging est responsif</li>
                        <li>Il intégre de fonctionnalités tel que le zoom, le chargement paresseux, Intégration de lien et bien d'autre..</li>
                    </ol>

                    <b class="fifth-title">Mon travail</b>
                    <p>Après avoir crée l'environnement local adéquat(Vhost, téléchargement du pluging..), j'ai commencé par adapter le code de la liseuse en intégrant le pluging et en apportant les modifications de design adéquates (exemple : mettre les couleurs de la liseuse aux couleur de la maif).
                        J'ai ensuite livré une première version à mon tuteur en lui exposant les points à améliorer ou à corriger (exemple : le zoom qui n'était pas suffisant dans certain cas). Il a prit la relève sur le projet pour effectuer une modification qui a consisté à transformer le PDF en image qui étaient ensuite streamées.
                        Celà a permit d'avoir un zoom plus efficace. <br /><br />
                        J'ai reprit le projet pour intégrer le partage sur les réseaux sociaux et les balises meta <b>OPEN GRAPH</b>.<br /><br />
                        Plusieurs versions ont été livrés avant de se mettre d'accord sur un produit finale.
                    </p>

                    </p>
                </div>
                <div class="projet">
                    <h3><u>SOGEST</u></h3>
                    <p>
                        Plusieurs de mes missions ont été des améliorations et des modification apportées au système de gestion SOGEST. Parmi celle-cis : <br /><br />
                        <b class="fifth-title">Notifications:</b><br />
                        Une des demande du service comptabilité de la boite à été de mettre en place un système de notifications afin que les employées puisse recevoir des notifications ainsi que des mails lorsque de nouveaux documents sont disponibles sur leurs compte personnel.
                        Il fallait donc implémenter la fonctionnalité tout en envisageant de futurs utilisations.<br /><br />

                        <b class="fifth-title">Mon travail</b><br />
                    <ol>
                        <li>J'ai crée une table "notifications" dans la base de donnée, ainsi qu'une classe "Notif" contenant les fonctions nécéssaire à la création/récupération des données.</li>
                        <li>J'ai modifié le front-end pour implémenter l'icone notifications.</li>
                        <li>J'ai ensuite crée un cron qui s'execute à chaque minute(à revoir), et qui permet d'envoyer un mail pour toute notification crée dont l'attribut mail = 0 (attribut mail = 0 siginifie qu'aucun mail n'a été envoyé pour cette notif).
                            L'outil d'envoie des mails est celui utilisé par notre service, Mailjet.</li>
                    </ol>
                    </p>


                    <b class="fifth-title">ABSENCES</b><br />
                    <p>"Absences" est une application web de gestion de congés qui fait partie du système SOGEST. Elle est codé en Vue 2, bulma, et utilise l'API SOGEST.</p>

                </div>

                <div class="projet">
                    <h3><u>Sofoot.com</u></h3>
                    <b class="fifth-title">Page erreur</b><br />
                    à écrire..

                </div>
                <div class="projet">
                    <h3><u>SOGOOD Landing page</u></h3>
                    <b class="fifth-title">Landing page</b><br />
                    à écrire..

                </div>
            </section>
        </div>
    </main>
    <?php include_once("footer.html") ?>
</body>

</html>