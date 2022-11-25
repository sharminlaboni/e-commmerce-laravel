@props(['name','type','label' => '','value' => ''])

<div class="form-group">

 @if($label)
        <label for="{{$name}}" class="form-label">{{ $label }}</label>
    @endif

    <input name="{{$name}}"
       type="{{$type}}"
     id="{{$name}}"
     value="{{ $value }}"

     {{ $attributes->merge(['class' => 'form-control']) }}/>

  </div>
