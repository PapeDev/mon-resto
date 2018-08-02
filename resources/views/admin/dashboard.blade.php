@extends('layouts.app')

@section('title', 'Tableau de bord')

@push('css')

@endpush


@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                <div class="card-icon">
                    <i class="material-icons">content_copy</i>
                </div>
                <p class="card-category">Categorie / Produit</p>
                <h3 class="card-title">{{ $categoryCount }} / {{ $itemCount }}
                    <small>elts</small>
                </h3>
                </div>
                <div class="card-footer">
                <div class="stats">
                    <i class="material-icons text-danger">warning</i>
                    <a href="#pablo">Total Categories et Produits</a>
                </div>
                </div>
            </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                <div class="card-icon">
                    <i class="material-icons">slideshow</i>
                </div>
                <p class="card-category">Sliders</p>
                <h3 class="card-title">{{ $sliderCount }}</h3>
                </div>
                <div class="card-footer">
                <div class="stats">
                    <i class="material-icons">date_range</i> <a href="{{ route('slider.index') }}">Voir le détail</a>
                </div>
                </div>
            </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                <div class="card-icon">
                    <i class="material-icons">info_outline</i>
                </div>
                <p class="card-category">Reservation</p>
                <h3 class="card-title">{{ $reservations->count() }}</h3>
                </div>
                <div class="card-footer">
                <div class="stats">
                    <i class="material-icons">local_offer</i> <a href="{{ route('reservation.index') }}">Réservations non confirmées</a>
                </div>
                </div>
            </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                <div class="card-icon">
                    <i class="fa fa-newspaper-o"></i>
                </div>
                <p class="card-category">Messages</p>
                <h3 class="card-title">{{ $contactCount }}</h3>
                </div>
                <div class="card-footer">
                <div class="stats">
                    <i class="material-icons">message</i> <a href="{{ route('contact.index') }}">Voir le détail</a>
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