<div id="bloggerComponent{{$instanceId}}"
     blogger-data-component="{{$instanceId}}"
>
    {!! eval('?>'.Blade::compileString($slot)) !!}
</div>