@extends ('layout.main')

@section('form')
<div class="container">
  <h1><center>Login</center></h1>
  <form action="/login" method="post">
    
    <div class="form-group">
    {{csrf_field()}}
      <label>Username:</label>
      <input type="text" class="form-control" name="Name" placeholder="Enter User name" required>
    </div>
    <div class="form-group">
      <label>Password:</label>
      <input type="password" class="form-control" name="Password" placeholder="Enter password" name="pwd" required>
    </div>
    
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>
@stop