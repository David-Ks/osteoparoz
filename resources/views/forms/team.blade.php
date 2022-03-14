<form action="{{route('create.team')}}" method="post" enctype="multipart/form-data">
  {{csrf_field()}}
  <div class="mb-3 width-40">
    <label for="name" class="form-label">Անուն</label>
    <input type="text" class="form-control" id="name" name="name" required>
  </div>
  <div class="mb-3 width-40">
    <label for="skill" class="form-label">Մասնագիտացում</label>
    <input type="text" class="form-control" id="skill" name="skill" required>
  </div>
  <div class="mb-3 width-40">
    <input type="file" name="img" class="form-control" required>
  </div>
  <select class="form-select width-40" style="height: 50px; width: 20%;" name="team_type_id" aria-label="Default select example" required>
    @foreach($team_types as $type)
      <option value="{{$type->id}}">{{$type->title}}</option>
    @endforeach
  </select>
  <br>
  <button type="submit" class="btn btn-primary min">Ավելացնել</button>
</form>
<hr>
@foreach($teams as $team)
  <div>
    <form action="{{route('change.team', $team->id)}}" method="post" enctype="multipart/form-data">
      {{csrf_field()}}
      <div style="display: flex; flex-wrap: wrap;">
        <div class="mb-3 width-40 margin">
          <label for="name" class="form-label">Անուն</label>
          <input type="text" class="form-control" id="name" name="name" value="{{$team->name}}">
        </div>
        <div class="mb-3 width-40 margin">
          <label for="skill" class="form-label">Մասնագիտացում</label>
          <input type="text" class="form-control" id="skill" name="skill" value="{{$team->skill}}">
        </div>
        <div class="mb-3 width-40 margin">
          <label for="img" class="form-label">Նկար</label>
          <p><img width="100" src="{{$team->img}}"></p>
          <input type="file" name="img" class="form-control" required>
        </div>
        <select class="form-select width-40 margin" style="height: 50px; width: 20%;" name="team_type_id" aria-label="Default select example">
          <option value="{{$team->team_type->id}}" selected>{{$team->team_type->title}}</option>
          @foreach($team_types as $type)
            @if($type->id != $team->team_type->id)
              <option value="{{$type->id}}">{{$type->title}}</option>
            @endif
          @endforeach
        </select>
        <br>
      </div>
      <button type="submit" class="btn btn-primary min">Թարմացնել</button>
    </form>
    <div style="position: relative;">
      <form action="{{route('del.team', $team->id)}}" class="form-btn-for-r" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <button type="submit" class="btn btn-danger mt-2 min">Ջնջել</button>
      </form>
    </div>
  </div>
  <hr>
@endforeach