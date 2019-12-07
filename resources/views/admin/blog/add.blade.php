@extends('admin.layouts.app')

@section('main')

<div class="row">
  	<div id="breadcrumbs-wrapper" data-image="{{ asset('images/gallery/breadcrumb-bg.jpg') }}">
	    <!-- Search for small screen-->
	    <div class="container">
	      <div class="row">
	        <div class="col s12 m6 l6">
	          <h5 class="breadcrumbs-title mt-0 mb-0">Add Article</h5>
	        </div>
	        <div class="col s12 m6 l6 right-align-md">
	          <ol class="breadcrumbs mb-0">
	            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a>
	            </li>
	            <li class="breadcrumb-item"><a href="{{ route('blog.index') }}">Blog</a>
	            </li>
	            <li class="breadcrumb-item"><a href="#">Add</a>
	            </li>
	          </ol>
	        </div>
	      </div>
	    </div>
  	</div>
  	<div class="col s12 m12 l12">
      <div class="section pb-0 pt-0">
        <div class="card border-radius-6 cardAdd">
          	<div class="card-content">
	            <div class="row">
	              	<div class="col s12 m12 l12">
	              		<form method="POST" action="{{ route('blog.index') }}" enctype="multipart/form-data">
		              		@csrf
		              		<div class="row">
			              		<div class="col s12 m12 l12">
			              			<label>Header Image</label>
			              		</div>
			              		<div class="input-field col s12 m12 l12">
							      <input type="file" name="imageurl" id="input-file-now" class="dropify"/>
							    </div>
			              	</div>
			              	<div class="row">
			              		<div class="input-field col s12 m6 l6">
					              	<input type="text" name="name" id="name" class="validate" required>
					            	<label for="name">Article Name</label>
				              	</div>
				              	<div class="input-field col s12 m6 l6">
					                <select name="news_category" id="category">
					                	<option value="" disabled selected>Choose Category</option>
					                	
					                </select>
					                <label for="category">News Category</label>
				              	</div>
			              	</div>
			              	<div class="row">
			              		<div class="col s12 m12 l12">
			              			<label>News Content</label>
			              		</div>
			              		<div class="col s12 m12 l12">
			              			<textarea id="kcontent" name="kcontent"></textarea>
			              		</div>
			              	</div>
			              	<div class="row">
			              		<div class="col s12 m12 l12 mt-2">
			              			<button class="btn deep-purple accent-2 waves-effect waves-light right" type="submit" name="action">Add
	                  				</button>
			              			<a href="{{ route('blog.index') }}" class="btn red lighten-1 waves-effect waves-light right mr-1">Cancel
	                  				</a>
			              		</div>
			              	</div>
		              	</form>
	              	</div>
	            </div>
          	</div>
        </div>
      </div>
  	</div>
</div>

@stop

@section('script')
  <script type="text/javascript">
      $(document).ready(function() {

      	@if (session()->has('success'))
            Swal.fire({
              title : 'Success',
              text : '{{session()->get("success")}}',
              type : 'success'
            });
        @elseif ($errors->any())
          Swal.fire({
            title : 'Oops..',
            type : 'error',
            text : '{{ $errors->first() }}'
          });
        @endif

      	$('.dropify').dropify();

        tinymce.init({
		    selector: '#kcontent',
		    plugins: [
		    'advlist autolink lists link image charmap print preview anchor textcolor',
		    'searchreplace visualblocks code fullscreen',
		    'insertdatetime media table paste code help wordcount'
		    ],
		    toolbar: 'undo redo | formatselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help',
		    height : 500,

		});

      });
  </script>
@stop
