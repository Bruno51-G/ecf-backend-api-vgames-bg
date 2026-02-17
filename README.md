# ecf-backend-api-vgames

- Titre professionnel : Développeur et Web Mobile
- J.O 2023
- Durée de l'épreuve: 4 heures


**Compétences évaluées :**
- Installer et configurer son environnement de travail en fonction du projet
- Développer des composants métier
- Documenter le déploiement

## Contexte

La Gizmondo est une console de jeux vidéo portable faisant également office d'appareil photo, GPS, lecteur audio/vidéo... Elle fut fabriquée de 2005 à 2008 par Tiger Telematics.

### Spécifications techniques
- CPU : Samsung 400 MHz ARM9
- GPU : NVIDIA GoForce 3D 4500
- Mémoire graphique: 1.2MB 128-bit SRAM 
- RAM: 128 MB 16-bit DDR 200Mhz
- ROM: 64 MB 
- Affichage : écran TFT couleur de 2,8 pouces 
- Palette graphique : 65 536 couleurs
- Résolution : 240×320 pixels
- Son : stéréo
- Autonomie : 4h en mode jeu, 3h en mode film, 12h en mode audio et 100h en veille.
- Dimensions : 138 × 82 × 32 mm
- Poids : 150g
- Autres : bluetooth 2, lecteur MP3, système de localisation GPS, lecteur de cartes mémoire SD, SMS/MMS, appareil photo numérique.

## Préparation.

1. Faites un FORK de ce dépôt du votre compte Github.

2. Cloner le dépôt en local.

3. Editer le Dockerfile et le Docker-compose pour que la configuration respecte les conditions suivantes : 
    - Le service web est accessible depuis le port 9005
    - La base de données est accessible depuis le port 3308
    - Config base de données :
        - Nom d'utilisateur : eval
        - Mot de passe : eval2503
        - Nom de la base de données : db_eval
        - Mot de passe root : rootpassword

3. Créer et lancer le conteneur

4. Se connecter au terminal du service web et installer symfony dans le répertoire /var/www/html.

5. Installer les dépendances et configurer api-platform (config/routes/api_platform.yml et config/packages/api_platform.yml). L'api ne doit gérer que le format JSON.

Accéder à l'api à implémenter : [http://localhost:9005/](http://localhost:9005/) 



## Travail à réaliser

Votre travail consiste à créer les entités de l'API correspondant au jeu de données fourni dans le dossier dataset.

**2 entités sont attendues :** 
- Gizmondo (Endpoint = `GET /gizmondos/`)
- Publisher (Endpoints = `GET /publishers/` 


### Ajouter un jeu Gizmondo

Dans l'api, utiliser l'opération `POST` pour ajouter quelques jeux du jeu d'essai. Pensez à ajouter les "publisher" avant.




# Restitution 

A la racine de votre dépôt créer un fichier `requirements.md` dans lequel vous indiquerez la démarche que vous avez suivi.

COMMIT + PUSH votre travail.

Fournir le lien de votre dépôt à l'évaluateur.
