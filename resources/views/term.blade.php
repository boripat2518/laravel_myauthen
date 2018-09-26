@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">Term and condition</div>

                <div class="card-body">
                  <textarea rows="10" readonly class="form-control">{{ $term }}</textarea>
                </div>

                <div class="card-footer">
                  <div class="row">
                    <div class="col">
                    <input type="checkbox"> Accept term and condition
                    </div>
                    <div class="coljustify-content-right">
                      <button class="btn btn-primary">Accepts</button>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
