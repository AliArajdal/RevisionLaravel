<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Nouveau Tag</title>
</head>
<body>
    <section style="padding-top:60px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <p>Ajouter un Tag</p>
                            <a href="/tags" class="btn btn-info text-white">Liste Tags</a>
                        </div>
                        @if (Session::has('tagCreated'))
                            <div class="alert-success">{{Session::get('tagCreated')}}</div>
                        @endif
                        <div class="card-body">
                            <form action="/tag/save" method="Post">
                                @csrf
                                <div class="form-group">
                                    <label for="titre">Nom du tag</label>
                                    <input type="text" name="name" id="name" class="form-control" placeholder="entrer un Nom"/>
                                </div>
                                <button type="submit" class="btn btn-success">Ajouter</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>