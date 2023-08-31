<?php

namespace App\Utilities;


use Illuminate\Support\Str;

class Helpers{
    public static function avatar($name)
    {
        $param = [
            'background' => 'EBF4FF',
            'color' => '7F9CF4',
            'name' => Str::upper($name),
        ];

        return 'https://ui-avatars.com/api/?' . http_build_query($param);
    }
}
