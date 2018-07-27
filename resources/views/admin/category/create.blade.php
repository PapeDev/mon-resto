@extends('layouts.app')

@section('title', 'Nouvelle Categorie')

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
              <h4 class="card-title ">Nouvelle categorie</h4>
              <p class="card-category"> Here is a subtitle for this table</p>
            </div>
            <div class="card-body">
              <form action="{{ route('category.store') }}" method="post">
                @csrf
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="bmd-label-floating">Nom de la categorie </label>
                      <input type="text" class="form-control" name="name">
                    </div>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary pull-right">Enregistrer</button>
                <div class="clearfix"></div>
              </form>
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
