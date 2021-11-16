@extends('foruser.header')
@section('konten')
<div class="container">
    <div class="row">
        <div class="col-lg-4 col-xs-12 col-md-6">
            <div class="card" style="padding-bottom: 25px; padding-top: 10px;">
                  <img class="img-responsive" src="img/category.jpg" alt="Chania" width="450px;">

                <div class="card-body">
                    <a href="/detail">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Quick sample text to create the card title and make up the body of the card's content.</p>
                    </a>
                    <div class="comment_box">
                        <div class="comments_icon"> <i class="fa fa-comments" aria-hidden="true"></i></div>
                        <div class="comments"><a href="#">20 Comments</a></div>
                    </div><!--comment_box-->
                </div>
            </div>
        </div>
    </div>
</div>
@include('foruser.footer')
@endsection
