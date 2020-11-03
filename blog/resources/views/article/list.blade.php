@extends("layouts.app")

@section("content")
    <div>
        
        @foreach($articles as $article)
            <td><?= $article->title ?></td>
        @endforeach

    </div>
    <div>{{ $articles->links()}}</div>
@endsection