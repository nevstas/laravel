<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SystemController extends Controller
{
    /*
     * Смена языка
     */
    public function changeLanguage($locale)
    {
        if (!in_array($locale, ['ru', 'en'])) {
            abort(404);
        }
        Session::put('locale', $locale);

        return redirect()->back();
    }

    /*
    * Первый символ с большой буквы
    */
    static function mb_ucfirst($string, $encoding = 'UTF-8')
    {
        $strlen = mb_strlen($string, $encoding);
        $firstChar = mb_substr($string, 0, 1, $encoding);
        $then = mb_substr($string, 1, $strlen - 1, $encoding);
        return mb_strtoupper($firstChar, $encoding) . $then;
    }


}
