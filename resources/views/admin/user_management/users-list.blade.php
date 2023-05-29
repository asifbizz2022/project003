@extends('layouts.main')
@section('content')
<div class="mt-4">
    @if(Session::has('message'))
    <p class='alert alert-success'>
        {{ Session::get('message') }}
    </p>
    @endif
</div>
<div class="ibox mt-3">
    <div class="ibox-head">
        <div class="ibox-title">Uses List</div>
    </div>
    <div class="ibox-body px-0 mx-0">
        <table class="table table-striped table-bordered table-hover"  id=
        "table" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>Action</th> 
                    <th>#</th>  
                    <th>Name</th>
                    <th>Email</th> 
                   
                </tr>
            </thead>
           
        </table>
    </div>
</div>
 
@endsection
@section('js')
<script type="text/javascript">
    $(document).ready(function(){  

       
        $table = $('.table').DataTable({
            "processing": true, 
            "paging": true,

            ajax  : {
                url : '{{ url("get/user/data") }}',
                type : 'GET',
                dataType : 'json',   

            },

            columns: [
                  {data : { data: ''},
                render: function(data, type){ 
                
                $row = '<button class="btn btn-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog"></i></button>';
                 
                $row += '<div class="dropdown-menu   " >';
                $row += '<a class="dropdown-item delete" href="javascript:void(0)"  ><i class="fa fa-trash mr-1"></i>Delete</a>';
                $row += '<a class="dropdown-item edit"  ><i class="fa fa-edit mr-1"></i>Edit</a>';
                $row += '<a class="dropdown-item view"  ><i class="fa fa-eye mr-1"></i>View</a>';
                // $row += '<a class="dropdown-item hide-show" href="javascript:void(0)" code="'+data.p_id+'"><i class="fa fa-eye-slash mr-1"></i>Hide/Show</a>'; 
                $row += ' </div>'; 
                 
                return $row;
                }
            } , 

                
                {data : 'id'},
                {data : 'name'},
                {data : 'email'},

            ]
        });

        $(document).on('click','.reload',function(){
           
                $table.ajax.reload(); 
        });
         

    });
</script>
@endsection