@extends('admin.index')
@section('content')
<div class="col-12">
    <div class="card recent-sales overflow-auto">
      <div class="filter">
        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
          <li class="dropdown-header text-start">
            <h6>Jabatan</h6>
          </li>

          <li><a class="dropdown-item" href="#">Today</a></li>
          <li><a class="dropdown-item" href="#">This Month</a></li>
          <li><a class="dropdown-item" href="#">This Year</a></li>
        </ul>
      </div>

      <div class="card-body">
        <h5 class="card-title">Data Transaksi</h5>
        <a class="btn btn-info btn-sm" title="kembali" href="{{routes('transcations.create')}}">
          <i class="bi bi-save"></i>
        </a>
        <table class="table table-borderless datatable">
          <thead>
            <tr>
              <th scope="col">NO</th>
              <th scope="col">NAMA</th>
              <th scope="col">EMAIL</th>
              <th scope="col">ALAMAT</th>
              <th scope="col">SUB TOTAL</th>
              <th scope="col">TAX</th>
              <th scope="col">GRAND TOTAL</th>
              <th scope="col">DESKRIPSI</th>
              <th scope="col">TXN_TYPE</th>
              <th scope="col">TXN_DATE</th>
            </tr>
          </thead>
          <tbody>
            @php $no =1; @endphp
            @foreach($transactions as $row)
            <tr>
              <th scope="row">{{$no++}}</th>
              <td>{{$row->full_name}}</td>
              <td>{{$row->email}}</td>
              <td>{{$row->street}}</td>
              <td>{{$row->sub_total}}</td>
              <td>{{$row->tax}}</td>
              <td>{{$row->grand_total}}</td>
              <td>{{$row->description}}</td>
              <td>{{$row->txn_type}}</td>
              <td>{{$row->txn_date}}</td>
              <td>
                <a class="btn btn-info btn-sm" title="Detail Transaksi"
                href="{{ route('transactions.show',$row->id) }}">
                    <i class="bi bi-eye"></i>
                </a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
</div>
@endsection