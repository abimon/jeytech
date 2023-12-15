@extends('layouts.admin')
@section('content')
<div class="pagetitle">
  <h1>Dashboard</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/">Home</a></li>
      <li class="breadcrumb-item active">Dashboard</li>
    </ol>
  </nav>
</div>
<!-- End Page Title -->
<section class="section dashboard">
  <div class="row">

    <!-- Right side columns -->
    <div class="col-lg-8">

      <!-- Recent Posts -->
      <div class="card">
        <!-- <div class="filter">
          <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
            <li class="dropdown-header text-start">
              <h6>Filter</h6>
            </li>

            <li><a class="dropdown-item" href="#">Today</a></li>
            <li><a class="dropdown-item" href="#">This Month</a></li>
            <li><a class="dropdown-item" href="#">This Year</a></li>
          </ul>
        </div> -->

        <div class="card-body">
          <h5 class="card-title">Recent Posts <span><!--| Today--></span></h5>

          <div class="activity">
            @foreach($posts as $post)
            <div class="activity-item d-flex">
              <div class="activite-label">{{($post->updated_at)->diffForHumans()}}</div>
              <i class='bi bi-circle-fill activity-badge {{($post->category)=="IoT"?"text-success":(($post->category)=="Industrial Automation"?"text-info":"text-warning")}} align-self-start'></i>
              <a href="/insight/{{$post->slag}}">
              <div class="activity-content">
                {{$post->title}}
              </div>
              </a>
            </div><!-- End activity item-->
            @endforeach
          </div>

        </div>
      </div><!-- End Recent Activity -->

    </div><!-- End Right side columns -->

  </div>
</section>
@endsection