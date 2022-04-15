@extends('layouts.layout')
@section('title', 'Карточки' )


@section('content')
    <button type="button" style="background-color: #277648" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Создать карточку
    </button>
    <div class="container">

        @foreach($cards as $card)
            {{ $card->id }}
            {{ $cards->first->republic }}
        @endforeach

        <!-- Модальное окно -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                @if($errors->any())
                    <h4>{{$errors}}</h4>
                @endif
                <form action="{{ route('card.store') }}" method="post">
                    @csrf
                    <input type="text" value="" name="box_id" hidden>
                    <input type="text" value="1" name="card_id" hidden>
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Карточка Таксации</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                    </div>
                    <div class="modal-body" border="1px solid">
                        <table class="table" border="2px solid">
                            <thead>
                            <tr>
                                <th scope="col">Область, Край, Республика</th>
                                <th scope="col">Районное Лестничество</th>
                                <th scope="col">Участковое Лестничество</th>
                                <th scope="col">Квартал</th>
                                <th scope="col">Расстояние вывозки</th>
                                <th scope="col">Арендатор</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th>
                                    <select class="form-select" name="republic" aria-label="Пример выбора по умолчанию">
                                        <option selected>0-нет</option>
                                        <option value="1">Один</option>
                                        <option value="2">Два</option>
                                        <option value="3">Три</option>
                                    </select>
                                </th>
                                <th>
                                    <select class="form-select" name="district" aria-label="Пример выбора по умолчанию">
                                        <option selected>0-нет</option>
                                        <option value="1">Один</option>
                                        <option value="2">Два</option>
                                        <option value="3">Три</option>
                                    </select>
                                </th>
                                <th>
                                    <select class="form-select" name="region" aria-label="Пример выбора по умолчанию">
                                        <option selected>0-нет</option>
                                        <option value="1">Один</option>
                                        <option value="2">Два</option>
                                        <option value="3">Три</option>
                                    </select>
                                </th>
                                <th>
                                    <input type="text" name="quarter" style="width:60px; height: 24px" value="0">
                                </th>
                                <th>
                                    <input type="text" name="distance" style="width:60px; height: 24px" value="0">
                                </th>
                                <th>
                                    <select class="form-select" name="renter" aria-label="Пример выбора по умолчанию">
                                        <option selected>0-нет</option>
                                        <option value="1">Один</option>
                                        <option value="2">Два</option>
                                        <option value="3">Три</option>
                                    </select>
                                </th>
                            </tr>
                            </tbody>
                        </table>
                        <table class="table" border="2px solid">
                            <thead>
                            <tr>
                                <th scope="col">Номер выдела</th>
                                <th scope="col">Площадь<br> выд. га</th>
                                <th scope="col">Катег<br> земель</th>
                                <th scope="col">Катег защ</th>
                                <th scope="col">Способ рубки</th>
                                <th scope="col">ОЗУ</th>
                                <th scope="col">H<br> у.м.</th>
                                <th scope="col">Экс<br>позиция</th>
                                <th scope="col">Кру<br>тизна</th>
                                <th scope="col-2">Эрозия<br><div class="row">Вид, Степень</div></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th>
                                    <input type="text" name="number" style="width:60px; height: 24px" value="0">
                                </th>
                                <th>
                                    <input type="text" name="area" style="width:60px; height: 24px" value="0">
                                </th>
                                <th>
                                    <select class="form-select" name="earthCategory" aria-label="Пример выбора по умолчанию">
                                        <option selected>0-нет</option>
                                        <option value="1">Один</option>
                                        <option value="2">Два</option>
                                        <option value="3">Три</option>
                                    </select>
                                </th>
                                <th>
                                    <select class="form-select" name="protectionCategory" aria-label="Пример выбора по умолчанию">
                                        <option selected>0-нет</option>
                                        <option value="1">Один</option>
                                        <option value="2">Два</option>
                                        <option value="3">Три</option>
                                    </select>
                                </th>
                                <th>
                                    <select class="form-select" name="cutWay" aria-label="Пример выбора по умолчанию">
                                        <option selected>0-нет</option>
                                        <option value="1">Один</option>
                                        <option value="2">Два</option>
                                        <option value="3">Три</option>
                                    </select>
                                </th>
                                <th>
                                    <select class="form-select" name="ozu" aria-label="Пример выбора по умолчанию">
                                        <option selected>0-нет</option>
                                        <option value="1">Один</option>
                                        <option value="2">Два</option>
                                        <option value="3">Три</option>
                                    </select>
                                </th>
                                <th>
                                    <input type="text" name="height" style="width:60px; height: 24px" value="0">
                                </th>
                                <th>
                                    <select class="form-select" name="exposition" aria-label="Пример выбора по умолчанию">
                                        <option selected>0-нет</option>
                                        <option value="1">Один</option>
                                        <option value="2">Два</option>
                                        <option value="3">Три</option>
                                    </select>
                                </th>
                                <th>
                                    <input type="text" name="slope" style="width:60px; height: 24px" value="0">
                                </th>
                                <th class="row">
                                    <select class="form-select" name="erozionForm" aria-label="Пример выбора по умолчанию">
                                        <option selected>0-нет</option>
                                        <option value="1">Один</option>
                                        <option value="2">Два</option>
                                        <option value="3">Три</option>
                                    </select>
                                    <select class="form-select" name="erozionDegree" aria-label="Пример выбора по умолчанию">
                                        <option selected>0-нет</option>
                                        <option value="1">Один</option>
                                        <option value="2">Два</option>
                                        <option value="3">Три</option>
                                    </select>
                                </th>
                            </tr>
                            </tbody>
                        </table>
                        <table class="table" border="2px solid">
                            <thead>
                            <tr>
                                <th scope="col">Мероприятия</th>
                                <th scope="col">Первое</th>
                                <th scope="col">% Выбор</th>
                                <th scope="col">№ РТК</th>
                                <th scope="col">Второе</th>
                                <th scope="col">№ РТК</th>
                                <th scope="col">Третье</th>
                                <th scope="col">№ РТК</th>
                                <th scope="col">Цел. пор.</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td></td>
                                <td>
                                    <select class="form-select" name="firstEvent" aria-label="Пример выбора по умолчанию">
                                        <option selected>0-нет</option>
                                        <option value="1">Один</option>
                                        <option value="2">Два</option>
                                        <option value="3">Три</option>
                                    </select>
                                </td>
                                <td>
                                    <input type="text" name="percent" style="width:60px; height: 24px" value="0">
                                </td>
                                <td>
                                    <input type="text" name="firstPtk" style="width:60px; height: 24px" value="0">
                                </td>
                                <td>
                                    <select class="form-select" name="secondEvent" aria-label="Пример выбора по умолчанию">
                                        <option selected>0-нет</option>
                                        <option value="1">Один</option>
                                        <option value="2">Два</option>
                                        <option value="3">Три</option>
                                    </select>
                                </td>
                                <td>
                                    <input type="text" name="secondPtk" style="width:60px; height: 24px" value="0">
                                </td>
                                <td>
                                    <select class="form-select" name="thirdEvent" aria-label="Пример выбора по умолчанию">
                                        <option selected>0-нет</option>
                                        <option value="1">Один</option>
                                        <option value="2">Два</option>
                                        <option value="3">Три</option>
                                    </select>
                                </td>
                                <td>
                                    <input type="text" name="thirdPtk" style="width:60px; height: 24px" value="0">
                                </td>
                                <td>
                                    <select class="form-select" name="target" aria-label="Пример выбора по умолчанию">
                                        <option selected>0-нет</option>
                                        <option value="1">Один</option>
                                        <option value="2">Два</option>
                                        <option value="3">Три</option>
                                    </select>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <table class="table" border="2px solid">
                            <tbody>
                            <tr>
                                <th>
                                    Захламленность, м^3 га
                                </th>
                                <td>
                                    <input type="text" style="width:60px; height: 24px" value="0">
                                </td>
                                <th>
                                    В том числе ликвидной
                                </th>
                                <td>
                                    <input type="text" style="width:60px; height: 24px" value="0">
                                </td>
                                <th>
                                    Сухостой м^3 га
                                </th>
                                <td>
                                    <input type="text" style="width:60px; height: 24px" value="0">
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <table class="table" border="2px solid">
                            <thead>
                            <tr>
                                <th scope="col">№</th>
                                <th scope="col">Ярус</th>
                                <th scope="col">Состав</th>
                                <th scope="col">А, лет</th>
                                <th scope="col">H, м</th>
                                <th scope="col">Д, см</th>
                                <th scope="col">Класс товарн</th>
                                <th scope="col">Происх</th>
                                <th scope="col">P относ</th>
                                <th scope="col">G</th>
                                <th scope="col">Запас, м куб</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th>1</th>
                                <td>
                                    <input type="text" style="width:60px; height: 24px" value="0">
                                </td>
                                <td>
                                    <input type="text" style="width:60px; height: 24px" value="0">
                                </td>
                                <td>
                                    <input type="text" style="width:60px; height: 24px" value="0">
                                </td>
                                <td>
                                    <input type="text" style="width:60px; height: 24px" value="0">
                                </td>
                                <td>
                                    <input type="text" style="width:60px; height: 24px" value="0">
                                </td>
                                <td>
                                    <input type="text" style="width:60px; height: 24px" value="0">
                                </td>
                                <td>
                                    <input type="text" style="width:60px; height: 24px" value="0">
                                </td>
                                <td>
                                    <input type="text" style="width:60px; height: 24px" value="0">
                                </td>
                                <td>
                                    <input type="text" style="width:60px; height: 24px" value="0">
                                </td>
                                <td>
                                    <input type="text" style="width:60px; height: 24px" value="0">
                                </td>
                            </tr>
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
    </div>
@endsection
