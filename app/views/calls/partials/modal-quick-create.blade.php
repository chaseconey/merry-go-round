<!-- Modal -->
<div class="modal fade" id="call-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      {{ Form::open(['route' => 'calls.store']) }}

        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                      aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Create Call</h4>
        </div>
        <div class="modal-body">

          <div class="current-receiver text-center">
            <h3>Agency #1</h3>
          </div>
          <hr>

            <div class="form">
              <!--- Name Field --->
              <div class="form-group">
                  {{ Form::label('name', 'Name:') }}
                  {{ Form::text('name', null, ['class' => 'form-control', 'required' => 'required']) }}
              </div>

              {{ Form::hidden('receiver_id', null) }}
              {{ Form::hidden('user_id', Auth::user()->id) }}

              <!--- Phone Field --->
              <div class="form-group">
                  {{ Form::label('phone', 'Phone:') }}
                  {{ Form::text('phone', null, ['class' => 'form-control', 'required' => 'required']) }}
              </div>

              <!--- Notes Field --->
              <div class="form-group">
                  {{ Form::label('notes', 'Notes:') }}
                  {{ Form::textarea('notes', null, ['class' => 'form-control']) }}
              </div>

            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-danger" id="skip">Skip</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>

        {{ Form::close() }}
    </div>
  </div>
</div>
