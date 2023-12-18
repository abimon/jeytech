@extends('layouts.admin')
@section('content')

<!-- End Page Title -->
<section class="section dashboard">
  <div class="row">

    <!-- Right side columns -->
    <div class="col-lg-6">

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
    <!-- Right side columns -->
    <div class="col-lg-6">

      <!-- Recent Posts -->
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Unread Messages <span><!--| Today--></span></h5>

          <div class="activity w-100">
            @foreach($messages as $message)
            <div class="activity-item d-flex">
              <div class="activite-label">{{($message->updated_at)->diffForHumans()}}</div>
              <div class="activity-content" data-bs-toggle="modal" data-bs-target="#show{{$message->id}}">
                <b class="text-danger">{{$message->subject}}</b>
                <p>&ldquo;{{$message->message}}&rdquo;</p>
                <p class="text-end">- {{$message->name}}</p>
              </div>
              <div class="modal fade" id="show{{$message->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">{{$message->subject}}</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-dark">
                      
                      <p>
                        <b>
                          <i>&ldquo;{{$message->message}}&rdquo;</i>
                        </b>
                      </p>
                      <p>{{$message->name}}<br>{{$message->email}}<br>{{$message->contact}}</p>
                    </div>
                    <div class="modal-footer">
                      <a href="/message/read/{{$message->id}}"><button type="button" class="btn btn-info">Read</button></a>
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>

        </div>
      </div>

    </div>
    <!-- End Right side columns -->

  </div>
</section>
@endsection