@csrf
<div class="form-group">
    <label for="question-title">{{ __('Question Title') }}</label>
    <input type="text" name="title" value="{{old('title',$question->title)}}" id="question-title" class="form-control {{$errors->has('title') ? 'is-invalid':''}}">
    @error('title')
        <div class="invalid-feedback">
            <strong>{{$message}}</strong>
        </div>
    @enderror
</div>
<div class="form-group">
    <label for="question-body">{{ __('Explain your question') }}</label>
    <textarea name="body" id="question-body" rows="10" class="form-control {{$errors->has('body') ? 'is-invalid':''}}">{{old('body',$question->body)}}</textarea>
    @error('body')
        <div class="invalid-feedback">
            <strong>{{$message}}</strong>
        </div>
    @enderror
</div>
<div class="form-group">
    <button type="submit" class=" btn btn-outline-primary btn-lg">{{$buttonText}}</button>
</div>
