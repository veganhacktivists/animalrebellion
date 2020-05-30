@extends('layouts.app')

@section('content')

  @forelse($blogPosts as $blogPost)

  @empty
    <div class="flex-fill align-items-center justify-content-center mt-5 mb-5">
      <h4 class="text-center">Please come back to see more blog posts from Animal Rebellion</h4>
    </div>
  @endforelse
@endsection
