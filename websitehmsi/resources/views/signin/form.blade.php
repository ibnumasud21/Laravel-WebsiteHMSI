<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Himpunan Mahasiswa Sistem Informasi</title>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  </head>
</html>
<body>
  <div id="app">
      <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
          <div class="container">
              <a class="navbar-brand" href="{{ url('/') }}" style="color: dodgerblue">
                	<img src="/assets/Untitled.png" style="padding-right: 50px">
                  {{ config('HIMPUNAN MAHASISWA SISTEM INFORMASI', 'HIMPUNAN MAHASISWA SISTEM INFORMASI') }}
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                  <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <!-- Left Side Of Navbar -->
                  <ul class="navbar-nav mr-auto">

                  </ul>

                  <!-- Right Side Of Navbar -->
                  <ul class="navbar-nav ml-auto">
                      <!-- Authentication Links -->
                      @guest


                      @else
                          <li class="nav-item dropdown">
                              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  {{ Auth::user()->name }} <span class="caret"></span>
                              </a>

                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="{{ route('logout') }}"
                                     onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                      {{ __('Logout') }}
                                  </a>

                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                      @csrf
                                  </form>
                              </div>
                          </li>
                      @endguest
                  </ul>
              </div>
          </div>
      </nav>
<main role="main" style="text-align: center" >
  <br/>
  <br/>
    <p style="font-size: 30PX">LOGIN</p>


  </div>

</main>
    <div id="font">
<br/>
<br/>
      <div class="container" style="text-align:center; float: center; padding-left: 400px; padding-right: 400px">
          <form class="form-horizontal" role="form" method="POST" action="{{ route('signin.attempt') }}">
                {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email">E-Mail Address</label>
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required="required">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password">Password</label>
                            <input id="password" type="password" class="form-control" name="password" required="required">
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        <div class="form-group">
                                <div class="checkbox" style="text-align: center">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>


                        <div class="form-group">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>
                                <a class="btn btn-md btn btn-secondary " style="color: white" href="/">Guest</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

</body>
</html>
