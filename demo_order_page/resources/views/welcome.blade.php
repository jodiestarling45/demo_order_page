<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>Laravel</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
            integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
<form action="{{route('searchingBystatus')}}">
    <div class="form-group">
        {{ csrf_field() }}
        <input type="text"  name="search" id="search" class="form-control"
               placeholder="Search Customer Data"/>
        <input type="submit">
    </div>
</form>
status :
<form action="{{route('status')}}">
    <select name="status" id="status" class="status">
        <option value=""></option>
        <option value="1">available</option>
        <option value="2">not available</option>
    </select>
    <input type="submit">
</form>
<table class="table table-dark" id="tableShow">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">nameCustomer</th>
        <th scope="col">productName</th>
        <th scope="col">phone</th>
        <th scope="col">email</th>
        <th scope="col">status</th>
    </tr>
    </thead>
    <tbody>
    @if($data)
        @foreach($data as $key => $order )
            <tr>
                <td>{{$order->id}}</td>
                <td>{{$order->nameCustomer}}</td>
                <td>{{$order->productName}}</td>
                <td>{{$order->phone}}</td>
                <td>{{$order->email}}</td>
                <td>{{$order->status}}</td>
            </tr>
        @endforeach
    @endif
    </tbody>

    <div id="txtHint"></div>
</table>
<script type="text/javascript">
</script>
</body>
</html>

