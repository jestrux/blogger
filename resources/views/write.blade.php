<x-blogger-data :rowId="isset($id) && $id != null ? $id : ''">
    @verbatim
        <div id=app>
            <blog-creator
                blog="{{isset($data) && $data != null ? json_encode($data) : null}}"
                youtube-api-key="AIzaSyAq8HPrbemKw4a23McQJD9ksl2w2lGAcII"
                unsplash-client-id="17ef130962858e4304efe9512cf023387ee5d36f0585e4346f0f70b2f9729964"
                image-upload-url="s3"
                save-url="{{url('admin/blogs/save')}}"
                :s3-config="{
                    bucketName: '{{env('MIX_S3_BUCKET')}}',
                    region: '{{env('MIX_S3_REGION')}}',
                    accessKeyId: '{{env('MIX_S3_ACCESS_KEY_ID')}}',
                    secretAccessKey: '{{env('MIX_S3_SECRET_ACCESS_KEY')}}',
                }"
            />
        </div>
    @endverbatim
</x-blogger-data>

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
        addLink("{{asset('blogger/css/insight_detail.css')}}");
        addLink("{{asset('blogger/css/blog-creator.css')}}");
        addLink("{{asset('blogger/css/blog-write.css')}}");
        // addScript();
    }

    addResources();
</script>

<script src="{{ asset('blogger/js/blog-creator.js') }}"></script>
<script src="{{ asset('blogger/js/chunk-vendors.js') }}"></script>