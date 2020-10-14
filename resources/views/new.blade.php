<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>new</title>
</head>
<body>
    <h2>Insert new data</h2>
    <form method="post" action ="{{url ('insert')}}">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div>
        <label for="id" >ID:</label>
        <input type ="text" name = "id">
    </div>
    <div> 
        <label for="fname">FirstName: </label>
        <input type="text" name="fname">
    </div>

    <div> 
        <label for="lname">Lastname: </label>
        <input type="text" name="lname">
    </div>

    <button type="submit">Save</button>

    </form>
</body>
</html>