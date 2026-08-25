<h1 align="center">🚗 BlaBlaFPA</h1>

<p align="center">Application de covoiturage interne pour les collaborateurs et stagiaires de l'AFPA.</p>

<p align="center">
  <img src="https://img.shields.io/badge/PHP-MVC-777BB4?style=flat-square&logo=php&logoColor=white" alt="PHP MVC" />
  <img src="https://img.shields.io/badge/MySQL-005C84?style=flat-square&logo=mysql&logoColor=white" alt="MySQL" />
  <img src="https://img.shields.io/badge/JavaScript-F7DF1E?style=flat-square&logo=javascript&logoColor=111827" alt="JavaScript" />
  <img src="https://img.shields.io/badge/Bootstrap-3-7952B3?style=flat-square&logo=bootstrap&logoColor=white" alt="Bootstrap" />
</p>

## À propos

BlaBlaFPA est un projet collaboratif réalisé pendant une formation à l'AFPA. L'application permet de créer des trajets, rechercher un itinéraire, réserver une place et échanger entre conducteurs et passagers.

Le projet met en pratique une organisation MVC en PHP, la conception d'une base MySQL et un workflow Git en équipe.

## Fonctionnalités

- inscription et authentification ;
- création et recherche de trajets ;
- gestion des étapes et des places disponibles ;
- réservation d'une partie de trajet ;
- échanges entre participants ;
- interface responsive et appels asynchrones côté navigateur.

## Installation locale

Prérequis : PHP avec PDO MySQL et MySQL/MariaDB.

1. Créer une base blablafpa.
2. Importer le schéma présent dans _schema-sql.
3. Adapter les identifiants dans src/pdo/pdo.php à partir du placeholder local.
4. Servir le dossier public :

    php -S localhost:8000 -t public

Ouvrir ensuite http://localhost:8000.

## Contexte

Projet de formation réalisé en groupe avec [Amine Bouaich](https://github.com/Aminebouaich) et [Damirdine](https://github.com/damirdine). Les identifiants de base de données sont volontairement absents de la version publique.

## Auteur

[Christopher Semard](https://github.com/christophersemard)
