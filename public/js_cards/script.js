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
            '                                        <select name="row[{{ $index }}][class]">\n' +
            '                                            <option value="0">0 - нет</option>\n' +
            '                                        </select>\n' +
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
            '                                    <td class="td_color">\n' +
            '                                        <input type="number" value="0" name="row[{{ $index }}][density]">\n' +
            '                                    </td>\n' +
            '                                    <td>\n' +
            '                                        <button class="btn btn-warning">Раскрыть</button>\n' +
            '                                    </td>\n' +
            '                                </tr>');
    }

}

// МДС удаление

let node_mds = document.getElementById('tierMDS');
let button_mds = document.getElementById('clear_mds');

button_mds.addEventListener('click', clearFunction);

function clearFunction() {

    if (index_mds >= 2){
        node_mds.removeChild(node_mds.lastChild);
        index_mds--;
    }
}
