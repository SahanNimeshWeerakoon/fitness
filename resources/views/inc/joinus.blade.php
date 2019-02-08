
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Join With Us</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ url('send/email') }}" method="POST">
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">First Name</label>
                        <input type="text" name="first_name" class="form-control" placeholder="Your First Name" required />
                    </div>
                    <div class="form-group">
                        <label for="">Last Name</label>
                        <input type="text" name="last_name" class="form-control" placeholder="Your Last Name" />
                    </div>
                    <div class="form-group">
                        <label for="">Contact Number</label>
                        <input type="text" name="phone" class="form-control" placeholder="Your Contact Number" required />
                    </div>
                    <div class="form-group">
                        <label for="">Permanent Address</label>
                        <textarea name="address" class="form-control" id="" cols="30" rows="5" placeholder="Your Permanent Address"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Reason To Join The Gym</label>
                        <textarea name="reason" class="form-control" id="" cols="30" rows="5" placeholder="Reason To Join Our Gym"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary" value="JOIN" />
                </div>
            </form>
        </div>
    </div>
</div>

@if (Session::has("success"))
    <div class="alert alert-success">
        <b>Thank you for contacting us. We will come back to you ASAP.....</b>
    </div>
@endif