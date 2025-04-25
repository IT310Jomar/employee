<div class="modal addModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-top">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title fs-5">Add Department</h5>
          {{-- <button type="button" class="btn-close" aria-label="Close" onclick="closeModal()"></button> --}}

           <button type="button" class="btn-close" data-mdb-ripple-init data-mdb-dismiss="modal" aria-label="Close" onclick="closeModal()"></button> 
        </div>
        <div class="modal-body">
            <div class="form-group">
                <label for="deptName">Department Name:</label>
                <input type="text" class="form-control" id="deptName">
              </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-danger" data-mdb-ripple-init data-mdb-dismiss="modal" onclick="closeModal()">Close</button>
          <button type="button" class="btn btn-primary submitDept" data-mdb-ripple-init>Save</button>
        </div>
      </div>
    </div>
  </div>