<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>

<div class="right_col" role="main">

          <!-- Agency List Hotel -->
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="dashboard_graph">

                <div class="row x_title">
                  <div class="col-md-6">
                    <h3>Hotel Partner<small></small></h3> <br/>
                  </div>
                  <!-- <div class="container">
                    <div class="col-md-10">
                      <div class="dropdown">
                        <button class="btn btn-primary" type="button" >
                          <a href="<?= site_url()?>/admin/add_partner_form"><p style="color:white">Add Partner</p></a>
                        </button>
                      </div>
                    </div>
                  </div> -->
                </div>

                <div class="row">

                <!-- Picture 1 -->

                  <div class="col-sm-6 col-md-4" >
                    <form>
                      <div class="form-group">
                        <label for="partner_name">Partner Name:</label>
                        <input type="text" class="form-control" id="partner_name" name="partner_name">
                      </div>
                      <div class="form-group">
                        <label for="locate">Location:</label>
                        <input type="text" class="form-control" id="locate" name="partner_location">
                      </div>
                      <div class="form-group">
                        <label for="room">Room:</label>
                        <input type="number" class="form-control" id="room" name="room">
                      </div>
                      <div class="form-group">
                        <label for="facilities"> Facilities:</label>
                      </div>
                      <div class="form-group">
                        <label for="desc">Description:</label>
                        <textarea type="textarea" class="form-control" id="desc" name="desc"> </textarea>
                      </div>
                        <label for="logo">Partner Logo:</label><span></span>
                        <label class="btn btn-primary">
                            Browse&hellip; <input type="file" style="display: none;" name="logo_partner" id="logo_partner">
                        </label>
                      <div class="form-group">
                          <button type="submit" class="btn btn-primary">Add</button>
                      </div>
                      </form>
                  </div>
                </div> 
                <div class="clearfix"></div>
              </div>
            </div>
          </div>
</div>
<br/>