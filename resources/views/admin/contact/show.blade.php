@extends('layouts.app')
@section('title', 'Message')

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
                            <h4 class="card-title ">{{ $contact->subject }}</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <strong>Nom : {{ $contact->name }}</strong><br>
                                    <b>Email : {{ $contact->email }}</b><br>
                                    <strong>Message : </strong>

                                    <p>{{ $contact->message }}</p>

                                    <p>

                                        <a href="{{ route('contact.index') }}" class="btn btn-danger">Retour</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')

@endpush
