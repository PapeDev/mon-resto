@extends('layouts.app')

@section('title', 'Slider')

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
              <h4 class="card-title ">Nouveau slide</h4>
              <p class="card-category"> Here is a subtitle for this table</p>
            </div>
            <div class="card-body">
              <form action="{{ route('slider.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="bmd-label-floating">Titre </label>
                      <input type="text" class="form-control" name="title">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="bmd-label-floating">Sous-titre </label>
                      <input type="text" class="form-control" name="sub_title">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <label class="control-label">Image</label>
                      <input type="file" name="image">
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
