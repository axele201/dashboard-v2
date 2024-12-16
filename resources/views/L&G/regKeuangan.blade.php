<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRASI | CREATE NEW ACCOUNT</title>
    <!-- STYLE CSS -->
    <link rel="stylesheet" href="{{ asset('CSS/all.css') }}">
    <link rel="stylesheet" href="{{ asset('CSS/L&G/registrasi.css') }}">
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="kontener" style="background-image: url('{{ asset('img/lb.jpeg') }}');">
        <div class="pembungkus">
            <div class="inti">
                <!-- kepala -->
                <div class="logo">
                    <!-- Logo -->
                    <img src="{{ asset('img/DA.jpeg') }}" alt="logo"> 
                </div>
                <p class="text">Hallo, Silakan mendaftarkan diri anda untuk bergabung bersama kami</p>
                <div class="coolinput">
                    <form action="{{route('kirim-keuangan')}}" method="post">
                        @csrf
                        <!-- EMAIL -->
                        <label for="Email" class="text">Email:</label>
                        <input type="email" placeholder="masukan email" name="Email" class="input">
                        <!-- NAMA -->
                        <label for="Nama" class="text">Nama:</label>
                        <input type="text" placeholder="masukan nama" name="Nama" class="input">
                        <!-- NOMER -->
                        <label for="Nomer" class="text">Nomer:</label>
                        <input type="number" placeholder="masukan nomer" name="Nomer" class="input">
                        <!-- PASSWORD -->
                        <label for="Password" class="text">Password:</label>
                        <input type="password" placeholder="buat password" name="Password" class="input">
                        <p class="text-muted">
                            Password harus mengandung:
                            <ul style="display: flex; gap:10px; list-style-type: none;">
                                <li>Minimal 6 karakter</li>
                                <li>Huruf kecil dan besar</li>
                                <li>Angka</li>
                                <li>Simbol khusus seperti @$!%*?&</li>
                            </ul>
                        </p>

                        <button type="submit" class="btn btn-outline-primary" id="btn">SUBMIT</button>
                        <p class="text">You have account? <a href="{{ route('login') }}"> Login</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- SCRIPT -->
    <script src="{{ asset('JS/all.js') }}"></script>
    <script src="{{ asset('JS/L&G/L&G.js') }}"></script>
    <!-- BOOTSRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>