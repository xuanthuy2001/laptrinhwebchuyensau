<!-- @if ($errors->any())
<div class="alert alert-danger">
      <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
      </ul>
</div>
@endif -->

<form method="post" action="{{route('courses.store')}}">
      name
      <input type="text" name="name" value="{{old('name')}}">
      @if($errors->has('name'))
      <ul>
            @foreach ($errors->get('name') as $error)
            <li>{{ $error }}</li>
            @endforeach
      </ul>
      @endif
      <br>
      <button>Thêm</button>

      @csrf
</form>