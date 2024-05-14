<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Daftar Merek</title>
</head>

<body>

    {{-- NAVBAR --}}
    @include('layouts.navbar')
    {{-- /NAVBAR --}}

    {{-- CONTENT --}}
    <div class="section">
        <div class="container">
            {{-- ROW 1 --}}
            <div class="row mt-5 justify-content-center">
                <h2>Daftar Merek</h2>
            </div>
            {{-- /ROW 1 --}}
            {{-- ROW 2 --}}
            <div class="row">
                @foreach ($merek as $data)
                    <div class="col-4 mt-5">
                        <div class="card bg-secondary text-light" style="width: 18rem;">
                            <img src="https://c1.klipartz.com/pngpicture/662/261/sticker-png-hyundai-logo-car-hyundai-tiburon-silhouette-vehicle-drawing-vehicle-door-bumper.png"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $data->nama_merek }}</h5>
                                <a href="{{ route('mereks.show3', $data->id) }}" class="btn btn-primary">Lihat
                                    Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- /ROW 2 --}}
            </div>
        </div>
        {{-- /CONTENT --}}

        {{-- FOOTER --}}
        @include('layouts.footer')
        {{-- /FOOTER --}}

        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
        </script>

</body>

</html>
