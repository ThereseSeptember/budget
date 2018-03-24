@extends('layouts.master')

@section('content')
<section class="section">
        <div class="container">
            <a class="button is-primary" style="float:left;">
              <span class="icon">
                <i class="fal fa-plus"></i>
              </span>
              <span>New Entry</span> 
            </a>
          <nav class="breadcrumb is-right" aria-label="breadcrumbs">
            <ul>
            <li><a href="{{ route('overview') }}">Budgets</a></li>
            <li class="is-active"><a href="#" aria-current="page">{{ $title }}</a></li>
            </ul>
          </nav>
        </div>
        </section>
<section class="section">
        <div class="container">
                <nav style="margin-bottom:10px" class="pagination is-centered is-small" role="navigation" aria-label="pagination">
                    <a class="pagination-previous">Previous Month</a>
                    <a class="pagination-next" disabled>Next Month</a>
                    <ul class="pagination-list">
                            <li>
                              <a class="pagination-link is-current" aria-label="Page 46" aria-current="page">March 2018</a>
                          </ul>
                </nav>
                <div class="card">
                    <div class="card-content">
        <nav class="level">
                <div class="level-item has-text-centered">
                        <div>
                                <p class="heading">Spent</p>
                                <p class="title has-text-primary">3.456,20 kr</p>
                            </div>
                </div>
                <div class="level-item has-text-centered">
                        <div>
                                <p class="heading">Left</p>
                                <p class="title">1.132,01 kr</p>
                            </div>
                </div>
                <div class="level-item has-text-centered">
                  <div>
                    <p class="heading">Per Day</p>
                    <p class="title">45,69 kr</p>
                  </div>
                </div>
                <div class="level-item has-text-centered">
                  <div>
                    <p class="heading">Compared to last month</p>
                    <p class="title has-text-danger">-22%</p>
                  </div>
                </div>
              </nav>
            </div>
            </div>
            </div>
</section>
@endsection
