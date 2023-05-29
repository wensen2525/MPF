<div class="sticky-top top-0 sidebar py-5 d-flex flex-column justify-content-between" id="side_nav">
      <div>
            <div class="header-box mb-4">
                  <h3 class="fs-4 d-flex align-items-center header-logo" id="header-logo">
                        <span class="text-dark rounded shadow">
                              <img src="{{ url('storage/images/logo.svg') }}" alt="AL" style="width: 40px">
                        </span>
                        <span class="ps-2 text-white text-header">
                              Artlens
                        </span>
                        <button class="position-absolute start-100 text-white border-0 nav-button d-flex align-items-center " style="background:#0F181F; transform:translateX(-30%)"><i class="nav-menu fa-solid fa-angles-left fs-6 py-2"></i></button>
                  </h3>

            </div>
            <ul class="list-unstyled p-2 nav-list">
                  <li><a href="/dashboard" class="text-decoration-none text-white d-flex align-items-center mb-3" id="home"><div class="logo-menu" style="width: 40px"><i class="fa-solid fa-house"></i></div> <span class="text-menu">Home</span></a></li>
                  <li><a href="/tutorial" class="text-decoration-none text-white d-flex align-items-center mb-3"><div class="logo-menu" style="width: 40px"><i class="fa-solid fa-graduation-cap"></i></div> <span class="text-menu">Tutorial</span></a></li>
                  <li><a href="/reference" class="text-decoration-none text-white d-flex align-items-center mb-3"><div class="logo-menu" style="width: 40px"><i class="fa-solid fa-book"></i></div> <span class="text-menu">References</span></a></li>
                  <li><a href="/forum" class="text-decoration-none text-white d-flex align-items-center mb-3"><div class="logo-menu" style="width: 40px"><i class="bi bi-chat-left-text-fill"></i></div> <span class="text-menu">Forum</span></a></li>
            </ul>
      </div>
      <div class="profile nav-list">
            <a href="/profile" class="text-decoration-none text-white d-flex align-items-center mb-3 href-profile"><div class="logo-profile" style="width: 45px"><i class="fa-solid fa-user border rounded-5 d-flex justify-content-center align-items-center" id="border-profile" style="width: 30px;height:30px;"></i></div> <span class="text-profile">Mr.Hubert</span></a>
            <a href="/login" class="btn border rounded-pill block col-12 text-white text-login">Log Out</a>
            <a href="/login" class="p-2 text-decoration-none text-white logo-login d-none"><i class="fa-solid fa-arrow-right-from-bracket"></i></a>
      </div>
</div>
