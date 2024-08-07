</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- plugins:css -->
   @include('components.css')
</head>

<body>
    <div class="container-scroller">

        @include('components.header')

        <div class="container-fluid page-body-wrapper">
            @include('components.floatSetting')
            @include('components.rightSidebar')
            @include('components.sidebar')
            @include('components.body')
            
        </div>
    </div>

   @include('components.javaScript')

</body>

</html>