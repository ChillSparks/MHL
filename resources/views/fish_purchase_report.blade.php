<!doctype html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Phoenix</title>
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.ico">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">
    <link href="assets/css/phoenix.min.css" rel="stylesheet" id="style-default">
    <link href="assets/css/user.min.css" rel="stylesheet" id="user-style-default">
    <style>
      body {
        opacity: 0;
      }
    </style>
  </head>

  <body>
    <main class="main" id="top">
      <div class="container-fluid px-0">
        <nav class="navbar navbar-light navbar-vertical navbar-vibrant navbar-expand-lg">
          <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
            <div class="navbar-vertical-content scrollbar">
              <ul class="navbar-nav flex-column" id="navbarVerticalNav">
                <li class="nav-item"><a class="nav-link active" href="index.html">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="cast"></span></span><span class="nav-link-text">Dashbboard</span></div>
                  </a></li>
                <li class="nav-item">
                  <p class="navbar-vertical-label">Tasks</p>
                  <a class="nav-link" href="/" role="button" data-bs-toggle="" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><i class='fas fa-fish'></i></span><span class="nav-link-text">Raw Fish</span></div>
                  </a>


                 <a class="nav-link dropdown-indicator" href="#authentication" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="authentication">
                    <div class="d-flex align-items-center">
                      <div class="dropdown-indicator-icon d-flex flex-center"><span class="fas fa-caret-right fs-0"></span></div><span class="nav-link-icon"><span data-feather="lock"></span></span><span class="nav-link-text">Authentication</span>
                    </div>
                  </a>
                  <ul class="nav collapse parent" id="authentication">
                    <li class="nav-item"><a class="nav-link" href="pages/authentication/simple/sign-in.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text">Sign in</span></div>
                      </a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/authentication/simple/sign-up.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text">Sign up</span></div>
                      </a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/authentication/simple/sign-out.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text">Sign out</span></div>
                      </a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/authentication/simple/forgot-password.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text">Forgot password</span></div>
                      </a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/authentication/simple/reset-password.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text">Reset password</span></div>
                      </a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/authentication/simple/lock-screen.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text">Lock screen</span></div>
                      </a></li>
                  </ul>
                </li>


                <li class="nav-item">
                  <p class="navbar-vertical-label">Reports</p><a class="nav-link" href="documentation/getting-started.html" role="button" data-bs-toggle="" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="life-buoy"></span></span><span class="nav-link-text">Purchase Reports</span></div>
                  </a>
                  <a class="nav-link" href="documentation/webpack.html" role="button" data-bs-toggle="" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="hexagon"></span></span><span class="nav-link-text">Statistics</span></div>
                  </a>
                </li>

              </ul>
            </div>

            
            <div class="navbar-vertical-footer"><a class="btn btn-link border-0 fw-semi-bold d-flex ps-0" href="#!"><span class="navbar-vertical-footer-icon" data-feather="log-out"></span><span>Settings</span></a></div>
          </div>
        </nav>
        <nav class="navbar navbar-light navbar-top navbar-expand">
          <div class="navbar-logo"><button class="btn navbar-toggler navbar-toggler-humburger-icon" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button> <a class="navbar-brand me-1 me-sm-3" href="index.html">
              <div class="d-flex align-items-center">
                <div class="d-flex align-items-center"><img src="assets/img/icons/logo.png" alt="phoenix" width="32">
                  <p class="logo-text ms-2 d-none d-sm-block">phoenix</p>
                </div>
              </div>
            </a></div>
          <div class="collapse navbar-collapse">
            <div class="search-box d-none d-lg-block">
              <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input class="form-control form-control-sm search-input search min-h-auto" type="search" placeholder="Search..." aria-label="Search"> <span class="fas fa-search search-box-icon"></span></form>
            </div>
            <ul class="navbar-nav navbar-nav-icons ms-auto flex-row">
              <li class="nav-item dropdown"><a class="nav-link" id="navbarDropdownNotification" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="text-700" data-feather="bell" style="height:20px;width:20px;"></span></a></li>
              <li class="nav-item dropdown"><a class="nav-link notification-indicator notification-indicator-primary" id="navbarDropdownSettings" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="text-700" data-feather="settings" style="height:20px;width:20px;"></span></a></li>
              <li class="nav-item dropdown"><a class="nav-link" id="navbarDropdownNindeDots" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="2" cy="2" r="2" fill="#6C6E71"></circle>
                    <circle cx="2" cy="8" r="2" fill="#6C6E71"></circle>
                    <circle cx="2" cy="14" r="2" fill="#6C6E71"></circle>
                    <circle cx="8" cy="8" r="2" fill="#6C6E71"></circle>
                    <circle cx="8" cy="14" r="2" fill="#6C6E71"></circle>
                    <circle cx="14" cy="8" r="2" fill="#6C6E71"></circle>
                    <circle cx="14" cy="14" r="2" fill="#6C6E71"></circle>
                    <circle cx="8" cy="2" r="2" fill="#6C6E71"></circle>
                    <circle cx="14" cy="2" r="2" fill="#6C6E71"></circle>
                  </svg></a>
                <div class="dropdown-menu dropdown-menu-end py-0 dropdown-nide-dots shadow border border-300" aria-labelledby="navbarDropdownNindeDots">
                  <div class="card bg-white position-relative border-0">
                    <div class="card-body pt-3 px-3 pb-0 overflow-auto scrollbar" style="height: 20rem;">
                      <div class="row text-center align-items-center gx-0 gy-0">
                        <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!" target="_blank"><img src="assets/img/nav-icons/behance.png" alt="" width="30">
                            <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Behance</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!" target="_blank"><img src="assets/img/nav-icons/google-cloud.png" alt="" width="30">
                            <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Cloud</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!" target="_blank"><img src="assets/img/nav-icons/slack.png" alt="" width="30">
                            <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Slack</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!" target="_blank"><img src="assets/img/nav-icons/github.png" alt="" width="30">
                            <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Github</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!" target="_blank"><img src="assets/img/nav-icons/bitbucket.png" alt="" width="30">
                            <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">BitBucket</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!" target="_blank"><img src="assets/img/nav-icons/google-drive.png" alt="" width="30">
                            <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Drive</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!" target="_blank"><img src="assets/img/nav-icons/trello.png" alt="" width="30">
                            <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Trello</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!" target="_blank"><img src="assets/img/nav-icons/figma.png" alt="" width="20">
                            <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Figma</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!" target="_blank"><img src="assets/img/nav-icons/twitter.png" alt="" width="30">
                            <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Twitter</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!" target="_blank"><img src="assets/img/nav-icons/pinterest.png" alt="" width="30">
                            <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Pinterest</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!" target="_blank"><img src="assets/img/nav-icons/linkedin.png" alt="" width="30">
                            <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Linkedin</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!" target="_blank"><img src="assets/img/nav-icons/google-maps.png" alt="" width="30">
                            <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Maps</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!" target="_blank"><img src="assets/img/nav-icons/google-photos.png" alt="" width="30">
                            <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Photos</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!" target="_blank"><img src="assets/img/nav-icons/spotify.png" alt="" width="30">
                            <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Spotify</p>
                          </a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown"><a class="nav-link lh-1 px-0 ms-5" id="navbarDropdownUser" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <div class="avatar avatar-l"><img class="rounded-circle" src="assets/img/team/57.png" alt=""></div>
                </a>
                <div class="dropdown-menu dropdown-menu-end py-0 dropdown-profile shadow border border-300" aria-labelledby="navbarDropdownUser">
                  <div class="card bg-white position-relative border-0">
                    <div class="card-body p-0 overflow-auto scrollbar" style="height: 18rem;">
                      <div class="text-center pt-4 pb-3">
                        <div class="avatar avatar-xl"><img class="rounded-circle" src="assets/img/team/57.png" alt=""></div>
                        <h6 class="mt-2">Jerry Seinfield</h6>
                      </div>
                      <div class="mb-3 mx-3"><input class="form-control form-control-sm" id="statusUpdateInput" placeholder="Update your status"></div>
                      <ul class="nav d-flex flex-column mb-2 pb-1">
                        <li class="nav-item"><a class="nav-link px-3" href="#!"><span class="me-2 text-900" data-feather="user"></span>Profile</a></li>
                        <li class="nav-item"><a class="nav-link px-3" href="#!"><span class="me-2 text-900" data-feather="pie-chart"></span>Dashboard</a></li>
                        <li class="nav-item"><a class="nav-link px-3" href="#!"><span class="me-2 text-900" data-feather="lock"></span>Posts &amp; Activity</a></li>
                        <li class="nav-item"><a class="nav-link px-3" href="#!"><span class="me-2 text-900" data-feather="settings"></span>Settings &amp; Privacy</a></li>
                        <li class="nav-item"><a class="nav-link px-3" href="#!"><span class="me-2 text-900" data-feather="help-circle"></span>Help Center</a></li>
                        <li class="nav-item"><a class="nav-link px-3" href="#!"><span class="me-2 text-900" data-feather="globe"></span>Language</a></li>
                      </ul>
                    </div>
                    <div class="card-footer p-0 border-top">
                      <ul class="nav d-flex flex-column my-3">
                        <li class="nav-item"><a class="nav-link px-3" href="#!"><span class="me-2 text-900" data-feather="user-plus"></span>Add another account</a></li>
                      </ul>
                      <hr>
                      <div class="px-3"><a class="btn btn-phoenix-secondary d-flex flex-center w-100" href="#!"><span class="me-2" data-feather="log-out"></span>Sign out</a></div>
                      <div class="my-2 text-center fw-bold fs--2 text-600"><a class="text-600 me-1" href="#!">Privacy policy</a>&bull;<a class="text-600 mx-1" href="#!">Terms</a>&bull;<a class="text-600 ms-1" href="#!">Cookies</a></div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
        <div class="content pt-5">
          <div class="pb-5">
            <div class="row g-5">
              <div class="col-12 col-xxl-6">
                
              <form method="post">
                <div class="card shadow-none border border-300 p-4" data-component-card="">
                  <div class="card-header mb-3 bg-soft">
                    <div class="row g-3 justify-content-between align-items-center">
                      <div class="col-12 col-md">
                        <h2 class="mb-2">Fish Purchasing</h2>
                        <h5 class="text-700 fw-semi-bold">You can view fish purchase record in table by daily or monthly</h5>

                     <div class="row">
                        <div class="p-3 col-md-4"><select class="form-select form-control" aria-label="Default select example">
                            <option selected="">ကုန်ကြမ်းလက်ခံ</option>
                            <option value="1">ရောင်းသူ</option>
                            <option value="2">အ၀ယ်ဒိုင်</option>
                        </select></div>

                        <div class="p-3 col-md-4"><select class="form-select form-control" aria-label="Default select example">
                                <option selected="">ရေချိုရေငံငါး</option>
                                <option value="1">ရေချို</option>
                                <option value="2">ရေငံ</option>
                        </select></div>

                        <div class="p-3 col-md-4">
                            <input type="date" class="form-control" id="date">
                        </div>

                     </div>
                      </div>
                    </div>
                  </div>
 
                  <div id="tableExample2" data-list='{"valueNames":["Fish Type","Size","Price","Seller or Station","Date"],"page":4,"pagination":true}'>
                    <div class="table-responsive scrollbar">
                            <table class="table table-bordered table-striped fs--1 mb-0">
                            <thead class="bg-200 text-900">
                                <tr>
                                <th class="sort" data-sort="Fish Type">Fish Type</th>
                                <th class="sort" data-sort="Size">Size</th>
                                <th class="sort" data-sort="Price">Price</th>
                                <th class="sort" data-sort="Seller or Station">Seller or Station</th>
                                <th class="sort" data-sort="Date">Date</th>
                                </tr>
                            </thead>
                            <tbody class="list">
                                <tr>
                                    <td class="Fish Type">Anna</td>
                                    <td class="Size">anna@example.com</td>
                                    <td class="Price">18</td>
                                    <td class="Seller or Station">18</td>
                                    <th class="sort" data-sort="Date">2022-03-05</th>
                                </tr>
                                <tr>
                                    <td class="Fish Type">Waxxa</td>
                                    <td class="Size">waxa@example.com</td>
                                    <td class="Price">45</td>
                                    <td class="Seller or Station">woww</td>
                                    <th class="sort" data-sort="Date">2022-03-05</th>
                                </tr>
                                <tr>
                                    <td class="Fish Type">Polpo</td>
                                    <td class="Size">pp@example.com</td>
                                    <td class="Price">22</td>
                                    <td class="Seller or Station">poff</td>
                                    <th class="sort" data-sort="Date">2022-03-06</th>
                                </tr>
                                <tr>
                                    <td class="Fish Type">Jinx</td>
                                    <td class="Size">jx@example.com</td>
                                    <td class="Price">56</td>
                                    <td class="Seller or Station">high</td>
                                    <th class="sort" data-sort="Date">2022-03-07</th>
                                </tr>
                                <tr>
                                    <td class="Fish Type">Golba</td>
                                    <td class="Size">boba@example.com</td>
                                    <td class="Price">55</td>
                                    <td class="Seller or Station">hugf</td>
                                    <th class="sort" data-sort="Date">2022-03-12</th>
                                </tr>
                                <tr>
                                    <td class="Fish Type">ငါးပုဏ္ဏား</td>
                                    <td class="Size">အကြီး</td>
                                    <td class="Price">30000</td>
                                    <td class="Seller or Station">ကျိုက်ထို</td>
                                    <th class="sort" data-sort="Date">2022-03-13</th>
                                </tr>
                                <tr>
                                    <td class="Fish Type">ဆလားဘီးယား</td>
                                    <td class="Size">အလတ်</td>
                                    <td class="Price">15000</td>
                                    <td class="Seller or Station">ကိုစိုးမြင့်</td>
                                    <th class="sort" data-sort="Date">2022-03-15</th>
                                </tr>
  
  
                            </tbody>
                            </table>
                        </div>
                        <div class="d-flex justify-content-center mt-3">
                            <button class="btn btn-sm btn-falcon-default me-1" type="button" title="Previous" data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
                            <ul class="pagination mb-0"></ul>
                            <button class="btn btn-sm btn-falcon-default ms-1" type="button" title="Next" data-list-pagination="next"><span class="fas fa-chevron-right"></span></button>
                        </div>
                    </div>  

                  </div>
                </div>
                </form>
              </div>

              

            </div>
          </div>

          

          <footer class="footer">
            <div class="row g-0 justify-content-between align-items-center h-100 mb-3">
              <div class="col-12 col-sm-auto text-center">
                <p class="mb-0 text-900">Thank you for creating with phoenix<span class="d-none d-sm-inline-block"></span><span class="mx-1">|</span><br class="d-sm-none">2022 &copy; <a href="https://themewagon.com">Themewagon</a></p>
              </div>
              <div class="col-12 col-sm-auto text-center">
                <p class="mb-0 text-600">v1.0.1</p>
              </div>
            </div>
          </footer>
        </div>
      </div>
    </main>
    <script src="assets/js/phoenix.js"></script>
    <script src="assets/js/ecommerce-dashboard.js"></script>
  </body>

</html>