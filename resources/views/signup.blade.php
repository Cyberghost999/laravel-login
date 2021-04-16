@extends ('layout.main')

@section('form')
  <div class="container">
  
  <form action="/signup" method="post">
    <div class="form-group">
    <div class="form-group">
    {{csrf_field()}}
      <label>Username:</label>
      <input type="text" class="form-control" name="name" placeholder="Enter User name" required>
    </div>
      <label>Email:</label>
      <input type="email" class="form-control" name="email"  placeholder="Enter email" required>
    </div>
    
    <div class="form-group">
      <label>Contact:</label>
      <input type="number" class="form-control" name="contact" placeholder="Enter Contact" required>
    </div>
    
    <div class="form-group">
    <label>Address</label>
    <input type="text" class="form-control" name="address" placeholder="Enter Address" required>
  </div>
  <div class="form-group">
    <label>city:</label>
    <input type="text" class="form-control" name="city"  placeholder="Enter city" required>
  </div>
  <div class="form-group">
    <label>state:</label>
    <input type="text" class="form-control" name="state" placeholder="Enter state" required>
  </div>
  <div class="form-group">
    <label>country:</label>
    <input type="text" class="form-control" name="country" placeholder="Enter country" required>
  </div>
  <div class="form-group">
    <label>zip:</label>
    <input type="number" class="form-control" name="zip" placeholder="Enter zip" required>
  </div>
  <div class="form-group">
    <label>password:</label>
    <input type="password" class="form-control" name="password" placeholder="Enter password" required>
  </div>
    
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>
@stop