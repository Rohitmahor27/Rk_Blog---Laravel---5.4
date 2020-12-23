@extends('admin.b_layouts.master')

@section('title','Dashboard')

@section('content')

<div class="col-lg-6">
	<div class="card">
	    <div class="card-header">
	        <strong class="card-title">Profile Update</strong>
	    </div>
	    <div class="card-body">
	        <!-- Credit Card -->
	        <div id="pay-invoice">
	            <div class="card-body">
	                <div class="card-title">
	                    <h3 class="text-center">Profile Update Form</h3>
	                </div>
	                <hr>
	                <form action="{{url('/admin/profile/'.$profileDetails->id)}}" method="post" enctype="multipart/form-data">
	                	{{csrf_field()}}
	                    <div class="form-group text-center">
	                    	<input type="hidden" name="current_image" value="{{$profileDetails->image}}"> 
	                        <img id="output" src="{{url('/upload/profile/'.$profileDetails->image)}}" width="150px" height="150px" style="border-radius: 100%"><br><br>

	                        <p><input type="file"  accept="image/*" name="image" id="file"  onchange="loadFile(event)" style="display: none;"></p>
	                        <p><label for="file" style="cursor: pointer;">Change Profile Pic</label></p>

	                        <script>
	                        var loadFile = function(event) {
	                        	var image = document.getElementById('output');
	                        	image.src = URL.createObjectURL(event.target.files[0]);
	                        };
	                        </script>
	                    </div>
	                    <div class="form-group">
	                        <label for="title" class="control-label mb-1">Title</label>
	                        <input id="title" name="title" type="text" class="form-control" value="{{$profileDetails->title}}">
	                    </div>
	                    <div class="form-group">
	                        <label for="description" class="control-label mb-1">Description</label>
	                        <textarea id="description" name="description" class="form-control">{{$profileDetails->description}}</textarea>
	                    </div>
	                        <div class="row">
	                            <div class="col-12">
	                                <div class="form-group">
	                                    <label for="facebook" class="control-label mb-1">Facebook</label>
	                                    <input id="facebook" name="facebook" type="text" class="form-control" value="{{$profileDetails->facebook}}">
	                                </div>
	                            </div>
	                            <div class="col-6">
	                                <div class="form-group">
	                                    <label for="instagram" class="control-label mb-1">Instagram</label>
	                                    <input id="instagram" name="instagram" type="text" class="form-control" value="{{$profileDetails->instagram}}">
	                                </div>
	                            </div>
	                            <div class="col-6">
	                                <div class="form-group">
	                                    <label for="twitter" class="control-label mb-1">Twitter</label>
	                                    <input id="twitter" name="twitter" type="text" class="form-control" value="{{$profileDetails->twitter}}">
	                                </div>
	                            </div>
	                            <div class="col-6">
	                                <div class="form-group">
	                                    <label for="linkedin" class="control-label mb-1">Linked IN</label>
	                                    <input id="linkedin" name="linkedin" type="text" class="form-control" value="{{$profileDetails->linkedin}}">
	                                </div>
	                            </div>
	                            <div class="col-6">
	                                <div class="form-group">
	                                    <label for="github" class="control-label mb-1">GitHub</label>
	                                    <input id="github" name="github" type="text" class="form-control" value="{{$profileDetails->github}}">
	                                </div>
	                            </div>
	                        </div>
	                        <div>
	                            <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
	                                <i class="fa fa-pencil fa-lg"></i>&nbsp;
	                                <span id="payment-button-amount">Update</span>
	                                <span id="payment-button-sending" style="display:none;">Sending…</span>
	                            </button>
	                        </div>
	                </form>
	            </div>
	        </div>

	    </div>
	</div> <!-- .card -->
</div>

@endsection