

@forelse ($totos as $post)


    <h4>{{ $post->title }}</h4>

    <p>{{ $post->textPost }}</p>

    <p>Nom de l'auteur : {{ $post->user->name}}<p>


    <p>
        <a href='{{ URL::route('post.edit', ['post'  => $post->id]) }}'>modifier</a>
    </p>

    <form action="{{route('post.destroy', ['post'  => $post])}}" method="get">
        <button type="submit">Supprimer</button>
    </form>


@empty
    <p>Aucun post</p>
@endforelse

