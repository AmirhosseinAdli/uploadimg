@extends('layouts.app')




@section('lang',str_replace('_', '-', app()->getLocale()) )


@section('title',config('app.title', 'Laravel'))

@push('style')
    <style>

        /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
        .row.content {height: 450px}

        /* Set gray background color and 100% height */
        .sidenav {
            padding-top: 20px;
            background-color: #f1f1f1;
            height: 100%;
        }

        /* Set black background color, white text and some padding */
        footer {
            background-color: #555;
            color: white;
            padding: 15px;
        }

        /* On small screens, set height to 'auto' for sidenav and grid */
        @media screen and (max-width: 767px) {
            .sidenav {
                height: auto;
                padding: 15px;
            }
            .row.content {height:auto;}
        }
    </style>
@endpush


@section('content')




    <div class="menubar-body" data-scrollbar="true" tabindex="-1" style="overflow: hidden; outline: none;">
        <div class="scroll-content">
            <ul class="menu accordion">
                <li class="menu-item">
                    <a href="#" class="menu-link">
                        <i class="menu-icon far fa-compass"></i>
                        <span class="menu-label">Dashboard</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="#" class="menu-link">
                        <i class="menu-icon far fa-user-graduate"></i>
                        <span class="menu-label">Users</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="#" class="menu-link">
                        <i class="menu-icon far fa-play"></i>
                        <span class="menu-label">picture lists</span>
                    </a>
                </li>
                <li class="site-menu-item">
                    <a href="/tool" target="_blank" class="menu-link">
                        <i class="menu-icon far fa-tools">

                        </i>
                        <span class="site-menu-title">History</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="/topics" class="menu-link">
                        <i class="menu-icon far fa-layer-group">

                        </i>
                        <span class="menu-label">Log out</span>
                    </a>
                </li>

            </ul>
        </div>
        <div class="scrollbar-track scrollbar-track-x" style="display: none;">
            <div class="scrollbar-thumb scrollbar-thumb-x" style="width: 120px; transform: translate3d(0px, 0px, 0px);">

            </div>
        </div>
        <div class="scrollbar-track scrollbar-track-y" style="display: none;">
            <div class="scrollbar-thumb scrollbar-thumb-y" style="height: 829px; transform: translate3d(0px, 0px, 0px);">

            </div>
        </div>
    </div>



@endsection