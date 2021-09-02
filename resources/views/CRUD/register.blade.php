@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="form">

                <div class="form-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf       
                        <div class="form-group">
                            会員登録
                        </div>           
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right" ></label>

                            <div class="col-md-6">
                                <input id="name" type="name" class="form-control @error('name') is-invalid @enderror" name="name"placeholder="名前" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right"></label>

                            <div class="col-md-6">
                                <input id="phone" type="phone" class="form-control @error('phone') is-invalid @enderror" name="phone" placeholder="電話番号">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right"></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="メールアドレス">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <button  type="submit" id="register" name="btnRegister"> 登録
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
