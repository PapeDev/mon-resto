@extends('layouts.app')
@section('title', 'Gestion des reservations')

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
                            <h4 class="card-title ">Reservations</h4>
                            <p class="card-category"> Here is a subtitle for this table</p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="table" class="table table-striped table-bordered">
                                    <thead class=" text-primary">
                                    <th>ID</th>
                                    <th>Nom</th>
                                    <th>Telephone</th>
                                    <th>Email</th>
                                    <th>Date et Heure</th>
                                    <th>Statut</th>
                                    <th>Actions</th>
                                    </thead>
                                    <tbody>
                                    @foreach($reservations as $key=>$reservation)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $reservation->name }}</td>
                                            <td>{{ $reservation->phone }}</td>
                                            <td>{{ $reservation->email }}</td>
                                            <td>{{ $reservation->date_and_time }}</td>
                                            <td>
                                                @if($reservation->status == true)
                                                    <span class="badge badge-info">Confirmé</span>
                                                @else
                                                    <span class="badge badge-danger">Pas encore confirmé</span>
                                                @endif
                                            </td>
                                            <td>

                                                @if($reservation->status == false)
                                                    <form id="status-form-{{ $reservation->id }}" action="{{ route('reservation.status', $reservation->id) }}" style="display: none;" method="post">
                                                        @csrf
                                                    </form>

                                                    <button type="button" class="btn btn-info btn-sm" onclick="if(confirm('Êtes-vous sûr de confirmer cette réservation ?')){
                                                            event.preventDefault();
                                                            document.getElementById('status-form-{{ $reservation->id }}').submit();
                                                            }
                                                            else{
                                                            event.preventDefault();
                                                            }
                                                            ">
                                                        <i class="material-icons">done</i>
                                                    </button>
                                                @endif

                                                <form id="delete-form-{{ $reservation->id }}" action="{{ route('reservation.destroy', $reservation->id) }}" style="display: none;" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>

                                                <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Êtes-vous sur')){
                                                        event.preventDefault();
                                                        document.getElementById('delete-form-{{ $reservation->id }}').submit();
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
