<div class="row" id="userCreateID">
    <div class="col-md-12" v-if="calculating">
            <div class="row">
                <div class="col-sx-12 col-sm-12 col-md-8 max-width-717 offset-md-2">
                    <section class="panel">
                    <div class="panel-heading">
                        @{{ form.title }}
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sx-12 col-sm-3 col-md-3">
                                <div class="text-center">
                                    <img :src="form.img != '' ? form.img : '/img/user-deffau.svg' " v-on:click="setImg" class="img-responsive cursor">
                                </div>
                            </div>
                            <div class="col-sx-12 col-sm-9 col-md-9">
                                <div class="form-group">
                                    <label class="control-label" for="fullName">
                                        Họ và tên: <span class="text-danger">*</span>
                                    </label>
                                    <input class="form-control" type="text" name="fullName" v-model="form.fullName" required="">
                                </div>
                                <div class="row">
                                    <div class="col-sx-12 col-sm-8 col-md-8">
                                        <div class="form-group">
                                            <label class="control-label" for="code">
                                                Mã nhân viên: <span class="text-danger">*</span>
                                            </label>
                                            <input class="form-control" type="text" name="code" v-model="form.code" required="" placeholder="NV_0001">
                                        </div>
                                    </div>
                                    <div class="col-sx-12 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <label for="sex">Giới tính:</label>
                                            <select v-model="form.sex" name="sex" class="form-control">
                                                <option value="">Chọn giới tính</option>
                                                <option value="Nam">Nam</option>
                                                <option value="Nữ">Nữ</option>
                                                <option value="Không tiết lộ">Không tiết lộ</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sx-12 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label class="control-label" for="dateRange">
                                        Ngày sinh: <span class="text-danger">*</span>
                                    </label>
                                    <datepicker class="form-control" v-model="form.dateRange"></datepicker>
                                </div> 
                            </div>
                            <div class="col-sx-12 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label class="control-label" for="phone">
                                        Điện thoại: <span class="text-danger">*</span>
                                    </label>
                                    <number class="form-control" type="text" name="phone" required="" v-model="form.phone"></number>
                                </div>
                            </div>
                            <div class="col-sx-12 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label class="control-label" for="email">
                                        Email: <span class="text-danger">*</span>
                                    </label>
                                    <input class="form-control" type="text" name="email" v-model="form.email" required="">
                                </div> 
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sx-12 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label class="control-label" for="dateWork">
                                        Ngày vào làm: <span class="text-danger">*</span>
                                    </label>
                                    <datepicker class="form-control" v-model="form.dateWork"></datepicker>
                                </div> 
                            </div>
                            <div class="col-sx-12 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label class="control-label" for="idCard">
                                        CMND: <span class="text-danger">*</span>
                                    </label>
                                    <number class="form-control" type="text" name="idCard" v-model="form.idCard" required=""></number>
                                </div>
                            </div>
                            <div class="col-sx-12 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label class="control-label" for="positionsID">
                                        Chức vụ: <span class="text-danger">*</span>
                                    </label>
                                    <select class="form-control" v-model="form.positionsID" name="positionsID">
                                        <option value="">Chọn chức vụ</option>
                                        <option v-for="( item , index ) in positions" :value="item.id">     @{{item.name}}
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="control-label" for="info">
                                Giới thiệu: <span class="text-danger">*</span>
                            </label>
                            <textarea class="form-control" name="info" rows="3" v-model="form.info"></textarea>
                        </div> 
                        <div class="form-group">
                            <label class="control-label" for="address">
                                Địa chỉ: <span class="text-danger">*</span>
                            </label>
                            <input class="form-control" type="text" name="address" v-model="form.address" required="">
                        </div>
                        <div class="row">
                            <div class="col-sx-12 col-sm-4 col-md-4">
                                <div class="form-group">
                                <label for="provincesID">Tỉnh / Thành phố:</label>
                                    <select v-model="form.provincesID" name="provincesID" class="form-control" @change="LoadDistrict()">
                                        <option value="">Chọn Tỉnh / Thành phố</option>
                                        <option v-for="( provinces_item , provinces_index ) in provinces" :value="provinces_item.id">@{{provinces_item.name}}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sx-12 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label for="districtID">Quận / Huyện:</label>
                                    <select v-model="form.districtID" name="districtID" class="form-control" :disabled="form.provincesID == ''" @change="LoadWards()">
                                        <option value="">Chọn Quận / Huyện</option>
                                        <option v-for="( district_item , district_index ) in districts" :value="district_item.id">@{{district_item.name}}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sx-12 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label for="wardID">Phường / Xã:</label>
                                    <select v-model="form.wardID" name="wardID"  :disabled="form.districtID == ''" class="form-control" style="text-transform: capitalize;">
                                        <option value="">Chọn phường xã</option>
                                        <option v-for="( wards_item , wards_index ) in wards" :value="wards_item.id">@{{wards_item.name}}</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sx-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="nation">
                                        Dân tộc: <span class="text-danger">*</span>
                                    </label>
                                    <input class="form-control" type="text" name="nation" v-model="form.nation" required="">
                                </div>
                            </div>
                            <div class="col-sx-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="religion">
                                        Tốn giáo: <span class="text-danger">*</span>
                                    </label>
                                    <input class="form-control" type="text" name="religion" v-model="form.religion" required="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer text-right">
                        <a href="javascript:history.back()" class="btn btn-danger">
                            <i class="fa fa-chevron-left"></i> Trở lại
                        </a>
                        <button type="button" class="btn btn-success" @click="create('close')">
                            <i v-if="form.isLoading" class="fa fa-spinner fa-pulse fa-fw"></i>
                            <i v-else class=" fa fa-pencil"></i>
                            Lưu và kết thúc
                        </button>
                        <button type="button" class="btn btn-success" @click="create('new')">
                            <i v-if="form.isLoadingNew" class="fa fa-spinner fa-pulse fa-fw"></i>
                            <i v-else class=" fa fa-plus"></i>
                            Lưu và tiếp tục
                        </button>
                    </div>
                </section>
                </div>
            </div>
    </div>
    <div v-else></div>
</div>