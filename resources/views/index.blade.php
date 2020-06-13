<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Currencies</title>

    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>


<table class="table table-borderless table-dark">

    <thead>
    <tr class="justify-content-center">
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Value</th>
    </tr>
    </thead>
    @forelse($currencies as $currency)

        <tbody>
        <tr>
            <th scope="row">{{$loop->index+1}}</th>
            <td><a href="{{route('show',$currency)}}">
                    {{$currency->name}}</a></td>
            <td>{{$currency->value}}</td>

        </tr>

        </tbody>
    @empty
        <h5>Please update currency list</h5>
    @endforelse


</table>
<div class="row">
    {{ $currencies->links() }}
</div>
</body>
</html>
