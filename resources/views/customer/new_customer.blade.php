<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Customer</title>
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
    <!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> for online sweet alert -->
    <script src="{{ asset('js/sweetalert2.all.min.js') }}"></script>
</head>

<body>
    <header>
        @include('header') <!-- Include the header file -->
    </header>
    <nav>
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ url('/new_customer') }}" id="change">New Customer</a>
        <a href="{{ url('/delivery') }}">Delivery</a>
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

    <form action="{{ url('/new_customer') }}" method="POST" id="form">
        @csrf
        <h1 align="center">Customer Details</h1>

        <table border="5px" align="center">
            <tr>
                <td><label for="name">NAME</label></td>
                <td><input type="text" name="name" id="name" autofocus></td>
            </tr>
            <tr>
                <td><label for="dia_no">Diagram NO</label></td>
                <td><input type="text" name="dia_no" id="dia_no"></td>
            </tr>
            <tr>
                <td><label for="mat">Material</label></td>
                <td>
                    <select name="mat" id="mat">
                        <option value="">Select Material</option>
                        <option value="aluminium">Aluminium</option>
                        <option value="stainless steel">Stainless Steel</option>
                        <option value="brass">Brass</option>
                        <option value="steel">Steel</option>
                        <option value="iron">Iron</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="contact">CONTACT</label></td>
                <td><input type="text" name="contact" id="contact" maxlength="10"></td>
            </tr>
            <tr>
                <td><label for="g_date">Given Date</label></td>
                <td><input type="date" name="g_date" id="g_date"></td>
            </tr>
            <tr>
                <td><label for="company">Company</label></td>
                <td><input type="text" name="company" id="company"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <center><input type="submit" value="ADD" id="insert" name="insert"></center>
                </td>
            </tr>
        </table>
    </form>

    <footer>
        @include('footer') <!-- Include the footer file -->
    </footer>
</body>

</html>