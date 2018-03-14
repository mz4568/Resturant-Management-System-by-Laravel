@extends('layouts.app')

@section('title','Item')

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
                            <h4 class="title">Add New Item</h4>
                        </div>
                        <div class="card-content">
                            <form method="POST" action="{{route('item.update',$items->id)}}" enctype="multipart/form-data">
                           {{ csrf_field() }}
                           @method('PUT')
                               <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Category</label>
                                            <select class="form-control" name="category_id">
                                                @foreach($categories as $category)
                                                    <option {{ $category->id == $items->category->id ? 'selected' : '' }} value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Name</label>
                                            <input type="text" class="form-control" value="{{ $items->itemName }}" name="itemName">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Description</label>
                                            <textarea class="form-control" name="description">{{ $items->description }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Price</label>
                                            <input type="number" class="form-control" value="{{ $items->price }}" name="price">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label class="control-label">Image</label>
                                        <input type="file" name="image">
                                    </div>
                                </div>
                                <a href="{{ route('category.index') }}" class="btn btn-danger">Back</a>
                                <button type="submit" class="btn btn-primary">Save</button>
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