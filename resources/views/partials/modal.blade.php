<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Support</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal">
            <div class="form-group">
                <label for="email" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="email" placeholder="your@email.com">
            </div>
            </div>
            <div class="form-group">
                <label for="subject" class="col-sm-2 control-label">Subject</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="subject" placeholder="Subject">
            </div>
            </div>
            <div class="form-group">
                <label for="subject" class="col-sm-2 control-label">Message</label>
            <div class="col-sm-10">
                <!-- <input type="text" class="form-control" id="subject" placeholder="Message"> -->
                <textarea class="form-control" rows="3" id="message" placeholder="Message"></textarea>
            </div>
            </div>
            
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Clear</button>
        <button type="button" class="btn btn-primary">Send ticket</button>
      </div>
    </div>
  </div>
</div>