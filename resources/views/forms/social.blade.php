<form action="{{route('create.social')}}" method="post" enctype="multipart/form-data">
  {{csrf_field()}}
  <div class="mb-3 width-40">
    <label for="title" class="form-label">Անվանում</label>
    <input type="text" class="form-control" id="title" name="title" required>
  </div>
  <div class="mb-3 width-40">
    <label for="url" class="form-label">URL</label>
    <input type="text" class="form-control" id="url" name="url" required>
  </div>
  <div class="mb-3 width-40">
    <label for="icon" class="form-label">Icon</label>
    <input type="file" name="icon" id="icon" class="form-control" required>
  </div>
  <br>
  <button type="submit" class="btn btn-primary min">Ավելացնել</button>
</form>
<hr>
@foreach($socials as $social)
  <div>
    <form action="{{route('change.social', $social->id)}}" method="post" enctype="multipart/form-data">
      {{csrf_field()}}
      <div style="display: flex; flex-wrap: wrap;">
        <div class="mb-3 width-40 margin">
          <label for="title" class="form-label">Անվանում</label>
          <input type="text" class="form-control" id="title" name="title" value="{{$social->title}}">
        </div>
        <div class="mb-3 width-40 margin">
          <label for="url" class="form-label">URL</label>
          <input type="text" class="form-control" id="url" name="url" value="{{$social->url}}" required>
        </div>
        <div class="mb-3 width-40 margin">
          <label for="icon" class="form-label">Icon</label>
          <p><img width="100" src="{{$social->icon}}"></p>
          <input type="file" name="icon" class="form-control">
        </div>
        <br>
      </div>
      <button type="submit" class="btn btn-primary min">Թարմացնել</button>
    </form>
    <div style="position: relative;">
      <form action="{{route('del.social', $social->id)}}" class="form-btn-for-r" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <button type="submit" class="btn btn-danger mt-2 min">Ջնջել</button>
      </form>
    </div>
  </div>
  <hr>
@endforeach