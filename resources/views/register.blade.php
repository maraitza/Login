@extends ('layouts')

@section('content')
<table class="a"><tr><td>Registro</td></tr></table>
   
   <form action="" method="post">
        @csrf
        <input type="name" placeholder="Name"id="name" name="name">
        <br>
        @error('name')
            <p>{{$message}}</p>
        @enderror
 
        <input type="email" placeholder="Email"id="email" name="email">
        <br>
        @error('email')
            <p>{{$message}}</p>
        @enderror
    
         <input type="password" placeholder="Password"id="password" name="password">
         <br>
         @error('password')
            <p>{{$message}}</p>
        @enderror
 
         <input type="password" placeholder="Password_confirmation"id="password_confirmation" name="password_confirmation">
         <br>
         <br>
         
         <button type="submit">ENVIAR</button>
 
 
 
   </form>
@endsection