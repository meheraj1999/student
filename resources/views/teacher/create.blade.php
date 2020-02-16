 <form method="post" action="{{route('emo.store')}}">
  @csrf
 <div class="form-group">
    <label>name</label>
    <input type="text" name="name">
  </div>
  <div class="form-group">
    <label>post</label>
    <input type="text" name="post">
  </div>
    <div class="form-group">
    <label>salary</label>
    <input type="text" name="salary">
  </div>
    <div class="form-group">
    <label>address</label>
    <input type="text" name="address">
  </div>
    <div class="form-group">
    <label>contact</label>
    <input type="text" name="contact" class="form-control">
    <div>
  <button type="submit">Submit</button>
  </div>
</form>