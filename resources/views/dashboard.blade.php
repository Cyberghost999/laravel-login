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
      <input type="text" class="form-control" name="Name" placeholder="
      {{$d -> username}}
	  ">
    </div>
      <label>Email:</label>
      <input type="email" class="form-control" name="Email"  placeholder="Enter email">
    </div>
    
    <div class="form-group">
      <label>Contact:</label>
      <input type="text" class="form-control" name="Contact" placeholder="Enter Contact">
    </div>
    <div class="form-group">
      <label>Password:</label>
      <input type="password" class="form-control" name="Password" placeholder="Enter password" name="pwd">
    </div>
    
    @endforeach
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>
@stop