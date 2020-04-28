<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>TMl</title>
        <style>

        .error{
          display: none;
        }
        </style>
        <script src="{{ asset('js/app.js') }}" defer></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    </head>
    <body>

      <!-- very important for register and login -->
        <div class="flex-center position-ref full-height">
          <nav class="navbar navbar-dark bg-dark justify-content-between">
            <form class="form-inline">
              <div class="drop123down">
                <a href="{{url('/')}}"><image height="35%" width="35%" src="{{asset('/images/logo.png')}}"></a>
                <input class="form-control mr-sm-2" type="search" name="search" pattern="\S+.*" id="search" placeholder="Search" aria-label="Search">
              </div>
            </form>
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Profile</a>
                    @else
                        <a href="{{ route('login') }}"><button class="btn btn-outline-success">Login</button></a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"<button class="btn btn-sm btn-outline-secondary" type="button">Register</button></a>
                        @endif
                    @endauth
                </div>
            @endif
          </nav>
            <div id="search_recommend">
            </div>
            <div id="initial_table" class='container_custom'>
              @yield('products')
            </div>

            <script type="text/javascript">
            $('#search').on('keyup',function(){
            $value=$(this).val();

            $.ajax({
            type : 'get',
            url : '{{URL::to('search')}}',
            data:{'search':$value},
            success:function(data){
              // if( !$(this).val() ) {
              //     $('#from_ajax').hide();
              // }
          //  $('#initial_table').hide();
            $('#search_recommend').html(data);
            }

            });
            })
            </script>
            <script type="text/javascript">
            $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
            </script>
    </body>
</html>
