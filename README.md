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
git clone git@github.com:ton-org/start-theme.git mon-projet
cd mon-projet
```
### 2. Copier le fichier .env
```bash
cp .env.example .env
```
- [ ] WP_HOME=http://localhost:8000

- [ ] DB_NAME, DB_USER, DB_PASSWORD

- [ ] Génèrer et coller les salts ici → https://roots.io/salts.html

### 3. Configuration une seule fois sur ta machine
Ajouter l'utilisateur WSL au groupe www-data (Apache)
```bash
sudo usermod -a -G www-data $USER
```

### 4. Installer les dépendances
Dans le dossier themes
```bash
composer install
npm install
```

### 5. Démarrer les containers Docker
Démarrage initial
```bash
docker compose --env-file .env up --build -d
```

#### Pour augmenter la limite d’upload (facultatif)
Ajouter dans web/.htaccess :
```apache
php_value upload_max_filesize 10M
php_value post_max_size 20M
```



✨ Fait avec ❤️ par Alice