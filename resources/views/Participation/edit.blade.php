<!--
=========================================================
* Material Dashboard 2 - v3.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2023 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <title>
        Material Dashboard 2 by Creative Tim
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <!-- Nepcha Analytics (nepcha.com) -->
    <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
    <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>

    @vite(['resources/assets/js/jquery.min.js' ])
    @vite(['resources/assets/css/material-dashboard.css' ])
    @vite(['resources/assets/css/nucleo-svg.css' ])
    @vite(['resources/assets/css/nucleo-icons.css' ])



</head>

<body class="g-sidenav-show  bg-gray-200">

<div>
    <h1>Second Test With Data base</h1>
    <form action="{{route('participations.update',$participation->id)}}" method="POST">

        @csrf
        @method('PUT')

        <label>Nom User</label>

        <input type="text" name="nomUser" value=" {{$participation->nomUser}} ">


        <label>Objet proposé</label>

        <input type="text" name="proposedObject"   value=" {{$participation->proposedObject}} ">

        <label>Description D'objet</label>

        <input type="text" name="descriptionObject"  value=" {{$participation->descriptionObject}} "></input>
        <label>changé par</label>

        <input type="text" name="changedBy" value=" {{$participation->changedBy}} " >

        <button type="submit" class="btn btn-secondary">Modifier</button>


    </form>
</div>











</body>

</html>
