@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-4">
            <h2 class="border-bottom text-center">Standard Vue+Laravel</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <div class="btn-toolbar " role="toolbar" aria-label="Toolbar with button groups">
                <div class="btn-group mr-2" role="group" aria-label="First group">
                    <a type="button" class="btn btn-secondary" href="#1">Example component</a>
                    <a type="button" class="btn btn-secondary" href="#2">Vue -> Blade</a>
                    <a type="button" class="btn btn-secondary" href="#3">Ajax</a>
                    <a type="button" class="btn btn-secondary" href="#4">ChartJS (Line) & VueJS *ajax</a>
                    <a type="button" class="btn btn-secondary" href="#5">ChartJS (Line) & VueJS *ajax+trigger+reload</a>
                    <a type="button" class="btn btn-secondary" href="#6">Realtime ChartJS (Line) & VueJS *ajax+trigger+reload</a>
                    <a type="button" class="btn btn-secondary" href="#7">Realtime Chat VueJS *ajax+trigger+reload</a>
                    <a type="button" class="btn btn-secondary" href="#8">Realtime Chat Private VueJS *ajax+trigger+reload</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="owl-carousel owl-theme mt-5">
                <div class="row m-2" data-hash="1" id="1">
                    <div class="card">
                        <div class="card-body" style="min-height: 50px;">
                            <h2 class="text-center">#1 Example component</h2>
                            <example-component></example-component>
                        </div>
                    </div>
                </div>
                <div class="row m-2" data-hash="2" id="2">
                    <div class="card">
                        <div class="card-body" style="min-height: 50px;">
                            <h2 class="text-center">#2 Передача данных в Vue из Blade</h2>
                            <prop-component :urldata="{{json_encode($url_data)}}"></prop-component>
                        </div>
                    </div>
                </div>
                <div class="row m-2" data-hash="3" id="3">
                    <div class="card">
                        <div class="card-body" style="min-height: 50px;">
                            <h2 class="text-center">#3 Ajax</h2>
                            <ajax-component></ajax-component>
                        </div>
                    </div>
                </div>

                <div class="row m-2" data-hash="4" id="4">
                    <div class="card">
                        <div class="col-md-12">
                            <div class="card-body" style="min-height: 300px;">
                                <h2 class="text-center">#4 ChartJS (Line) & VueJS *ajax</h2>
                                <chartline-component></chartline-component>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row m-2" data-hash="5" id="5">
                    <div class="card">
                        <div class="col-md-12">
                            <div class="card-body" style="min-height: 300px;">
                                <h2 class="text-center">#5 ChartJS (Line) & VueJS *ajax+trigger+reload</h2>
                                <chartrandom-component></chartrandom-component>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row m-2" data-hash="6" id="6">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body" style="min-height: 300px;">
                                <h2 class="text-center">#6 Realtime ChartJS (Line) & VueJS *ajax+trigger+reload</h2>
                                <socket-component></socket-component>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row m-2" data-hash="7" id="7">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body" style="min-height: 300px;">
                                <h2 class="text-center">#7 Realtime Chat VueJS *ajax+trigger+reload</h2>
                                <socket-chat-component></socket-chat-component>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row m-2" data-hash="8" id="8">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body" style="min-height: 300px;">
                                <h2 class="text-center">#8 Realtime Chat Private VueJS *ajax+trigger+reload</h2>
                                @if (Auth::check())
                                    <h4 class="text-center">пользователь: {{ Auth::user()->email }}</h4>
                                    <socket-private-component :users="{{ \App\User::select('email', 'id')->
                                    where('id', '!=', Auth::id())->get()}}" :user="{{ Auth::user() }}"></socket-private-component>
                                    @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection