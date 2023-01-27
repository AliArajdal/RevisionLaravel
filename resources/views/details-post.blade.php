<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Detail Post</title>
</head>
<body>
    <section style="padding-top:60px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            Détail d'un Post
                        </div>
                        <div class="card-body">
                            <h1>{{$post->name}}</h1>
                            <p>
                                {{$post->content}}
                            </p>
                            @foreach ($postTags as $tag)
                                <form class="m-1 d-inline" action="/post/disaffecTag" method="post">
                                @csrf
                                    <input type="hidden" name="post_id" value="{{$post->id}}" >
                                    <input type="hidden" name="tag_id" value="{{$tag->id}}" >     
                                    <button type="submit" class="btn btn-secondary">{{$tag->name}}</button>
                                </form>
                            @endforeach
                            <form class="mt-3" action="/post/affect-tag" method="post">
                                @csrf    
                                <div class="form-group">
                                    <input type="hidden" name="post_id" value="{{$post->id}}" />
                                    <select name="tag_id" id="tag_id">
                                        @foreach ($allTags as $tag)
                                            <option value="{{$tag->id}}">{{$tag->name}}</option>
                                        @endforeach
                                    </select>
                                    <button type="submit" class="btn btn-success">Affecter</button>
                                </div>
                            </form>

                            <table class="table table-striped mt-3">
                                <tr>
                                    <th>Commentaire</th>
                                </tr>
                                @foreach ($postComments as $comment)
                                <tr>
                                    <td>{{$comment->body}}</td>
                                </tr>
                                @endforeach
                            </table>
                            <form class="mt-3" action="/post/add-comment" method="post">
                                @csrf    
                                <div class="mt-3 form-group">
                                    <input type="hidden" name="post_id" value="{{$post->id}}" >
                                    <div class="form-group">
                                        <textarea name="contenu" id="contenu" class="form-control" placeholder="Entrer un commentaire">                                    
                                        </textarea>
                                    </div>
                                    <button type="submit" class="mt-2 btn btn-success">Commente</button>
                                </div>
                            </form> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>