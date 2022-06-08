<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contacts</title>
    <style>
        .text_center {
            text-align: center;
        }
        ul {
            list-style: none;
            display: flex;
            justify-content: center;
            column-gap: 1rem;
            padding: 0; 
        }

    </style>
</head>
<body>
<nav class="text_center">
        <ul>
            <li>
                <a href="{{'home'}}">home</a>
            </li>
            <li>
                <a href="{{'about'}}">about me</a>
            </li>
            <li>
                <a href="{{'contacts'}}">contacts</a>
            </li>
        </ul>
    </nav>
    <h1 class="text_center">contacts of {{$name . ' ' . $surname}}</h1>
</body>
</html>