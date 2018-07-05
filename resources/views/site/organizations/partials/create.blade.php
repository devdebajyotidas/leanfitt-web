<!-- Quickview - Add user -->
<div id="qv-user-add" class="quickview quickview-lg">
    <header class="quickview-header">
        <p class="quickview-title lead fw-400">Add New Employee</p>
        <span class="close"><i class="ti-close"></i></span>
    </header>

    <div class="quickview-body">
        <div class="quickview-block form-type-material">
            <h6>Personal information</h6>
            <div class="form-group">
                <input type="text" class="form-control">
                <label>Name</label>
            </div>

            <div class="form-group">
                <input type="text" class="form-control">
                <label>Email Address</label>
            </div>

            <div class="form-group">
                <input type="text" class="form-control">
                <label>Phone Number</label>
            </div>

            <div class="form-group form-type-material file-group">
                <input type="text" class="form-control file-value file-browser" readonly>
                <label>Logo</label>
                <input type="file" multiple>
            </div>

            <div class="h-40px"></div>

            <h6>Address</h6>
            <div class="form-group">
                <select class="form-control" data-provide="selectpicker">
                    <option>Finance</option>
                    <option>HR</option>
                    <option>Accounts</option>
                </select>
                <label>Department</label>
            </div>
        </div>
    </div>

    <footer class="p-12 text-right">
        <button class="btn btn-secondary" type="button" data-toggle="quickview">Cancel</button>
        <button class="btn btn-primary" type="submit">Add Employee</button>
    </footer>
</div>
<!-- END Quickview - Add user -->