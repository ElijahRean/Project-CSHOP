@extends('layouts.admin')

<nav class="navbar navbar-expand navbar-light">

    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('admin.products.index') }}" class="nav-link">Product list</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">User list</a>
        </li>
    </ul>

    <div class="py-12 ml-5">
        <div class="p-6 bg-white border-b border-gray-200">
            You are in Admin panel
        </div>

    </div>

    <ul class="navbar-nav ml-auto">

        <li class="nav-item">
            <div class="navbar-search-block" id="navbar-search1">
                <form class="form-inline">
                    <div class="input-group input-group-sm">
                        <input class="form-control form-control-navbar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-navbar" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                            <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </li>

    </ul>
</nav>
