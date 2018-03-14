@extends('layouts.app')

@section('title','Slider')

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
                            <h4 class="title">Add New Slider</h4>
                        </div>
                        <div class="card-content">
                            <form method="POST" action="{{route('slider.store')}}" enctype="multipart/form-data">
                           {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Title</label>
                                            <input type="text" class="form-control" name="title">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Sub Title</label>
                                            <input type="text" class="form-control" name="sub_title">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label class="control-label">Image</label>
                                        <input type="file" name="image">
                                    </div>
                                </div>
                                <a href="" class="btn btn-danger">Back</a>
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