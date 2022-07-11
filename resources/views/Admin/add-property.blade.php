@extends('layouts.app')
@section('content')
<section class="about-area pd-top-120">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                @include('Admin.sidebar')
            </div>
            <div class="col-md-8">
                <form action="" method="POST" enctype="multipart/form-data"> @csrf
                    <div class="form-group">
                        <label for="text">name</label>
                        <input type="" value="" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">price</label>
                        <input type="text" value="" name="price" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">description</label>
                        <input type="text" value="" name="description" class="form-control">
                    </div>
                    <div class="input-group">
                        <input type="file" multiple name="images[]" required accept="image/*" >
                        <div class="custom-file">
                            {{-- <label class="custom-file-label"  for="uploadPhoto" aria-describedby="uploadPhotoAddon"></label> --}}
                        </div>
                    </div>
                </div>
                    <div class="form-group">
                        <label for="">description</label>
                        <input type="text" value="" name="s_price" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">description</label>
                        <input type="text" value="" name="location" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">description</label>
                        <input type="text" value="" name="rooms" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">description</label>
                        <input type="text" value="" name="area" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="inputEmail">Type</label>
                        <select name="type" required class="form-control">
                            <option>bungalow</option>
                            <option>duplex</option>
                            <option>skyscraper</option>
                            <option>glass house</option>
                            <option>field</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">description</label>
                        <input type="text" value="" name="keyword" class="form-control">
                    </div>
 <div class="form-group">
                        <label for="">description</label>
                        <input type="text" value="" name="amenities" class="form-control">
                    </div>
                    <div class="input-group">
                        <input type="file" multiple name="video[]" required accept="video/*" >
                        <div class="custom-file">
                            {{-- <label class="custom-file-label"  for="uploadPhoto" aria-describedby="uploadPhotoAddon"></label> --}}
                        </div>
                    </div>

                    <button class="btn btn-primary mt-3">add</button>
                </form>

            <h4>Hello {{ Auth::User()->name}}</h4>
            <label for="text">name</label>
            <input type="" value=" {{ Auth::User()->name}}" name="name" class="form-control">
        </div>
    </div>




</section>
@endsection

