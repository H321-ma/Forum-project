<!-- Modal -->
<div class="modal fade" id="signupmodal" tabindex="-1" role="dialog" aria-labelledby="signupmodalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="signupmodalLabel">Signup to let's Discuss</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/FORUM PROJECT/Partials/_handleSignup.php" method="post">
            <div class="modal-body">
               
                    <div class="form-group">
                        <label for="exampleInputEmail1">Username</label>
                <!----        <input type="email" class="form-control" id="signupEmail" name="signupEmail" aria-describedby="emailHelp">---->
                        <input type="text" class="form-control" id="signupEmail" 
                                  name="signupEmail" aria-describedby="emailHelp">

                <!----      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.</small>---->
                    </div>
                    <div class="form-group">
                        <label for="Password">Password</label>
                        <input type="password" class="form-control" id="signupPassword" name="signupPassword">
                    </div>
                    <div class="form-group">
                        <label for="cpassword">Confirm Password</label>
                        <input type="cpassword" class="form-control" id="signupcPassword" name="signupcPassword">
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Signup</button>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                
            </div>
            </form>
        </div>
    </div>
</div>