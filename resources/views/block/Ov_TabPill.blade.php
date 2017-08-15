          <div class="row">
            <div class="col-md-12">
              <ul class="nav nav-pills">
                <li class="nav-item col-md-3">
                  <a data-toggle="pill" href="#home" class="nav-link active"><b>DETAILS</b></a>
                </li>
                <li class="nav-item col-md-3">
                  <a data-toggle="pill" href="#menu1" class="nav-link"><b>UPDATES</b></a>
                </li>
                <li class="nav-item col-md-3">
                  <a data-toggle="pill" href="#menu2" class="nav-link"><b>BLUEPRINTS</b></a>
                </li>
                <li class="nav-item col-md-3">
                  <a data-toggle="pill" href="#menu3" class="nav-link"><b>COMMENTS</b></a>
                </li>
              </ul>
            </div>
          </div>
          <div class="tab-content">
            <div id="home" class="tab-pane animated fadeInRight active">
              <div class="row">
                <div class="container bg-warning mx-3 p-3">
                  @include('TabPill.Ov_Details')
                </div>
              </div>
            </div>
            <div id="menu1" class="tab-pane animated fadeInRight">
              <div class="row">
                <div class="container bg-warning mx-3 p-3">
                  @include('TabPill.Ov_Updates')
                </div>
              </div>
            </div>
            <div id="menu2" class="tab-pane animated fadeInRight">
              <div class="row">
                <div class="container bg-warning mx-3 p-3">
                  @include('TabPill.Ov_BlueprintsDownloads')
                </div>
              </div>
            </div>
            <div id="menu3" class="tab-pane animated fadeInRight">
              <div class="row">
                <div class="container bg-warning mx-3 p-3">
                  @include('TabPill.Ov_CommentsFaq')
                </div>
              </div>
            </div>
          </div>