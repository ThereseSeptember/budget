@extends('layouts.master') 
@section('content')
<section class="section">
    <div class="container">
        <div class="columns">
            <div class="column is-4">
                <a href="{{ route('newCategory', [$budget->id]) }}" class="button is-primary">
                    <span class="icon">
                      <i class="fal fa-plus"></i>
                    </span>
                    <span>New Category</span> 
                  </a>
            </div>
            <div class="column is-4">
                <div class="tabs is-centered">
                    <ul>
                        <li><a href="{{ route('details', [$budget->id]) }}">Overview</a></li>
                        <li class="is-active"><a>Categories</a></li>
                        <li><a href="{{ route('recurring', [$budget->id]) }}">Recurring</a></li>
                    </ul>
                </div>
            </div>
            <div class="column is-4">
                <nav class="breadcrumb is-right" aria-label="breadcrumbs">
                    <ul>
                        <li><a href="{{ route('overview') }}">Budgets</a></li>
                        <li><a href="{{ route('details', [$budget->id]) }}">{{ $title }}</a></li>
                        <li class="is-active"><a href="#" aria-current="page">Categories</a></li>
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
        <table class="table is-fullwidth is-hoverable is-striped is-bordered">
            <thead>
                <tr>
                    <th style="width:5%">Icon</th>
                    <th colspan="2" style="width:30%">Name</th>
                    <th style="width:15%">Budgeted</th>
                    <th style="width:15%">Left</th>
                    <th style="width:25%">Progress</th>
                    <th style="width:20%">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($budget->categories as $category)
                <tr>
                        <td>
                            <a class="button is-primary">
                                <span class="icon is-small">
                                <i class="fal fa-{{ $category->icon }}"></i>
                                </span>
                            </a>
                        </td>
                        <td colspan="2">{{ $category->name }}</td>
                        <td>25,00 kr</td>
                        <td class="has-text-success">150,00 kr</td>
                        <td><progress class="progress is-primary" value="0" max="100">0%</progress></td>
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
                    @foreach($category->subCategories as $subCategory)
                    <tr>
                        <td></td>
                            <td style="width:3%">
                                <a class="button is-primary">
                                    <span class="icon is-small">
                                    <i class="fal fa-{{ $subCategory->icon }}"></i>
                                    </span>
                                </a>
                            </td>
                            <td>{{ $subCategory->name }}</td>
                            <td>25,00 kr</td>
                            <td class="has-text-success">150,00 kr</td>
                            <td><progress class="progress is-primary" value="0" max="100">0%</progress></td>
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
                    @endforeach
                @endforeach
                <tr>
                    <td>
                        <a class="button is-primary">
                            <span class="icon is-small">
                                <i class="fal fa-music"></i>
                            </span>
                        </a>
                    </td>
                    <td>Spotify</td>
                    <td>25,00 kr</td>
                    <td class="has-text-success">150,00 kr</td>
                    <td><progress class="progress is-primary" value="0" max="100">0%</progress></td>
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
                    <td>
                        <a class="button is-primary">
                                    <span class="icon is-small">
                                        <i class="fal fa-server"></i>
                                    </span>
                                </a>
                    </td>
                    <td>Server</td>
                    <td>100,00 kr</td>
                    <td>50,00 kr</td>
                    <td><progress class="progress is-primary" value="50" max="100">50%</progress></td>
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
                    <td>
                        <a class="button is-primary">
                                    <span class="icon is-small">
                                        <i class="fal fa-trash-alt"></i>
                                    </span>
                                </a>
                    </td>
                    <td>Junk</td>
                    <td>2089,00 kr</td>
                    <td class="has-text-danger">-1580,21 kr</td>
                    <td><progress class="progress is-danger" value="100" max="100">100%</progress></td>
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
                    <td>
                        <a class="button is-primary">
                                    <span class="icon is-small">
                                        <i class="fal fa-book"></i>
                                    </span>
                                </a>
                    </td>
                    <td>Insurance</td>
                    <td>210,00 kr</td>
                    <td>0,00 kr</td>
                    <td><progress class="progress is-primary" value="100" max="100">100%</progress></td>
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
</section>
@endsection