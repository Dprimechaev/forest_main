<table>
    <thead>
    <tr>
        <th>Название</th>
        <th>Область, край, республика</th>
        <th>Районное лесничество</th>
        <th>Участковое лесничество</th>
        <th>quarter</th>
        <th>distance</th>
        <th>renter</th>
        <th>number</th>
        <th>area</th>
        <th>earthCategory</th>
        <th>protectionCategory</th>
        <th>cutWay</th>
        <th>ozu</th>
        <th>height</th>
        <th>exposition</th>
        <th>slope</th>
        <th>erozionForm</th>
        <th>erozionDegree</th>
        <th>firstEvent</th>
        <th>percent</th>
        <th>firstPtk</th>
        <th>secondEvent</th>
        <th>secondPtk</th>
        <th>thirdEvent</th>
        <th>thirdPtk</th>
        <th>target</th>
        <th>dominantBreed</th>
        <th>bonitetClass</th>
        <th>forestType</th>
        <th>tlu</th>
        <th>renter</th>
        <th>fireDangeros</th>
        <th>cutYear</th>
        <th>allStump</th>
        <th>pineStump</th>
        <th>stumpDiameter</th>
        <th>cutType</th>
        <th>littering</th>
        <th>liquid</th>
        <th>deadwood</th>
        @foreach($box->second as $second)
            <th>Ярус</th>
            <th>Коэффициент состава</th>
            <th>Порода</th>
            <th>Возраст, лет</th>
            <th>Высота, м</th>
            <th>Диаметр, м</th>
            <th>Класс товарности</th>
            <th>Происхождение</th>
            <th>Р относ.</th>
            <th>G</th>
            <th>Запас, м. куб.</th>
        @endforeach
        <th>Подрост</th>
        <th>Кол. тысяч</th>
        <th>Высота, м</th>
        <th>Возраст, л</th>
        <th>К 1</th>
        <th>Порода 1</th>
        <th>К 2</th>
        <th>Порода 2</th>
        <th>К 3</th>
        <th>Порода 3</th>
        <th>Оценка</th>
        <th>Подлесок</th>
        <th>Густота</th>
        <th>Порода 1</th>
        <th>Порода 2</th>
        <th>Порода 3</th>
    </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{ $box->title }}</td>
            <td>{{ $box->first->republic }}</td>
            <td>{{ $box->first->district }}</td>
            <td>{{ $box->first->region }}</td>
            <td>{{ $box->first->quarter }}</td>
            <td>{{ $box->first->distance }}</td>
            <td>{{ $box->first->renter }}</td>
            <td>{{ $box->first->number }}</td>
            <td>{{ $box->first->area }}</td>
            <td>{{ $box->first->earthCategory }}</td>
            <td>{{ $box->first->protectionCategory }}</td>
            <td>{{ $box->first->cutWay }}</td>
            <td>{{ $box->first->ozu }}</td>
            <td>{{ $box->first->height }}</td>
            <td>{{ $box->first->exposition }}</td>
            <td>{{ $box->first->slope }}</td>
            <td>{{ $box->first->erozionForm }}</td>
            <td>{{ $box->first->erozionDegree }}</td>
            <td>{{ $box->first->firstEvent }}</td>
            <td>{{ $box->first->percent }}</td>
            <td>{{ $box->first->firstPtk }}</td>
            <td>{{ $box->first->secondEvent }}</td>
            <td>{{ $box->first->secondPtk }}</td>
            <td>{{ $box->first->thirdEvent }}</td>
            <td>{{ $box->first->thirdPtk }}</td>
            <td>{{ $box->first->target }}</td>
            <td>{{ $box->first->dominantBreed }}</td>
            <td>{{ $box->first->bonitetClass }}</td>
            <td>{{ $box->first->forestType }}</td>
            <td>{{ $box->first->tlu }}</td>
            <td>{{ $box->first->renter }}</td>
            <td>{{ $box->first->fireDangeros }}</td>
            <td>{{ $box->first->cutYear }}</td>
            <td>{{ $box->first->allStump }}</td>
            <td>{{ $box->first->pineStump }}</td>
            <td>{{ $box->first->stumpDiameter }}</td>
            <td>{{ $box->first->cutType }}</td>
            <td>{{ $box->first->littering }}</td>
            <td>{{ $box->first->liquid }}</td>
            <td>{{ $box->first->deadwood }}</td>
            @foreach($box->second as $second)
                <td>{{ $second->tier }}</td>
                <td>{{ $second->coefComposition }}</td>
                <td>{{ $second->speciesComposition }}</td>
                <td>{{ $second->origin }}</td>
                <td>{{ $second->age }}</td>
                <td>{{ $second->height }}</td>
                <td>{{ $second->diameter }}</td>
                <td>{{ $second->class }}</td>
                <td>{{ $second->density }}</td>
                <td>{{ $second->g }}</td>
                <td>{{ $second->stock }}</td>
            @endforeach
            <td></td>
            <td>{{ $box->third->thousands }}</td>
            <td>{{ $box->third->height }}</td>
            <td>{{ $box->third->age }}</td>
            <td>{{ $box->third->koefOne }}</td>
            <td>{{ $box->third->podrostOne }}</td>
            <td>{{ $box->third->koefTwo }}</td>
            <td>{{ $box->third->podrostTwo }}</td>
            <td>{{ $box->third->koefThree }}</td>
            <td>{{ $box->third->podrostThree }}</td>
            <td>{{ $box->third->por }}</td>
            <td>{{ $box->third->Oc }}</td>
            <td></td>
            <td>{{ $box->third->density }}</td>
            <td>{{ $box->third->podlesokOne }}</td>
            <td>{{ $box->third->podlesokTwo }}</td>
            <td>{{ $box->third->podlesokThree }}</td>
        </tr>
    </tbody>
</table>
