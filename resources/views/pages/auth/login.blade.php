@extends('layouts.auth')
@section('title', 'Login')

@push('styles')
<style>
  .section {
    height: 100vh;
    display: flex;
    align-items: center;
  }

  .card.card-primary {
    border-top: none !important;
  }

  .card .card-header {
    justify-content: center !important;
  }

  .card .card-header h4 {
    color: #002b6c !important;
  }
</style>
@endpush

@section('content')
<div class="row">
  <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">

    <div class="card card-primary">
      <div class="card-header">
        <h4>Login RJA Management</h4>
      </div>

      <div class="card-body">
        <form method="POST" action="#" class="needs-validation" novalidate="">
          <div class="form-group">
            <label for="username">Username</label>
            <input id="username" type="text" class="form-control" name="username" tabindex="1" required autofocus>
          </div>

          <div class="form-group">
            <div class="d-block">
              <label for="password" class="control-label">Password</label>
            </div>
            <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
              Login
            </button>
          </div>
        </form>

      </div>
    </div>
  </div>
</div>
@endsection

@push('scripts')
<script></script>
@endpush