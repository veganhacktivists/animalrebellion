@extends('layouts.app')

@section('content')
  <div class="container">
    @forelse($blogPosts as $blogPost)
      <hr>

      <div class="card">
        <div class="card-header">
          <h4>
            <a href="{{ route('blog.show', $blogPost) }}" style="text-decoration: none;">
              {{ $blogPost->title }}
            </a>
          </h4>
          <span class="text-muted">{{ $blogPost->created_at->diffForHumans() }}</span>
        </div>

        <div class="card-body">
          <div class="flex-fill justify-content-center align-items-center">
            {!! str_limit($blogPost->content, 500) !!} ...

            <div>
              <a href="{{ route('blog.show', $blogPost) }}" class="btn btn-primary">Read More</a>
            </div>
          </div>ta
        </div>
      </div>
    @empty
      <div class="flex-fill align-items-center justify-content-center mt-5 mb-5">
        <h4 class="text-center">Please come back to see more blog posts from Animal Rebellion</h4>
      </div>
    @endforelse

    <div class="row mt-5">
      <div class="pagination-links mx-auto">
        {{ $blogPosts->links() }}
      </div>
    </div>
  </div>
@endsection
