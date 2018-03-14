            @extends('layouts.app')

            @section('title','Reservation');
            @section('css')
            <link rel="stylesheet" href="{{asset('backend/css/dataTables.bootstrap.min.css')}}">
            @endsection

            @section('content')
            <div class="content">
            <div class="container-fluid">
            <div class="row">

            <div class="col-md-12">

            @if(session('Msg'))
            <div class="alert alert-success">
            <button type="button" aria-hidden="true" class="close" onclick="this.parentElement.style.display='none'">×</button>
            <span>
            <b> Success - </b> {{ session('Msg') }}</span>
            </div>
            @endif
            <a  data-background-color="purple"href="{{route('item.create')}}"> <button type="button" class='btn btn-success'>Add New Item </button></a>
            <div class="card">

            <div class="card-header" data-background-color="purple">

            <h4 class="title">Reservation Table</h4>

            </div>
            <div class="card-content table-responsive">
            <table id="table" class="table">
            <thead class="text-primary">
            <th>Sl</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Date & Time</th>
            <th>Message</th>
            <th>Status</th>

            <th>Action</th>
            </thead>
            <tbody>
            @foreach($reservations as $key=>$reservation)
            <tr>
            <td>{{$key + 1}}</td>
            <td>{{$reservation->name}}</td>
            <td>{{$reservation->phone}}</td>
            <td>{{$reservation->email}}</td>
            <td>{{$reservation->date_and_time}}</td>
            <td>{{$reservation->message}}> </td>
            
            <td>
                @if($reservation->status==true)
                <span class='alert alert-success'> confirmed</span>
                @else
                <span class='alert alert-danger'> Not confirmed</span>
                @endif
            </td>
            <td>
            @if($reservation->status==false)
            <form id="status-form-{{ $reservation->id }}" action="{{route('reservation.confirm',$reservation->id)}}" style="display: none;">
            @csrf
            
            </form>
            <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are you sure? You want to do confirm this?')){
            event.preventDefault();
            document.getElementById('status-form-{{ $reservation->id }}').submit();
            }else {
            event.preventDefault();
            }"><i class="material-icons">done</i></button>
            @endif
            <form id="delete-form-{{ $reservation->id }}" action="{{ route('reservation.destroy',$reservation->id) }}" style="display: none;" method="POST">
            @csrf
            @method('DELETE')
            </form>
            <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are you sure? You want to delete this?')){
            event.preventDefault();
            document.getElementById('delete-form-{{ $reservation->id }}').submit();
            }else {
            event.preventDefault();
            }"><i class="material-icons">delete</i></button>
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
            @endsection

            @section('scripts')

            <script src="{{ asset('backend/js/jquery.dataTables.min.js')}}"></script>
            <script src="{{ asset('backend/js/dataTables.bootstrap.min.js')}}"></script>

            <script>
            $(document).ready(function() {
            $('#table').DataTable();
            } );
            </script>
            @endsection