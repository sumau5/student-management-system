<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{('/')}}">Student Management System</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav navbar-left"> 
          <a class="nav-link active" aria-current="page" href="{{url('/')}}">Home</a>
          <a class="nav-link active" aria-current="page" href="{{url('/create')}}">Create</a>
                        
                          </div>
                          <div class="navbar-right ml-auto">
                            <!-- Authentication Links -->
                            @guest
                            @if (Route::has('login'))
                               
                                    <a href="{{ route('login') }}">{{ __('Login') }}</a>
                               
                            @endif
                            
                            @if (Route::has('register'))
                                
                                    <a href="{{ route('register') }}">{{ __('Register') }}</a>
                    
                            @endif
                        @else
                           
                                <a  href="#" role="button"  aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
        
                           
                                    <a  href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
        
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                             
                       
                        @endguest
                          </div>
      </div>
    </div>
  </nav> 