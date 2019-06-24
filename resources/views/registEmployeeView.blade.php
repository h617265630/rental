@extends('layouts.master')
@section('content')

    <!-- content start -->
    <div class="admin-content">
        <div class="admin-content-body">
            <div class="am-cf am-padding am-padding-bottom-0">
                <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">登记员工</strong> / <small>regist Employee</small></div>
            </div>

            <hr/>

            <div class="am-g">
                <div class="am-u-sm-12 am-u-md-6 am-u-md-push-6">
                </div>
                <div class="am-u-sm-12 am-u-md-6 am-u-md-pull-6">
                    <form class="am-form am-form-horizontal">
                        <div class="am-form-group">
                            <label for="user-phone" class="am-u-sm-3 am-form-label">员工</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="company_admin_contact" placeholder="员工">
                            </div>
                        </div>

                        <div class="am-form-group">
                            <label for="user-phone" class="am-u-sm-3 am-form-label">员工身份证号</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="empolyee_name" placeholder="员工身份证号">
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="user-phone" class="am-u-sm-3 am-form-label">社保ID</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="social_insurance_id" placeholder="社保ID">
                            </div>
                        </div>

                        <div class="am-form-group">
                            <div class="am-u-sm-9 am-u-sm-push-3">
                                <button type="button" class="am-btn am-btn-primary">登记</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <footer class="admin-content-footer">
            <hr>
            <p class="am-padding-left">© 2014 AllMobilize, Inc. Licensed under MIT license.</p>
        </footer>

    </div>
    <!-- content end -->
@endsection
