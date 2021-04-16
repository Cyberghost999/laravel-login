@extends ('layout.main')

@section('form')
<div class="container">
  
  <form action="/login" method="post">
    
    <div class="form-group">
    {{csrf_field()}}
      <label>Username:</label>
      <input type="text" class="form-control" name="Name" placeholder="Enter User name">
    </div>
    <div class="form-group">
      <label>Password:</label>
      <input type="password" class="form-control" name="Password" placeholder="Enter password" name="pwd">
    </div>
    
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>
@stop