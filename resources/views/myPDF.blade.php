<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS for styling -->
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        /* Separate rows */
        tr {
            border-bottom: 1px solid #ccc; /* Light gray line between rows */
        }

        /* Separate columns */
        td {
            border-right: 1px solid #ccc; /* Light gray line between columns */
        }

        /* Remove borders from first row and last column */
        tr:first-child td:first-child {
            border-left: none;
        }
        tr:last-child td:last-child {
            border-right: none;
        }
    </style>
</head>
<body>

    <h5 class="float-right">{{ $date }}</h5>
    <h4>{{ $title }}</h4>

    <p>"SCIENCIAE ET VIRTUTE" <br> "Believe you can and you're halfway there. At Kaengesa Seminary, we help you reach your full potential."</p>

    <table class="table table-stripled">
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Gender</th>
                <th>Email</th>
                <th>Phone Number</th>
            </tr>
        </thead>

            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->fname }}</td>
                    <td>{{ $user->lname }}</td>
                    <td>{{ $user->gender }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->phone }}</td>
                </tr>
            @endforeach
        
    </table>

</body>
</html>
