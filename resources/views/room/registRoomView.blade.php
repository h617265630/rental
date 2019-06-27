@extends('layouts.master')
@section('content')

    <!-- content start -->
    <div class="admin-content">
        <div class="admin-content-body">
            <div class="am-cf am-padding am-padding-bottom-0">
                <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">登记房间</strong> / <small>regist Room</small></div>
            </div>

            <hr/>

            <div class="am-g">
                <div class="am-u-sm-12 am-u-md-6 am-u-md-push-6">
                </div>
                <div class="am-u-sm-12 am-u-md-6 am-u-md-pull-6">
                    <form class="am-form am-form-horizontal cmxform" id="commentForm" action="{{url('/registEmployee')}}" method="post">

                        <div class="am-form-group" id="building">
                            <label for="user-phone" class="am-u-sm-3 am-form-label">楼宇</label>
                            <div class="am-u-sm-9">
                                <select  name="building_no" id="building_no" data-am-selected >
                                </select>
                            </div>
                        </div>

                        <div class="am-form-group">
                            <label for="user-phone" class="am-u-sm-3 am-form-label">房间号</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="room_no" name="room_no" placeholder="房间号" >
                            </div>
                        </div>

                        <div class="am-form-group">
                            <label for="user-phone" class="am-u-sm-3 am-form-label">房价面积</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="room_space" name="room_space" placeholder="房间面积">
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
        <div id="app">

        </div>

        <script src="http://static.runoob.com/assets/jquery-validation-1.14.0/lib/jquery.js"></script>
        <script src="http://static.runoob.com/assets/jquery-validation-1.14.0/dist/jquery.validate.min.js"></script>
        <script src="http://static.runoob.com/assets/jquery-validation-1.14.0/dist/localization/messages_zh.js"></script>
        <script>
            $().ready(function() {
                $("#commentForm").validate({
                    rules:{
                        room_no:{
                            required:true,
                            minlength:5,
                        },
                        room_space:{
                            required:true,
                        },
                    }
                });
            });
        </script>
        <script>
            {{--<option v-for="r in rows" value="{{r.id}}">{{r.building_name}}</option>--}}
        $(document).ready(function(){
            $.ajax({url:'/site/getBuilding',
                    type:'get',
                    dataType:'json',
                    data: {
                    building_no :$('building_no').val(),
                    building_name:$('building_name').val()
                }.body,success:function(result){
                for(i=0;i<result.length;i++)
                {
                    var id = result[i]['id'];
                    var name = result[i]['building_name'];

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
