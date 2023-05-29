<x-app_auth>
      <section class="d-flex align-items-center" style="min-height:100vh; background-image:url('storage/images/background.svg'); background-repeat: no-repeat; background-size: cover; background-position: center;">
            <div class="container d-flex justify-content-center">
                  <div class="d-flex flex-column align-items-center justify-content-center col-12">
                        <div class="col-12 d-flex justify-content-center flex-column align-items-center">
                              <!-- content -->
                              <p class="text-center text-white" style="font-size: 24px;font-weight:600">Login</p>
                              <h3 class="fs-4 d-flex align-items-center header-logo" id="header-logo">
                                    <span class="text-dark rounded shadow">
                                          <img src="{{ url('storage/images/logo.svg') }}" alt="AL" style="width: 50px">
                                    </span>
                                    <span class="ps-2 text-white" style="font-size: 30px;">
                                          Artlens
                                    </span>
                              </h3>
                        </div>
                        <div class="col-5">
                              <!-- content -->
                              <div class="mb-3">
                                    <label for="email" class="form-label mx-3 text-white" style="font-size: 20px">E-mail</label>
                                    <input type="email" class="form-control px-4 py-2" name="email"
                                    style="border-radius: 62px; border: none; font-size: 16px;" placeholder="example@gmail.com">
                              </div>
                              <div class="mb-3">
                                    <label for="password" class="form-label mx-3 text-white" style="font-size: 20px">Password</label>
                                    <input type="password" class="form-control px-4 py-2" name="password"
                                    style="border-radius: 62px; border: none; font-size: 16px;" placeholder="1234****">
                              </div>
                        </div>
                        <a class="mt-4 col-2 btn text-white rounded-5" type="submit" style="font-size: 16px;background:#0F181F" href="/dashboard">Login</a>
                        <div class="d-flex gap-3 mt-3">
                              <a class="text-white text-decoration-none px-3" href="/register">Sign Up</a> <div class="text-white"> | </div> <a href="#" class="text-white text-decoration-none px-3">Forgot Password</a>
                        </div>
                        
                  </div>
            </div>
      </section>
</x-app_auth>
