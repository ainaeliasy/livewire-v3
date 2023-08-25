# Projet de Proof of Concept (POC) en Intelligence Artificielle

Ce projet a été réalisé dans le cadre d'une formation en Intelligence Artificielle. Il s'agit d'un Proof of Concept (POC) démontrant l'intégration de différentes technologies pour automatiser le traitement de documents à l'aide d'une application Laravel.

## Objectif

L'objectif principal de ce POC est de créer une application web qui combine la reconnaissance optique de caractères (OCR) avec l'intelligence artificielle pour automatiser le traitement de documents. Plus spécifiquement, le POC vise à :

- Scanner des documents à l'aide de `thiagoalessio/tesseract_ocr`.
- Traiter la sortie OCR à l'aide de l'API de ChatGPT de OpenAI.
- Extraire des informations pertinentes à partir des documents scannés.

## Technologies Utilisées

- Laravel Framework
- Livewire pour une expérience utilisateur en temps réel
- `thiagoalessio/tesseract_ocr` pour la reconnaissance optique de caractères
- OpenAI API pour le traitement de texte intelligent avec ChatGPT
- Guzzle HTTP client pour les requêtes HTTP
- Autres dépendances spécifiées dans le fichier `composer.json`

## Configuration et Utilisation

1. Clonez ce dépôt sur votre machine locale.
2. Installez les dépendances en exécutant `composer install`.
3. Configurez vos variables d'environnement dans le fichier `.env` (consultez `.env.example`).
4. Exécutez les migrations avec `php artisan migrate`.
5. Lancez le serveur de développement avec `php artisan serve`.
6. Accédez à l'application via votre navigateur.

## Fonctionnalités

- Scanner et télécharger des documents pour traitement.
- Traitement de la sortie OCR avec l'IA de ChatGPT.
- Affichage en temps réel des résultats à l'aide de Livewire.

## Remarque

Ce projet a été réalisé à des fins d'apprentissage et de démonstration suite à une formation en Intelligence Artificielle. Les technologies et les fonctionnalités implémentées ne sont pas destinées à un usage en production.

N'hésitez pas à explorer le code source pour voir comment les différentes technologies ont été intégrées pour atteindre les objectifs du POC.

**Auteur : Aina RAKOTOMALALA https://desolate-lake-09185.herokuapp.com/**
**Date : 24/08/2023**
