@extends('master')
@section('content')
<div class="bg-light py-3">
    <div class="container">
    <div class="row">
        <div class="col-md-12 mb-0"><a href="{{ route('index') }}">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Contact</strong></div>
    </div>
    </div>
</div>  

<div class="site-section">
    <div class="container">
    <div class="row">
        <div class="col-md-12">
        <h2 class="h3 mb-3 text-black">Get In Touch</h2>
        </div>
        <div class="col-md-7">

        <form action="#" method="post">
            
            <div class="p-3 p-lg-5 border">
            <div class="form-group row">
                <div class="col-md-12">
                <label for="c_fname" class="text-black">Full Name <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="c_fname" name="c_fname">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-12">
                <label for="c_email" class="text-black">Email <span class="text-danger">*</span></label>
                <input type="email" class="form-control" id="c_email" name="c_email" placeholder="">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-12">
                <label for="c_subject" class="text-black">Subject </label>
                <input type="text" class="form-control" id="c_subject" name="c_subject">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-12">
                <label for="c_message" class="text-black">Message </label>
                <textarea name="c_message" id="c_message" cols="30" rows="7" class="form-control"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-lg-12">
                <input type="submit" class="btn btn-primary btn-lg btn-block" value="Send Message">
                </div>
            </div>
            </div>
        </form>
        </div>
        <div class="col-md-5 ml-auto">
            <div class="gmap_canvas">
                <iframe width="475" height="670" id="gmap_canvas" src="https://maps.google.com/maps?q=Khoa%20C%C3%B4ng%20Ngh%E1%BB%87%20Th%C3%B4ng%20Tin%20v%C3%A0%20Truy%E1%BB%81n%20Th%C3%B4ng&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            </div>
            <style>
                .mapouter{
                    text-align:right;
                    height:670px;
                    width:475px;
                }
                .gmap_canvas{
                    overflow:hidden;
                    background:none!important;
                    height:670px;
                    width:475px;
                }
            </style>
        </div>
    </div>
    </div>
</div>
@endsection