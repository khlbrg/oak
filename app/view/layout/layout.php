<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Title<?php echo $this->title; ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <link rel="stylesheet" href="/assets/css/main.css">
    </head>
    <body>
    @include('partial.menu')

    {{layout_content}}

    <script src="js/main.js"></script>
    </body>
</html>
