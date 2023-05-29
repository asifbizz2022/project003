@extends('layouts.main')
@section('content')
<div> 
<div class="ibox w-50">
    <div class="ibox-head">
        <div class="ibox-title">Basic form</div>
        
    </div>
    <div class="ibox-body">
        <form method="post" action="{{ route('update.user') }}">
            @csrf
            @foreach($user as $row)
            <input type="hidden" name="id" value="{{$row->id}}" >
            <div class="form-group">
                <label>Name</label>
                <input class="form-control" name="name" value="{{$row->name}}" type="text" placeholder="First Name">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input class="form-control" name="email" value="{{$row->email}}" type="text" placeholder="Email address">
            </div>
            <div class="form-group">
                 <label for="password-confirm" >
                        {{ __('Select Role') }}
                    </label>
                <select name="role" id="" class="form-control">
                    <option value="1">Admin</option>
                    <option value="2">HR</option>
                    <option value="3">User</option>
                </select>   
            </div> 
            @endforeach
            <div class="form-group">
                <button class="btn btn-default" type="submit">Submit</button>
            </div>
            
        </form>
    </div>
</div>
</div>
@endsection