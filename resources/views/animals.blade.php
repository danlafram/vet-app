<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Vet App</title>
        <!-- FontAwesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!-- Bootstrap stuff -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .card {
                display: flex;
            }

            .nav-link {
                font-weight: bold;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="{{ url('/') }}">CSI2532</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">Home</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/register-owner') }}">Register Owner<span class="sr-only">Register Owner</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/register-animal') }}">Register Animal<span class="sr-only">Register Animal</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/conduct-exam') }}">Conduct Exam<span class="sr-only">Conduct Exam</span></a>
              </li>
            </ul>
          </div>
        </nav>
        <div class="container-fluid">
            <table class="table table-striped table-bordered table-hover" style="width:100%">
              <tr>
                <th>Animal Id</th>
                <th>Animal Name</th>
                <th>Type</th>
                <th>Description</th>
                <th>Date of Birth</th>
                <th>Inscription Date</th>
                <th>Sate</th>
                <th>Treatments</th>
                <th>Owner Id</th>
                <th>Edit</th>
                <th>Delete</th>
              </tr>
              @foreach($animals as $animal)
                <tr>
                    <td>{{ $animal->id }}</td>
                    <td>{{ $animal->name }}</td>
                    <td>{{ $animal->type }}</td>
                    <td>{{ $animal->description }}</td>
                    <td>{{ $animal->dob }}</td>
                    <td>{{ $animal->dateInscription }}</td>
                    <td>{{ $animal->animal_state }}</td>
                    <td><a href="{{ url('/results/' . $animal->id) }}">View</a></td>
                    <td> <a href= {{ url('/owner/' . $animal->ownerId) }}> {{ $animal->ownerId }} </a></td>
                    <td>
                        <form method="GET" action={{ url('/update-animal') }}>
                            {!! csrf_field() !!}
                            <input type="hidden" name="animalId" value="{{ $animal->id }}">
                            <button type="submit">
                                <i class="fas fa-edit"></i>
                            </button>
                        </form>
                        
                    </td>
                    <td>
                        <form method="post" action={{ url('/delete-animal') }}>
                            {!! csrf_field() !!}
                            <input type="hidden" name="animalId" value="{{ $animal->id }}">
                            <button type="submit">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </form>
                    </td>
                </tr>
              @endforeach
            </table>
        </div>
    </body>
</html>