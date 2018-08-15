<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StartController extends Controller
{
    public function index()
    {
        $url_data = [
            array(
                'title' => 'DEVELOP',
                'url' => 'https://myurl.ru'

            ),
            array(
                'title' => 'YouTube',
                'url' => 'http://youtube.com'
            )
        ];
        return view('start', [
            'url_data' =>$url_data
        ]);
    }

    public function getJson()
    {
        return [
            array(
                'title' => 'Google',
                'url' => 'https://google.com'

            ),
            array(
                'title' => 'Yandex',
                'url' => 'http://ya.ru'
            )
        ];

    }

    public function newEvent(Request $request) {

    }
}
