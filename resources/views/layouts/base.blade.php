<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>new_escape</title>
    <style>
    .row_region {
      display: flex;
      width:750px;
      flex-direction: row;
    }
    .row_region_col_1, .row_region_col_2, .row_region_col_3 {
      display: flex;
      width:250px;
    }

    </style>
</head>
<body>
<P>layout base</P>
@yield('contenu')

</body>
</html>
