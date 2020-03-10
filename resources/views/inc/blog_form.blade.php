<div  class="container">

{!! Form::open(['url' => '#']) !!}
<textarea id="blog-content" name="content" hidden></textarea>
{!! Form::close() !!}

</div>
<script>
  Laraberg.init('blog-content', { laravelFilemanager: true })
</script>
