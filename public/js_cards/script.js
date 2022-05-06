//Ярусы добавление
let index = 1
function countRabbits() {
    if (index <= 9){
        ++index
        tierBody.insertAdjacentHTML('beforeend', '<tr>\n' +
            '                                    <td class="td_color">\n' + index +
            '                                    </td>\n' +
            '                                    <td class="td_color">\n' +
            '                                        <select name="row['+index+'][tier]">\n' +
            '                                            <option value="1">1</option>\n' +
            '                                            <option value="2">2</option>\n' +
            '                                        </select>\n' +
            '                                    </td>\n' +
            '                                    <td class="td_color">\n' +
            '                                        <select name="row['+index+'][coefComposition]">\n' +
            '                                            <option value="0">0 - нет</option>\n' +
            '                                        </select>\n' +
            '                                        <select name="row['+index+'][speciesComposition]">\n' +
            '                                            <option value="0">0 - нет</option>\n' +
            '                                        </select>\n' +
            '                                    </td>\n' +
            '                                    <td class="td_color">\n' +
            '                                        <input type="text" value="0" name="row['+index+'][origin]">\n' +
            '                                    </td>\n' +
            '                                    <td class="td_color">\n' +
            '                                        <input type="number" value="0" name="row['+index+'][age]">\n' +
            '                                    </td>\n' +
            '                                    <td class="td_color">\n' +
            '                                        <input type="number" value="0" name="row['+index+'][height]">\n' +
            '                                    </td>\n' +
            '                                    <td class="td_color">\n' +
            '                                        <input type="number" value="0" name="row['+index+'][diameter]">\n' +
            '                                    </td>\n' +
            '                                    <td class="td_color">\n' +
            '                                        <select name="row['+index+'][class]">\n' +
            '                                            <option value="0">0 - нет</option>\n' +
            '                                        </select>\n' +
            '                                    </td>\n' +
            '                                    <td class="td_color">\n' +
            '                                        <input type="number" value="0" name="row['+index+'][density]">\n' +
            '                                    </td>\n' +
            '                                    <td class="td_color">\n' +
            '                                        <input type="number" value="0" name="row['+index+'][g]">\n' +
            '                                    </td>\n' +
            '                                    <td class="td_color">\n' +
            '                                        <input type="number" value="0" name="row['+index+'][stock]">\n' +
            '                                    </td>\n' +
            '                                </tr>');
    }

}

//Ярусы удаление
let node = document.getElementById('tierBody');
let button = document.getElementById('clear');

button.addEventListener('click', clearFunction);

function clearFunction() {

    if (index >= 2){
        node.removeChild(node.lastChild);
        index--;
    }
}
// МДС добавление

let index_mds = 1
function countRabbitsMDS() {
    if (index_mds <= 9){
        ++index_mds
        tierMDS.insertAdjacentHTML('beforeend', '<tr>\n' +
            '                                    <td>\n' +
            '                                        <select id ="mds" name="row[{{ $index }}][class]">\n' +
            '                                            <option value="Не выбрано">Не выбрано</option>\n' +
            '                                            <option value="Лесные культуры">Лесные культуры</option>\n' +
            '                                            <option value="Повреждение насаждения">Повреждение насаждения</option>\n' +
            '                                            <option value="да">да</option>\n' +
            '                                        </select>\n' +
            '                                    </td>\n' +
            '                                    <td class="td_color">\n' +
            '                                        <input type="number" id="mds+ ${index_mds}" value="0" name="row[{{ $index }}][density]">\n' +
            '                                    </td>\n' +
            '                                    <td class="td_color">\n' +
            '                                        <input type="number" value="0" name="row[{{ $index }}][density]">\n' +
            '                                    </td>\n' +
            '                                    <td class="td_color">\n' +
            '                                        <input type="number" value="0" name="row[{{ $index }}][density]">\n' +
            '                                    </td>\n' +
            '                                    <td class="td_color">\n' +
            '                                        <input type="number" value="0" name="row[{{ $index }}][density]">\n' +
            '                                    </td>\n' +
            '                                    <td class="td_color">\n' +
            '                                        <input type="number" value="0" name="row[{{ $index }}][density]">\n' +
            '                                    </td>\n' +
            '                                    <td class="td_color">\n' +
            '                                        <input type="number" value="0" name="row[{{ $index }}][density]">\n' +
            '                                    </td>\n' +
            '                                    <td class="td_color">\n' +
            '                                        <input type="number" value="0" name="row[{{ $index }}][density]">\n' +
            '                                    </td>\n' +
            '                                    <td class="td_color">\n' +
            '                                        <input type="number" value="0" name="row[{{ $index }}][density]">\n' +
            '                                    </td>\n' +
            '                                    <td>\n' +
            '                                        <button type="button" class="btn btn-warning" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Раскрыть</button>\n' +
            '                                    </td>\n' +
            '                                </tr>');
    }

}

// МДС удаление

let node_mds = document.getElementById('tierMDS');
let button_mds = document.getElementById('clear_mds');

button_mds.addEventListener('click', clearFunction_mds);

function clearFunction_mds() {

    if (index_mds >= 2){
        node_mds.removeChild(node_mds.lastChild);
        index_mds--;
    }
}


let select = document.getElementById("mds");


select.addEventListener("change", function(){
    let el = document.getElementById('mds')

    if (select.value === "Лесные культуры"){
        mds_form.insertAdjacentHTML('beforeend' ,'<div class="container">\t\n' +
            '\t\t<div class="row">\t\n' +
            '\t\t\t<div class="col">\n' +
            '\t\t\t\t<div class="mb-3">11.1. Год создания, г.</div>\n' +
            '\t\t\t\t<div>11.2. Способ обработки почвы</div>\n' +
            '\t\t\t\t<div>11.3. Способ создания</div>\n' +
            '\t\t\t\t<div class="mt-2">11.4. Расстояние между рядами, м</div>\n' +
            '\t\t\t\t<div>11.5. Расстояние в ряду, м.</div>\n' +
            '\t\t\t\t<div>11.6. Количество позадочных места на 1<br> га, шт.</div>\n' +
            '\t\t\t\t<div>11.7. Оценка состояния</div>\n' +
            '\t\t\t\t<div>11.8. Причина гибели или<br>неудовлетворительного состояния</div>\n' +
            '\t\t\t</div>\n' +
            '\t\t\t<div class="col">\n' +
            '\t\t\t\t<div>\n' +
            '\t\t\t\t\t<input id = "one" type="text" class="form-control mb-1" placeholder="0">\n' +
            '\t\t\t\t</div>\n' +
            '\t\t\t\t<div>\n' +
            '\t\t\t\t\t<select name="" id="two" class="form-control mb-1">\n' +
            '\t\t\t\t\t\t<option value="">0 - нет</option>\n' +
            '\t\t\t\t\t\t<option value="">Нет</option>\n' +
            '\t\t\t\t\t</select>\n' +
            '\t\t\t\t</div>\n' +
            '\t\t\t\t<div>\n' +
            '\t\t\t\t\t<select name="" id="three" class="form-control mb-1">\n' +
            '\t\t\t\t\t\t<option value="">0 - нет</option>\n' +
            '\t\t\t\t\t\t<option value="">Нет</option>\n' +
            '\t\t\t\t\t</select>\n' +
            '\t\t\t\t</div>\n' +
            '\t\t\t\t<div>\n' +
            '\t\t\t\t\t<input type="text" id ="four" class="form-control mb-1" placeholder="0">\n' +
            '\t\t\t\t</div>\n' +
            '\t\t\t\t<div>\n' +
            '\t\t\t\t\t<input type="text" id="five" class="form-control mb-1" placeholder="0">\n' +
            '\t\t\t\t</div>\n' +
            '\t\t\t\t<div>\n' +
            '\t\t\t\t\t<input type="text" id = "six" class="form-control mb-1" placeholder="0">\n' +
            '\t\t\t\t</div>\n' +
            '\t\t\t\t<div>\n' +
            '\t\t\t\t\t<select name="" id="seven" class="form-control mt-3">\n' +
            '\t\t\t\t\t\t<option value="">0 - нет</option>\n' +
            '\t\t\t\t\t\t<option value="">Нет</option>\n' +
            '\t\t\t\t\t</select>\n' +
            '\t\t\t\t</div>\n' +
            '\t\t\t\t<div>\n' +
            '\t\t\t\t\t<select name="" id="eich" class="form-control mt-2">\n' +
            '\t\t\t\t\t\t<option value="">0 - нет</option>\n' +
            '\t\t\t\t\t\t<option value="">Нет</option>\n' +
            '\t\t\t\t\t</select>\n' +
            '\t\t\t\t</div>\n' +
            '\t\t\t</div>\t\t\t\n' +
            '\t\t</div>');
    }
    else{
        let myNode = document.getElementById("mds");
        mds_form.insertAdjacentHTML('beforeend' ,'<input type="text" id="mds_item" value="не культуры">');
    }
});

function mdsSave() {
    let one = document.getElementById('one').value;
    let two = document.getElementById('two').value;
    let three = document.getElementById('three').value;
    let four = document.getElementById('four').value;
    let five = document.getElementById('five').value;
    let six = document.getElementById('six').value;
    let seven = document.getElementById('seven').value;
    let eich = document.getElementById('eich').value;



}
