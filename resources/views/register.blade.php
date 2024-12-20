<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BINUS - TFI Event</title>
    <link rel="icon" href="/images/TFI-Favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href=" {{ asset('css/login.css') }} " class="rel">
</head>
<body>
<div class="text-center">
        <div class="row justify-content-center">
            <div class="card">
                        <img src="{{ asset('images\LOGO-TFI-MERAH-FIXED.png') }}" alt="" class="img">
                        <div class="card-body text-start">
                            <form action="{{ route('register.submit') }}" method="post">
                                @csrf
                                <input type="text" name="name" placeholder="Name" class="form-control mb-3 @error('name') is-invalid @enderror" value="{{ old('name') }}" required>
                                <input type="text" name="nim" placeholder="NIM" class="form-control mb-3 @error('nim') is-invalid @enderror" value="{{ old('nim') }}" required>
                                <input type="email" name="email" placeholder="BINUSIAN Email" class="form-control mb-3 @error('email') is-invalid @enderror" value="{{ old('email') }}" required>
                                <input type="password" name="password" placeholder="Password" class="form-control mb-3 @error('password') is-invalid @enderror" required>
                                <input type="password" name="password_confirmation" placeholder="Confirm Password" class="form-control mb-4 @error('password') is-invalid @enderror" required>
                                <button type="submit" class="status waiting w-50 mx-auto d-block">CREATE ACCOUNT</button>
                            </form>

                        </div>
                    </div>
            </div>
        </div>
</body>
</html>