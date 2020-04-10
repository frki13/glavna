@if(count($errors)>0)

    @foreach ($errors->all() as $error)

        <div class="alert alert-danger">
            {{ $error }}
        </div>
    @endforeach
@endif

@if(session('success'))
<div class="container">
<div class="alert alert-success alert-dismissible">
    <a href="/posts" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    {{ session('success') }}
</div>
</div>

@endif

@if(session('error'))
<div class="alert alert-danger">
    {{ session('error') }}
</div>

@endif
