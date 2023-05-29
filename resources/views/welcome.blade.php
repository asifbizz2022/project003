<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css') }}">
    <title>Document</title>
</head>
<body class="container-fluid">
    @if(Session::has('message'))
    <div>
        {{ Session::get('message')}}
    </div>
    @endif 
   
    <section>
        <div class="card">
            <div class="card-body">
            <form action="{{ url('upload') }}" method="post" enctype="multipart/form-data">
            @csrf
            <label for="">Name</label><br>  
            <input type="name" name="name" class="form-control form-sm" placeholder="Image Name" >

            <br>

            <label for="">Path</label><br>  
            <input type="file" name="image" class="form-control form-sm" id="">

            <br>
            <br>
            <button type="submit" class="btn btn-sm btn-info">Upload</button>
        </form>
            </div>
        </div>
    </section>


    <div class="container ">
        <div class="card">
            <div class="card-header">
                <h2>Simple QR Code</h2>
            </div>
            <div class="card-body">
                {!! QrCode::size(300)->generate('email') !!}
            </div>
        </div>
       
    </div>

</body>
</html>