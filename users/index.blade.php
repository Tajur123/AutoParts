@extends('admin.index')
@section('content')
<div class="col-12">
    <div class="card recent-sales overflow-auto">
      <div class="filter">
        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
          <li class="dropdown-header text-start">
            <h6>User</h6>
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
              <th scope="col">NAMA</th>
              <th scope="col">EMAIL</th>
              <th scope="col">TANGGAL BERGABUNG</th>
              <th scope="col">TERAKHIR BERGABUNG</th>
              <th scope="col">POSISI</th>
            </tr>
          </thead>
          <tbody>
            @php $no =1; @endphp
            @foreach($users as $row)
            <tr>
              <th scope="row">{{$no++}}</th>
              <td>{{$row->full_name}}</td>
              <td>{{$row->email}}</td>
              <td>{{$row->join_date}}</td>
              <td>{{$row->last_login}}</td>
              <td>{{$row->permissions}}</td>
              <td>
                <a class="btn btn-info btn-sm" title="Detail User"
                href="{{ route('users.show',$row->id) }}">
                    <i class="bi bi-eye"></i>
                </a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
</div>
@endsection