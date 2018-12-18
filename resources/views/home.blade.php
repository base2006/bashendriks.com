@extends('layouts.app')

@section('content')
    <div id="home" class="row">
        <div class="container">
            <div class="row vh-100 d-flex align-items-center">
                <div class="col-12">
                    <h1 class="title">Bas Hendriks</h1>
                    <h2 class="subtitle">Full stack webdeveloper</h2>
                </div>
            </div>
        </div>
    </div>
    <div id="about" class="row bg--darker mvh-100">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 mt-5">
                    <h3 class="subtitle">Frontend</h3>
                    <ul class="lang-list">
                        <li><i class="lang-icon bootstrap"></i> Bootstrap</li>
                        <li><i class="lang-icon js"></i> Javascript</li>
                        <li><i class="lang-icon jquery"></i> jQuery</li>
                        <li><i class="lang-icon scss"></i> SCSS</li>
                        <li><i class="lang-icon react"></i> ReactJS (coming soon)</li>
                    </ul>
                </div>
                <div class="col-12 col-md-6 mt-5">
                    <h3 class="subtitle">Backend</h3>
                    <ul class="lang-list">
                        <li><i class="lang-icon laravel"></i> Laravel</li>
                        <li><i class="lang-icon php"></i> PHP</li>
                    </ul>
                </div>
                <div class="col-12 col-md-6 mt-5">
                    <h4 class="subtitle">Honorable mentions</h4>
                    <ul class="lang-list">
                        <li><i class="lang-icon git"></i> Git with Github (and CLI)</li>
                        <li><i class="lang-icon centos"></i> CentOS</li>
                        <li><i class="lang-icon plesk"></i> Plesk</li>
                    </ul>
                </div>
                <div class="col-12 col-md-6 mt-5">
                    <h4 class="subtitle">Prefered editor</h4>
                    <ul class="lang-list">
                        <li><i class="lang-icon phpstorm"></i> PhpStorm</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection