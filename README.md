<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>
---
# Créer un site web dynamique en utilisant le cadriciel Laravel

### Le mandat est de créer un site Internet pour recueillir de l'information auprès des
étudiants du Collège Maisonneuve, et possiblement à l'avenir, de construire un réseau
social pour eux

### La première étape consiste à rassembler les informations, remplir la base de données
avec des données aléatoires et créer les interfaces fonctionnelles pour visualiser, saisir,
mettre à jour et supprimer les étudiants,

---

## La base de données initiale aura 2 tables : Étudient (id, nom, adresse, phone, email,
date de naissance, villeId) et ville (id, nom).

- En utilisant les lignes de commande, créer un nouveau projet Laravel
nommée Maisonneuve{votre matricule} 
- En utilisant les lignes de commande, créer les modèles
- En utilisant les lignes de commande, créer les tables
- En utilisant les lignes de commande, saisir 15 nouvelles villes
- En utilisant les lignes de commande, saisir 100 nouveaux étudiants 
- En utilisant les lignes de commande, créer les contrôleurs
- Créez votre layout.blade avec vous CSS, vous devez importer bootstrap et le
concevoir selon vos préférences.
- Créer un contrôleur “index” et une vue, pour afficher tous les étudiants, avec
un lien pour sélectionner l'étudiant et le mettre à jour. 
- Créer un contrôleur “create” et une vue, pour saisir un nouvel étudiant. Le
formulaire doit avoir un champ “select” avec toutes les villes qui viennent de
la base de données.
- Créer un contrôleur “show” et une vue, pour afficher un étudiant sélectionné.
- Créer un contrôleur “edit” et une vue, pour afficher un étudiant sélectionné
dans un formulaire et le mettre à jour.
- Créer un contrôleur “destroy” pour supprimer un étudiant sélectionné.