@extends('AdminViews.adminlayouts.admin_master')

@section('content')

<div id="main">
  <div class="row">
    <div id="breadcrumbs-wrapper" data-image="../../../app-assets/images/gallery/breadcrumb-bg.jpg">
      <div class="container">
        <div class="row">
          <div class="col s10 m6 l6">
            <h5 class="breadcrumbs-title mt-0 mb-0">Home</h5>
            <ol class="breadcrumbs mb-0">
              <li class="breadcrumb-item">Home
              </li>
              <li class="breadcrumb-item active">
                <a href="{{route('home')}}">NotifiCation</a>
              </li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <div class="col s12">
      <div class="container">
        <div class="section  section-data-tables">
            <div class="row">
                <div class="col s12">
                <div class="card">
                    <div class="card-content">
                    <div class="row">
                        <div class="col s12 m12 " style="overflow:auto ;overflow-x: scroll;">
                        <button id="btn-nft-enable" onclick="initFirebaseMessagingRegistration()" class="btn btn-danger btn-xs btn-flat">Allow for Notification</button>
                        <form action="{{ route('send.notification') }}" method="POST">
                            @CSRF
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" class="form-control" name="title">
                            </div>
                            <div class="form-group">
                                <label>Body</label>
                                <textarea class="form-control" name="body"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Send Notification</button>
                        </form>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    </div>
    </div>


      @endsection

      @section('js')

      <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js">
      </script>
<script src="https://www.gstatic.com/firebasejs/7.23.0/firebase.js"></script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

<script>
    var firebaseConfig = {
        apiKey: "AIzaSyBqYZ2uvK1HLqOfVUyooyQ284c4vy3pN5U",
        authDomain: "layajee-364711.firebaseapp.com",
        projectId: "layajee-364711",
        storageBucket: "layajee-364711.appspot.com",
        messagingSenderId: "157359371978",
        appId: "1:157359371978:web:650e79c2af1c0f1528a633",
        measurementId: "G-62RD46PTJY"
    };
    firebase.initializeApp(firebaseConfig);
    const messaging = firebase.messaging();
    function initFirebaseMessagingRegistration() {
            messaging
            .requestPermission()
            .then(function () {
                return messaging.getToken()
            })
            .then(function(token) {
                console.log(token);
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: '{{ route("save-token") }}',
                    type: 'POST',
                    data: {
                        token: token
                    },
                    dataType: 'JSON',
                    success: function (response) {
                        alert('Token saved successfully.');
                    },
                    error: function (err) {
                        console.log('User Chat Token Error'+ err);
                    },
                });
            }).catch(function (err) {
                console.log('User Chat Token Error'+ err);
            });
     }

messaging.onMessage(function(payload) {
    const noteTitle = payload.notification.title;
    const noteOptions = {
        body: payload.notification.body,
        icon: payload.notification.icon,
    };
    new Notification(noteTitle, noteOptions);
});
</script>
   

      @endsection