@extends('layouts.app2')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add a new User</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('newUser') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                         <div class="form-group">
                            <label  class="col-md-4 control-label">Designation</label>
                             <div class="col-md-6">
                               <select name="role" class="form-control">
                               <option value="w">Wireless</option>
                               <option value="o">Operator</option>
                               <option value="a">admin</option>
                           </select>
                            </div>
                           
                        </div>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>

                    <center>
                   
            <table width="100%">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Designation</th>
                    <th>Status</th>
                   
                </tr>

                @foreach($user as $a)
                   
                    <tr>
                        
                        <td>{{$a->name}}</td>
                        <td>{{$a->email}}</td>
                        <td>
                            
                            @if($a->role == 'w')
                                Wireless
                            @elseif($a->role == 'o')
                                Operator
                            @elseif($a->role == 'a')
                                admin
                            @endif

                        </td>
                        <td>
                         <form id="u{{$a->id}}" action="{{route('updateUser')}}" method="post">
                         <div class="row">
                             <div class="col-md-6">
                                  <select name="abc" class="form-control">
                                     @if($a->status == 0)

                                    <option selected="selected" value="0">Inactive</option>
                                    <option  value="1">Activate</option>

                                     @else

                                    <option selected="selected" value="1">Active</option>
                                    <option  value="0">Dectivate</option>

                                     @endif
                                  </select>
                                   <input type="hidden" name="id" value="{{$a->id}}">
                                {{csrf_field()}}
                                
                             </div>
                             <div class="col-md-6">
                                 <button class="btn btn-primary" onclick="update(event,{{$a->id}})">Update</button>
                             </div>
                         </div>
                        </form>
                        </td>
                        <td>
                            
                        </td>
                        
                    </tr>
                     
                @endforeach
            </table>
          
        </center>

                </div>
            </div>
        </div>
    </div>

        
</div>
<script type="text/javascript">
    function update(e,a) {
        e.preventDefault();
        var c = confirm("Are You Sure to Update this user?");
        if(c == true){
            $('#u'+a).submit();
        }
    }
</script>
@endsection
