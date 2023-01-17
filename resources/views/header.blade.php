<nav>
    <label class="Logo"><img src="foto/logo.png" href="/welcomes" style="padding-top: 10px;"></label>
    <ul>
        @if (Auth::user()!=null)
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
            </a>

            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </li>
        @else
        <li><a href="/login">Login</a></li>
        @endif

    </ul>
</nav>

<style>
nav{
    position:absolute;
    box-shadow: 0px 1px 5px #d8d8d8;
    background: black;
   height: 80px;
   width: 100%;
  margin:0;
  padding: 0;
  top: 0;
}

label.Logo {
    color: rgb(255, 255, 255);
    font-size: 35px;
    line-height: 80px;
    padding: 0 100px;
    font-weight: bold;
}

nav ul{
    float: right;
    margin-right: 20px;

}
nav ul li{
    display: inline-block;
    line-height: 80px;
    margin: 0 20px;
}
nav ul li a{
    color: rgb(255, 255, 255);
    font-size: 17px;
    text-transform: uppercase;
    text-decoration: none;
    padding: 7px 13px;
    border-radius: 5px;
}
nav ul li a:hover{
    background: #1b9bff;
    transition: .5s;

}

</style>
