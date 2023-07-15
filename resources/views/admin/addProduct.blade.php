<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <form action="{{route('addProduct')}}" method="post" enctype="multipart/form-data">
        @if(Session::get('success'))
        <div class="alert alert-success">
           {{ Session::get('success') }}
        </div>
        @endif

        @if(Session::get('fail'))
             <div class="alert alert-danger">
                {{ Session::get('fail') }}
             </div>
           @endif
      @csrf
        <label for="">photo</label>
        <input type="file" name="photo" id="" required><br>
        <span class="text-danger">@error('photo'){{ $message }} @enderror</span>
        <label for="">nom</label>
        <input type="text" name="name" id="" required><br>
        <span class="text-danger">@error('name'){{ $message }} @enderror</span>
        <label for="">prix</label>
        <input type="number" name="price" id="" required><br>
        <span class="text-danger">@error('price'){{ $message }} @enderror</span>
        <label for="">description</label>
        <input type="text" name="description" id="" required><br>
        <span class="text-danger">@error('description'){{ $message }} @enderror</span>
        <label for="">quantite</label>
        <input type="text" name="quantity" id="" required><br>
        <span class="text-danger">@error('quantity'){{ $message }} @enderror</span>
        <label for="">categorie</label>
        <select name="category" id="user" class="form-select rounded-pill" value="{{ old('user') }}" required>
            <option value="">Choir la categorie</option>
            <option value="Vêtement">Vetement</option>
            <option value="Chaussure">Chaussure</option>
            <option value="Electronique">Electronique</option>
            <option value="Bijou">Bijoux</option>
      </select>
      <span class="text-danger">@error('category'){{ $message }} @enderror</span>
      <button type="submit">Enregister</button>
    </form>
</body>
</html>