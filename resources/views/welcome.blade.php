@extends('layouts.app')

@section('content')
<div class="container">
    <div class="content">
        <div class="title m-b-md">
            Welcome!
        </div>

        <div class="links">
            <a href="https://laravel.com/docs">Home</a>
            <a href="https://laracasts.com">Templates</a>
            <a href="https://laravel-news.com">Preview</a>
            <a href="https://github.com/laravel/laravel">GitHub</a>
            <a href="https://forge.laravel.com">Contact Us</a>
        </div>
    </div>
</div>
@endsection

@section('style')
<style>

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-top: 90px;
            margin-bottom: 30px;
        }
    </style>

@endsection