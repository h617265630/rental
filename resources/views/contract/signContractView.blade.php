@extends('layouts.master')
@section('content')

    <!-- content start -->
    <div class="admin-content">
        <div class="admin-content-body">
            <div class="am-cf am-padding am-padding-bottom-0">
                <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">签署合同</strong> / <small>sign Contract</small></div>
            </div>

            <hr/>

            <div class="am-g">
                <div class="am-u-sm-12 am-u-md-6 am-u-md-push-6">
                </div>
                <div class="am-u-sm-12 am-u-md-6 am-u-md-pull-6">
                    <form class="am-form am-form-horizontal" method="post" id="commentForm" action="{{url('/signContract')}}">
                        {{--<div class="am-form-group">--}}
                            {{--<label for="user-name" class="am-u-sm-3 am-form-label">首次入住时间</label>--}}
                            {{--<div class="am-u-sm-9">--}}
                                {{--<input type="text" id="start_time" name="start_time" class="datepicker" autocomplete="off" placeholder="首次入住时间">--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="am-form-group">--}}
                            {{--<label for="user-name" class="am-u-sm-3 am-form-label">预计到期时间</label>--}}
                            {{--<div class="am-u-sm-9">--}}
                                {{--<input type="text" id="end_time" name="end_time" class="datepicker"  autocomplete="off" placeholder="预计到期时间">--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        <div class="am-form-group">
                            <label for="user-name" class="am-u-sm-3 am-form-label">合同编号</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="contract_no" name="contract_no" placeholder="合同编号">
                            </div>
                        </div>


                        <div class="am-form-group">
                            <label for="user-name" class="am-u-sm-3 am-form-label">合同编号</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="contract_no" name="contract_no" placeholder="合同编号">
                            </div>
                        </div>

                        <div class="am-form-group">
                            <label for="user-name" class="am-u-sm-3 am-form-label">政策</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="provides" name="provides" placeholder="政策">
                            </div>
                        </div>

                        <div class="am-form-group">
                            <label for="user-name" class="am-u-sm-3 am-form-label">合同生效时间</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="contract_start_time" class="datepicker" name="contract_start_time" autocomplete="off" placeholder="合同生效时间">
                            </div>
                        </div>

                        <div class="am-form-group">
                            <label for="user-name" class="am-u-sm-3 am-form-label">合同到期时间</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="contract_end_time" class="datepicker" name="contract_end_time" autocomplete="off" placeholder="合同到期时间">
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="user-name" class="am-u-sm-3 am-form-label">楼宇</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="building_name" name="building_name" placeholder="楼宇">
                            </div>
                        </div>

                        <div class="am-form-group">
                            <label for="user-name" class="am-u-sm-3 am-form-label">房间号</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="room_no" name="room_no" placeholder="房间号">
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="user-name" class="am-u-sm-3 am-form-label">房间可用面积</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="room_space" name="room_space" placeholder="房间可用面积">
                            </div>
                        </div>

                        <div class="am-form-group">
                            <label for="user-name" class="am-u-sm-3 am-form-label">房间面积</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="rented_space" name="rented_space" placeholder="房间面积">
                            </div>
                        </div>

                        <div class="am-form-group">
                            <label for="user-name" class="am-u-sm-3 am-form-label">租金单价</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="unit_price" name="unit_price" placeholder="租金单价">
                            </div>
                        </div>

                        <div class="am-form-group">
                            <label for="user-name" class="am-u-sm-3 am-form-label">自动计算合同总价</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="total_price" name="total_price" placeholder="自动计算合同总价">
                            </div>
                        </div>
                        <div class="am-form-group">
                            <div class="am-u-sm-9 am-u-sm-push-3">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <button type="submit" class="am-btn am-btn-primary">签署</button>
                            </div>
                        </div>
                        <div class="am-form-group">
                            <div class="am-u-sm-9 am-u-sm-push-3">
                                @if(Session::has('msg'))
                                    <p style="color:indianred">{{Session::get('msg')}}</p>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script>
        $(function(){
            $(".datepicker").datepicker({
                language:"zh-CN",
                autoclose:true,
                clearBtn:true,
                todayBtn:true,
                format:"yyyy-mm-dd"
            });
        });

        $().ready(function() {
            $("#commentForm").validate({
                rules:{
                    start_time:{
                        required:true,
                   },
                    end_time:{
                        required:true,
                    },
                    contract_no:{
                        required:true,
                    },
                    provides:{
                        required:true,
                    },
                    contract_start_time:{
                        required:true,
                    },
                    contract_end_time:{
                        required:true,
                    },
                    building_name:{
                        required:true,
                    },
                    room_no:{
                        required:true,
                    },
                    room_space:{
                        required:true,
                    },
                    rented_space:{
                        required:true,
                    },
                    unit_price:{
                        required:true,
                    },
                    total_price:{

                    },
                 }
            });
        });
        </script>
        <footer class="admin-content-footer">
            <hr>
            <p class="am-padding-left">© 2019 passion fruit co.</p>
        </footer>

    </div>
    <!-- content end -->
@endsection
