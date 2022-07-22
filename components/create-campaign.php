<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Create Campaign</h4>
                <p class="card-description">
                    Campaign
                </p>
                <form class="forms-sample row">
                    <div class="form-group col-md-6">
                        <label for="exampleInputName1">Campaign Name</label>
                        <input type="text" class="form-control" id="campaignName" name="campaign_name" placeholder="Campaign Name">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="exampleSelectGender">Select Company</label>
                        <select class="form-control" name="company_id" id="exampleSelectGender">
                            <?php
                                $fetchCompanyQuery = "SELECT * FROM `companies`";
                                $companyQueryExec = mysqli_query($conn, $fetchCompanyQuery);
                                while($company = mysqli_fetch_array($companyQueryExec)) {
                                    ?>
                                        <option value="<?php echo $company['company_id']; ?>"><?php echo $company['company_name']; ?></option>
                                    <?php
                                }
                            ?>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="template">Paste Html Here</label>
                        <textarea class="form-control" id="template" rows="4"></textarea>
                    </div>
                    <div class="col-mg-6 d-flex align-items-center" onclick="convertCampaign()">
                        <a class="btn btn-primary mr-2">Convert</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="./components/js/campaign.js" defer ></script>