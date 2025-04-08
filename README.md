# GExams - Plateforme de Gestion d'Examens

[![Symfony](https://img.shields.io/badge/Symfony-6.0-%23000000.svg?logo=symfony)](https://symfony.com)
[![PHP](https://img.shields.io/badge/PHP-8.1-%23777BB4.svg?logo=php)](https://php.net)
[![License](https://img.shields.io/badge/License-MIT-blue.svg)](LICENSE)

Application web de gestion d'examens développée avec Symfony 6.

![Dashboard Screenshot](screenshots/dashboard.png)

## Fonctionnalités

- 🛡️ Authentification sécurisée (JWT) avec rôles Admin/User
- 📊 Dashboard admin (CRUD étudiants/filières)
- 🌍 Support multilingue (Français/Anglais/Arabe)
- 🔄 Fixtures automatisées avec Foundry
- 📝 Gestion des entités Doctrine
- 🎨 Frontend moderne avec Bootstrap + Webpack Encore

## Installation

1. **Cloner le dépôt** :
```bash
git clone https://github.com/votre-username/GExams.git
cd GExams
```

2. **Installer les dépendances** :
```bash
composer install
npm install
```

3. **Configurer la base de données** (.env) :
```env
DATABASE_URL="mysql://user:password@127.0.0.1:3306/gexams?serverVersion=8.0"
```

4. **Créer la base de données** :
```bash
symfony console doctrine:database:create
symfony console doctrine:migrations:migrate
```

5. **Charger les données de test** :
```bash
symfony console doctrine:fixtures:load
```

6. **Démarrer le serveur** :
```bash
symfony server:start -d
npm run watch
```

Accéder à l'application : [https://127.0.0.1:8000](https://127.0.0.1:8000)

## Accès Admin

- **URL Admin** : `/admin`
- **Compte test** :
  ```
  Email: admin@SupMTI.ma
  Password: admin123
  ```

## Structure du Projet

```
gexams/
├─ assets/
│  ├─ styles/       # Fichiers SCSS
│  ├─ js/           # Scripts JavaScript
├─ config/
├─ public/
│  ├─ build/        # Assets compilés
├─ src/
│  ├─ Entity/       # Entités Doctrine
│  ├─ Security/     # Configuration JWT
│  ├─ Controller/   # Contrôleurs
```

## Technologies

- **Backend** : 
  - Symfony 6
  - Doctrine ORM
  - EasyAdmin
  - JWT Authentication

- **Frontend** :
  - Bootstrap 5
  - Webpack Encore
  - FontAwesome
  - jQuery

- **Outils** :
  - Foundry (Fixtures)
  - PHPUnit (Tests)
  - GitHub Actions (CI/CD)

## Contribution

1. Créer une nouvelle branche :
```bash
git checkout -b feature/nouvelle-fonctionnalite
```

2. Soumettre une Pull Request après :
   - Exécution des tests (`php bin/phpunit`)
   - Mise à jour de la documentation
   - Validation des standards de code (`php-cs-fixer`)

## Licence

Distribué sous licence MIT. Voir le fichier `LICENSE` pour plus de détails.
