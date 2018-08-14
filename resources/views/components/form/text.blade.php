<div class="form-group">
    {{ Form::label($name, $isim, ['class' => 'col-sm-2 control-label']) }}
    <div class="col-sm-10">
        {{ Form::text($name, $value, array_merge(['class' => 'form-control', 'placeholder' => $placeholder], $attributes)) }}
    </div>
</div>