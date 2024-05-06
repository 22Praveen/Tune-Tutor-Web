<?php include 'sidebar.php'; ?>


<div class="container-fluid page-body-wrapper">
        
<div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Add Courses</h4>
                    <form method="post" action="../db/addcoursebk.php" class="form-sample"  enctype="multipart/form-data">
                      <p class="card-description">Course info</p>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Instrument Name</label>
                            <div class="col-sm-9">
                              <input type="text" name="instrument" class="form-control" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Course Title</label>
                            <div class="col-sm-9">
                              <input type="text" name="c_title" class="form-control" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                      <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Trainer Name</label>
                            <div class="col-sm-9">
                              <select name='t_name' class="form-control">
                              <option>Select </option>
                                <option>Harish </option>
                                <option>Sujith</option>
                                <option>Barath</option>
                                <option>Sunil</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Last Update</label>
                            <div class="col-sm-9">
                              <input class="form-control" name="last_update" type="date" placeholder="dd/mm/yyyy" />
                            </div>
                          </div>
                        </div>
                      </div>
                     
                      <div class="row">
                      <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Course Fee</label>
                            <div class="col-sm-9">
                              <input type="text" name="c_fee" class="form-control" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Membership</label>
                            <div class="col-sm-4">
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios1" value="Free" checked /> Free </label>
                              </div>
                            </div>
                            <div class="col-sm-5">
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios2" value="Paid" /> Paid </label>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <p class="card-description">Course Details</p>
                      
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Course Image</label>
                            <div class="col-sm-9">
                              <input type="file" name="c_img" class="form-control" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Course Outline</label>
                            <div class="col-sm-9">
                              <input type="text" name="c_outline" class="form-control" />
                            </div>
                          </div>
                        </div>
                        
                      </div>
                      <div class="form-group">
                        <label for="exampleTextarea1">Objective</label>
                        <textarea
                          class="form-control"
                          id="exampleTextarea1"
                          rows="4" name="objective"
                        ></textarea>
                        
                      </div>
                      <div class="form-group">
                        <label for="exampleTextarea1">Eligibility</label>
                        <textarea
                          class="form-control"
                          id="exampleTextarea1"
                          rows="4" name="eligibility"
                        ></textarea>
                        
                      </div>
                      <button type="submit" class="btn btn-primary mr-2"> Submit </button>
                      <!-- <button class="btn btn-light">Cancel</button> -->
                    </form>
                  </div>
                </div>
              </div>
        <!-- main-panel ends -->
</div>


<?php include 'footer.php'?>