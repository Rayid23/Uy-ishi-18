@extends('layouts.admin')

@section('title', 'Управление таблиц')

@section('content')


    <div class="page-inner">

        <a class="btn btn-primary" href="{{route('posts.create')}}">Create</a>

        <div class="table-responsive mt-3">

            <table class="table table-bordered-bd-secondary table-responsive table-secondary">

                <thead>
                <tr>

                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Image</th>
                    <th scope="col">Category Name</th>
                    <th scope="col">Views</th>
                    <th scope="col">Likes</th>
                    <th scope="col">Dislikes</th>
                    <th scope="col">Comments</th>
                    <th scope="col">Created</th>
                    <th scope="col">Updated</th>
                    <th scope="col">Options</th>

                </tr>
                </thead>

                <tbody>
                @foreach($posts as $post)

                    <tr>

                        <th>{{$post->id}}</th>
                        <td>{{$post->title}}</td>
                        <td>{{$post->description}}</td>
                        <td>
                            <img src="{{$post->image}}" width="100px" alt="No Image">
                        </td>
                        <td>{{$post->category->name}}</td>
                        <td>{{$post->view}}</td>
                        <td>{{$post->like}}</td>
                        <td>{{$post->dislike}}</td>
                        <td>{{$post->comment}}</td>
                        <td>{{$post->created_at}}</td>
                        <td>{{$post->updated_at}}</td>

                        <td style="min-width: 240px">

                            <form action="{{route('posts.destroy', $post->id)}}" method="POST"
                                  style="display: inline-flex">
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>

                            <a class="btn btn-primary btn-sm" href="{{route('posts.edit', $post->id)}}">Update</a>

                            <a class="btn btn-info btn-sm" href="{{route('posts.show', $post->id)}}">Show</a>

                        </td>

                    </tr>

                @endforeach
                </tbody>

            </table>


        </div>

    </div>

@endsection
