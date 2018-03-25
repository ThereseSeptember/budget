@extends('layouts.master') 
@section('content')
<section class="section">
  <div class="container">
    <div class="columns">
      <div class="column is-4">
      <a href="{{ route('newEntry', [3]) }}" class="button is-primary">
                    <span class="icon">
                      <i class="fal fa-plus"></i>
                    </span>
                    <span>New Entry</span> 
                  </a>
      </div>
      <div class="column is-4">
          <div class="tabs is-centered">
              <ul>
                <li class="is-active"><a>Overview</a></li>
              <li><a href="{{ route('categories', [3]) }}">Categories</a></li>
              <li><a href="{{ route('recurring', [3]) }}">Recurring</a></li>
              </ul>
            </div>
      </div>
      <div class="column is-4">
        <nav class="breadcrumb is-right" aria-label="breadcrumbs">
          <ul>
            <li><a href="{{ route('overview') }}">Budgets</a></li>
            <li class="is-active"><a href="#" aria-current="page">{{ $title }}</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</section>
<section class="section" style="padding-top:0">
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
    <div class="card">
      <div class="card-content">
        <h1 class="title">Upcoming</h1>
        <h2 class="subtitle">Planned payments</h2>
        <table class="table is-fullwidth is-hoverable is-striped">
          <thead>
            <tr>
              <th>Name</th>
              <th>Amount</th>
              <th>Category</th>
              <th>Date</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Spotify</td>
              <td class="has-text-danger">-149,00 kr</td>
              <td><span class="tag is-primary"><span class="icon is-small"><i class="fal fa-music"></i></span><span>Spotify</span></span></td>
              <td><abbr title="12-12-2018">In 2 days</abbr></td>
              <td>
                <p class="field">
                  <a class="button is-small is-dark">
                        <span class="icon is-small">
                            <i class="fal fa-pencil"></i>
                        </span>
                      </a>
                  <a class="button is-small is-danger">
                        <span class="icon is-small">
                            <i class="fal fa-times"></i>
                        </span>
                      </a>
                </p>
              </td>
            </tr>
            <tr>
              <td>D2F Server (Tommy)</td>
              <td class="has-text-success">50,00 kr</td>
              <td><span class="tag is-primary"><span class="icon is-small"><i class="fal fa-server"></i></span><span>Server</span></span>
              </td>
              <td><abbr title="15-12-2018">In 5 days</abbr></td>
              <td>
                <p class="field">
                  <a class="button is-small is-dark">
                    <span class="icon is-small">
                        <i class="fal fa-pencil"></i>
                    </span>
                  </a>
                  <a class="button is-small is-danger">
                    <span class="icon is-small">
                        <i class="fal fa-times"></i>
                    </span>
                  </a>
                </p>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="card">
      <div class="card-content">
        <h1 class="title">Payment Stream</h1>
        <table class="table is-fullwidth is-hoverable is-striped">
          <thead>
            <tr>
              <th>Name</th>
              <th>Amount</th>
              <th>Category</th>
              <th>Date</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Slik</td>
              <td class="has-text-danger">-2468,31 kr</td>
              <td><span class="tag is-primary"><span class="icon is-small"><i class="fal fa-trash-alt"></i></span><span>Junk</span></span>
              </td>
              <td><abbr title="12-12-2018">2 days ago</abbr></td>
              <td>
                <p class="field">
                  <a class="button is-small is-dark">
                                <span class="icon is-small">
                                    <i class="fal fa-pencil"></i>
                                </span>
                              </a>
                  <a class="button is-small is-danger">
                                <span class="icon is-small">
                                    <i class="fal fa-times"></i>
                                </span>
                              </a>
                </p>
              </td>
            </tr>
            <tr>
              <td>Indbosforsikring</td>
              <td class="has-text-success">61,28 kr</td>
              <td><span class="tag is-primary"><span class="icon is-small"><i class="fal fa-book"></i></span><span>Insurance</span></span>
              </td>
              <td><abbr title="15-12-2018">6 days ago</abbr></td>
              <td>
                <p class="field">
                  <a class="button is-small is-dark">
                            <span class="icon is-small">
                                <i class="fal fa-pencil"></i>
                            </span>
                          </a>
                  <a class="button is-small is-danger">
                            <span class="icon is-small">
                                <i class="fal fa-times"></i>
                            </span>
                          </a>
                </p>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>
@endsection