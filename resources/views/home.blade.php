@extends('layouts.layout')
@section('title', 'Главная' )
@section('content')
<div class="row">
    <div class="col-4">
        <form action="{{route('box.store')}}" method="post">
            @csrf
            <div class="mb-3">
                <label class="form-label">Введите название базы данных</label>
                <input type="text" name="title" placeholder="Имя базы данных:" class="form-control" aria-describedby="emailHelp" required>
            </div>
            <button type="submit" class="btn btn-primary" style="background-color: #277648" >Создать БД</button>
        </form>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<table class="table mt-5">
    <thead>
    <tr>
        <th scope="col">Название базы данных</th>
        <th scope="col">Перейти</th>
        <th scope="col">Удалить</th>
        <th scope="col">Экспорт xlsx</th>
        <th scope="col">Статистика</th>
    </tr>
    </thead>
    <tbody>
    @foreach($boxes as $box)
        <tr>
            <td>
                {{ $box->title }}
            </td>
            <td>
                <a class="mt-3 btn btn-success" href="{{ route('box.show', $box) }}">Перейти</a>
            </td>
            <td>
                <form action="{{ route('box.destroy', $box) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="mt-3 btn btn-danger">Удалить</button>
                </form>
            </td>
            <td>
                <form action="{{ route('box.export', $box) }}" method="post">
                    @csrf
                <button class="mt-3 btn btn-success">Загрузить</button>
                </form>
            </td>
            <td>
                <form action="{{ route('statistic', $box) }}" method="post">
                    @csrf
                    <button class="mt-3 btn btn-success">Статистика</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>


@endsection
