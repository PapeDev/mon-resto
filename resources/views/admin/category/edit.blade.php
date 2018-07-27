@extends('layouts.app')

@section('title', 'Edition categorie')

@push('css')
@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @include('layouts.partial.messages')

                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Edition : {{ $category->name }}</h4>
                            <p class="card-category"> </p>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('category.update', $category->id) }}" method="post">
                                @csrf
                                @method('PUT')

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Nom de la categorie </label>
                                            <input type="text" class="form-control" name="name" value="{{ $category->name }}">
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
