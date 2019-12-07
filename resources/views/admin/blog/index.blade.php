@extends('admin.layouts.app')

@section('main')

<div class="row">
  <div id="breadcrumbs-wrapper" data-image="{{ asset('images/gallery/breadcrumb-bg.jpg') }}">
    <!-- Search for small screen-->
    <div class="container">
      <div class="row">
        <div class="col s12 m6 l6">
          <h5 class="breadcrumbs-title mt-0 mb-0">Blog List</h5>
        </div>
        <div class="col s12 m6 l6 right-align-md">
          <ol class="breadcrumbs mb-0">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a>
            </li>
            <li class="breadcrumb-item"><a href="{{ route('blog.index') }}">Blog</a>
            </li>
            <li class="breadcrumb-item"><a href="#">List</a>
            </li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <div class="col s12 m12 l12">
      <div class="section pb-0 pt-0">
        <div class="card border-radius-6 mt-1 mb-1">
          <div class="card-content pl-0 pr-0 pt-1 pb-1">
            <div class="row">
              <div class="col s12 m12 l12">
                <div style="bottom: 60px; right: 19px;" class="fixed-action-btn direction-top">
                  <a class="btn-floating btn-large gradient-45deg-purple-deep-purple gradient-shadow modal-trigger" href="{{ route('blog.add') }}"><i class="material-icons">add</i></a>
                </div>
              </div>
              <div class="col s12 m12 l12">
                <div class="col s12 m12 l12">
                  <table class="highlight responsive-table">
                    <thead>
                      <tr>
                        <th>Image</th>
                        <th>Article Name</th>
                        <!-- <th>News Category</th> -->
                        <th>Status</th>
                        <th class="center width-20">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($articlelist as $article)
                        <tr>
                          <td><img class="materialboxed" src="../../images/" width="128" height="72"></td>
                          <td class="tdOverflow">{{ $article->name }}</td>
                          <!-- <td>{category->name }}</td> -->
                          <td>{{ $article->status }}</td>
                          <td>
                            <a href="{ route('', $article->id) }}" class="btn btnItem waves-effect waves-dark tooltipped" data-position="bottom" data-tooltip="Preview"><i class="material-icons">pageview</i></a>
                            @if ($article->status == "Draft")
                              <form action="{ route('.publish', id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                <button type="submit" class="btn btnItem waves-effect waves-dark tooltipped" data-position="bottom" data-tooltip="Publish"><i class="material-icons">publish</i></button>
                              </form>
                            @else
                              <form action="{ route('.draft', id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                <button type="submit" class="btn btnItem waves-effect waves-dark tooltipped" data-position="bottom" data-tooltip="Draft"><i class="material-icons">drafts</i></button>
                              </form>
                            @endif
                            <a href="{ route('.edit', id) }}" class="btn yellow darken-2 btnItem waves-effect waves-dark tooltipped" data-position="bottom" data-tooltip="Edit"><i class="material-icons">edit</i></a>
                            <a href="#delete{->id}}" class="btn red lighten-1 btnItem waves-effect waves-dark modal-trigger tooltipped" data-position="bottom" data-tooltip="Delete"><i class="material-icons">delete</i></a>
<!-- START Modal Delete Confirmation -->
<div class="modal border-radius-6" id="delete{->id}}">
    <div class="modal-content pb-1 pt-2">
      <h5>Are you sure you want to delete this ?</h5>
    </div>
    <div class="modal-footer p-0 deletefooter">
      <form id="deleteItem" method="POST" action="{route('.delete', id)}" class="right mr-1">
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
                </table>
                {{ $articlelist->links('vendor.pagination.materialize') }}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
</div>

@endsection

@section('script')
  <script type="text/javascript">
      $(document).ready(function() {

        $('.materialboxed').materialbox();

        $('.modal').modal();
        $('.tooltipped').tooltip();
        
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

      });
  </script>
@stop