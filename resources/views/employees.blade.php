<!DOCTYPE html>
<html>
    <head><title>Employees</title></head>
    <body>
        @foreach($employees as $employee)
        <p>{{$employee['name']}}</p>
        @endforeach
    </body>
</html>