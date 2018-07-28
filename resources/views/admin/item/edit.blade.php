@extends('layouts.app')

@section('title', 'Nouveau produit')

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
                            <h4 class="card-title ">Edition produit</h4>
                            <p class="card-category"> Here is a subtitle for this table</p>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('item.update', $item->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating"> Categorie</label>
                                            <select name="category" id="category" class="form-control">
                                                @foreach($categories as $key=>$category)
                                                    <option {{ $category->id == $item->category->id ? 'selected' : '' }} value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Nom du produit </label>
                                            <input type="text" class="form-control" name="name" value="{{ $item->name }}">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Prix </label>
                                            <input type="number" class="form-control" name="price" value="{{ $item->price }}">
                                        </div>

                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating"> Petite resume du produit</label>
                                            <textarea class="form-control" rows="5" name="description">{{ $item->description }}</textarea>
                                        </div>
                                    </div>
                                </div>


                                <br>
                                <br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="control-label">Image</label>
                                        <input type="file" name="image">
                                    </div>
                                    <div class="col-md-6">
                                        <img style="width: 100%;" src="{{ asset('uploads/item/'. $item->image) }}" alt="">
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
