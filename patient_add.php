<form action="patient_db.php" method="POST">
    <!-- <form  id="form_inset" method="POST"> -->
    <div class="modal fade" id="modal-lg-add">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">เพิ่มผู้รับบริการ</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>


                <div class="modal-body">

                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="hn">HN</label>
                                <input type="text" class="form-control " id="hn" name="hn" placeholder="HN"
                                    maxlength="7">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="id_card">เลขบัตรประชาชน</label>
                                <input type="text" class="form-control " id="id_card" name="id_card"
                                    placeholder="เลขบัตรประชาชน" maxlength="13">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="passport">Passport</label>
                                <input type="text" class="form-control " id="passport" name="passport"
                                    placeholder="Passport" maxlength="15">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label for="prefix_id">คำนำหน้า</label>
                                <select class="form-control select2bs4 " id="prefix_id" name="prefix_id"
                                    style="width: 100%;" required>
                                    <option value="">-- กรุณาเลือก --</option>
                                    <?php 
                                                $sql1 = "SELECT prefix_id, prefix_name FROM prefix WHERE status_at_id <> 2";
                                                $result1 = mysqli_query($conn, $sql1);
                                                while($rows1 = mysqli_fetch_array($result1)) { ?>
                                    <option value="<?php echo $rows1['prefix_id'] ?>">
                                        <?php echo $rows1["prefix_name"]; ?> </option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label for="first_name">ชื่อ</label>
                                <input type="text" class="form-control " id="first_name" name="first_name"
                                    placeholder="ชื่อ" required>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label for="last_name">นามสกุล</label>
                                <input type="text" class="form-control " id="last_name" name="last_name"
                                    placeholder="นามสกุล" required>
                            </div>
                        </div>



                        <div class="col-6">
                            <div class="form-group">
                                <label for="birth_date">วัน/เดือน/ปี(เกิด)<span style = "font-size : 14px; color: red;" class="ml-2">ปี (ค.ศ.)</span></label>
                                <input type="date" class="form-control " id="birth_date" name="birth_date"
                                    placeholder="birth_date" required>
                            </div>
                        </div>


                        <div class="col-6">
                            <div class="form-group">
                                <label for="sex">เพศ</label>
                                <select class="form-control select2bs4 " id="sex_id" name="sex_id" style="width: 100%;"
                                    required>
                                    <option value="">-- กรุณาเลือก --</option>
                                    <?php 
                                                $sql2 = "SELECT sex_id, sex_name FROM sex WHERE status_at_id <> 2";
                                                $result2 = mysqli_query($conn, $sql2);
                                                while($rows2 = mysqli_fetch_array($result2)) { ?>
                                    <option value="<?php echo $rows2['sex_id'] ?>">
                                        <?php echo $rows2["sex_name"]; ?> </option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label for="nationality">สัญชาติ</label>
                                <select class="form-control select2bs4 " id="nationality_id" name="nationality_id"
                                    style="width: 100%;" required>
                                    <option value="">-- กรุณาเลือก --</option>
                                    <?php 
                                                $sql3 = "SELECT nationality_id, nationality_name FROM nationality WHERE status_at_id <> 2";
                                                $result3 = mysqli_query($conn, $sql3);
                                                while($rows3 = mysqli_fetch_array($result3)) { ?>
                                    <option value="<?php echo $rows3['nationality_id'] ?>">
                                        <?php echo $rows3["nationality_name"]; ?> </option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label for="address">ที่อยู่ <br><span style = "font-size : 14px; color: red;">(ตัวอย่าง : 885 ม.5 ถ.สุวรรณศร ต.อรัญประเทศ อ.อรัญประเทศ จ.สระแก้ว)</span></label>
                                <textarea class="form-control" rows="3" name="address" placeholder="ที่อยู่"
                                    required></textarea>
                            </div>

                        </div>

                        <div class="col-6">

                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label for="phone">เบอรโทรศัพท์</label>
                                <input type="text" class="form-control" id="phone" name="phone"
                                    placeholder="เบอร์โทรศัพท์" maxlength="10" required>
                            </div>
                        </div>

                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.modal-body -->
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">ยกเลิก</button>
                    <button type="submit" name="patient_add" class="btn btn-primary">บันทึก</button>
                </div>

            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
</form>