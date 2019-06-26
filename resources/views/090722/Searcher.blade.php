<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Search</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

     
    </head>
    <body>
        <div class="container">
            <form action="/search" method="post" role="search">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="input-group">
                    <input type="text" class="form-control" name="q" 
                           placeholder="Search"><span class="input-group-btn">
                    <button type="submit" class="btn btn-default">
                        <span class="=glyphicon glyphicon-search"></span></button></span>
                </div>
            </form></div>
        <div class="container">
            <table>
        <thead>
            <tr>
                <th>Amount</th>
                <th>Full_Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $FeePayment)
            <tr>
            <td>{{$FeePayment->Amount}}</td>
            <td>{{$FeePayment->Full_Name}}</td>
                @endforeach
            </tr>
                </tbody>
            </table>
    </div>
    </body>
</html>
            