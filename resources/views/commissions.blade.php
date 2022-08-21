@extends('layout')
@section('title')
ATS Commissions
@endsection
@section('page-styles')
<link rel="stylesheet" href="{{ asset('https://use.fontawesome.com/releases/v5.3.1/css/all.css') }}">
<link rel="stylesheet" href="{{ asset('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/main.css') }}">
<link rel="stylesheet" href="{{ asset('css/multi-select.css') }}">
@endsection
@section('content') 
<div class="wrapper">
  @csrf
      <div class="main_container">
          <div id="contract">
@foreach ($airlines as $airline)
<div class="air_container">
  <div class="air_logo">
    <img src="{{url('css/multi-select.css') }}">
  </div>
        <div class="air_code">
        <a href="{{ url("/commissions/{$airline->airline_code}") }}">
                {{ $airline->airline_code }}</a>
        </div>
<div class="air_name">
  {{ $airline->airline_name}}</div>
</div> 
 @endforeach
</div>
          <div class="right_side">
            <div id="contract_updates">
          <h3>Recently Updated</h3>
            <div class="air_container">
            <div class="air_logo">
              <img src="http://pics.avs.io/80/40/AA,AA,AA.png"/>
            </div>
            <div class="air_code">
              <a href="select.php?airline=AA,AA,AA">
                AA,AA,AA      </a>
            </div>
            <div class="air_name">
                  </div>
          </div>
            <div class="air_container">
            <div class="air_logo">
              <img src="http://pics.avs.io/80/40/AM,AM,AM,AT,AT,AT,CI,CI,CI.png"/>
            </div>
            <div class="air_code">
              <a href="select.php?airline=AM,AM,AM,AT,AT,AT,CI,CI,CI">
                AM,AM,AM,AT,AT,AT,CI,CI,CI      </a>
            </div>
            <div class="air_name">
                  </div>
          </div>
            <div class="air_container">
            <div class="air_logo">
              <img src="http://pics.avs.io/80/40/AM,AM,AM,AT,AT,AT,CI,CI,CI.png">
            </div>
            <div class="air_code">
              <a href="select.php?airline=AM,AM,AM,AT,AT,AT,CI,CI,CI">
                AM,AM,AM,AT,AT,AT,CI,CI,CI  </a>
            </div>
            <div class="air_name">
                  </div>
          </div>
            <div class="air_container">
            <div class="air_logo">
              <img src="http://pics.avs.io/80/40/AF,AF,AF,AM,AM,AM.png"/>
            </div>
            <div class="air_code">
              <a href="select.php?airline=AF,AF,AF,AM,AM,AM">
                AF,AF,AF,AM,AM,AM      </a>
            </div>
            <div class="air_name">
                  </div>
          </div>
            <div class="air_container">
            <div class="air_logo">
              <img src="http://pics.avs.io/80/40/AF,AF,AF,AM,AM,AM.png"/>
            </div>
            <div class="air_code">
              <a href="select.php?airline=AF,AF,AF,AM,AM,AM">
                AF,AF,AF,AM,AM,AM      </a>
            </div>
            <div class="air_name">
                  </div>
          </div>
          </div>
        </div>
        </div>
        </div>  
@endsection 
<!-- Java script-->
    @section('page-scripts')
<script src="{{ asset('https://code.jquery.com/jquery-3.3.1.min.js') }}" type="text/javascript"></script>
<script type="text/javascript"  src="{{ asset('js/nicEdit.js') }}"></script>
<script type="text/javascript"  src="{{ asset('js/jquery.multi-select.js') }}" ></script>
<script  src="{{ asset('js/jquery.quicksearch.min.js') }}"></script>
<script type="text/javascript"  src="{{ asset('js/jquery.basictable.js') }}" ></script>
<script  src="{{ asset('js/ckeditor.js') }}"></script>
<script src="js/core.min.js"></script>
<script src="js/script.js"></script>
<script type="text/javascript">
  $(document).ready( function () {
    $('.air_container').click( function () {
      var href = $(this).find("a").attr("href");
      if (href) {
        window.location = href;
      }
    });
  });
</script>
@endsection