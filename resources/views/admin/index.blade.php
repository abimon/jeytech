@extends('layouts.admin')
@section('content')

<!-- End Page Title -->
<section class="section dashboard">
  <div class="row">

    <!-- Right side columns -->
    <div class="col-lg-8">

      <!-- Recent Posts -->
      <div class="card">
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