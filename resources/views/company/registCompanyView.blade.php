@extends('layouts.master')
@section('content')

    <!-- content start -->
    <div class="admin-content">
        <div class="admin-content-body">
            <div class="am-cf am-padding am-padding-bottom-0">
                <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">登记公司</strong> / <small>regist Company</small></div>
            </div>

            <hr/>

            <div class="am-g">
                <div class="am-u-sm-12 am-u-md-6 am-u-md-push-6">
                </div>
                <div class="am-u-sm-12 am-u-md-6 am-u-md-pull-6">
                    <form class="am-form am-form-horizontal" id="commentForm" method="post" action="{{url('/registCompany')}}">
                        <div class="am-form-group">
                            <label for="user-name" class="am-u-sm-3 am-form-label">企业名称</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="company_name" name="company_name" placeholder="企业名称" >
                            </div>
                        </div>

                        <div class="am-form-group">
                            <label for="user-name" class="am-u-sm-3 am-form-label">社会统一信用代码</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="code_id" name="code_id" placeholder="社会统一信用代码" >
                            </div>
                        </div>

                        <div class="am-form-group">
                            <label for="user-phone" class="am-u-sm-3 am-form-label">公司分类</label>
                            <div class="am-u-sm-9">
                                {{--<input type="text" id="category" name="category" placeholder="公司分类" >--}}
                                <select  name="category" id="category" data-am-selected >
                                    <option value="科技">科技</option>
                                    <option value="科技">文化</option>
                                    <option value="科技">商务</option>
                                </select>
                            </div>
                        </div>

                        <div class="am-form-group">
                            <label for="user-QQ" class="am-u-sm-3 am-form-label">公司主营业务</label>
                            <div class="am-u-sm-9">
                                <input type="text"  id="main_business" name="main_business" placeholder="公司主营业务">
                            </div>
                        </div>


                        <div class="am-form-group">
                            <label for="user-phone" class="am-u-sm-3 am-form-label">法人姓名</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="corporation" name="corporation" placeholder="法人姓名">
                            </div>
                        </div>

                        <div class="am-form-group">
                            <label for="user-phone" class="am-u-sm-3 am-form-label">法人联系方式</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="corporation_contact" name="corporation_contact" placeholder="法人联系方式">
                            </div>
                        </div>

                        <div class="am-form-group">
                            <label for="user-phone" class="am-u-sm-3 am-form-label">法人身份证号</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="corporation_id" name="corporation_id" placeholder="法人身份证号">
                            </div>
                        </div>

                        <div class="am-form-group">
                            <label for="user-phone" class="am-u-sm-3 am-form-label">户籍</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="household" name="household" placeholder="户籍">
                            </div>
                        </div>

                        <div class="am-form-group">
                            <label for="user-phone" class="am-u-sm-3 am-form-label">法人毕业院校</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="graduated_school" name="graduated_school" placeholder="法人毕业院校">
                            </div>
                        </div>

                        <div class="am-form-group">
                            <label for="user-phone" class="am-u-sm-3 am-form-label ">法人毕业年份</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="graduated_time" class="datepicker"  autocomplete="off" name="graduated_time" placeholder="法人毕业年份">
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="user-phone" class="am-u-sm-3 am-form-label">法人学位</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="graduated_degree" name="graduated_degree" placeholder="法人学位">
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="user-phone" class="am-u-sm-3 am-form-label">企业实际负责人姓名</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="company_admin_name" name="company_admin_name" placeholder="企业实际负责人姓名">
                            </div>
                        </div>

                        <div class="am-form-group">
                            <label for="user-phone" class="am-u-sm-3 am-form-label">负责人电话</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="contact" name="contact" placeholder="负责人电话">
                            </div>
                        </div>
                        <div class="am-form-group">
                            <div class="am-u-sm-9 am-u-sm-push-3">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">

                                <button type="submit" class="am-btn am-btn-primary">登记</button>
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
                        company_name:{
                            required:true,
                        },
                        code_id:{
                            required:true,
                        },
                        category:{
                            required:true,
                        },
                        main_business:{
                            required:true,
                        },
                        corporation:{
                            required:true,
                        },
                        corporation_id:{
                            required:true,
                        },
                        corporation_contact:{
                            required:true,
                        },
                        household:{
                            required:true,
                        },
                        graduated_school:{
                            required:true,
                        },
                        graduated_time:{
                            required:true,
                        },
                        graduated_degree:{
                            required:true,
                        },
                        company_admin_name:{
                            required:true,
                        },
                        contact:{
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
        {{--<script>--}}
            {{--function submitForm(){--}}
                {{--var btn = document.getElementById('submit');--}}
                {{--btn.submit();--}}
            {{--}--}}
        {{--</script>--}}
    </div>
    <!-- content end -->
@endsection
