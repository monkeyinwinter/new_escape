<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <title>new_escape</title>

    <style>
        table {
            margin-top: 20px;
            border-bottom: 1px solid black;
            border-right: 1px solid black;
        }

        td {
            width: 400px;
            border-right: 1px solid black;
            text-align: center;
        }
        a {
            text-decoration: none;
        }
        .btn {
            width: 100px;
        }
        .hover:hover {
            background-color: #b8daff;
        }
        .sup:hover {
            background-color: red;
        }
        .modif:hover  {
            background-color: #34ce57;
        }
    </style>

</head>


<body>
<h1>ESC_AP</H1>
@yield('contenu')

<script src="{{ asset('js/app.js') }}"></script>

</body>

</html>
