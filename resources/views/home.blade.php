@extends('layouts.app')

@section('content')

@include('partials.page-header')

@if($custom_posts)
    @foreach($custom_posts as $post)
        <div class="columns">
            <div class="column">
                <h3>{{ $post['title'] }}</h3>
                <p>{{ $post['content'] }}</p>
                @if($post['example_meta_field'])
                    <strong>Example meta field:</strong>
                    <p>{{ $post['example_meta_field'] }}</p>
                @endif
            </div>
        </div>
    @endforeach
    @else
    <div class="notification is-danger">
        No custom posts found, try creating an example custom post at <a href="/wp/wp-admin/edit.php?post_type=my-custom-post-type">/wp-admin</a>.
    </div>
@endif

<example-component></example-component>

@endsection
