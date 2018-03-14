@extends('layouts.app')

@section('title','Item');
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

                            <h4 class="title">Category Table</h4>
                            
                        </div>
                        <div class="card-content table-responsive">
                            <table id="table" class="table">
                                <thead class="text-primary">
                                <th>Sl</th>
                                <th>Item Name</th>
                                <th>Category Name</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Image</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Action</th>
                                </thead>
                                <tbody>
                                	@foreach($items as $key=>$item)
                                <tr>
                                    <td>{{$key + 1}}</td>
                                    <td>{{$item->itemName}}</td>
                                    <td>{{$item->category->name}}</td>
                                    <td>{{$item->description}}</td>
                                    <td>{{$item->price}}</td>
                                    <td><img class="thumbnail" src="{{ asset('images/' . $item->image) }}" height='100px' width='150px'> </td>
                                    <td>{{$item->created_at}}</td>
                                    <td>{{$item->updated_at}}</td>
                                    <td><a href="{{route('item.edit',$item->id)}}" class="btn btn-primary btn-sm"><i class="material-icons">mode_edit</i></a>
                                    <form id="delete-form-{{ $item->id }}" action="{{ route('item.destroy',$item->id) }}" style="display: none;" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                    </form>
                                                <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are you sure? You want to delete this?')){
                                                    event.preventDefault();
                                                    document.getElementById('delete-form-{{ $item->id }}').submit();
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