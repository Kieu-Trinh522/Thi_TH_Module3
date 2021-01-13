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
<form method="post" action="{{route('agency.store')}}" class="container">
    @csrf
    <div class="form-group">
        <label for="exampleInputEmail1">Agency Code</label>
        <input type="text" class="form-control" name="agent_code"   placeholder="Enter code" required>
        @if ($errors->has('agent_code'))
            <span class="help-block">
                                        <strong>{{ $errors->first('agent_code') }}</strong>
                                    </span>
        @endif

    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Agency name</label>
        <input  type="text" class="form-control" name="agent_name" placeholder="name" required >
        @if ($errors->has('agent_name'))
            <span class="help-block">
                                        <strong>{{ $errors->first('agent_name') }}</strong>
                                    </span>
        @endif
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Phone</label>
        <input type="number" class="form-control" name="phone" placeholder="phone" required>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Email</label>
        <input type="email" class="form-control" name="email" placeholder="email" >
        @if ($errors->has('email'))
            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
        @endif
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Address</label>
        <input type="text" class="form-control" name="address" placeholder="Address" required>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Manager name</label>
        <input type="text" class="form-control" name="manager_name" placeholder="Manager name" required>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1" >Action status</label>
        <select name="active_status">
            <option >Hoat dong</option>
            <option >Ngung hoat dong</option>
        </select>
    </div>

    <button type="submit" class="btn btn-success">Add</button>
    <a class="btn btn-primary" href="{{route('agency.index')}}">Huy</a>
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
