@extends('layout.master')
@push('css')

@endpush
@section('content')
<link rel="stylesheet" type="text/css"
      href="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.11.5/b-2.2.2/b-html5-2.2.2/b-print-2.2.2/date-1.1.2/fc-4.0.2/fh-3.2.2/r-2.2.9/rg-1.1.4/sc-2.0.5/sb-1.3.2/sl-1.3.4/datatables.min.css" />
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

            <table class="table table-striped" id="table-index">
                  <thead>

                        <tr>
                              <th> # </th>
                              <th>Name</th>
                              <th>Created at</th>
                              <th>Edit</th>
                              <th>delete</th>
                        </tr>

                  </thead>

            </table>

      </div>
</div>

@endsection

@push('js')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript"
      src="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.11.5/b-2.2.2/b-html5-2.2.2/b-print-2.2.2/date-1.1.2/fc-4.0.2/fh-3.2.2/r-2.2.9/rg-1.1.4/sc-2.0.5/sb-1.3.2/sl-1.3.4/datatables.min.js">
</script>
<script>
$(function() {
      $('#table-index').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!!route('courses.api')!!}',
            columns: [{
                        data: 'id',
                        name: 'id'
                  },
                  {
                        data: 'name',
                        name: 'name'
                  },
                  {
                        data: 'created_at',
                        name: 'created_at'
                  },
            ]
      });
});
</script>

@endpush