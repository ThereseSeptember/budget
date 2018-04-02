@extends('layouts.master') 
@section('content')
<section class="section">
  <div class="container">
    <div class="columns">
      <div class="column is-4 is-offset-4">
        <div class="card">
        <form action="{{ route('newEntry', [$budget->id]) }}" method="POST" class="card-content">
          @csrf  
          <h1 class="title">New Entry</h1>
            <div class="field">
              <label class="label">Name</label>
              <div class="control">
                <input class="input" name="name" type="text" placeholder="Pommes Frites">
              </div>
            </div>
            <div class="field">
              <label class="label">Category</label>
              <div class="control">
                <div class="select">
                  <select name="category">
                    @foreach($categories as $category)
                  <option value="{{$category->id}}">{{ $category->name }}</option>
                  @endforeach
                                      </select>
                </div>
              </div>
            </div>
            <label class="label">Amount</label>
            <div class="field has-addons">
              <p class="control is-expanded">
                <input name="amount" class="input" type="text" placeholder="100,00">
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
                                    <input type="radio" name="type" value="expense" checked="checked">
                                    Expense
                                  </label>
                <label class="radio">
                                    <input type="radio" name="type" value="income">
                                    Income
                                  </label>
              </div>
            </div>
            <div class="field is-grouped">
              <div class="control">
                <button class="button is-link" type="submit">Submit</button>
              </div>
              <div class="control">
                <a href="{{ route('details', [$budget->id]) }}" class="button is-text">Cancel</a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection