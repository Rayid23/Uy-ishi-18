@extends('layouts.admin')

@section('title', 'Добавить Новую-Категорию')

@section('content')

    <style>
        .btn-custom {
            width: 350px;
            margin-left: 57px;
        }

        @media (max-width: 768px) {
            .btn-custom {
                width: 100%;
                margin-left: 0;
            }
        }
    </style>

    <div class="page-inner">

        <a class="btn btn-primary" href="{{route('category.index')}}">Back</a>

        <form action="{{route('category.store')}}" method="POST" class="col-6 offset-3 mt-3">

            @csrf

            <div class="mb-3 text-center">
                <label for="name" class="form-label">Название</label>
                <input type="text" class="form-control text-center" id="name" name="name"
                       aria-describedby="emailHelp"
                       placeholder="Введите название категории">
                @error('name')
                <span class="text-danger" style="font-size: 15px">{{$message}}</span>
                @enderror
            </div>


            <div class="row mb-3">
                <div class="col-6 text-center mx-auto">
                    <label for="active" class="form-label">Active</label>
                    <div class="form-control form-check form-switch d-flex justify-content-center"
                         style="padding-top: 10px;">
                        <input type="hidden" name="status" value="0">
                        <input type="checkbox" class="form-check-input" id="active" name="status" value="1"
                               style="transform: scale(2);">
                    </div>
                    @error('status')
                    <span class="text-danger" style="font-size: 15px">{{$message}}</span>
                    @enderror
                </div>

                <div class="col-6 text-center">
                    <label for="tr" class="form-label">Ordered number</label>
                    <input type="number" class="form-control text-center" id="tr" name="tr"
                           placeholder="Введите число">
                    @error('tr')
                    <span class="text-danger" style="font-size: 15px">{{$message}}</span>
                    @enderror
                </div>
            </div>

            <button type="submit" class="btn btn-primary form-control btn-sm mx-auto d-block" style="width: 50%;">
                Save
            </button>

        </form>

    </div>

@endsection
