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
                            <form method="POST" action="{{route('item.store')}}" enctype="multipart/form-data">
                           {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Category ID</label>
                                            <select class='form-control' name='category_id'>
                                              @foreach($categories as $category)
                                               <option value="{{ $category->id }}"> {{ $category->name }} -> Id no: {{ $category->id }}</option>
                                                @endforeach
                                            </select>
                                           
                                        </div>
                                        <div class="form-group label-floating">
                                            <label class="control-label">Item Name</label>
                                            <input type="text" class="form-control" name="itemName">
                                        </div>
                                        <div class="form-group label-floating">
                                            <label class="control-label">Description</label>
                                            <textarea class='form-control' name='description'> </textarea>
                                        </div>
                                        <div class="form-group label-floating">
                                            <label class="control-label">Price</label>
                                            <input type="number" class="form-control" name="price">
                                        </div>	
			                             <div class="row">
			                               <div class="col-md-12">
			                                <label class="control-label">Image</label>
			                                <input type="file" name="image">
			                               </div>
			                             </div>
                                    </div>
                                </div>
                               
                                <a href="{{route('item.index')}}" class="btn btn-danger">Back</a>
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