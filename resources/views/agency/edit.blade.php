<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<form method="post" action="{{route('agency.update',$agency->id)}}" class="form-group container">
    @csrf
    <div class="form-group">
        <label for="exampleInputEmail1">Agency Code</label>
        <input value="{{$agency->agent_code}}" type="text" class="form-control" name="agent_code"   placeholder="Enter code">

    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Agency name</label>
        <input value="{{$agency->agent_name}}" type="text" class="form-control" name="agent_name" placeholder="name">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Phone</label>
        <input value="{{$agency->phone}}" type="number" class="form-control" name="phone" placeholder="phone">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Email</label>
        <input value="{{$agency->email}}" type="email" class="form-control" name="email" placeholder="email">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Address</label>
        <input value="{{$agency->address}}" type="text" class="form-control" name="address" placeholder="Address">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Manager name</label>
        <input value="{{$agency->manager_name}}" type="text" class="form-control" name="manager_name" placeholder="Manager name">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1"  >Action status</label>
        <select name="active_status" >
            <option >Hoat dong</option>
            <option >Ngung hoat dong</option>
        </select>
    </div>

    <button type="submit" class="btn btn-success">Update</button>
</form>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>
