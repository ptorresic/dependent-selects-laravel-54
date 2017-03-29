@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-5 col-md-offset-1">
            <a href="{{ route('locations.index') }}"><img src="{{ asset('dependent-selects.jpg') }}" alt="Dependent Selects"></a>
        </div>
        <div class="col-md-5">
            <div class="panel panel-default">
                <div class="panel-heading">Discussion</div>
                <div class="panel-body">
                    <div id="disqus_thread"></div>
                    <script>
                        (function() { // DON'T EDIT BELOW THIS LINE
                            var d = document, s = d.createElement('script');
                            s.src = 'https://dependent-selects.disqus.com/embed.js';
                            s.setAttribute('data-timestamp', +new Date());
                            (d.head || d.body).appendChild(s);
                        })();
                    </script>
                    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                </div>
                <div class="panel panel-footer"></div>
            </div>
        </div>
    </div>
</div>
@endsection
