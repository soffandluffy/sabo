@extends('admin.layouts.app')

@section('main')

<div class="section section-data-tables">
	<div class="card ml-1 mr-1">
		<div class="card-content">
			<div class="row">
				<div class="col l12">
					<table id="page-length-option" class="display">
	                <thead>
	                  <tr>
	                    <th>Name</th>
	                    <th>Username</th>
	                    <th>Email</th>
	                    <th>Action</th>
	                  </tr>
	                </thead>
	                <tbody>
	                	@foreach($user as $list)
	                	<tr>
	                		<td>{{$list->name}}</td>
	                		<td>{{$list->username}}</td>
	                		<td>{{$list->email}}</td>
	                		<td class="width-10">
	                			<!-- START EDIT MENU -->
	                			<a href="#modalEditUser{{$list->id}}" class="btn yellow darken-2 waves-effect waves-dark modal-trigger tooltipped" data-position="bottom" data-tooltip="Edit"><i class="material-icons">edit</i></a>
                    <div id="modalEditUser{{$list->id}}" class="modal border-radius-6" aria-preventScrolling="true">
                        <div class="modal-content">
                          <h5 class="mt-0">
                            Edit User
                          </h5>
                          <form method="POST" action="{{ route('user.update', $list->id) }}">
                            @csrf
                            <div class="row">
                              <div class="input-field col s12 m12 l12">
                                <i class="material-icons prefix">title </i>
                                <input id="name" type="text" name="name" class="validate" value="{{$list->name}}">
                                <label for="name">Name</label>
                              </div>
                            </div>
                            <div class="row">
                              <div class="input-field col s12 m12 l12">
                                <i class="material-icons prefix">title </i>
                                <input id="username" type="text" name="username" class="validate" value="{{$list->username}}">
                                <label for="username">Username</label>
                              </div>
                            </div>
                            <div class="row">
                              <div class="input-field col s12 m12 l12">
                                <i class="material-icons prefix">title </i>
                                <input id="email" type="text" name="email" class="validate" value="{{$list->email}}">
                                <label for="email">Email</label>
                              </div>
                            </div>
                            <div class="modal-footer">
                              <div class="row">
                                <div class="col s12 m12 l12">
                                  <a href="#!" class="modal-action modal-close waves-effect waves-light btn red lighten-1">Cancel
                                  </a>
                                  <button class="btn green lighten-1 waves-effect waves-light" type="submit" name="action">Save</button>
                                </div>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                      <!-- END EDIT MENU -->
	                			<a href="#delete{{$list->id}}" class="btn red lighten-1 btnItem waves-effect waves-dark modal-trigger tooltipped" data-position="bottom" data-tooltip="Delete"><i class="material-icons">delete</i></a>
<!-- START Modal Delete Confirmation -->
<div class="modal border-radius-6" id="delete{{$list->id}}">
    <div class="modal-content pb-1 pt-2">
      <h5>Are you sure you want to delete this user?</h5>
    </div>
    <div class="modal-footer p-0 deletefooter">
      <form id="deleteItem" method="POST" action="{{route('user.delete', $list->id)}}" class="right mr-1">
        @csrf
        <button type="submit" class="btn green lighten-1 waves-effect waves-light btn-delete-confirm">Delete</button>
      </form>
      <a href="#!" class="modal-action modal-close waves-effect waves-light btn red lighten-1 mr-1">No
      </a>
    </div>
</div>
<!-- END Modal Delete Confirmation -->
	                		</td>
	                	</tr>
	                	@endforeach
	                </tbody>
	                <tfoot>
	                  <tr>
	                    <th>Name</th>
	                    <th>Username</th>
	                    <th>Email</th>
	                    <th>Acvtion</th>
	                  </tr>
	                </tfoot>
	              </table>
				</div>
			</div>
		</div>
	</div>
</div>

@stop

@section('script')

<script type="text/javascript">
	
	$(document).ready(function(){

	    $('#page-length-option').DataTable({
		    "responsive": true,
		    "lengthMenu": [
		      [10, 25, 50, -1],
		      [10, 25, 50, "All"]
		    ]
		  });

	    $('.modal').modal();

	});

</script>

@stop