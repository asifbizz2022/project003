@extends('layouts.main')
@section('content')
<div>
    <h5>Title</h5>
</div>
<div class="ibox">
    <div class="ibox-head">
        <div class="ibox-title">Data Table</div>
    </div>
    <div class="ibox-body px-0 mx-0">
        <table class="table table-striped table-bordered table-hover"  id=
        "table" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>Action</th>
                    <th>Name</th>
                    <th>Email</th> 
                </tr>
            </thead> 
        </table>
    </div>
</div>
<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>
 -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">View Profile</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="">
            <!-- START PAGE CONTENT-->
            
            <div class="page-content fade-in-up">
                <div class="row">
                    <div class="col-lg-3 col-md-4">
                        <div class="ibox">
                            <div class="ibox-body text-center">
                                <div class="m-t-20">
                                    <img class="img-circle profile-image" src="{{url('/')}}/assets/img/users/u3.jpg" />
                                </div>
                                <h5 class="font-strong m-b-10 m-t-10">Frank Cruz</h5>
                                <div class="m-b-20 text-muted">Web Developer</div>
                                
                            </div>
                        </div>
                       
                    </div>
                    <div class="col-lg-9 col-md-8">
                        <form class="update-form" enctype="multipart/form-data">@csrf
                        <div class="profile-form" id=" ">
                                             
                        </div>
                        <div class="form-group"> 
                            <button class="btn btn-default update-form-btn" type="button">Submit</button> 
                        </div> 
                        </form>
                    </div>
                </div> 
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
@endsection
@section('js')
<script type="text/javascript">
    $(document).ready(function(){

        $('#table').DataTable({
            "processing": true, 
            "paging": true,

            
            ajax : {
                url : '{{ url("user/data") }}',
                type : 'GET',
                dataType : 'json',
            },

            columns : [
                {data : { data: ''},
                    render: function(data, type){ 
                    
                     
                    
                    $row = '<a href="#" class="btn btn-info btn-sm edit" code="'+data.id+'" ><i class="fa fa-edit mr-1"></i>Edit</a>';
                    
                     
                    return $row;
                    }
                } , 
                
                {data : 'name'},
                {data : 'email'},

            ]
        });

        $(document).on('click','.edit', function(){
            $id = $(this).attr('code');
             $('.profile-form').empty();
            
            
            $.ajax({
                'url': '{{ url("edit/profile") }}'+'/'+$id,
                'method': 'GET',
                'data': {'id': $id},

                success : function(response){
                    $.each(response, function(key , value){ 

                    $('.profile-image').append(value.email);      
                   
                        $row +='<div class="row">';
                        $row += '<div class="col form-group">\
                                    <label>First Name</label>\
                                    <input name="name" class="form-control" type="text" value="'+value.name+'" placeholder="Name">\
                                </div>'; 
                        $row += '</div>';

                        $row += '<div class="form-group">\
                                    <label>Email</label>\
                                    <input name="email" value="'+value.email+'" class="form-control" type="text" placeholder="Email address">\
                                </div>';

                        $row += '<div class="form-group">\
                                    <label>Password</label>\
                                    <input type="file" name="image" class="form-control" type="password" placeholder="Image">\
                                </div>';  
                     
                    });
                   
                    
                    $('.profile-form').append($row);

                     $('.modal').modal('show');

                },
                error : function(response){
                    
                }
            });
        });

        $(document).on('click', '.update-form-btn', function(){
            alert($('update-form').serialize());
        });
    });
</script>
@endsection