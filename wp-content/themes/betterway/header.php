<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/materialize.css">
    <style>
        span {
            animation: animated-cursor 600ms steps(17,end) infinite;
        }
        /* cursor animations */

        @keyframes animated-cursor{
            from{border-right-color: #1aade2;}
            to{border-right-color: transparent;}
        }

        .page404 {
            height: 100vh;
            display: flex;
            align-items: end;
            padding-left: 25px
        }
    </style>
</head>
<body>
