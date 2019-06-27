@extends('layouts.master')
@section('content')
    <!-- content start -->
    <div class="admin-content">
        <div class="admin-content-body">
            <div class="am-cf am-padding am-padding-bottom-0">
                <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">合同</strong> / <small>Contract</small></div>
            </div>

            <hr>

            <div class="am-g">
                <div class="am-u-sm-12 am-u-md-6">
                    <div class="am-btn-toolbar">
                        <div class="am-btn-group am-btn-group-xs">
                            <button type="button" class="am-btn am-btn-default"><span class="am-icon-plus"></span> 新增</button>
                        </div>
                    </div>
                </div>
                <div class="am-u-sm-12 am-u-md-3">
                </div>
                <div class="am-u-sm-12 am-u-md-3">
                    <div class="am-input-group am-input-group-sm">
                        <input type="text" class="am-form-field">
                        <span class="am-input-group-btn">
            <button class="am-btn am-btn-default" type="button">搜索</button>
          </span>
                    </div>
                </div>
            </div>

            <div class="am-g">
                <div class="am-u-sm-12">
                    <form class="am-form">
                        <table class="am-table am-table-striped am-table-hover table-main">
                            <thead>
                            <tr>
                              <th class="table-title">首次入住时间</th><th class="table-title">预计到期时间</th><th class="table-title">合同编号</th><th class="table-title">政策</th>
                                <th class="table-title">合同生效时间</th><th class="table-title">合同到期时间</th><th class="table-title">楼宇</th><th class="table-title">房间号</th>
                                <th class="table-title">房间可用面积</th><th class="table-title">房间面积</th><th class="table-title">租金单价</th><th class="table-title">自动计算合同总价</th>




                                <th class="table-set">操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $d)
                            <tr>
                                <td>{{$d->start_time}}</td>
                                <td>{{$d->end_time}}</td>
                                <td>{{$d->contract_no}}</td>
                                <td>{{$d->provides}}</td>
                                <td>{{$d->contract_start_time}}</td>
                                <td>{{$d->contract_end_time}}</td>
                                {{--<td>{{$d->building_name}}</td>--}}
                                {{--<td>{{$d->room_no}}</td>--}}
                                {{--<td>{{$d->romm_space}}</td>--}}
                                {{--<td>{{$d->rented_space}}</td>--}}
                                <td>{{$d->unit_price}}</td>
                                {{--<td>{{$d->total_price}}</td>--}}
                                <td>
                                    <div class="am-btn-toolbar">
                                        <div class="am-btn-group am-btn-group-xs">
                                            <button class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                                            <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span> 删除</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="am-cf">
                            共 15 条记录
                            <div class="am-fr">
                                <ul class="am-pagination">
                                    <li class="am-disabled"><a href="#">«</a></li>
                                    <li class="am-active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#">»</a></li>
                                </ul>
                            </div>
                        </div>
                        <hr />
                        <p>注：.....</p>
                    </form>
                </div>

            </div>
        </div>

        <footer class="admin-content-footer">
            <hr>
            <p class="am-padding-left">© 2019 passion fruit co.</p>
        </footer>

    </div>
    <!-- content end -->
@endsection
