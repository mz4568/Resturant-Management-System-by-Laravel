@extends('layouts.app')

@section('title','Category');

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
                	<a  data-background-color="purple"href="{{route('category.create')}}"> <button type="button" class='btn btn-success'>Add New Category </button></a>
                    <div class="card">
                    
                        <div class="card-header" data-background-color="purple">

                            <h4 class="title">Category Table</h4>
                            
                        </div>
                        <div class="card-content table-responsive">
                            <table class="table">
                                <thead class="text-primary">
                                <th>Sl</th>
                                <th>Name</th>
                                <th>Slug</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Action</th>
                                </thead>
                                <tbody>
                                	@foreach($categories as $key=>$category)
                                <tr>
                                    <td>{{$key + 1}}</td>
                                    <td>{{$category->name}}</td>
                                    <td>{{$category->slug}}</td>
                                    <td>{{$category->created_at}}</td>
                                    <td>{{$category->updated_at}}</td>
                                    <td><a href="{{route('category.edit',$category->id)}}" class="btn btn-primary btn-sm"><i class="material-icons">mode_edit</i></a>
                                    <form id="delete-form-{{ $category->id }}" action="{{ route('category.destroy',$category->id) }}" style="display: none;" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                    </form>
                                                <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are you sure? You want to delete this?')){
                                                    event.preventDefault();
                                                    document.getElementById('delete-form-{{ $category->id }}').submit();
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