@extends('admin.index')
@section('content')
<div class="col-12">
    <div class="card recent-sales overflow-auto">
      <div class="filter">
        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
          <li class="dropdown-header text-start">
            <h6>Brand</h6>
          </li>

          <li><a class="dropdown-item" href="#">Today</a></li>
          <li><a class="dropdown-item" href="#">This Month</a></li>
          <li><a class="dropdown-item" href="#">This Year</a></li>
        </ul>
      </div>

      <div class="card-body">
        <table class="table table-borderless datatable">
          <thead>
            <tr>
              <th scope="col">NO</th>
              <th scope="col">BRAND</th>
            </tr>
          </thead>
          <tbody>
            @php $no =1; @endphp
            @foreach($brand as $row)
            <tr>
              <th scope="row">{{$no++}}</th>
              <td>{{$row->brand}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
</div>
@endsection