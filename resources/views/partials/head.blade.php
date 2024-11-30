<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      @vite(['resources/css/app.css', 'resources/js/app.js'])
      {{-- <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script> --}}
      <meta http-equiv="X-UA-Compatible" content="ie=edge">

      <title>CashFlow</title>
</head>
<body>
      <div class="flex h-screen overflow-hidden">
            @include('user.layout.sidebar')
            <div class="relative flex flex-1 flex-col overflow-y-auto overflow-x-hidden">
                  <main>
                        