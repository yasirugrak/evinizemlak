<div class="input-group">
    <span class="input-group-addon"><i class="fa {{$icon}}"></i></span>
    {{ Form::text($name, $value, array_merge(['class' => 'form-control', 'placeholder' => $placeholder], $attributes)) }}
</div>
<br/>