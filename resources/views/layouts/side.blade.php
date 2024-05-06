@extends('layouts.navbar')
@section('sidebar')
    <aside class="sidebar">
        <div class="sidebar-start">
            <div class="sidebar-head">
                <a href="{{route('dashboard')}}" class="logo-wrapper" title="الرئيسية">
                    <img src="{{asset('uploads/files/default/site-logo.png')}}">
                </a>
                <button class="sidebar-toggle mobile transparent-btn" title="Menu" type="button">
                    <svg width="24px" height="24px" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4 18h11c.55 0 1-.45 1-1s-.45-1-1-1H4c-.55 0-1 .45-1 1s.45 1 1 1zm0-5h8c.55 0 1-.45 1-1s-.45-1-1-1H4c-.55 0-1 .45-1 1s.45 1 1 1zM3 7c0 .55.45 1 1 1h11c.55 0 1-.45 1-1s-.45-1-1-1H4c-.55 0-1 .45-1 1zm17.3 7.88L17.42 12l2.88-2.88a.996.996 0 10-1.41-1.41L15.3 11.3a.996.996 0 000 1.41l3.59 3.59c.39.39 1.02.39 1.41 0 .38-.39.39-1.03 0-1.42z" fill="#fff"/></svg>
                </button>
                <button class="sidebar-toggle mobile-btn transparent-btn" title="Menu" type="button">
                    <svg width="24px" height="24px" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4 18h11c.55 0 1-.45 1-1s-.45-1-1-1H4c-.55 0-1 .45-1 1s.45 1 1 1zm0-5h8c.55 0 1-.45 1-1s-.45-1-1-1H4c-.55 0-1 .45-1 1s.45 1 1 1zM3 7c0 .55.45 1 1 1h11c.55 0 1-.45 1-1s-.45-1-1-1H4c-.55 0-1 .45-1 1zm17.3 7.88L17.42 12l2.88-2.88a.996.996 0 10-1.41-1.41L15.3 11.3a.996.996 0 000 1.41l3.59 3.59c.39.39 1.02.39 1.41 0 .38-.39.39-1.03 0-1.42z" fill="#fff"/></svg>
                </button>
            </div>
            <div class="sidebar-body">
                <ul class="sidebar-body-menu">
                    <li>
                        <a class="{{ (request()->routeIs('dashboard') ? 'active' : '' )}}"  href="{{route('dashboard')}}">
                            <span class="icon home" aria-hidden="true"></span>
                            <span>الرئيسية</span>
                        </a>
                    </li>
                    @if(\Illuminate\Support\Facades\Auth::check())
                        @if(Auth::user()->role !== 'مدير الموقع' && Auth::user()->role !== 'رئيس' && Auth::user()->role !== 'منسق')
                        <li>
                            <a class="show-cat-btn {{ (request()->routeIs('club.profile') ? 'active' : '' )}}" href="{{route('club.profile', str_replace(' ', '-', Auth::user()->ClubStatus->slug))}}">
                                <span class="icon clubUser" aria-hidden="true"></span>
                                <span>{{Str::limit(Auth::user()->ClubStatus->name, 15 , '..')}}</span>
                            </a>
                        </li>
                        @endif
                    @endif
                    @can('viewPost', App\Models\User::class)
                    <li>
                        <a class="show-cat-btn {{ (request()->routeIs('posts.index') ? 'active' : '' )}}" href="{{route('posts.index')}}">
                            <span class="icon article" aria-hidden="true"></span>
                            <span>المنشورات</span>
                        </a>
                    </li>
                    @endcan
                    @can('viewActivity', App\Models\User::class)
                    <li>
                        <a class="show-cat-btn {{ (request()->routeIs('reservations.index') ? 'active' : '' )}}" href="{{route('reservations.index')}}">
                            <span class="icon activities" aria-hidden="true"></span>
                            <span>الفعاليات</span>
                        </a>
                    </li>
                    @endcan
                    <li>
                        <a class="show-cat-btn {{ (request()->routeIs('clubs.index') ? 'active' : '' )}}" href="{{route('clubs.index')}}">
                            <span class="icon club" aria-hidden="true"></span>
                            <span>الأندية</span>
                        </a>
                    </li>
                    <li>
                        <a class="show-cat-btn {{ (request()->routeIs('orders.index') ? 'active' : '' )}}" href="{{route('orders.index')}}">
                            <span class="icon contact" aria-hidden="true"></span>
                            <span>نظام تواصل</span>
                        </a>
                    </li>
                    @can('view', App\Models\User::class)
                    <li>
                        <a class="show-cat-btn {{ (request()->routeIs('users.index') ? 'active' : '' )}}" href="{{route('users.index')}}">
                            <span class="icon user" aria-hidden="true"></span>
                            <span>الطلاب</span>
                        </a>
                    </li>
                    @endcan
                    @can('viewCertificate', App\Models\User::class)
                    <li>
                        <a class="show-cat-btn {{ (request()->routeIs('certificates.index') ? 'active' : '' )}}" href="{{route('certificates.index')}}">
                            <span class="icon certificate" aria-hidden="true"></span>
                            <span>الشهادات</span>
                        </a>
                    </li>
                    @endcan
                    @can('viewReport', App\Models\User::class)
                    <li>
                        <a class="show-cat-btn {{ (request()->routeIs('reports.index') ? 'active' : '' )}}" href="{{route('reports.index')}}">
                            <span class="icon reports" aria-hidden="true"></span>
                            <span>التقارير</span>
                        </a>
                    </li>
                    @endcan
                    @can('viewTool', App\Models\User::class)
                        <li>
                            <a class="show-cat-btn {{ (request()->routeIs('reports.clubs') ? 'active' : '' )}}" href="{{route('reports.clubs')}}">
                                <span class="icon reports" aria-hidden="true"></span>
                                <span>تقارير الأندية</span>
                            </a>
                        </li>
                    @endcan
                    <li>
                        <a class="show-cat-btn {{ (request()->routeIs('attends.index') ? 'active' : '' )}}" href="{{route('attends.index')}}">
                            <span class="icon attendees" aria-hidden="true"></span>
                            <span>التحضير</span>
                        </a>
                    </li>
                    @can('viewAward', App\Models\User::class)
                    <li>
                        <a class="show-cat-btn {{ (request()->routeIs('awards.index') ? 'active' : '' )}}" href="{{route('awards.index')}}">
                            <span class="icon award" aria-hidden="true"></span>
                            <span>الجوائز</span>
                        </a>
                    </li>
                    @endcan
                    @can('viewTool', App\Models\User::class)
                    <li>
                        <a class="show-cat-btn {{ (request()->routeIs('tools.index') ? 'active' : '' )}}" href="{{route('tools.index')}}">
                            <span class="icon tools" aria-hidden="true"></span>
                            <span>الأدوات</span>
                        </a>
                    </li>
                    @endcan
                    <li>
                        <a class="show-cat-btn {{ (request()->routeIs('results') ? 'active' : '' )}}" href="{{route('results')}}">
                            <span class="icon winner" aria-hidden="true"></span>
                            <span>نتائج الأندية</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        @auth()
            <div class="sidebar-footer">
                <a href="{{route('profile.index', Auth::user()->username)}}" class="sidebar-user">
                    <span class="sidebar-user-img">
                        <img style="width: 40px;height: 40px;object-fit: cover;" src="{{asset('uploads/files/'.Auth::user()->avatar)}}" alt="User name"></picture>
                    </span>
                    <div class="sidebar-user-info">
                        <span class="sidebar-user__title">{{Str::limit(Auth::user()->name, 15, '..')}}</span>
                        @if(Auth::user()->role !== 'مدير الموقع' && Auth::user()->role !== 'رئيس' && Auth::user()->role !== 'منسق')
                            <span class="sidebar-user__subtitle">{{Str::limit(Auth::user()->ClubStatus->name, 15, '..')}}</span>
                        @else
                            <span class="sidebar-user__subtitle">{{Auth::user()->role}}</span>
                        @endif
                    </div>
                </a>
            </div>
        @endauth
    </aside>
@endsection
