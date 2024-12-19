<?php include "exo1.php" ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f8ff;
            color: #333;
        }

        header {
            background-color: #87CEFA;
            color: white;
            padding: 20px 0;
            text-align: center;
        }

        nav {
            background-color: #4682B4;
            overflow: hidden;
        }

        nav a {
            color: white;
            padding: 14px 20px;
            text-decoration: none;
            float: left;
            display: block;
        }

        nav a:hover {
            background-color: #5F9EA0;
        }

        section {
            margin: 20px;
        }

        .container {
            max-width: 1200px;
            margin: auto;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        table {
            margin: 20px 0;
            width: 100%;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid #4682B4;
        }

        th,
        td {
            padding: 8px;
            text-align: center;
        }

        h2,
        h3 {
            color: #4682B4;
        }

        footer {
            background-color: #87CEFA;
            text-align: center;
            padding: 10px 0;
            margin-top: 20px;
        }
    </style>
</head>

<body>

    <header>
        <h1>Bienvenue sur le TP PHP</h1>
    </header>

    <nav>
        <a href="#exercice1">Exercice 1</a>
        <a href="#exercice2">Exercice 2</a>
    </nav>

    <div class="container">
        <section id="exercice1">
            <h2>Exercice 1</h2>

            <div id="les_sessions">
                <h3>Table de multiplication :</h3>
                <?php table_multi(10); ?>

                <h3>Résolution d'une équation du second degré :</h3>
                <?php  ?>
            </div>
        </section>

        <section id="exercice2">
            <h2>Exercice 2</h2>

        </section>
    </div>

    <footer>
        <p>&copy; 2024 TP PHP - Tous droits réservés</p>
    </footer>