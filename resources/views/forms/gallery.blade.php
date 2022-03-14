<form action="{{route('create.gallery')}}" method="post" enctype="multipart/form-data">
  {{csrf_field()}}
  <div class="mb-3 width-40">
    <input type="file" name="img" class="form-control" required>
  </div>
  <button type="submit" class="btn btn-primary min">Ավելացնել</button>
</form>
<hr>
<div style="display: flex; flex-wrap: wrap;">
  @foreach($gallery as $gal)
    <div style="margin: 20px;">
      <form action="{{route('del.gallery', $gal->id)}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="mb-3 width-40">
          <p><img width="100" src="{{$gal->img}}"></p>
        </div>
        <button type="submit" class="btn btn-danger mt-2 min">Ջնջել</button>
      </form>
    </div>
  @endforeach
</div>
