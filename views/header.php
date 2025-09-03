<?php
$config = include __DIR__ . '/../app/config.php';
$colors = $config['colors'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generador de QR</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: <?= $colors['background'] ?>;
            color: <?= $colors['text'] ?>;
        }
        h1, h2, h3, label {
            color: <?= $colors['title'] ?>;
        }
        .btn-custom {
            background-color: <?= $colors['button'] ?>;
            color: #fff;
            border-radius: 12px;
        }
        .btn-custom:hover {
            background-color: <?= $colors['buttonHover'] ?>;
            color: #fff;
        }
        .qr-box {
            background: #fff;
            border-radius: 16px;
            padding: 20px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }
        footer {
            margin-top: 50px;
            text-align: center;
            color: <?= $colors['text'] ?>;
        }
        footer a {
            color: <?= $colors['title'] ?>;
            text-decoration: none;
            margin: 0 10px;
        }
        footer a:hover {
            color: #000000;
            text-decoration: underline;
        }
    </style>
</head>
<body>
<div class="container py-5">
