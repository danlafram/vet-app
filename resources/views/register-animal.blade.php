<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Vet App</title>

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
        </style>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <form action="{{ url('/animals') }}" method="POST">
                    {{ csrf_field() }}
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Type</label>
                    <input type="text" class="form-control" id="type" name="type" placeholder="Enter Type">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Description</label>
                    <textarea type="text" class="form-control" id="description" name="description">Enter Description</textarea> 
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Date of Birth</label>
                    <input type="date" class="form-control" id="dob" name="dob" placeholder="Enter Date of Birth">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Date of Inscription</label>
                    <input type="date" class="form-control" id="date_inscription" name="date_inscription" placeholder="Enter Date of inscription">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Animal State</label>
                    <select class="form-control" name="animal_state">
                          <option value="living">Living</option>
                          <option value="deceased">Deceased</option>
                        </select>
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </body>
</html>