@extends('layouts.master')
@section('content')

    <!-- content start -->
    <div class="admin-content">
        <div class="admin-content-body">
            <div class="am-cf am-padding am-padding-bottom-0">
                <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">登记楼宇</strong> / <small>regist Building</small></div>
            </div>

            <hr/>

            <div class="am-g">
                <div class="am-u-sm-12 am-u-md-6 am-u-md-push-6">
                </div>
                <div class="am-u-sm-12 am-u-md-6 am-u-md-pull-6">
                    <form class="am-form am-form-horizontal cmxform" id="commentForm" action="{{url('/registBuilding')}}" method="post">
                        <div class="am-form-group">
                            <label for="user-phone" class="am-u-sm-3 am-form-label">大楼名称</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="building_name" name="building_name" placeholder="大楼名称" >
                            </div>
                        </div>


                        <div class="am-form-group">
                            <div class="am-u-sm-9 am-u-sm-push-3">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <button type="submit" id ="btn" class="am-btn am-btn-primary">登记</button>
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

        <script src="http://static.runoob.com/assets/jquery-validation-1.14.0/lib/jquery.js"></script>
        <script src="http://static.runoob.com/assets/jquery-validation-1.14.0/dist/jquery.validate.min.js"></script>
        <script src="http://static.runoob.com/assets/jquery-validation-1.14.0/dist/localization/messages_zh.js"></script>
        <script>
            $().ready(function() {
                $("#commentForm").validate({
                    rules:{
                        building_name:{
                            required:true,
                        }
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
