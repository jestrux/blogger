<x-blogger-data :publishedOnly="$publishedOnly" :rowId="$id">
    @verbatim
        @php
            $blog = $data;
            $creator_json =  !is_null($blog) && !is_null($blog->creator_json) ? json_decode($blog->creator_json) : null;
            $cover = !is_null($creator_json) ? $creator_json->cover : null;
            $cover_class = !is_null($cover) ? 'cover-image-' . $cover->options->width : null;
            $slug = !is_null($blog) ? $blog->slug() : "";
            $blog_title = is_null($blog) ? "" : preg_replace("/\\\\'/", "'", $blog->title);
            $blog_link = 'https://www.ipfsoftwares.com/insights/' . $slug;
            $blog_desc = is_null($blog) ? "" : $blog->short_body();
            $twitter_link = "https://twitter.com/intent/tweet?text=Checkout this blog by @ipfsoftwares. " . urlencode($blog_title . " " . $blog_link . ".");
            $facebook_link = "https://www.facebook.com/sharer.php?s=100&p[url]=" . $blog_link;
        @endphp

        @if ($blog != null)    
            <div id="blogBody">
                @if($blog->cover_url != null)
                    <div class="flex justify-center">
                        <div class="w-full lg:rounded-lg relative bg-red overflow-hidden">
                            <div id="blogImage" style="margin-top: 0" class="blogpost-section-wrapper {{$cover_class}}">
                                <img src="{{$blog->cover_url}}" alt="">
                            </div>
                        </div>
                    </div>
                @endif
                
                <div class="px-4 lg:px-0">
                    <div id="blogTitleWrapper" class="blogpost-section-wrapper my-0">
                        <div id="blogTitle">
                            <h1 style="overflow: visible;">
                                {{ $blog_title }}
                            </h1>
                        </div>
                        <span id="blogDate">
                            @if(!is_null($blog->author))
                                By {{ $blog->author }}
                            @endif
        
                            @if(!is_null($blog->author) && !is_null($blog->published_at))
                                <span style="color: #777;"> &nbsp;|&nbsp; </span>
                            @endif
        
                            @if($blog->published_at != null) 
                                <small style="letter-spacing: 0.05em">{{ $blog->published_at->format('M d, Y') }}</small>
                            @endif
                        </span>
                    </div>
        
                    <div class="blog-content">
                        {!! $blog->body; !!}
                    </div>
                </div>
            </div>
            
            <script>
                function addLink(href) {
                    var headID = document.getElementsByTagName('head')[0];
                    var link = document.createElement('link');
                    link.type = 'text/css';
                    link.rel = 'stylesheet';
                    headID.appendChild(link);
                    link.href = href;
                };
            
                function addScript(src) {
                    var script = document.createElement('script');
                    script.type = 'text/javascript';
                    script.async = true;
                    script.src = src;
                    var s = document.getElementsByTagName('script')[0];
                    s.parentNode.insertBefore(script, s);
                };
            
                function addResources(){
                    addLink("https://fonts.googleapis.com/css?family=Caudex:400,400i,700");
                    addLink("{{asset('blogger/css/blog-detail.css')}}");
                    // addScript();
                }
            
                addResources();
            </script>
        @endif
    @endverbatim
</x-blogger-data>
