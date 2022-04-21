let index = 1
function countRabbits() {
    ++index
    tierBody.insertAdjacentHTML('afterend', '<tr>\n' +
        '                                    <td class="td_color">\n' + index +
        '                                    </td>\n' +
        '                                    <td class="td_color">\n' +
        '                                        <select name="row[\''+index+'\'][\'tier\']">\n' +
        '                                            <option value="0">0 - нет</option>\n' +
        '                                        </select>\n' +
        '                                    </td>\n' +
        '                                    <td class="td_color">\n' +
        '                                        <select name="row[\''+index+'\'][\'coefComposition\']">\n' +
        '                                            <option value="0">0 - нет</option>\n' +
        '                                        </select>\n' +
        '                                        <select name="row[\''+index+'\'][\'speciesComposition\']">\n' +
        '                                            <option value="0">0 - нет</option>\n' +
        '                                        </select>\n' +
        '                                    </td>\n' +
        '                                    <td class="td_color">\n' +
        '                                        <input type="text" value="0" name="row[\''+index+'\'][\'origin\']">\n' +
        '                                    </td>\n' +
        '                                    <td class="td_color">\n' +
        '                                        <input type="text" value="0" name="row[\''+index+'\'][\'age\']">\n' +
        '                                    </td>\n' +
        '                                    <td class="td_color">\n' +
        '                                        <input type="text" value="0" name="row[\''+index+'\'][\'height\']">\n' +
        '                                    </td>\n' +
        '                                    <td class="td_color">\n' +
        '                                        <input type="text" value="0" name="row[\''+index+'\'][\'diameter\']">\n' +
        '                                    </td>\n' +
        '                                    <td class="td_color">\n' +
        '                                        <select name="row[\''+index+'\'][\'class\']">\n' +
        '                                            <option value="0">0 - нет</option>\n' +
        '                                        </select>\n' +
        '                                    </td>\n' +
        '                                    <td class="td_color">\n' +
        '                                        <input type="text" value="0" name="row[\''+index+'\'][\'density\']">\n' +
        '                                    </td>\n' +
        '                                    <td class="td_color">\n' +
        '                                        <input type="text" value="0" name="row[\''+index+'\'][\'g\']">\n' +
        '                                    </td>\n' +
        '                                    <td class="td_color">\n' +
        '                                        <input type="text" value="0" name="row[\''+index+'\'][\'stock\']">\n' +
        '                                    </td>\n' +
        '                                </tr>');

}

function minus() {
    tierBody.firstChild.remove();
}


