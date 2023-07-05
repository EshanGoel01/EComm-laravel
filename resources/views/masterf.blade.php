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
    /* body {
    background-image: url(https://images.pexels.com/photos/1229861/pexels-photo-1229861.jpeg);
    background-repeat: no-repeat;
    background-size: cover;
    color: white;
    box-sizing: border-box;
    font-weight: bold;
} */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    /* display: flex; */
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-image: url(https://images.pexels.com/photos/1229861/pexels-photo-1229861.jpeg);
    background-repeat: no-repeat;
    background-size: cover;
    color: white;

}

.container {
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    gap: 100px 50px;
    padding: 100px 50px;
}

.container .card {
    position: relative;
    display: flex;
    justify-content: center;
    align-items: flex-start;
    width: 350px;
    max-width: 100%;
    height: 300px;
    background: rgb(209, 203, 203);
    border-radius: 20px;
    transition: 0.5s;
    box-shadow: 0 35px 80px rgba(0, 0, 0, 0.15);
}

.container .card:hover {
    height: 250px;
}

.slidingg{
background-image: url(https://images.pexels.com/photos/2182863/pexels-photo-2182863.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1);
background-repeat: no-repeat;
    background-size: cover;
    padding: 20px;
}
.trend-head
{
    text-align: center;
    margin-top: 40px;
    font-size: 60px;
    /* font-family: Verdana, Geneva, Tahoma, sans-seri; */
    /* background: #131313 */
}
.slidertext
{
    color: white;
}
.linkslide{
    text-decoration: none; 

}
.container .card .img-box {
    position: absolute;
    top: 20px;
    width: 300px;
    height: 220px;
    background: #333;
    border-radius: 12px;
    overflow: hidden;
    transition: 0.5s;
}

.container .card:hover .img-box {
    top: -100px;
    scale: 0.75;
    box-shadow: 0 15px 45px rgba(0, 0, 0, 0.2);
}

.container .card .img-box img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.container .card .content {
    position: absolute;
    top: 252px;
    width: 100%;
    height: 35px;
    padding: 0 30px;
    text-align: center;
    overflow: hidden;
    transition: 0.5s;
}

.container .card:hover .content {
    top: 130px;
    height: 250px;
}

.container .card .content h2 {
    font-size: 1.5rem;
    font-weight: 700;
    color: var(--clr);
}

.container .card .content p {
    color: #333;
}

.container .card .content a {
    position: relative;
    top: 15px;
    display: inline-block;
    padding: 12px 25px;
    text-decoration: none;
    background: var(--clr);
    color: rgb(163, 158, 158);
    font-weight: 500;
}

.container .card .content a:hover {
    opacity: 0.8;
}

@media (max-width: 480px) {
    .container .card {
        width: 230px;
        border-radius: 15px;
    }

    .container .card .img-box {
        width: 185px;
        border-radius: 10px;
    }

    .container .card .content p {
        font-size: 0.8rem;
    }

    .container .card .content a {
        font-size: 0.9rem;
    }
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
.huh{
    margin-top: 50px;
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
    background-color: rgb(136, 147, 155);
    box-shadow: 2px 1px 2px black;
    width: 500px;
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
    margin-top: 20px;
}
</style>
</html>