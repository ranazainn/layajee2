@error($input)

<span class="help-block">
    <small class="text-danger font-weight-bold gothic-normel js-error-handle" input-name="{{$input}}" >{{ $message  }}</small>
</span>
@enderror