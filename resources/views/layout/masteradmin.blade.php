<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<style>
    .body-wrapper{
        width: 100%;
        height: 600px;
        border-right: 1px solid rgba(0, 0, 0, 0.1);
        box-sizing: border-box;
    }
    .body-wrapper .panel .aside .avatar {
        width: 55px;
        height: 55px;
        border-radius: 50%;
        background-color: white;
        margin: auto;
        margin-top: 20px;
        transition: all 0.3s cubic-bezier(0.38, -0.9, 0.5, 2.5);
    }
    .body-wrapper .panel .aside .avatar:hover {
        transform: scale(1.1);
    }
    .body-wrapper .panel .aside .avatar img {
        position: relative;
        width: 55px;
        height: 55px;
    }
    .body-wrapper .panel .aside .seperator {
        width: 80%;
        height: 1px;
        background: #7f8818;
        opacity: 0.25;
        margin: 18px auto 36px auto;
    }
    .body-wrapper .panel .aside .list .item {
        height: 23px;
        margin-bottom: 17px;
        cursor: pointer;
        margin-left: 30%;
    }
</style>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2">
            <div class="body-wrapper">
                <div class="panel">
                    <div class="aside">
                        <div class="avatar"><img src="https://66.media.tumblr.com/avatar_faa95867d2b3_128.png"/></div>
                        <div class="seperator"></div>
                        <div class="list">
                            <div id="list-example" class="list-group">
                                <a class="list-group-item list-group-item-action" href="#list-item-1">GAMBLE</a>
                                <a class="list-group-item list-group-item-action" href="#list-item-2"><i class="fas fa-shopping-cart"></i>PRODUCT</a>
                                <a class="list-group-item list-group-item-action" href="#list-item-3">CATEGORY</a>
                                <a class="list-group-item list-group-item-action" href="#list-item-4">CONTACT</a>
                            </div>
                         </div>
                </div>
            </div>
        </div>
        <div class="col-md-10"></div>
    </div>
</div>
</div>
</body>
</html>