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
                @foreach($budget->recurrings as $recurring)
                <tr>
                        <td>{{ $recurring->item->name }}</td>
                        <td>{{ number_format($recurring->item->price, 2, ',', '.') }} kr</td>
                <td><span class="tag @if($recurring->status == 'disabled') is-light @else is-primary @endif"><span class="icon is-small"><i class="fal fa-{{ $recurring->item->category->icon }}"></i></span><span>{{ $recurring->item->category->name }}</span></span></td>
                <td><span class="tag @if($recurring->status == 'disabled') is-light @else is-info @endif"><span class="icon is-small"><i class="fal fa-clock"></i></span><span>{{ ucfirst($recurring->type) }}</span></span></td>
                        <td>{{ $recurring->start_day }}</td>
                        <td>{{ ucfirst($recurring->status) }}</td>
                        <td>
                                <p class="field">
                                <a href="{{ route('recurringToggleStatus', [$budget->id, $recurring->id]) }}" class="button is-small @if($recurring->status == 'disabled') is-success @else is-info @endif">
                                                <span class="icon is-small">
                                                    @if($recurring->status == 'disabled')
                                                    <i class="fal fa-play"></i>
                                                    @else
                                                    <i class="fal fa-pause"></i>
                                                    @endif
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
                @endforeach
            </tbody>
        </table>
    </div>
</section>
@endsection