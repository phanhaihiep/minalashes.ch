@extends('client.layouts.master')
@section('head')
    <link href="/css/blog-style.css" rel="stylesheet" />
    <link href="/css/general.css" rel="stylesheet" />
    <link href="/css/queries.css" rel="stylesheet" />
    <link href="/css/style.css" rel="stylesheet" />
    <script defer src="js/script.js"></script>
    <title>5 Regeln, die Sie tun, die Ihre Wimpernverlängerung ruinieren</title>
@endsection
@section('content')
<style>
.date {
    font-size: 11px
}

.comment-text {
    font-size: 12px
}

.fs-12 {
    font-size: 12px
}

.shadow-none {
    box-shadow: none
}

.name {
    color: #007bff
}

.cursor:hover {
    color: blue
}

.cursor {
    cursor: pointer
}

.textarea {
    resize: none
}
</style>

@if($post)
    <div class="container">
        <header class="main-header clearfix">
            <h1>{{ $post->title }}</h1>
        </header>

        <article>
            <section class="post-header">
                {!! $post->content !!}
            </section>
            </section>
                <div class="mt-5">
                    <div class="d-flex justify-content-center row box">
                        @foreach($comments as $cmt)
                            @if (!$cmt->parent_id)
                            <div class="col-md-12">
                                <div class="d-flex flex-column comment-section">
                                    <div class="bg-white p-2">
                                        <div class="d-flex flex-row user-info">
                                            <img class="rounded-circle" src="https://images.squarespace-cdn.com/content/v1/54b7b93ce4b0a3e130d5d232/1519987020970-8IQ7F6Z61LLBCX85A65S/icon.png" width="40">
                                            <div class="d-flex flex-column justify-content-start ml-2">
                                                <span class="d-block font-weight-bold name">{{ $cmt->user_id ? $cmt->user->name : 'User Global'  }}</span>
                                                <span class="date text-black-50">{{ $newDate = date("d-m-Y h:i", strtotime($cmt->created_at)) }}</span>
                                            </div>
                                            <div class="float-right mr-5">
                                                <ion-icon data-id="{{ $cmt->id }}" class="reply" name="arrow-redo-circle-outline"></ion-icon>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="bg-white">
                                        <div class="mt-2">
                                            <p class="comment-text">{{ $cmt->content }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row ml-4 {{ 'box_reply_'.$cmt->id}}">
                                    @foreach($comments as $cmt2)
                                        @if ($cmt->id == $cmt2->parent_id)
                                        <div class="col-md-12">
                                            <div class="d-flex flex-column comment-section">
                                                <div class="bg-white p-2">
                                                    <div class="d-flex flex-row user-info">
                                                        <img class="rounded-circle" src="https://images.squarespace-cdn.com/content/v1/54b7b93ce4b0a3e130d5d232/1519987020970-8IQ7F6Z61LLBCX85A65S/icon.png" width="40">
                                                        <div class="d-flex flex-column justify-content-start ml-2">
                                                            <span class="d-block font-weight-bold name">{{ $cmt2->user_id ? $cmt2->user->name : 'User Global'  }}</span>
                                                            <span class="date text-black-50">{{ $newDate = date("d-m-Y h:i", strtotime($cmt2->created_at)) }}</span>
                                                        </div>                                   
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="bg-white">
                                                    <div class="mt-2">
                                                        <p class="comment-text">{{ $cmt2->content }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endif                      
                                    @endforeach
                                </div>     
                            </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="bg-light p-2 row">
                                <div class="col-md-11">
                                    <div class="d-flex flex-row align-items-start">
                                        <img class="rounded-circle" src="https://images.squarespace-cdn.com/content/v1/54b7b93ce4b0a3e130d5d232/1519987020970-8IQ7F6Z61LLBCX85A65S/icon.png" width="40">
                                        <textarea class="form-control content ml-1 shadow-none textarea"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <ion-icon data-id="{{ $post->id }}" class="send" name="arrow-redo-circle-outline"></ion-icon>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
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
            {{-- <div id="disqus_thread"></div>
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
            > --}}
        </section>
    </div>
    <script>
        var parent_id = null;

        $(".send").click(function(){
            if ($('.content').val()) {
                $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: '{{ route("cmt") }}',
                data: {
                    content: $('.content').val(),
                    post_id: $(this).attr('data-id'),
                    parent_id: parent_id
                },
                type: 'POST',
                success: function(res) {
                    if (res.status == 200) {
                        var today = new Date();
                        $(parent_id ? '.box_reply_'+parent_id : '.box').append(`
                        <div class="col-md-12">
                                <div class="d-flex flex-column comment-section">
                                    <div class="bg-white p-2">
                                        <div class="d-flex flex-row user-info"><img class="rounded-circle" src="https://images.squarespace-cdn.com/content/v1/54b7b93ce4b0a3e130d5d232/1519987020970-8IQ7F6Z61LLBCX85A65S/icon.png" width="40">
                                            <div class="d-flex flex-column justify-content-start ml-2"><span class="d-block font-weight-bold name">User Global</span><span class="date text-black-50">
                                                ${today.getDate()+'-'+(today.getMonth()+1)+'-'+today.getFullYear() + ' ' + today.getHours()+':'+today.getMinutes()}
                                                </span></div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="bg-white">
                                        <div class="mt-2">
                                            <p class="comment-text">${$('.content').val()}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        `);
                        $('.content').val('');
                    }
                },
                });
            }
        });

        $('.reply').click(function() {
            parent_id = $(this).attr('data-id');
            $('.textarea').focus();
        })
    </script>
@endif
@endsection
