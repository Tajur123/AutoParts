@extends('admin.index')
@section('content')
<div class="col-12">
    <div class="card recent-sales overflow-auto">
      <div class="filter">
        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
          <li class="dropdown-header text-start">
            <h6>Products</h6>
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
              <th scope="col">BARANG</th>
              <th scope="col">HARGA</th>
              <th scope="col">LIST HARGA</th>
              <th scope="col">BRAND</th>
              <th scope="col">KATEGORI</th>
              <th scope="col">GAMBAR</th>
              <th scope="col">DESKRIPSI</th>
              <th scope="col">UNGGULAN</th>
            </tr>
          </thead>
          <tbody>
            @php $no =1; @endphp
            @foreach($products as $row)
            <tr>
              <th scope="row">{{$no++}}</th>
              <td>{{$row->title}}</td>
              <td>{{$row->price}}</td>
              <td>{{$row->list_price}}</td>
              <td>{{$row->brand}}</td>
              <td>{{$row->categories}}</td>
              <td>{{$row->image}}</td>
              <td>{{$row->description}}</td>
              <td>{{$row->featured}}</td>
              <td>
                <a class="btn btn-info btn-sm" title="Detail Transaksi"
                href="{{ route('products.show',$row->id) }}">
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