@extends('layouts.master') 
@section('content')
<section class="section">
    <div class="container">
        <div class="columns">
            <div class="column is-4 is-offset-4">
                <div class="card">
                    <div class="card-content">
                        <h1 class="title">New Recurring Entry</h1>
                        <div class="field">
                            <label class="label">Name</label>
                            <div class="control">
                                <input class="input" type="text" placeholder="Pommes Frites">
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Category</label>
                            <div class="control">
                                <div class="select">
                                    <select>
                                          <option>Spotify</option>
                                          <option>Insurance</option>
                                          <option>Server</option>
                                          <option>Junk</option>
                                        </select>
                                </div>
                            </div>
                        </div>
                        <label class="label">Amount</label>
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
                        <div class="field">
                            <div class="control">
                                <label class="radio">
                                        <input type="radio" name="question" checked="checked">
                                        Expense
                                      </label>
                                <label class="radio">
                                        <input type="radio" name="question">
                                        Income
                                      </label>
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Day of month</label>
                            <div class="control">
                                <input class="input" type="number" placeholder="1">
                            </div>
                        </div>
                        <div class="field is-grouped">
                            <div class="control">
                                <button class="button is-link">Submit</button>
                            </div>
                            <div class="control">
                                <a href="{{ route('recurring', [$budget->id]) }}" class="button is-text">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection