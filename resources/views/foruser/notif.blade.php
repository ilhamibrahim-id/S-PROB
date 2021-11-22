@extends('foruser.header')
@section('konten')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="readers_comment">
                <div class="single_media_title">
                    <h2>Notifications</h2>
                </div>
                <div class="media">
                    <div class="media-left">
                        <a href="/detailmaster">
                            <img alt="64x64" class="media-object" data-src="img/img-author1.jpg" src="img/img-author1.jpg" data-holder-rendered="true">
                        </a>
                    </div>
                    <div class="media-body">
                        <h2 class="media-heading">Sr. Ryan  | 14/02/2021 - 19:00:01</h2>
                        But who has any right to find fault with a man who chooses to enjoy a pleasure that has
                        no annoying consequences, or one who avoids a pain that produces no resultant pleasure?
                    </div>
                </div>
            </div>
            <!--readers_comment-->
        </div>
    </div>
</div>
@include('foruser.footer')
@endsection
