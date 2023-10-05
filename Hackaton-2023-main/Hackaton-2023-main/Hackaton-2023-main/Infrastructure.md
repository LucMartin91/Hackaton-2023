# Infrastructure pour le Projet "[[Tableau de Bord des Indicateurs de Qualité de Vie]]"

## Table des Matières

- [Infrastructure Serveur](#infrastructure-serveur)
  - [Serveur de Base de Données](#serveur-de-base-de-données)
  - [Serveur d'Application](#serveur-dapplication)
  - [Serveur de Notification en temps réel (optionnel)](#serveur-de-notification-en-temps-réel-optionnel)
- [Ressources Supplémentaires](#ressources-supplémentaires)
- [Outils de Développement et de Gestion](#outils-de-développement-et-de-gestion)
- [Logiciels et Services](#logiciels-et-services)

---

## Infrastructure Serveur

### Serveur de Base de Données

#### Fonction

Stocker, gérer et interroger efficacement les données.

#### Spécifications Matérielles

| Composant | Spécification       |
|-----------|---------------------|
| CPU       | 2 cœurs ou plus     |
| RAM       | 4GB ou plus        |
| Stockage  | HDD de 15GB ou plus|

#### Logiciel

- Linux (debian)
- MongoDB

---

### Serveur d'Application

#### Fonction

Héberger l'application, la gestion des utilisateurs, et les API.

#### Spécifications Matérielles

| Composant | Spécification       |
|-----------|---------------------|
| CPU       | 4 cœurs ou plus     |
| RAM       | 4GB ou plus        |
| Stockage  | SSD de 15GB ou plus|

#### Logiciel

- Linux (debian)
- Apache ou Nginx
- PHP

---

### Serveur de Notification en temps réel (optionnel)

#### Fonction

Gérer les notifications en temps réel.

#### Spécifications Matérielles

| Composant | Spécification      |
|-----------|--------------------|
| CPU       | 2 cœurs ou plus    |
| RAM       | 8GB ou plus        |
| Stockage  | SSD de 128GB ou plus|

#### Logiciel

- Linux
- Node.js ou technologies similaires pour les notifications en temps réel

---

## Ressources Supplémentaires

- **Système de Sauvegarde**: Solution de sauvegarde pour les données.
- **Pare-feu et IDS/IPS**: Sécuriser la communication.
- **Solutions de Monitoring et d'Alertes**: Suivre l'état de santé des serveurs et applications.

## Outils de Développement et de Gestion

- **GitHub**: Contrôle de version et collaboration de code.
- **Trello**: Gestion des tâches et répartition dans le groupe.

## Logiciels et Services

- **API OPEN DATA PARIS**: Accès aux données publiques.
- **ChatGPT**: Interaction utilisateur avancées.

