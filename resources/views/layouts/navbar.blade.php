@extends('layouts.app')
@section('nav')
    <nav class="main-nav--bg">
        <div class="container main-nav">
            @if(\Illuminate\Support\Facades\Auth::user())
                <livewire:notivications>
            @endif
            <button class="sidebar-toggle transparent-btn sidebar-toggle-mobile" title="Menu" type="button">
                <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4 18h11c.55 0 1-.45 1-1s-.45-1-1-1H4c-.55 0-1 .45-1 1s.45 1 1 1zm0-5h8c.55 0 1-.45 1-1s-.45-1-1-1H4c-.55 0-1 .45-1 1s.45 1 1 1zM3 7c0 .55.45 1 1 1h11c.55 0 1-.45 1-1s-.45-1-1-1H4c-.55 0-1 .45-1 1zm17.3 7.88L17.42 12l2.88-2.88a.996.996 0 10-1.41-1.41L15.3 11.3a.996.996 0 000 1.41l3.59 3.59c.39.39 1.02.39 1.41 0 .38-.39.39-1.03 0-1.42z" fill="#767676" fill-opacity=".5"/></svg>            </button>
            <span id="Hijri"></span>
            <div class="main-nav-end">
                @if(\Illuminate\Support\Facades\Auth::user())
                    <livewire:icon-notivications>
                    <div class="nav-user-wrapper">
                        <button class="nav-user-btn dropdown-btn" title="الملف الشخصي" type="button">
                            <span class="nav-user-img">
                                <picture><source srcset="{{asset('uploads/files/'.Auth::user()->avatar)}}" type="image/webp"><img style="width: 40px;height: 40px;object-fit: cover;"
                                        src="{{asset('uploads/files/'.Auth::user()->avatar)}}" alt="اسم المستخدم"></picture>
                              </span>
                        </button>
                        <ul class="users-item-dropdown nav-user-dropdown dropdown">
                            <li><a href="{{route('profile.index', Auth::user()->username)}}">
                                    <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path opacity="0.1" d="M17 8C17 10.7614 14.7614 13 12 13C9.23858 13 7 10.7614 7 8C7 5.23858 9.23858 3 12 3C14.7614 3 17 5.23858 17 8Z" fill="#5f5858"></path> <path d="M17 8C17 10.7614 14.7614 13 12 13C9.23858 13 7 10.7614 7 8C7 5.23858 9.23858 3 12 3C14.7614 3 17 5.23858 17 8Z" stroke="#5f5858" stroke-width="2"></path> <path d="M3 21C3.95728 17.9237 6.41998 17 12 17C17.58 17 20.0427 17.9237 21 21" stroke="#5f5858" stroke-width="2" stroke-linecap="round"></path> </g></svg>
                                    <span>الملف الشخصي</span>
                                </a></li>
                                <a class="danger" href="{{route('logout')}}">
                                    <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M2 6.5C2 4.01472 4.01472 2 6.5 2H12C14.2091 2 16 3.79086 16 6V7C16 7.55228 15.5523 8 15 8C14.4477 8 14 7.55228 14 7V6C14 4.89543 13.1046 4 12 4H6.5C5.11929 4 4 5.11929 4 6.5V17.5C4 18.8807 5.11929 20 6.5 20H12C13.1046 20 14 19.1046 14 18V17C14 16.4477 14.4477 16 15 16C15.5523 16 16 16.4477 16 17V18C16 20.2091 14.2091 22 12 22H6.5C4.01472 22 2 19.9853 2 17.5V6.5ZM18.2929 8.29289C18.6834 7.90237 19.3166 7.90237 19.7071 8.29289L22.7071 11.2929C23.0976 11.6834 23.0976 12.3166 22.7071 12.7071L19.7071 15.7071C19.3166 16.0976 18.6834 16.0976 18.2929 15.7071C17.9024 15.3166 17.9024 14.6834 18.2929 14.2929L19.5858 13L11 13C10.4477 13 10 12.5523 10 12C10 11.4477 10.4477 11 11 11L19.5858 11L18.2929 9.70711C17.9024 9.31658 17.9024 8.68342 18.2929 8.29289Z" fill="#c97e7e"></path> </g></svg>
                                    <span>تسجيل الخروج</span>
                                </a>
                            </li>
                            </form>
                        </ul>
                    </div>
                @else
                    <a href="{{route('login')}}" class="login">
                       تسجيل الدخول
                    </a>
                @endif
            </div>
        </div>
    </nav>
@endsection






