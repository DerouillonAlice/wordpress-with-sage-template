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
- [ ] **Composer**
- [ ] **Node.js + npm**

---

## 🚀 Démarrage d’un nouveau projet

### 1. Cloner le repo

```bash
git clone git@github.com:DerouillonAlice/sage-starter.git mon-projet
cd mon-projet
```

### 2. Initialisation

Renommer le dossier du projet ainsi que le docker compose

```bash
cp docker-compose.yml.example docker-compose.yml
```

Corriger le .env en mettant le nom du projet et les champs suivants

- [ ] MYSQL_ROOT_PASSWORD, MYSQL_DATABASE, MYSQL_USER, MYSQL_PASSWORD

Se rendre dans le dossier du projet et modifier le .env

```bash
cp .env.example .env
```

- [ ] WP_HOME=http://localhost:8000

- [ ] DB_NAME, DB_USER, DB_PASSWORD

- [ ] Génèrer et coller les salts ici → https://roots.io/salts.html

### 3. Configuration

Ajouter l'utilisateur WSL au groupe www-data (Apache)

```bash
sudo usermod -a -G www-data $USER #a faire que la première fois
sudo chown -R $USER:www-data web
sudo chmod -R 775 web
```

Modifier le nom du projet sur le **dossier theme** et dans le fichier vite.config.js

```bash
  base: '/app/themes/zetruc-theme/public/build/',
```

### 4. Installer les dépendances

Dans le dossier racine

```bash
composer install
```

Dans le dossier themes

```bash
npm install
composer install
```

### 5. Démarrer les containers Docker

Démarrage initial

```bash
docker compose --env-file .env up --build -d
```

Compilation

```bash
npm run build
```

### Finalisation

- [ ] Accéder à WordPress :
      http://localhost:8000/wp/wp-admin/install.php

- [ ] Installer WordPress normalement (compte admin, nom du site…)

- [ ] Activer le thème dans Apparence > Thèmes

#### Pour augmenter la limite d’upload (facultatif)

Ajouter dans web/.htaccess :

```apache
php_value upload_max_filesize 10M
php_value post_max_size 20M
```

✨ Fait avec ❤️ par Alice
