<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Revenue</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="{{url('./assets/vendors/themify-icons/css/themify-icons.css')}}">
        
        
</head>

<body>
    {{-- <div class="container">
        <h1 class="mt-5">Revenue</h1>
        <p>Total Revenue: {{ $totalRevenue }}</p>
        <table class="table table-hover mt-4">
            <thead class="thead-light">
                <tr>
                    <th scope="col">Customer Number</th>
                    <th scope="col">Amount Paid</th>
                    <th scope="col">Month</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($revenueByCustomer as $customer)
                <tr>
                    <td>{{ $customer->num }}</td>
                    <td>{{ $customer->total }}</td>
                    <td></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <table class="table table-hover mt-4">
            <thead class="thead-light">
                <tr>
                    <th scope="col">Month</th>
                    <th scope="col">Total Revenue</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($revenueByMonth as $month)
                <tr>
                    <td>{{ $month->month }}</td>
                    <td>{{ $month->total }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div> --}}
    <div class="col-md-4 col-sm-6 col-xs-12 " style="margin-top:100px;"><nav>
        <a href="/directeur" class="btn btn-primary" style="font-size:2em"><i class="ti-arrow-left"></i></a>
        </nav></div>
    <div class="container">
        <h1 class="mt-5">Revenue</h1>
        <p>Total Revenue: {{ $totalRevenue }}</p>
        <table class="table table-hover mt-4">
            <thead class="thead-light">
                <tr>
                    <th scope="col">Client</th>
                    <th scope="col">Paiement</th>
                    <th scope="col">Mois</th>
                    <th scope="col">Total </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($revenueByCustomer as $customer)
                    @foreach ($revenueByMonth as $month)
                        @if ($month->month == $customer->month)
                        <tr>
                            <td>{{ $customer->customer_number }}</td>
                            <td>{{ $customer->total }}</td>
                            <td>{{ $month->month }}</td>
                            <td>{{ $month->total }}</td>
                        </tr>
                        @endif
                    @endforeach
                @endforeach
            </tbody>
        </table>
    </div>
    

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abKfaslvr/oNlC/xhJh0eQOm9ZXlIZjuQUY6iGksdQRVvox"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>
