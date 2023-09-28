
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

    {{--    @vite(['resources/assets/js/jquery.min.js' ])--}}
    @vite(['resources/assets/css/material-dashboard.css' ])
    @vite(['resources/assets/css/nucleo-svg.css' ])
    @vite(['resources/assets/css/nucleo-icons.css' ])



</head>

<body class="g-sidenav-show  bg-gray-200">

<div>
    <h1>First Test With Dta base</h1>
    <table border="1">

        <thead>

        <tr>

            <th>Id</th>

            <th>nomUser</th>
            <th>proposedObject</th>
            <th>descriptionObject</th>
            <th>changedBy</th>
            <th>Action</th>

        </tr>

        </thead>

        <tbody>

        @foreach($listParticipation as $listParticipation)

            <tr>

                <td>{{ $listParticipation->id }}</td>
                <td>{{ $listParticipation->nomUser }}</td>
                <td>{{ $listParticipation->proposedObject }}</td>
                <td>{{ $listParticipation->descriptionObject }}</td>
                <td>{{ $listParticipation->changedBy }}</td>
{{--                <td>{{ $listEvents->description }}</td>--}}



                <td>

                    <form action="{{ route('participations.destroy', $listParticipation->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-link">Supprimer</button>
                    </form>
                    <a href="{{ route('participations.edit', $listParticipation->id) }}" class="btn btn-link">Modifier</a>

{{--                    <a  href="{{route('events.show',$listEvents->id)}}" class="btn btn-link">show</a>--}}

{{--                    --}}{{--                    <button type="submit" class="btn btn-link">Modifier</button>--}}

                </td>


            </tr>

        @endforeach

        </tbody>

    </table>
</div>










<!--   Core JS Files   -->

</body>

</html>
