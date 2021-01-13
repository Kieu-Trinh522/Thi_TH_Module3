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
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{route('agency.index')}}">Home <span class="sr-only">(current)</span></a>


        </ul>
        <form method="post" class="form-inline my-2 my-lg-0" action="{{route('agency.search')}}">
            @csrf
            <input name="keyword" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>
<form>

    <div class="container-fluid">
        <div class="card-header">
            <i class="fas fa-table mr-1"></i>
            List Agency
            <a href="{{route('agency.store')}}" class="btn btn-success">Add</a>

        </div>
        <div class="card-body">
            <div class="table">

                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>STT</th>
                        <th>Agency code</th>
                        <th>Agency name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Manager name</th>
                        <th>Action status</th>
                        <th>Action</th>

                        <th></th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($agencies as $key => $agency)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>
                                {{ $agency->agent_code }}

                            </td>
                            {{--                    @dd($playlist->singer->singer_name)--}}
                            <td>{{ $agency->agent_name }}</td>
                            <td>{{ $agency->phone }}</td>
                            <td>{{ $agency->email }}</td>
                            <td>{{ $agency->address }}</td>
                            <td>
                                {{$agency->manager_name}}
                            </td>
                            <td>
                                {{$agency->active_status}}
                            </td>

                            <td>
                                <a href="{{route('agency.edit',$agency->id)}}" class="btn btn-success">Edit</a>
                                <a href="{{route('agency.delete',$agency->id)}}"
                                   class="btn btn-danger"
                                   onclick="return confirm('Do you delete?')">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>

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
