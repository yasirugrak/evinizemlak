<div class="form-group">
    {{ Form::label($name, $isim, ['class' => 'control-label col-sm-2']) }}
    <div class="col-sm-10">
    {{ Form::password($name, array_merge(['class' => 'form-control', 'placeholder' => $placeholder ], $attributes)) }}
    </div>
</div>