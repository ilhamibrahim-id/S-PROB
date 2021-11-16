@extends('foruser.header')
@section('konten')
<div class="container">
    <div class="row">
        <div class="col-md-12"  style="padding-top: 30px; padding-bottom: 30px;">
            <p style="font-size: 30px;"><b>Tambahkan Post</b></p>
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
                            <textarea class="form-control" id="inputComment" placeholder="Deskripsi"></textarea>
                        </div>
                        <div class="form-group comment">
                            <textarea class="form-control" id="inputComment" placeholder="Tag Kategori gunakan (,) sebagai pemisah"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="file" class="form-control" id="foto">
                        </div>

                        <button type="submit" class="btn btn-submit red">Submit</button>
                    </form>
                </div><!--comment_form-->
            </div><!--add_a_comment-->
        </div>
        </div>
    </div>
</div>
@include('foruser.footer')
@endsection
