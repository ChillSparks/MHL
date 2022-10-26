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
    <link href="../../assets/css/user.min.css" rel="stylesheet" id="user-style-default">
    <link href="../../assets/css/custom.css" rel="stylesheet">

    <style>
      body {
        opacity: 0;
      }
      .form-check{
        padding-top:10px;
      }
    </style>
  </head>

  <body>
    <main class="main" id="top">
      <div class="container-fluid px-0">

        @include('vertical-nav')

        <nav class="navbar navbar-light navbar-top navbar-expand">
          <div class="navbar-logo"><button class="btn navbar-toggler navbar-toggler-humburger-icon" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button> <a class="navbar-brand me-1 me-sm-3" href="/">
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
              <li class="nav-item dropdown">
              <h6 style="margin-right:5px;" class="text-700 fw-semi-bold">Eng </h6> <div class="form-check form-switch"><input class="form-check-input" id="flexSwitchCheckDefault" type="checkbox"> <label class="form-check-label" for="flexSwitchCheckDefault">မြန်မာ</label>
                </div>
              </li>
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
                
              <form method="post" action="{{route('form7save')}}">
                @csrf
                <div class="card shadow-none border border-300 p-4" data-component-card="">
                  <div class="card-header mb-3 bg-soft">
                    <div class="row g-3 justify-content-between align-items-center">
                      <div class="col-12 col-md">
                        <h2 class="mb-2">Form 7 Entry</h2>
                        <h5 class="text-700 fw-semi-bold">Select fish type for process</h5>
                      </div>
                  
                     <span class="text-danger">{{ $errors->first('fish.*') }}</span>
                      @if(Session::get('fail'))
                        <div class="alert alert-danger">
                            {{Session::get('fail')}}
                        </div>
                      @elseif(Session::get('success'))
                        <div class="alert alert-success">
                            {{Session::get('success')}}
                        </div>
                      @elseif(Session::get('null'))
                        <div class="alert alert-danger">
                            {{Session::get('null')}}
                        </div>
                    @endif

                    </div>
                  </div>
 
                      <div class="mb-3">
                        <button class="btn btn-secondary me-1 mb-1" style="float:right" onclick="addRow()" type="button">လိုင်းအသစ်တိုးရန်</button>
                      </div>
                      <div id="tableExample2" data-list="{&quot;valueNames&quot;:[&quot;name&quot;,&quot;email&quot;,&quot;age&quot;],&quot;page&quot;:5,&quot;pagination&quot;:true}">
                        <div class="table-responsive scrollbar">
                          
                          <table id="ftable" class="table table-bordered table-striped fs--1 mb-0">
                            <thead class="bg-200 text-900">
                              <tr>
                                <th class="text-wrap align-middle" rowspan="2">အမျိုးအမည်</th>
                                <th class="text-wrap align-middle" rowspan="2" data-sort="size">ရေတွက်ပုံ</th>
                                <th class="text-wrap align-middle" rowspan="2" data-sort="size">အလေးချိန်</th>
                                <th class="text-center" colspan="15" data-sort="weights">ကုန်ပစ္စည်းအရွယ်အစား</th>
                                <th class="text-wrap align-middle" rowspan="2" data-sort="size">စုစုပေါင်းဘူးအရေအတွက်</th>
                                <th class="text-wrap align-middle" rowspan="2" data-sort="size">စုစုပေါင်းအလေးချိန်ကီလိုဂရမ်</th>
                              </tr>
                              <tr>
                               
                                <th data-sort="size">1/D</th>
                                <th data-sort="size">10/15</th>
                                <th data-sort="size">1/2</th>
                                <th data-sort="size">2/3</th>
                                <th data-sort="size">3/4</th>
                                <th data-sort="size">3/5</th>
                                <th data-sort="size">4/5</th>
                                <th data-sort="size">4/6</th>
                                <th data-sort="size">5/6</th>
                                <th data-sort="size">5/8</th>
                                <th data-sort="size">6/8</th>
                                <th data-sort="size">8/10</th>
                                <th data-sort="size">10/12</th>
                                <th data-sort="size">12/15</th>
                                <th data-sort="size">15 Up</th>
                            
                              </tr>
                            </thead>
                            <tbody class="list">
                              <tr>
                                <td><input type="text" name="fish[]" value="{{old('fish.0')}}" class="form-control width"></td>
                                <td><input type="text" name="uom[]" value="{{old('uom.0')}}" class="form-control"></td>
                                <td><input type="text" name="weight[]" value="{{old('weight.0')}}" onchange="autoweight(this.id,this.value)" id="weight[0]" class="form-control"></td>
                                <td><input type="number" step="0.1" min="0" name="size1d[]" id="size1d[0]" onchange="autoweight(this.id,this.value)" value="{{old('size1d.0')}}" class="form-control"></td>
                                <td><input type="number" step="0.1" min="0" name="size1015[]" id="size1015[0]" onchange="autoweight(this.id,this.value)" value="{{old('size1015.0')}}" class="form-control"></td>
                                <td><input type="number" step="0.1" min="0" name="size12[]" id="size12[0]" onchange="autoweight(this.id,this.value)" value="{{old('size12.0')}}" class="form-control"></td>
                                <td><input type="number" step="0.1" min="0" name="size23[]" id="size23[0]" onchange="autoweight(this.id,this.value)" value="{{old('size23.0')}}" class="form-control"></td>
                                <td><input type="number" step="0.1" min="0" name="size34[]" id="size34[0]" onchange="autoweight(this.id,this.value)" value="{{old('size34.0')}}" class="form-control"></td>
                                <td><input type="number" step="0.1" min="0" name="size35[]" id="size35[0]" onchange="autoweight(this.id,this.value)" value="{{old('size35.0')}}" class="form-control"></td>
                                <td><input type="number" step="0.1" min="0" name="size45[]" id="size45[0]" onchange="autoweight(this.id,this.value)" value="{{old('size45.0')}}" class="form-control"></td>
                                <td><input type="number" step="0.1" min="0" name="size46[]" id="size46[0]" onchange="autoweight(this.id,this.value)" value="{{old('size46.0')}}" class="form-control"></td>
                                <td><input type="number" step="0.1" min="0" name="size56[]" id="size56[0]" onchange="autoweight(this.id,this.value)" value="{{old('size56.0')}}" class="form-control"></td>
                                <td><input type="number" step="0.1" min="0" name="size58[]" id="size58[0]" onchange="autoweight(this.id,this.value)" value="{{old('size58.0')}}" class="form-control"></td>
                                <td><input type="number" step="0.1" min="0" name="size68[]" id="size68[0]" onchange="autoweight(this.id,this.value)" value="{{old('size68.0')}}" class="form-control"></td>
                                <td><input type="number" step="0.1" min="0" name="size810[]" id="size810[0]" onchange="autoweight(this.id,this.value)" value="{{old('size810.0')}}" class="form-control"></td>
                                <td><input type="number" step="0.1" min="0" name="size1012[]" id="size1012[0]" onchange="autoweight(this.id,this.value)" value="{{old('size1012.0')}}" class="form-control"></td>
                                <td><input type="number" step="0.1" min="0" name="size1215[]" id="size1215[0]" onchange="autoweight(this.id,this.value)" value="{{old('size1215.0')}}" class="form-control"></td>
                                <td><input type="number" step="0.1" min="0" name="size15up[]" id="size15up[0]" onchange="autoweight(this.id,this.value)" value="{{old('size15up.0')}}" class="form-control"></td>
                                <td><input type="number" step="0.1" min="0" name="tcarton[]" id="tcarton[0]" value="{{old('tcarton.0')}}" class="form-control width2"></td>
                                <td><input type="number" step="0.1" min="0" name="tkg[]" id="tkg[0]" value="{{old('tkg.0')}}" class="form-control width2"></td>
                              </tr>
                              <tr>
                                <td><input type="text" name="fish[]" value="{{old('fish.1')}}" class="form-control width"></td>
                                <td><input type="text" name="uom[]" value="{{old('uom.1')}}" class="form-control"></td>
                                <td><input type="text" name="weight[]" value="{{old('weight.1')}}" onchange="autoweight(this.id,this.value)" id="weight[1]" class="form-control"></td>
                                <td><input type="number" step="0.1" min="0" name="size1d[]" id="size1d[1]" onchange="autoweight(this.id,this.value)" value="{{old('size1d.1')}}" class="form-control"></td>
                                <td><input type="number" step="0.1" min="0" name="size1015[]" id="size1015[1]" onchange="autoweight(this.id,this.value)" value="{{old('size1015.1')}}" class="form-control"></td>
                                <td><input type="number" step="0.1" min="0" name="size12[]" id="size12[1]" onchange="autoweight(this.id,this.value)" value="{{old('size12.1')}}" class="form-control"></td>
                                <td><input type="number" step="0.1" min="0" name="size23[]" id="size23[1]" onchange="autoweight(this.id,this.value)" value="{{old('size23.1')}}" class="form-control"></td>
                                <td><input type="number" step="0.1" min="0" name="size34[]" id="size34[1]" onchange="autoweight(this.id,this.value)" value="{{old('size34.1')}}" class="form-control"></td>
                                <td><input type="number" step="0.1" min="0" name="size35[]" id="size35[1]" onchange="autoweight(this.id,this.value)" value="{{old('size35.1')}}" class="form-control"></td>
                                <td><input type="number" step="0.1" min="0" name="size45[]" id="size45[1]" onchange="autoweight(this.id,this.value)" value="{{old('size45.1')}}" class="form-control"></td>
                                <td><input type="number" step="0.1" min="0" name="size46[]" id="size46[1]" onchange="autoweight(this.id,this.value)" value="{{old('size46.1')}}" class="form-control"></td>
                                <td><input type="number" step="0.1" min="0" name="size56[]" id="size56[1]" onchange="autoweight(this.id,this.value)" value="{{old('size56.1')}}" class="form-control"></td>
                                <td><input type="number" step="0.1" min="0" name="size58[]" id="size58[1]" onchange="autoweight(this.id,this.value)" value="{{old('size58.1')}}" class="form-control"></td>
                                <td><input type="number" step="0.1" min="0" name="size68[]" id="size68[1]" onchange="autoweight(this.id,this.value)" value="{{old('size68.1')}}" class="form-control"></td>
                                <td><input type="number" step="0.1" min="0" name="size810[]" id="size810[1]" onchange="autoweight(this.id,this.value)" value="{{old('size810.1')}}" class="form-control"></td>
                                <td><input type="number" step="0.1" min="0" name="size1012[]" id="size1012[1]" onchange="autoweight(this.id,this.value)" value="{{old('size1012.1')}}" class="form-control"></td>
                                <td><input type="number" step="0.1" min="0" name="size1215[]" id="size1215[1]" onchange="autoweight(this.id,this.value)" value="{{old('size1215.1')}}" class="form-control"></td>
                                <td><input type="number" step="0.1" min="0" name="size15up[]" id="size15up[1]" onchange="autoweight(this.id,this.value)" value="{{old('size15up.1')}}" class="form-control"></td>
                                <td><input type="number" step="0.1" min="0" name="tcarton[]" id="tcarton[1]" value="{{old('tcarton.1')}}" class="form-control width2"></td>
                                <td><input type="number" step="0.1" min="0" name="tkg[]" id="tkg[1]" value="{{old('tkg.1')}}" class="form-control width2"></td>
                              </tr>
                              <tr>
                                <td><input type="text" name="fish[]" value="{{old('fish.2')}}" class="form-control width"></td>
                                <td><input type="text" name="uom[]" value="{{old('uom.2')}}" class="form-control"></td>
                                <td><input type="text" name="weight[]" value="{{old('weight.2')}}" onchange="autoweight(this.id,this.value)" id="weight[2]" class="form-control"></td>
                                <td><input type="number" step="0.1" min="0" name="size1d[]" id="size1d[2]" onchange="autoweight(this.id,this.value)" value="{{old('size1d.2')}}" class="form-control"></td>
                                <td><input type="number" step="0.1" min="0" name="size1015[]" id="size1015[2]" onchange="autoweight(this.id,this.value)" value="{{old('size1015.2')}}" class="form-control"></td>
                                <td><input type="number" step="0.1" min="0" name="size12[]" id="size12[2]" onchange="autoweight(this.id,this.value)" value="{{old('size12.2')}}" class="form-control"></td>
                                <td><input type="number" step="0.1" min="0" name="size23[]" id="size23[2]" onchange="autoweight(this.id,this.value)" value="{{old('size23.2')}}" class="form-control"></td>
                                <td><input type="number" step="0.1" min="0" name="size34[]" id="size34[2]" onchange="autoweight(this.id,this.value)" value="{{old('size34.2')}}" class="form-control"></td>
                                <td><input type="number" step="0.1" min="0" name="size35[]" id="size35[2]" onchange="autoweight(this.id,this.value)" value="{{old('size35.2')}}" class="form-control"></td>
                                <td><input type="number" step="0.1" min="0" name="size45[]" id="size45[2]" onchange="autoweight(this.id,this.value)" value="{{old('size45.2')}}" class="form-control"></td>
                                <td><input type="number" step="0.1" min="0" name="size46[]" id="size46[2]" onchange="autoweight(this.id,this.value)" value="{{old('size46.2')}}" class="form-control"></td>
                                <td><input type="number" step="0.1" min="0" name="size56[]" id="size56[2]" onchange="autoweight(this.id,this.value)" value="{{old('size56.2')}}" class="form-control"></td>
                                <td><input type="number" step="0.1" min="0" name="size58[]" id="size58[2]" onchange="autoweight(this.id,this.value)" value="{{old('size58.2')}}" class="form-control"></td>
                                <td><input type="number" step="0.1" min="0" name="size68[]" id="size68[2]" onchange="autoweight(this.id,this.value)" value="{{old('size68.2')}}" class="form-control"></td>
                                <td><input type="number" step="0.1" min="0" name="size810[]" id="size810[2]" onchange="autoweight(this.id,this.value)" value="{{old('size810.2')}}" class="form-control"></td>
                                <td><input type="number" step="0.1" min="0" name="size1012[]" id="size1012[2]" onchange="autoweight(this.id,this.value)" value="{{old('size1012.2')}}" class="form-control"></td>
                                <td><input type="number" step="0.1" min="0" name="size1215[]" id="size1215[2]" onchange="autoweight(this.id,this.value)" value="{{old('size1215.2')}}" class="form-control"></td>
                                <td><input type="number" step="0.1" min="0" name="size15up[]" id="size15up[2]" onchange="autoweight(this.id,this.value)" value="{{old('size15up.2')}}" class="form-control"></td>
                                <td><input type="number" step="0.1" min="0" name="tcarton[]" id="tcarton[2]" value="{{old('tcarton.2')}}" class="form-control width2"></td>
                                <td><input type="number" step="0.1" min="0" name="tkg[]" id="tkg[2]" value="{{old('tkg.2')}}" class="form-control width2"></td>
                              </tr>
                            
                              </tbody>
                          </table>
                          <input type="hidden" name="status" value="form7">
                        </div>
                      
                      </div>
                    
                      </div>
                      <br>

                      <div class="mb-3 text-center">
                        <button class="btn btn-secondary me-1 mb-1" type="submit">အချက်အလက်သိမ်းမည်</button>
                      </div>
                  </div>
                </div>
                </form>

                <div class="card shadow-none border border-300 p-4" data-component-card="">
                  <div class="card-header mb-3 bg-soft">
                    <div class="row g-3 justify-content-between align-items-center">
                      <div class="col-12 col-md">
                        <h4 class="mb-2">Choose Form 7 List</h4>
                     
                      </div>
                  
                    </div>
                  </div>
 
                      <div id="tableExample2" data-list="{&quot;valueNames&quot;:[&quot;name&quot;,&quot;email&quot;,&quot;age&quot;],&quot;page&quot;:5,&quot;pagination&quot;:true}">
                        <div class="table-responsive scrollbar">
                          
                          <table id="ftable" class="table table-bordered text-center table-striped fs--1 mb-0">
                            <thead class="bg-200 text-900">

                              <tr>

                                <th data-sort="size">Form 7 List by DateTime</th>
                                <th>By User</th>
                                <th data-sort="size">Action</th>
                               
                                
                              </tr>
                            </thead>
                            <tbody class="list">
                              @foreach($data as $d)
                              <tr class="align-middle">
                                <td>{{$d->created_at}}</td>
                                <td></td>
                                <td>
                                      <a href="/edit/{{$d->created_at}}" class="btn btn-secondary">Edit</a>
                                      <a href="/excel/{{$d->created_at}}" class="btn btn-secondary">Excel File</a>
                                </td>
                              </tr>
                              @endforeach
                              </tbody>
                          </table>
                          <input type="hidden" name="status" value="form7">
                        </div>
                      
                      </div>
                    
                      </div>
              </div>
            </div>
          </div>

          

        </div>
      </div>
    </main>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/phoenix.js"></script>
    <script src="assets/js/ecommerce-dashboard.js"></script>
  </body>

</html>