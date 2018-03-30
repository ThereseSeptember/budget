@extends('layouts.master') 
@section('content')
<section class="section">
    <div class="container">
        <div class="columns">
            <div class="column is-4 is-offset-4">
                <div class="card">
                    <div class="card-content">
                        <h1 class="title">New Category</h1>
                        <div class="field">
                            <label class="label">Name</label>
                            <div class="control">
                                <input class="input" type="text" placeholder="Booze">
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Icon</label>
                            <div class="control">
                                <input class="input" type="text" placeholder="music">
                            </div>
                        </div>
                        <label class="label">Budgeted</label>
                        <div class="field has-addons">
                            <p class="control is-expanded">
                                <input class="input" type="text" placeholder="100,00">
                            </p>
                            <p class="control">
                                <a class="button is-static">
                                          kr
                                        </a>
                            </p>
                        </div>
                        <div class="field is-grouped">
                            <div class="control">
                                <button class="button is-link">Submit</button>
                            </div>
                            <div class="control">
                                <a href="{{ route('categories', [$budget->id]) }}" class="button is-text">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection