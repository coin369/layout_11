<div class="form-group col-sm-6">
    <label for="{{$tag->id}}">{{$tag->input_label}}</label>
    <br/>
    @if($tag->input_type=='file')
        <div class="">
            <input type="file" id="Image" name="meta[{{$tag->id}}]" class="form-control-lg">
            <span class="">
                @if(!empty($tag->content))
                    <img src="{{$tag->content}}" width="120px">
                @endif
            </span>
        </div>
  
       
    @endif

    <span class="text-muted form-text">{{$tag->input_info}}</span>
</div>