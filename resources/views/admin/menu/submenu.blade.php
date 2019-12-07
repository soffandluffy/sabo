@extends('admin.layouts.app')

@section('main')

<div class="row">
  <div id="breadcrumbs-wrapper" data-image="{{ asset('images/gallery/breadcrumb-bg.jpg') }}">
    <!-- Search for small screen-->
    <div class="container">
      <div class="row">
        <div class="col s12 m6 l6">
          <h5 class="breadcrumbs-title mt-0 mb-0">Manage Menu</h5>
        </div>
        <div class="col s12 m6 l6 right-align-md">
          <ol class="breadcrumbs mb-0">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('menu.index') }}">Menu</a></li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <div class="col s12 m12 l12">
      <div class="card">
        <div class="card-content pl-0 pt-0 pr-0">
          <div class="row pt-0">
            <div class="col s12 m12 l6 xl6 pt-0 pl-1">
              <ul class="collection with-header mt-0 pt-0 pl-0 z-depth-1">
                <li class="collection-header">
                  <div class="row">
                    <div class="col s8 m8 l8 xl8">
                      <h4>Menu List</h4>
                    </div>
                    <div class="col s4 m4 l4 xl4 pr-0 pt-5">
                      <a href="#modalAddMenu" class="btn right modal-trigger">Add</a>
                    </div>
                    @include('admin.dashboard.adminmenu.menu.add')
                  </div>
                </li>
                @foreach($menus->where('parent_id', null)->sortBy('order') as $parent)
                  @if($parent->url != '#')
                  <li class="collection-item pr-1">
                    <div>{{ $parent->name }}
                      <span class="badge blue ml-1 pl-0 pr-0 tooltipped" data-position="right" data-tooltip="Submenu">0</span>
                      <!-- START ADD SUBMENU -->
                      <a href="#modalAddSubMenu{{$parent->id}}" class="secondary-content modal-trigger">
                        <i class="material-icons deep-purple-text tooltipped" data-position="top" data-tooltip="Add Submenu">add</i>
                      </a>
                      <div id="modalAddSubMenu{{$parent->id}}" class="modal border-radius-6" aria-preventScrolling="true">
                        <div class="modal-content">
                          <h5 class="mt-0">
                            Add New SubMenu for {{ $parent->name }} Menu
                          </h5>
                          <form method="POST" action="{{ route('menu.addsubmenu') }}">
                            @csrf
                            <input type="number" name="parent_id" hidden value="{{$parent->id}}">
                            <div class="row">
                              <div class="input-field col s12 m12 l12">
                                <i class="material-icons prefix">title </i>
                                <input id="name" type="text" name="name" class="validate">
                                <label for="name">Name</label>
                              </div>
                            </div>
                            <div class="modal-footer">
                              <div class="row">
                                <div class="col s12 m12 l12">
                                  <a href="#!" class="modal-action modal-close waves-effect waves-light btn red lighten-1">Cancel<i class="material-icons right">cancel</i></a>
                                  <button class="btn waves-effect waves-light" type="submit" name="action">Add<i class="material-icons right">menu</i></button>
                                </div>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                      <!-- END ADD SUBMENU -->
                      <!-- START DELETE MENU -->
                      <a href="#modalDeleteConfirm{{$parent->id}}" class="secondary-content modal-trigger">
                        <i class="material-icons red-text tooltipped" data-position="bottom" data-tooltip="Delete">delete</i>
                      </a>
                      <div class="modal border-radius-6" id="modalDeleteConfirm{{$parent->id}}">
                        <div class="modal-content pb-1 pt-2">
                          <h5>Are you sure you want to delete this menu?</h5>
                        </div>
                        <div class="modal-footer">
                          <form id="modalDelete" method="POST" action="{{route('menu.delete', $parent->id)}}" class="right mr-1">
                            @csrf
                            <button type="submit" class="btn green lighten-1 waves-effect waves-light btn-delete-confirm">Delete</button>
                          </form>
                          <a href="#!" class="modal-action modal-close waves-effect waves-light btn red lighten-1 mr-1">No
                          </a>
                        </div>
                      </div>
                      <!-- END DELETE MENU -->
                      <!-- START EDIT MENU -->
                      <a href="#modalEditMenu{{$parent->id}}" class="secondary-content modal-trigger">
                        <i class="material-icons green-text tooltipped" data-position="left" data-tooltip="Edit">edit</i>
                      </a>
                      <div id="modalEditMenu{{$parent->id}}" class="modal border-radius-6" aria-preventScrolling="true">
                        <div class="modal-content">
                          <h5 class="mt-0">
                            Edit Menu
                          </h5>
                          <form method="POST" action="{{ route('menu.update', $parent->id) }}">
                            @csrf
                            <div class="row">
                              <div class="input-field col s12 m12 l12">
                                <i class="material-icons prefix">title </i>
                                <input id="name" type="text" name="name" class="validate" value="{{$parent->name}}">
                                <label for="name">Name</label>
                              </div>
                            </div>
                            <div class="modal-footer">
                              <div class="row">
                                <div class="col s12 m12 l12">
                                  <a href="#!" class="modal-action modal-close waves-effect waves-light btn red lighten-1">Cancel<i class="material-icons right">cancel</i>
                                  </a>
                                  <button class="btn waves-effect waves-light" type="submit" name="action">Save<i class="material-icons right">menu</i></button>
                                </div>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                      <!-- END EDIT MENU -->
                      @if($parent->order == count($menus->where('parent_id', null)))
                      <a class="secondary-content">
                        <i class="material-icons grey-text">arrow_downward</i>
                      </a>
                      @else
                      <a href="javascript:$('#downform{{$parent->id}}').submit();" class="secondary-content">
                        <i class="material-icons tooltipped" data-position="bottom" data-tooltip="Move Down">arrow_downward</i>
                      </a>
                      <form id="downform{{$parent->id}}" action="{{route('menu.movedown', $parent->id)}}" method="POST" hidden>
                        @csrf
                        <input type="number" name="order" value="{{$parent->order}}" hidden>
                      </form>
                      @endif
                      @if($parent->order == 1)
                      <a class="secondary-content">
                        <i class="material-icons grey-text">arrow_upward</i>
                      </a>
                      @elseif($parent->order != 1)
                      <a href="javascript:$('#upform{{$parent->id}}').submit();" class="secondary-content">
                        <i class="material-icons tooltipped" data-position="top" data-tooltip="Move Up" id="upward">arrow_upward</i>
                      </a>
                      <form id="upform{{$parent->id}}" action="{{route('menu.moveup', $parent->id)}}" method="POST" hidden>
                        @csrf
                        <input type="number" name="order" value="{{$parent->order}}">
                      </form>
                      @endif
                    </div>
                  </li>
                  @else
                  @php
                    $count = $menus->where('parent_id', $parent->id)->count();
                  @endphp
                  <li class="collection-item pr-1">
                    <div>{{ $parent->name }}
                      <a href="{{ route('menu.submenu', $parent->id) }}"><span class="badge blue ml-1 pl-0 pr-0 tooltipped" data-position="right" data-tooltip="Submenu">{{$count}}</span></a>
                      <!-- START ADD SUBMENU -->
                      <a href="#modalAddSubMenu{{$parent->id}}" class="secondary-content modal-trigger">
                        <i class="material-icons deep-purple-text tooltipped" data-position="top" data-tooltip="Add Submenu">add</i>
                      </a>
                      <div id="modalAddSubMenu{{$parent->id}}" class="modal border-radius-6" aria-preventScrolling="true">
                        <div class="modal-content">
                          <h5 class="mt-0">
                            Add New SubMenu for {{ $parent->name }} Menu
                          </h5>
                          <form method="POST" action="{{ route('menu.addsubmenu') }}">
                            @csrf
                            <input type="number" name="parent_id" hidden value="{{$parent->id}}">
                            <div class="row">
                              <div class="input-field col s12 m12 l12">
                                <i class="material-icons prefix">title </i>
                                <input id="name" type="text" name="name" class="validate">
                                <label for="name">Name</label>
                              </div>
                            </div>
                            <div class="modal-footer">
                              <div class="row">
                                <div class="col s12 m12 l12">
                                  <a href="#!" class="modal-action modal-close waves-effect waves-light btn red lighten-1">Cancel<i class="material-icons right">cancel</i></a>
                                  <button class="btn waves-effect waves-light" type="submit" name="action">Add<i class="material-icons right">menu</i></button>
                                </div>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                      <!-- END ADD SUBMENU -->
                      <!-- START DELETE MENU -->
                      <a href="#modalDeleteConfirm{{$parent->id}}" class="secondary-content modal-trigger">
                        <i class="material-icons red-text tooltipped" data-position="bottom" data-tooltip="Delete">delete</i>
                      </a>
                      <div class="modal border-radius-6" id="modalDeleteConfirm{{$parent->id}}">
                        <div class="modal-content pb-1 pt-2">
                          <h5>Are you sure you want to delete this menu?</h5>
                        </div>
                        <div class="modal-footer">
                          <form id="modalDelete" method="POST" action="{{route('menu.delete', $parent->id)}}" class="right mr-1">
                            @csrf
                            <button type="submit" class="btn green lighten-1 waves-effect waves-light btn-delete-confirm">Delete</button>
                          </form>
                          <a href="#!" class="modal-action modal-close waves-effect waves-light btn red lighten-1 mr-1">No
                          </a>
                        </div>
                      </div>
                      <!-- END DELETE MENU -->
                      <a href="#modalEditMenu{{$parent->id}}" class="secondary-content modal-trigger">
                        <i class="material-icons green-text tooltipped" data-position="left" data-tooltip="Edit">edit</i>
                      </a>
                      <!-- START EDIT MENU -->
                      <div id="modalEditMenu{{$parent->id}}" class="modal border-radius-6" aria-preventScrolling="true">
                        <div class="modal-content">
                          <h5 class="mt-0">
                            Edit Menu
                          </h5>
                          <form method="POST" action="{{ route('menu.update', $parent->id) }}">
                            @csrf
                            <div class="row">
                              <div class="input-field col s12 m12 l12">
                                <i class="material-icons prefix">title </i>
                                <input id="name" type="text" name="name" class="validate" value="{{$parent->name}}">
                                <label for="name">Name</label>
                              </div>
                            </div>
                            <div class="modal-footer">
                              <div class="row">
                                <div class="col s12 m12 l12">
                                  <a href="#!" class="modal-action modal-close waves-effect waves-light btn red lighten-1">Cancel<i class="material-icons right">cancel</i>
                                  </a>
                                  <button class="btn waves-effect waves-light" type="submit" name="action">Save<i class="material-icons right">menu</i></button>
                                </div>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                      <!-- END EDIT MENU -->
                      @if($parent->order == count($menus->where('parent_id', null)))
                      <a class="secondary-content">
                        <i class="material-icons grey-text">arrow_downward</i>
                      </a>
                      @else
                      <a href="javascript:$('#downform{{$parent->id}}').submit();" class="secondary-content">
                        <i class="material-icons tooltipped" data-position="bottom" data-tooltip="Move Down">arrow_downward</i>
                      </a>
                      <form id="downform{{$parent->id}}" action="{{route('menu.movedown', $parent->id)}}" method="POST" hidden>
                        @csrf
                        <input type="number" name="order" value="{{$parent->order}}" hidden>
                      </form>
                      @endif
                      @if($parent->order == 1)
                      <a class="secondary-content">
                        <i class="material-icons grey-text">arrow_upward</i>
                      </a>
                      @elseif($parent->order != 1)
                      <a href="javascript:$('#upform{{$parent->id}}').submit();" class="secondary-content">
                        <i class="material-icons tooltipped" data-position="top" data-tooltip="Move Up" id="upward">arrow_upward</i>
                      </a>
                      <form id="upform{{$parent->id}}" action="{{route('menu.moveup', $parent->id)}}" method="POST" hidden>
                        @csrf
                        <input type="number" name="order" value="{{$parent->order}}">
                      </form>
                      @endif
                    </div>
                  </li>
                  @endif
                @endforeach
              </ul>
            </div>
            <!-- SUBMENU -->
            <div class="col s12 m12 l6 xl6 pr-0">
              <div class="card-panel mt-0 pt-0 pl-0 pr-0">
                <ul class="collection with-header mt-0  pt-0 pl-0 z-depth-1">
                @if(!$submenu->isEmpty())
                  <li class="collection-header">
                    <div class="row">
                      <div class="col s8 m8 l8 xl8">
                        <h4>Submenu List</h4>
                      </div>
                    </div>
                  </li>
                  @foreach($submenu->sortBy('order') as $child)
                  <li class="collection-item pr-4 ">
                    <div>{{ $child->name }}
                      <!-- START DELETE MENU -->
                      <a href="#modalDeleteConfirm{{$child->id}}" class="secondary-content modal-trigger">
                        <i class="material-icons red-text tooltipped" data-position="bottom" data-tooltip="Delete">delete</i>
                      </a>
                      <div class="modal border-radius-6" id="modalDeleteConfirm{{$child->id}}">
                        <div class="modal-content pb-1 pt-2">
                          <h5>Are you sure you want to delete this menu?</h5>
                        </div>
                        <div class="modal-footer">
                          <form id="modalDelete" method="POST" action="{{route('menu.delete', $child->id)}}" class="right mr-1">
                            @csrf
                            <button type="submit" class="btn green lighten-1 waves-effect waves-light btn-delete-confirm">Delete</button>
                          </form>
                          <a href="#!" class="modal-action modal-close waves-effect waves-light btn red lighten-1 mr-1">No
                          </a>
                        </div>
                      </div>
                      <!-- END DELETE MENU -->
                      <!-- START EDIT MENU -->
                      <a href="#modalEditMenu{{$child->id}}" class="secondary-content modal-trigger">
                        <i class="material-icons green-text tooltipped" data-position="left" data-tooltip="Edit">edit</i>
                      </a>
                      <div id="modalEditMenu{{$child->id}}" class="modal border-radius-6" aria-preventScrolling="true">
                        <div class="modal-content">
                          <h5 class="mt-0">
                            Edit Menu
                          </h5>
                          <form method="POST" action="{{ route('menu.update', $child->id) }}">
                            @csrf
                            <div class="row">
                              <div class="input-field col s12 m12 l12">
                                <i class="material-icons prefix">title </i>
                                <input id="name" type="text" name="name" class="validate" value="{{$child->name}}">
                                <label for="name">Name</label>
                              </div>
                              @if($child->tag != "")
                              <div class="input-field col s12 m12 l12">
                                <i class="material-icons prefix">title </i>
                                <input id="tag" type="text" name="tag" class="validate" value="{{$child->tag}}" disabled>
                                <label for="tag">Tag</label>
                              </div>
                              @endif
                            </div>
                            <div class="modal-footer">
                              <div class="row">
                                <div class="col s12 m12 l12">
                                  <a href="#!" class="modal-action modal-close waves-effect waves-light btn red lighten-1">Cancel<i class="material-icons right">cancel</i>
                                  </a>
                                  <button class="btn waves-effect waves-light" type="submit" name="action">Save<i class="material-icons right">menu</i></button>
                                </div>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                      <!-- END EDIT MENU -->
                      @if($child->order == count($menus->where('parent_id', $child->parent_id)))
                      <a class="secondary-content">
                        <i class="material-icons grey-text">arrow_downward</i>
                      </a>
                      @else
                      <a href="javascript:$('#downform{{$child->id}}').submit();" class="secondary-content">
                        <i class="material-icons tooltipped" data-position="bottom" data-tooltip="Move Down">arrow_downward</i>
                      </a>
                      <form id="downform{{$child->id}}" action="{{route('menu.movedown', $child->id)}}" method="POST" hidden>
                        @csrf
                        <input type="number" name="order" value="{{$child->order}}" hidden>
                      </form>
                      @endif
                      @if($child->order == 1)
                      <a class="secondary-content">
                        <i class="material-icons grey-text">arrow_upward</i>
                      </a>
                      @elseif($child->order != 1)
                      <a href="javascript:$('#upform{{$child->id}}').submit();" class="secondary-content">
                        <i class="material-icons tooltipped" data-position="top" data-tooltip="Move Up" id="upward">arrow_upward</i>
                      </a>
                      <form id="upform{{$child->id}}" action="{{route('menu.moveup', $child->id)}}" method="POST" hidden>
                        @csrf
                        <input type="number" name="order" value="{{$child->order}}">
                      </form>
                      @endif
                    </div>
                  </li>
                  @endforeach
                @endif
                </ul>
              </div>
            </div>
            <!-- END SUBMENU -->
          </div>
        </div>
      </div>
  </div>
</div>

@stop

@section('script')

<script type="text/javascript">

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

  $(document).ready(function(){
    $('.modal').modal();
  });

</script>

@stop