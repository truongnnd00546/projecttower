<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/master.css')}}">
    <link rel="stylesheet" href="{{asset('js/master.js')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="sidebar">
    <div class="sidebar__sections">
        <ul>
            <li><a href="#">
                    <i class="fas fa-user-astronaut fa-3x"></i>
                    ADMIN</a></li>
            <li><a href="#">
                    <i class="fas fa-paperclip fa-3x"></i>
                    PAGES</a></li>
            <li><a href="#">
                    <i class="fas fa-map-marker-alt fa-3x"></i>
                    DESTINATIONS</a>
            </li>
            <li><a href="#">
                    <i class="fas fa-book fa-3x"></i>
                    BLOG</a></li>
            <li><a href="#">
                    <i class="fas fa-bus-alt fa-3x"></i>
                    TRAVEL SHOWS</a></li>
        </ul>
    </div>
    <div class="sidebar__subsections">
        <div class="sidebar__subsections-brand">Admin 1.0</div>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="/product/create">Form</a></li>
            <li><a href="/product">List</a></li>
            <li><a href="#">Showcase</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </div>
</div>
<div class="page">

    <div class="header">
        <div class="header__search">
            <input type="text" placeholder="Search..." />
        </div>
        <div class="header__date">
            <span id="date"></span>
        </div>
        <div class="header__user">
            Hello, Admin <svg class="lnr lnr-cog icon"><use xlink:href="#lnr-cog"></use></svg>
        </div>
    </div>

    <div class="content">
        <div class="title" id="title-bar">
            <div class="title__text">
                <span>TEAM</span>
                <h1>GAMBLE</h1>
            </div>
            <div class="title__extras">
                <svg class="lnr lnr-star icon"><use xlink:href="#lnr-star"></use></svg> Featured post
            </div>
        </div>
        @section('main')
            @show()
    </div>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>