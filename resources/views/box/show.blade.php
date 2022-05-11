@extends('layouts.layout')
@section('title', $box->title )

@section('content')
    <button type="button" style="background-color: #277648" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalToggle">
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
        <div class="modal fade" id="exampleModalToggle" tabindex="-1" data-bs-backdrop="static" aria-labelledby="exampleModalToggleLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <form method="POST" action="{{ route('card.store', ['box_id' => $box->id]) }}">
                    @csrf
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalToggle">Карточка Таксации</h5>
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
                                            @foreach($handbooks as $handbook)
                                                @if($handbook->key === 'Республика')
                                                    <option value="{{ $handbook->value }}">{{ $handbook->value }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </td>
                                    <td class="td_color">
                                        <select name="region">
                                            @foreach($handbooks as $handbook)
                                                @if($handbook->key === 'Районное лесничество')
                                                    <option value="{{ $handbook->value }}">{{ $handbook->value }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </td>
                                    <td class="td_color">
                                        <select name="district">
                                            @foreach($handbooks as $handbook)
                                                @if($handbook->key === 'Участковое лесничество')
                                                    <option value="{{ $handbook->value }}">{{ $handbook->value }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </td>
                                    <td class="td_color">
                                        <input type="text" name="quarter">
                                    </td>
                                    <td class="td_color">
                                        <input type="text" name="distance">
                                    </td>
                                    <td class="td_color">
                                        <select name="renter">
                                            @foreach($handbooks as $handbook)
                                                @if($handbook->key === 'Арендатор')
                                                    <option value="{{ $handbook->value }}">{{ $handbook->value }}</option>
                                                @endif
                                            @endforeach
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
                                        <input type="text" name="number">
                                    </td>
                                    <td class="td_color">
                                        <input type="text" name="area">
                                    </td>
                                    <td class="td_color">
                                        <select name="earthCategory">
                                            @foreach($handbooks as $handbook)
                                                @if($handbook->key === 'Категория земель')
                                                    <option value="{{ $handbook->value }}">{{ $handbook->value }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </td>
                                    <td class="td_color">
                                        <select name="protectionCategory">
                                            @foreach($handbooks as $handbook)
                                                @if($handbook->key === 'Категория защитности')
                                                    <option value="{{ $handbook->value }}">{{ $handbook->value }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </td>
                                    <td class="td_color">
                                        <select name="cutWay">
                                            @foreach($handbooks as $handbook)
                                                @if($handbook->key === 'Способ рубки')
                                                    <option value="{{ $handbook->value }}">{{ $handbook->value }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </td>
                                    <td class="td_color">
                                        <select name="ozu">
                                            @foreach($handbooks as $handbook)
                                                @if($handbook->key === 'ОЗУ')
                                                    <option value="{{ $handbook->value }}">{{ $handbook->value }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </td>
                                    <td class="td_color">
                                        <input type="number" name="height">
                                    </td>
                                    <td class="td_color">
                                        <select name="exposition">
                                            @foreach($handbooks as $handbook)
                                                @if($handbook->key === 'Экспозиция')
                                                    <option value="{{ $handbook->value }}">{{ $handbook->value }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </td>
                                    <td class="td_color">
                                        <input type="text" name="slope">
                                    </td>
                                    <td class="td_color">
                                        <select name="erozionForm">
                                            @foreach($handbooks as $handbook)
                                                @if($handbook->key === 'Вид эрозии')
                                                    <option value="{{ $handbook->value }}">{{ $handbook->value }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                        <select name="erozionDegree">
                                            @foreach($handbooks as $handbook)
                                                @if($handbook->key === 'Степень эрозии')
                                                    <option value="{{ $handbook->value }}">{{ $handbook->value }}</option>
                                                @endif
                                            @endforeach
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
                                            @foreach($handbooks as $handbook)
                                                @if($handbook->key === 'Первое мероприятие')
                                                    <option value="{{ $handbook->value }}">{{ $handbook->value }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </td>
                                    <td class="td_color">
                                        <input type="text" name="percent">
                                    </td>
                                    <td class="td_color">
                                        <input type="text" name="firstPtk">
                                    </td>
                                    <td class="td_color">
                                        <select name="secondEvent">
                                            @foreach($handbooks as $handbook)
                                                @if($handbook->key === 'Второе мероприятие')
                                                    <option value="{{ $handbook->value }}">{{ $handbook->value }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </td>
                                    <td class="td_color">
                                        <input type="text" name="secondPtk">
                                    </td>
                                    <td class="td_color">
                                        <select name="thirdEvent">
                                            @foreach($handbooks as $handbook)
                                                @if($handbook->key === 'Третье мероприятие')
                                                    <option value="{{ $handbook->value }}">{{ $handbook->value }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </td>
                                    <td class="td_color">
                                        <input type="text" name="thirdPtk">
                                    </td>
                                    <td class="td_color">
                                        <select name="target">
                                            @foreach($handbooks as $handbook)
                                                @if($handbook->key === 'Целевая порода')
                                                    <option value="{{ $handbook->value }}">{{ $handbook->value }}</option>
                                                @endif
                                            @endforeach
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
                                            @foreach($handbooks as $handbook)
                                                @if($handbook->key === 'Преобладающая порода')
                                                    <option value="{{ $handbook->value }}">{{ $handbook->value }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </td>
                                    <td class="td_color">
                                        <select name="bonitetClass">
                                            @foreach($handbooks as $handbook)
                                                @if($handbook->key === 'Класс бонитета')
                                                    <option value="{{ $handbook->value }}">{{ $handbook->value }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </td>
                                    <td class="td_color">
                                        <select name="forestType">
                                            @foreach($handbooks as $handbook)
                                                @if($handbook->key === 'Тип леса')
                                                    <option value="{{ $handbook->value }}">{{ $handbook->value }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </td>
                                    <td class="td_color">
                                        <select name="tlu">
                                            @foreach($handbooks as $handbook)
                                                @if($handbook->key === 'ТЛУ')
                                                    <option value="{{ $handbook->value }}">{{ $handbook->value }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </td>
                                    <td class="td_color">
                                        <select name="fireDangeros">
                                            @foreach($handbooks as $handbook)
                                                @if($handbook->key === 'Класс пожарной опасности')
                                                    <option value="{{ $handbook->value }}">{{ $handbook->value }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </td>
                                    <td class="td_color">
                                        <input type="text" name="cutYear">
                                    </td>
                                    <td class="td_color">
                                        <input type="text" name="allStump">
                                        <input type="text" name="pineStump">
                                    </td>
                                    <td class="td_color">
                                        <input type="text" name="stumpDiameter">
                                    </td>
                                    <td class="td_color">
                                        <select name="cutType">
                                            @foreach($handbooks as $handbook)
                                                @if($handbook->key === 'Тип вырубки')
                                                    <option value="{{ $handbook->value }}">{{ $handbook->value }}</option>
                                                @endif
                                            @endforeach
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
                                        <input type="number" name="littering">
                                    </th>
                                    <th class="th_color">В т.ч. ликвид</th>
                                    <th class="th_color">
                                        <input type="number" name="liquid">
                                    </th>
                                    <th class="th_color">Сухостой, м^3/га</th>
                                    <th class="th_color">
                                        <input type="number" name="deadwood">
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
                                            @foreach($handbooks as $handbook)
                                                @if($handbook->key === 'Ярус')
                                                    <option value="{{ $handbook->value }}">{{ $handbook->value }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </td>
                                    <td class="td_color">
                                        <input type="number" name="row[{{ $index }}][coefComposition]">
                                        <select name="row[{{ $index }}][speciesComposition]">
                                            @foreach($handbooks as $handbook)
                                                @if($handbook->key === 'Состав порода')
                                                    <option value="{{ $handbook->value }}">{{ $handbook->value }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </td>
                                    <td class="td_color">
                                        <input type="number" name="row[{{ $index }}][age]">
                                    </td>
                                    <td class="td_color">
                                        <input type="number" name="row[{{ $index }}][height]">
                                    </td>
                                    <td class="td_color">
                                        <input type="number" name="row[{{ $index }}][diameter]">
                                    </td>
                                    <td class="td_color">
                                        <input type="number" name="row[{{ $index }}][class]">
                                    </td>
                                    <td class="td_color">
                                        <select name="row[{{ $index }}][origin]">
                                            @foreach($handbooks as $handbook)
                                                @if($handbook->key === 'Происхождение')
                                                    <option value="{{ $handbook->value }}">{{ $handbook->value }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </td>
                                    <td class="td_color">
                                        <input type="integer" name="row[{{ $index }}][p]">
                                    </td>
                                    <td class="td_color">
                                        <input type="number" name="row[{{ $index }}][g]">
                                    </td>
                                    <td class="td_color">
                                        <input type="number" name="row[{{ $index }}][stock]">
                                    </td>
                                </tr>
                                <input type="button" class="mb-3 mr-3" style="background-color: #277648; color:white;" onclick="countRabbits()" value="+">
                                <input type="button" id="clear" class="mb-3" style="background-color: grey; color:white;" value="-">
                                </tbody>
                            </table>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">ПДР</th>
                                    <th scope="col">Кол.тыс.</th>
                                    <th scope="col">H, м</th>
                                    <th scope="col">А, лет</th>
                                    <th scope="col">К1</th>
                                    <th scope="col">Пор.1</th>
                                    <th scope="col">К2</th>
                                    <th scope="col">Пор.2</th>
                                    <th scope="col">К3</th>
                                    <th scope="col">Пор.3</th>
                                    <th scope="col">Оценка</th>
                                    <th scope="col">ПДЛ</th>
                                    <th scope="col">Густота</th>
                                    <th scope="col" class="text-center">Породы<br>
                                        <div class="row">
                                            <div class="col">
                                                1
                                            </div>
                                            <div class="col">
                                                2
                                            </div>
                                            <div class="col">
                                                3
                                            </div>
                                        </div>
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="td_color">
                                    </td>
                                    <td class="td_color">
                                        <input type="number" name="thousands">
                                    </td>
                                    <td class="td_color">
                                        <input type="number" name="height">
                                    </td>
                                    <td class="td_color">
                                        <input type="number" name="age">
                                    </td>
                                    <td class="td_color">
                                        <input type="number" name="koefOne">
                                    </td>
                                    <td class="td_color">
                                        <select name="podrostOne">
                                            @foreach($handbooks as $handbook)
                                                @if($handbook->key === 'Подрост 1')
                                                    <option value="{{ $handbook->value }}">{{ $handbook->value }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </td>
                                    <td class="td_color">
                                        <input type="number" name="koefTwo">
                                    </td>
                                    <td class="td_color">
                                        <select name="podrostTwo">
                                            @foreach($handbooks as $handbook)
                                                @if($handbook->key === 'Подрост 2')
                                                    <option value="{{ $handbook->value }}">{{ $handbook->value }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </td>
                                    <td class="td_color">
                                        <input type="number" name="koefThree">
                                    </td>
                                    <td class="td_color">
                                        <select name="podrostThree">
                                            @foreach($handbooks as $handbook)
                                                @if($handbook->key === 'Подрост 3')
                                                    <option value="{{ $handbook->value }}">{{ $handbook->value }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </td>
                                    <td class="td_color">
                                        <select name="Oc">
                                            @foreach($handbooks as $handbook)
                                                @if($handbook->key === 'Оценка')
                                                    <option value="{{ $handbook->value }}">{{ $handbook->value }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </td>
                                    <td class="td_color">
                                    </td>
                                    <td class="td_color">
                                        <select name="density">
                                            @foreach($handbooks as $handbook)
                                                @if($handbook->key === 'Густота')
                                                    <option value="{{ $handbook->value }}">{{ $handbook->value }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </td>
                                    <td class="td_color">
                                        <select name="podlesokOne">
                                            @foreach($handbooks as $handbook)
                                                @if($handbook->key === 'Подлесок 1')
                                                    <option value="{{ $handbook->value }}">{{ $handbook->value }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                        <select name="podlesokTwo">
                                            @foreach($handbooks as $handbook)
                                                @if($handbook->key === 'Подлесок 2')
                                                    <option value="{{ $handbook->value }}">{{ $handbook->value }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                        <select name="podlesokThree">
                                            @foreach($handbooks as $handbook)
                                                @if($handbook->key === 'Подлесок 3')
                                                    <option value="{{ $handbook->value }}">{{ $handbook->value }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <table class="table table-sm table-bordered border-dark">
                                <thead>
                                <tr>
                                    <th class="th_color">мдс</th>
                                    <th class="th_color">1</th>
                                    <th class="th_color">2</th>
                                    <th class="th_color">3</th>
                                    <th class="th_color">4</th>
                                    <th class="th_color">5</th>
                                    <th class="th_color">6</th>
                                    <th class="th_color">7</th>
                                    <th class="th_color">8</th>
                                    <th class="th_color">Раскрыть</th>
                                </tr>
                                </thead>
                                <tbody id="tierMDS">
                                <tr>
                                    <td>
                                        <select id ="mds" name="title">
                                            @foreach($handbooks as $handbook)
                                                @if($handbook->key === 'Макет')
                                                    <option value="{{ $handbook->value }}">{{ $handbook->value }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </td>
                                    <td class="td_color">
                                        <input type="number" name="year_created">
                                    </td>
                                    <td class="td_color">
                                        <input type="number" name="cultivation_method">
                                    </td>
                                    <td class="td_color">
                                        <input type="number" name="method_created">
                                    </td>
                                    <td class="td_color">
                                        <input type="number" name="distance_between">
                                    </td>
                                    <td class="td_color">
                                        <input type="number" name="distance_into">
                                    </td>
                                    <td class="td_color">
                                        <input type="number" name="seats_number">
                                    </td>
                                    <td class="td_color">
                                        <input type="number" name="condition">
                                    </td>
                                    <td class="td_color">
                                        <input type="number" name="cause">
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Открыть второе модальное окно</button>
                                    </td>
                                </tr>
                                </tbody>
                                <input type="button" class="mb-3 mr-3" onclick="countRabbitsMDS()" style="background-color: #277648; color:white;"  value="+">
                                <input type="button" id="clear_mds" class="mb-3" style="background-color: grey; color:white;" value="-">

                            </table>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                                <button type="submit" class="btn btn-primary" style="background-color: #277648">Сохранить изменения</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalToggleLabel2">МДС</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" id="mds_form">
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" style="background-color: #277648;" type="button" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal">Вернуться к карточке</button>
                        <button class="btn btn-primary" onclick="mdsSave()" id="mds_save" style="background-color: #277648;" type="button" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal">Сохранить</button>
                    </div>
                </div>
            </div>
        </div>




@endsection
