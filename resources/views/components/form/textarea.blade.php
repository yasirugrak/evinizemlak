<div class="form-group">
    {{ Form::label($name, $isim, ['class' => 'control-label col-sm-2']) }}
    <div class="col-sm-10">
    {{ Form::textarea($name, $value, array_merge(['class' => 'form-control', 'rows' => $rows, 'placeholder' => $placeholder], $attributes)) }}
    </div>
</div>