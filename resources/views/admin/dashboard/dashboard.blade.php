@extends('layouts.master')


@section('title')
    Registered Roles
@endsection


@section('content')

<div class="container-fluid">
    <!-- Info boxes -->
    <div class="row">
      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box">
          <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Products Sold</span>
            <span class="info-box-number">
              {{ $totals }}
              <small>Products</small>
            </span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
          <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Orders</span>
          <span class="info-box-number">{{$orders->count()}}</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->

      <!-- fix for small devices only -->
      <div class="clearfix hidden-md-up"></div>

      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
          <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Today's Sales</span>
          <span class="info-box-number">₱ {{ $expensesTotal }}</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
          <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Users</span>
            <span class="info-box-number">{{ $users->count() }}</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title">Monthly Recap Report</h5>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <div class="btn-group">
                <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                  <i class="fas fa-wrench"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right" role="menu">
                  <a href="#" class="dropdown-item">Action</a>
                  <a href="#" class="dropdown-item">Another action</a>
                  <a href="#" class="dropdown-item">Something else here</a>
                  <a class="dropdown-divider"></a>
                  <a href="#" class="dropdown-item">Separated link</a>
                </div>
              </div>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-8">
                <p class="text-center">
                  <strong>Sales: 1 Jan, 2014 - 30 Jul, 2014</strong>
                </p>
                <div class="chart">
                  <canvas id="salesChart" height="180" style="height: 180px;"></canvas>
                </div>
              </div>
              <div class="col-md-4">
                <p class="text-center">
                  <strong>Goal Completion</strong>
                </p>
                <div class="progress-group">
                  Orders in Proccess
                  <span class="float-right"><b>{{ DB::table('orders')->where('status', 'processing')->count()}}</b>/200</span>
                  <div class="progress progress-sm">
                    <div class="progress-bar bg-primary" style="width: {{ DB::table('orders')->where('status', 'processing')->count()}}%"></div>
                  </div>
                </div>
                <div class="progress-group">
                  Delivered Orders
                  <span class="float-right"><b>{{ DB::table('orders')->where('status', 'delivered')->count()}}</b>/400</span>
                  <div class="progress progress-sm">
                    <div class="progress-bar bg-danger" style="width: {{ DB::table('orders')->where('status', 'delivered')->count()}}%"></div>
                  </div>
                </div>
                <div class="progress-group">
                  <span class="progress-text">Shipped Orders</span>
                  <span class="float-right"><b>{{ DB::table('orders')->where('status', 'shipped')->count()}}</b>/800</span>
                  <div class="progress progress-sm">
                    <div class="progress-bar bg-success" style="width: {{ DB::table('orders')->where('status', 'shipped')->count()}}%"></div>
                  </div>
                </div>
                <div class="progress-group">
                  Pending Orders
                <span class="float-right"><b>{{ DB::table('orders')->where('status', 'pending')->count()}}</b>/500</span>
                  <div class="progress progress-sm">
                    <div class="progress-bar bg-warning" style="width: {{ DB::table('orders')->where('status', 'pending')->count()}}%"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>



    <div class="row">
      <div class="col-md-4">
        <div class="row">
          <div class="col-md-12">
        <div class="card ">
            <div class="card-header bg-success">
              <h3 class="card-title">Recently Added Products</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <div class="card-body p-0">
              <ul class="products-list product-list-in-card pl-2 pr-2">
                @foreach ($products as $product)
                <li class="item">
                  <div class="product-img">
                    <img src="/storage/display_images/{{ $product->display_image }}" alt="" width="40" class="img-fluid rounded shadow-sm">
                  </div>
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title">{{ $product->name }}
                    <span class="badge badge-warning float-right">{{ $product->price}}</span></a>
                    <span class="product-description">
                     {{$product->description}}
                    </span>
                  </div>
                </li>
                @endforeach
              </ul>
            </div>
            <div class="card-footer text-center">
              <a href="/listedproducts" class="uppercase">View All Products</a>
            </div>
          </div>
          </div>
        </div>
      </div>
<!-- PRODUCT LIST -->
      <div class="col-md-4">
        <div class="row">
          <div class="col-md-12">
        <div class="card">
            <div class="card-header text-white bg-info">
              <h3 class="card-title">Recent Posts</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <div class="card-body p-0">
              <ul class="products-list product-list-in-card pl-2 pr-2">
                @if(count($blogs)>0)
                @foreach ($blogs as $blog)
                <li class="item">
                  <div class="product-img">
                    <img src="/storage/display_images/{{ $blog->display_image }}" alt="" width="40" class="img-fluid rounded shadow-sm">
                  </div>
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title">{{ $blog->title }}
                    <span class="badge badge-warning float-right">{{ Carbon\Carbon::parse($blog->created_at)->format('d-M-Y')}}</span></a>
                    <span class="product-description">
                     {{ $blog->description }}
                    </span>
                  </div>
                </li>
                @endforeach
                @else
                <div class="alert alert-default" role="alert">
                    <h6 class="text-center">You have not posted any events</h6>
                </div>
                @endif
              </ul>
            </div>
            <div class="card-footer text-center">
              <a href="/posts" class="uppercase">View All Posts</a>
            </div>
          </div>
          </div>
        </div>
      </div>

      <!-- /.col -->

      <div class="col-md-4">
        <!-- /.card -->
        <div class="row">

          <!-- /.col -->
          <div class="col-md-12">

        <!-- RECENT INQUIRIES -->
        <div class="card">
            <div class="card-header text-white bg-warning">
              <h3 class="card-title">Recent Inquiries</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <ul class="products-list product-list-in-card pl-2 pr-2">
                @if(count($contacts)>0)
                @foreach ($contacts as $contact)
                <li class="item">
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title">{{ $contact->name }}
                    <span class="badge badge-warning float-right">{{ Carbon\Carbon::parse($contact->created_at)->format('d-M-Y')}}</span></a>
                    <span class="product-description">
                     {{ $contact->description }}
                    </span>
                  </div>
                </li>
                @endforeach
                <!-- /.item -->
                @else
                <div class="alert alert-default" role="alert">
                    <h6 class="text-center">No Inqueries Yet</h6>
                </div>
                @endif
              </ul>
            </div>
            <!-- /.card-body -->
            <div class="card-footer text-center">
              <a href="/messages" class="uppercase">View All Inqueries</a>
            </div>
            <!-- /.card-footer -->
          </div>
            <!--/.card -->
          </div>
          <!-- /.col -->
        </div>

        <!-- /.row -->
        <!-- /.card -->
      </div>

  </div><!--/. container-fluid -->
@endsection

@section('script')

@endsection
