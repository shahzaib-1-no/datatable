<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
</head>
  <body>
    @if (Session::has('msg'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{ Session::get('msg')}}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
      <h1 class="text-center">Show Rsult</h1>
      <a name="" id="" class="btn btn-primary" href="{{asset('/')}}" role="button">Add form</a>
      <div class="container-fluid">
    <table class="table table-striped" id="table">
        @php
            $count="";
        @endphp
        <thead>
            <tr>
                <th>Sno</th>
                <th>img</th>
                <th>Name</th>
                <th>Last Name</th>
                <th>Phone Number</th>
                <th>Email</th>
                <th>Slug</th>
                <th>Action</th>
            </tr>
        </thead>
        @foreach ($data as $key=> $value )
            @php
                $count++;
            @endphp
            <tbody>
                <tr>
                    <td>{{$count}}</td>
                    <td><img src="{{ asset('images/'.$value->image) }}" style="width: 50px; height:50px;" alt=""></td>
                    <td>{{ $value->name }}</td>
                    <td>{{ $value->lname }}</td>
                    <td>{{ $value->pnumber }}</td>
                    <td>{{ $value->email }}</td>
                    <td>{{ $value->slug }}</td>
                    <td>
                        <a name="" id="" class="btn btn-success" href="{{url('update',$value->id)}}" role="button">Update</a>
                        <a name="" id="" class="btn btn-danger" href="{{url('delete',$value->id)}}" onclick="return confirm ('Are Your Sure You Want To Delete {{$value->name}}')" role="button">Delete</a>
                    </td>
                </tbody>
                </tr>
                @endforeach
    </table>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
        $('#table').DataTable();
    } );
</script>
</body>
</html>