<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   @section('title')
     <title>Laravel</title>
   @endsection
</head>
<body>

   {{-- Navbar --}}
   @extends('layout.layout')

   {{-- Content --}}
   @section('main')

   <div class="contact-us" style="margin-top: 300px">
      <div class="container mt-5">
          <div class="row">
              <!-- Left Side Text -->
              <div class="col-md-6">
                  <div class="text-left mt-5" style="margin-left: 60px">
                      <big><h5>Contact</h5></big>
                      <p>.....</p>
                      <p>CS 1: 021-12345678</p>
                      <p>CS 2: 021-12345678</p>
                  </div>
              </div>

              <!-- Right Side Form -->
              <div class="col-md-6 mt-5">
                  <form style="margin-right: 60px">

                      <div class="form-group mb-3">
                          <input type="text" class="form-control" id="name" placeholder="Name" required>
                      </div>

                      <div class="form-group mb-3 d-flex">
                          <div class="w-50 pe-2">
                              <input type="tel" class="form-control" id="phone" placeholder=" Phone" required>
                          </div>
                          <div class="w-50 ps-2">
                              <input type="email" class="form-control" id="email" placeholder=" Email" required>
                          </div>
                      </div>

                      <div class="form-group mb-3">
                          <textarea class="form-control" id="message" rows="4" placeholder="message ..." required></textarea>
                      </div>

                      <button type="submit" class="btn btn-primary mb-3">Submit</button>
                  </form>
              </div>
          </div>
      </div>
  </div>
</div>

   @endsection

</body>
</html>