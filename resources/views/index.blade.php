<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VIEW</title>

</head>
<style>
    #change {
        background-color: #d8d8d8;
        color: rgb(37, 37, 37);
        text-decoration: none;
        transform: scale(1.1);
        transition: all 0.6s ease-in-out;
        border-right: 7px solid #727272;
        border-bottom: 5px solid #727272;
        box-shadow: 0 0 10px rgba(190, 190, 190, 0.5);
        font-weight: bold;

    }


    .input-icon-wrapper {
        position: relative;
        display: inline-block;
        width: 150%;
        min-width: 180px;
        max-width: 350px;
    }

    .input-with-icon {
        width: 100%;
        padding-right: 32px;
        box-sizing: border-box;
        height: 50px;
        font-size: 16px;
    }

    .icon-btn {
        position: absolute;
        right: 25px;
        top: 50%;
        transform: translateY(-50%);
        background: none;
        border: none;
        font-size: 18px;
        cursor: pointer;
        color: #888;
        padding: 0;
        height: 24px;
        width: 24px;
        line-height: 1;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    #sty {
        margin-left: 45%;
        padding-left: 5%;
        padding-right: 5%;
    }



    #table {
        border-collapse: collapse;
        width: 50%;
        box-shadow: 0px 0px 8px 3px #fff;
        border-radius: 5px;
        margin-bottom: 5%;
    }

    #th,
    #td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
        font-size: 18px;
        font-family: 'Arial', 'Helvetica', 'sans-serif';
        font-weight: bold;


        color: #fff;
        background-color: rgba(0, 0, 0, 0);
        backdrop-filter: blur(50px);

    }

    #th {
        background-color: rgb(48, 48, 48);
        color: white;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    }
</style>

<body>
    <header>

        @include("header")

    </header>
    <nav>
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ url('/new_customer') }}">New Customer</a>
        <a href="{{ url('/delivery') }}">Delivery</a>
        <a href="{{ url('/view') }}">Pending</a>
        <a href="{{ url('/dview') }}" id="change">Delivered </a>
    </nav>



    <footer>

        @include('footer')
    </footer>

</body>

</html>