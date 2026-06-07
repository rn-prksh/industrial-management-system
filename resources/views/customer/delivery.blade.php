<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href='css/style.css'>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delivery</title>
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

        .swal-title-custom {
            color: rgb(255, 255, 255) !important;
            /* Title color */
        }

        .swal-text-custom {
            color: rgb(192, 192, 192) !important;
            /* Message text color */
        }
    </style>
    <!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> for online sweetalert -->
    <script src="{{ asset('js/sweetalert2.all.min.js') }}"></script>
</head>

<body>
    <header>
        @include('header') <!-- Include the header file -->
    </header>
    <nav>
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ url('/new_customer') }}">New Customer</a>
        <a href="{{ url('/delivery') }}" id="change">Delivery</a>
        <a href="{{ url('/view') }}">Pending</a>
        <a href="{{ url('/dview') }}">Delivered </a>
    </nav>
    @if (session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Success',
            text: "{{ session('success') }}",
            confirmButtonColor: '#3085d6',
            background: '#252525',
            customClass: {
                title: 'swal-title-custom',
                popup: 'swal-popup-custom',
                htmlContainer: 'swal-text-custom'
            }
        });
    </script>
    @endif

    <form action="{{ url('/delivery') }}" method="POST" id="form">
        @csrf
        <h1 align="center">Customer Details</h1>

        <table border="5px" align="center">
            <tr>
                <td><label for="dia_no">Diagram NO</label></td>
                <td><input type="text" name="dia_no" id="dia_no" autofocus></td>
            </tr>
            <tr>
                <td><label for="r_name">Receiver Name</label></td>
                <td><input type="text" name="r_name" id="r_name"></td>
            </tr>
            <tr>
                <td><label for="r_contact">Contact</label></td>
                <td><input type="text" name="r_contact" id="r_contact"></td>
            </tr>
            <tr>
                <td><label for="company">Company</label></td>
                <td><input type="text" name="company" id="company"></td>
            </tr>

            <tr>
                <td><label for="r_date">Received Date</label></td>
                <td><input type="date" name="r_date" id="r_date"></td>
            </tr>
            <tr>
                <td><label for="time_r">Time</label></td>
                <td><input type="time" name="time_r" id="time_r"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <center><input type="submit" value="DELIVER" id="insert" name="delete"></center>
                </td>
            </tr>
        </table>
    </form>

    <footer>
        @include('footer') <!-- Include the footer file -->
    </footer>
</body>

</html>