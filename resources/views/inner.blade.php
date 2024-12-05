<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Dashboard</title>
</head>


</div>
<div class="container">
    <div class="row">
        <div class="col-5 my-4">
            <div class="card">
                <div class="card-header">
                    <h3>Welcome Skyward !</h3>
                </div>
                <div class="card-body">

                    <h3 class="text-danger">ID:-{{Auth::User()->id}}</h3>
                    <h3 class="text-danger">Name:-{{Auth::User()->name}}</h3>
                    <h3 class="text-danger">Email:-{{Auth::User()->email}}</h3>

                    <a href="/dashboard" class="btn btn-primary my-3">go to dashboard</a>

                    <a href="/logout" class="btn btn-danger my-3">logout</a>

                </div>
            </div>
        </div>
    </div>


</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>