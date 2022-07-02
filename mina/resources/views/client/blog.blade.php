@extends('client.layouts.master')
@section('head')
    <link href="/css/blog-style.css" rel="stylesheet" />
    <link href="/css/general.css" rel="stylesheet" />
    <link href="/css/queries.css" rel="stylesheet" />
    <link href="/css/style.css" rel="stylesheet" />
    <script  src="js/script.js"></script>
    <title>5 Regeln, die Sie tun, die Ihre Wimpernverlängerung ruinieren</title>
@endsection
@section('content')
    @if (isset($post))
        <div class="container" >
        <header class="main-header clearfix">
            <h1>{{ $post->title }}</h1>
        </header>

        <article>
            <header class="post-header">
                {!! $post->content !!}
            </header>
        </article>

        <aside>
            <h4>Related posts</h4>

            <ul class="related">
                @foreach($posts as $post)
                <li class="related-post">
                    <div style="width: 75px;">
                        <img
                        src="{{ $post->user->avatar }}"
                        alt=""
                        width="75"
                        height="75"
                        />
                    </div>

                    <div>
                        <a href="{{ route('blogDetail', ['id' => $post->id]) }}" class="related-link">{{ $post->title }}</a>
                        <p class="related-author">{{ $post->user->name }}</p>
                    </div>
                </li>
                @endforeach
            </ul>
        </aside>
        <!-- </div> -->
        <section>
            <div id="disqus_thread"></div>
            <script>
                /**
                 *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                 *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
                /*
                  var disqus_config = function () {
                  this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                  this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                  };
                  */
                (function () {
                    // DON'T EDIT BELOW THIS LINE
                    var d = document,
                        s = d.createElement("script");
                    s.src = "https://minalashes-ch.disqus.com/embed.js";
                    s.setAttribute("data-timestamp", +new Date());
                    (d.head || d.body).appendChild(s);
                    console.log(s)
                })();
            </script>
            <noscript
            >Please enable JavaScript to view the
                <a href="https://disqus.com/?ref_noscript"
                >comments powered by Disqus.</a
                ></noscript
            >
        </section>
    </div>
    @endif
@endsection
