@extends('layouts.master')

@section('content')
<section class="section">
<div class="container">
    <a class="button is-primary" style="float:left;">
      <span class="icon">
        <i class="fal fa-plus"></i>
      </span>
      <span>New Budget</span> 
    </a>
  <nav class="breadcrumb is-right" aria-label="breadcrumbs">
    <ul>
      <li class="is-active"><a href="#" aria-current="page">Budgets</a></li>
    </ul>
  </nav>
  <div class="columns is-multiline">
    @include('partials.info')
    @include('partials.info')
    @include('partials.info')
    @include('partials.info')
  </div>
</div>
</section>
@endsection
