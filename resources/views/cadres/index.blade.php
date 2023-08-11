@extends('adminlte::page')

@section('plugins.Datatables', true)

@section('title')
Liste des cadres - Service 
@endsection

@section('content_header')
<h1> Liste des cadres</h1>
@endsection

@section('content')

<div class="container">
 <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="row my-5">
                <div class="col-md-10 mx-auto">
                </div>
            </div
             <div class="card my-3">
                <div class="card-header">
                    <h3 class="text-center font-weight-bold text-uppercase">
                        Cadres
                    </h3>
                </div>
                <div class="card-body">
                    <table id="myTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nom</th>
                                <th>Role</th>
                                <th>Service</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cadres as $key => $cadre)
                                <tr>
                                    <td>{{$key+=1}}</td>
                                    <td>{{$cadre->name}}</td>
                                    <td>{{$cadre->service}}</td>
                                    <td>{{$cadre->role}}</td>
                                    <td>{{$cadre->email}}</td>

                                    <td class="d-flex justify-content-center align-items-center">
                                        <a href="{{route('cadres.show' , $cadre->id_cadre)}}"
                                            class="btn btn-sm btn-primary">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="{{route('cadres.edit' , $cadre->id_cadre)}}"
                                            class="btn btn-sm btn-warning mx-2">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form id="{{$cadre->id_cadre}}" action="{{route('cadres.destroy' , $cadre->id_cadre)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                        <button onclick="deleteAd({{$cadre->id_cadre}})"
                                            type="submit" class="btn btn-sm btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
 ws≈                       </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('css')

@stop

@section('js')
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'pdf', 'print', 'colvis'
                ]
            });
        });
    </script>
    @if(session()->has("success"))
        <script>
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: "{{session()->get('success')}}",
                showConfirmButton: false,
                timer: 3500
            });
        </script>
    @endif
    <script>
        function deleteAd(id){
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'btn btn-danger mr-2'
                },
                buttonsStyling: false
                })

                swalWithBootstrapButtons.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Yes, delete it!',
                    cancelButtonText: 'No, cancel!',
                    reverseButtons: true
                }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById(id).submit();
                } else if (
                    /* Read more about handling dismissals below */
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons.fire(
                        'Cancelled',
                        'Your ad is safe :)',
                        'error'
                    )
                }
                })
        }
    </script>
@stop