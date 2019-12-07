
            <nav class="navbar navbar-expand-sm navbar-light bg-success fixed-top">
                    <a class="navbar-brand   text-white " href="/">Management Post</a>
                    <button class="navbar-toggler d-lg-none text-white " type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="collapsibleNavId">
                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                            <li class="nav-item ">
                                <a class="nav-link text-white " href="#">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white " href="/post">Posts</a>
                            </li>
                            <li class="nav-item">
                                    <a class="nav-link text-white " href="#">Users</a>
                            </li>
                            
                        </ul>
                    
                        <div>
                                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
    
    
                                <li class="nav-item">
                                        <a class="nav-link text-white " data-toggle="modal" data-target="#modelLogin" href="">Login</a>
                                    </li>
                                </ul>
    
    
                        </div>
                    </div>
                </nav>
    
    

            <!-- Modal -->
            <div class="modal fade" id="modelLogin" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header text-center">
                            <h3 class="modal-title text-center ">Login</h3>
                               
                        </div>
                        <div class="modal-body">

                            <form action="" method="post">


                                    <div class="form-group">
                                            <label for="">Email</label>
                                            <input type="email" class="form-control" name="" id="" aria-describedby="emailHelpId" placeholder="Email">
                                            
                                          </div>
                                          <div class="form-group">
                                            <label for="">Password</label>
                                            <input type="password" class="form-control" name="" id="" placeholder="Password">
                                  </div>

                            </form>
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Conn</button>
                        </div>
                    </div>
                </div>
            </div>
        </body>