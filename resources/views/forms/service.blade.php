<form action="{{route('create.service')}}" method="post" enctype="multipart/form-data">
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
    <input type="file" name="img" class="form-control" required>
  </div>
  <select class="form-select width-40" style="height: 50px; width: 20%;" name="service_type_id" aria-label="Default select example" required>
    @foreach($service_type as $type)
      <option value="{{$type->id}}">{{$type->title}}</option>
    @endforeach
  </select>
  <br>
  <button type="submit" class="btn btn-primary min">Ավելացնել</button>
</form>
<hr>
@foreach($services as $service)
  <div>
    <form action="{{route('change.service', $service->id)}}" method="post" enctype="multipart/form-data">
      {{csrf_field()}}
      <div style="display: flex; flex-wrap: wrap;">
        <div class="mb-3 width-40 margin">
          <label for="title" class="form-label">Անվանում</label>
          <input type="text" class="form-control" id="title" name="title" value="{{$service->title}}">
        </div>
        <div class="mb-3 width-40 margin">
          <label for="text" class="form-label">Տեքստ</label>
          <textarea class="form-control" id="text" name="text" rows="3">{{$service->text}}</textarea>
        </div>
        <div class="mb-3 width-40 margin">
          <label for="img" class="form-label">Նկար</label>
          <p><img width="100" src="{{$service->img}}"></p>
          <input type="file" name="img" class="form-control">
        </div>
        <select class="form-select width-40 margin" style="height: 50px; width: 20%;" name="service_type_id" aria-label="Default select example">
          <option value="{{$service->service_type->id}}" selected>{{$service->service_type->title}}</option>
          @foreach($service_type as $type)
            @if($type->id != $service->service_type->id)
              <option value="{{$type->id}}">{{$type->title}}</option>
            @endif
          @endforeach
        </select>
        <br>
      </div>
      <button type="submit" class="btn btn-primary min">Թարմացնել</button>
    </form>
    <div style="position: relative;">
      <form action="{{route('del.service', $service->id)}}" class="form-btn-for-r" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <button type="submit" class="btn btn-danger mt-2 min">Ջնջել</button>
      </form>
    </div>
  </div>
  <hr>
@endforeach