<div class="modal fade" id="supplementaryServiceModal" tabindex="-1" role="dialog" aria-labelledby="nomineeModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <span class="modal-title">Add Supplementary</span>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="supplementaryAddForm" class="form">
                    <div class="form-group">
                        <label class="control-label" for="suppleName">Supple. Name</label>
                        <select name="pensionAge" id="suppleName" required="required" class="form-control">
                            <option value="">Select</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="suppPreRate">Supp Pre Rate</label>
                        <input type="number" step=".01" name="suppPreRate" id="suppPreRate" required="required" class="form-control" placeholder="Supp Pre Rate" />
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="suppAge">Supp Age</label>
                        <input type="number" name="suppAge" id="suppAge" required="required" class="form-control" placeholder="Supp Age" />
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="suppSumAssured">Sum Assured</label>
                        <input type="number" name="suppSumAssured" id="suppSumAssured" required="required" class="form-control" placeholder="Sum Assured" />
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="limit">Limit</label>
                        <input type="number" name="limit" id="limit" required="required" class="form-control" placeholder="Limit" />
                    </div>
                </form>
            </div>
            <div class="modal-footer text-center">
                <button type="button" class="btn btn-primary btn-sm" onclick="addSuppService()">Add</button>
            </div>
        </div>
    </div>
</div>
