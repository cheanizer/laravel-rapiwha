<?php

namespace Cheanizer\LaraRapiWha;

use Illuminate\Support\Facades\Facade as FacedeMain;

class Facade extends FacedeMain
{
    protected static function getFacadeAccessor()
    {
        return 'cheanizer-lararapiwha';
    }
}
