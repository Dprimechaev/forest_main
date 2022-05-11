<?php

namespace Database\Seeders;

use Faker\Provider\ru_RU\Address;
use Faker\Provider\ru_RU\Text;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HandBookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $places = [
            ['key' => 'Республика', 'value' => 'Марий Эл'],
            ['key' => 'Республика', 'value' => 'Нижегородская'],
            ['key' => 'Районное лесничество', 'value' => 'Варнавинское'],
            ['key' => 'Районное лесничество', 'value' => 'Кстовское'],
            ['key' => 'Участковое лесничество', 'value' => 'Зеленодольское'],
            ['key' => 'Участковое лесничество', 'value' => 'Стобищенское'],
            ['key' => 'Ярус', 'value' => '1'],
            ['key' => 'Ярус', 'value' => '2'],
            ['key' => 'Категория земель', 'value' => 'Насаждения из подроста'],
            ['key' => 'Категория земель', 'value' => 'Насаждения естественного происхождения'],
            ['key' => 'Категория защитности', 'value' => 'Лесопарки'],
            ['key' => 'Категория защитности', 'value' => 'Противоэрозионные леса'],
            ['key' => 'Способ рубки', 'value' => 'Сплошная'],
            ['key' => 'Способ рубки', 'value' => 'Сплошная'],
            ['key' => 'ОЗУ', 'value' => 'Берегозащитные, почвозащитные участки лесов, расположенные вдоль водных объектов, склонов оврагов'],
            ['key' => 'ОЗУ', 'value' => 'Заповедные лесные участки'],
            ['key' => 'Экспозиция', 'value' => 'С'],
            ['key' => 'Экспозиция', 'value' => 'В'],
            ['key' => 'Вид эрозии', 'value' => 'Водная'],
            ['key' => 'Вид эрозии', 'value' => 'Ветровая'],
            ['key' => 'Степень эрозии', 'value' => 'Слабая'],
            ['key' => 'Степень эрозии', 'value' => 'Средняя'],
            ['key' => 'Первое мероприятие', 'value' => 'Сплошная рубка'],
            ['key' => 'Второе мероприятие', 'value' => 'Сплошная рубка'],
            ['key' => 'Третье мероприятие', 'value' => 'Сплошная рубка'],
            ['key' => 'Целевая порода', 'value' => 'Сосна'],
            ['key' => 'Целевая порода', 'value' => 'Берёза'],
            ['key' => 'Преобладающая порода', 'value' => 'Сосна'],
            ['key' => 'Преобладающая порода', 'value' => 'Берёза'],
            ['key' => 'Класс бонитета', 'value' => '1'],
            ['key' => 'Класс бонитета', 'value' => '2'],
            ['key' => 'Арендатор', 'value' => 'Арендатор'],
            ['key' => 'Арендатор', 'value' => ''],
            ['key' => 'Тип леса', 'value' => 'ЛШ'],
            ['key' => 'Тип леса', 'value' => 'СБР'],
            ['key' => 'ТЛУ', 'value' => 'А1'],
            ['key' => 'ТЛУ', 'value' => 'В2'],
            ['key' => 'Класс пожарной опасности', 'value' => '1 класс'],
            ['key' => 'Класс пожарной опасности', 'value' => '2 класс'],
            ['key' => 'Тип вырубки', 'value' => 'Лишайниковая'],
            ['key' => 'Тип вырубки', 'value' => 'Вейниковая'],
            ['key' => 'Состав порода', 'value' => 'Сосна'],
            ['key' => 'Состав порода', 'value' => 'Берёза'],
            ['key' => 'Происхождение', 'value' => 'Семенное естественное'],
            ['key' => 'Происхождение', 'value' => 'Семенное искусственное'],
            ['key' => 'Подрост 1', 'value' => 'Сосна'],
            ['key' => 'Подрост 1', 'value' => 'Берёза'],
            ['key' => 'Подрост 2', 'value' => 'Сосна'],
            ['key' => 'Подрост 2', 'value' => 'Берёза'],
            ['key' => 'Подрост 3', 'value' => 'Сосна'],
            ['key' => 'Подрост 3', 'value' => 'Берёза'],
            ['key' => 'Оценка', 'value' => 'Благонадёжный'],
            ['key' => 'Оценка', 'value' => 'Неблагонадёжный'],
            ['key' => 'Густота', 'value' => 'Редкий'],
            ['key' => 'Густота', 'value' => 'Средний'],
            ['key' => 'Подлесок 1', 'value' => 'Сосна'],
            ['key' => 'Подлесок 1', 'value' => 'Берёза'],
            ['key' => 'Подлесок 2', 'value' => 'Сосна'],
            ['key' => 'Подлесок 2', 'value' => 'Берёза'],
            ['key' => 'Подлесок 3', 'value' => 'Сосна'],
            ['key' => 'Подлесок 3', 'value' => 'Берёза'],
            ['key' => 'Макет', 'value' => 'Лесные культуры'],
            ['key' => 'Макет', 'value' => 'Повреждение насаждения'],


        ];
        foreach ($places as $place) {
            \DB::table('hand_books')->insert([$place]);
        }

    }
}