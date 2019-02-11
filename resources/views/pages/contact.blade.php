@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <p class="description">You can contact us with anything related to our Products. We'll
                                    get in touch with you as soon as possible.
                                    <br>
                                    <br>
                                </p>
                                <form action="/contact" role="form" id="contact-form" method="post">
                                    @csrf
                                    <div class="form-group bmd-form-group">
                                        <label for="name" class="bmd-label-floating">Your name</label>
                                        <input name="name" type="text" class="form-control" id="name">
                                    </div>
                                    <div class="form-group bmd-form-group">
                                        <label for="exampleInputEmails" class="bmd-label-floating">Email address</label>
                                        <input name="email" type="email" class="form-control" id="exampleInputEmails">
                                        <span class="bmd-help">We'll never share your email with anyone else.</span>
                                    </div>
                                    <div class="form-group bmd-form-group">
                                        <label for="phone" class="bmd-label-floating">Phone</label>
                                        <input name="phone" type="text" class="form-control" id="phone">
                                    </div>
                                    <div class="form-group label-floating bmd-form-group">
                                        <label class="form-control-label bmd-label-floating" for="message"> Your
                                            message</label>
                                        <textarea name="text" class="form-control" rows="6" id="message"></textarea>
                                    </div>
                                    <div class="submit text-center">
                                        <input type="submit" class="btn btn-primary btn-raised btn-round"
                                               value="Contact Us">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection