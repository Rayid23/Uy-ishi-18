@extends('layouts.user')

@section('title', 'NewsHub - Новости дня')

@section('content')

    <section class="container my-5">
        <div class="row">

            @foreach($posts as $post)

                <!-- Карточка статьи -->
                <div class="col-md-4">
                    <div class="card article-card">

                        <div class="card-img-overlay"> <!-- Элемент для наложения -->
                            <span class="badge badge-primary btn btn-warning">{{ $post->category->name }}</span>
                        </div>

                        <img src="{{asset($post->image)}}" style="height: 350px;" class="card-img-top" alt="Новость 1">
                        <div class="card-body border">
                            <p class="article-date">{{explode(' ',$post->created_at)[0]}} / {{explode(' ',$post->created_at)[1]}}</p>
                            <h5 class="article-title">{{substr($post->title, 0, 40)}}</h5>
                            <p class="article-excerpt">{{Str::limit($post->description, 150, '...')}}</p>
                            <a href="#" class="btn btn-primary mt-3">Читать далее</a>
                        </div>

                    </div>
                </div>

            @endforeach

        </div>

        <div class="d-flex justify-content-center fs-1">
            {{ $posts->links() }}
        </div>
    </section>

@endsection
