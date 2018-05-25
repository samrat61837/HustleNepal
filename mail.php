<form name=""  method="POST" action="mailer.php">
                  <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Your Message</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body" >
                      <div class="form-group">
                        <label class="col-sm-3  control-label no-padding-right" for="form-field-1">Email </label>
                        <div class="col-sm-9">
                          <input type="text" name="email" id="form-field-1"  placeholder="Username"  class="col-xs-10 col-sm-5">

                        </div>
                      </div>

                      <input type="hidden" name="returnback" value="ABpositive">

                      <div >
                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Message Here</label>
                        <div class="col-sm-7">
                          <textarea class="form-control" name="msg" placeholder="Your Message Here..."></textarea>
                        </div>
                      </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="submit" name="prabin" class="btn btn-primary">Send</button>

                        </div>
                      </div>
                    </div>
                  </div>
              </form> 