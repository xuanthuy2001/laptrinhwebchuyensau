<form method="post" action="{{route('courses.update', $each)}}">
      namea
      <input type="text" name="name" value="{{$each -> name}}">
      @if($errors->has('name'))
      <ul>
            @foreach ($errors->get('name') as $error)
            <li>{{ $error }}</li>
            @endforeach
      </ul>
      @endif
      <br>
      <button>Update</button>
      @method ('PUT')
      @csrf
</form>