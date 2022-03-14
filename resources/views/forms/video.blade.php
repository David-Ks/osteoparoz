<form action="{{route('create.video')}}" method="post" enctype="multipart/form-data">
  {{csrf_field()}}
  <div class="mb-3 width-40">
    <label for="title" class="form-label">Անվանում</label>
    <input type="text" class="form-control" id="title" name="title" required>
  </div>
  <div class="mb-3 width-40">
    <label for="text" class="form-label">Տեքստ</label>
    <textarea class="form-control" id="text" name="text" rows="3" required></textarea>
  </div>
  <div class="mb-3 width-40">
    <label for="iframe" class="form-label">Iframe</label>
    <textarea class="form-control" id="iframe" name="iframe" rows="4" required></textarea>
  </div>
  <br>
  <button type="submit" class="btn btn-primary">Ավելացնել</button>
</form>
<hr>
@foreach($videos as $video)
  <div>
    <form action="{{route('change.video', $video->id)}}" method="post" enctype="multipart/form-data">
      {{csrf_field()}}
      <div style="display: flex; flex-wrap: wrap;">
        <div class="mb-3 width-40 margin">
          <label for="title" class="form-label">Անվանում</label>
          <input type="text" class="form-control" id="title" name="title" value="{{$video->title}}">
        </div>
        <div class="mb-3 width-40 margin">
          <label for="text" class="form-label">Տեքստ</label>
          <textarea class="form-control" id="text" name="text" rows="3">{{$video->text}}</textarea>
        </div>
        <div class="mb-3 width-40 margin">
          <label for="iframe" class="form-label">Iframe</label>
          <textarea class="form-control" id="iframe" name="iframe" rows="4" required>{{$video->iframe}}</textarea>
        </div>
        <div style="max-height: 500px; max-width: 500px;">
          {!!$video->iframe!!}
        </div>
        <br>
      </div>
      <button type="submit" class="btn btn-primary min">Թարմացնել</button>
    </form>
    <div style="position: relative;">
      <form action="{{route('del.video', $video->id)}}" class="form-btn-for-r" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <button type="submit" class="btn btn-danger mt-2 min">Ջնջել</button>
      </form>
    </div>
  </div>
  <hr>
@endforeach