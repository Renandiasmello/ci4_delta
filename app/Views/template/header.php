<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title><?php echo esc($title); ?></title>
    <style>
        ul.pagination li {
            display: inline;
        }

        ul.pagination li a {
            color: black;
            float: left;
            padding: 8px 16px;
            text-decoration: none;
        }

        .active {
            background-color: #4CAF50;
            color: white;
        }

        ul.pagination li a:hover:not(.active) {
            background-color: #ddd;
        }

        .circle-image {
            background-color: #aaa;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            overflow: hidden;
            position: relative;
        }

        .circle-image img {
            position: absolute;
            bottom: 0;
            width: 100%;
        }

        .circle-image-edit {
            background-color: #aaa;
            border-radius: 50%;
            width: 80px;
            height: 80px;
            overflow: hidden;
            position: relative;
        }

        .circle-image-edit img {
            position: absolute;
            bottom: 0;
            width: 100%;
        }

        .aluno-ini {
            font-size: 22px;
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        }
    </style>
</head>
<body>