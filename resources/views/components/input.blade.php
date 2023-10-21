<div class="mb-3">
    <label for="" class="form-label"> {{$label}} </label>
    <input type="{{$type}}" name="{{$name}}" class="form-control" id="text" >
    <span class="text-danger">

        {{-- @error('name')
            {{$message}}
        @enderror --}}

    </span>
</div>