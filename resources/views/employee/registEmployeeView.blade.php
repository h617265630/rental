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
                    <form class="am-form am-form-horizontal cmxform" id="commentForm" action="{{url('/registEmployee')}}" method="post">
                        <div class="am-form-group">
                            <label for="user-phone" class="am-u-sm-3 am-form-label">所属公司</label>
                            <div class="am-u-sm-9">
                                <select  name="company_id" id="company_id" data-am-selected >
                                </select>
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="user-phone" class="am-u-sm-3 am-form-label">员工</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="employee_name" name="employee_name" placeholder="员工" >
                            </div>
                        </div>

                        <div class="am-form-group">
                            <label for="user-phone" class="am-u-sm-3 am-form-label">员工身份证号</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="employee_id" name="employee_id" placeholder="员工身份证号">
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="user-phone" class="am-u-sm-3 am-form-label">社保ID</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="social_insurance_id" name="social_insurance_id" placeholder="社保ID" >
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="user-phone" class="am-u-sm-3 am-form-label">手机号</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="phone" name="phone" placeholder="手机号" >
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="user-phone" class="am-u-sm-3 am-form-label">职务</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="job" name="job" placeholder="职务" >
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
                        employee_id:{
                            required:true,
                            minlength:5,
                        },
                        employee_name:{
                            required:true,
                        },
                        social_insurance_id:{
                            required:true,
                        }
                    }
                });
            });
        </script>

        <script>
            {{--<option v-for="r in rows" value="{{r.id}}">{{r.building_name}}</option>--}}
            $(document).ready(function(){
                $.ajax({url:'/site/getCompany',
                    type:'get',
                    dataType:'json',
                    data: {
                        building_no :$('code_id').val(),
                        building_name :$('building_name').val(),
                    }.body,success:function(result){
                        for(i=0;i<result.length;i++)
                        {
                            var id = result[i]['code_id'];
                            var name = result[i]['name'];

                            $('select').append('<option value="'+id+'">'+name+'</option>');
                        }
                    }});
            })

        </script>


        <footer class="admin-content-footer">
            <hr>
            <p class="am-padding-left">© 2019 passion fruit co.</p>
        </footer>

    </div>
    <!-- content end -->
@endsection
