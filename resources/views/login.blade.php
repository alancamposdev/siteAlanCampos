@extends('layouts.main')

@section('title', 'Login')

@section('content')
<section class="page-section login">
  <div class="container">
    <div class="d-flex justify-content-center h-100 ">
      <div class="card">
        <div class="card-header pt-3">
          <h3>Entrar</h3>

          <div class="d-flex justify-content-end social_icon">

            <span><i class="fab fa-facebook-square"></i></span>

            <span><i class="fab fa-brands fa-github"></i></span>
            <span><i class="fab fa-linkedin-in"></i></span>
          </div>
        </div>
        <div class="card-body">
          <form action="" method="">
            <div class="input-group form-group py-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
              </div>
              <input type="text" class="form-control" placeholder="username">
              
            </div>
            <div class="input-group form-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-key"></i></span>
              </div>
              <input type="password" class="form-control" placeholder="password">
            </div>
            <div class="row align-items-center remember py-3">
              <input type="checkbox">Lembre de mim
            </div>
            <div class="form-group">
              <input type="submit" value="Acessar" class="btn float-right login_btn">
            </div>
          </form>
        </div>
        <div class="card-footer">
          <div class="d-flex justify-content-center links">
            Ainda não tem uma conta?<a href="#">Inscrever-se</a>
          </div>
          <div class="d-flex justify-content-center">
            <a href="#">Esqueceu sua senha?</a>
          </div>
        </div>
      </div>
  </div>
</section>
