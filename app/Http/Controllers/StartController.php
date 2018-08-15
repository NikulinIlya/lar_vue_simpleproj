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

    public function chartData() {
        return [
            'labels' => ['март', 'апрель', 'май', 'июнь'],
            'datasets' => array([
                'label' => 'Продажи',
                'backgroundColor' => '#F26202',
                'data' => [15000, 5000, 10000, 30000]
            ])
        ];
    }

    public function newEvent(Request $request) {

    }
}
