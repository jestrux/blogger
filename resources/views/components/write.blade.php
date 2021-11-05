<link href="https://fonts.googleapis.com/css?family=Caudex:400,400i,700" rel="stylesheet" />

<style>
    #content{
        margin-top: 2rem !important;
    }
    header{
        top: 48px !important;
    }
    #headerWrapper{
        height: 45px !important;
        padding: 0 !important;
        padding-left: 9rem !important;
        max-width: 72rem !important;
    }
    #headerWrapper button{
        padding: 0.9rem;
    }
    main{
        background: white !important;
    }
</style>
{{-- <link rel="stylesheet" href="{{ asset('blogger/css/flex.css') }}" /> --}}
<link rel="stylesheet" href="{{ asset('blogger/css/insight_detail.css') }}" />
<link rel="stylesheet" href="{{ asset('blogger/css/blog-creator.css') }}" />
<style>
    #insightTitle h1, #insightTitle #blogTitle{
    font-family: 'Bariol'
    }
    .inline-editor {
    position: relative;
    }
    .inline-editor .ql-container.ql-snow {
    border: none !important;
    }
    .inline-editor .ql-editor {
    min-height: 0 !important;
    padding: 0 !important;
    }
    .inline-editor .ql-picker:not(.ql-background) {
    top: 0 !important;
    }
    .inline-editor .ql-snow.ql-toolbar {
    -webkit-box-shadow: 0 1px 4px 1px rgba(0, 0, 0, 0.2);
            box-shadow: 0 1px 4px 1px rgba(0, 0, 0, 0.2);
    position: absolute;
    top: -36px;
    left: 0;
    background: #eee;
    border-radius: 3px;
    display: -webkit-inline-box !important;
    display: -ms-inline-flexbox !important;
    display: inline-flex !important;
    border: none !important;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    -webkit-box-pack: justify;
        -ms-flex-pack: justify;
            justify-content: space-between;
    z-index: 1;
    height: 40px;
    -webkit-transition: opacity 0.1s ease-out, -webkit-transform 0.1s ease-out;
    transition: opacity 0.1s ease-out, -webkit-transform 0.1s ease-out;
    transition: opacity 0.1s ease-out, transform 0.1s ease-out;
    transition: opacity 0.1s ease-out, transform 0.1s ease-out, -webkit-transform 0.1s ease-out;
    }
    .inline-editor:not(.focused) .ql-snow.ql-toolbar {
    opacity: 0;
    -webkit-transition: none;
    transition: none;
    }
    .inline-editor .ql-snow.ql-toolbar .ql-formats {
    margin: 0 !important;
    margin-right: 15px !important;
    }
    .inline-editor .ql-snow .ql-editor h2,
    .inline-editor .ql-snow .ql-editor h3 {
    font-family: "Bariol", sans-serif;
    color: #444;
    font-size: 1.7em !important;
    margin-top: 0.3em !important;
    margin-bottom: 0.1em !important;
    max-width: 80%;
    }
    .inline-editor .ql-snow .ql-editor h3 {
    font-size: 1.5em !important;
    }
    .inline-editor .ql-snow.ql-toolbar .ql-formats:last-child {
    margin-right: 8px !important;
    }
    .inline-editor .ql-snow.ql-toolbar .ql-formats:first-child {
    margin-left: 4px !important;
    }
    .inline-editor .ql-snow.ql-toolbar button svg,
    .inline-editor .ql-snow.ql-toolbar button svg {
    width: 18px !important;
    height: 18px !important;
    }
    .inline-editor .ql-editor.ql-blank:before {
    font-style: normal !important;
    top: 3px;
    left: 0 !important;
    right: auto !important;
    font-size: 1.1em;
    color: #ccc;
    }
    /* INLINE EDITOR */
    .inline-editor .ql-snow .ql-editor h2,
    .inline-editor .ql-snow .ql-editor h3 {
        font-family: "Bariol", sans-serif;
    }
    .inline-editor .ql-snow .ql-editor h3 {
        font-size: 1.5em !important;
    }
    .inline-editor .ql-snow .ql-editor p {
        font-family: OpenSans, sans-serif !important;
    }
    .inline-editor .ql-editor.ql-blank:before {
        font-family: OpenSans, sans-serif !important;
    }
    
    .inline-editor .ql-snow .ql-editor h2,
    .inline-editor .ql-snow .ql-editor h3 {
        font-family: "Bariol", sans-serif;
        color: #444;
        font-size: 1.7em !important;
        margin-top: 0.3em !important;
        margin-bottom: 0.1em !important;
        max-width: 80%;
    }
    .inline-editor .ql-snow .ql-editor h3 {
        font-size: 1.5em !important;
    }
    
    .inline-editor .ql-snow .ql-editor p {
        font-family: Caudex, serif !important;
        font-size: 1.1em !important;
        color: #000 !important;
    }
    .inline-editor .ql-editor.ql-blank:before {
        font-style: normal !important;
        top: 4px;
        left: 0 !important;
        right: auto !important;
        font-family: Caudex, serif !important;
        font-size: 1.1em;
        color: #ccc;
    }
</style>

<div id=app>
    <blog-creator
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

<script src="{{ asset('blogger/js/blog-creator.js') }}"></script>
<script src="{{ asset('blogger/js/chunk-vendors.js') }}"></script>