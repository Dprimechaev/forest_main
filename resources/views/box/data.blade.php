@extends('layouts.layout')
@section('title', 'статистика' )
@section('content')
    <table>
        <thead>
        <th class="td_color">Количество выделов</th>
        <th class="td_color">Общая площадь</th>
        </thead>
        <tbody>
        <td class="td_color">{{ $number }}</td>
        <td class="td_color">{{ $summ }}</td>
        </tbody>
    </table>
@endsection
