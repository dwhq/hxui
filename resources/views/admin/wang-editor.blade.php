{{--<div class="form-group {!! !$errors->has($label) ?: 'has-error' !!}">--}}

    {{--<label for="{{$id}}" class="col-sm-2 control-label">{{$label}}</label>--}}

    {{--<div class="{{$viewClass['field']}}">--}}
    {{--<div class="col-sm-{{$width['field']}}">--}}
        {{--@include('admin::form.error')--}}

        {{--<div id="{{$id}}" style="width: 100%; height: 100%;">--}}
            {{--<p>{!! old($column, $value) !!}</p>--}}
        {{--</div>--}}

        {{--<input type="hidden" name="{{$name}}" value="{{ old($column, $value) }}" />--}}

    {{--</div>--}}
{{--</div>--}}
{{--<script type="text/javascript">--}}
{{--</script>--}}
<div class="form-group {!! !$errors->has($label) ?: 'has-error' !!}">

    <label for="{{$id}}" class="col-sm-2 control-label">{{$label}}</label>

    <div class="col-sm-{{$viewClass['field']}}">

        @include('admin::form.error')

        <div id="{{$id}}" style="width: 100%; height: 100%;">
            <p>{!! old($column, $value) !!}</p>
        </div>

        <input type="hidden" name="{{$name}}" value="{{ old($column, $value) }}" />

    </div>
</div>