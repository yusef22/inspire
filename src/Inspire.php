<?php

namespace Yusef22\Inspire;

class Inspire {
    /**
     * Collection of Hafez poems used for random selection.
     *
     * @var array<int, string>
     */
    protected array $poems = [
        'الا یا ایها الساقی ادر کاسا و ناولها که عشق آسان نمود اول ولی افتاد مشکل‌ها',
        'دوش دیدم که ملائک در میخانه زدند گل آدم بسرشتند و به پیمانه زدند',
        'منم که شهره شهرم به عشق ورزیدن منم که دیده نیالوده‌ام به بد دیدن',
        'حافظا می خور و رندی کن و خوش باش ولی دام تزویر مکن چون دگران قرق کنی',
        'چو بشنوی سخن اهل دل مگو که خطاست سخن شناس نه‌ای جان من خطا اینجا است',
    ];

    /**
     * Return a random verse from Hafez.
     */
    public function justDoIt(): string
    {
        $poem = $this->poems[array_rand($this->poems)];

        return $poem . ' - حافظ';
    }
}
