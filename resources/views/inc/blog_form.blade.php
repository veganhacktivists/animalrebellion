<div  class="container">

{!! Form::open(['url' => '#']) !!}
<textarea id="blog-content" name="content" hidden></textarea>
{!! Form::close() !!}

</div>
<script>
  window.addEventListener('DOMContentLoaded', (event) => {
    Laraberg.init('blog-content', { laravelFilemanager: true })
    Laraberg.setContent
  });
</script>
