@extends ('layouts')

@section('content')
<br>  
<div>
  <h1>LOGIN</h1>
<form action="" method="POST">
  @csrf
  <input type="email" placeholder="Email" id="email" name="email">
  <input type="password" placeholder="Password" id="password" name="password">
  
  @error('message')
    <p>{{$message}}</p>
  @enderror
  
  <button type="submit" class="w-10 text-black bg-indigo">Enviar </button>
</form>

</div>
@endsection