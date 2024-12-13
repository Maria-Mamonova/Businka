@extends('layouts.app')

@section('title', 'Contact')

@section('content')
    <br> <br> <br>
    <div class="flex-grow-1 d-flex align-items-center justify-content-center">
       <div class="container" style="max-width: 50%;">
           <h4 class="h3 mb-3 fw-normal">Feedback</h4>

           <!-- Вывод ошибок/успешной отправки для формы -->
           @include('inc.notification')

           <form action="{{ route('feedback') }}" method="post" class="needs-validation">

               <!--Защита от CSRF-->
               @csrf

               <div class="row g-3">
                    <div class="col-sm-6">
                        <label for="FirstName" class="form-label">First name</label>
                        <input type="text" name="FirstName" class="form-control" id="FirstName" placeholder="Enter your first name">
                    </div>

                    <div class="col-sm-6">
                        <label for="lastName" class="form-label">Last name</label>
                        <input type="text" name="lastName" class="form-control" id="lastName" placeholder="Enter your last name">
                    </div>

                    <div class="col-12">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="you@example.com">
                    </div>

                    <div class="col-12">
                        <label for="subject" class="form-label">Subject</label>
                        <input type="text" name="subject" class="form-control" id="subject" placeholder="Enter the subject of the message">
                    </div>

                    <div class="col-12">
                        <label for="message" class="form-label">Message</label>
                        <textarea name="message" class="form-control" id="message" placeholder="Enter message"></textarea>
                    </div>
               </div>

               <hr class="my-4">

               <button class="w-100 btn btn-primary btn-lg" type="submit">Send</button>
           </form>
       </div>
    </div>
@endsection

