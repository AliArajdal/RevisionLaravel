<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Modifier Tag</title>
</head>
<body>
    <section style="padding-top:60px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <p>Modifier Tag</p>
                            <a href="{{route('tags.list')}}" class="btn btn-info text-white">Liste Tags</a>
                        </div>
                        <div class="card-body">
                            <form action="{{route('update.tag')}}" method="Post">
                                @csrf
                                <div class="form-group">
                                    <input type="hidden" name="id" value="{{$tag->id}}">
                                    <label for="titre">Titre du post</label>
                                    <input type="text" value="{{$tag->name}}" name="name" id="name" class="form-control" placeholder="entrer un nom"/>
                                </div>
                                <button type="submit" class="btn btn-success">Modifier</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>