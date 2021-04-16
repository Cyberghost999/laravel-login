@extends ('layout.dashboard')

@section('form')
  <div class="container">
	<?php 
// if (session_status !== PHP_SESSION_ACTIVE) {
    // session_start();
// }
?>
  <form action="/signup" method="post">
    <div class="form-group">
    <div class="form-group">
    @foreach ($_SESSION['data'] as $d)
      
    

  
      <label>Username:</label>
      <input type="text" class="form-control" name="Name" placeholder="{{$d -> username}}" readonly>
    </div>
    <label>Email:</label>
    <input type="email" class="form-control" name="email"  placeholder="{{$d -> email}}" readonly>
  </div>
  
  <div class="form-group">
    <label>Contact:</label>
    <input type="number" class="form-control" name="contact" placeholder="{{$d -> contact}}" readonly>
  </div>
  
  <div class="form-group">
  <label>Address</label>
  <input type="text" class="form-control" name="address" placeholder="{{$d -> address}}" readonly>
</div>
<div class="form-group">
  <label>city:</label>
  <input type="text" class="form-control" name="city"  placeholder="{{$d -> city}}" readonly>
</div>
<div class="form-group">
  <label>state:</label>
  <input type="text" class="form-control" name="state" placeholder="{{$d -> state}}" readonly>
</div>
<div class="form-group">
  <label>country:</label>
  <input type="text" class="form-control" name="country" placeholder="{{$d -> country}}" readonly>
</div>
<div class="form-group">
  <label>zip:</label>
  <input type="number" class="form-control" name="zip" placeholder="{{$d -> zip}}" readonly>
</div>
    
    @endforeach
    
  </form>
</div>
@stop