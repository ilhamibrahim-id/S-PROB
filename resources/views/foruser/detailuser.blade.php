@extends('foruser.header')
@section('konten')
<div class="container">
    <div class="row">
        <div class="col-xs-12" style="padding-top: 15px;">
            <div class="card" style="padding-bottom: 15px;">
                <div class="col-xs-12" style="padding-bottom: 15px;">
                    <center><img class="img-responsive" src="img/category.jpg" alt="Chania" width="450px;"></center>
                </div>
                <div class="card-body" style="text-align: center; padding-top: 15px;">
                    <div class="col-xs-4" style="text-align: center;">
                    <h5 class="card-title">10 <br /> Follower </br></h5>
                    </div>
                    <div class="col-xs-4" style="text-align: center;">
                        <h5 class="card-title">10 <br /> Jumlah Post</h5>
                    </div>
                    <div class="col-xs-4" style="text-align: center;">
                        <h5 class="card-title">10 <br /> Follower</h5>
                    </div>
                    <div class="col-xs-12" style="text-align: center; padding-top: 15px; padding-bottom: 15px;">
                        <a href="/edituser" class="btn btn-primary">Edit My Profil</a>
                    </div>
                    <p class="card-text">iki quotes e bang haji e iki quotes e bang haji e iki quotes e bang haji e</p>
                </div>
            </div>
        </div>
        <div class="col-md-12"  style="padding-top: 30px;">
            <hr style="height:2px;border-width:0;color:gray;background-color:gray">
            <div class="single_media_title"><h2>Postingan Saya</h2></div>
            <table class="table table-striped table-dark">
                <thead>
                  <tr>
                    <th scope="col" width="15%">Action</th>
                    <th scope="col" width="25%">Foto</th>
                    <th scope="col" width="25%">Judul</th>
                    <th scope="col">Isi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row"><div class="form-check">
                        <button type="button" class="btn btn-danger">Hapus</button><button type="button" class="btn btn-success">Edit</button>
                        </label>
                      </div></th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                  </tr>
                  <tr>
                    <th scope="row"><div class="form-check">
                        <button type="button" class="btn btn-danger">Hapus</button><button type="button" class="btn btn-success">Edit</button>
                        </label>
                      </div></th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                  </tr>
                  <tr>
                    <th scope="row"><div class="form-check">
                        <button type="button" class="btn btn-danger">Hapus</button><button type="button" class="btn btn-success">Edit</button>
                        </label>
                      </div></th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                  </tr>
                </tbody>
              </table>

              paginate
        </div>
    </div>
</div>
@include('foruser.footer')
@endsection
