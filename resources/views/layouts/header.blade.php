@section('header2')
<nav class="navbar navbar-expand-lg navbar-light container mynav">
    <a class="navbar-brand loGo" href="#"><img src="{{asset('images/logo.png')}}"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse navRgl" id="navbarNav">
        <ul class="navbar-nav lynav">
            <li class="nav-item ">
                <a class="nav-link" href="#">Request Booking <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Earn Money</a>
            </li>

              
            @if(Auth::check())
            
            @if(Auth::user()->role != 8)


            <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</a>
                    <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 40px, 0px);">
                
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endif  
            @endif   
                 
            <!-- <li class="nav-item">
                <a class="nav-link" href="{{'/login'}}">Login</a>
            </li> -->
            <!-- <li class="nav-item">
                <a class="nav-link" href="{{'/login'}}">Login</a>
            </li> -->
            <!-- <li class="nav-item">
                 <a class="nav-link" href="{{'/register'}}">Register</a>
            </li> -->
            <!-- <li class="nav-item">
                  <select class="form-control slecT" id="sel1">
                      <option>English</option>
                       <option>EUR</option>
                        <option>GPB</option>
                  </select>
               </li> -->
        </ul>
    </div>
</nav>
@show