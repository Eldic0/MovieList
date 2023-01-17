<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
    integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

<body>
    <br>
    <a style="font-weight: bold; font-size:25px; color:white; padding: 20px;">🔥 Popular</a>
    <div class="row" style="padding-right: 35px;">
        <div class="owl-carousel owl-theme">
            @foreach ($movies as $movie)
                <div class="col">
                    <div class="image">
                        <a href="/detailMovie/{{ $movie->movie_title }}"><img src="{{ $movie->movie_image }}"
                                alt="" class="bookimage"></a>
                    </div>
                    <div class="bookdescription d-flex flex-column">
                        <a href="/detailMovie/{{ $movie->movie_title }}"
                            class="text-decoration-none text-white">{{ $movie->movie_title }}</a>
                        <a href="/detailMovie/{{ $movie->movie_title }}"
                            class="text-decoration-none text-secondary">{{ date('Y', strtotime($movie->movie_release)) }}</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <nav class="navbar navbar-light" style="background-color: black;">
        <a style="font-weight: bold; font-size:25px; color:white; padding: 0px 20px 10px 20px;">🎥 Show</a>
        <form class="form-inline" style="padding: 20px 30px 0px 0px">
            <input class="form-control mr-sm-2" type="search" placeholder="Search movie..." aria-label="Search"
                name="search">
            <button class="btn btn-danger my-2 my-sm-0" type="submit">Search</button>
        </form>
    </nav>
    <hr style="color: white;">

    <div class="row">
        <div class="owl-carousel owl-theme">
            @foreach ($genres as $genre)
                <div class="col d-flex flex-row justify-content-center">
                    <a href="/welcomes?search={{ $genre->movie_genre }}" style="text-decoration: none; color:white;">
                        <button type="submit" name="search"
                            class="rectangle1 btn btn-danger">{{ $genre->movie_genre }}</button>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

    <div class="sorting d-flex align-items-center">
        <p style="font-size: 15px; color:white; margin-left: 20px; padding-top: 20px;">Sort By:</p>
        <div class="col d-flex flex-row justify-content-start">
            <a href="?sort=desc" style="text-decoration: none; color:white;"><button type="submit" name="release" id="release"
                    class="rectangle2 btn btn-danger">Latest</button></a>
            <a href="?sort=asc" style="text-decoration: none; color:white;"><button type="submit"
                    class="rectangle2 btn btn-danger">A-Z</button></a>
            <a href="?sort=desc" style="text-decoration: none; color:white;"><button type="submit"
                    class="rectangle2 btn btn-danger">Z-A</button></a>
        </div>
    </div>

    @if (!Auth::check())
        <a href="" class="hidden"></a>
    @elseif (Auth::user()->position == 'admin')
        <div class="d-flex justify-content-end">
            <a class="btn btn-danger" href="{{ route('Add Movie') }}" style="margin-right: 20px">✚ Add Movie</a>
        </div>
    @endif

    <div class="row" style="padding-right: 35px; padding-bottom: 40px;">
        <div class="owl-carousel owl-theme">
            @foreach ($movies_show as $mov)
                <div class="col">
                    <div class="image">
                        <a href="/detailMovie/{{ $mov->movie_title }}"><img src="{{ $mov->movie_image }}"
                                alt="" class="bookimage"></a>
                    </div>
                    <div class="bookdescription d-flex flex-column">
                        <a href="/detailMovie/{{ $mov->movie_title }}"
                            class="text-decoration-none text-white">{{ $mov->movie_title }}</a>
                        <a href="/detailMovie/{{ $mov->movie_title }}"
                            class="text-decoration-none text-secondary">{{ date('Y', strtotime($mov->movie_release)) }}</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
<script>
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    })
</script>

<style>
    body {
        background-color: black;
    }

    .bookimage {
        width: 100%;
        height: auto;
        border-radius: 10px;
    }

    .col {
        /* top right bot left */
        padding: 20px 0px 15px 40px;
    }

    .rectangle1 {
        max-width: 100%;
        height: auto;
        background-color: #242323;
        margin-right: 50px;
        border-radius: 10px;
        padding: 5px 60px 5px 60px;
        color: white;
    }

    .rectangle2 {
        max-width: 100%;
        height: auto;
        background-color: #242323;
        margin-right: 50px;
        border-radius: 10px;
        padding: 5px 60px 5px 60px;
        color: white;
    }
</style>
