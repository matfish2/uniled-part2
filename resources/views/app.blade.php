<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Uniled</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
          <div class="content">
            <h2>Send to a friend</h2>
            <p class="muted">Share this great deal with friends!</p>

            @if ($errors->any())
            <div class="alert alert-danger">
              Some of the fields are invalid. Please fix the errors as shown below  
            </div>
            @elseif (session()->has('success'))
            <div class="alert alert-success">
              Thank you. The form was submitted successfully!
            </div>
            @endif

            <form action="/forms" method="POST">
              {{ csrf_field() }}
              <p>
                <label for="referer_name">Your name</label>
                <input name="referer_name" value="{{old('referer_name')}}" type="text" required>
                <span class="error">{{$errors->first('referer_name')}}</span>
              </p>
              <p>
                <label for="friend_name">Your friend's name</label>
                <input name="friend_name" value="{{old('friend_name')}}" type="text" required>
                <p class="error">{{$errors->first('friend_name')}}</p>

              </p>
              <p>
                <label for="friend_email">Your friend's email</label>
                <input name="friend_email" value="{{old('friend_email')}}" type="email" required>
                <p class="error">{{$errors->first('friend_email')}}</p>
              </p>
              <p>
                <button type="submit">Submit</button>
              </p>
            </form>
          </div>
        </div>
    </body>
</html>
