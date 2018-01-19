<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href=""><img src="image/logo.png" width="80" height="25"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
           <li class="nav-item">
              <a class="nav-link" href="awal">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="siswa">Table</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="paragraf">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="tes">Pictures</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="lirik">Lyrics</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="penulis">Penulis</a>
            </li>
          </ul>
        </div>
         <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
      </div>
    </nav>
