
{{-- @extends('base') --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <title>CheapTalk</title>
</head>
@section('content')

<style>
    body, html {
        background-image: url('/image/1.png');
        height: 100%;
}

* {
  box-sizing: border-box;
}
@font-face {
        src: url('/../fonts/RubikMonoOne-Regular.ttf');
        font-family: "RubikMonoOne-Regular";
    }

    h1 {
        font-family: "RubikMonoOne-Regular";
        font-size: 100px;
    }


.bg-text {
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0, 0.4);
    color: white;
    font-weight: bold;
    border: 3px solid #f1f1f1;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 80%;
    padding: 100px;
    text-align: center;
}
</style>
<body>
    <div class="bg-text">
        <h1>CheapTalk</h1>
        <p>CheapTalk, where people and the world come to get connected</p>
        <button class="btn btn-outline-light">
            <a  href="/login" style="color: white;"> Login</a>
        </button>
        <button  class="btn btn-outline-light">
            <a href="/register" style="color: white;"> Register</a>
        </button>
      </div>
</body>

