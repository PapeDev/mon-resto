@extends('layouts.app')

@section('title', 'Edition Slide')

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
                            <h4 class="card-title ">Edition : {{ $slider->title }}</h4>
                            <p class="card-category"> {{ $slider->sub_title }}</p>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('slider.update', $slider->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Titre </label>
                                            <input type="text" class="form-control" name="title" value="{{ $slider->title }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Sous-titre </label>
                                            <input type="text" class="form-control" name="sub_title" value="{{ $slider->sub_title }}">
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
