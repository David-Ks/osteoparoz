@foreach($settings as $setting)
  <form action="{{route('change.settings')}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="mb-3 width-40">
      <label for="block_id{{$setting->id}}" class="form-label">
        @if($setting->id == 1)
          ՄԵՐ ՄԱՍԻՆ
        @elseif($setting->id == 2)
          ՄԵՐ ԹԻՄԸ
        @elseif($setting->id == 3)
          ՄԱՍՆԱԳԵՏՆԵՐԻՆ
        @elseif($setting->id == 4)
          ՊԱՑԻԵՆՏՆԵՐԻՆ
        @else
          ԿՐԹՈՒԹՅՈՒՆ
        @endif
      </label>
      <input type="number" class="form-control" id="block_id{{$setting->id}}" name="block_id" value="{{$setting->id}}" style="display: none;">
    </div>
    <div class="mb-3 width-40">
      <textarea class="form-control" id="text{{$setting->id}}" name="text" rows="5" required>{{$setting->text}}</textarea>
    </div>
    <button type="submit" class="btn btn-primary min">Թարմացնել</button>
  </form>
  <hr>
@endforeach
