@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center mt-5">
            @foreach($posts as $index => $post)
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