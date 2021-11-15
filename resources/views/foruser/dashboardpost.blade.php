@extends('foruser.header')
@section('konten')
<div class="container">
    <div class="row">
        <div class="col-md-12"  style="padding-top: 30px;">
            <p style="font-size: 30px;"><b> MyPost</b></p>
        </div>
        <div class="col-md-12"  style="padding-top: 30px;">
            <hr style="height:2px;border-width:0;color:gray;background-color:gray">
            <div class="add_a_comment">
                <div class="single_media_title"><h2>Tambahkan Postingan</h2></div>
                <div class="comment_form">
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" id="inputName" placeholder="Judul">
                        </div>
                        <div class="form-group">
                            <select class="form-control" id="exampleFormControlSelect1" >
                            <option>Masak an</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            </select>
                        </div>
                        <div class="form-group comment">
                            <textarea class="form-control" id="inputComment" placeholder="Comment"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="file" class="form-control" id="foto">
                        </div>

                        <button type="submit" class="btn btn-submit red">Submit</button>
                    </form>
                </div><!--comment_form-->
            </div><!--add_a_comment-->
        </div>
        <div class="col-md-12"  style="padding-top: 30px;">
            <hr style="height:2px;border-width:0;color:gray;background-color:gray">
            <div class="single_media_title"><h2>Postingan Tesimpan</h2></div>
            <button type="button" class="btn btn-danger" style="float: right;">Hapus</button><button type="button" class="btn btn-success" style="float: right;">Edit</button>
            <table class="table table-striped table-dark">
                <thead>
                  <tr>
                    <th scope="col" width="10%">Pilih</th>
                    <th scope="col" width="25%">Foto</th>
                    <th scope="col" width="25%">Judul</th>
                    <th scope="col">Isi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row"><div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        </label>
                      </div></th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                  </tr>
                  <tr>
                    <th scope="row"><div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        </label>
                      </div></th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                  </tr>
                  <tr>
                    <th scope="row"><div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
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
