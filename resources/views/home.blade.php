@extends('layouts.master')

@section('content')
<section class="hero is-primary">
  <div class="hero-body">
    <div class="container">
      <h1 class="title">
        Budgets
      </h1>
      <h2 class="subtitle">
        - Welcome back!
      </h2>
    </div>
  </div>
</section>
<section class="section">
<div class="container">
  
    <a class="button is-primary" style="float:left;">
      <span class="icon">
        <i class="fas fa-plus"></i>
      </span>
      <span>New Budget</span> 
    </a>
  <nav class="breadcrumb is-right" aria-label="breadcrumbs">
    <ul>
      <li><a href="#">Bulma</a></li>
      <li><a href="#">Documentation</a></li>
      <li><a href="#">Components</a></li>
      <li class="is-active"><a href="#" aria-current="page">Breadcrumb</a></li>
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
