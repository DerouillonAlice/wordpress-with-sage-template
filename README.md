# 🚀 Starter WordPress – Bedrock + Sage 11 + Docker

---

## ✅ Pré-Requis

- [ ] **WSL 2 + Ubuntu** (ex: Ubuntu-22.04)
- [ ] **Docker Desktop**

  - Settings → Resources → WSL Integration
  - Cocher "Enable integration with my default WSL distro"
  - Cocher distro Ubuntu (ex: Ubuntu-22.04)
  - Apply & Restart

- [ ] **Git**

```bash
apt get update
apt install git
git config --global user.name "John Doe"
git config --global user.email johndoe@example.com
```

- [ ] **Composer**

```bash
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === 'dac665fdc30fdd8ec78b38b9800061b4150413ff2e3b6f88543c636f7cd84f6db9189d43a81e5503cda447da73c7e5b6') { echo 'Installer verified'.PHP_EOL; } else { echo 'Installer corrupt'.PHP_EOL; unlink('composer-setup.php'); exit(1); }"
php composer-setup.php
php -r "unlink('composer-setup.php');"
```

- [ ] **Node.js + npm**

```bash
npm install -g npm
```

---

## 🚀 Démarrage d’un nouveau projet

### 1. Cloner le repo

```bash
git clone git@bitbucket.org:zetructeam/zetruc_bedrock_starter.git mon-projet
cd mon-projet
```

### 2. Initialisation

Si problèmes de permission de fichier avec git, exécuter cette commande pour les ignorer :

```bash
git config core.fileMode false
```

Renommer le docker compose

```bash
cp docker-compose.yml.example docker-compose.yml
```

Corriger le .env en mettant le nom du projet et remplir les champs suivants

```bash
cp .env.example .env
nano .env
```

- [ ] PROJECT_NAME
- [ ] DB_NAME, DB_USER, DB_PASSWORD, DB_ROOT_PASSWORD
- [ ] Génèrer et coller les salts ici → https://roots.io/salts.html

### 3. Configuration

Ajouter l'utilisateur WSL au groupe www-data (Apache)

```bash
#remplacer $USER par utilisateur wsl
sudo usermod -a -G www-data $USER #a faire que la première fois
sudo chown -R $USER:www-data web
sudo chmod -R 775 web
```

Modifier le nom du projet sur le **dossier theme** et dans le fichier vite.config.js (optionnel)

```bash
  cd web/app/themes
  mv zetruc-theme mon-projet
  cd mon-projet
  nano vite.config.js
  #ligne à remplacer : base: '/app/themes/mon-projet/public/build/',
```

### 4. Démarrer les containers Docker

Démarrage initial (dans le dossier racine)

```bash
docker compose --env-file .env up --build -d
```

### 5. Installer les dépendances


Dans le dossier racine

```bash
composer install
```

Dans le dossier themes (web/app/themes/mon-projet)

```bash
npm install
composer install
```

Compilation (dans le dossier du thème)

```bash
npm run build
```

### Finalisation

- [ ] Accéder à WordPress :
      http://localhost:8000/

- [ ] Installer WordPress normalement (compte admin, nom du site…)

**Veuillez installer les extensions AVANT d’activer le thème** pour éviter tout problème de fonctionnalités manquantes :

- [ ] Installer Extension **"Advanced Custom Fields (ACF)"** et l’Activer — **ou** installer **ACF Pro** (voir ci-dessous)
- [ ] Activer le thème dans Apparence > Thèmes

#### Configuration finale

- [ ] Régler les permaliens : Réglages > Permaliens > Titre de la publication

- [ ] Créer une page d’accueil dans pages

- [ ] Configurer la page d’accueil : Réglages > Lecture > Une page statique > Page d’accueil (sélectionner la page créée)

---

#### ACF Pro (optionnel)

Le thème fonctionne avec ACF gratuit. Si vous disposez d’une licence ACF Pro, des fonctionnalités supplémentaires sont disponibles (exemple: page d’options globales du site). ACF Pro peut être installé à tout moment, même après la mise en place du projet, sans aucun problème.

##### 1. Configurer l’authentification

Pour installer ACF Pro via Composer (dans le dossier racine) :

```bash
cp auth.json.example auth.json
nano auth.json
```

Remplacer `VOTRE-CLE-DE-LICENCE-ACF-PRO` par votre clé de licence (disponible sur votre compte ACF Pro).

##### 2. Installer ACF Pro via Composer

```bash
composer require wpengine/advanced-custom-fields-pro
```

##### 3. Activer le plugin

Puis dans WordPress :

- [ ] Aller dans Extensions > Extensions installées
- [ ] Activer **Advanced Custom Fields PRO**
- [ ] Désactiver et supprimer l’extension **Advanced Custom Fields** (gratuite) si installée précédemment, elle n’est plus nécessaire avec la version Pro

Une fois activé, la page **Paramètres du site** apparaît automatiquement dans le menu WordPress (adresse, téléphone, email, réseaux sociaux, formulaire de contact).

> **Note :** Sans ACF Pro, le thème fonctionne normalement — les fonctionnalités Pro sont simplement désactivées.

---

#### Pour augmenter la limite d’upload (facultatif)

Ajouter dans web/.htaccess :

```apache
php_value upload_max_filesize 10M
php_value post_max_size 20M
```

Fait avec ❤️ par Alice
