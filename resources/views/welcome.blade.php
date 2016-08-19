<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
    <body>
        <table>
            <tr>
                <td>gdfgfggfd</td>
                <td>fgsdfsdf</td>
                <td>fgsdfsdddfgsdfgf</td>
            </tr>
            @foreach($data as $dt)
            <tr>
                <td>{{ $dt->nombre_encuestador }}</td>
                <td>{{ $dt->hora_incio }}</td>
                <td>{{ $dt->fecha }}</td>
            </tr>
            @endforeach
            

        </table>
        
        <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
