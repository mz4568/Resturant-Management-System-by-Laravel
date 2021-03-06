@extends('layouts.app')

@section('title','Category')

@push('css')

@endpush

		@section('content')
		    <div class="content">
		      <div class="container-fluid">
	            <div class="row">
                 <div class="col-md-12">

			                     @if(count($errors)>0)
								<div class='alert alert-danger col-md-6 col-md-offset-2'>
								<strong> Errors:</strong>
								 @foreach($errors->all() as $error)

								  {{ $error }}
								  @endforeach

								</div>
					            @endif
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">Add New Category</h4>
                        </div>
                        <div class="card-content">
                            <form method="POST" action="{{route('category.update',$categories->id)}}">
                           {{ csrf_field() }}
                           @method('PUT')
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Name</label>
                                            <input type="text" class="form-control" name="name" value="{{ $categories->name }}">
                                        </div>
                                    </div>
                                </div>
                               
                                <a href="{{route('category.index')}}" class="btn btn-danger">Back</a>
                                <button type="submit" class="btn btn-primary">Send</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')

@endpush