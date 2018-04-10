<div class="form-horizontal form-material">
                                    <div class="form-group">
                                        <label class="col-sm-12">تفعيل الحساب</label>
                                        <div class="col-sm-12">
                                            {{ Form::select('false', ['false', 'true'],null,['class' => 'form-control form-control-line']) }}
                                            <!--select class="form-control form-control-line">
                                            	<option>false</option>
                                                <option>true</option>
                                            </select-->
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-12">اختيار الخدمة</label>
                                        <div class="col-sm-12">
                                            {{ Form::select('0', ['0', '1', '2','3'],null,['class' => 'form-control form-control-line']) }}
                                            <!--select class="form-control form-control-line">
                                            	<option>0</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                               
                                            </select-->
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-12">اختيار نوع المستخدم</label>
                                        <div class="col-sm-12">
                                             {{ Form::select('default', ['default', 'admin'],null,['class' => 'form-control form-control-line'])}}
                                            <!--select class="form-control form-control-line">
                                                <option>default</option>
                                                <option>admin</option>
                                            </select-->
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success">تعديل</button>
                                        </div>
                                   </div>
            			</div>