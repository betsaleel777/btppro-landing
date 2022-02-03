@if (session('success'))
    <div id="message" class="alert alert-success">
        <em id="type">success</em>
        <span>{!! session('success') !!}</span>
    </div>
@endif
@if (session('fail'))
    <div id="message" class="alert alert-danger">
        <em id="type">error</em>
        <span>{!! session('fail') !!}</span>
    </div>
@endif
@if (session('warning'))
    <div id="message" class="alert alert-warning">
        <em id="type">warning</em>
        <span>{!! session('warning') !!}</span>
    </div>
@endif
@if (session('info'))
    <div id="message" class="alert alert-info">
        <em id="type">info</em>
        <span>{!! session('info') !!}</span>
    </div>
@endif
