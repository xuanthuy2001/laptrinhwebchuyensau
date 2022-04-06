@extends('layout.master')

@section('content')

<div class="cart">
      @if($errors->any())
      <div class="cart-header">
            <div class="alert alert-danger">
                  <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                  </ul>
            </div>
      </div>
      @endif

      <div class="cart-body">

            <a class="btn btn-success" href="{{route('courses.create')}}">thêm</a>
            <form class="float-right form-group form-inline" action="">

                  <label for=""> Search: </label>
                  <input class="form-control" type="search" name="q" value="{{$search}}">

            </form>


            <table class="table table-striped">


                  <tr>
                        <th> # </th>
                        <th>Name</th>
                        <th>Created at</th>
                        <th>Edit</th>
                        <th>delete</th>
                  </tr>

                  @foreach ($data as $each )
                  <tr>

                        <td>{{$each -> id}}</td>
                        <td>{{$each -> name}}</td>
                        <td>{{$each -> getYearCreateAtAttribute()}}</td>
                        <td><a class="btn btn-primary" href="{{route('courses.edit', $each)}}">
                                    sua
                              </a></td>
                        <td>
                              <form action="{{route('courses.destroy',$each )}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">DELETE</button>
                              </form>
                        </td>
                  </tr>

                  @endforeach
            </table>
            <nav>
                  <ul class="pagination pagination-rounded mb-0">
                        {{ $data->links() }}
                  </ul>
            </nav>
      </div>
</div>

@endsection