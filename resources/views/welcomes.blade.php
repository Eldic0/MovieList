@extends('layouts.app')
<title>Welcome</title>

  @section('content')
  <div class="head">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"  data-interval="6000">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active" id="color"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1" id="color"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2" id="color"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block h-100 w-100" src="foto/spiderman.jpg" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
                @if (Auth::user())
                  <a href="#" class="btn btn-danger">✚ Add to Watchlists</a>
                @endif
                <p style="padding: 10px; margin-bottom:0px;">2021 | Action</p>
                <h4 class="font-weight-bold">SPIDERMAN NO WAY HOME</h4>
                <p>With Spider-Man's identity now revealed, our friendly neighborhood web-slinger is unmasked and no longer able to separate his normal life as Peter Parker from the high stakes of being a superhero. When Peter asks for help from Doctor Strange, the stakes become even more dangerous, forcing him to discover what it truly means to be Spider-Man.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block h-100 w-100" src="foto/wakanda.jpg" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
                @if (Auth::user())
                  <a href="#" class="btn btn-danger">✚ Add to Watchlists</a>
                @endif
                <p style="padding: 10px; margin-bottom:0px;">2022 | Action</p>
                <h4 class="font-weight-bold">BLACK PANTHER: WAKANDA FOREVER</h4>
                <p>Queen Ramonda, Shuri, M'Baku, Okoye and the Dora Milaje fight to protect their nation from intervening world powers in the wake of King T'Challa's death. As the Wakandans strive to embrace their next chapter, the heroes must band together with Nakia and Everett Ross to forge a new path for their beloved kingdom.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block h-100 w-100" src="foto/blackadam.jpg" alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
                @if (Auth::user())
                  <a href="#" class="btn btn-danger">✚ Add to Watchlists</a>
                @endif
                <p style="padding: 10px; margin-bottom:0px;">2022 | Superhero</p>
                <h4 class="font-weight-bold">BLACK ADAM</h4>
                <p>In ancient Kahndaq, Teth Adam was bestowed the almighty powers of the gods. After using these powers for vengeance, he was imprisoned, becoming Black Adam. Nearly 5,000 years have passed, and Black Adam has gone from man to myth to legend. Now free, his unique form of justice, born out of rage, is challenged by modern-day heroes who form the Justice Society: Hawkman, Dr. Fate, Atom Smasher and Cyclone.</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
    </div>
    @include('home')
    @include('footer')
  @endsection
</div>

<style>
.d-block{
  filter: brightness(55%);
}

#color.active{
  background-color: red;
}

.head{
  padding-top: 0px !important;
}
</style>
