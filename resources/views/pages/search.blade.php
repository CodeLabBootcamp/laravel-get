@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-body">
                        <form method="get">
                            <div class="form-group">
                                <label for="term">Search</label>
                                <input class="form-control" id="term" type="text" name="term">
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-auto">
                                    <button type="submit" class="btn btn-primary">Submit</button>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            @foreach($results as $index => $post)
                <div class="col-md-{{ ($index + 1) % 3 == 0 ? "12" : "6" }}">
                    <div class="card card-blog">
                        <div class="card-header card-header-image">
                            <a href="#pablo">
                                <img class="img"
                                     src="https://images.unsplash.com/photo-1511439817358-bee8e21790b5?auto=format&fit=crop&w=750&q=80&ixid=dW5zcGxhc2guY29tOzs7Ozs%3D">
                                <div class="card-title">
                                    {{ $post['title'] }}
                                </div>
                            </a>
                        </div>
                        <div class="card-body">
                            <h6 class="card-category text-info">{{$post['category']}}</h6>
                            <p class="card-description">
                                {{$post['text']}}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
@endsection