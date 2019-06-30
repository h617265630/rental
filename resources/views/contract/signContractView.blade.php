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
                        <div class="am-form-group" id="building">
                            <label for="user-phone" class="am-u-sm-3 am-form-label">楼宇</label>
                            <div class="am-u-sm-9">
                                <select class="building" name="building_id" id="building_id" data-am-selected >
                                </select>
                            </div>
                        </div>
                        <div class="am-form-group" id="building">
                            <label for="user-phone" class="am-u-sm-3 am-form-label">房间号</label>
                            <div class="am-u-sm-9">
                                <select  name="room_no" class="room" id="room_no"data-am-selected  >
                                </select>
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="user-name" class="am-u-sm-3 am-form-label">房间可用面积</label>
                            <div class="am-u-sm-9">
                                <input type="hidden" id="room_space" class="room_space_input" name="room_space" value="" placeholder="房间可用面积">
                                <p class="room_space"></p>
                            </div>
                        </div>

                        <div class="am-form-group">
                            <label for="user-name" class="am-u-sm-3 am-form-label">房间面积</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="rented_space" class="rented_space" name="rented_space" placeholder="房间面积">
                            </div>
                        </div>

                        <div class="am-form-group">
                            <label for="user-name" class="am-u-sm-3 am-form-label">租金单价</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="unit_price" class="unit_price" name="unit_price" placeholder="租金单价">
                            </div>
                        </div>

                        <div class="am-form-group">
                            <label for="user-name" class="am-u-sm-3 am-form-label">自动计算合同总价</label>
                            <div class="am-u-sm-9">
                                <input type="hidden" id="total_price" class="total_price_input" value="" name="total_price">
                                <p class="total_price">输入单价和面积计算总价</p>
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

                            $('.building').append('<option class=".building_id" value="'+id+'">'+name+'</option>');
                        }
                    }});

                $(".building").change(function(){
                    var building_id = $('.building').val();
                    $.ajax({url:'/site/getRoomSpace/'+building_id,
                            type:'get',
                            dataType:'json',
                            data:{
                                room_space:$('room_space').val()
                            }.body,success:function(result){
                                $('.room_space').text(result[0]['a_space']+' 平方米');
                                $('.room_space_input').val(result[0]['a_space']);
                            }
                        }


                    )
                })


            })

        </script>

    <script>
        $('.building').change(function(){
            var building_no = $('.building').val();

                $.ajax({url:'/site/getRooms/'+building_no,
                    type:'get',
                    dataType:'json',
                    data: {
                        room_no :$('room_no').val(),
                    }.body,success:function(result){
                        for(i=0;i<result.length;i++)
                        {
                            var room_no = result[i]['room_no'];

                            $('.room').append('<option class= ".roomOption" value="'+room_no+'">'+room_no+'</option>');
                        }
                    }});
        })

    </script>
        <script>
            $(".rented_space").change(function(){
                var unit_price = $('.unit_price').val();
                var total_price = 0;
                if(unit_price&&unit_price!=null){
                    var total_price = $('.unit_price').val()*$('.rented_space').val();
                    $('.total_price').text(total_price +'元');
                    $('.total_price_input').val(total_price);
                }
            })
            $(".unit_price").change(function(){
                var rented_space = $('.rented_space').val();
                var total_price =0;
                if (rented_space&&rented_space!=null){
                    var total_price = $('.unit_price').val()*$('.rented_space').val();
                    $('.total_price').text(total_price +' 元');
                    alert(total_price);
                    $('.total_price_input').val(total_price);
                }
            })
        </script>



        <footer class="admin-content-footer">
            <hr>
            <p class="am-padding-left">© 2019 passion fruit co.</p>
        </footer>

    </div>
    <!-- content end -->
@endsection
