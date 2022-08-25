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
    <?php include_once("header.php") ?>
    <main>
        <div id="main-content">
            <section class="middle-section">
                <h1 class="big-title">3. Missions</h1>
                <h1 class="middle-title">3.1 Objectifs et cadre des missions effectuées</h1>
                <div class="third-section">
                    <h2>3.1.1 Besoins et objectifs : </h2>
                    <p class="alinea">
                        La principale activité de notre équipe consiste à développer et maintenir les différents sites internet du groupe, qu’ils soient internes ou publics, et à veiller à leur bon fonctionnement.</p>
                    <br />
                    <p class="alinea">De ce fait, le besoin, ainsi que
                        mes missions dans le cadre de mon stage consistent à apporter des modifications et améliorations à ces derniers. mais aussi à en développer de nouveaux.
                    </p><br />
                    <ul>
                        <b>Parmi les principales sources du besoin : </b>
                        <li>Les demandes de corrections ou d’amélioration rapportés par les employés de l'entreprise sur les outils qu’ils utilisent.</li>
                        <li>Intégration de nouvelles fonctionnalités à la demande.</li>
                        <li>Intervention sur des pannes ou bugs techniques.</li>
                        <li>Conception et développement de nouveaux projets à la demande.</li>
                        <li>Demandes d’assistance technique du personnel.</li>
                    </ul><br />
                    <ul>
                        <b>Les principaux objectifs : </b>
                        <li>Développer des <a href="https://fr.wikipedia.org/wiki/Plate-forme_(informatique)">plates-formes</a> qualitatives et complètes qui servent d'outils de travail aux employés de l'entreprise.</li>
                        <li>Assurer le bon fonctionnement des différents sites (intervention en cas de bugs techniques, mise à jour permanente, améliorations et corrections).</li>
                        <li>Assister le personnel dans la prise en main et l'utilisation et des différents sites.</li>
                    </ul>
                </div>
                <div class="third-section">
                    <h2>3.1.2 Cadre des missions</h2>
                    <p class="alinea">
                        Le sujet de mon stage a porté sur plusieurs missions émanant d'un besoin évolutif du métier. En effet, elles ont au fur et à mesure été crées selon les demandes des employées.<br /></p>
                    <br />
                    <p class="alinea">Lorsqu'une nouvelle tâche émerge, nous tenons une réunion pour en discuter et nous mettre d'accord sur la façon de procéder ainsi que sur les technologies à utiliser. Souvent, je travaille sur des projets déjà existants qui nécessitent une mise en contexte pour me familiariser avec l'existant.<br /></p>

                    <br />
                    <p class="alinea">Pour l’organisation au sein de l’équipe, nous adoptons une méthodologie agile qui nous permet d’être flexibles et réactifs aux différents besoins du métier. Des tableaux listant les différentes tâches qui me sont confiées sont tenus entre nous afin de communiquer au mieux sur
                        l'avancement de celle-ci. Plusieurs points d’équipe hebdomadaires sont organisés pour tenir compte des avancées et difficultés que je peux rencontrer et de la suite des événements. Deux à trois fois par
                        semaine, un point est organisé avec mon tuteur pour faire un suivi général et discuter de la suite des missions.
                    </p>
                </div>
            </section>
            <section class="middle-section">
                <h1 class="middle-title">3.2 L'existant</h1>
                <p class="alinea">Dans cette section, j'aborderai l'existant ainsi que le détail des missions sur lesquelles je suis intervenue.</p>
                <section class="third-section">
                    <h2>3.2.1 Environnement technologique</h2>
                    <p class="alinea">Concernant les projets préexistants, l'environnement technologique ainsi que les technologies à utiliser étaient déjà bien établies à mon arrivé. Cependant, pour ceux entamés après mon arrivée, le choix a été fait collectivement afin de garder une certaine cohérence par apports à l'éxistant ainsi qu'aux préférences de chacun puisque ces projets sont susceptibles d'évoluer et d'être repris par les autres membres de l'équipe.</p>
                </section>
                <section class="third-section">
                    <h2>3.2.2 Sites internes</h2>
                    <p class="alinea">Les schémas suivants («Figure 1» et «Figure 2»)illustrent les différentes applis web qui utilisent <a href="https://www.cnil.fr/fr/definition/interface-de-programmation-dapplication-api#:~:text=Une%20API%20(application%20programming%20interface,des%20données%20et%20des%20fonctionnalités."> l’API</a> SOGEST, ainsi que l'architecture clients, API, serveur, base de données.</p>
                    <p class="alinea">La plupart des sites sont exclusivement utilisés en interne (The office, absences, titres, sogest). D'autres, sont rendues publiques (Kiosque SOPRESS, society-magazine, allso TV, sauvage TV, sofoot.com).
                    </p>
                    <div class="figure">
                        <img src="images/schema_1.png" width="100%">
                        <label>Figure 1</label>
                    </div><br />
                    <div class="figure">
                        <img id="image-2" src="images/schema_2.png" width="100%">
                        <label>Figure 2</label>
                    </div>
                    <div class="appli">
                        <h3>3.2.2.1 API SOGEST :</h3>
                        <p class="alinea">C'est une API exposée par l’outil “SOGEST” offrant des services aux applis web représentées dans le schéma. Les différents outils sont développés indépendamment pour former un écosystème complet de gestion interne.<br />
                            <b class="technos">Technologies employées :</b> L'API est entièrement codé en <a href="https://www.php.net/">PHP 7</a> et utilise une base de données <a href="https://mariadb.org">MariaDB</a>.<br />
                        </p>
                    </div>
                    <div class="appli">
                        <h3>3.2.2.2 SOGEST : </h3>
                        <p class="alinea">Il s'agit du système de gestion interne du groupe SO PRESS, imaginé et conçu par Gilles FRANCOIS. C'est à présent l'outil indispensable à l'entreprise puisque la majorité de la gestion du personnel et des activités relatives à la presse
                            passe par celui-ci.</p>
                        <br />
                        <p class="alinea">Chaque employé (permanents, pigistes ou autres) y possède un compte lui permettant de gérer ses activités. Ils ont par exemple, accès à leurs fiches de paie à travers leurs espaces personnels. Ils peuvent
                            également, en fonction de leurs droits, remplir et soumettre des notes de frais aux services adéquats ou encore poser leurs congès en utilisant l'outil "absences".</p>
                        <br />
                        <p class="alinea">D'autres employés avec des droits d'administration ou
                            d'ultra-administration ont accès à d'avantages de fonctionnalités. Parmi celles-ci :</p>
                        <ul>
                            <li>Traitement des notes de frais.</li>
                            <li>Renseignement des fiches de paie et autres documents.</li>
                            <li>Génération de contrats.</li>
                            <li>Envoi de la version digital des magazines aux différents distributeurs.</li>
                            <li>Suivi des activités de presse et plus.</li>
                        </ul><br />
                        <p class="alinea">Plusieurs améliorations et mises à jour sont prévues afin de perfectionner le système.<br />
                            <b class="technos">Technologies employées :</b> PHP 7, <a href="https://www.javascript.com/">JavaScript</a>, <a href="https://getbootstrap.com">Bootstrap</a> et <a href="https://www.w3.org/Style/CSS/#specs">CSS</a> personnalisé pour le front-end.
                        </p>
                    </div>
                    <div class="appli">
                        <h3>3.2.2.3 The Office : </h3>
                        <p class="alinea">The office est un outil de gestion des bureaux SOPRESS. Il est principalement utilisé pour réserver les différentes salles (réunions, montages, casting..).<br />
                            <b class="technos">Technologies employées :</b> <a href="https://v2.vuejs.org/">Vue 2</a>, <a href="https://bulma.io/">Bulma</a> pour le front, et utilise l'API SOGEST.
                        </p>
                    </div>
                    <div class="appli">
                        <h3>3.2.2.4 Absences :</h3>
                        <p class="alinea">Il s'agit de l'outil de gestion des congés. Les employés peuvent poser leurs congés à travers le site ainsi que consulter le calendrier des membres de leurs équipes.<br />
                            <b class="technos">Technologies employées :</b> Vue 2, Bulma pour le front, et utilise l'API SOGEST.
                        </p>
                    </div>
                    <div class="appli">
                        <h3>3.2.2.5 SSO (Single sign on)</h3>
                        <p class="alinea">Le SSO So Press est le service d'authentification qui permet de se connecter dans n'importe quelle instance <a href="https://wordpress.com/fr/">Wordpress</a> en utilisant son compte SOGEST. Cette manière de faire simplifie considérablement la connexion aux multiples sites existants, puisqu'il
                            suffit de retenir un seul mot de passe au lieu de plusieurs.<br /></p>
                    </div>
                </section>
                <section class="third-section">
                    <h2>3.2.3 Sites publiques</h2>
                    <div class="appli">
                        <h3>3.2.3.1 <a class="title_link" href="https://www.sofoot.com">sofoot.com</a>:</h3>
                        <p class="alinea">«sofoot.com» est un site traitant de l'actualité autour du football dans le monde, il représente l’une des activités principales de SOPRESS. Conçu et développé par Gilles FRANCOIS, le site est codé en PHP 7, JavaScript, HTML et <a href="https://sass-lang.com/">SASS</a> compilé avec
                            Grunt (outil qui permet d’automatiser des tâches répétitives telles que la génération d’un fichier CSS minifié à partir d’un fichier SASS). Les commentaires et autres réactions du site proviennent d'un module séparé qui est une application vue 2, alimentée par l'API "Reactions" qui est codée en PHP et JavaSript.<br />
                        </p>
                    </div>
                    <div class="appli">
                        <h3>3.2.3.2 <a class="title_link" href="https://www.society-magazine.fr">Society-magazine</a>:</h3>
                        <p class="alinea">Il s'agit du sommaire digital au magazine "Society". Conçu avec Wordpress, c’est l’un des sites qui utilise le SSO pour l’authentification au back-office.</p>
                    </div>
                    <div class="appli">
                        <h3>3.2.3.3 <a class="title_link" href="https://www.allso.tv/">Allso</a>, <a class="title_link" href="https://www.sovage.tv/">Sovage</a> :</h3>
                        <p class="alinea">Les deux sites exposent le travail de production audiovisuelle de SOPRESS, Ils sont tous les deux conçu avec Wordpress.</p>
                    </div>
                </section>
            </section>
            <section class="middle-section">
                <h1 class="middle-title">3.3 Focus sur les missions effectuées</h1>
                <p class="alinea">Dans la section qui suit, je décrirai quelqu'une des différentes missions qui m’ont été confiée, ainsi que les aspects techniques les concernant.
                </p>
                <div class="projet">
                    <h3 class="projet-title"><u>3.3.1 Installation des sites en local</u></h3>
                    <ol>
                        Afin de pouvoir apporter des modifications et maintenir les sites, il a fallu, dans un premier temps les installer localement.
                        <li>J’ai commencé par cloner les répertoires des différents sites depuis Gitlab. </li>
                        <li>Je me suis ensuite connecté aux bases de données en production en utilisant un outil d'administration de base de données <a href="https://www.heidisql.com/">"HeidiSQL"</a>, pour cloner celle-ci en local. </li>
                        <li>J’ai créé un <a href="https://httpd.apache.org/docs/2.2/fr/vhosts/">vhost(virtual host)</a> pour chacun des sites afin de maintenir une gestion séparée des noms. Chaque Vhost contient la version PHP utilisée par le site, si celle-ci est différente de la version par défaut du serveur.</li>
                        <li>J'ai ensuite rajouté le nom de domaine des sites au fichier "hosts" de mon système d'exploitation.</li>
                        <li>Et enfin, j'ai cloné les fichiers de configuration en les adaptant à mon nouvel environnement.</li>
                    </ol><br />
                    <p class="alinea">Cette opération a été répété autant de fois que j'ai eu de projet la nécessitant.</p><br />
                    <br />
                    <b>La configuration du Vhost utilisé pour faire fonctionner le site "https://www.society-magazine.fr" en local</b>
                    <div class="figure">
                        <img src="images/vhost.png" width="100%" /><br />
                        <label>Figure 3</label>
                    </div><br />
                    <p class="alinea">
                    <ul>
                        <li>"<\VirtualHost *:80"> indique à notre serveur Apache d'écouter sur le port 80. Le port 80 correspond au <a href="https://fr.wikipedia.org/wiki/Hypertext_Transfer_Protocol">protocole HTTP</a>, c'est-à-dire la connexion d'un serveur HTTP avec un navigateur Web. Les protocoles définissent la façon dont clients et serveurs communiquent. Il est bien-sûr possible de changer de numéro de port.</li>
                        <li>"www.society-magazine.local" est nom du serveur auquel le vhost doit répondre. Si la partie hôte d'une demande HTTP correspond à ce nom, autorisez la demande.</li>
                        <li>"society-magazine.local" est un alias qui est un nom de domaine alternatif acceptés par le serveur et qui est facultatif</li>
                        <li>"DocumentRoot" est le chemin vers le dossier contenant les fichiers du site.</li>
                        <li>
                            <\Directory d:/web/society /> signifie qu'on applique les droits à l'intérieur des balises au répertoire correspondant au chemin.
                        </li>
                        <li>
                            Les droits :

                            <ul>
                                <li>"Options Indexes FollowSymLinks" sont les options choisies dans la suite.</li>
                                <li>"AuthType None" permet de définir le type d'authentification utilisateur pour un répertoire. Le type None désactive l'authentification.</li>
                                <li>"AllowOverride All" permet d'utiliser le .htaccess dans un site. Les .htaccess sont des fichiers de configuration des serveurs Apache, ils sont utilisés pour configurer des droits d'accès, des <a href="https://fr.wikipedia.org/wiki/Redirection_d%27URL">redirections d'URL</a> ou même des erreurs personnalisées. Ces derniers sont placés à la racine des répertoires ainsi la portée de leurs configurations est limité au répertoire en question.</li>
                                <li>"Order allow,deny" permet d'autoriser ou de refuser l'accès à une adresse IP, nom de domaine etc.</li>
                                <li>"Allow from all" signifie tout hôte se voit accorder l'accès, en tenant compte des directives Deny et Order comme décrite précédemment .</li>
                                <li>"Require all granted" signifie qu'on autorise tout le monde en tenant compte des droits décrits précédemment.</li>
                            </ul>
                        </li>
                        <li>
                            <div class="code">
                                <\FilesMatch "\.php$">
                                    SetHandler application/x-httpd-php8-cgi
                                    <\FilesMatch>
                            </div>
                            Indique la version de PHP nécessaire au fonctionnement du site.
                        </li>
                        <li>
                            <div class="code">
                                ErrorLog logs/society.dev-error.log <br />
                                CustomLog logs/society.dev-access.log combined
                            </div>
                            Il s'agit du chemin vers les fichiers de logs (d'erreurs) pouvant provenir de ce site.
                        </li>
                    </ul><br />
                    </p>
                </div>
                <div class="projet">
                    <h3 class="projet-title"><u>3.3.2  Mise en place d'un annuaire LDAP(Lightweight Directory Access Protocol)</u></h3>
                    <p class="alinea">L'une des missions les plus intéressantes que j'ai pu faire a été d'installer et de gérer un <a href="https://www.ionos.fr/digitalguide/serveur/know-how/ldap/">annuaire LDAP</a>, le but étant de mettre en place une <a href="https://www.okta.com/fr/blog/2021/02/single-sign-on-sso/">authentification SSO</a> pour l'un de nos outils de communication, <a href="https://mattermost.com">Mattermost</a>. Il suffirait ensuite d'avoir un compte SOGEST et de s'y connecter pour accéder à son instance Mattermost.</p>

                    <p class="alinea">Avant de pouvoir configurer le serveur LDAP et de créer l'annuaire, il est important de comprendre la technologie derrière et l'intérêt de l'utiliser dans notre cas.<br /><br />
                    <p>
                        <b class="title-etape-mission">Définition du protocole LDAP «Lightweight Directory Access Protocol» :</b><br />
                    <p class="alinea def">C'est <a href="https://fr.wikipedia.org/wiki/Protocole_réseau">un protocole réseau</a> permettant d'avoir accès au services d’annuaires distribués et centralisés ainsi que de les modifier. LDAP est la version légère du protocole DAP, qui s'avère être trop complexe pour la gestion d'annuaires volumineux. Les annuaires de ce genre sont généralement utilisés par les entreprises à grande quantité de données afin de faire des accès plus rapides. Dans ce contexte on parle de serveur LDAP.</p><br /><br />

                    <b class="title-etape-mission">Définition d'un annuaire LDAP</b><br />
                    <p class="alinea def">
                        Un annuaire LDAP est une <ax href="https://fr.wikipedia.org/wiki/Base_de_données_relationnelle">base de données relationnelle</ax> qui va contenir des informations sur des personnes, des groupes, machines etc. Ils sont couramment employés pour stocker des données d’authentification, des données d'utilisateurs (mot de passe, pseudonyme, e-mail, téléphone, etc.) ou d'objets (localisation, marque, modèle, etc.). D'autres applications (exemple : Mattermost) peuvent utiliser ce service pour valider les identifiants de connexion.
                    </p><br /><br />

                    <b class="title-etape-mission">Le fonctionnement d'un annuaire LDAP:</b><br />
                    <p class="alinea">Un annuaire LDAP est un ensemble d'objets organisés hiérarchiquement selon une arborescence dite <a href="https://en.wikipedia.org/wiki/Directory_information_tree">« DIT » (Directory Information Tree).</a></p>
                    <br /><b>Exemple d'arborescence d'un annuaire LDAP</b><br /><br />

                    <div class="figure">
                        <img id="image-3" src="images/ldap.png" width="90%"><br />
                        <label>Figure 4</label>
                    </div><br />

                    <p class="alinea">Chaque objet peut contenir des attributs auxquels on assigne des valeurs. Un objet appartient au moins à une <a href="https://web.maths.unsw.edu.au/~lafaye/CCM/activedirectory/active-directory-principes.htm">classe d’objets</a> qui définit ses attributs. Dans notre cas, un objet du groupe "personnes" représente une personne physique, cette personne est définie par des attributs tels que le nom (sn), prénom (cn), téléphone, email etc. </p>
                    <br />
                    <b class="title-etape-mission">Avantages à utiliser un annuaire LDAP:</b>
                    <ul>
                        <li>Single sign-on : pouvoir se connecter à des applications en utilisant les identifiants contenus dans l'annuaire (les mêmes que SOGEST dans notre cas)</li>
                        <li>L'annuaire peut être interrogé par toute application compatible LDAP ayant besoin d'utiliser les informations (Mattermost dans notre cas)</li>
                        <li>La centralisation de données permet une facilité de gestion, une meilleure sécurité informatique et une meilleure communication entre les applications les utilisant.</li>
                        <li>Un accès plus rapide aux serveurs permet d'améliorer l'expérience utilisateur et d'éviter tout bug relatif au temps d'attente des réponses serveur. </li>
                    </ul><br /><br />

                    <p>
                        <b class="title-etape-mission">Installer et configurer OpenLDAP et phpLDAP sur une machine Ubuntu :</b><br /><br />
                        <b>OpenLDAP : </b><br />
                    <p class="alinea">Avant de me confier la tâche, mon tuteur a commencé par créer une machine virtuelle avec une instance <a href="https://www.ubuntu-fr.org/">ubuntu</a> qu'il a hébérgée sur un serveur. Il m'a ensuite donné les accès et de là, j'ai pris la relève.</p>
                    <p class="alinea">J'ai commencé par installer un serveur <a href="https://httpd.apache.org/">Apache</a>, <a href="https://doc.ubuntu-fr.org/mysql">MySQL</a> et php sur ma machine. J'ai ensuite sécurisé mon serveur apache avec un <a href="https://www.globalsign.com/fr/centre-information-ssl/definition-certificat-ssl">certificat SSL</a>. Il est important de le sécuriser puisque je vais travailler avec des données sensibles par la suite.<br /><br /></p>
                    <p class="alinea">J'ai ensuite installé le serveur LDAP en installant quelques packages avec les commandes :<br /></p>
                    <p class="code">
                        $ sudo apt-get install slapd ldap-utils<br />
                        $ sudo dpkg-reconfigure slapd //configurer le serveur
                    </p>
                    <p class="alinea">Jusque-là, notre serveur LDAP est monté et est en service. j'ai ensuite ouvert le port sur le pare-feu afin de laisser entrer les connexions externes avec la commande :</p>
                    <p class="code">
                        $ sudo ufw allow ldap
                    </p>
                    <p class="alinea">J'ai pu tester le bon fonctionnement du serveur avec la commande ci-dessous. Elle nous renvoie l'utilisateur avec lequel on est connecté.</p>
                    <p class="code">
                        $ ldapwhoami -H ldap:// -x
                    </p>
                    <p class="alinea">Le résultat attendu est "anonymous".</p><br /><br />

                    <b>phpLDAP : </b><br />
                    <p class="alinea">La deuxième étape a été d'installer <a href="http://phpldapadmin.sourceforge.net/wiki/index.php/Main_Page">phpLDAPadmin</a> pour gérer les données sur une interface graphique avec les commandes suivantes :</p>
                    <p class="code">
                        $ sudo apt-get install phpldapadmin<br />
                        $ sudo nano /etc/phpldapadmin/config.php
                    </p><br />

                    <p class="alinea">Une fois l'installation faite, j'ai adapté le fichier de configuration pour utiliser notre nom de domaine en renseignant les informations de notre serveur LDAP.</p><br /><br />

                    <b class="title-etape-mission">Connexion au phpLDAPadmin</b><br /><br />

                    <p class="alinea">En allant sur ["https://notre.domaine.com/phpldapadmin"], et en saisissant les coordonnée d'authentification adéquates, j'ai pu me connecter à l'annuaire.</p><br />
                    <p>Ressources sur lesquelles je me suis appuyée pour la configuration du serveur :<a href="https://www.digitalocean.com/community/tutorials/how-to-install-and-configure-openldap-and-phpldapadmin-on-ubuntu-16-04"> Installer et configurer un serveur LDAP.</a></p>
                    <br /><br />
                    <b class="title-etape-mission">Importer les données depuis SOGEST: </b><br />
                    <p class="alinea">Après installation et configuration du serveur LDAP, j'ai créé une classe "Ldap" contenant les fonctions nécessaires à la récupération des données depuis la base de données sogest et à l'export de celle-ci vers l'annuaire. Pour cela, j'ai utilisé des <a href="https://www.php.net/manual/fr/book.ldap.php">fonctions prédéfinies </a>en php. J'ai ensuite créé un "one shot" (programme lancé une seule fois) dans lequel les fonctions sont appelées.<br /></p>
                    <br />
                    <p class="alinea">À chaque utilisateur récupéré depuis SOGEST, une instance "user" est créée dans l'annuaire puis remplie avec les informations de la personne.
                        Ainsi, j'ai pu importer toutes les données utilisateur dans notre annuaire AD/LDAP</p><br />

                    <div class="alinea">
                        <p>Aperçu des fonctions :<br />
                        <p class="alinea">
                            Connexion au serveur :
                        </p>
                        <div class="figure">
                            <img src="images/connect_ldap.png" width="100%" /><br />
                            <label>Figure 5</label>
                        </div><br />
                        <p class="alinea">
                            Insertion des données utilisateur SOGEST dans l'annuaire une première fois, la variable $info étant les données d'un utilisateur :

                        </p>
                        <div class="figure">
                            <img src="images/insert_data.png" width="100%" /><br />
                            <label>Figure 6</label>
                        </div><br />

                        <p class="alinea">
                            Récupération des données depuis l'annuaire :

                        </p>
                        <div class="figure">
                            <img src="images/get_data.png" width="100%" /><br />
                            <label>Figure 7</label>
                        </div><br />

                        <p class="alinea">
                            Ressources sur lesquelles je me suis appuyée pour construire la classe LDAP : <a href="https://www.php.net/manual/fr/book.ldap.php">Manuel Php</a>, <a href="https://riptutorial.com/ldap/example/19797/setting-up-php-to-work-with-ldap">LDAP avec PHP</a>
                        </p>
                        </p><br />
                    </div>
                    <b class="title-etape-mission">Automatisation de l'import/export des données</b><br />
                    <p class="alinea">Une fois nos données importées, il a fallu automatiser le processus, puisqu'à la moindre modification d'information par un utilisateur, il faudrait que ses informations soient mises à jour dans l'annuaire également. L'idée était d'exécuter le script d'import/export depuis un <b><a href="https://fr.wikipedia.org/wiki/Cron">cron</a></b> qui s'exécuterait à chaque fois qu'un utilisateur modifie ses informations.</p><br /><br />

                    <b class="title-etape-mission">La suite du projet</b><br />
                    <p class="alinea">L'implémentation de cette technologie avec Mattermost étant devenue payante, il n'est plus intéresssant pour nous d'y avoir recours. Cependant, celle-ci sera toujours utile pour d'éventuelles futures utilisations.</p>
                </div>
                <div class="projet">
                    <h3 class="projet-title"><u>3.3.3 Liseuse électronique</u></h3>
                    <p class="alinea">
                        Un des projet qui a été collectivement réalisé a été le développement d'une liseuse électronique pour la MAIF. Aina RANDRIANARIJAONA a commencé par nous exposer le besoin en nous listant les différents objectifs et demandes du client.
                        Mon tuteur m'a ensuite orienté vers des pistes par lesquelles commencer, et qui se basent sur un ancien projet qu'il a lui-même réalisé.<br /><br />

                        <b class="fifth-title">Les objectifs :</b>
                    <ol>
                        <li>Une liseuse électronique qui diffuse un PDF de façon fluide.</li>
                        <li>Un projet qui fonctionne intégralement en local.</li>
                        <li>Intégration de fonctionnalités telle que le zoom, le partage sur les réseaux sociaux ou encore des liens cliquables.</li>
                    </ol><br />

                    <b class="title-etape-mission">Technologies utilisées</b>
                    <ul>
                        <li><a href="https://fr.wikipedia.org/wiki/Plugin">plugin</a> <a href="https://codecanyon.net/item/newspaper-flipbook-jquery/13953512">Jquery flipbook</a> : un plugin qui permet de diffuser un pdf en utilisant la <a href="https://www.techno-science.net/definition/1470.html#:~:text=En%20informatique%2C%20une%20bibliothèque%20ou,sans%20avoir%20à%20les%20réécrire.">librairie</a> PDF.js.</li>
                        <li>PHP 8, HTML5, CSS3, JQuery.</li>
                        <li><a href="https://ellisonleao.github.io/sharer.js/">Sharer.js</a>: librairie JavaScript qui permet de créer des boutons de partage sur les réseaux sociaux.</li>
                    </ul><br />
                    <b class="title-etape-mission">Avantage à utiliser un plugin </b>
                    <ol>
                        <li>Implémenter simplement les fonctionnalités dont on a besoin sans avoir recours à d'autres librairies ou à les coder nous-mêmes.</li>
                        <li>Le plugin est responsif.</li>
                        <li>Le plugin implémente des fonctionnalités tel que le zoom, le chargement paresseux, l'intégration de lien et bien d'autres.</li>
                    </ol>


                    <br />
                    <p class="alinea">Après avoir créé l'environnement local adéquat (Vhost, téléchargement du plugin..), j'ai commencé par adapter le code de la liseuse en intégrant le plugin et en apportant les modifications de design adéquates comme mettre les couleurs de la liseuse aux couleur de la maif.</p>
                    <br />
                    <p class="alinea">J'ai ensuite livré une première version à mon tuteur en lui exposant les points pouvant être améliorés ou corrigés comme le zoom qui était insuffisant. Il a pris la relève sur le projet pour effectuer une modification qui a consisté à transformer en utilisant une API, le PDF en images stockées sur S3, et qui étaient ensuite diffusées.
                        Cela a permis d'avoir un zoom plus efficace.</p><br />
                    <p class="alinea">Afin d'automatiser la génération du rendu, plusieurs autres modifications ont été apportées, on a fini par avoir le processur représenté ci-dessous («Figure 4») :<br />
                        <br />
                    <div class="figure">
                        <img width="100%" src="images/liseuse.png" rel="liseuse"><br />
                        <label>Figure 4</label>
                    </div>
                    <p class="alinea">En lançant le script "generer.php", la fonction de génération d'images est exécutée, celle-ci fait un appel API vers 'Pdf-to-image' en lui passant les paramètres adéquats dont l'url du PDF. L'API permet d'extraire des pages depuis un PDF en format image, elle retourne ensuite l'url de l'image générée, hébergée sur s3. Dans le cas où on extrait toutes les pages, l'API retourne une donnée JSON.
                        <br /><br />
                    <p class="alinea">Une fois le fichier <a href="https://fr.wikipedia.org/wiki/JavaScript_Object_Notation">Json</a> contenant l'ensemble des urls des images retourné, une boucle sur ce fichier est exécutée dans "model.php", et en utilisant la fonctionnalité du plugin, diffuse les images.
                        Le rendu du fichier "model.php" et ensuite récupéré dans "generer.php" pour l'injecter dans le buffer de sortie et générer le fichier statique "index.html".
                    </p><br />
                    <p class="alinea">J'ai ensuite intégré le partage sur les réseaux sociaux, et pour ça j'ai utilisé une librairie JavaScript Sharer.js qui permet de créer des boutons de partage sur les réseaux sociaux, j'ai ensuite intégré les balises meta <b><a href="https://ogp.me">OPEN GRAPH</a></b>.<br /><br />
                    <p class="alinea">Aina était l'interlocuteur principal avec les représentants de la maif, c'est lui qui m'aiguillait sur les modifications à effectuer sur les nouvelles versions afin d'arriver à un <a href="https://satellites.maif.fr/maif/maif-mag/189-juillet-2022/#maif-mag-189-juillet-2022/1">produit final</a> satisfaisant.</p>
                    </p>
                </div>
                <div class="projet">
                    <h3 class="projet-title"><u>3.3.4 SOGEST</u></h3>
                    <p class="alinea">
                        La plupart de mes missions ont consisté à apporter des améliorations et modifications au système de gestion SOGEST. Parmi celles-ci :</p><br />
                    <b class="title-etape-mission"><u>3.3.4.1 Un système de notifications:</u></b><br />
                    <p class="alinea">Une des demandes du service de comptabilité a été de mettre en place un système de notification afin que les employées puissent recevoir des notifications ainsi que des mails lorsque de nouveaux documents (fiches de paie et autres) sont disponibles sur leur compte personnel.
                        Il fallait donc implémenter la fonctionnalité tout en envisageant de futures utilisations.<br /></p><br />


                    <p class="alinea">J'ai commencé par créer une table "notifications" dans la base de données. Ainsi qu'une classe "Notif" dans le code de sogest, contenant les fonctions nécessaires à la création, récupération et modifications des données.
                        J'ai ensuite adapté le front-end pour implémenter la fonctionnalité comme présenté dans la figure N°5.</p><br />

                    <div class="figure">
                        <img src="images/notif_1.jpg" width="60%" /><br />
                        <label>Figure 5</label>
                    </div>

                    <p class="alinea">Chaque notification a pour attribut un lien qui redirige vers la liste des documents de la personne, et qui remplit automatiquement le champ de recherche avec le nom du fichier concerné, ce qui permet à l'utilisateur de retrouver facilement son document.</p><br />
                    <p class="alinea">Pour automatiser l'envoi des notifications, j'ai créé un Cron qui s'exécute à un certain intervalle de temps, et qui permet d'envoyer un mail pour toute notification créée dont l'attribut mail = 0 (attribut mail = 0 signifié qu'aucun mail n'a été envoyé pour cette notif).</p><br />
                    <p class="alinea">Plusieurs tests et améliorations ont été effectués pour perfectionner le système, par exemple, envoyer un seul mail regroupant les notifications cumulées depuis la dernière exécution du Cron, implémentation des notifications dans d'autres cas d'usage comme les notes de frais, rédaction et signature de contrat pour le service de prod etc.<br /><br />
                        <b>Rendu</b><br />
                    <p class="alinea">Après l'envoi d'un document, une notification ainsi qu'un mail sont reçus par la personne concernée :<br />
                    </p><br />

                    <p class="alinea">Exemple de notification reçu après un envoie de document («Figure 6») :</p>
                    <div class="figure">
                        <img src="images/notif_2.jpg" width="60%" /><br />
                        <label>Figure 6</label>
                    </div>

                    <p class="alinea">Au clique sur une notification, l'utilisateur est redirigé vers la page représentée dans la figure N°7 :<br /></p>
                    <div class="figure">
                        <img src="images/notif_3.jpg" width="100%" />
                        <label>Figure 7</label>
                    </div>

                    </p><br />

                    <b class="title-etape-mission"><u>3.3.4.2 Visionneuse de magazines</u></b><br />
                    <p class="alinea">Suite à la demande de plusieurs employés pour avoir accès aux PDFs des magazines, on a décidé d'enrichir un outil déjà existant qui permet de télécharger les couvertures, logo, et doubles pages des magazines en y ajoutant une visionneuse de PDFs avec possibilité de téléchargement.</p><br />
                    <p class="alinea">
                        J'ai commencé par adapter le code de la visionneuse/liseuse à nos besoins en minimisant le nombre de fonctionnalités et en utilisant la diffusion de PDF fourni par le plugin.
                        J'ai ensuite implémenté côté client, un bouton avec accès à la visionneuse dans SOGEST ce qui me permet de récupérer les informations de l'activité depuis la base de données. Ainsi, j'ai construit l'URL de récupération du PDF depuis le serveur.</p><br />

                    <p class="alinea">
                        L'accès à la visionneuse est protégé derrière une authentification à SOGEST, je vérifie bien que l'utilisateur est connecté et qu'il a un statut lui permettant d'y accéder.</p><br />
                    <p class="alinea">
                        Pour ce qui est du téléchargement, afin de protéger l'URL d'accès au serveur, j'ai fait une redirection vers un fichier php qui permet de lire le PDF et de le rediriger vers le buffer de sortie en utilisant la fonction <a href="https://www.php.net/manual/fr/function.readfile.php">readfile</a> de php.<br />
                    </p><br />
                    <p><b>Schéma représentatif du processus («Figure 8») :</b></p>

                    <div class="figure">
                        <img width="100%;" src="images/liseuse_sogest.png" rel="schema_liseuse" />
                        <label>Figure 8</label>
                    </div><br />

                    <b>Rendu «Figure 9» :</b>
                    <div class="figure">
                        <img src="images/magazine.png" width="100%">
                        <label>Figure 9</label>
                    </div><br />

                </div><br />
                <div class="projet">
                    <h3 class="projet-title"><u>3.3.5 SOGOOD Landing page</u></h3>
                    <p class="alinea">
                        L'équipe du magazine SOGOOD a formulé une demande pour la création d'une landing page vers laquelle leurs clients seront redirigés afin de recevoir un exemplaire d'un de leurs numéros.</p><br />
                    <p class="alinea def">Une landing page ou page de renvoie est une page Web publicitaire vers laquelle renvoie un hyperlien, à la suite d'un clic de l'internaute sur une publicité en ligne ou dans un courriel commercial.</p><br />

                    <p class="alinea">L'objectif étant de reproduire une maquette préalablement fournie, en une page web avec des liens dynamiques permettant de renseigner son e-mail pour recevoir un numéro gratuit par mail, ainsi que de s'inscrire à la newsletter du magazine.
                        La demande incluait aussi de faire varier le logo ainsi que le texte de la landing page selon les différents partenaires du magazine.</p><br />


                    <p class="alinea">Après avoir reçu la maquette ainsi que les fichiers (logo, images et texte) de chaque partenaire, j'ai commencé par reproduire le visuel de la page avec du SASS/CSS3 et du HTML5. J'ai ensuite créé un fichier de configuration dans lequel j'ai listé, dans un tableau, l'ensemble des partenaires avec leurs textes, logos ainsi qu'un slug qui sera renseigné en paramètre d'URL pour chacun.
                        Il a ensuite suffi de récupérer le slug du partenaire depuis L'URL par laquelle le client est arrivé pour faire varier le visuel de la page selon les partenaires.</p><br />

                    <p class="alinea">Pour la partie dynamique, il a fallu écrire un script php permettant de récupérer les adresses mails des utilisateurs et en utilisant <a href="https://supabase.com">supabase</a>, les stocker en base de données.</p><br />
                    <p class="alinea def">Supabase est un ensemble de services d'hébergement <a href="https://fr.wikipedia.org/wiki/Open_source">open source</a> qui inclut une base de données <a href="https://www.postgresql.org">PostgreSQL</a>, l'authentification, le stockage de fichiers et une API générée automatiquement.</p><br />
                    <p class="alinea">On peut constater dans la figure n°10 la variation du logo et du texte selon la variation de l'URL. Ainsi, si par exemple, un utilisateur vient depuis une publicité de vélib, il sera redérigé vers la page qui correpond à "vélib".</p>
                    <div class="figure">
                        <img src="images/velib.png" width="100%" />
                        <label>Figure 10</label>
                    </div>
                    <p class="alinea"><b>Retrouvez le résultat juste ici :</b> <a href="https://sogoodstories.com/gratuit/">Landing page SOGOOD</a></p>

                </div>
                <a href="apport_stage.php" class="pagination-section"><span>Page suivante</span><img id="next" src="images/right.png" rel="next"></a>
        </div>
        </div>
    </main>
</body>

</html>