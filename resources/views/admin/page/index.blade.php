@extends('admin.layouts.app')

@section('main')

<div class="row">
  <div id="breadcrumbs-wrapper" data-image="{{ asset('images/gallery/breadcrumb-bg.jpg') }}">
    <!-- Search for small screen-->
    <div class="container">
      <div class="row">
        <div class="col s12 m6 l6">
          <h5 class="breadcrumbs-title mt-0 mb-0">Pages List</h5>
        </div>
        <div class="col s12 m6 l6 right-align-md">
          <ol class="breadcrumbs mb-0">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a>
            </li>
            <li class="breadcrumb-item"><a href="{{ route('page.index') }}">Pages</a>
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
        <ul class="collapsible">
          @foreach($menus->where('parent_id', null) as $menu)
            @if($menu->tag != "")
              <li>
              <div class="collapsible-header">{{$menu->name}}</div>
              <div class="collapsible-body pt-1 pb-1 pl-4 pr-2">
                <div class="row">
                  @php
                    $children = $menus->where('parent_id', $menu->id);
                  @endphp
                  @if(!$children->isEmpty())
                      @foreach($children->sortBy('order') as $child)
	                      @if($child->tag != "")
	                        <a href="{{ route('pages.editpages', $child->id) }}">
	                          <div class="card-panel blue col l2 mr-1" style="">
	                            <div class="card-content">
	                              <h6 class="card-title white-text center-align pt-8 pb-8">{{$child->name}}</h6>
	                            </div>
	                          </div>
	                        </a>
	                      @endif

                        @php
                          $subchilds = $menus->where('parent_id', $child->id);
                        @endphp
                        @if(!$subchilds->isEmpty())
                          @foreach($subchilds as $subchild)
                            @if($subchild->tag != "")
                              <a href="{{ route('pages.editpages', $subchild->id) }}">
                                <div class="card-panel blue col l2 mr-1" style="">
                                  <div class="card-content">
                                    <h6 class="card-title white-text center-align pt-8 pb-8">{{$subchild->name}}</h6>
                                  </div>
                                </div>
                              </a>
                            @endif
                          @endforeach
                        @endif
                      @endforeach
                  @endif
                </div>
              </div>
            </li>
            @endif
          @endforeach
        </ul>
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

      });
  </script>
@stop