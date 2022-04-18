@extends('client.layouts.master')
@section('head')
    <link href="/css/blog-style.css" rel="stylesheet" />
    <link href="/css/general.css" rel="stylesheet" />
    <link href="/css/queries.css" rel="stylesheet" />
    <link href="/css/style.css" rel="stylesheet" />
    <script defer src="js/script.js"></script>
    <title>5 Regeln, die Sie tun, die Ihre Wimpernverlängerung ruinieren</title>
    <style>
        .row {
	 padding: 50px 0;
}
 .seperator {
	 margin-bottom: 30px;
	 width: 35px;
	 height: 3px;
	 background: #777;
	 border: none;
}
 .title {
	 text-align: center;
}
 .title .row {
	 padding: 50px 0 0;
}
 .title h1 {
	 text-transform: uppercase;
}
 .title .seperator {
	 margin: 0 auto 10px;
}
 .item {
	 position: relative;
	 margin-bottom: 30px;
	 min-height: 1px;
	 float: left;
	 -webkit-backface-visibility: hidden;
	 -webkit-tap-highlight-color: transparent;
	 -webkit-touch-callout: none;
	 -webkit-user-select: none;
	 -moz-user-select: none;
	 -ms-user-select: none;
	 user-select: none;
}
 .item .item-in {
	 background: #fff;
	 padding: 40px;
	 position: relative;
}
 .item .item-in:hover:before {
	 width: 100%;
}
 .item .item-in::before {
	 content: "";
	 position: absolute;
	 bottom: 0px;
	 height: 2px;
	 width: 0%;
	 background: #333;
	 right: 0px;
	 -webkit-transition: width 0.4s;
	 transition: width 0.4s;
}
 .item h4 {
	 font-size: 18px;
	 margin-top: 25px;
	 letter-spacing: 2px;
	 text-transform: uppercase;
}
 .item p {
	 font-size: 12px;
}
 .item a {
	 font-family: 'Montserrat', sans-serif;
	 font-size: 12px;
	 text-transform: uppercase;
	 color: #666;
	 margin-top: 10px;
}
 .item a i {
	 opacity: 0;
	 padding-left: 0px;
	 transition: 0.4s;
	 font-size: 24px;
	 display: inline-block;
	 top: 5px;
	 position: relative;
}
 .item a:hover {
	 text-decoration: none;
}
 .item a:hover i {
	 padding-left: 10px;
	 opacity: 1;
	 font-weight: 300;
}
 .item .icon {
	 position: absolute;
	 top: 27px;
	 left: -16px;
	 cursor: pointer;
}
 .item .icon a {
	 font-family: 'Merriweather', serif;
	 font-size: 14px;
	 font-weight: 400;
	 color: #999;
	 text-transform: none;
}
 .item .icon svg {
	 width: 32px;
	 height: 32px;
	 float: left;
}
 .item .icon .icon-topic {
	 opacity: 0;
	 padding-left: 0px;
	 transition: 0.4s;
	 display: inline-block;
	 top: 0px;
	 position: relative;
}
 .item .icon:hover .icon-topic {
	 opacity: 1;
	 padding-left: 10px;
}
 @media only screen and (max-width: 768px) {
	 .item .icon {
		 position: relative;
		 top: 0;
		 left: 0;
	}
}

    </style>
@endsection
@section('content')
    <div class="container">
        <header class="main-header clearfix">
            {{-- <h1>{{ $post->title }}</h1> --}}
        </header>

        <article>
            <header class="post-header">
                {{-- {!! $post->content !!} --}}
            </header>
            <div class="container">
                <div class="col-md-6 item">
                    <div class="item-in">
                      <h4>Some Kind of Title</h4>
                      <div class="seperator"></div>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi expedita eveniet consectetur, voluptates voluptatum, sit excepturi earum. Veniam eius amet, accusantium, deserunt officia, quos qui debitis laboriosam velit quis autem!</p>
                      <a href="#">Read More
                        <i class="fa fa-long-arrow-right"></i>
                      </a>
                    </div>
                  </div>
                  <div class="col-md-6 item">
                    <div class="item-in">
                      <h4>Some Kind of Title</h4>
                      <div class="seperator"></div>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi expedita eveniet consectetur, voluptates voluptatum, sit excepturi earum. Veniam eius amet, accusantium, deserunt officia, quos qui debitis laboriosam velit quis autem!</p>
                      <a href="#">Read More
                        <i class="fa fa-long-arrow-right"></i>
                      </a>
                    </div>
                  </div>
            </div>
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
                        <a href="{{ route('blog', ['id' => 0]) }}" class="related-link">{{ $post->title }}</a>
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
@endsection
