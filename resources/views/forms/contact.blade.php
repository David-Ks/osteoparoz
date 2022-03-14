<form action="{{route('change.contacts')}}" method="post" enctype="multipart/form-data">
  {{csrf_field()}}
  <div class="mb-3">
    <label for="phoneForContact" class="form-label">Հեռախոսահամար</label>
    <input type="text" class="form-control" id="phoneForContact" name="phone" value="{{$contacts->phone}}">
  </div>
  <div class="mb-3">
    <label for="addressForContact" class="form-label">Հասցե</label>
    <div id="emailHelp" class="form-text mb-1">Առանց «ք.Երևան».</div>
    <input type="text" class="form-control" id="addressForContact" name="address" value="{{$contacts->address}}">
  </div>
  <div class="mb-3">
    <label for="mapForContact" class="form-label">Քարտեզ</label>
    <input type="text" class="form-control" id="mapForContact" name="map" value="{{$contacts->map}}">
  </div>
  <button type="submit" class="btn btn-primary">Թարմացնել</button>
</form>