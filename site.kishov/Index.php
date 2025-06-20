<?php

$message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['name']) && !empty($_POST['message'])) {
    $name = htmlspecialchars(strip_tags(trim($_POST['name'])));
    $userMessage = htmlspecialchars(strip_tags(trim($_POST['message'])));
    $message = "Спасибо, <strong>$name</strong>! Ваша Оценка получена!!!!.";
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8" />
    <title>Мой топовый сайт</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap');
        * {
            box-sizing: border-box;
        }
        body {
            font-family: 'Inter', Arial, sans-serif;
            background: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%);
            margin: 0; padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            color: #333;
        }
        .container {
            background: #ffffffdd;
            padding: 40px 30px;
            border-radius: 15px;
            box-shadow: 0 12px 30px rgba(0,0,0,0.15);
            max-width: 450px;
            width: 100%;
            text-align: center;
        }
        h1 {
            margin-bottom: 10px;
            color: #2c3e50;
            font-weight: 600;
        }
        p.subtitle {
            color: #666;
            margin-bottom: 30px;
            font-size: 1rem;
        }
        form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
        input[type="text"],
        textarea {
            padding: 12px 15px;
            border: 2px solid #ddd;
            border-radius: 8px;
            font-size: 1rem;
            transition: border-color 0.3s ease;
            resize: vertical;
            font-family: 'Inter', Arial, sans-serif;
        }
        input[type="text"]:focus,
        textarea:focus {
            border-color: #55aaff;
            outline: none;
            box-shadow: 0 0 8px #55aaff66;
        }
        button {
            padding: 15px;
            font-size: 1.1rem;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-weight: 600;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #2c80d9;
        }
        .message {
            margin-top: 25px;
            padding: 15px 20px;
            background-color: #d4edda;
            border: 1px solid #c3e6cb;
            color: #155724;
            border-radius: 12px;
            font-size: 1rem;
            box-shadow: 0 3px 8px rgba(21, 87, 36, 0.2);
            text-align: center;
        }
        footer {
            margin-top: 40px;
            font-size: 0.85rem;
            color: #777;
            user-select: none;
        }
        @media (max-width: 480px) {
            .container {
                padding: 30px 20px;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Я студент ИСП-231, Кишов Артём Юрьевич, Сделал ТЗ</h1>

    <form method="POST" action="">
        <input type="text" name="name" placeholder="Ваше имя" required />
        <textarea name="message" placeholder="Ваша Оценка" rows="4" required></textarea>
        <button type="submit">Отправить</button>
