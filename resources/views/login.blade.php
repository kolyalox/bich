@extends('layouts.template')

@section('title')

    LOGIN

@endsection

@section('div')

    <div class="flex-center position-ref full-height">

        @endsection

@section('content')

    <div class="wrapper">

        <div class="wrapper__content">

            <div class="wrapper__block">

                @if(session('success'))
                    {{session('success')}}
                @endif
                    @if(session('danger'))
                        {{session('danger')}}
                    @endif

                <form action="{{route('login-submit')}}" method="post" class="wrapper__form form">

                    @csrf

                    <div class="form__input1">
                        @if ($errors->has('login'))
                            <label for="login">
                                {{ $errors->first('login') }}
                            </label>
                        @endif
                        <input type="text" name="login" placeholder="login" class="form__login" autocomplete="off">
                    </div>

                    <div class="form__input2">
                        @if ($errors->has('password'))
                            <label for="password">
                                {{ $errors->first('password') }}
                            </label>
                        @endif
                        <input type="password" name="password" placeholder="password" class="form__pass" autocomplete="off">
                    </div>

                    <div class="form__input3">
                        <input type="submit" name="button" value="LOGIN" class="form__button">
                    </div>

                </form>

            </div>

        </div>

    </div>

@endsection
