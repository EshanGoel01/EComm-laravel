<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    {{ View::make('header') }}
    @yield('content')
    {{ View::make('footer') }}

</body>
<style>
    body {
    background-image: url(https://images.pexels.com/photos/1229861/pexels-photo-1229861.jpeg);
    background-repeat: no-repeat;
    background-size: cover;
    color: white;
    box-sizing: border-box;
    font-weight: bold;
}
    .custom-login {
    width: 55%;
    padding: 50px;
    margin: 106px auto;
    border-radius: 25px;
    background-color: rgba(41, 39, 39, 0.3);
    box-shadow: 0 5px 30px black;
}
.customer-login {
    padding: 50px;
    border-radius: 25px;
    background-color: rgba(41, 39, 39, 0.3);
    box-shadow: 0 5px 30px black;
}
.login-form{
    padding: 7px;
    margin: 9px auto;
    font-size: 18px;
}
.login-form input {
    padding: 5px;
    text-align: center;
    display: inline;
    font-family: Sen, sans-serif;
    border-radius: 8px;
    font-size: 18px;
    background-color: rgb(205, 227, 242);
    box-shadow: 2px 1px 2px black;

}
img.slider-img{
    height:400px !important;
}
img.trend-img{
    height:110px !important;
}
img.detail-img{
    height:350px !important;
}
.search-box{
    width:500px;
}
.cart-list-divider{
    margin-bottom: 30px;
}
</style>
</html>