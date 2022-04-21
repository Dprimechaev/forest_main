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
        '                                        <select>\n' +
        '                                            <option value="0">0 - нет</option>\n' +
        '                                        </select>\n' +
        '                                        <select>\n' +
        '                                            <option value="0">0 - нет</option>\n' +
        '                                        </select>\n' +
        '                                    </td>\n' +
        '                                    <td class="td_color">\n' +
        '                                        <input type="text" value="0">\n' +
        '                                    </td>\n' +
        '                                    <td class="td_color">\n' +
        '                                        <input type="text" value="0">\n' +
        '                                    </td>\n' +
        '                                    <td class="td_color">\n' +
        '                                        <input type="text" value="0">\n' +
        '                                    </td>\n' +
        '                                    <td class="td_color">\n' +
        '                                        <input type="text" value="0">\n' +
        '                                    </td>\n' +
        '                                    <td class="td_color">\n' +
        '                                        <select>\n' +
        '                                            <option value="0">0 - нет</option>\n' +
        '                                        </select>\n' +
        '                                    </td>\n' +
        '                                    <td class="td_color">\n' +
        '                                        <input type="text" value="0">\n' +
        '                                    </td>\n' +
        '                                    <td class="td_color">\n' +
        '                                        <input type="text" value="0">\n' +
        '                                    </td>\n' +
        '                                    <td class="td_color">\n' +
        '                                        <input type="text" value="0">\n' +
        '                                    </td>\n' +
        '                                </tr>');

}

function minus() {
    tierBody.firstChild.remove();
}


