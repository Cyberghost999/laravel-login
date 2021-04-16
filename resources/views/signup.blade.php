@extends ('layout.main')

@section('form')
  <div class="container">
  
  <form action="/signup" method="post">
    <div class="form-group">
    <div class="form-group">
    {{csrf_field()}}
      <label>Username:</label>
      <input type="text" class="form-control" name="Name" placeholder="Enter User name">
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
    
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>
@stop