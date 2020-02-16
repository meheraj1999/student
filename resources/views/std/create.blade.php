<form method="post" action="{{route('em.store')}}">
  @csrf
  <div class="form-group">
    <label>name</label>
    <input type="text" name="name">
  </div>
  <div class="form-group">
    <label>roll</label>
    <input type="text" name="roll">
  </div>
    <div class="form-group">
    <label>depertment</label>
    <input type="text" name="depertment">
  </div>
    <div class="form-group">
    <label>institute</label>
    <input type="text" name="institutte">
  </div>
    <div class="form-group">
    <label>contact</label>
    <input type="text" name="contact" class="form-control">
    <div>
  <button type="submit">Submit</button>
  </div>
</form>