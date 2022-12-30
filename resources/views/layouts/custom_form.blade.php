<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<form action="{{ url('/') }}/customer" method="post">
    @csrf
    <div class="bg-contact3">
        <div class="container-contact3">
            <div class="wrap-contact3">
                <div class="row">
                    <div class="col-md-12">
                        <form class="contact3-form validate-form">
                            <span class="contact3-form-title">
                                registration form
                            </span>
                            <div class="wrap-input3 validate-input">
                                <input class="input3" type="text" name="name" placeholder="Name"
                                    value="{{ old('name') }}">
                                <span class="focus-input3"></span>
                                <span class="text-warning">
                                    @error('name')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="wrap-input3 validate-input">
                                <input class="input3" type="email" name="email" placeholder="Email"
                                    value="{{ old('email') }}">
                                <span class="focus-input3"></span>
                                <span class="text-warning">
                                    @error('email')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="wrap-input3 validate-input">
                                <input class="input3" type="text" name="country" placeholder="Country"
                                    value="{{ old('country') }}">
                                <span class="focus-input3"></span>
                                <span class="text-warning">
                                    @error('country')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="wrap-input3 validate-input">
                                <input class="input3" type="address" name="address" placeholder="Address"
                                    value="{{ old('address') }}">
                                <span class="focus-input3"></span>
                                <span class="text-warning">
                                    @error('address')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="wrap-input3 validate-input">
                                <input class="input3" type="password" name="password" placeholder="Password">
                                <span class="focus-input3"></span>
                                <span class="text-warning">
                                    @error('password')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="wrap-input3 validate-input">
                                <input class="input3" type="password" name="confirm_password" placeholder="Password">
                                <span class="focus-input3"></span>
                                <span class="text-warning">
                                    @error('confirm_password')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <button class="btn btn-success">
                                Submit
                            </button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</form>
<style>
    * {
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
    }

    body,
    html {
        height: 100%;
        font-family: Poppins-Regular, sans-serif;
    }

    /*---------------------------------------------*/
    a {
        font-family: Poppins-Regular;
        font-size: 14px;
        line-height: 1.7;
        color: #666666;
        margin: 0px;
        transition: all 0.4s;
        -webkit-transition: all 0.4s;
        -o-transition: all 0.4s;
        -moz-transition: all 0.4s;
    }

    a:focus {
        outline: none !important;
    }

    a:hover {
        text-decoration: none;
        color: #57b846;
    }

    /*---------------------------------------------*/
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        margin: 0px;
    }

    p {
        font-family: Poppins-Regular;
        font-size: 14px;
        line-height: 1.7;
        color: #666666;
        margin: 0px;
    }

    ul,
    li {
        margin: 0px;
        list-style-type: none;
    }

    /*---------------------------------------------*/
    input {
        outline: none;
        border: none;
    }

    textarea {
        outline: none;
        border: none;
    }

    textarea:focus,
    input:focus {
        border-color: transparent !important;
    }

    input::-webkit-input-placeholder {
        color: rgba(255, 255, 255, 0.8);
    }

    input:-moz-placeholder {
        color: rgba(255, 255, 255, 0.8);
    }

    input::-moz-placeholder {
        color: rgba(255, 255, 255, 0.8);
    }

    input:-ms-input-placeholder {
        color: rgba(255, 255, 255, 0.8);
    }

    textarea::-webkit-input-placeholder {
        color: rgba(255, 255, 255, 0.8);
    }

    textarea:-moz-placeholder {
        color: rgba(255, 255, 255, 0.8);
    }

    textarea::-moz-placeholder {
        color: rgba(255, 255, 255, 0.8);
    }

    textarea:-ms-input-placeholder {
        color: rgba(255, 255, 255, 0.8);
    }

    /*---------------------------------------------*/
    button {
        outline: none !important;
        border: none;
        background: transparent;
    }

    button:hover {
        cursor: pointer;
    }

    iframe {
        border: none !important;
    }

    /*//////////////////////////////////////////////////////////////////
[ Contact 2 ]*/
    /* .bg-contact3 {
        width: 100%;
        background-repeat: no-repeat;
        background-position: center center;
        background-size: cover;
    } */

    .container-contact3 {
        width: 100%;
        min-height: 100vh;
        display: -webkit-box;
        display: -webkit-flex;
        display: -moz-box;
        display: -ms-flexbox;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        padding: 15px;
        background: linear-gradient(45deg, #000000, #080014cf);
    }

    .wrap-contact3 {
        width: 35%;
        background: #80c64a;
        background: -webkit-linear-gradient(45deg, #56ab2f, #a8e063);
        background: -o-linear-gradient(45deg, #56ab2f, #a8e063);
        background: -moz-linear-gradient(45deg, #da2626, #a8e063);
        background: linear-gradient(45deg, #63478f, #84cc2d);
        border-radius: 10px;
        overflow: hidden;
        padding: 72px 55px 65px 55px;
    }

    /*------------------------------------------------------------------
[  ]*/

    .contact3-form {
        width: 100%;
    }

    .contact3-form-title {
        display: block;
        font-family: Poppins-Bold;
        font-size: 39px;
        color: #fff;
        line-height: 1.2;
        text-align: center;
        text-transform: uppercase;
        padding-bottom: 40px;
    }

    /*------------------------------------------------------------------
[  ]*/

    .wrap-input3 {
        width: 100%;
        position: relative;
        border-bottom: 2px solid rgba(255, 255, 255, 0.24);
        margin-bottom: 27px;
    }

    .input3 {
        display: block;
        width: 100%;
        background: transparent;
        font-family: Poppins-Regular;
        font-size: 15px;
        color: #fff;
        line-height: 1.2;
        padding: 0 5px;
    }

    .focus-input3 {
        position: absolute;
        display: block;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        pointer-events: none;
    }

    .focus-input3::before {
        content: "";
        display: block;
        position: absolute;
        bottom: -2px;
        left: 0;
        width: 0;
        height: 2px;
        -webkit-transition: all 0.4s;
        -o-transition: all 0.4s;
        -moz-transition: all 0.4s;
        transition: all 3s;
        background: #fff;
    }

    /*---------------------------------------------*/
    input.input3 {
        height: 20px;
    }

    textarea.input3 {
        min-height: 115px;
        padding-top: 13px;
        padding-bottom: 13px;
    }

    .input3:focus+.focus-input3::before {
        width: 100%;
    }

    .has-val.input3+.focus-input3::before {
        width: 100%;
    }
</style>
</body>

</html>
