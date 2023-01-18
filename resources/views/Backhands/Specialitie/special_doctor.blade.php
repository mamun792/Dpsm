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
                    <h3 class="page-title">Specialities</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Specialities</li>
                    </ul>
                </div>
                <div class="col-sm-5 col">
                    <a href="{{route('add')}}"  class="btn btn-primary float-right mt-2">Add</a>
                </div>
            </div>
        </div>
        <!-- /Page Header -->
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="special_id" class="display " style="width:100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Specialities</th>
                                         <th>Create at</th>
                                         <th>Update at</th>
                                        <th class="text-right">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
@foreach ($speci as $specist )
<tr>
    <td>{{$specist->SI}}</td>

    <td>
        <h2 class="table-avatar">
            <a href="profile.html" class="avatar avatar-sm mr-2">

                <img class="avatar-img" src="{{asset('uploads/special_photp/')}}/{{$specist->category_photo}}" alt="Speciality">
            </a>
            <a href="profile.html">{{$specist->special}}</a>
        </h2>
    </td>
    <td>{{$specist->created_at->format('d-m-y')}}</td>
    <td>
           @if ($specist->updated_at)
           {{$specist->updated_at->diffForHumans() }}
           @else
           <span class="badge badge-danger">Not Update Yet</span>
           @endif
    </td>
    <td class="text-right">
        <div class="actions">

            <a class="btn btn-sm bg-success-light" href="{{url('special/update')}}/{{$specist->id}}">
                <i class="fe fe-pencil"></i> Edit
            </a>
           <button value="{{url('special/delete')}}/{{$specist->id}}" class="btn btn-sm btn-danger speical_sweetalert" >
               <i class="fe fe-trash"></i> Delete
           </button>

        </div>
    </td>
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
        $(document).ready(function(){
         $('#special_id').DataTable();

$('#special_id').on('click','.speical_sweetalert',function(){

    var link=$(this).val();
        Swal.fire({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#d33',
          cancelButtonColor: '#3085d6',
          confirmButtonText: 'Delete it!'
        }).then((result) => {
     if (result.isConfirmed) {
         window.location.href=link;
     }
    })
  });

        });
</script>

@endsection
