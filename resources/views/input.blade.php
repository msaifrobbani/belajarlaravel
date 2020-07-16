<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="{{ route('CSRFCSRFtodo.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="">Email Address</label>
                <input type="email" name="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : 'is-valid'}}" aria-describedby="emailHelp" placeholder="example.name@mail.com" value="{{ old('email') }}">
                @if ($errors->has('email'))
                    <div class="invalid-feedback">{{ $errors->first('email') }}</div>
                @endif
            </div>
            <div class="form-group">
                <label for="">Address</label>
                <textarea name="address" class="form-control {{ $errors->has('address') ? 'is-invalid' : 'is-valid'}}" rows="3" placeholder="Alamat Rumah" value="{{ old('address') }}"></textarea>
                @if ($errors->has('address'))
                    <div class="invalid-feedback">{{ $errors->first('address') }}</div>
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</body>
</html>