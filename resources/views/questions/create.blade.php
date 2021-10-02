@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <h2>{{ __('All Questions') }}</h2>
                            <div class="ml-auto">
                                <a href="{{route('questions.index')}}" class="btn btn-outline-secondary">{{ __('Back to all questions') }}</a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <form action="{{route('questions.store')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="question-title">{{ __('Question Title') }}</label>
                                <input type="text" name="title" id="question-title" class="form-control">
                                @if($errors->has('title'))
                                    <div class="invalid-feedback">
                                        <strong>{{$errors->first('body')}}</strong>
                                    </div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="question-body">{{ __('Explain your question') }}</label>
                                <textarea name="title" id="question-body" rows="10" class="form-control"></textarea>
                                @if($errors->has('body'))
                                    <div class="invalid-feedback">
                                        <strong>{{$errors->first('body')}}</strong>
                                    </div>
                                @endif
                            </div>
                            <div class="form-group">
                                  <button type="submit" class=" btn btn-outline-primary btn-lg">Ask this Question</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

