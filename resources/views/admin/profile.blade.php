@extends('layouts.main')
@section('content') 
<div class="">
    <!-- START PAGE CONTENT-->
    <div class="page-heading">
        <h1 class="page-title">Profile</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html"><i class="la la-home font-20"></i></a>
            </li>
            
        </ol>
    </div> 
</div>
<div class="card">
    <div class="card-body">
         <div class="page-content fade-in-up">
        @foreach($result as $row)
        <div class="row">
            <div class="col-lg-3 col-md-4">
                <div class="ibox">
                    <div class="ibox-body text-center">
                        <div class=" ">
                            @if($row->image == null)
                                <img class="img-circle" src="{{ url('/') }}/assets/img/admin-avatar.png" />
                            @endif
                            @if($row->image)
                                <img class="img-circle" src="{{ $row->image }}" />
                            @endif
                            
                        </div>
                        <h5 class="font-strong m-b-10 m-t-10">{{$row->name}}</h5>
                        <div class="m-b-20 text-muted">{{$row->email}}</div>
                        
                    </div>
                </div>
               
            </div>
            <div class="col-lg-9 col-md-8">
                <div class=" " id=" ">
                <form class="update-form" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-6 form-group">
                            <label>First Name</label>
                            <input type="hidden" name="id" value="{{$row->id}}">
                            <input name="firstname" value="{{ $row->firstname }}" class="form-control" type="text" placeholder="First Name">
                        </div>
                        <div class="col-6 form-group">
                            <label>Last Name</label> 
                            <input name="lastname" value="{{ $row->lastname }}" class="form-control" type="text" placeholder="First Name">
                        </div> 
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input name="email" readonly value="{{$row->email}}" class="form-control" type="text" placeholder="Email address">
                    </div> 
                    <div class="form-group">
                        <label>Image</label>
                        <input name="image" class="form-control" type="file" placeholder="Email address">
                    </div> 
                      
                    <div class="form-group">
                        <button class="btn btn-info btn-submit" type="submit">Submit</button>
                    </div>
                </form>
            </div>
            </div>
        </div> 
        @endforeach
    </div>
    </div>
</div>
@endsection
@section('js')
<script type="text/javascript">
    $(document).ready(function(){
        $('.update-form').submit(function(e){
            e.preventDefault();
            $formdata = new FormData(this);
            $.ajax({
                url: '{{ url("update/profile") }}',
                method : 'POST', 
                data: $formdata,
                contentType :false, 
                processData: false,
                success :function(response){
                    alert('Profile Updated');
                },
                error : function(response){
                    $.each(response.responseJSON.errors, function(key, value){
                        alert(value);
                    });
                     
                }
            });
        });
    });
</script>
@endsection
 