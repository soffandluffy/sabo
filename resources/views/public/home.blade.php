@extends('public.layouts.app')

@section('main')

<div class="section valign-wrapper">
    <div class="row valign">
      <div class="col s12 m10 offset-m1">
        <div class="row">
          <div class="col s12"><h2 class="section-title">Features</h2></div>
          <div class="col s12 m6 l4">
            <h4><i class="icon-light-bulb"></i></h4>
            <p class="caption">This is a cool feature about your product! It really separates you from the crowd.</p>
          </div>
          <div class="col s12 m6 l4">
            <h4><i class="icon-bolt"></i></h4>
            <p class="caption">This is a cool feature about your product! It really separates you from the crowd.</p>
          </div>
          <div class="col s12 m6 l4">
            <h4><i class="icon-rocket"></i></h4>
            <p class="caption">This is a cool feature about your product! It really separates you from the crowd.</p>
          </div>
          <div class="col s12 m6 l4">
            <h4><i class="icon-settings"></i></h4>
            <p class="caption">This is a cool feature about your product! It really separates you from the crowd.</p>
          </div>
          <div class="col s12 m6 l4">
            <h4><i class="icon-umbrella"></i></h4>
            <p class="caption">This is a cool feature about your product! It really separates you from the crowd.</p>
          </div>
          <div class="col s12 m6 l4">
            <h4><i class="icon-compass"></i></h4>
            <p class="caption">This is a cool feature about your product! It really separates you from the crowd.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Pricing Tables -->
  <!-- <div class="section valign-wrapper">
    <div class="row valign">
      <div class="col s12 m10 offset-m1">
        <div class="row">
          <div class="col s12 m4">
            <div class="pricing-table">
              <div class="pricing-header">
                <i class="icon-paper-plane"></i>
                <h4>Basic</h4>
                <div class="price">
                  <span class="currency">$</span>
                  <span class="dollars">9</span>
                  <span class="cents">99</span>
                </div>
              </div>
              <ul class="pricing-features">
                <li class="pricing-feature"><i class="icon-accept"></i>10 product uses.</li>
                <li class="pricing-feature"><i class="icon-accept"></i>10 product uses.</li>
                <li class="pricing-feature"><i class="icon-accept"></i>10 product uses.</li>
                <li class="pricing-feature disabled"><i class="icon-close"></i>Pro and above.</li>
                <li class="pricing-feature disabled"><i class="icon-close"></i>Enterprise only.</li>
                <li class="pricing-feature disabled"><i class="icon-close"></i>Enterprise only.</li>
                <li class="pricing-feature disabled"><i class="icon-close"></i>Enterprise only.</li>
              </ul>
            </div>
          </div>

          <div class="col s12 m4">
            <div class="pricing-table featured">
              <div class="pricing-header">
                <i class="icon-plane"></i>
                <h4>Pro</h4>
                <div class="price">
                  <span class="currency">$</span>
                  <span class="dollars">59</span>
                  <span class="cents">99</span>
                </div>
              </div>
              <ul class="pricing-features">
                <li class="pricing-feature"><i class="icon-accept"></i>10 product uses.</li>
                <li class="pricing-feature"><i class="icon-accept"></i>10 product uses.</li>
                <li class="pricing-feature"><i class="icon-accept"></i>10 product uses.</li>
                <li class="pricing-feature"><i class="icon-accept"></i>Pro and above.</li>
                <li class="pricing-feature disabled"><i class="icon-close"></i>Enterprise only.</li>
                <li class="pricing-feature disabled"><i class="icon-close"></i>Enterprise only.</li>
                <li class="pricing-feature disabled"><i class="icon-close"></i>Enterprise only.</li>
              </ul>
            </div>
          </div>

          <div class="col s12 m4">
            <div class="pricing-table">
              <div class="pricing-header">
                <i class="icon-rocket"></i>
                <h4>Enterprise</h4>
                <div class="price">
                  <span class="currency">$</span>
                  <span class="dollars">299</span>
                  <span class="cents">99</span>
                </div>
              </div>
              <ul class="pricing-features">
                <li class="pricing-feature"><i class="icon-accept"></i>10 product uses.</li>
                <li class="pricing-feature"><i class="icon-accept"></i>10 product uses.</li>
                <li class="pricing-feature"><i class="icon-accept"></i>10 product uses.</li>
                <li class="pricing-feature"><i class="icon-accept"></i>10 product uses.</li>
                <li class="pricing-feature"><i class="icon-accept"></i>Enterprise only.</li>
                <li class="pricing-feature"><i class="icon-accept"></i>Enterprise only.</li>
                <li class="pricing-feature"><i class="icon-accept"></i>Enterprise only.</li>
              </ul>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div> -->

  <div class="section light full-height">
    <div class="row">
      <div class="col s12 m10 offset-m1 center">
        <h1>blog</h1>
        <div class="row masonry-grid">
          <div class="col s12 m6 l4">
            <div class="card">
              <div class="card-image">
                <a href="#"><img src="{{ asset('images/strawhat.jpg') }}"></a>
                <span class="card-title">Something Interesting</span>
              </div>
            </div>
          </div>
          <div class="col s12 m6 l4">
            <div class="card">
              <div class="card-image">
                <a href="#"><img src="{{ asset('images/strawhat.jpg') }}"></a>
                <span class="card-title">Another Blog Post</span>
              </div>
            </div>
          </div>
          <div class="col s12 m6 l4">
            <div class="card">
              <div class="card-image">
                <a href="#"><img src="{{ asset('images/strawhat.jpg') }}"></a>
                <span class="card-title">Click Bait Article</span>
              </div>
            </div>
          </div>
          <div class="col s12 m6 l4">
            <div class="card">
              <div class="card-image">
                <a href="#"><img src="{{ asset('images/strawhat.jpg') }}"></a>
                <span class="card-title">Don't Read This!</span>
              </div>
            </div>
          </div>
          <div class="col s12 m6 l4">
            <div class="card">
              <div class="card-image">
                <a href="#"><img src="{{ asset('images/strawhat.jpg') }}"></a>
                <span class="card-title">Why Are You Still Reading?</span>
              </div>
            </div>
          </div>
          <div class="col s12 m6 l4">
            <div class="card">
              <div class="card-image">
                <a href="#"><img src="{{ asset('images/strawhat.jpg') }}"></a>
                <span class="card-title">Good Bye</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Contact Us -->
  <div class="section light valign-wrapper">
    <div class="container">
      <form>
        <div class="row">
          <div class="col s12"><h2 class="section-title">Contact Us</h2></div>
          <div class="input-field col s6">
            <input id="first_name" type="text">
            <label for="first_name">First Name</label>
          </div>
          <div class="input-field col s6">
            <input id="last_name" type="text">
            <label for="last_name">Last Name</label>
          </div>
          <div class="input-field col s12">
            <textarea id="message" class="materialize-textarea"></textarea>
            <label for="message">Message</label>
            <a class="waves-effect waves-light btn-large">Send</a>
          </div>
        </div>
      </form>
    </div>
  </div>

@stop

@section('script')
<script type="text/javascript">
	
	

</script>	
@stop