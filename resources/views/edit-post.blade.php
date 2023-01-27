<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Modifier Post</title>
</head>
<body>
    <section style="padding-top:60px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <p>Modifier Post</p>
                            <a href="{{route('posts.list')}}" class="btn btn-info text-white">Liste Post</a>
                        </div>
                        <div class="card-body">
                            <form action="{{route('update.post')}}" method="Post">
                                @csrf
                                <div class="form-group">
                                    <input type="hidden" name="id" value="{{$post->id}}">
                                    <label for="titre">Titre du post</label>
                                    <input type="text" value="{{$post->name}}" name="name" id="titre" class="form-control" placeholder="entrer un titre"/>
                                </div>
                                <div class="form-group">
                                    <label for="contenu">Contenu du post</label>
                                    <textarea name="contenu" id="contenu" class="form-control" placeholder="entrer un titre">                                    
                                        {{$post->content}}
                                    </textarea>
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