<!doctype html>
<html lang="en">
  <head>
    <title>Udpate</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    @if (Session::has('msg'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{ Session::get('msg')}}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
      <h1 class="text-center">CRUD Application</h1>
      <div class="container-fluid">
        <a name="" id="" class="btn btn-primary" href="{{asset('/show')}}" role="button">Show Form</a>
        <form action="/update_data_page/{{$data->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method("put")
            <div class="form-group">
                <label for="">Enter Your Name</label>
                <input type="text" class="form-control @error('name')is-invalid @enderror" name="name" value="{{$data->name}}" aria-describedby="emailHelpId" placeholder="">
                <small id="emailHelpId" class="text-danger">@error('name'){{$message}} @enderror</small>
              </div>
              <div class="form-group">
                <label for="">Enter Your Last Name</label>
                <input type="text" class="form-control @error('lname')is-invalid @enderror" name="lname" value="{{$data->lname}}" aria-describedby="emailHelpId" placeholder="">
                <small id="emailHelpId" class="text-danger">@error('lname'){{$message}} @enderror</small>
              </div>
              <div class="form-group">
                <label for="">Enter Your Phone Number</label>
                <input type="number" class="form-control @error('pnumber')is-invalid @enderror" name="pnumber" value="{{$data->pnumber}}" aria-describedby="emailHelpId" placeholder="">
                <small id="emailHelpId" class="text-danger">@error('pnumber') {{$message}} @enderror</small>
              </div>
              <div class="form-group">
                <label for="">Enter Your Email</label>
                <input type="email" class="form-control @error('email')is-invalid @enderror" name="email" value="{{$data->email}}" aria-describedby="emailHelpId" placeholder="">
                <small id="emailHelpId" class="text-danger">@error('email') {{$message}} @enderror</small>
              </div>
              <div class="form-group">
                  <label for="">Select Your Image</label>
                  <input type="file" class="form-control-file @error('image')is-invalid @enderror" name="image"" accept="image/png, image/jpeg" placeholder="" aria-describedby="fileHelpId">
                  <small id="emailHelpId" class="text-danger">@error('image') {{$message}} @enderror</small>
                </div>
                <div class="form-group">
                  <label for="">Enter Slug</label>
                  <input type="text" class="form-control @error('slug')is-invalid @enderror" name="slug" value="{{$data->slug}}" aria-describedby="emailHelpId" placeholder="">
                  <small id="emailHelpId" class="text-danger">@error('slug') {{$message}} @enderror</small>
                </div>
                <input type="hidden" name="old_image" value="{{$data->image}}">
                <div class="form-group">
                    <button class="btn btn-primary">Update</button>
                </div>
        </form>
        
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>