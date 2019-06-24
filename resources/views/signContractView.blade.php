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
                            <label for="user-name" class="am-u-sm-3 am-form-label">首次入住时间</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="start_time" placeholder="首次入住时间">
                            </div>
                        </div>

                        <div class="am-form-group">
                            <label for="user-name" class="am-u-sm-3 am-form-label">预计到期时间</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="end_time" placeholder="预计到期时间">
                            </div>
                        </div>

                        <div class="am-form-group">
                            <label for="user-name" class="am-u-sm-3 am-form-label">合同编号</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="contract_no" placeholder="合同编号">
                            </div>
                        </div>

                        <div class="am-form-group">
                            <label for="user-name" class="am-u-sm-3 am-form-label">政策</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="company_name" placeholder="政策">
                            </div>
                        </div>

                        <div class="am-form-group">
                            <label for="user-name" class="am-u-sm-3 am-form-label">合同生效时间</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="contract_start_time" placeholder="合同生效时间">
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="user-name" class="am-u-sm-3 am-form-label">合同到期时间</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="contract_end_time" placeholder="合同到期时间">
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="user-name" class="am-u-sm-3 am-form-label">楼宇</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="company_name" placeholder="楼宇">
                            </div>
                        </div>

                        <div class="am-form-group">
                            <label for="user-name" class="am-u-sm-3 am-form-label">房间号</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="room_no" placeholder="房间号">
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="user-name" class="am-u-sm-3 am-form-label">房间可用面积</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="room_space" placeholder="房间可用面积">
                            </div>
                        </div>

                        <div class="am-form-group">
                            <label for="user-name" class="am-u-sm-3 am-form-label">房间面积</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="rented_space" placeholder="房间面积">
                            </div>
                        </div>

                        <div class="am-form-group">
                            <label for="user-name" class="am-u-sm-3 am-form-label">租金单价</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="unit_price" placeholder="租金单价">
                            </div>
                        </div>

                        <div class="am-form-group">
                            <label for="user-name" class="am-u-sm-3 am-form-label">自动计算合同总价</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="company_name" placeholder="自动计算合同总价">
                            </div>
                        </div>
                        <div class="am-form-group">
                            <div class="am-u-sm-9 am-u-sm-push-3">
                                <button type="button" class="am-btn am-btn-primary">签署</button>
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
