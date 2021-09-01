@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="form">

                <div class="form-body">
                    <form method="POST" action="{{ route('edit') }}">
                        @csrf
                        <div class="form-group">
                            会員編集 会員ID.{{$user->id}}
                            
                            <input id="id" type="id" class="form-control @error('id') is-invalid @enderror" name="id" value={{$user->id}} hidden> 
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right"></label>

                            <div class="col-md-6">
                                <input id="name" type="name" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="名前" value={{$user->name}} autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right"></label>

                            <div class="col-md-6">
                                <input id="phone" type="phone" class="form-control @error('phone') is-invalid @enderror" name="phone" placeholder="電話番号" value={{$user->phone}}>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right"></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="メールアドレス" value={{$user->email}}>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <button id="edit" name="btnEdit"> 編集
                            </div>
                        </div>

                    </form>
                    <form action="{{ url('edit/' .$user->id) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button type="submit" id="delete-user-{{ $user->id }}" class="btn btn-danger">
                                削除
                            </button>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection