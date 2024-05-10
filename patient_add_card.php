<form action="patient_db.php" method="POST">
    <!-- <form  id="form_inset" method="POST"> -->
    <div class="modal fade" id="modal-lg-add2">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title mr-2">เพิ่มผู้รับบริการ</h4>
                    <button type="button" name="btnStartIDCard" class="btn btn-primary" onClick="start_read();"><span
                            class="fa fa-credit-card"></span> อ่านบัตรประชาชน</button>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>


                <div class="modal-body">
                    <div class="row">
                        <div class="col-4">
                            <div class="form-group">
                                <label for="hn">HN</label>
                                <input type="text" class="form-control " id="hn" name="hn" placeholder="HN"
                                    maxlength="7">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="id_card">เลขบัตรประชาชน</label>
                                <p hidden class="form-control" id="CitizenNo"></p>
                                <input type="text" class="form-control" id="CitizenNoValue" name="id_card"
                                    placeholder="เลขบัตรประชาชน" maxlength="13">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="passport">Passport</label>
                                <input type="text" class="form-control " id="passport" name="passport"
                                    placeholder="Passport" maxlength="15">
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="form-group">
                                <label for="prefix_name">คำนำหน้า</label>
                                <p hidden class="form-control" id="TitleNameTh"></p>
                                <input type="text" class="form-control" id="TitleNameThValue" name="prefix_name"
                                    placeholder="คำนำหน้า">
                            </div>

                        </div>

                        <div class="col-4">
                            <div class="form-group">
                                <label for="first_name">ชื่อ</label>
                                <p hidden class="form-control" id="FirstNameTh"></p>
                                <input type="text" class="form-control " id="FirstNameThValue" name="first_name"
                                    placeholder="ชื่อ" required>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="form-group">
                                <p hidden class="form-control" id="LastNameTh"></p>
                                <label for="last_name">นามสกุล</label>
                                <input type="text" class="form-control " id="LastNameThValue" name="last_name"
                                    placeholder="นามสกุล" required>
                            </div>
                        </div>





                        <div class="col-4">

                            <div class="form-group">
                                <p hidden class="form-control" id="BirthDate"></p>
                                <label for="birth_date">วัน/เดือน/ปี(เกิด)<span style = "font-size : 14px; color: red;" class="ml-2">(YY/MM/DD)</span></label>
                                <input type="text" class="form-control " id="BirthDateValue" name="birth_date"
                                    placeholder="วัน/เดือน/ปี(เกิด)" required>
                            </div>
                        </div>

                      
                            <div class="form-group">
                                <p hidden class="form-control" id="Gender"></p>
                                <input type="hidden" class="form-control " id="GenderValue" name="sex_id" required>
                            </div>
                       


                        <div class="col-4">
                            <div class="form-group">
                                <p hidden class="form-control" id="GenderText"></p>
                                <label for="sex">เพศ</label>
                                <input type="text" class="form-control " id="GenderTextValue" placeholder="เพศ"
                                    required>
                            </div>
                        </div>

                       
                            <div class="form-group">
                                <p hidden class="form-control" id="nationality_id"></p>
                                <input type="hidden" value="1" class="form-control " id="nationality_id"
                                    name="nationality_id" required>
                            </div>
                    


                        <div class="col-4">
                           
                        </div>

                        <div class="col-12"><hr></div>

                        <div class="col-4">
                            <div class="form-group">
                                <p hidden class="form-control" id="HomeNo"></p>
                                <label for="home_no">บ้านเลขที่</label>
                                <input type="text" class="form-control " id="HomeNoValue" name="home_no"
                                    placeholder="บ้านเลขที่" required>
                            </div>
                        </div>

                        <div class="col-4">
                      
                            <div class="form-group">
                                <p hidden class="form-control" id="Moo"></p>
                                <label for="moo">หมู่ที่</label>
                                <input type="text" class="form-control " id="MooValue" name="moo" placeholder="หมู่ที่">
                            </div>
                        </div>


                        <div class="col-4">
                            <div class="form-group">
                                <p hidden class="form-control" id="Soi"></p>
                                <label for="soi">ซอย</label>
                                <input type="text" class="form-control " id="SoiValue" name="soi" placeholder="ซอย">
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="form-group">
                                <p hidden class="form-control" id="Road"></p>
                                <label for="road">ถนน</label>
                                <input type="text" class="form-control " id="RoadValue" name="road" placeholder="ถนน">
                            </div>
                        </div>



                        <div class="col-4">
                            <div class="form-group">
                                <p hidden class="form-control" id="Tumbol"></p>
                                <label for="tumbol">ตำบล</label>
                                <input type="text" class="form-control " id="TumbolValue" name="tumbol"
                                    placeholder="ตำบล">
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="form-group">
                                <p hidden class="form-control" id="Amphur"></p>
                                <label for="amphur">อำเภอ</label>
                                <input type="text" class="form-control " id="AmphurValue" name="amphur"
                                    placeholder="อำเภอ">
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="form-group">
                                <p hidden class="form-control" id="Province"></p>
                                <label for="province">จังหวัด</label>
                                <input type="text" class="form-control " id="ProvinceValue" name="province"
                                    placeholder="จังหวัด">
                            </div>
                        </div>


                        <div class="col-4">
                            <div class="form-group">
                                <label for="phone">เบอรโทรศัพท์</label>
                                <input type="text" class="form-control" id="phone" name="phone"
                                    placeholder="เบอร์โทรศัพท์" maxlength="10" required>
                            </div>

                        </div>


                 
                </div>
            </div>


            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">ยกเลิก</button>
                <button type="submit" name="patient_add_card" class="btn btn-primary">บันทึก</button>
            </div>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
</form>