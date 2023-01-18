@extends('layouts.dashboard_master')
@section('contant')

    {{-- <div class="content container-fluid"> --}}

        <!-- Page Header -->
        @if (session('delete'))
        <div class="alert alert-danger" >
          {{ session('delete') }}
        </div>
        @endif

        <div class="page-header">
            <div class="row">
                <div class="col-sm-7 col-auto">
                    <h3 class="page-title">Users</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active">User</li>
                    </ul>
                </div>
                <div class="col-sm-5 col">
                    <a href="{{route('add.user')}}"   class="btn btn-primary float-right mt-2">Add User</a>
                </div>
            </div>
        </div>
        <!-- /Page Header -->
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="user_id" class="display " style="width:100%">
                                <thead>
                                    <tr>
                                        <th>SI.ON</th>
                                        <th>Profile photo</th>
                                        <th>User Name</th>
                                        <th>User Email</th>
                                         <th>Account Create at</th>
                                         <th>Role</th>
                                        <th class="text-right">Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                    @foreach ($user as $users )
                    <tr>
                        <td>{{$loop->index+1}}</td>
                         <td>
                         @if ($users->profile_photo)
                                <img class="rounded-circle" src="{{asset('uploads/profile_photo/')}}/{{$users->profile_photo}}" width="50" alt="user">
                         @else
                                <img class="rounded-circle" src="{{ Avatar::create($users->name)->toBase64() }}" width="45" alt="{{$users->name}}">
                         @endif

</td>
                    <td>

                       {{$users->name}}
                    </td>
                    <td>
                        {{$users->email}}
                            </td>
                    <td>{{$users->created_at->format('d-m-y')}}</td>

                    <td>
                {{$users->role}}
                    </td>
<td>gg</td>
                </tr>
@endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{-- </div> --}}


@endsection
@section('footer_scprit')
<script>

$(document).ready( function () {
    $('#user_id').DataTable();
} );

</script>

@endsection
