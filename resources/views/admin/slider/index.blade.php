@extends('layouts.app')
@section('title', 'Gestion des sliders')

@push('css')
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
@endpush

@section('content')
 <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            @include('layouts.partial.messages')
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title ">Mes Slides</h4>
              <p class="card-category"> Here is a subtitle for this table</p>
              <p class="pull-right"><a href="{{ route('slider.create')}}" class="btn btn-success">Ajouter nouveau slide</a></p>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table id="table" class="table table-striped table-bordered">
                  <thead class=" text-primary">
                    <th>ID</th>
                    <th>Title</th>
                    <th>Sub Title</th>
                    <th>Created at</th>
                    <th>Actions</th>
                  </thead>
                  <tbody>
                    @foreach($sliders as $key=>$slider)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $slider->title }}</td>
                            <td>{{ $slider->sub_title }}</td>
                            <td>{{ $slider->created_at }}</td>
                            <td>
                                <a href="{{route('slider.edit', $slider->id)}}" class="btn btn-info btn-sm">
                                    <i class="material-icons">mode_edit</i>
                                </a>

                                <form id="delete-form-{{ $slider->id }}" action="{{ route('slider.destroy', $slider->id) }}" style="display: none;" method="post">
                                    @csrf
                                    @method('DELETE')
                                </form>

                                <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Êtes-vous sur')){
                                    event.preventDefault();
                                    document.getElementById('delete-form-{{ $slider->id }}').submit();
                                }
                                else{
                                        event.preventDefault();
                                    }
                                        ">
                                    <i class="material-icons">delete</i>
                                </button>
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
</div>
@endsection

@push('scripts')
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready( function () {
            $('#table').DataTable();
        });
    </script>
@endpush
