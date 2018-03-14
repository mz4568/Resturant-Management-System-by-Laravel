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
                            <h4 class="title">Update contact</h4>
                        </div>
                        <div class="card-content">
                            <form method="POST" action="{{route('contact.update',$contact->id)}}">
                           {{ csrf_field() }}
                           @method('PUT')
                               
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Name</label>
                                            <input type="text" class="form-control" value="{{ $contact->name }}" name="name">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Email</label>
                                            <input type="email" class="form-control" value="{{ $contact->email }}" name="email">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Subject</label>
                                            <input type="text" class="form-control" value="{{ $contact->subject }}" name="subject">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">message</label>
                                            <textarea class="form-control" name="message">{{ $contact->message }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                

                        <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
                            <div class="text-center">
                                <button type="submit" id="submit" name="submit" class="btn btn-send">Send </button>
                            </div>
                        </div>
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