<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Edit Desk</h1>

    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li style="color:red">{{$error}}</li>

            @endforeach
        </ul>


        @endif
    </div>

    <form method="post" action="{{route('desks.update',['desks'=>$desks])}}">
        @csrf
        @method('put')
  

     <div>
        <label>DeskNumber</label>
        <input type="integer" name="desk_number" placeholder="desk_number" value="{{$desks->desk_number}}"/>
    </div>

   

    <div>
        <input type="submit" value="Update"/>
    </div>
    </form>
</body>
</html>