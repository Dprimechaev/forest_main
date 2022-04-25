@extends('layouts.layout')
@section('title', $box->title )

@section('content')
    <button type="button" style="background-color: #277648" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Создать карточку
    </button>

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
            <th scope="col">Номер</th>
            <th scope="col">Республика</th>
            <th scope="col">Квартал</th>
            <th scope="col">Площадь</th>
            <th scope="col">Редактировать</th>
            <th scope="col">Удалить</th>
        </tr>
        </thead>
        <tbody>
        @foreach($cards as $card)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$card->first->republic}}</td>
                <td>{{$card->first->region}}</td>
                <td>{{$card->first->area}}</td>
                <td>
                    <a href="" class="btn btn-warning">Редактировать</a>
                </td>
                <td>
                    <form action="{{ route('card.destroy', $card)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Удалить</button>
                    </form>

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <!-- Модальное окно -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <form method="POST" action="{{ route('card.store', ['box_id' => $box->id]) }}">
                    @csrf
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Карточка Таксации</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                        </div>
                        <div class="modal-body">
                            <table class="table table-sm table-bordered border-dark">
                                <thead>
                                <tr>
                                    <th class="th_color">Область, Край, Республика</th>
                                    <th class="th_color">Районное лестничество</th>
                                    <th class="th_color">Участковое лестничество</th>
                                    <th class="th_color">Квартал</th>
                                    <th class="th_color">Расстояние вывозки</th>
                                    <th class="th_color">Арендатор</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="td_color">
                                        <select name="republic">
                                            <option value="0">0 - нет</option>
                                        </select>
                                    </td>
                                    <td class="td_color">
                                        <select name="region">
                                            <option value="0">0 - нет</option>
                                        </select>
                                    </td>
                                    <td class="td_color">
                                        <select name="district">
                                            <option value="0">0 - нет</option>
                                        </select>
                                    </td>
                                    <td class="td_color">
                                        <input type="text" value="0" name="quarter">
                                    </td>
                                    <td class="td_color">
                                        <input type="text" value="0" name="distance">
                                    </td>
                                    <td class="td_color">
                                        <select name="renter">
                                            <option value="0">0 - нет</option>
                                        </select>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <table class="table table-sm table-bordered border-dark">
                                <thead>
                                <tr>
                                    <th class="th_color">Номер выдела</th>
                                    <th class="th_color">Площ. выд, га</th>
                                    <th class="th_color">Катег. земель</th>
                                    <th class="th_color">Катег. защитности</th>
                                    <th class="th_color">Способ рубки</th>
                                    <th class="th_color">ОЗУ</th>
                                    <th class="th_color">H, у.м</th>
                                    <th class="th_color">Экспозиция</th>
                                    <th class="th_color">Круизна</th>
                                    <th class="th_color">Эрозия Вид, Степень</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="td_color">
                                        <input type="text" value="0" name="number">
                                    </td>
                                    <td class="td_color">
                                        <input type="text" value="0" name="area">
                                    </td>
                                    <td class="td_color">
                                        <select name="earthCategory">
                                            <option value="0">0 - нет</option>
                                        </select>
                                    </td>
                                    <td class="td_color">
                                        <select name="protectionCategory">
                                            <option value="0">0 - нет</option>
                                        </select>
                                    </td>
                                    <td class="td_color">
                                        <select name="cutWay">
                                            <option value="0">0 - нет</option>
                                        </select>
                                    </td>
                                    <td class="td_color">
                                        <select name="ozu">
                                            <option value="0">0 - нет</option>
                                        </select>
                                    </td>
                                    <td class="td_color">
                                        <input type="number" value="0" name="height">
                                    </td>
                                    <td class="td_color">
                                        <select name="exposition">
                                            <option value="0">0 - нет</option>
                                        </select>
                                    </td>
                                    <td class="td_color">
                                        <input type="text" value="0" name="slope">
                                    </td>
                                    <td class="td_color">
                                        <select name="erozionForm">
                                            <option value="0">0 - нет</option>
                                        </select>
                                        <select name="erozionDegree">
                                            <option value="0">0 - нет</option>
                                        </select>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <table class="table table-sm table-bordered border-dark">
                                <thead>
                                <tr>
                                    <th class="th_color">Мероприятия</th>
                                    <th class="th_color">Первое</th>
                                    <th class="th_color">% выбор</th>
                                    <th class="th_color">№ РТК</th>
                                    <th class="th_color">Второе</th>
                                    <th class="th_color">№ РТК</th>
                                    <th class="th_color">Третье</th>
                                    <th class="th_color">№ РТК</th>
                                    <th class="th_color">Цел. пор.</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="td_color">

                                    </td>
                                    <td class="td_color">
                                        <select name="firstEvent">
                                            <option value="0">0 - нет</option>
                                        </select>
                                    </td>
                                    <td class="td_color">
                                        <input type="text" value="0" name="percent">
                                    </td>
                                    <td class="td_color">
                                        <input type="text" value="0" name="firstPtk">
                                    </td>
                                    <td class="td_color">
                                        <select name="secondEvent">
                                            <option value="0">0 - нет</option>
                                        </select>
                                    </td>
                                    <td class="td_color">
                                        <input type="text" value="0" name="secondPtk">
                                    </td>
                                    <td class="td_color">
                                        <select name="thirdEvent">
                                            <option value="0">0 - нет</option>
                                        </select>
                                    </td>
                                    <td class="td_color">
                                        <input type="text" value="0" name="thirdPtk">
                                    </td>
                                    <td class="td_color">
                                        <select name="target">
                                            <option value="0">0 - нет</option>
                                        </select>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <table class="table table-sm table-bordered border-dark">
                                <thead>
                                <tr>
                                    <th class="th_color">Преобл.<br>порода</th>
                                    <th class="th_color">Класс <br>бонитета</th>
                                    <th class="th_color">Тип леса</th>
                                    <th class="th_color">ТЛУ</th>
                                    <th class="th_color">Кл. пожар.<br>опасности</th>
                                    <th class="th_color">Год <br>рубки</th>
                                    <th class="th_color">Пни (шт/га)<br>Всего Сосны</th>
                                    <th class="th_color">Д пней, см.</th>
                                    <th class="th_color">Тип<br>вырубки</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="td_color">
                                        <select name="dominantBreed">
                                            <option value="0">0 - нет</option>
                                        </select>
                                    </td>
                                    <td class="td_color">
                                        <select name="bonitetClass">
                                            <option value="0">0 - нет</option>
                                        </select>
                                    </td>
                                    <td class="td_color">
                                        <select name="forestType">
                                            <option value="0">0 - нет</option>
                                        </select>
                                    </td>
                                    <td class="td_color">
                                        <select name="tlu">
                                            <option value="0">0 - нет</option>
                                        </select>
                                    </td>
                                    <td class="td_color">
                                        <select name="fireDangeros">
                                            <option value="0">0 - нет</option>
                                        </select>
                                    </td>
                                    <td class="td_color">
                                        <input type="text" value="0" name="cutYear">
                                    </td>
                                    <td class="td_color">
                                        <input type="text" value="0" name="allStump">
                                        <input type="text" value="0" name="pineStump">
                                    </td>
                                    <td class="td_color">
                                        <input type="text" value="0" name="stumpDiameter">
                                    </td>
                                    <td class="td_color">
                                        <select name="cutType">
                                            <option value="0">0 - нет</option>
                                        </select>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <table class="table table-sm table-bordered border-dark">
                                <thead>
                                <tr>
                                    <th class="th_color">Захлам, м^3/га</th>
                                    <th class="th_color">
                                        <input type="text" value="0" name="littering">
                                    </th>
                                    <th class="th_color">В т.ч. ликвид</th>
                                    <th class="th_color">
                                        <input type="text" value="0" name="liquid">
                                    </th>
                                    <th class="th_color">Сухостой, м^3/га</th>
                                    <th class="th_color">
                                        <input type="text" value="0" name="deadwood">
                                    </th>
                                </tr>
                                </thead>
                            </table>
                            <table class="table table-sm table-bordered border-dark">
                                <thead>
                                <tr>
                                    <th class="th_color">№</th>
                                    <th class="th_color">Ярус</th>
                                    <th class="th_color">Состав<br>Коэфф Порода</th>
                                    <th class="th_color">А, лет</th>
                                    <th class="th_color">H, м</th>
                                    <th class="th_color">Д, см</th>
                                    <th class="th_color">Класс<br>товарн.</th>
                                    <th class="th_color">Происх.</th>
                                    <th class="th_color">P относ.</th>
                                    <th class="th_color">G</th>
                                    <th class="th_color">Запас,<br>м. куб.</th>
                                </tr>
                                </thead>
                                <tbody id="tierBody">
                                <tr>
                                    <td class="td_color">
                                        {{ $index = 1 }}
                                    </td>
                                    <td class="td_color">
                                        <select name="row[{{ $index }}][tier]">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select>
                                    </td>
                                    <td class="td_color">
                                        <select name="row[{{ $index }}][coefComposition]">
                                            <option value="0">0 - нет</option>
                                        </select>
                                        <select name="row[{{ $index }}][speciesComposition]">
                                            <option value="0">0 - нет</option>
                                        </select>
                                    </td>
                                    <td class="td_color">
                                        <input type="text" value="0" name="row[{{ $index }}][origin]">
                                    </td>
                                    <td class="td_color">
                                        <input type="number" value="0" name="row[{{ $index }}][age]">
                                    </td>
                                    <td class="td_color">
                                        <input type="number" value="0" name="row[{{ $index }}][height]">
                                    </td>
                                    <td class="td_color">
                                        <input type="number" value="0" name="row[{{ $index }}][diameter]">
                                    </td>
                                    <td class="td_color">
                                        <select name="row[{{ $index }}][class]">
                                            <option value="0">0 - нет</option>
                                        </select>
                                    </td>
                                    <td class="td_color">
                                        <input type="number" value="0" name="row[{{ $index }}][density]">
                                    </td>
                                    <td class="td_color">
                                        <input type="number" value="0" name="row[{{ $index }}][g]">
                                    </td>
                                    <td class="td_color">
                                        <input type="number" value="0" name="row[{{ $index }}][stock]">
                                    </td>
                                </tr>
                                <input type="button" class="mb-3 mr-3" style="background-color: #277648; color:white;" onclick="countRabbits()" value="+">
                                <input type="button" id="clear" class="mb-3" style="background-color: grey; color:white;" value="-">
                                </tbody>
                            </table>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                            <button type="submit" class="btn btn-primary" style="background-color: #277648">Сохранить изменения</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
@endsection
