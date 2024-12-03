<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login TFI Event</title>
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
                            @if(session('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                            @endif

                            @if(session('error'))
                                    <div class="alert alert-danger">{{ session('error') }}</div>
                            @endif

                            <form action="{{ route('login.submit') }}" method="post">
                                @csrf
                                <input type="text" name="nim" class="form-control mb-3 @error('nim') is-invalid @enderror" placeholder="NIM" value="{{ old('nim') }}" required>
                                @error('nim')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror

                                <input type="password" name="password" class="form-control mb-4 @error('password') is-invalid @enderror" placeholder="Password" required>
                                @error('password')
                                    <div class="invalid-feedback">The password you entered is incorrect. Please try again.</div>
                                @enderror

                                <button type="submit" class="status waiting w-50 mx-auto d-block">LOGIN</button>
                            </form>
                        </div>
                </div>
            </div>
        </div>
</body>
</html>