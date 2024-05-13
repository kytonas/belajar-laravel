<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Hello, world!</title>
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
                <h2>List Artikel</h2>
            </div>
            {{-- /ROW 1 --}}
            {{-- ROW 2 --}}
            <div class="row mt-5">
                @foreach ($post as $data)
                    <div class="col-4">
                        <div class="card" style="width: 18rem;">
                            <img src="https://pictures.porsche.com/rtt/iris?COSY-EU-100-1711coMvsi60AAt5FwcmBEgA4qP8iBUDxPE3Cb9pNXABuN9dMGF4tl3U0%25z8rMH1spbWvanYb%255y%25oq%25vSTmjMXD4qAZeoNBPUSfUx4RmWBisGK7Zlp0KtYYF%25mVSW8uAVbsqYSIZ5yPewSQLCvNzxLE%25GXoq1S9yr6FObMFswRAyYib32yl3URN%25GcCW1TG87hXuci60yM"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $data->title }}</h5>
                                <p class="card-text">{{ $data->content }}</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
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
