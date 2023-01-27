<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Posts</title>
</head>
<body>
    <section style="padding-top:60px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            Liste des Posts <a href="{{route('add.post')}}" class="btn btn-success">Nouveau post</a>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Titre du post</th>
                                        <th>Contenu du post</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($posts as $p)
                                        <tr>
                                            <td>{{$p->id}}</td>
                                            <td>{{$p->name}}</td>
                                            <td>{{$p->content}}</td>
                                            <td>
                                            <a href="/post/details/{{$p->id}}" class="btn btn-info text-white">Details</a>
                                            <a href="/post/edit/{{$p->id}}" class="btn btn-success">Modifier</a>
                                            <a href="/post/delete/{{$p->id}}" class="btn btn-danger">Supprimer</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>