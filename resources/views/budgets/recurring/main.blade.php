@extends('layouts.master') 
@section('content')
<section class="section">
    <div class="container">
        <div class="columns">
            <div class="column is-4">
                <a href="{{ route('newRecurring', [$budget->id]) }}" class="button is-primary">
                    <span class="icon">
                      <i class="fal fa-plus"></i>
                    </span>
                    <span>New Entry</span> 
                  </a>
            </div>
            <div class="column is-4">
                <div class="tabs is-centered">
                    <ul>
                        <li><a href="{{ route('details', [$budget->id]) }}">Overview</a></li>
                    <li><a href="{{ route('categories', [$budget->id]) }}">Categories</a></li>
                        <li class="is-active"><a href="{{ route('recurring', [$budget->id]) }}">Recurring</a></li>
                    </ul>
                </div>
            </div>
            <div class="column is-4">
                <nav class="breadcrumb is-right" aria-label="breadcrumbs">
                    <ul>
                        <li><a href="{{ route('overview') }}">Budgets</a></li>
                        <li><a href="{{ route('details', [$budget->id]) }}">{{ $title }}</a></li>
                        <li class="is-active"><a href="#" aria-current="page">Recurring</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>
<section class="section" style="padding-top:0">
    <div class="container">
        <table class="table is-fullwidth is-hoverable is-striped is-bordered">
            <thead>
                <tr>
                    <th style="width:25%">Name</th>
                    <th>Amount</th>
                    <th>Category</th>
                    <th>Type</th>
                    <th style="width:10%">Occurs At</th>
                    <th>Status</th>
                    <th style="width:10%">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Spotify</td>
                    <td>149,00 kr</td>
                    <td><span class="tag is-primary"><span class="icon is-small"><i class="fal fa-music"></i></span><span>Spotify</span></span></td>
                    <td><span class="tag is-info"><span class="icon is-small"><i class="fal fa-clock"></i></span><span>Monthly</span></span></td>
                    <td>15th</td>
                    <td>Active</td>
                    <td>
                            <p class="field">
                                    <a class="button is-small is-info">
                                            <span class="icon is-small">
                                                <i class="fal fa-pause"></i>
                                            </span>
                                          </a>
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
                    <td>Digital Ocean</td>
                    <td>200,00 kr</td>
                    <td><span class="tag is-primary"><span class="icon is-small"><i class="fal fa-server"></i></span><span>Server</span></span></td>
                    <td><span class="tag is-info"><span class="icon is-small"><i class="fal fa-clock"></i></span><span>Monthly</span></span></td>
                    <td>5th</td>
                    <td>Active</td>
                    <td>
                            <p class="field">
                                    <a class="button is-small is-info">
                                            <span class="icon is-small">
                                                <i class="fal fa-pause"></i>
                                            </span>
                                          </a>
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
                    <td>Runa</td>
                    <td>210,00 kr</td>
                    <td><span class="tag is-light"><span class="icon is-small"><i class="fal fa-book"></i></span><span>Insurance</span></span></td>
                    <td><span class="tag is-light"><span class="icon is-small"><i class="fal fa-clock"></i></span><span>Monthly</span></span></td>
                    <td>7th</td>
                    <td>Inactive</td>
                    <td>
                            <p class="field">
                                    <a class="button is-small is-success">
                                            <span class="icon is-small">
                                                <i class="fal fa-play"></i>
                                            </span>
                                          </a>
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
                    <td>Phone loan</td>
                    <td>200,00 kr</td>
                    <td><span class="tag is-primary"><span class="icon is-small"><i class="fal fa-phone"></i></span><span>Cellular</span></span></td>
                    <td><span class="tag is-info"><span class="icon is-small"><i class="fal fa-clock"></i></span><span>Monthly</span></span></td>
                    <td>10th</td>
                    <td>Active</td>
                    <td>
                            <p class="field">
                                    <a class="button is-small is-info">
                                            <span class="icon is-small">
                                                <i class="fal fa-pause"></i>
                                            </span>
                                          </a>
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
</section>
@endsection