<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <title>{{ $title }}</title>
</head>
<body>
<h1>{{ $title }}</h1>
<table border="1">
    <thead>
        <tr>
            @foreach(array_keys($data[0]) as $key)
                <th>{{ $key }}</th>
            @endforeach
        </tr>
    </thead>
    <tbody>
    @foreach($data as $row)
        <tr>
            @foreach($row as $value)
                <td>{{ $value }}</td>
            @endforeach
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
