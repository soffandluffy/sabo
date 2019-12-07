@extends('admin.layouts.app')

@section('main')

   <div class="row">
        <div class="col s12">
          <div class="container">
            <!--card stats start-->
            <div class="card">
               <div class="card-content">
                  <h4 class="card-title">Welcome</h4>
               </div>
            </div>
            <!--card stats end-->

            <!-- START RIGHT SIDEBAR NAV -->
            @include('admin.layouts.sidebar')
            <!-- END RIGHT SIDEBAR NAV -->

          </div>
        </div>
      </div>

@stop