<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Currency</title>

    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

<a href="{{route('index')}}" style="color: #1b1e21">Back</a>

<table class="table table-borderless table-dark">
    <thead>
    <tr class="justify-content-center">
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Value</th>
        <th scope="col">Date</th>
    </tr>
    </thead>
    @foreach($currencies as $currency)

        <tbody>
        <tr>
            <th scope="row">{{$loop->index+1}}</th>
            <td>{{$currency->name}}</td>
            <td>{{$currency->value}}</td>
            <td>{{$currency->date}}</td>
        </tr>

        </tbody>
    @endforeach


</table>


</body>
</html>
